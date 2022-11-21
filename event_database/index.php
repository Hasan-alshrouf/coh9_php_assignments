<?php 
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>animal</title>
  
</head>

<body class="container my-5">
    <a href="../">Back</a>
    <h1 class="text-center">login</h1>
    <hr class="mb-5">
 
    <?php if (!empty($_SESSION) && isset($_SESSION['error'])): ?>
       <div class="alert alert-danger" role="alert"> 
     <?= $_SESSION['error'] ?>
    </div>
     <?php endif; ?>


<div class="d-flex justify-content-center align-items-center">



    <form class="w-50" method="POST" action="./val_user.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="d-flex justify-content-between align-items-center  ">

            <button type="submit" class="btn btn-primary">Login</button>

            <a href="./registeruser.php" class="btn btn-secondary">Register?</a>
        </div>
    </form>
</div>





   
</body>

</html>
