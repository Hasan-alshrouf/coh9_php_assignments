<?php

include './header.php';
if (!isset($_SESSION['user']) && !strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') )
header("Location: ./");

?>



<div class="row my-5 py-5">
<?php foreach(get_all_seats() as $seats ) : ?>

<div class=" col-2 m-3 d-flex justify-content-center align-items-center ">
<div class="card" style="width: 18rem;">
  <img src ="./auditorium-one-reserved-seat-20591906.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">seat <?= $seats['seat_num']  ?></h5>
    


    <?php   // if the seat is available > let any user reserve 
    if ($seats['availabe'] ){ ?> 
   <p class="card-text">Click here to reserve your seat </p>
   <button class=" <?= $seats['availabe'] ? "available_seat" : 'unavailable_seat' ?>">   
    <a href="./seat_reservation.php?id=<?= $seats['id'] ?>" class="" >Reservation</a> 
  </button>
  <?php }else {  
            if($seats['user_id'] == $_SESSION['user']['id']){?>
              <p class="card-text">reserve by : <?= $_SESSION['user']['name']  ?> </p>
              <button class="text-decoration-line-through <?= $seats['availabe'] ? "available_seat" : 'unavailable_seat' ?>">   
              <a href="./seat_reservation.php?id=<?= $seats['id'] ?>" class="" >Reservation</a> 
            </button>
 
      <?php }else { ?>
           <?php foreach(get_user() as $user ) :
            // var_dump($seats['user_id']); ?>
            <?php if($user['id'] == ($seats['user_id'])) {  ?> 
           <p class="card-text">reserve by : <?= $user['name']  ?></p>
            <button class="<?= $seats['availabe'] ? "available_seat" : 'unavailable_seat' ?>">   
             <a  class="disabled text-decoration-line-through"> Reservation </a>
            </button>
            <?php } endforeach;  ?>
 
     <?php } 
      } ?>
           

            



  </div>
</div>
</div>

<?php endforeach; ?>
</div>

<?php include './footer.php' ?>