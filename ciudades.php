<?php

require_once 'controlador/controladorciudades.php';

$controller = new controlador_sistema();

	

if(!empty($_REQUEST['c'])){
	
	 $metodo = $_REQUEST['c'];
	if(method_exists($controller,$metodo)){
		
		 $controller->$metodo();
		
		}else{
			$controller->index();
			}
	}else{
	$controller->index();	
		}




?>