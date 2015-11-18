<?php

class Url_helper {

	function base_url()
	{
		global $config;
		return $config['base_url'];
	}
	
	function segment($seg)
	{
		if(!is_int($seg)) return false;
		
		$parts = explode('/', $_SERVER['REQUEST_URI']);
	    return isset($parts[$seg]) ? $parts[$seg] : false;
	}
	
<<<<<<< HEAD
=======
	function _prueba(){
		echo("esto es una prueba");

	}
>>>>>>> 1d9cb0d0426097eacede05557fb4768187ea415f
}

?>