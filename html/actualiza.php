<?php

$id = $_GET['id'];
echo $modificar =  $_GET['function'];

if($modificar != 'eliminar'){

$nombre = $_POST['nombre'];
$apellido =  $_POST['apellido'];
$telefono = $_POST['telefono'];
}

include('../controlador/controlador.php');



if($modificar == 'modificar'){

 $sql = "update cliente set nombre='".$nombre."',apellido='".$apellido."',telefono='".$telefono."' where cod_cliente='".$id."'";
$datos = $querys->actualizar($sql);



header('location:listado.php');
}else{
	
	 $sql = "delete from cliente where cod_cliente='".$id."'";
$datos = $querys->eliminar($sql);




	header('location:listado.php');
	
	}


?>