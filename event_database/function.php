<?php

function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "seats";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // var_dump($conn);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}







function create_user($name, $password)
{
    $connection = connect();
    
    $sql = "INSERT INTO user (name , pass) VALUES ('$name',' $password')";
    $result = mysqli_query($connection, $sql);
    $id = $connection->insert_id;
    return $id;
}





function get_user()
{
    $sql = "SELECT * FROM user";
    $result = mysqli_query(connect(), $sql);

    // $first_row = mysqli_fetch_assoc($result);
    // $second_row = mysqli_fetch_assoc($result);
    // $third_row = mysqli_fetch_assoc($result);
    $user = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $user[] = $row;
        }
    }
    
    return $user;
}



function get_one_user($id)
{

  
    $sql = "SELECT * FROM user WHERE id=$id  " ;
    $result = mysqli_query(connect(), $sql);

    return mysqli_fetch_assoc($result);
}







function create_seats($num)
{
  
   for ($i=1; $i <= $num ; $i++) { 
    $connection = connect();

    $sql = "INSERT INTO idreservation (seat_num) VALUES ($i)";
    $result = mysqli_query($connection, $sql);
    
   }
}




function get_all_seats()
{
    $sql = "SELECT * FROM idreservation";
    $result = mysqli_query(connect(), $sql);

    $admin = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $all_seats[] = $row;
        }
    }
    
    return $all_seats;
}



function get_seats($id)
{
    $sql = "SELECT * FROM idreservation WHERE id=$id";
    $result = mysqli_query(connect(), $sql);

    return mysqli_fetch_assoc($result);
}



function update_seat_reservation($id, $availabe, $user_id)
{
    $connection = connect();
    $user_id = !empty($user_id) ? $user_id : "NULL";
    $sql = <<<EOD
    UPDATE idreservation
        SET availabe= $availabe, user_id=$user_id
        WHERE id=$id
    EOD;
    mysqli_query($connection, $sql);
    mysqli_close($connection);
}
// function update_customer($firstname, $lastname, $email, $phone, $sales, $id)
// {
//     $sales = !empty($sales) ? (int) $sales : 0;
//     $sql = <<<EOD
//     UPDATE Customers
//         SET firstname='$firstname',
//             lastname='$lastname',
//             email='$email',
//             phone='$phone',
//             sales=$sales
//         WHERE id=$id;
//     EOD;
//     $result = mysqli_query(connect(), $sql);
// }