<?php
session_start();
include "./function.php";


$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");



$user = isset($_POST['name']) ? $_POST['name'] : null;
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;

$error = false;
$error_msgg = '';


if (!empty($user) && !empty($pass) ) {
    $all_user = get_user();    
    
    foreach( $all_user as $vall){
      
       
        if(($user != $vall['name']) || ($pass != $vall['pass'])){
            $error_msgg = "your email or password is incorrect";
            $_SESSION['error'] = $error_msgg;
            $error = true;
       
        }else{
            $error = false;
            $id_user = ($vall['id']);
           
   
            break;
        }      
        
    }
    // var_dump($_SESSION['error']);
    // die;
 } 
else {
    $error_msgg = "Please fillout the required information (First Name, Last Name)";
    $error = true;
}

if ($error) {
    $_SESSION['error'] = $error_msgg;
    header("Location: ./");
 

} else {
    $_SESSION['user'] = array(
        'name' => $vall['name'],
        'is_admin' => $vall['is_admin'],
        'id' => $vall['id']
    );
 
    header("Location: ./home.php");
}

