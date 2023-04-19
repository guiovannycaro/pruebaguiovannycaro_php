<?php

require_once 'controlador/controladorformularios.php';

$controller = new controlador_sistema();

	

if(!empty($_REQUEST['f'])){
	
	 $metodo = $_REQUEST['f'];
	if(method_exists($controller,$metodo)){
		
		 $controller->$metodo();
		
		}else{
			$controller->index();
			}
	}else{
	$controller->index();	
		}




?>