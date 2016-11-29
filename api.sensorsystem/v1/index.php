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

//method to authenticate
function authenticUser(\Slim\Route $route){
    
    //getting headers
    $headers=apache_request_headers();
    $response=array();
    $app=\Slim\Slim::getInstance();
    
    //verifing the header
    if(isset($header['Authorization'])){
        
       //Creating a DatabaseOperation boject
        $db = new DbOperation();
 
        //Getting api key from header
        $api_key = $headers['Authorization'];
 
        //Validating apikey from database
        if (!$db->isValidUser($api_key)) {
            $response["error"] = true;
            $response["message"] = "Access Denied. Invalid Api key";
            echoResponse(401, $response);
            $app->stop();
        }
    } else {
        // api key is missing in header
        $response["error"] = true;
        $response["message"] = "Api key is misssing";
        echoResponse(400, $response);
        $app->stop();
    }
    
}

//get api for location manager number and location ids
$app->get('/alarmOnLocations',function () use ($app){
    $db = new DbOperation();
    $result = $db->getalarm_isOn_Locid_Loc_Mgr();
    $response = array();
    $response['error'] = false;
    $response['location'] = array();
    
    if($result){
        while($row = $result->fetch_assoc()){
            $temp = array();
            $temp['Loc_ID'] = $row['Loc_ID'];
            $temp['Loc_Mgr_ID'] = $row['Loc_Mgr_ID'];
            $temp['USR_Contact'] = $row['USR_Contact'];
            array_push($response['location'],$temp);
        }

        echoResponse(200,$response);
    }
    else{
        $response['error'] = false;
        $response['location']="got error in function";
        
        echoResponse(201,$response);
    }
    
});
//update alarm status
$app->post('/updatealarmstatus',function () use ($app){
     verifyRequiredParams(array('status','locid'));
     
     //creating a response array
     $response = array();
    //reading post parameters
     $status=$app->request->post('status');
     $locid=$app->request->post('locid');
     //creating a DbOperation object
     $db=new DbOperation();
     
     //calling pushdata to add data to db
     $res=$db->setalarmstatus($status,$locid);
     
     if($res==0){
         //Making the response error false
        $response["error"] = false;
        //Adding a success message
        $response["message"] = "You are successfully set";
        //Displaying response
        echoResponse(201, $response);
     }
     elseif($res==1){
         $response["error"] = true;
        $response["message"] = "Oops! An error occurred while setting";
        echoResponse(200, $response);
     }
     
    
});
//post data
$app->post('/pushdata',function () use ($app){
    //verifying the parameters
    verifyRequiredParams(array('locid','valtemp','valhumidity','date','time'));
    
    //creating a response array
     $response = array();
    //reading post parameters
     $locid=$app->request->post('locid');
     $valtemp=$app->request->post('valtemp');
     $valhumidity=$app->request->post('valhumidity');
     $date=$app->request->post('date');
     $time=$app->request->post('time');
     
     //creating a DbOperation object
     $db=new DbOperation();
     
     //calling pushdata to add data to db
     $res=$db->pushdata($locid,$valtemp,$valhumidity,$date,$time);
     
     if($res==0){
         //Making the response error false
        $response["error"] = false;
        //Adding a success message
        $response["message"] = "You are successfully added";
        //Displaying response
        echoResponse(201, $response);
     }
     elseif($res==1){
         $response["error"] = true;
        $response["message"] = "Oops! An error occurred while adding";
        echoResponse(200, $response);
     }
});
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
$app->post('/loginuser',function() use ($app){
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
        $response['id']=$user['USR_ID'];
        $response['name']=$user['USR_Name'];
        $response['email']=$user['USR_Email'];
        $response['key']=$user['USR_Key'];
    }
    else{
        //generating response
        $response['error']=true;
        $response['message']="Invalid username or password";
    }
    
    
    echoResponse(200,$response);
});
 

$app->run();

?>
