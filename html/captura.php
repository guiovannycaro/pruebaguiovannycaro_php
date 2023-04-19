<?php





include('../controlador/controlador.php');

@$nombre = $_POST['nombre'];
@$apellido =  $_POST['apellido'];

@$telefono = $_POST['telefono'];





$sql2 = "insert into cliente(nombre,apellido,telefono) values('".$nombre."','".$apellido."','".$telefono."')";

$datosinserta = $querys->insertar($sql2);

header('location:listado.php');

?>