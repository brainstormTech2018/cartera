<?php 
	include ('../config/config.php');

	$sql = "SELECT conf_id, conf_nombre1, conf_nombre2, conf_apellido1, conf_apellido2, conf_nit, conf_dir1, conf_dir2, conf_email, conf_telefono1, conf_telefono2 FROM mcm_settings";

	$resultado = $link->query($sql);
	if($settings = $resultado->fetch_assoc()){
	    $formulario = '<h4><i class=""></i><strong>Propietario:</strong> '
	    					.$settings['conf_nombre1'].' '.
                             $settings['conf_nombre2'].' '.
                             $settings['conf_apellido1'].' '.
                             $settings['conf_apellido2'].' '.
	    					' <br>  
                  <i class=""></i><strong>Nit:</strong> '.$settings['conf_nit'].' <br>  
                  <i class=""></i><strong>Teléfono 1:</strong> '.$settings['conf_telefono1'].' <br>  
                  <i class=""></i><strong>Teléfono 2:</strong> '.$settings['conf_telefono2'].' <br>  
                  <i class=""></i><strong>Dirección 1:</strong> '.$settings['conf_dir1'].' <br>  
                  <i class=""></i><strong>Dirección 2:</strong> '.$settings['conf_dir2'].' <br> 
                  <i class=""></i><strong>Email:</strong> '.$settings['conf_email'].' <br>  ' ;
	}

	echo $formulario;

?>