
<?php
require("db/coneccion.php"); //ConecciÃ³n a la base de datos 
require("modelo/modelociudades.php");
$querys = new consultas;

class controlador_sistema{
	private $model_a;
	
	function __construct(){
		$this->model_a = new consultas();
		}
	
	
	function index(){
		$con = new controldb;
        $querys = new consultas;
		$title="Consulta";
		$datosconsulta = $querys->consultar();
		require_once 'vista/ciudades/index.php';
		}
		
		function ingresar(){
		$con = new controldb;
        $querys = new consultas;
		$title="Ingresar";

		require_once 'vista/ciudades/insertar.php';
		
			}
		function captura(){
		$con = new controldb;
        $querys = new consultas;
		$title="captura";
		$nombre = $_POST['nombre'];
		$sql="insert into ciudades(nombre)values('".$nombre."')";
		$datosinsertar = $querys->insertar($sql);
		
	require_once 'vista/ciudades/captura.php';
	
	
	
		
			}
		
		
		function actualiza(){
		$con = new controldb;
        $querys = new consultas;
		$title="Actualizar";
        $id = $_GET['id'];
		$sql="select * from ciudades where id='".$id."'";
		$datosconsulta = $querys->consultadatos($sql);
		require_once 'vista/ciudades/actualizar.php';
		
			}
			
		function capturaactualiza(){
		$con = new controldb;
        $querys = new consultas;
		$title="captura";
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		
		  $sql = "update ciudades set   nombre = '$nombre' where id = $id  ";

		$datosactualiza = $querys->actualizar($sql);
		
	$datosactualiza;
	require_once 'vista/ciudades/capturaact.php';
		
			}
			
					function eliminar(){
		$con = new controldb;
        $querys = new consultas;
		
		$id = $_POST['id'];
		
		
		  $sql = "delete from ciudades where  id= $id  ";

		$datoseliminar = $querys->eliminar($sql);
	$datoseliminar;
require_once 'vista/ciudades/eliminar.php';
		
			}
			
}




?>