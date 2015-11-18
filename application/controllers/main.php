<?php

class Main extends Controller {
	function index()
	{
	
		$_result = $this->loadModel('Customers_model');
		$_result = $_result->get();
		$template = $this->loadView('main_view');
		$template->set('titulo','BIENVENIDO A MVC');
		$template->set('mensaje','puro php');
		$template->set('items_info',$_result);
		$template->render();
	}

	 





}

