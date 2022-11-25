<?php
require_once './db.php';

class st {


    public function create($name, $Email ,$number, $Gender , $date ,$city, $Qualification)
    {
        $db = new database();

        $sql = "INSERT INTO infs (name , Email ,number ,Gender,date ,city,	Qualification) 
         VALUES ('$name',' $Email' ,'$number',' $Gender' ,' $date' ,'$city',' $Qualification')";
       $db->conn->query($sql);
    }
  
    
    public function get_students(): array
    {
        $db = new database();

        $students = array();
        $result = $db->conn->query("SELECT * FROM infs");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $students[] = $row;
               
            }
           
        }
      


        return $students;
    }


}


// function get($id)
//     {
//         $con =  $this->connect();
//         $sql = "SELECT * FROM infs WHERE id=$id";
//         $result = mysqli_query($con, $sql);
    
//         return mysqli_fetch_assoc($result);
//     }
    
    