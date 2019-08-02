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
                        
                        
						<!--
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    -->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>