<?php


if($_POST['coche-marca']){
    
    $current_user = wp_get_current_user();
    $my_post = array(
      'post_title'    => $current_user->display_name,
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_author'   => $current_user->ID,
      'post_type'     => 'contratos',
    );

    include('insertar-coche.php');
    include('insertar-documentacion.php');
    
}else if($_POST['moto-marca']){
    $current_user = wp_get_current_user();
    $my_post = array(
      'post_title'    => $current_user->display_name,
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_author'   => $current_user->ID,
      'post_type'     => 'contratos',
    );


    include('insertar-moto.php');
    include('insertar-documentacion.php');
}

  // datos del comprador para el contrato 
    if(isset($_POST['comprador-email'])){
        update_post_meta($saved_post_id, 'comprador_email',$_POST['comprador-email']);  
    }
    
    if(isset($_POST['comprador-nif'])){
        update_post_meta($saved_post_id, 'comprador_nif',$_POST['comprador-nif']);  
    }
    
    if(isset($_POST['comprador-nombre'])){
        update_post_meta($saved_post_id, 'comprador_nombre',$_POST['comprador-nombre']);  
    }
    
    if(isset($_POST['comprador-apellido'])){
        update_post_meta($saved_post_id, 'comprador_apellido',$_POST['comprador-apellido']);  
    }
    
    if(isset($_POST['comprador-apellido2'])){
        update_post_meta($saved_post_id, 'comprador_segundo_apellido',$_POST['comprador-apellido2']);  
    }
    
    if(isset($_POST['comprador-telefono'])){
        update_post_meta($saved_post_id, 'comprador_telefono',$_POST['comprador-telefono']);  
    }
    
    if(isset($_POST['comprador-direccion'])){
        update_post_meta($saved_post_id, 'comprador_direccion',$_POST['comprador-direccion']);  
    }
    
    if(isset($_POST['comprador-postal'])){
        update_post_meta($saved_post_id, 'comprador_postal',$_POST['comprador-postal']);  
    }
    
    
    if(isset($_POST['comprador-localidad'])){
        update_post_meta($saved_post_id, 'comprador_localidad',$_POST['comprador-localidad']);  
    }
    
    if(isset($_POST['comprador-observacion'])){
        update_post_meta($saved_post_id, 'comprador_observaciones',$_POST['comprador-observacion']);  
    }
    
    if(isset($_POST['comprador-empadronamiento'])){
        update_post_meta($saved_post_id, 'comprador_direccion_empadronamiento',$_POST['comprador-empadronamiento']);  
    }
    
    
    // datos del vendedor para el contrato 
    if(isset($_POST['vendedor-email'])){
        update_post_meta($saved_post_id, 'vendedor_email',$_POST['vendedor-email']);  
    }
    
    if(isset($_POST['vendedor-nif'])){
        update_post_meta($saved_post_id, 'vendedor_nif',$_POST['vendedor-nif']);  
    }
    
    if(isset($_POST['vendedor-nombre'])){
        update_post_meta($saved_post_id, 'vendedor_nombre',$_POST['vendedor-nombre']);  
    }
    
    if(isset($_POST['vendedor-apellido'])){
        update_post_meta($saved_post_id, 'vendedor_apellido',$_POST['vendedor-apellido']);  
    }
    
    if(isset($_POST['vendedor-apellido2'])){
        update_post_meta($saved_post_id, 'vendedor_segundo_apellido',$_POST['vendedor-apellido2']);  
    }
    
    if(isset($_POST['vendedor-telefono'])){
        update_post_meta($saved_post_id, 'vendedor_telefono',$_POST['vendedor-telefono']);  
    }
    
    if(isset($_POST['vendedor-direccion'])){
        update_post_meta($saved_post_id, 'vendedor_direccion',$_POST['vendedor-direccion']);  
    }
    
    if(isset($_POST['vendedor-postal'])){
        update_post_meta($saved_post_id, 'vendedor_postal',$_POST['vendedor-postal']);  
    }
    
    
    if(isset($_POST['vendedor-localidad'])){
        update_post_meta($saved_post_id, 'vendedor_localidad',$_POST['vendedor-localidad']);  
    }
    
    if(isset($_POST['vendedor-observacion'])){
        update_post_meta($saved_post_id, 'vendedor_observaciones',$_POST['vendedor-observacion']);  
    }
    
    // validaciones para el correo electronico 
    
    if($_POST['moto-propiedad'] != 'false' || $_POST['moto-propiedad'] != false ){
       $propiedad = $_POST['moto-propiedad']; 
    }else{
        if($_POST['coche-propiedad'] != 'false' || $_POST['coche-propiedad'] != false ){
           $propiedad = $_POST['coche-propiedad']; 
        }else{
            $propiedad = false;
        }
    }
    
    if($_POST['coche-factura'] != 'false' || $_POST['coche-factura'] != false ){
       $factura = $_POST['coche-factura']; 
    }else{
        if($_POST['factura-moto'] != 'false' || $_POST['factura-moto'] != false ){
           $factura = $_POST['factura-moto']; 
        }else{
            $factura = false;
        }
    }
    
    
    if($_POST['coche-informe'] != 'false' || $_POST['coche-informe'] != false ){
       $informe = $_POST['coche-informe']; 
    }else{
        if($_POST['moto-informe'] != 'false' || $_POST['moto-informe'] != false ){
           $informe = $_POST['moto-informe']; 
        }else{
            $informe = false;
        }
    }
    
    if($_POST['coche-gestion'] != 'false' || $_POST['coche-gestion'] != false ){
       $gestion = $_POST['coche-gestion']; 
    }else{
        if($_POST['moto-gestion'] != 'false' || $_POST['moto-gestion'] != false ){
          $gestion = $_POST['moto-gestion']; 
        }else{
            $gestion = false;
        }
    }
    
    if($_POST['coche-cambio'] != 'false' || $_POST['coche-cambio'] != false ){
       $cambio = $_POST['coche-cambio']; 
    }else{
        if($_POST['moto-cambio'] != 'false' || $_POST['moto-cambio'] != false ){
          $cambio = $_POST['moto-cambio']; 
        }else{
            $cambio = false;
        }
    }
 
    
    if($_POST['precio-notificacion'] != 'false' || $_POST['precio-notificacion'] != false ){
       $notificacion = $_POST['precio-notificacion']; 
    }else{
        if($_POST['moto-precio-notificacion'] != 'false' || $_POST['moto-precio-notificacion'] != false ){
          $notifiacion = $_POST['moto-precio-notificacion']; 
        }else{
            $notificacion = false;
        }
    }
    
    
    if($_POST['moto-ficha_tecnica'] != 'false' || $_POST['moto-ficha_tecnica'] != false ){
        $ficha_tecnica = $_POST['moto-ficha_tecnica']; 
    }else{
        if($_POST['coche-ficha_tecnica'] != 'false' || $_POST['coche-ficha_tecnica'] != false ){
           $ficha_tecnica = $_POST['coche-ficha_tecnica']; 
        }else{
             $ficha_tecnica = false;
        }
    }

   
    if($_POST['coche-alta_vehiculo'] != 'false' || $_POST['coche-alta_vehiculo'] != false ){
        $alta = $_POST['coche-alta_vehiculo']; 
    }else{
        if( $_POST['moto-alta_vehiculo'] != 'false' || $_POST['moto-alta_vehiculo'] != false ){
           $alta = $_POST['moto-alta_vehiculo']; 
        }else{
             $alta = false;
        }
    }

   
    
    if($_POST['moto-herencia'] != 'false' || $_POST['moto-herencia'] != false ){
        $herencia = $_POST['moto-herencia']; 
    }else{
        if($_POST['coche-herencia'] != 'false' || $_POST['coche-herencia'] != false ){
           $herencia = $_POST['coche-herencia']; 
        }else{
             $herencia = false;
        }
    }
    
    if($_POST['coche-modelo'] != 'false' || $_POST['coche-modelo'] != false ){
        $modelo = get_post_meta($_POST['coche-modelo'], 'modelo', true); 
    }else{
        if($_POST['moto-modelo'] != 'false' || $_POST['moto-modelo'] != false ){
           $modelo = $_POST['coche-herencia']; 
        }else{
             $modelo = '';
        }
    }
    
    if( $_POST['coche-marca'] != 'false' || $_POST['coche-marca'] != false ){
        $marca = get_term_by('id', $_POST['coche-marca'] , 'marca')->name; 
       
    }else{
        if($_POST['moto-marca'] != 'false' || $_POST['moto-marca'] != false ){
           $marca = $_POST['moto-marca']; 
        }else{
             $marca = '';
        }
    }
    
    
    if($_POST['coche-combustible'] != 'false' || $_POST['coche-combustible'] != false ){
        $combustible = get_term_by( 'id', $_POST['coche-combustible'], 'combustible' )->name;  
    }else{
        
        $combustible = '';
       
    }
    
    // final validaciones
   
    $headers = array('Content-Type: text/html; charset=UTF-8');
    // enviar correo aqui
    $to = 'info@tramitesdgtonline.com';
    $subject = 'Nuevo Tramite recibido';
    
    $message = '<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
    .button{
        font-size: 18px; 
        font-family: Open Sans, Helvetica, Arial, sans-serif; 
        color: #fff; 
        text-decoration: none; 
        border-radius: 5px; 
        background-color: #D6D5FB;
        padding: 15px 30px; 
        border: 1px solid #D6D5FB; 
        display: block;
    }
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }
    
    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    
    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    /* MEDIA QUERIES */
    @media screen and (max-width: 480px) {
        .mobile-hide {
            display: none !important;
        }
        .mobile-center {
            text-align: center !important;
        }
    }
    
    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
 Recibido nueva solicitud de tramite desde Tramites DGT Online.
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" valign="top" style="font-size:0; padding: 35px; background-color: #0000ba;" >
                <!--[if (gte mso 9)|(IE)]>
                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                            <td align="left" valign="top" width="300">
                                <![endif]-->
                                <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                        <tr>
                                            <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                                <h1 style="font-size: 36px; font-weight: 800; margin: 0; color: #ffffff;">Nuevo Tramite</h1>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if (gte mso 9)|(IE)]>
                            </td>
                        </tr>
                    </table>
                <![endif]-->
                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                            <img src="'.get_site_url().'/wp-content/plugins/transferencia/assets/img/check.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                            <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                                Tramites DGT Online
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                            <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                Datos relacionados con el tramite.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding-top: 20px;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                        Tipo de dato
                                    </td>
                                    <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                        Dato
                                    </td>
                                </tr>
                                
                                 <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                       Comprador Nombre y DNI
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                        '.$_POST['comprador-nombre'].' '.$_POST['comprador-apellido'].' DNI: '.$_POST['comprador-nif'].'
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                       Vendedor Nombre y DNI
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                        '.$_POST['vendedor-nombre'].' '.$_POST['vendedor-apellido'].' DNI: '.$_POST['vendedor-nif'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                       Marca del veh&iacute;culo: coche o moto
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                        '.$marca.'
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Modelo
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$modelo.'
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Tipo combustible (si aplica)
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$combustible.'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Cilindrada (solo motos)
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$_POST['moto-cilindrada'].'
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        La persona que solicita es el vendedor
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$propiedad.'
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        El vendedor es empresa o aut&oacute;nomo y emite factura de venta del veh&iacute;culo
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$factura.'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Solicitud de gesti&oacute;n completa
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$gestion.' 
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Solicitud de informe de veh&iacute;culo
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$informe.'
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Fecha de venta
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$_POST['coche-venta'].' '.$_POST['moto-venta'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Provincia del comprador
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$_POST['coche-provincia'].' '.$_POST['moto-provincia'].'
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Matr&iacute;cula
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$_POST['coche-matricula'].' '.$_POST['moto-matricula'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        N&uacute;mero de bastidor
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$_POST['coche-chasis'].' '.$_POST['moto-chasis'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Solicitud de cambio de servicio
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$cambio.'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Solicitud precio notificaci&oacute;n de venta
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$notificacion.'
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Precio de compraventa
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$_POST['coche-precio'].' '.$_POST['moto-precio'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Solicitud de cambio en la ficha t&eacute;cnica
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$ficha_tecnica.' 
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Solicitud alta de veh&iacute;culo
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$alta.' 
                                    </td>
                                </tr>
                                
                                 <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Solicitud herencia
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        '.$herencia.' 
                                    </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding-top: 20px;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                        Costes Total
                                    </td>
                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                       '.$_POST['total-value'].'
                                    </td>
                                </tr>
                                
                                 
                            </table>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                </td>
            </tr>
             
            <tr>
                <td align="center" style=" padding: 35px; background-color: #0000ba;" >
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                            <h2 style="font-size: 24px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;">
                                Para ver m&aacute;s informaci&oacute;n presiona el siguiente boton.
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 25px 0 15px 0;">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" style="border-radius: 5px; color: #FFF;">
                                      <a href="'.get_site_url().'/wp-admin/post.php?post='.$saved_post_id.'&action=edit" target="_blank" class="button" style="color: #000;">Click aqu&iacute;</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                </td>
            </tr>
            
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
        </td>
    </tr>
</table>
    
</body>
</html>';


    
    if($_POST['coche-modelo'] !='' || $_POST['moto-modelo'] != ''){
         wp_mail( $to, $subject, $message, $headers );  
         
         wp_redirect( get_site_url().'/finalizar-tramite/?cant='.$_POST['total-value'].'&concepto=Trámite%20DGT%20Online&email='.$_POST['comprador-email'].'&comprador='.$_POST['comprador-nombre'].'&vendedor='.$_POST['vendedor-nombre'].'&email-vendedor='.$_POST['vendedor-email'].'' );
    }
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
