<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$search_term = isset($_POST['search']) ? $_POST['search'] : null;

$all_cv = json_decode(file_get_contents('./all_cv.json'));
$final_cv = array();

if (!empty($search_term)) { 
    foreach ($all_cv as $cv) { 
       
        if ($cv->id ==  $search_term) { 
        
            $query_string = "id=$cv->id". "&" . "name=$cv->First_name " ;
             header("Location: ./cv.php?$query_string");
        }
    }if($cv->id !=  $search_term) {
        die('No cv were found using your id ');

    }


          
       
     
    
}else {
    die('you are trying to access directly without specifing a search term');
}
?>

