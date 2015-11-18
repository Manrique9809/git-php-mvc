<?php

class Customers_model extends Model {
	
	public function get()
	{
		$sql = "SELECT * FROM clientes"; 
		return $this->query($sql);
	}

	

}

?>
