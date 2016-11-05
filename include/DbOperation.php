<?php

class DbOperation{
    
    //database connection link
    private $con;
    
    //class constructor
    function __construct(){
        
        //getting the dbconnect.php file
        require_once dirname(__FILE__).'/DbConnection.php';
        
        //creating a DConnect object to connect to db
        $db=new DbConnect();
        
        //initializing our connection link
        //by calling method
        $this->con= $db->connection();
    }
    
    //method will create new user
    public function createUser($name,$lastname,$email,$pwd,$usertype,$contact){
        //check user registered
        if(!$this->isUserExists($email)){
            //encrypting ped
            $password=md5($pwd);
            $key=$this->generateKey();
            //creating an statment
            $stmt= $this->con->prepare("INSERT INTO user(USR_Name,USR_LName,USR_Email,USR_PWD,USR_Type,USR_Contact,USR_Key) values(?,?,?,?,?,?,?)");
            
            //binding para
            $stmt->bind_param("sssssss",$name,$lastname,$email,$password,$usertype,$contact,$key);
            
            //executing the statment
            $result = $stmt->execute();
            
            //close the statment
            $stmt->close();
            
            //if statment excute successfully
            if($result){
                //Returning 0 menas user created
                return 0;
            }
            else{
                //return 1 means failed to create
                return 1;
            }
            
        }
        else{
            //already exist email
            return 2;
        }
    }
    
    //method for student login
    public function userLogin($email,$pass){
        //generating pass hash
        $password=md5($pass);
        //creating query
        $stmt=$this->con->prepare("SELECT * FROM user WHERE USR_Email=? AND USR_PWD=?");
        
        //binding param
        $stmt->bind_param("ss",$email,$pass);
        
        //executing the query
        $stmt->execute();
        
        //storing result
        $stmt->store_result();
        
        //getting the result
        $num_rows = $stmt->num_rows;
        
        //closing the statment
        $stmt->close();
        
        //result  value > 0 means user found
        return $num_rows>0;
    }
    
    //Checking whether a user already exist
    private function isUserExists($email) {
        $stmt = $this->con->prepare("SELECT USR_ID from user WHERE USR_Email =?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }
    
    //get status 
    public function getStatus($locationId){
        $stmt = $this->con->prepare("SELECT * FFROM Location WHERE Loc_id=?");
        $stmt->bind_param("i",$locationid);
        $stmt->execute();
        $status = $stmt->get_result()->fetch_assoc();
        return $status;
    }
    //This method will return student detail
    public function getUser($email){
        $stmt = $this->con->prepare("SELECT * FROM user WHERE USR_Email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        //Getting the student result array
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        //returning the student
        return $user;
    }
    
     /*
     * Methods to check a user is valid or not using api key
     * I will not write comments to every method as the same thing is done in each method
     * */
    public function isValidUser($key) {
        //Creating an statement
        $stmt = $this->con->prepare("SELECT id from user WHERE USR_Key = ?");

        //Binding parameters to statement with this
        //the question mark of queries will be replaced with the actual values
        $stmt->bind_param("s", $key);

        //Executing the statement
        $stmt->execute();

        //Storing the results
        $stmt->store_result();

        //Getting the rows from the database
        //As API Key is always unique so we will get either a row or no row
        $num_rows = $stmt->num_rows;

        //Closing the statment
        $stmt->close();

        //If the fetched row is greater than 0 returning  true means user is valid
        return $num_rows > 0;
    }

    //This method will generate a unique api key
    private function generateKey(){
        
        return md5(uniqid(rand(), true));
        
    }

    
}

?>

