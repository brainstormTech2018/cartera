<?php
include ('../config/config.php');

 $accion=$_POST['insertar'];
 $notificacion = "";


switch ($accion) {


		case 1://Guardar Datos Conyugue
	$nombre1C= $_POST ['nombre1Con'];
    $nombre2C = $_POST ['nombre2Con'];
    $apellido1C = $_POST ['apellido1Con'];
    $apellido2C = $_POST ['apellido2Con'];
    $cedula= $_POST ['cedulaCony'];
    $domicilioC = $_POST ['dia'];
    $profesionC= $_POST ['profesionCony'];
    $observacionesC= $_POST ['observacionCony'];

$sql = "SELECT nombre1Conyugue, apellido1Conyugue FROM familiar WHERE cedulaConyugue = $documento";
	  
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
	            	<b>Documento ya registrado, REGISTRO: ".$row1['u_nombre'].' '.$row1['u_apellido']."</b>
	            </div>
	        </div>";

					}
				}
				
		    }

		}else{
$sql2 = "INSERT INTO familiar(nombre1Conyugue,nombre2Conyugue,apellido1Conyugue,apellido2Conyugue,cedulaConyugue,profesionConyugue,domicilio,observacionesConyugue) VALUES ('$nombre1C','$nombre2C','$apellido1C','$apellido2C',cedulaConyugue,'$domicilioC','$profesionC','$observacionesC')";

		$query1 = mysqli_query($link, $sql2);
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