<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
$id = $_GET['id'];

echo $id;
include('../controlador/controlador.php');


$sql="select * from cliente where cod_cliente='".$id."'";
$datos = $query->consultar($sql);

?>
<body>


<form action="actualiza.php" method="post"   id="form1" name="form1"  >

<table width="200" border="1">
  <tr>
    <td width="40">Nombre</td>
    <td width="144">
     
      <input type="text" name="nombre" id="nombre" value="<?php echo $datos[0]['nombre']; ?>" />
    </td>
  </tr>
  <tr>
    <td>Apellido</td>
    <td>
     
      <input type="text" name="apellido" id="apellido" value="<?php echo $datos[0]['apellido']; ?>"/>
   </td>
  </tr>
  <tr>
    <td>Tenolefo</td>
    <td>

      <input type="text" name="telefono" id="telefono" value="<?php echo $datos[0]['telefono']; ?>"/>
    </td>
  </tr>
  <tr>
    <td>
    <input type="hidden" name="funcion" id="funcion" value="modificar"/>
    <input type="hidden" name="ids" id="ids" value="<?php echo $id; ?>"/></td>
    <td>
      <input type="submit" name="button" id="button" value="Enviar" />
  </td>
  </tr>
</table>
  </form>
</body>
</html>