<?php 
	include '../conexion/conexion.php'; // Inlucimos la conexion con la bd


					$tipo_persona=$_POST['tipo_persona'];
					$cadena=$_POST['cadena'];
					$num_documento=$_POST['num_documento'];
					$razon_social=$_POST['razon_social'];
					$razon_comercial=$_POST['razon_comercial'];
					$pais=$_POST['pais'];
					$ciudad=$_POST['ciudad'];
					$direccion=$_POST['direccion'];
					$telefono=$_POST['telefono'];
					$correo=$_POST['correo'];
					$domiciliado=$_POST['domiciliado'];

					$sql = "INSERT INTO proveedor values('','$tipo_persona', '$cadena', '$num_documento', '$razon_social', '$razon_comercial', '$pais', '$ciudad', '$direccion', '$telefono', '$correo', '$domiciliado')";

					if($conexion->query($sql) === true){
						echo 'Sus datos fueron grabados con exito';

					}
					else{
						die("Error al insertar datos: " . $conexion->error);
					}

 ?>