<?php include('header.php');
?>

<div class="container">
<div class="col-md-8">
    

    <form method="post">
       
            <fieldset>
                <legend>Datos</legend>

                    

                <div class="col-md-4">
                    <p>Nombre</p>
                    <input value="<?php echo $item_clientes->nombre; ?>" type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="col-md-4">
                    <p>Apellidos</p>
                    <input  value="<?php echo $item_clientes->apellidos; ?>" type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
                <div class="col-md-4">
                 
                    <input value="<?php echo $item_clientes->id; ?>" type="hidden" class="form-control" id='id' name='id'>
                    </div>
           
    </form>
</div>
</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>


