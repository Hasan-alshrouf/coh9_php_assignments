<?php
session_start();
require_once './st.php';
require_once './db.php';


$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");


    $name = isset($_POST['user']) ? $_POST['user'] : null;
    $Email = isset($_POST['mail']) ? $_POST['mail'] : null;     
    $number = isset($_POST['number']) ? $_POST['number'] : null;
    $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : null;
    $date = isset($_POST['date']) ? $_POST['date'] : null;
    $city = isset($_POST['city']) ? $_POST['city'] : null;
    $Qualification = isset($_POST['Qualification']) ? $_POST['Qualification'] : null;     
   
   

    $error = false;
    $error_msgg = '';

    
if (!empty($name) && !empty($Email) ) {
    $student = new st();
    $student->create($name, $Email ,$number, $Gender , $date ,$city, $Qualification);

   
   
     } 
else {
        $error_msgg = "Please fillout the required information ";
        $error = true;
    }
    
if ($error) {
        $_SESSION['error'] = $error_msgg;
        header("Location: ./");
     
    
} else {
   
    
    header("Location: ./");
       
     
        
    }
    
    
   
                                   