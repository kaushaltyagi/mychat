<?php
session_start();
//checked if logged in
$DATA_RAW=file_get_contents("php://input");
$DATA_OBJ=json_decode($DATA_RAW);
$info=(object)[];
if(!isset($_SESSION['userid'])){
    if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type!="login" && $DATA_OBJ->data_type!="signup"){
        $info->logged_in = false;
        echo json_encode($info);
        die;
    }
}
require_once("classes/autoload.php");
$DB=new Database();


$Error = "";

//process the data
if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "signup")
{
    //signup
    
    include("includes/signup.php");

}elseif(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "login"){
    //login
    include("includes/login.php");
    
}
elseif(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "logout"){
    // logout
    include("includes/logout.php");
 }
elseif(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "user_info"){
   // user info
   include("includes/user_info.php");
}