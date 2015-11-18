<?php include('header.php'); ?>
	
    <div id="content">
        
        <h1><?php echo $titulo ?></h1>

        <p><?php echo $mensaje ?></p>
        
        <?php 

        echo "<pre>";

        echo print_r($items_info);

        echo "<pre>";

         ?>
        
    </div>

<?php include('footer.php'); ?>