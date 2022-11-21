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
 
    <h1 class="text-center">add</h1>
    <hr class="mb-5">
 


<div class="d-flex justify-content-center align-items-center">



    <form class="w-50" method="POST" action="./seat_reservation.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">how many seats do you want to add ?</label>
            <input name="number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            
            <button type="submit" class="btn btn-primary mt-2">add</button>
        </div>
      
    </form>
</div>





   
</body>

</html>
