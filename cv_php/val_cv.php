<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');
// var_dump($_POST);
// die;

 $cv  = isset($_POST) ? $_POST : null;

 
//  var_dump($_GET);
//  die;
 
$first_name = isset($_POST['First_name']) ? $_POST['First_name'] : null;
$Surname = isset($_POST['Surname']) ? $_POST['Surname'] : null;     
$profession = isset($_POST['Profession']) ? $_POST['Profession'] : null;
$email = isset($_POST['Email']) ? $_POST['Email'] : null;
$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : null;  
$Social_Link = isset($_POST['Social_Link']) ? $_POST['Social_Link'] : null;
$picture = isset($_POST['picture']) ? $_POST['picture'] : null;
$School = isset($_POST['School']) ? $_POST['School'] : null;     
$Graduation_Start = isset($_POST['Graduation_Start']) ? $_POST['Graduation_Start'] : null;  
$Graduation_End = isset($_POST['Graduation_End']) ? $_POST['Graduation_End'] : null;  
$job_title = isset($_POST['Job_title']) ? $_POST['Job_title'] : null;    
$decsription = isset($_POST['decsription']) ? $_POST['decsription'] : null;   
$skils1 = isset($_POST['Skils1']) ? $_POST['Skils1'] : null; 
$skils2 = isset($_POST['Skils2']) ? $_POST['Skils2'] : null;
$skils3 = isset($_POST['Skils3']) ? $_POST['Skils3'] : null;
$skils4 = isset($_POST['Skils4']) ? $_POST['Skils4'] : null;
$Profile = isset($_POST['Profile']) ? $_POST['Profile'] : null;
$search = isset($_POST['search']) ? $_POST['search'] : null;
  


if (!empty($first_name) && !empty($profession) && !empty($email)  && !empty($skils1) ){
    // $jsonn = json_encode($cv);
    $all_cv = json_decode(file_get_contents('./all_cv.json'));

    $all_cv[] = (object) array (
        'id' =>isset($all_cv) ?  count($all_cv) +1 :  1 ,
        'First_name' => $first_name,
        'Surname' => $Surname,
        'Profession' => $profession,
        'Email' => $email,
        'Phone' => $Phone,
        'Social_Link' => $Social_Link,
        'picture' => $picture,
        'School' => $School,
        'Graduation_Start' => $Graduation_Start,
        'Graduation_End' => $Graduation_End,
        'job_title' => $job_title,
        'decsription' => $decsription,
        'skils1' => $skils1,
        'skils2' => $skils2,
        'skils3' => $skils3,
        'skils4' => $skils4,
        'Profile' => $Profile
        
        
    );

    

    $json_cv = json_encode($all_cv);

    file_put_contents('./all_cv.json', $json_cv );
    $all_cv2 = json_decode(file_get_contents('./all_cv.json'));
    foreach ($all_cv2 as $cv)
    $idd =$cv->id;
    

    $query_string = "id=$idd"  ;
    header("Location: ./cv.php?$query_string");

} else {
    die('You need to enter some information');
   
}




