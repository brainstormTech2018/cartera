<?php 
include ('../config/config.php');

$sql = "SELECT conf_id, conf_nombre1, conf_nombre2, conf_apellido1, conf_apellido2, conf_nit, conf_dir1, conf_dir2, conf_email, conf_telefono1, conf_telefono2 FROM mcm_settings";

$resultado = $link->query($sql);
if($settings = $resultado->fetch_assoc()){
    $formulario = '<div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="De control" id="nombre" name="nombre" value='.$settings['conf_nombre1'].'>
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="apellido" name="apellido" value='.$settings['conf_nombre2'].'> 
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido" value='.$settings['conf_apellido1'].'> 
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido" value='.$settings['conf_apellido2'].'> 
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
                        <input type="text" class="form-control" placeholder="Sucursal" id="nombre" name="nombre" value='.$settings['conf_dir1'].'>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Dirección 2</label>
                        <input type="text" class="form-control" placeholder="Sucursal" id="apellido" name="apellido" value='.$settings['conf_dir2'].'> 
                      </div>
                    </div>
                  </div>
                    <!-- Direccion y Telefono -->
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Télefono 1</label>
                        <input type="text" class="form-control" placeholder="Contacto sucursal 1" id="direccion" name="direccion" value='.$settings['conf_telefono1'].'>
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Teléfono 2</label>
                        <input type="text" class="form-control" placeholder="Contacto sucursal 2" id="Telefono" name="Telefono" value='.$settings['conf_telefono2'].'>
                      </div>
                    </div>
                  </div>

                   <!-- correo electronico -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" id="correo" name="correo" value='.$settings['conf_email'].'>
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <label>Nit</label>
                        <input type="text" class="form-control" placeholder="#" id="correo" name="correo" value='.$settings['conf_nit'].'>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a class="btn btn-primary btn-round" onclick="listar();">REGISTRAR</a>
                    </div>
                  </div>
                </div>';
 }

echo $formulario;
 ?>