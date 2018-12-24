<?php 
    session_start();

    require '../admin/config.php';
    require './functions.php';

    // Comprobar session
    if (isset($_SESSION['usuario'])) {
        // Validar los datos por privilegio
        /*$conexion = conexion($db_config);
        $usuario = iniciarSession('usuario', $conexion);*/
        

        if ($_SESSION['userType'] == 'docente') {
           header('Location: ../../views/user.php');
        

       } elseif ($_SESSION['userType'] == 'administrativo') {

            header('Location: ../../views/index.php');
           
        } else {
            header('Location:login/control/login.php');
        }
    } else {
        header('Location:login/control/login.php');
    }
    
?>
