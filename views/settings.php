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

<body onload="mostrarInfo();">
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
          <li>
            <a href="customers.html">
              <i class="nc-icon nc-single-02"></i>
              <p>Cliente</p>
            </a>
         </li>
          <li>
            <a href="inventory.html">
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
          <li class="active">
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
            <a class="navbar-brand" href="#pablo">Configuración</a>
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
                <h5 class="card-title">Propietario</h5>
              </div>
              <div class="card-body ">
                <form>
                  <!-- clientes -->
                  <div id="divSettings">
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="apellido" name="apellido"> 
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido"> 
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido"> 
                      </div>
                    </div>
                  </div>
                  <div class="card-header ">
                    <h5 class="card-title">Empresa</h5>
                  </div>
                    <!-- Documento -->
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Dirección 1</label>
                        <input type="text" class="form-control" placeholder="Sucursal" id="nombre" name="nombre">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Dirección 2</label>
                        <input type="text" class="form-control" placeholder="Sucursal" id="apellido" name="apellido"> 
                      </div>
                    </div>
                  </div>
                    <!-- Direccion y Telefono -->
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Télefono 1</label>
                        <input type="text" class="form-control" placeholder="Contacto sucursal 1" id="direccion" name="direccion">
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Teléfono 2</label>
                        <input type="text" class="form-control" placeholder="Contacto sucursal 2" id="Telefono" name="Telefono">
                      </div>
                    </div>
                  </div>

                   <!-- correo electronico -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" id="correo" name="correo">
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Nit</label>
                        <input type="text" class="form-control" placeholder="#" id="correo" name="correo">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a class="btn btn-primary btn-round" onclick="mostrarInfo();">REGISTRAR</a>
                    </div>
                  </div>
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
    </div>



  </div>
</div>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
    <script>  
    var mostrarInfo = function(){
       $.ajax({
        type: "POST",
        url:"../control/control_settings.php",
        success: function(divSettings){       
         $('#divSettings').html(divSettings); 
       }
      });

      }
    </script>
</body>
 

</html>