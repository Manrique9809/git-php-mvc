 
<h1><?php echo $title ?></h1>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
		<?php 
	     $_count = count($items_info);
	     for ($x=0; $x <$_count  ; $x++) { 
		 ?>
		<tr>
			<td><?php echo $items_info[$x]->id ?></td>
			<td><?php echo $items_info[$x]->nombre ?></td>

		</tr>
		<?php }  ?>
	</tbody>


</table>



 