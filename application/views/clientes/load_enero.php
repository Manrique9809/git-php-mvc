<?php include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
     <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                $("#botonn").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#capa');
                    $("#capa").load(' <?php echo BASE_URL . $controlador . '/load_update/' . $items_clientes[$x]->id ?>');
                });
            });
        </script>




</head>
<body>

   

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
                <th>fecha.</th>
               
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
                    <td><?php echo $items_clientes[$x]->fecha ?></td>
                    <td>
                         <a  data-toggle="modal" href='#modal-id' name="botonn" id="botonn"  name="consulta" class="btn"><span class="badge">0</span></a>
                          

                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>

    </table>
    <div id="capa">
    

</div>
</div>
</div>
</body>

</html>



<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>




