<?php include('header.php');
?>

<div class="container">


    <div >

        <h3>ACTUALIZAR EMPLEADO</h3>   
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="<?php echo BASE_URL . $controlador . '/action_update' ?>" method="post">
        <div class="row">
            <fieldset>
                <legend>Datos Personales</legend>

                    <div class="col-md-4">
                 
                    <input value="<?php echo $item_empleados->id; ?>" type="hidden" class="form-control" id='id' name='id'>
                    </div>

                <div class="col-md-4">
                    <p>Nombre</p>
                    <input value="<?php echo $item_empleados->nombre; ?>" type="text" class="form-control" id="nombre" name="nombres">
                </div>

                <div class="col-md-4">
                    <p>Descripcion</p>
                    <input  value="<?php echo $item_empleados->descripcion; ?>" type="text" class="form-control" id="descripcion" name="apellidos">
                </div>
                 <div class="col-md-4">
                    <p>fecha de registro</p>
                    <input  value="<?php echo $item_empleados->fecha_reg; ?>" type="text" class="form-control" id="fecha_reg" name="apellidos">
                </div>


            
            </fieldset>
        </div>


    

        
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger">Actualizar</button></center>

    </form>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>


