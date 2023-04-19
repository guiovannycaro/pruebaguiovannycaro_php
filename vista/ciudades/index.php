
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
<td> <button class="btn btn-primary add" data-toggle="modal" name="add" data-target="#RegistrarCiudadesModal	" id="Agregar">AGREGAR</button> </td>
<td> <button class="btn btn-primary add" onclick="history.back()" id="Regresar" name="Regresar">Regresar</button> </td>
</tr>
</table>
<table class="table" style="width:70%">
<thead>
<tr>
<td>Nombre</td>
<td>Accion</td>
</tr>
</thead>
<?php foreach($datosconsulta as $dat){ 


  $datos = $dat['id']."||".$dat['nombre'];
?>
<tbody>
	<tr>
	  <td><?php echo $dat['nombre']; ?></td>
	  <td>
      
     
          
<button  data-toggle="modal" data-target="#EliminarCiudadesModal" id="<?php echo $dat['id']?>" name="drop" class="btn btn-primary btn-xs drop">Eliminar</button> 
      
      -
      
      <button  data-toggle="modal" data-target="#EditarCiudadesModal" onclick="agregardatos('<?php echo $datos; ?>')" name="edit" class="btn btn-primary btn-xs edit">Editar</button> 
      
     
	</tr>
    </tbody>
<?php	}
?>
</table>


<div id="RegistrarCiudadesModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Agregar Ciudad</h4>
 </div>
 <div class="modal-body">

		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre</label>
			   <div class="field desc">
			  	 <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" value="" required>
                 
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
 
 
 
<div id="EditarCiudadesModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Editar Ciudad</h4>
 </div>
 <div class="modal-body">

	
		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre</label>
			   <div class="field desc">
			  	 <input class="form-control" id="nombreu" name="nombreu" placeholder="Nombre" type="text" required>
                 
                 
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
 
 
 <div id="EliminarCiudadesModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Eliminar Ciudad</h4>
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

			var nombre=$('#nombre').val();

 datos= "nombre=" + nombre ;

			$.ajax({
							type: "POST",
							method:"post",
							url: 'ciudades.php?c=captura',
							data: datos,
							success: function(data)
							{
									
		                     alertify.alert('Alert Title', data);
							 console.log(data);
							 window.location.reload();
							}


			});

		});
});
		
		$(document).on('click', '.edit', function(){
			
		  
		  	$('#Editar').click(function(){
			 	var id=$('#idu').val();
		      		var nombre=$('#nombreu').val();


 datos=  "id=" + id +  "&nombre=" + nombre ;
			    $.ajax({
					      type: 'POST',
						  url: 'ciudades.php?c=capturaactualiza',
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
						url: 'ciudades.php?c=eliminar',
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