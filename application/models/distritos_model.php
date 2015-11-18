<?php

class Distritos_model extends Model {
	

	public function add($_post)
	{
		
		return $this->execute('distritos',$_post);
	}
	


	public function get()
	{
		$sql = "SELECT * FROM distritos"; 
		return $this->query($sql);
	}

	

}

?>
