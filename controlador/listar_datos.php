<?php 

	include '../conexion/conexion.php';// Inlucimos la conexion con la bd

	$sql = "SELECT * from proveedor";
					//$sql = "SELECT * from activo where categoria='hardware'";

					$result=mysqli_query($conexion,$sql);

					while($mostrar=mysqli_fetch_array($result)){

						?>
								<tr>
									<td><?php echo $mostrar['num_documento'] ?></td>
									<td><?php echo $mostrar['razon_social'] ?></td>
									<td><?php echo $mostrar['razon_comercial'] ?></td>
									<td><?php echo $mostrar['cadena'] ?></td>
									<td><button id='modificar-proveedor' onclick='actualizar_proveedor(this);' class='btn btn-primary'>Actualizar</button></td>

								</tr>
							

                         
                      
                             <?php

						
					}


 ?>