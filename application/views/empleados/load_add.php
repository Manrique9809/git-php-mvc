<?php include('header.php');
?>

<div class="container">


    <div >

        <h3>Registrar EMPLEADO  </h3 >  
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="add_empleados" method="post">
        <div class="row">
            <fieldset>
                <legend>Datos Personales</legend>
                <div class="col-md-4">
                    <p>Nombre</p>
                    <input   type="text" class="form-control" id="nombre" name="nombres">
                </div>

                <div class="col-md-4">
                    <p>Apellidos</p>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>

                <div class="col-md-4">
                    <p>Tipo de documento</p>
                    <select name="tipo_doc" id="tipo_doc" class="form-control">
                        <option value="">--Seleccione--</option>
                        <option value="DNI">DNI</option>
                        <option value="CE">CE</option>

                    </select>
                </div>


                <div class="col-md-4">
                    <p>Numero</p>
                    <input type="text" class="form-control" id="numero" name="nro">
                </div>


                <div class="col-md-4">
                    <p>Profesion</p>
                    <select class="form-control" name="profesion_id">
                       <?php 


                        echo $profesion;
                        ?>
                    </select>  
                </div>


                <div class="col-md-4">
                    <p>Ocupacion</p>
                    <input type="text" class="form-control" id="ocupacion" name="ocupacion">
                </div>





                <div class="col-md-4">
                    <p>Nacionalidad</p>
                    <select class="form-control" name="nacionalidad_id">
                        <?php
                        echo $paises;
                        ?>

                    </select>  
                </div>




                <div class="col-md-4">
                    <p>Sexo</p>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="">--Seleccione--</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>

                    </select>
                </div>


                <div class="col-md-4">
                    <p>Fecha de Nacimiento</p>
                    <input type="date" class="form-control" id="fecha" name="f_nac">
                </div>

                <div class="col-md-4">
                    <p>Estado Civil</p>
                    <select name="est_civil" id="est_civil" class="form-control">
                        <option value="">--Seleccione--</option>
                        <option value="soltero">Masculino</option>
                        <option value="casado">Casado</option>
                        <option value="divorsiado">Divorsiado</option>
                        <option value="separado">Separado</option>
                        <option value="viudo">Viudo</option>

                    </select>
                </div>


                <div class="col-md-8">
                    <br>
                    <br>

                    <br>
                    <br>
                    <h1>UBIGEO</h1>     

                </div>
            </fieldset>
        </div>




        <div class="row">



            <div class="col-md-4">
                <p>Departamento</p>
                <select class="form-control" name="id_departamento" id="btn-departamentos">
                   <?php 
                    echo $departamento;
                    ?>
                  
                </select>  
            </div>

            <div class="col-md-4">
                <p>Provincia</p>
                <select class="form-control" name="id_provincia" id="btn-provincia">
                 <option value="">--Seleccione--</option>
                  
                    <?php
                   
                    ?>
                </select>  
            </div>


            <div class="col-md-4">
                <p>Distrito</p>
                <select class="form-control" name="id_distrito"  id="btn-distrito">
                 <option value="">--Seleccione--</option>
                   <?php
                   
                    ?>
                </select>
            </div>

             <div class="col-md-8">
                    <br>
                    <br>

                    <br>
                    <br>
                    <h1>Account</h1>    

                </div>

        </div>

      
        <div class="row">
             <div class="col-md-4">
                <p>Usuario</p>
                 <input type="text" class="form-control" id="username" name="username">
             </div>
             <div class="col-md-4">
                 <p>Contraseña</p>
                 <input type="password" class="form-control" id="password" name="password">
             </div>
             <div class="col-md-4">
                 <p>Confirmar Contraseña</p>
                 <input  type="password" class="form-control">
             </div>

               <div class="col-md-4">
                <p>Tipo de Usuario</p>
                <select class="form-control" name="tipo_usuario">
                
                        <?php
                        echo $tipousuario;
                        ?>
                </select>
             </div>

            
            
        </div>
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger"> Registrar</button></center>
   </form>
    

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>

 