<?php include './header.php'?>


<form class="w-50" method="POST" action="./insert_seat.php">
    <div class="mb-3">
        <label for="fnamee" class="form-label">seat_num</label>
        <input type="number" class="form-control" id="fnamee" name="seat_num" required>
    </div>
    <div class="mb-3">
        <label for="lnamee" class="form-label">availabe</label>
        <input type="text" class="form-control" id="lnamee" name="availabe" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include './footer.php' ?>