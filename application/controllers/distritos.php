<?php

class Distritos extends Controller {
	

	function index()
	{



		$_result = $this->loadModel('Distritos_model');


		$_items_info = $_result->get();

		$template = $this->loadView('distritos/load_list');
		$template->set('title','Listado de Distritos');
		$template->set('items_info',$_items_info );
		$template->render();


	}




	function add_ajax(){

		//$_post = $_POST['name'];

		$_post = array('nombre'=>'Nuevo da');

		$_result = $this->loadModel('Distritos_model');
		$_item = $_result->add($_post);
		if ($_item) {
			echo "insertooooooooooooo";
		}else
			echo "Errrrror";

	}
	 





}

