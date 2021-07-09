<?php



    // Insert the post into the database
    $saved_post_id = wp_insert_post( $my_post );
    
    if(isset($_POST['moto-modelo'])){
        update_post_meta($saved_post_id, 'id_vehiculo',$_POST['moto-modelo']);  
    }
    
    if(isset($_POST['moto-date'])){
        update_post_meta($saved_post_id, 'fecha_matriculacion',$_POST['moto-date']);  
    }
    
    if(isset($_POST['moto-propiedad'])){
        update_post_meta($saved_post_id, 'propiedad_vehiculo',$_POST['moto-propiedad']);  
    }
    
    if(isset($_POST['moto-gestion'])){
        update_post_meta($saved_post_id, 'gestion_completa',$_POST['moto-gestion']);  
    }
    
    if(isset($_POST['moto-cilindrada'])){
        update_post_meta($saved_post_id, 'moto_cilindrada',$_POST['moto-cilindrada']);  
    }
    
    
    if(isset($_POST['moto-factura'])){
        update_post_meta($saved_post_id, 'es_empresa',$_POST['moto-factura']);  
    }
    
    if(isset($_POST['moto-informe'])){
        update_post_meta($saved_post_id, 'informe_dgt',$_POST['moto-informe']);  
    }
    
    if(isset($_POST['moto-venta'])){
        update_post_meta($saved_post_id, 'fecha_venta',$_POST['moto-venta']);  
    }
    
    if(isset($_POST['moto-provincia'])){
        update_post_meta($saved_post_id, 'provincia',$_POST['moto-provincia']);  
    }
    
    if(isset($_POST['moto-matricula'])){
        update_post_meta($saved_post_id, 'matricula',$_POST['moto-matricula']);  
    }
    
    if(isset($_POST['moto-km'])){
        update_post_meta($saved_post_id, 'km',$_POST['moto-km']);  
    }
    
    if(isset($_POST['moto-chasis'])){
        update_post_meta($saved_post_id, 'serial_chasis',$_POST['moto-chasis']);  
    }
    
    if(isset($_POST['moto-cambio'])){
        update_post_meta($saved_post_id, 'cambio_servicio',$_POST['moto-cambio']);  
    }
    
    if(isset($_POST['moto-precio'])){
        update_post_meta($saved_post_id, 'precio_venta',$_POST['moto-precio']);  
    }
    
    if(isset($_POST['moto-ficha_tecnica'])){
        update_post_meta($saved_post_id, 'cambio_ficha_tecnica',$_POST['moto-ficha_tecnica']);  
    }
    
    if(isset($_POST['moto-herencia'])){
        update_post_meta($saved_post_id, 'herencia',$_POST['moto-herencia']);  
    }
    
    if(isset($_POST['moto-precio-notificacion'])){
        update_post_meta($saved_post_id, 'precio_venta',$_POST['moto-precio-notificacion']);  
    }
    
  
    