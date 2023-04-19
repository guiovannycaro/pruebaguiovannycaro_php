
<?php

require("../controlador/controlador.php");

$sql1 ="select * from cliente";
$datosconsulta = $querys->consultar($sql1);
?>
<script>
function modificar(cod){
	
	window.location='modifica.php?id='+cod+'&function=modificar';
	
	}
	
	function eliminar(cod){
	
	window.location="actualiza.php?id="+cod+"&function=eliminar";
	
	}
	
	function insertar(){
	
	window.location="insetar.php";
	
	}
</script>

<table width="591" border="1">
  <tr>
    <td width="123">Codigo</td>
    <td width="97">Nombre</td>
    <td width="98">Apellido</td>
    <td width="125">Telefono</td>
    <td width="114">Accion</td>
    
  </tr>
  <?php foreach($datosconsulta as $d) { ?>
  <tr>
    <td><?php echo $d['cod_cliente']; ?></td>
    <td><?php echo $d['nombre']; ?></td>
    <td><?php echo $d['apellido']; ?></td>
    <td><?php echo $d['telefono']; ?></td>
    <td><img src="img/lapiz.png" width="20" height="20" onclick="modificar(<?php echo $d['cod_cliente']; ?>)"> - <img src="img/eliminar.png" width="20" height="20" onclick="eliminar(<?php echo $d['cod_cliente']; ?>)"></td>
  </tr>
   <?php } ?>
</table>
<table width="590" border="1">
  <tr>
    <td>
    <input type="submit" name="button" id="button" value="Insertar" onclick="insertar()"/>
    
    </td>
  </tr>
</table>
<p>&nbsp;</p>
