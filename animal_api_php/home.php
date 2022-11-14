<?php
session_start();
if (!isset($_SESSION['user']))
    header("Location: ./");


$animals = json_decode(file_get_contents('https://zoo-animal-api.herokuapp.com/animals/rand/10'));
$animals2 = json_decode(file_get_contents('https://zoo-animal-api.herokuapp.com/animals/rand/10'));

$all_animals = array_merge($animals, $animals2);


$_SESSION['all_animals'] = array(
    'animals' => $all_animals
);


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
                        username : <?= $_SESSION['user']['username'] ?>
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

    <h1 class="text-center">Animal</h1>
    <hr class="w-50 m-auto">

    <div id="htu-courses" class="mt-5 row">

    <?php foreach ($all_animals  as $animal) :?>
    <div class="card-wrapper col-3 m-5">
        <div class="card">
        <img src="<?= $animal-> image_link?>" > 
            <div class="card-body">
             
                <p class="card-text">
                 Name:<?= $animal->name ?>
                </p>
                <h5 class="card-title">
                <?= $animal->animal_type ?>
                </h5>
                <p class="card-text">
                <?= $animal->diet ?>
                </p>
                <p class="card-text">
                <?= $animal->name ?>
                </p>
                
                <a href="./one_animal.php?name=<?= $animal->name ?>" class="btn btn-primary">More </a>
            </div>
        </div>
    </div>

    <?php endforeach; ?> 
</div>
 </main> 

 <footer class="d-flex justify-content-center align-items-center">
    <p class="m-0">&copy; 2022 - all rights reserved to HTU</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>