<?php 
session_start();

	require '../admin/config.php';
	require './functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
	
	    $sql = "SELECT user_type FROM mcm_usuarios WHERE user_user = '$usuario' AND user_pasword = '$password'";
	    
	    $resultado = $link->query($sql);

	    if($rowsN = $resultado->fetch_assoc()){
        
		$_SESSION['userType'] = $rowsN['user_type'];
			
			header('Location: ../../views/inicio.php');
		
	  	} else {
	    	echo "<div>    		 													 
						<p><strong><center>Tu usuario y/o contraseña son incorrectos</center></strong></p>
		          </div>";
	    	
	  	}
	  	
}
	require '../views/login.view.php';

?>
