<?php 



    // Insert the post into the database
    $saved_post_id = wp_insert_post( $my_post );
    
    if(isset($_POST['coche-modelo'])){
        update_post_meta($saved_post_id, 'id_vehiculo',$_POST['coche-modelo']);  
    }
    
    if(isset($_POST['coche-date'])){
        update_post_meta($saved_post_id, 'fecha_matriculacion',$_POST['coche-date']);  
    }
    
    if(isset($_POST['coche-propiedad'])){
        update_post_meta($saved_post_id, 'propiedad_vehiculo',$_POST['coche-propiedad']);  
    }
    
    if(isset($_POST['coche-gestion'])){
        update_post_meta($saved_post_id, 'gestion_completa',$_POST['coche-gestion']);  
    }
    
    if(isset($_POST['coche-factura'])){
        update_post_meta($saved_post_id, 'es_empresa',$_POST['coche-factura']);  
    }
    
    if(isset($_POST['coche-informe'])){
        update_post_meta($saved_post_id, 'informe_dgt',$_POST['coche-informe']);  
    }
    
    if(isset($_POST['coche-venta'])){
        update_post_meta($saved_post_id, 'fecha_venta',$_POST['coche-venta']);  
    }
    
    if(isset($_POST['coche-provincia'])){
        update_post_meta($saved_post_id, 'provincia',$_POST['coche-provincia']);  
    }
    
    if(isset($_POST['coche-matricula'])){
        update_post_meta($saved_post_id, 'matricula',$_POST['coche-matricula']);  
    }
    
    if(isset($_POST['coche-km'])){
        update_post_meta($saved_post_id, 'km',$_POST['coche-km']);  
    }
    
    if(isset($_POST['coche-chasis'])){
        update_post_meta($saved_post_id, 'serial_chasis',$_POST['coche-chasis']);  
    }
    
    if(isset($_POST['coche-cambio'])){
        update_post_meta($saved_post_id, 'cambio_servicio',$_POST['coche-cambio']);  
    }
    
    
    if(isset($_POST['coche-precio'])){
        update_post_meta($saved_post_id, 'precio_venta',$_POST['coche-precio']);  
    }
    
    
    if(isset($_POST['coche-ficha_tecnica'])){
        update_post_meta($saved_post_id, 'cambio_ficha_tecnica',$_POST['coche-ficha_tecnica']);  
    }
    
    if(isset($_POST['coche-herencia'])){
        update_post_meta($saved_post_id, 'herencia',$_POST['coche-herencia']);  
    }
    
    if(isset($_POST['precio-notificacion'])){
        update_post_meta($saved_post_id, 'precio_venta',$_POST['precio-notificacion']);  
    }
    
  
    