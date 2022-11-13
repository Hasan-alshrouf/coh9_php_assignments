<?php require './header.php';


?>


<form action="mail.php" method="post">
<div class="card border-primary  w-50 m-auto mt-5">
    
    <div class="card-body p-3">

        <!--Body-->
        <div class="form-group">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                </div>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                </div>
                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                </div>
                <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
            </div>
        </div>

        <div class="text-center">
            <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
        </div>
    </div>

</div>
</form>


 <?PHP require './footer.php';?>