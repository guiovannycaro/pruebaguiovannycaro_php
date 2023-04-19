
<?php
require("db/coneccion.php"); //ConecciÃ³n a la base de datos 
require("modelo/modeloformularios.php");
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
		$datosusuarios = $querys->consultarusuarios();
		$datosciudades = $querys->consultarciudades();
		$datosdepartamentos = $querys->consultardepartamentos();
		require_once 'vista/formularios/index.php';
		}
		
		function ingresar(){
		$con = new controldb;
        $querys = new consultas;
		$title="Ingresar";

		require_once 'vista/formularios/insertar.php';
		
			}
		function captura(){
		$con = new controldb;
        $querys = new consultas;
		$title="captura";
		$iddepartamento = $_POST['iddepartamento'];
		$idciudad = $_POST['idciudad'];
		$idusuario = $_POST['idusuario'];
		$sql="insert into formularios(iddepartamento,idciudad,idusuario)values(".$iddepartamento.",".$idciudad.",".$idusuario.")";
		
		$datosinsertar = $querys->insertar($sql);
		
	require_once 'vista/formularios/captura.php';
	
	
	
		
			}
		
		
		function actualiza(){
		$con = new controldb;
        $querys = new consultas;
		$title="Actualizar";
        $id = $_GET['id'];
		$sql="select * from formularios where id='".$id."'";
		$datosconsulta = $querys->consultadatos($sql);
		require_once 'vista/formularios/actualizar.php';
		
			}
			
		function capturaactualiza(){
		$con = new controldb;
        $querys = new consultas;
		$title="captura";
		$id = $_POST['id'];
		$iddepartamento = $_POST['iddepartamento'];
		$idciudad = $_POST['idciudad'];
		$idusuario = $_POST['idusuario'];
		
		  $sql = "update formularios set   iddepartamento = '$iddepartamento',idciudad = '$idciudad', idusuario = '$idusuario' where id = $id  ";

		$datosactualiza = $querys->actualizar($sql);
		
	$datosactualiza;
	require_once 'vista/formularios/capturaact.php';
		
			}
			
					function eliminar(){
		$con = new controldb;
        $querys = new consultas;
		
		$id = $_POST['id'];
		
		
		  $sql = "delete from formularios where  id= $id  ";

		$datoseliminar = $querys->eliminar($sql);
	$datoseliminar;
require_once 'vista/formularios/eliminar.php';
		
			}
			
}




?>