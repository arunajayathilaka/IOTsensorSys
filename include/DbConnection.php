<?php
//declare class of dbconnect
class DbConnect{
    
    //variable to store database link
    private $con;
    
    //constructor
    function __construct(){
        
    }
    
    //connect to db
    function connection(){
        
        //include constants.php 
        include_once dirname(__FILE__) . '/Constants.php';
        
        //connecting to mysql db
        $this->con = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
        
        //checking error
        if(mysqli_connect_errno()){
            echo "Failed to connect to mysql:" . mysqli_connect_error();
        }
        //return connection link
        return $this->con;
    }
    
    
    
}



    
?>
