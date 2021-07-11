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
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-sm-12 col-12 bg-blue p-4' >
            <div class="contenido-left">
                <div class='row padLeftRight' >
                    <div class='col-12 col-lg-12 col-md-12 text-light boton-salir'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        SALIR
                    </div>
                </div>
                <img class='image-space mt-4 padLeftRight' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/tramites.png'; ?>" alt="">
                <p class='text-light font-weight-bold mt-4 paragraph-white padLeftRight' >
                    ¡Olv&iacute;date del papeleo! En tr&aacute;mites DGT Online gestionamos todos tus tr&aacute;mites de forma f&aacute;cil y sencilla
                </p>
                <div class='wrap-container'>
                    <ul class="nav nav-tabs border-0 mt-5 w-100 padLeftRight" id="tabs" role="tablist">
                        <li class='w-100 tab-menu' role="presentation">
                            <button class="nav-link w-75 active d-flex align-items-center" id="vehiculo-tab" data-bs-toggle="tab" data-bs-target="#vehiculo" type="button" role="tab" aria-controls="vehiculo" aria-selected="true">
                                <!-- <span class='step-number text-light'> 1 </span> -->
                                <img width='30' height='34' class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/llave-del-coche.png'; ?>" alt="">
                                <div class='d-flex flex-column text-left step-title-font-size' >
                                    <p class='mb-0 font-weight-bold '>Veh&iacuteculo</p>
                                    <span class=''>Informaci&oacuten del veh&iacuteculo</span>
                                </div>
                            </button>
                        </li>
                        <li class='w-100' role="presentation">
                            <button class="nav-link w-75 d-flex d-flex align-items-center" id="comprador-tab" data-bs-toggle="tab" data-bs-target="#comprador" type="button" role="tab" aria-controls="comprador" aria-selected="false">
                                <img width='30' height='34' class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/usuario.png'; ?>" alt="">
                                <div class='d-flex flex-column text-left step-title-font-size' >
                                    <p class='mb-0 font-weight-bold ' id='comprador-title'>Comprador</p>
                                    <span class='' id='title-comprador-section'>Datos personales del comprador</span>
                                </div>
                            </button>
                        </li>
                        <li class='w-100' role="presentation">
                            <button class="nav-link w-75 d-flex d-flex align-items-center" id="vendedor-tab" data-bs-toggle="tab" data-bs-target="#vendedor" type="button" role="tab" aria-controls="vendedor" aria-selected="false">
                                <img width='30' height='34'  class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/gerente.png'; ?>" alt="">
                                <div class='d-flex flex-column text-left step-title-font-size' >
                                    <p class='mb-0 font-weight-bold ' id='vendedor-title' >Vendedor</p>
                                    <span class='' id='title-vendedor-section' >Datos personales del vendedor</span>
                                </div>
                            
                            </button>
                        </li>
                        <li class='w-100' role="presentation">
                            <button class="nav-link w-75 d-flex d-flex align-items-center" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button" role="tab" aria-controls="documentos" aria-selected="false">
                                <img width='30' height='34' class='image-space' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/subir.png'; ?>" alt="">
                                <div class='d-flex flex-column text-left step-title-font-size' >
                                    <p class='mb-0 font-weight-bold '>Documentos</p>
                                    <span class=''>Documentos necesarios</span>
                                </div>
                            
                            </button>
                        </li>
                    </ul>
                    <div class='w-100 position-total row justify-content-between padLeftRight'>
                        <div class='col-12 col-md-6 col-lg-6 text-light'>
                            <p class='m-0'>TOTAL</p>
                            <p>----</p>
                        </div>
                        <div class='col-12 col-md-6 col-lg-6 text-center ver-todo'>
                            <button type="button" style='text-decoration: underline; background: none; border: 0;' class='w-100 text-light' id="boton-ver-todo" >VER TODO</button>
                        </div>
                    </div> 
                </div>
                <!-- actualizar -->
            
                <div class="ver-todo-valores down-section height-remove" id="seccion-ver-todo">
                    <div class='row'>
                        <div class='col-12 closed-boton ' id="closed-boton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cerrar
                        </div>
                    </div>
                    <div class='row section-calculos'>
                        <div class='col-12' id="">
                            <h3>Cálculo ITP</h3>

                            <div class="tabla-calculos">
                                <div class="row">
                                    <div class="col-4 title border-row">
                                        <span >Precio de venta</span>
                                    </div>
                                    <div class="col-8 valor border-row">
                                        <span id='precio-venta'>0</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4 title">
                                        <span >Valor según precio de venta</span>
                                    </div>
                                    <div class="col-8 valor">
                                        <span id='valoracion-precio-venta'>0</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4 title border-row">
                                        <span >Factor de correcci&oacute;n</span>
                                    </div>
                                    <div class="col-8 valor border-row ">
                                        <span id='factor-correccion'>0</span>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class="col-4 title border-row">
                                        <span >Valoraci&oacuten real</span>
                                    </div>
                                    <div class="col-8 valor border-row ">
                                        <span iid='valoracion-real'>0</span>
                                    </div>
                                </div>
                                
                                <div id='calculo-itp-total' class="row resultados">
                                    <div class="col-4 title">
                                        <span id='porcentaje-itp' > ITP (%) </span>
                                    </div>
                                    <div class="col-8 valor">
                                        <span id='itp-total'>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class='row section-calculos costes'>
                        <div class='col-12' id="">
                            <h3>Costes</h3>
                        </div>
                        <div class="tabla-calculos">
                            <div class="row"  id='itp-costes-tabla'>
                                <div class="col-4 title border-row">
                                    <span >ITP</span>
                                </div>
                                <div class="col-8 valor border-row">
                                    <span id='itp-costes' >0</span>
                                </div>
                            </div>

                            <div class='row' id='solo-gestion-dgt-container' style='display:none;' >
                                <div class="col-4 title border-row">
                                    <span >Informe de gesti&oacute;n en la DGT</span>
                                </div>
                                <div class="col-8 valor border-row ">
                                    <span id='solo-gestio-dgt'>15 € </span>
                                </div>
                            </div>

                            <div class='row' id='precio-notificacion-container' style='display:none;'>
                                <div class="col-4 title border-row">
                                    <span >Precio de notificaci&oacute;n de venta</span>
                                </div>
                                <div class="col-8 valor border-row ">
                                    <span id='precio-notificacion-costes'>50 € </span>
                                </div>
                            </div>


                            <div class="row" id='tasa-transferencia' style='display:none;' >
                                <div class="col-4 title border-row">
                                    <span>Tasas de transferencia de veh&iacute;culo</span>
                                </div>
                                <div class="col-8 valor border-row ">
                                    <span id='tasa-transferencia-tabla' >55.15 € </span>
                                </div>
                            </div>


                            <div class="row" id='informe-trafico' style='display:none;'>
                                <div class="col-4 title">
                                    <span>Tasas informe de tr&aacute;fico</span>
                                </div>
                                <div class="col-8 valor">
                                    <span id='informe-trafico-tabla'>8.59 € </span>
                                </div>
                            </div>


                            <div class="row" id='alta-baja' style='display:none;'>
                                <div class="col-4 title">
                                    <span >Tasas alta de baja temporal</span>
                                </div>
                                <div class="col-8 valor">
                                    <span id='alta-baja-tabla' >30 € </span>
                                </div>
                            </div>


                            <div class="row" id='ficha-tecnica-itv' style='display:none;'>
                                <div class="col-4 title">
                                    <span>Tasas cambios ficha t&eacute;cnica en ITV</span>
                                </div>
                                <div class="col-8 valor">
                                    <span id='ficha-tecnica-tabla' >20.40 € </span>
                                </div>
                            </div>


                            <div class="row" id='tramitacion' style='display:none;'>
                                <div class="col-4 title">
                                    <span>Tramiraci&oacute;n(Horarios, derechos colegiales, mensajer&iacute;a)</span>
                                </div>
                                <div class="col-8 valor">
                                    <span id='tramitacion-tabla'>115.10 € </span>
                                </div>
                            </div>


                            <div class="row resultados" >
                                <div class="col-4 title">
                                    <span>Total (IVA incluido)</span>
                                </div>
                                <div class="col-8 valor">
                                    <span id='total-tabla' >0</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>     
        </div>

        <div class='col-lg-8 col-md-8 p-0 col-sm-12 col-12 contenido'>
            <!-- contenido de los tabs -->
            <form action='' method='POST' enctype="multipart/form-data" >
                <div class="tab-content" id="myTabContent">
                    <input type='hidden' id='web-url' value='<?php echo get_site_url(); ?>'>
                    <!-- Vehiculos -->
                    <div class="tab-pane fade show active max-height-tab" id="vehiculo" role="tabpanel" aria-labelledby="vehiculo-tab">
                        <h1 class='title-tab padding-tab pt-3 pb-2'>Informaci&oacute;n del veh&iacute;culo </h1>
                        <div class='separator'></div>
                        <div class='row justify-content-center m-0 padding-tab pt-5 pb-2'>
                            <div class='col-12 col-md-12 col-lg-12 text-center align-title'>
                                <h3 class='title-border'> Elige tu veh&iacuteculo</h3>
                            </div>
                        </div>
                        <div class='row justify-content-center m-0 padding-tab'>
                            <div class='col-12 col-md-12 col-lg-12 text-center'>
                                <?php include('section-vehiculo.php'); ?>
                            </div>
                        </div>
                        
                        <div class='row justify-content-center m-0 p-5'>
                            <!-- guardar -->
                            <?php //if( is_user_logged_in() ){ ?>
                                <button type='submit' name='submit' class='button-save mt-3 mb-3'>
                                <i class="fas fa-save"></i>  
                                Guardar </button>                    
                        </div>
                        
                    </div>
                    
                    <!-- Comprador  -->
                    <div class="tab-pane fade max-height-tab" id="comprador" role="tabpanel" aria-labelledby="comprador-tab">
                        <div class='row justify-content-center'>
                            <div class='col-12 col-md-12 col-lg-12 text-center align-title'>
                                <div class='row w-100'>
                                    <div class='col-12 col-md-6 col-lg-6'>
                                        <h3 class='title-tab padding-tab pt-3' id='titulo-comprador' > Datos del comprador</h3>    
                                    </div>
                                    <div class='col-12 col-md-6 col-lg-6 pt-3 text-center'>
                                        <label class='font-weight-bold mb-0'>&#191; Eres una empresa &#63; </label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name='empresa-comprador' id="empresa-comprador">
                                            <label class="custom-control-label" id='empresa-comprador-label' for="empresa-comprador">S&iacute</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class='separator'></div>

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
                    
                    <div class="tab-pane fade max-height-tab" id="vendedor" role="tabpanel" aria-labelledby="vendedor-tab">
                        <div class='row justify-content-center'>
                            <div class='col-12 col-md-12 col-lg-12 text-center align-title'>
                                <h3 class='title-tab padding-tab pt-3' id='titulo-vendedor'> Datos del vendedor</h3>
                            </div>
                        </div>
                        <div class='separator'></div>
                        <div class='row m-0 justify-content-center'>
                            <div class='col-12 p-0 col-md-12 col-lg-12 text-center'>
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
                    
                    <div class="tab-pane fade p-4 max-height-tab" id="documentos" role="tabpanel" aria-labelledby="documentos-tab">
                        <div class='row justify-content-center'>
                            <div class='col-12 col-md-12 col-lg-12 text-center mt-3 mb-3 align-title'>
                                <h3 class='title-tab padding-tab pt-3'> Documentos necesarios</h3>
                            </div>
                        </div>
                        <div class='separator'></div>
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