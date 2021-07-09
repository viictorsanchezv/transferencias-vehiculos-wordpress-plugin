<?php
/*
Template Name: Transferencia Vehiculos
Autor: Victor Sanchez
*
*
*
*/

    //get_header();
    
include('insertar-contrato.php');

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href='<?php echo plugin_dir_url( __DIR__ ).'assets/css/custom-style.css'; ?>' rel="stylesheet">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<title>Transferir Coches</title>
<div class='container'>
    <div class='row mt-5'>
        <div class='col-12 col-md-12 col-lg-12'>
            <h3 class='title-page'> Transferencia de veh&iacuteculo </h3>
            <p> Cambio efectivo de titularidad de un vehículo. </p>
        </div>
    </div>

    <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-12'>
            <ul class="nav nav-tabs border-0" id="tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active d-flex align-items-center" id="vehiculo-tab" data-bs-toggle="tab" data-bs-target="#vehiculo" type="button" role="tab" aria-controls="vehiculo" aria-selected="true">
                        <span class='step-number'> 1 </span>
                        <img width='24' height='24' class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/car-base.png'; ?>" alt="">
                        <div class='d-flex flex-column text-left step-title-font-size' >
                            <p class='mb-0 font-weight-bold'>Veh&iacuteculo</p>
                            <span>Informaci&oacuten sobre su veh&iacuteculo</span>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex d-flex align-items-center" id="comprador-tab" data-bs-toggle="tab" data-bs-target="#comprador" type="button" role="tab" aria-controls="comprador" aria-selected="false">
                        <span class='step-number'> 2 </span>
                        <img width='24' height='24' class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/user.svg'; ?>" alt="">
                        <div class='d-flex flex-column text-left step-title-font-size' >
                            <p class='mb-0 font-weight-bold' id='comprador-title'>Comprador</p>
                            <span id='title-comprador-section' id='title-comprador-section'>Datos personales del comprador</span>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex d-flex align-items-center" id="vendedor-tab" data-bs-toggle="tab" data-bs-target="#vendedor" type="button" role="tab" aria-controls="vendedor" aria-selected="false">
                        <span class='step-number'> 3 </span>
                        <img width='24' height='24'  class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/user.svg'; ?>" alt="">
                        <div class='d-flex flex-column text-left step-title-font-size' >
                            <p class='mb-0 font-weight-bold' id='vendedor-title' >Vendedor</p>
                            <span id='title-vendedor-section' id='title-vendedor-section' >Datos personales del vendedor</span>
                        </div>
                    
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex d-flex align-items-center" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button" role="tab" aria-controls="documentos" aria-selected="false">
                        <span class='step-number'> 4 </span>
                        <img width='24' height='24' class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/document_v2.svg'; ?>" alt="">
                        <div class='d-flex flex-column text-left step-title-font-size' >
                            <p class='mb-0 font-weight-bold'>Documentos</p>
                            <span>Documentos necesarios</span>
                        </div>
                    
                    </button>
                </li>
            </ul>
          

            <div class='row'>
              <!-- contenido de los tabs -->
                <div class='col-lg-9 col-md-9 col-sm-12 col-12'>
                    <form action='' method='POST' enctype="multipart/form-data" >
                        <div class="tab-content" id="myTabContent">
                            <input type='hidden' id='web-url' value='<?php echo get_site_url(); ?>'>
                            <!-- Vehiculos -->
                            <div class="tab-pane fade show active mt-3 p-4" id="vehiculo" role="tabpanel" aria-labelledby="vehiculo-tab">
                                    <div class='row justify-content-center'>
                                        <div class='col-12 col-md-12 col-lg-12 text-center align-title'>
                                            <h3 class='title-border'> Elige tu veh&iacuteculo</h3>
                                        </div>
                                    </div>
                                    <div class='row justify-content-center'>
                                        <div class='col-12 col-md-12 col-lg-12 text-center'>
                                            <?php include('section-vehiculo.php'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class='row justify-content-center'>
                                        <!-- guardar -->
                                        <?php //if( is_user_logged_in() ){ ?>
                                            <button type='submit' name='submit' class='button-save mt-3 mb-3'>
                                            <i class="fas fa-save"></i>  
                                            Guardar </button>
                                        
                                        <?php //}else{ ?>
                                                <!-- Button trigger modal -->
                                                <!--<button type="button" class="button-save mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">-->
                                                <!--    <i class="fas fa-save"></i>  -->
                                                <!--    Guardar -->
                                                <!--</button>-->
                                        <?php //} ?>
                                        
                                    </div>
                                    
                                </div>
                           
                            <!-- Comprador  -->
                            <div class="tab-pane fade mt-3 p-4" id="comprador" role="tabpanel" aria-labelledby="comprador-tab">
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-12 col-lg-12 text-center mt-3 mb-3 align-title'>
                                        <div class='row w-100'>
                                            <div class='col-12 col-md-6 col-lg-6'>
                                                <h3 class='title-border m-auto' id='titulo-comprador' > Datos del comprador</h3>    
                                            </div>
                                            <div class='col-12 col-md-6 col-lg-6 text-center'>
                                                <label class='mb-0'>&#191; Eres una empresa &#63; </label>
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" name='empresa-comprador' id="empresa-comprador">
                                                  <label class="custom-control-label" id='empresa-comprador-label' for="empresa-comprador">S&iacute</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-12 col-lg-12 text-center'>
                                        <?php include('section-comprador.php'); ?>
                                    </div>
                                </div>
                                
                                <div class='row justify-content-center'>
                                    <!-- guardar -->
                                    <button type='submit' name='submit' class='button-save mt-3 mb-3'>
                                            <i class="fas fa-save"></i>  
                                            Guardar </button>
                                </div>
                                
                                
                            </div>
                            <!-- Vendedor  -->
                            
                            <div class="tab-pane fade mt-3 p-4" id="vendedor" role="tabpanel" aria-labelledby="vendedor-tab">
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-12 col-lg-12 text-center mt-3 mb-3 align-title'>
                                        <h3 class='title-border' id='titulo-vendedor'> Datos del vendedor</h3>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-12 col-lg-12 text-center'>
                                        <?php include('section-vendedor.php'); ?>
                                    </div>
                                </div>
                                
                                <div class='row justify-content-center'>
                                    <!-- guardar -->
                                    <button type='submit' name='submit' class='button-save mt-3 mb-3'>
                                            <i class="fas fa-save"></i>  
                                            Guardar </button>
                                </div>
                                
                            </div>
                            <!-- Documentos  -->
                            
                            <div class="tab-pane fade mt-3 p-4" id="documentos" role="tabpanel" aria-labelledby="documentos-tab">
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-12 col-lg-12 text-center mt-3 mb-3 align-title'>
                                        <h3 class='title-border'> Documentaci&oacuten necesaria</h3>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-12 col-lg-12 text-center'>
                                        <?php include('section-documentation.php'); ?>
                                    </div>
                                </div>
                                
                                <div class='row justify-content-center'>
                                    <!-- guardar -->
                                    <button type='submit' name='submit' class='button-save mt-3 mb-3'>
                                            <i class="fas fa-save"></i>  
                                            Guardar </button>
                              
                                </div>
                                
                            </div>
                        
                        </div>
                        <input type='hidden' id='total-value' name='total-value'>
                    </form> 
                </div> 

                <!-- calculo de ITP   -->
                <div class='col-lg-3 col-sm-12 col-12 mt-3 sticky-card'>
                    <div class="card" style="border-radius: 10px">
                        <div class="card-body">
                            
                            <table id='calculo-itp' class="table" style='display: none;'>
                                <thead class='w-100'>
                                    <tr>
                                        <th class='table-itp text-center' colspan='2'>C&aacutelculo ITP</th>
                                    </tr>
                                    
                                </thead>    
                                <tbody class='w-100'>
                                    
                                    <tr>
                                      <th scope="row" class='font-size-table font-weight-normal' >PRECIO DE VENTA</th>
                                      <td id='precio-venta' class='font-size-table'>0</td>
                                    </tr>
                                    <tr>
                                      <th scope="row" class='font-size-table font-weight-normal'>VALORACI&OacuteN SEG&UacuteN PRECIO DE VENTA</th>
                                      <td id='valoracion-precio-venta' class='font-size-table'>0</td>
                                    </tr>
                                    <tr>
                                      <th scope="row" class='font-size-table font-weight-normal' >FACTOR DE CORRECCI&OacuteN</th>
                                      <td id='factor-correccion' class='font-size-table'>0</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='font-size-table font-weight-normal' > Valoraci&oacuten real</th>
                                        <td id='valoracion-real' class='font-size-table'>0</td>
                                    </tr>
                                    <tr id='calculo-itp-total' class='descuento-itp'>
                                      <th scope="row" id='porcentaje-itp' class='font-size-table font-weight-normal font-weight-bold'> ITP (%) </th>
                                      <td id='itp-total' class='font-size-table'>0</td>
                                    </tr>
                                    
                    
                                </tbody>
                                
                            </table>
                            
                            
                            
                            <table id='costes-itp' class="table">
                                  <thead class='w-100'>
                                    <tr>
                                      <th class='table-itp text-center' colspan="2">Costes</th>
                                    </tr>
                                  </thead>
                              
                                  <tbody class='w-100'>
                                    <tr id='itp-costes-tabla'>
                                      <th scope="row" class='font-size-table font-weight-normal' >ITP</th>
                                      <td id='itp-costes' class='font-size-table'> 0 </td>
                                    </tr>
                                    
                                    <tr class='w-100' id='solo-gestion-dgt-container' style='display:none;'>
                                        <th scope='row' class='font-size-table font-weight-normal'> Informe gesti&oacuten DGT</th>
                                        <td id='solo-gestio-dgt' class='font-size-table'> 15 € </td>
                                    </tr>
                                    
                                     <tr class='w-100' id='precio-notificacion-container' style='display:none;'>
                                        <th scope='row' class='font-size-table font-weight-normal'> Precio de notificaci&oacuten de venta</th>
                                        <td id='precio-notificacion-costes' class='font-size-table'> 50 € </td>
                                    </tr>
                                    
                                    <tr id='tasa-transferencia' style='display:none;'>
                                      <th scope="row" class='font-size-table font-weight-normal' >Tasas de transferencia de veh&iacuteculo </th>
                                      <td id='tasa-transferencia-tabla' class='font-size-table'> 55.15 € </td>
                                    </tr>
                                    
                                    <tr id='informe-trafico' style='display:none;'>
                                      <th scope="row" class='font-size-table font-weight-normal' > Tasas Informe de tr&aacutefico </th>
                                      <td id='informe-trafico-tabla' class='font-size-table'> 8.59 € </td>
                                    </tr>
                                    	
                                    <tr id='alta-baja' style='display:none;'>
                                      <th scope="row" class='font-size-table font-weight-normal' >Tasas alta de baja temporal </th>
                                      <td id='alta-baja-tabla' class='font-size-table'> 30 € </td>
                                    </tr>
                                    
                                    <tr id='ficha-tecnica-itv' style='display:none;'>
                                      <th scope="row" class='font-size-table font-weight-normal' > Tasas cambios ficha t&eacutecnica en ITV </th>
                                      <td id='ficha-tecnica-tabla' class='font-size-table'> 20.40  € </td>
                                    </tr>
                            
                                    <tr id='tramitacion' style='display:none;'>
                                      <th scope="row" class='font-size-table font-weight-normal' >Tramitaci&oacuten (honorarios, derechos colegiales, mensajer&iacutea...)</th>
                                      <td id='tramitacion-tabla' class='font-size-table'> 115.10 €</td>
                                    </tr>
                                  
                                    <tr>
                                      <th scope="row" class='font-size-table'>TOTAL (IVA INCLUIDO)</th>
                                      <td id='total-tabla' class='font-size-table' >0</td>
                                    </tr>
                        
                                  </tbody>
                              
                            </table>
                            <p>
                               Completa los datos de tu veh&iacuteculo para 
                               saber cu&aacutento costar&aacute la transferencia: 
                                
                            </p>
                           
                        </div>
                    </div>
                </div>
                
                
                <!-- modal validaciones informativas -->
                
                <div class="modal modal-cambio-vehiculo rounded" tabindex="-1" role="dialog" id="modalPrecioValidate" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content modal-size p-2">
                        
                          <div class="modal-header border-0 text-center d-block">
                            <p class="modal-title w-100" id="exampleModalLabelValidacion">Tenga en cuenta que el precio 
                            de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes. </p>
                            <strong id='precio-validado'> </strong>
                            
                          </div>
                           
                          <div class="modal-footer border-0 d-flex justify-content-center p-0">
                             <button type="button" data-dismiss="modal" id='closeModalPrecioValidate' class="button-aceptar-cambio" >Aceptar</button>
                          </div>
                        
                    </div>
                  </div>
                </div>
                
                
                <!-- Modal cambio de vehiculo -->
                <div class="modal modal-cambio-vehiculo rounded" tabindex="-1" role="dialog" id="modal-cambio-vehiculo" style='display: none;'>
                  <div class="modal-dialog" role="document">
                    <div class="modal-content modal-size p-2">
                        
                          <div class="modal-header border-0 text-center">
                            <p class="modal-title w-100" id="exampleModalLabel">Si cambia de tipo de veh&iacuteculo perder&aacute los datos introducidos</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                           
                          <div class="modal-footer border-0 d-flex justify-content-center p-0">
                             <button type="button" id='aceptar-cambio' data-dismiss="modal" class="button-aceptar-cambio" >Aceptar y cambiar</button>
                             <button type="button" id='cancelar-cambio' class="button-login" >Cancelar</button>
                          </div>
                        
                    </div>
                  </div>
                </div>
                
                <!-- modal cambio vehiculo moto -->
                <!--<div class="modal modal-cambio-vehiculo rounded" tabindex="-1" role="dialog" id="modal-cambio-vehiculo-moto" style='display: none;'>-->
                <!--  <div class="modal-dialog" role="document">-->
                <!--    <div class="modal-content modal-size p-2">-->
                        
                <!--          <div class="modal-header border-0 text-center">-->
                <!--            <p class="modal-title w-100" id="exampleModalLabel">Si cambia de tipo de veh&iacuteculo perder&aacute los datos introducidos</p>-->
                <!--            <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--              <span aria-hidden="true">&times;</span>-->
                <!--            </button>-->
                <!--          </div>-->
                           
                <!--          <div class="modal-footer border-0 d-flex justify-content-center p-0">-->
                <!--             <button type="button" id='aceptar-cambio-moto' data-dismiss="modal" class="button-aceptar-cambio" >Aceptar y cambiar</button>-->
                <!--             <button type="button" id='cancelar-cambio-moto' class="button-login" >Cancelar</button>-->
                <!--          </div>-->
                        
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                
                
                <!-- Modal iniciar sesion-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content modal-size p-2">
                        <form action='' method='POST' >
                          <div class="modal-header border-0 text-center">
                            <h5 class="modal-title w-100" id="exampleModalLabel">¡Inicia sesi&oacuten!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                           <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="basic-username"> NIF/NIE/CIF <span class='text-danger'> * </span>  </label>
                                    <input type="text" class="form-control" id='username' name='username' placeholder='Tu NIF, NIE o CIF' aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                 <div class="form-group mb-3">
                                    <label for="basic-password" >Contrase&ntilde;a <span class='text-danger'> * </span> </label>
                                    <input type="password" name='password' id='password' class="form-control" placeholder="****" aria-label="password" aria-describedby="basic-addon2" required>
                                </div>
                                <div id='spinner' class="spinner-border text-warning" role="status" style='display:none;'>
                                  <span class="sr-only">Loading...</span>
                                </div>
                                 <p class='w-100 text-success' id='sucess-mensagge' style='display:none;'>Inicio de sesi&oacuten correctamente, cargando la p&aacutegina, por favor espere...</p>
                                 <p id='error'></p>
                                <a href='#'>¿Ha olvidado su contrase&ntilde;a?</a>
                          </div>
                          <div class="modal-footer border-0 text-left">
                            <button type="button" id='iniciar-sesion' class="button-login w-100" >Iniciar sesi&oacuten</button>
                            <p class='w-100'>¿A&uacuten no tienes cuenta? <a href='#' data-dismiss="modal" aria-label="Close"  data-toggle="modal" data-target="#registerModal" > Reg&iacutestrate </a></p>
                          </div>
                        </form>  
                    </div>
                  </div>
                </div>
                
                <!-- Modal registrar -->
                
                <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action='' method='POST' >
                            <div class="modal-content bg-modal-content modal-size p-2">
                                   
                                <ul class="nav nav-tabs" id="registerTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Particular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profesional</a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content border-tab-content" id="registerTabContent">
                                    <div class="tab-pane fade show active p-4 text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button> 
                                        <h5 class='mb-3'>¡Reg&iacutestrate en segundos!</h5>
                                        
                                            <div class='row'>
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> NIF/NIE/CIF <span class='text-danger'> * </span> </label>
                                                        <input type="text" class="form-control" placeholder='Tu NIF, NIE o CIF' id='particular-username' name="username" aria-label="nif" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Correo electr&oacutenico <span class='text-danger'> * </span> </label>
                                                        <input type="mail" class="form-control" name="juangomez@gmail.com" id='particular-email' placeholder='juangomez@gmail.com' aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div> 
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Contrase&ntilde;a <span class='text-danger'> * </span> </label>
                                                        <input type="password" class="form-control" placeholder='Contraseña' id='particular-password' name="password" aria-label="password" aria-describedby="basic-addon1">
                                                    </div>
                                                </div> 
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Repita la contrase&ntilde;a <span class='text-danger'> * </span> </label>
                                                        <input type="password" class="form-control" placeholder='Repita la contraseña' name="repeat_password" aria-label="repeatpassword" aria-describedby="basic-addon1">
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class='row'>
                                                <div class='col-12 col-md-12 col-lg-12 text-left'>
                                                    
                                                    <p class='w-100 text-success' id='particular-sucess' style='display:none;'>Inicio de sesi&oacuten correctamente, cargando la p&aacutegina, por favor espere...</p>
                                                    <div id='particular-spinner' class="spinner-border text-warning" role="status" style='display:none;'>
                                                      <span class="sr-only">Loading...</span>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                          <input class="form-check-input is-invalid" type="checkbox" value="" id="politica-privacidad" required>
                                                          <label class="text-dark form-check-label" for="invalidCheck3">
                                                            Acepto la pol&iacutetica de privacidad y las condiciones de uso.
                                                          </label>
                                                          
                                                        </div>
                                                    </div>
                                                    <button type="button" class="button-login w-100" id="particular-tab" >Registrarse</button>
                                                </div>
                                            </div>
                                            
                                            <div class='row'>
                                                <div class='col-12 col-md-12 col-lg-12 text-left'>
                                                     <p class='w-100'>¿Ya tienes cuenta? <a href='#' data-dismiss="modal" aria-label="Close"  data-toggle="modal" data-target="#exampleModal" > Inicia sesi&oacuten </a></p>
                                                </div>
                                                
                                            </div> 
                                            
                                    </div>
                                  
                                    <div class="tab-pane fade p-4 text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button> 
                                        <h5 class='mb-3'>¡Reg&iacutestrate en segundos!</h5>
                                          
                                          <form action='' method='POST' >
                                            <div class='row'>
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <!-- a que se dedica -->
                                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">¿A qu&eacute te dedicas?</label>
                                                    <select class="custom-select my-1 mr-sm-2" id="profesional-dedica">
                                                        <option selected value="compraventa">Compraventa</option>
                                                        <option value="taller">Taller</option>
                                                        <option value="asesoria">Asesor&iacutea</option>
                                                        <option value="corredorseguros">Corredur&iacutea de seguros</option>
                                                        <option value="despachosabogados">Despacho de abogados</option>
                                                        <option value="gremio">Pertenezco a un gremio</option>
                                                        <option value="otros">Otros</option>
                                                    </select>
                                                </div>
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> NIF/NIE/CIF <span class='text-danger'> * </span> </label>
                                                        <input type="text" class="form-control" placeholder='Tu NIF, NIE o CIF' id='profesional-username' name="username" aria-label="nif" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Tel&eacutefono <span class='text-danger'> * </span> </label>
                                                        <input type="number" class="form-control" placeholder='Teléfono de contacto' id='profesional-telf' name="telefono" aria-label="nif" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Correo electr&oacutenico <span class='text-danger'> * </span> </label>
                                                        <input type="mail" class="form-control" name="juangomez@gmail.com" id='profesional-email' placeholder='juangomez@gmail.com' aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div> 
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Contrase&ntilde;a <span class='text-danger'> * </span> </label>
                                                        <input type="password" class="form-control" placeholder='Contraseña' id='profesional-password' name="password" aria-label="password" aria-describedby="basic-addon1">
                                                    </div>
                                                </div> 
                                                <div class='col-12 col-md-6 col-lg-6 text-left'>
                                                    <div class="form-group mb-3">
                                                        <label for="basic-username"> Repita la contrase&ntilde;a <span class='text-danger'> * </span> </label>
                                                        <input type="password" class="form-control" placeholder='Repita la contraseña' name="repeat_password" aria-label="repeatpassword" aria-describedby="basic-addon1">
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class='row'>
                                                <div class='col-12 col-md-12 col-lg-12 text-left'>
                                                    <p class='w-100 text-success' id='profesional-mensagge' style='display:none;'>Inicio de sesi&oacuten correctamente, cargando la p&aacutegina, por favor espere...</p>
                                                    <div id='profesional-spinner' class="spinner-border text-warning" role="status" style='display:none;'>
                                                      <span class="sr-only">Loading...</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                          <input class="form-check-input is-invalid" type="checkbox" value="" id="politica-privacidad-2" required>
                                                          <label class="text-dark form-check-label" for="invalidCheck3">
                                                            Acepto la pol&iacutetica de privacidad y las condiciones de uso.
                                                          </label>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="button-login w-100" id="profesional-tab" >Registrarse</button>
                                                </div>
                                            </div>
                                            
                                            <div class='row'>
                                                <div class='col-12 col-md-12 col-lg-12 text-left'>
                                                     <p class='w-100'>¿Ya tienes cuenta? <a href='#' data-dismiss="modal" aria-label="Close"  data-toggle="modal" data-target="#exampleModal" > Inicia sesi&oacuten </a></p>
                                                </div>
                                                
                                            </div> 
                                            
                                        </form>
                                    </div>
                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    
    <div class='row mt-4'>
        <div class='col-12 col-md-12 col-lg-12'>
            <h3 class='title-page' style='color: #494c5a;'> &#191; Tienes dudas durante el proceso &#63; </h3>
            <p>Contamos con un equipo de soporte altamente cualificado que te ayudar&aacute a resolver cualquier duda por los diferentes soportes de 
            atenci&oacuten al cliente como son WhatsApp, donde podr&aacutes contactar via esta app con un gestor e incluso realizar el tr&aacutemite. 
            Tel&eacutefono, donde podr&aacutes recibir asistencia telef&oacutenica. O por E-mail, donde puedes contactarnos o solicitar un correo con toda la informac&oacuteón detallada de lo que debes hacer:</p>
        </div>
        <div class='col-12 col-md-4 col-lg-4'>
            <a href=' https://wa.me/34629314828' target="_blank" class='w-100'> <button class='button-save w-100 shadow' > WhatsApp </button> </a>
        </div>
        <div class='col-12 col-md-4 col-lg-4'>
            <a href='#' class='w-100'> <button class='button-save w-100 shadow' > Tel&eacutefono </button> </a>
        </div>
        <div class='col-12 col-md-4 col-lg-4'>
            <a href='mailto:info@tramitesdgtonline.com' class='w-100'> <button class='button-save w-100 shadow' > Email </button> </a>
        </div>
    </div>
</div>



<script src="https://kit.fontawesome.com/ee6b661e8c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js' crossorigin="anonymous" ></script>
<script src='<?php echo plugin_dir_url( __DIR__ ).'assets/js/custom-js.js'; ?>'></script>
<script src='<?php echo plugin_dir_url( __DIR__ ).'assets/js/auth.js'; ?>'></script>
<script src='<?php echo plugin_dir_url( __DIR__ ).'assets/js/documentation-event.js'; ?>'></script>
<!--<script src='<?php //echo plugin_dir_url( __DIR__ ).'assets/js/itp.js'; ?>'></script>-->