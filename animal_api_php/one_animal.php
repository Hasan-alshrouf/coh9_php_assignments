<?php
session_start();
if (!isset($_SESSION['user']))
    header("Location: ./");


$animal_name = isset($_GET['name']) ? $_GET['name'] : null;
if (!empty($animal_name)) {
    $one_animal = $_SESSION['all_animals']['animals'];
    foreach ($one_animal as $animal)  {
             if ($animal->name == $animal_name) {
                  $animal_arr[] = $animal;
          }
}
}

$new_animal = !empty($animal_arr) ? $animal_arr[array_key_first($animal_arr)] : null;
// var_dump($new_animal);
// die;
if (empty($new_animal))
    die('you are trying to access a course that is not existed');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animal</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="./nav.css">
</head>





<body>
<header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto  mb-lg-0 d-flex justify-content-between align-items-center">
                        <span class="me-3">
                                <?= $_SESSION['user']['username'] ?>
                            </span> 
                        <li class="nav-item">
                            <a class="nav-link p-lg-4 active " aria-current="page" href="./home.php">Home</a>
                        </li>
                        <a class="nav-link p-lg-4 border-end" href="./logout.php">
                           <button type="button" class="btn btn-secondary">logout</button>
                        </a>
                      
                    </ul>
                       
                </div>
            </div>
        </nav>

        
                

             
            </div>
        </div>

    </header>




    <main class="container my-5">

<h1 class="text-center">about Animal </h1>
<hr class="w-50 m-auto">
<div class="container my-5 py-5">
        <div class="row">
            <div class=" col-6" >
                <img class="w-100" src="<?= $new_animal-> image_link?>" alt="Course">
            </div>
            <div class="col-6">
                <h3 >
                 Name : <?= $new_animal->name ?>
                </h3>
                <p>animal_type : <?= $new_animal->animal_type?></p>
                <p> diet :<?= $new_animal->diet ?></p>
                <p> geo_range : <?= $new_animal->geo_range ?></p>
                <p> lifespan : <?= $new_animal->lifespan ?></p>
            </div>
        </div>
    </div>




<footer class="d-flex justify-content-center align-items-center">
    <p class="m-0">&copy; 2022 - all rights reserved to HTU</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

