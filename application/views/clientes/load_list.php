<?php include('header.php');
?>

<div class="container">
    <br>
    <br>
  
<div>
    

<div class="col-md-8">
    

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre y Apellidos</th>
                <th>email.</th>
                <th>telefono.</th>
                <th>carrera.</th>
               
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($x = 0; $x < count($items_clientes); $x++): ?>
                <tr>
                    <td><?php echo $items_clientes[$x]->id ?></td>
                    <td><?php echo $items_clientes[$x]->nombre . ' ' . $items_clientes[$x]->apellidos ?></td>
                    <td><?php echo $items_clientes[$x]->email?></td>
                    <td><?php echo $items_clientes[$x]->telefono ?></td>
                    <td><?php echo $items_clientes[$x]->carrera ?></td>
                    <td>
                         <a href=" <?php echo BASE_URL . $controlador . '/load_delete/' . $items_clientes[$x]->id ?> " class="btn btn-danger">Eliminar</a>
                        <a href=" <?php echo BASE_URL . $controlador . '/load_update/' . $items_clientes[$x]->id ?> " class="btn btn-info">Editar</a>	

                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>



select * from cliente where month(fecha)=11
