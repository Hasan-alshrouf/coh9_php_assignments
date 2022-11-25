<?php

class database {

public $conn;
public function __construct()
{
     
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "form_table";

    
    $this->conn = new mysqli($servername, $username, $password, $database);
    // $conn = mysqli_connect($servername, $username, $password, $database);
    // var_dump($conn);

    // Check connection
    if ($this->conn ->connect_error) {
        die("Connection failed: " . $this->conn ->connect_error);
    }

    return $this->conn ;}





public function __destruct()
  {
    $this->conn ->close();
  }


}


// $get_user = new database();
// $get_user->get($id);

// $test = new database();
// var_dump(connect());
// die;