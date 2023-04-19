<?php

require_once 'controlador/controladordepartamentos.php';

$controller = new controlador_sistema();

	

if(!empty($_REQUEST['d'])){
	
	 $metodo = $_REQUEST['d'];
	if(method_exists($controller,$metodo)){
		
		 $controller->$metodo();
		
		}else{
			$controller->index();
			}
	}else{
	$controller->index();	
		}




?>