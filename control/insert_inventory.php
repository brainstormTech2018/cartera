<?php
include ('../config/config.php');


 $accion=$_POST['insertar'];
 $notificacion = "";
	//Registrar productos
switch ($accion) {


		case 1:
		$cantidadP =$_POST['cantidad'];
		$articuloP =$_POST['articulo'];
		$marcaP =$_POST['marca'];
		$referenciaP =$_POST['referencia'];
		$serialP =$_POST['serial'];
		$valorP =$_POST['valor'];



	  $sql = "SELECT articuloProducto, serialProducto FROM inventario WHERE serialProducto = $serialP";
	  
		$query = mysqli_query($link, $sql);
		if(mysqli_num_rows($query) > 0){
			if($query){
				if(mysqli_num_rows($query) > 0){
					while ($row1 = mysqli_fetch_array($query)) {
						
					
						echo "<div class='alert alert-success'>
	            <div class='container-fluid'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<i class='material-icons'></i>
					</button>
	            	<b>Documento ya registrado, REGISTRO: ".$row1['articuloProducto'].' '.$row1['serialProducto']."</b>
	            </div>
	        </div>";

					}
				}
				
		    }

		}else{
			$sql1 = "INSERT INTO inventario(cantidadProducto,articuloProducto,marcaProducto,referenciaProducto,serialProducto,valorProducto)
												 VALUES ($cantidadP,'$articuloP','$marcaP','$referenciaP','$serialP',$valorP)";

		$query1 = mysqli_query($link, $sql1);
				if($query1 > 0){
			$notificacion.="<div class='alert alert-success'>
	            <div class='container-fluid'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<i class='material-icons'></i>
					</button>
	            	<b>Â¡REGISTRO EXITOSO!</b>
	            </div>
	        </div>";
			
				}else{
					$notificacion.="<div class='alert alert-danger'>
						             <div class='container-fluid'>										 
										<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
											clear
										</button>
						                 <b>REGISTRO NO EXITOSO</b>
						            </div>
						        </div>";
				}
		}
		echo $notificacion;

		break;

	}
	 
?>