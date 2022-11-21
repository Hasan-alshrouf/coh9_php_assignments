<?php
session_start();
include './function.php';

if (!isset($_SESSION['user']))
header("Location: ./");

if( $_SESSION['user']['is_admin'] ){
    $num_add = isset($_POST['number']) ? $_POST['number'] : null;
 
    
    create_seats($num_add);
   

}


if (empty($_GET['id']))
    die("you are trying to access directyly!");

$seats = get_seats($_GET['id']);

if (empty($seats))
    die('There is no seat with this id');


if ($seats['availabe']) { // ture (Seat is available)
    // update the seat and make it unavailable
    update_seat_reservation($seats['id'], 0, $_SESSION['user']['id']);
} else {
    // if the seat is available, the user that is make the seat unavailable should be the editor
    if ($seats['user_id'] != $_SESSION['user']['id'])
        die('You are trying to access a resource that you did not edit before');
    // update the seat and make it available
    update_seat_reservation($seats['id'], 1, null);
}

header("Location: ./home.php");