<?php 
session_start();
require_once './st.php';
$student = new st();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<div class ="container  ">
<div class=" ">
    <h1><i>Student Registration</i> </h1>

    <?php if (!empty($_SESSION) && isset($_SESSION['error'])): ?>
       <div class="alert alert-danger" role="alert"> 
     <?= $_SESSION['error'] ?>
    </div>
     <?php endif; ?>

    <form action="./store.php" method="POST">
        <div>
            <label for="user">Username</label>
            <input id="user"  type="text" placeholder="Username" name="user" value="">
        </div>

        <br>

        <div>
            <label for="EM">Email</label>
            <input id="EM"  type="email" name="mail">
        </div>

        <br>
        <div>
            <label for="n">Mobile Number</label>
            <input id="n" type="tel" name="number">
        </div>
        <br>

        <div>
            <p>Gender :</p>
            <input id="male" type="radio" name="Gender" value="male">
            <label for="male">Male</label>
        </div>

        <div>
            <input id="female" type="radio" name="Gender" value="female">
            <label for="female">Female</label>
        </div>
        <br>
     
        <br>
        <div>
            <label for="date">Date Of Birth :</label>
            <input id="date" type="date" name="date" value="date">

        </div>
        <br>
        <label for="city">Choose City :</label>
        <select name="city" id="city">

            <option value="Amman">Amman</option>
            <option value="Zarqa">Zarqa</option>
            <option value="Irbid">Irbid</option>
            <option value="Aqaba">Aqaba </option>
        </select>
        <br>

        <br>
        <label for="Q">Qualification</label>
        <select name="Qualification" id="Q">

            <option value="Associate Degree">Associate Degree</option>
            <option value="Bachelor’s Degree">Bachelor’s Degree</option>
            <option value="Master’s Degree">Master’s Degree</option>
            <option value="Doctoral Degree">Doctoral Degree </option>
        </select>


        <br>


    


        <div class="mt-5">
            <button type="submit"> Submit </button>
            <input type="reset">

        </div>

    </form>
</div>
    <hr>




    <table class="table">
  <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>number</th>
        <th>Date Of Birth</th>
        <th>City</th>
        <th>Qualification </th>
    </tr>
  </thead>

  <tbody>
           <?php foreach ($student->get_students() as $student) : ?>
    <tr>
        <td><?= $student->id ?></td>
        <td><?= $student->name ?></td>
        <td><?= $student->Email ?></td>
        <td><?= $student->Gender ?></td>
        <td><?= $student->number ?></td>
        <td><?= $student->date ?></td>
        <td><?= $student->city ?></td>
        <td><?= $student->Qualification ?></td>          
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>

</html>