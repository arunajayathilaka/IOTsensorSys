<?php
    //including the require file
require '../include/DbOperation.php';
require '../libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

//creating a slim instane
$app= new \Slim\Slim();

//method to display response
function echoResponse($status_code,$response){
    
    //getting app instance
    $app=\Slim\Slim::getInstance();
    
    //setting htpp response code
    $app->status($status_code);
    
    //setting response content type to json
    $app->contentType('application/json');
    
    //displaying the response in json format
    echo json_encode($response);
}

function verifyRequiredParams($required_fields){
     //assuming ther is no error
    $error=false;
    
    //error fields are blank
    $error_fields="";
    
    //getting the request paras
    $request_params =$_REQUEST;
    
    //handeing PUT request params
    if($_SERVER['REQUEST_METHOD']=='PUT'){
        //getting the app instance
        $app =\Slim\Slim::getInstance();
        
        //getting put parameters in request params variable
        parse_str($app->request()->getBody(),$request_params);
    }
    
    //looping through all the para
    foreach($required_fields as $field){
    
        //if any requred parameter in missing
        if(!isset($request_params[$field]) || strlen(trim($request_params[$field]))<=0){
            //error is true
            $error=true;
            
            //concatnating the missing parameters in error fields
            $error_fields.=$field.', ';
        }
    }
    //parameter missing then error is true
    if($error){
        //creating response arrY
        $response=array();
        
        //getting app instance
        $app=\Slim\Slim::getInstance();
        
        //adding values to response array
        $response["error"]=true;
        $response["message"]='Required field(s)' .substr($error_fields,0,-2).'is missing or empty';
    
        //displaying response with error code 400
        echoResponse(400,$response);
        
        $app->stop();
        
    }
}

//this method will create a student
//the first parameter is the URL address that will be added at last to the root url
//The method is post
$app->post('/createuser', function () use ($app) {

    //Verifying the required parameters
    verifyRequiredParams(array('name', 'lname','email', 'password','contact','type'));

    //Creating a response array
    $response = array();

    //reading post parameters
    $name = $app->request->post('name');
    $lname = $app->request->post('lname');
    $email = $app->request->post('email');
    $password = $app->request->post('password');
    $contact = $app->request->post('contact');
    $type = $app->request->post('type');

    //Creating a DbOperation object
    $db = new DbOperation();

    //Calling the method createStudent to add student to the database
    $res = $db->createUser($name,$lname,$email,$password,$contact,$type);

    //If the result returned is 0 means success
    if ($res == 0) {
        //Making the response error false
        $response["error"] = false;
        //Adding a success message
        $response["message"] = "You are successfully registered";
        //Displaying response
        echoResponse(201, $response);

    //If the result returned is 1 means failure
    } else if ($res == 1) {
        $response["error"] = true;
        $response["message"] = "Oops! An error occurred while registereing";
        echoResponse(200, $response);

    //If the result returned is 2 means user already exist
    } else if ($res == 2) {
        $response["error"] = true;
        $response["message"] = "Sorry, this email already existed";
        echoResponse(200, $response);
    }
});
 //login
$app->post('loginuser',function() use ($app){
    verifyRequiredParams(array('email','password'));
    
    //getting post values
    $email=$app->request->post('email');
    $password=$app->request->post('password');
    
    //creating DbOPeration object
    $db=new DbOperation();
    //creating a response array
    $response=array();
    
    if($db->userLogin($email,$password)){
        //getting user detail
        $user=$db->getUser($email);
        
        //generating res
        $response['error']=false;
        $response['id']=$user['id'];
        $response['name']=$user['name'];
        $response['email']=$user['email'];
        $response['key']=$user['key'];
    }
    else{
        //generating response
        $response['error']=true;
        $respponse['message']="Invalid username or password";
    }
    
    
    echoResponse(200,$response);
});
 

$app->run();

?>
