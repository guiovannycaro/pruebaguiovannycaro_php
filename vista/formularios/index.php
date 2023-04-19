
<?php echo $title; ?>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>

<script src="vista/usuarios/funciones.js"></script>
<table class="table"  style="width:70%">
<tr>
<td>
</td>
<td> <button class="btn btn-primary add" data-toggle="modal" name="add" data-target="#RegistrarFormularioModal	" id="Agregar">AGREGAR</button> </td>
<td> <button class="btn btn-primary add" onclick="history.back()" id="Regresar" name="Regresar">Regresar</button> </td>
</tr>
</table>
<table class="table" style="width:70%">
<thead>
<tr>
<td>Ciudad</td>
<td>Departamento</td>
<td>Usuario</td>
<td>Accion</td>
</tr>
</thead>
<?php foreach($datosconsulta as $dat){ 


  $datos = $dat['id']."||".$dat['idciudad']."||".$dat['iddepartamento']."||".$dat['idusuario'];
 
?>
<tbody>
	<tr>
	  <td><?php echo $dat['ciudad']; ?></td>
	  <td><?php echo $dat['departamento']; ?></td>
	  <td><?php echo $dat['usuario']; ?></td>
	  <td>
      
     
          
<button  data-toggle="modal" data-target="#EliminarFormularioModal" id="<?php echo $dat['id']?>" name="drop" class="btn btn-primary btn-xs drop">Eliminar</button> 
      
      -
      
      <button  data-toggle="modal" data-target="#EditarFormularioModal" onclick="agregardatos('<?php echo $datos; ?>')" name="edit" class="btn btn-primary btn-xs edit">Editar</button> 
      
     
	</tr>
    </tbody>
<?php	}
?>
</table>


<div id="RegistrarFormularioModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Agregar Formulario</h4>
 </div>
 <div class="modal-body">

		 

		  <div class="form-group">
			   <label class="control-label" for="inputPatient">Usuario</label>
			   <div class="field desc">
			   <select class="form-select"  id="idusuario" name="idusuario" aria-label="Default select example">
                     <option selected>Seleccione una opcion</option>
					 <?php foreach($datosusuarios as $dat){  ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nombre']; ?></option>
					<?php	} ?>
                         </select>
                 
                 	 <input class="form-control" name="id" id="id" type="hidden">
			  </div>
     	 </div>

		  <div class="form-group">
			   <label class="control-label" for="inputPatient">Ciudades</label>
			   <div class="field desc">
			   <select class="form-select" id="idciudad" name="idciudad"  aria-label="Default select example">
                     <option selected>Seleccione una opcion</option>
					 <?php foreach($datosciudades as $dat){  ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nombre']; ?></option>
					<?php	} ?>
                         </select>
                 
                 	 <input class="form-control" name="id" id="id" type="hidden">
			  </div>
     	 </div>

		  <div class="form-group">
			   <label class="control-label" for="inputPatient">Departamentos</label>
			   <div class="field desc">
			   <select class="form-select" id="iddepartamento" name="iddepartamento"  aria-label="Default select example">
                     <option selected>Seleccione una opcion</option>
					 <?php foreach($datosdepartamentos as $dat){  ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nombre']; ?></option>
					<?php	} ?>
                         </select>
                 
                 	 <input class="form-control" name="id" id="id" type="hidden">
			  </div>
     	 </div>
 </div>




 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Registrar">Registrar</button>
  
 </div>
 </div>
 </div>
 </div>
 
 
 
<div id="EditarFormularioModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Editar Formulario</h4>
 </div>
 <div class="modal-body">

	
		
 <div class="form-group">
			   <label class="control-label" for="inputPatient">Usuario</label>
			   <div class="field desc">
			   <select class="form-select"  id="idusuariou" name="idusuariou" aria-label="Default select example">
                     <option selected>Seleccione una opcion</option>
					 <?php foreach($datosusuarios as $dat){  ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nombre']; ?></option>
					<?php	} ?>
                         </select>
                 
                 	 <input class="form-control" name="id" id="id" type="hidden">
			  </div>
     	 </div>

		  <div class="form-group">
			   <label class="control-label" for="inputPatient">Ciudades</label>
			   <div class="field desc">
			   <select class="form-select" id="idciudadu" name="idciudadu"  aria-label="Default select example">
                     <option selected>Seleccione una opcion</option>
					 <?php foreach($datosciudades as $dat){  ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nombre']; ?></option>
					<?php	} ?>
                         </select>
                 
                 	 <input class="form-control" name="id" id="id" type="hidden">
			  </div>
     	 </div>

		  <div class="form-group">
			   <label class="control-label" for="inputPatient">Departamentos</label>
			   <div class="field desc">
			   <select class="form-select" id="iddepartamentou" name="iddepartamentou"  aria-label="Default select example">
                     <option selected>Seleccione una opcion</option>
					 <?php foreach($datosdepartamentos as $dat){  ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nombre']; ?></option>
					<?php	} ?>
                         </select>
                 
                 	 <input class="form-control" name="id" id="id" type="hidden">
			  </div>
     	 </div>


		 <div class="form-group">
			 
			   <div class="field desc">
			  <input class="form-control" id="idu" name="idu"  type="hidden">
			  </div>
     	 </div>
 
		
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Editar">Editar</button>
  
 </div>
 </div>
 </div>
 </div>
 
 
 <div id="EliminarFormularioModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Eliminar Formulario</h4>
 </div>
 <div class="modal-body">

		 seguro de eliminar?

   

 
		
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Eliminar">Eliminar</button>
  
 </div>
 </div>
 </div>
 </div>
<script>  
$(document).ready(function(){  

	
  $(document).on('click', '.add', function(){  
	$('#Registrar').click(function(){

			var idusuario=$('#idusuario').val();
			var idciudad=$('#idciudad').val();
			var iddepartamento=$('#iddepartamento').val();
 datos= "iddepartamento=" + iddepartamento + "&idciudad=" + idciudad + "&idusuario=" + idusuario ;

			$.ajax({
							type: "POST",
							method:"post",
							url: 'formularios.php?f=captura',
							data: datos,
							success: function(data)
							{
									
		                     alertify.alert('Alert Title', data);
							 window.location.reload();
							 console.log(data);
							}


			});

		});
});
		
		$(document).on('click', '.edit', function(){
			
		  
		  	$('#Editar').click(function(){
			 	var id=$('#idu').val();
				 var idusuario=$('#idusuariou').val();
		     	var idciudad=$('#idciudadu').val();
		    	var iddepartamento=$('#iddepartamentou').val();



 datos= "id=" + id + "&idusuario=" + idusuario + "&idciudad=" + idciudad + "&iddepartamento=" + iddepartamento ;

			    $.ajax({
					      type: 'POST',
						  url: 'formularios.php?f=capturaactualiza',
						  data: datos,
							success: function(data)
							{		
						
		                     	alertify.alert('Alert Title', data);
								 window.location.reload();
							}

			           });
		  
		    });
     });
	 
	  $(document).on('click', '.drop', function(){
			
		 var id = $(this).attr("id");
		  
	  	  	$('#Eliminar').click(function(){
		
			   $.ajax({
						type: "POST",
						method:"post",
						url: 'formularios.php?f=eliminar',
						data: 'id='+id,
							success: function(data)

							{	
		                     	alertify.alert('Eliminado',data);
								 window.location.reload();
							}
			        });
		  
		});
});

});
</script>