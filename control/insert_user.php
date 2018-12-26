<?php
include ('../config/config.php');

 $accion=$_POST['insertar'];
 $notificacion = "";

	//Registrar clientes
switch ($accion) {


		case 1:
		$nombre1=$_POST['u_nombre1'];
		$nombre2 = $_POST['u_nombre2'];
		$apellido1 = $_POST['u_apellido1'];
		$apellido2 = $_POST['u_apellido2'];
		$documento=$_POST['u_documento'];
		$lugar =$_POST['u_lugar'];
		$direccion = $_POST['u_direccion'];
		$email = $_POST['u_correo'];
		$telefono = $_POST['u_telefono'];
		$profesion=$_POST['u_profesion'];
		$tiempo=$_POST['u_tiempo'];
		$lugarTrabajo=$_POST['u_lugarTra'];
		$sueldo=$_POST['u_sueldo'];
		$observaciones=$_POST['u_observaciones'];



	  $sql = "SELECT nombre1Cliente, apellido1Cliente FROM clientes WHERE documentoCliente = $documento";
	  
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
			$sql1 = "INSERT INTO clientes(nombre1Cliente,nombre2Cliente,apellido1Cliente,apellido2Cliente,documentoCliente,lugarExpedicion,telefonoCliente,direcccionCliente,correoCliente,profesionCliente,tiempoProfesion,lugarTrabajoCliente,sueldoCliente,observaciones)
												 VALUES ('$nombre1','$nombre2','$apellido1','$apellido2',$documento,'$lugar',$telefono,'$direccion','$email','$profesion',$tiempo,'$lugarTrabajo',$sueldo,'$observaciones')";

		$query1 = mysqli_query($link, $sql1);
				if($query1 > 0){
			$notificacion.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Algo a salido mal</strong> Registro no exitoso
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
			
				}else{
					$notificacion.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Algo a salido mal</strong> Registro no exitoso
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
				}
		}
		echo $notificacion;
		break;

		
} 
	
	 
?>