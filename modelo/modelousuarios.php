<?php



	require_once("db/coneccion.php");

	require_once 'controlador/controladorusuarios.php'; 

class consultas{

	
	function consultar(){
 
        $cons = new controldb;
		$cons->connect();
    	$sql="select * from usuarios";
		$res = $cons->query($sql);
	$data=NULL;
	while($fila = $cons->fetch_row($res))	{
			 $data[]=$fila;
		}
		
return $data;
}

	function consultadatos($sql){
 
        $cons = new controldb;
		$cons->connect();
    	
		$res = $cons->query($sql);
	$data=NULL;
	while($fila = $cons->fetch_row($res))	{
			 $data[]=$fila;
		}
		
return $data;
}



function insertar($sql){

    $cons = new controldb;
	$cons->connect();
	$res = $cons->query($sql);
	if($res<=0){
        return $menssage = "no se puedo insertar el registro";
	}else{

	return $menssage = "se inserto el registro";	
	}
}


function actualizar($sql){
	
	 $cons = new controldb;
	$cons->connect();
	$res = $cons->query($sql);
	
	  if($res<=0){
echo "no se puedo actualizar el registro";
	}else{
	echo "se actualizo el registro";	
	}
}


	function eliminar($sql){
	 $cons = new controldb;
	$cons->connect();
	$res = $cons->query($sql);
	if($res<=0){
echo "no se puedo eliminar el registro";
	}else{
	echo "se elimino el registro";	
	}
	
}
	
}

?>