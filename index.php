<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Evaluacion Front End SETOURS	</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
	</style>
</head>
<body>
	<!--
	<div class="container">
		<h2>Filtros</h2>
		
		<div class=row>
			
		
			<div class="col-md-3">
				<h2>Cadena</h2>
			</div>
			<div class="col-md-3">
				<h2>Ruc</h2>
			</div>
			<div class="col-md-6">
				<h2>Razon Social</h2>
			</div>
		</div>
	</div>
-->

	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" style="border:1px solid; padding: 19px;" method="post">
                    <fieldset>
                        <legend class="text-center header">Filtros</legend>

                        <div class="form-group row">
                            <span class=" text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-3">
                            	<label>Cadena</label>
                               
                                <select id="cadena" name="cadena" class="form-control" required>
                    				<option value="seleccione">- Seleccione cadena -</option>
                    				<option value="sonesta">Sonesta</option>
                    				<option value="hilton">Hilton</option>
              

                  				</select>
                            </div>

                             <div class="col-md-3">
                            	<label>Ruc</label>
                                <input id="ruc" name="ruc" type="text" class="form-control">
                            </div>

                             <div class="col-md-6">
                            	<label>Razon Social</label>
                                <input id="razon" name="razon" type="text" class="form-control">
                            </div>
                        </div>

					<!--Segunda fila formulario-->
                        <div class="form-group row">
                            <span class=" text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-2">
                            	<label>Pais</label>
                               
                                <select id="pais" name="pais" class="form-control" required>
                    				<option value="seleccione">- Seleccione pais -</option>
                    				<option value="peru">Peru</option>
                    				<option value="argentina">Argentina</option>
              

                  				</select>
                            </div>

                            <div class="col-md-2">
                            	<label>Ciudad</label>
                               
                                <select id="ciudad" name="ciudad" class="form-control" required>
                    				<option value="seleccione">- Seleccione ciudad -</option>
                    				<option value="lima">Lima</option>
                    				<option value="cusco">Cusco</option>
                    				<option value="buenos aires">Buenos aires</option>
              

                  				</select>
                            </div>

                            <div class="col-md-2">
                            	<label>Distrito</label>
                               
                                <select id="distrito" name="distrito" class="form-control" required>
                    				<option value="seleccione">- Seleccione ciudad -</option>
                    				<option value="miraflores">Miraflores</option>
                    				<option value="san isidro">San Isidro</option>
                    				
              

                  				</select>
                            </div>

                             
							<div class="col-md-2">
                            	<label>Estado</label>
                               
                                <select id="estado" name="estado" class="form-control" required>
                    				
                    				<option value="activo">Activo</option>
                    				<option value="inactivo">Inactivo</option>
                    				
              

                  				</select>
                            </div>

                            <div class="col-md-2" style="padding-top:36px;">
                            	
                               	<button>Buscar</button>
                               
                            </div>

                            <div class="col-md-2" style="padding-top:36px;">
                            	<button>Limpiar</button>
                            </div>
                             
                        </div>
                        

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
	</div>

	<div class="container" style="padding-top:20px;">
		<div class="row">
			<div class="col-md-12">
				<div class="well well-sm">
					<div class="form-group row">
						<div class="col-md-6" style="padding-top:10px;">
                            	<h6><strong>Todos los proveedores</strong></h6>
                         </div>

                         <div class="col-md-3">
                            	<button type="button" class="btn btn-primary">Cadenas</button>
                         </div>

                         <div class="col-md-3">
                            	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nuevo">Nuevo Proveedor</button>
                         </div>
					</div>
				</div>
			</div>
		</div>

		<table class="table table-striped">
   	     <thead style="background:#cccccc;">
          
          <tr>
               <td>Doc. Fiscal</td>
               <td>Razon Social</td>
               <td>Razon Comercial</td>
               <td>Servicios</td>
                <td>Acciones</td>


          </tr>
      	</thead>

     	 <tbody id="cuerpo">



     	 </tbody>


   		</table>
	</div>


	<!-- MODAL REGISTRAR NUEVO -->
  <div class="modal" id="modal-nuevo">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nuevo Proveedor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">


		<h6>Datos Basicos</h6>

		<div class="row">
			<div class="col-md-12">
				<div class="well well-sm">
					<div class="form-group row">
						<div class="col-md-3">
                            	<label>Tipo persona</label>
                               
                                <select id="tipo-persona" name="tipo-persona" class="form-control" required>
               
                    				<option value="juridica">Juridica</option>
                    				<option value="natural">Natural</option>

                  				</select>
                         </div>

                         <div class="col-md-4">
                            	<label>Cadena</label>
                               
                                <select id="cadena-prov" name="cadena-prov" class="form-control" required>
                    				
                    				<option value="miraflores">Sonesta</option>
                    				<option value="san isidro">Hilton</option>

                  				</select>
                         </div>

                         <div class="col-md-5">
                            	<label>Nro. Documento Fiscal.</label>
                               
                                <input id="id_documento" name="id_documento" type="text" class="form-control">
                         </div>
					</div>

					<div class="form-group row">
						<div class="col-md-6">
							<label>Razon Social</label>
							<input id="razon-social" name="razon-social" type="text" class="form-control">
						</div>

						<div class="col-md-6">
							<label>Razon Comercial</label>
							<input id="razon-comercial" name="razon-comercial" type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>

        <h6>Locacion</h6>  

        <div class="row">
			<div class="col-md-12">
				<div class="well well-sm">
					<div class="form-group row">
						<div class="col-md-6">
                            	<label>Pais</label>
                               
                                <select id="pais" name="pais" class="form-control" required>
               
                    				<option value="peru">Peru</option>
                    				<option value="argentina">Argentina</option>

                  				</select>
                         </div>

                         <div class="col-md-6">
                            	<label>Ciudad</label>
                               
                                <select id="ciudad" name="ciudad" class="form-control" required>
                    				
                    				<option value="lima">Lima</option>
                    				<option value="cusco">Cusco</option>
                    				<option value="buenos aires">Buenos Aires</option>

                  				</select>
                         </div>

                        
					</div>

					<div class="form-group row">
						<div class="col-md-12">
							<label>Direccion</label>
							<input id="direccion" name="direccion" type="text" class="form-control">
						</div>

					</div>
				</div>
			</div>
		</div>

		<h6>Otros datos</h6>  
      		<div class="row">
      			<div class="col-md-12">
      				<div class="form-group row">
						<div class="col-md-3">
							<label>Telefono</label>
							<input id="telefono" name="telefono" type="text" class="form-control">
						</div>

						<div class="col-md-5">
							<label>Correo Electronico</label>
							<input id="correo" name="correo" type="text" class="form-control">
						</div>

						<div class="col-md-4">
							<legend style="font-size:14px;">Es domiciliado</legend>

							<input type="radio" name="es_domiciliado" id="es_domiciliado" value="Si" />
                              <label for="radio-1">Si</label>

                             <input type="radio" name="es_domiciliado" id="es_domiciliado" value="No" />
                              <label for="radio-1">No</label>


						</div>
      				</div>
      			</div>
      		</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
         <button type="button" class="btn btn-primary" data-dismiss="modal" onclick='insertar();'>CREAR NUEVO</button>
          
        </div>
        
      </div>
    </div>
  </div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function(){
			console.log("estamos listos jquery");
		});
	</script>
</body>
</html>