<?php 
	$servidor='localhost';
	$usuario='root';
	$pass='';
	$bd='setours';

	$conexion=new mysqli($servidor, $usuario, $pass, $bd);
	if($conexion->connect_errno){
		echo "ERROR AL CONECTARSE ($conexion->connect_errno)";
	}


 ?>