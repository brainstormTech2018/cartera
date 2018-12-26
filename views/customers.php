
<?php
include('../config/config.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/icono.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SIAC
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="../assets/index.html" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logomcm.png">
          </div>
        </a>
        <a href="../index.html" class="simple-text logo-normal">
          
          <div class="logo-image-big">
            <img src="../assets/img/letras.png">
          </div> 
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="customers.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Cliente</p>
            </a>
         </li>
          <li>
            <a href="inventory.php">
              <i class="nc-icon nc-box"></i>
              <p>Inventario</p>
            </a>
          </li>
          <li>
            <a href="sale.php">
              <i class="nc-icon nc-cart-simple"></i>
              <p>Ventas</p>
            </a>
          </li>
          <li>
            <a href="certificates.php">
              <i class="nc-icon nc-paper"></i>
              <p>Certificados</p>
            </a>
          </li>
          <li>
            <a href="user.html">
              <i class="nc-icon nc-badge"></i>
              <p>Usuarios</p>
            </a>
          </li>
          <li>
            <a href="settings.php">
              <i class="nc-icon nc-settings"></i>
              <p>Configuración</p>
            </a>
          </li>
         </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Paper Dashboard 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>

                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  Cerrar Sesión
                  <p>
                    <span class="d-lg-none d-md-block"></span>
                  </p>
                </a>
              </li>             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
      <div class="content">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Registro de Clientes</h5>
              </div>
              <div class="card-body ">
                <form>

                  <!-- clientes -->

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nombre 1</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="u_nombre1" name="u_nombre1">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nombre 2</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="u_nombre2" name="u_nombre2"> 
                      </div>
                    </div>
                  </div>

                    <!-- Documento -->

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Apellido 1</label>
                        <input type="text" class="form-control" placeholder="Perez, Martinez" id="u_apellido1" name="u_apellido1">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Apellido 2</label>
                        <input type="text" class="form-control" placeholder="Perez, Martinez" id="u_apellido2" name="u_apellido2"> 
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Documento</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="u_documento" name="u_documento">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Lugar de Expedicion</label>
                        <input type="text" class="form-control" placeholder="Lugar de Expedicion" id="u_lugar" name="u_lugar"> 
                      </div>
                    </div>
                  </div>
                    <!-- Direccion y Telefono -->

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" placeholder="Direccion de Residencia" id="u_direccion" name="u_direccion">
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" placeholder="#" id="u_telefono" name="u_telefono">
                      </div>
                    </div>
                  </div>

                   <!-- correo electronico -->

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="text" class="form-control" placeholder="Email" id="u_correo" name="u_correo">
                      </div>
                    </div>
                  </div>

                  <!-- Profesion y tiempo -->

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Profesion</label>
                        <input type="text" class="form-control"  placeholder="Profesion" id="u_profesion" name="u_profesion">
                      </div>
                    </div>
                    
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Tiempo</label>
                        <input type="email" class="form-control" placeholder="tiempo" id="u_tiempo" name="u_tiempo">
                      </div>
                    </div>
                  </div>
                  
                  <!-- Lugar de Trabajo  y sueldo -->

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Lugar de Trabajo</label>
                        <input type="text" class="form-control"  placeholder="Nombre de la Empresa" id="u_lugarTra" name="u_lugarTra">
                      </div>
                    </div>
                    
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Sueldo</label>
                        <input type="email" class="form-control" placeholder="$" id="u_sueldo" name="u_sueldo">
                      </div>
                    </div>
                  </div>
                  
                  <!-- Observaciones -->
                
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Observaciones</label>
                        <textarea class="form-control textarea" id="u_observacion" name="u_observacion" placeholder="Considere ingresar datos relevantes sobre el cliente"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <a class="btn btn-primary btn-round" onclick="listar(1);">AÑADIR</a>
                    
                  </div>
                </form>

                <!-- fin formulario -->

              <div class="card-footer ">
                <hr>
                <div class="stats">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Card conyugue -->


        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Datos Conyugue</h5>
              </div>
              <div class="card-body ">
                <form>
                   <!-- Nombre y Apellido Conyugue  -->
                   <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nombre 1</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre1Con" name="nombre1Con">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nombre 2</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="nombre2Con" name="nombre2Con"> 
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Apellido 1</label>
                        <input type="text" class="form-control" placeholder="Perez, Martinez" id="apellido1Con" name="apellido1Conyugue">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Apellido 2</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido2Con" name="apellido2Con"> 
                      </div>
                    </div>
                  </div>
                  <!-- Cedula Conyugue  -->
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Cedula</label>
                        <input type="text" class="form-control"  placeholder="Cedula" id="cedulaCon" name="cedulaCon">
                      </div>
                    </div>                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Profesion</label>
                        <input type="email" class="form-control" placeholder="Profesion" id="profesionCon" name="profesionCon">
                      </div>
                    </div>
                     <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Domicilio</label>
                       <select class="form-control" name="dia" id="dia" required>
                       <option value="" disabled selected>Elige una opción</option>
                        <option value="Propia">Propia</option>
                        <option value="Familiar">Familiar</option>
                        <option value="Arriendo">Arriendo</option>
                        <option value="Otros">Otros</option>                                            
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Observaciones</label>
                        <textarea type="text" class="form-control textarea" id="observacionCony" name="observacionCony">Considere ingresar datos relevantes sobre el cliente</textarea>
                      </div>
                    </div>
                  </div>

                 <div class="update ml-auto mr-auto"><a class="btn btn-info btn-fill pull-right" data-toggle="tooltip" data-placement="left" title="Guardar Cliente" onclick="lista(1);">Registrar</a>
                    
                  </div> 
                </form>
                          </div>
        </div>
      </div>
    </div>
               
                <!-- fin formulario -->
              
              <div class="card-footer ">
                <hr>
                <div class="stats">                 
                </div>
              </div>
            </div>
          
    
     
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
             
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Brainstorm Tech
              </span>
            </div>
          </div>
        </div>
      </footer>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
  <script type="text/javascript">  
    var listar = function(accion){

    var nombre1= $ ("#u_nombre1").val();
    var nombre2 = $("#u_nombre2").val();
    var apellido1 = $ ("#u_apellido1").val();
    var apellido2 = $ ("#u_apellido2").val();
    var documento= $ ("#u_documento").val();
    var lugar = $ ("#u_lugar").val();
    var direccion = $ ("#u_direccion").val();
    var email = $ ("#u_correo").val();
    var telefono = $ ("#u_telefono").val();
    var profesion= $ ("#u_profesion").val();
    var tiempo= $ ("#u_tiempo").val();
    var lugarTrabajo= $ ("#u_lugarTra").val();
    var sueldo= $ ("#u_sueldo").val();
    var observaciones= $ ("#u_observaciones").val();


      $.ajax({   
       type: "POST",
       url:"../control/insert_user.php",
       data:{"insertar":accion,"u_nombre1":nombre1,"u_nombre2":nombre2, "u_apellido1":apellido1, "u_apellido2":apellido2, "u_documento":documento, "u_lugar":lugar, "u_direccion":direccion,"u_correo":email, "u_telefono":telefono,"u_profesion":profesion,"u_tiempo":tiempo,"u_lugarTra":lugarTrabajo,"u_sueldo":sueldo,"u_observaciones":observaciones},
       success: function(notify){       
     $('#notify').html(notify);
              

     }
       
     });}

  
   </script>

   <script type="text/javascript">  
    var lista = function(accion){

    var nombre1C= $ ("#nombre1Con").val();
    var nombre2C = $("#nombre2Con").val();
    var apellido1C = $ ("#apellido1Con").val();
    var apellido2C = $ ("#apellido2Con").val();
    var cedula= $ ("#cedulaCony").val();
    var domicilioC = $ ("#dia").val();
    var profesionC= $ ("#profesionCon").val();
    var observacionesC= $ ("#observacionCon").val();


      $.ajax({   
       type: "POST",
       url:"../control/insert_family.php",
       data:{"insertar":accion,"nombre1Con":nombre1C,"nombre2Con":nombre2C,"apellido1Con":apellido1C,"apellido2Con":apellido2C,"cedulaCony":cedula,"dia":domicilioC,"profesion":profesionCon,"observacionCon":observacionesC},
       success: function(notify){       
     $('#notify').html(notify);
              alert(accion);

     }
       
     });}

  
   </script>
</body>

</html>