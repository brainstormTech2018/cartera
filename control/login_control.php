<?php
   include("../config/config.php");
   session_start();
   
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT user_id FROM mcm_usuarios WHERE user_user = '$myusername' and user_pasword = '$mypassword'";
   
      $resultado = $link->query($sql);
      
     if($rowsN = $resultado->fetch_assoc()){

      header('Location: ../views/inicio.php');
      die();

     }else{

      echo 'error';

     }
      
      

   
?>