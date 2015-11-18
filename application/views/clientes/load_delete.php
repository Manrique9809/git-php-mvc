<?php include('header.php');
?>

<div class="container">


    <div >

        <h3>Eliminar EMPLEADO</h3>   
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="<?php echo BASE_URL . $controlador . '/action_delete' ?>" method="post">
        <div class="row">
            <fieldset>
                <legend>Datos Personales</legend>

                    <div class="col-md-4">
                 
                    <input value="<?php echo $item_clientes->id; ?>" type="hidden" class="form-control" id='id' name='id'>
                    </div>

                <div class="col-md-4">
                    <p>Nombre</p>
                    <input value="<?php echo $item_clientes->nombres; ?>" type="text" class="form-control" id="nombre" name="nombres" disabled>
                </div>

                <div class="col-md-4">
                    <p>Apellidos</p>
                    <input  value="<?php echo $item_clientes->apellidos; ?>" type="text" class="form-control" id="apellidos" name="apellidos" disabled>
                </div>

                <div class="col-md-4">
                    <p>Tipo de documento</p>
                    <select name="tipo_doc" id="tipo_doc" class="form-control" disabled>
                        <option value=""><?php echo $item_clientes->tipo_doc; ?></option>
                        <option value="DNI">DNI</option>
                        <option value="CE">CE</option>

                    </select>
                </div>


                <div class="col-md-4">
                    <p>Numero</p>
                    <input value="<?php echo $item_clientes->nro; ?>" type="text" class="form-control" id="nro" name="nro" disabled>
                </div>


                <div class="col-md-4">
                    <p>Profesion</p>
                    <select class="form-control" name="profesion_id" disabled>
                        <option value=""><?php echo $item_clientes->profesion_id; ?></option> 
                        <option value="">--Seleccione--</option> 
                        <?php
                        for ($i = 0; $i < count($items_profesion); $i++) {
                            ?>

                            <option value="<?php echo $items_profesion[$i]->id; ?>">
                                <?php echo $items_profesion[$i]->nombre; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>  
                </div>


                <div class="col-md-4">
                    <p>Ocupacion</p>
                    <input value="<?php echo $item_clientes->ocupacion; ?>" type="text" class="form-control" id="ocupacion" name="ocupacion" disabled>
                </div>





                <div class="col-md-4">
                    <p>Nacionalidad</p>
                    <select class="form-control" name="nacionalidad_id" disabled>
                        <option value=""><?php echo $item_clientes->nacionalidad_id; ?></option> 
                        <option value="">--Seleccione--</option> 
                        <?php
                        for ($i = 0; $i < count($items_paises); $i++) {
                            ?>

                            <option value="<?php echo $items_paises[$i]->id; ?>">
                                <?php echo $items_paises[$i]->nombre; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>  
                </div>




                <div class="col-md-4">
                    <p>Sexo</p>
                    <select name="sexo" id="sexo" class="form-control" disabled>
                        <option value=""><?php echo $item_clientes->sexo; ?></option>
                        <option value="">--Seleccione--</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>

                    </select>
                </div>


                <div class="col-md-4">
                    <p>Fecha de Nacimiento</p>
                    <input value="<?php echo $item_clientes->f_nac; ?>" type="date" class="form-control" id="fecha" name="f_nac" disabled>
                </div>

                <div class="col-md-4">
                    <p>Estado Civil</p>
                    <select name="est_civil" id="est_civil" class="form-control" disabled>
                    <option value=""><?php echo $item_clientes->est_civil; ?></option>
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
                <select class="form-control" name="id_departamento" disabled>
                <option value=""><?php echo $item_clientes->id_departamento; ?></option>
                    <option value="">--Seleccione--</option> 
                    <?php
                    for ($i = 0; $i < count($items_departamentos); $i++) {
                        ?>

                        <option value="<?php echo $items_departamentos[$i]->idDepa; ?>">
                            <?php echo $items_departamentos[$i]->departamento; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>  
            </div>

            <div class="col-md-4">
                <p>Provincia</p>
                <select class="form-control" name="id_provincia" disabled>
                <option value=""><?php echo $item_clientes->id_provincia; ?></option>
                    <option value="">--Seleccione--</option> 
                    <?php
                    for ($i = 0; $i < count($items_provincia); $i++) {
                        ?>

                        <option value="<?php echo $items_provincia[$i]->idProv; ?>">
                            <?php echo $items_provincia[$i]->provincia; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>  
            </div>


            <div class="col-md-4">
                <p>Distrito</p>
                <select class="form-control" name="id_distrito" disabled>
                <option value=""><?php echo $item_clientes->id_distrito; ?></option>
                    <option value="">--Seleccione--</option> 
                    <?php
                    for ($i = 0; $i < count($items_distrito); $i++) {
                        ?>

                        <option value="<?php echo $items_distrito[$i]->idDist; ?>">
                            <?php echo $items_distrito[$i]->distrito; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>



        </div>
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger">Eliminar</button></center>

    </form>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>


