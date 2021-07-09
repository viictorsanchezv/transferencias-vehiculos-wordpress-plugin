<?php


require( dirname(__FILE__) . '/../../../../wp-load.php' );
    
    
    $filename = sanitize_text_field($_FILES["file-ccompra"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-ccompra"]["tmp_name"]);
    $time = current_time('mysql');  
    $ccompra = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    
    if($ccompra["url"] != "" && $ccompra["url"] != " "){
        update_post_meta(  $saved_post_id, 'url_contrato_cliente',$ccompra["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-nifv-frontal"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-nifv-frontal"]["tmp_name"]);
    $time = current_time('mysql');  
    $nifv_frontal = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($nifv_frontal["url"] != "" && $nifv_frontal["url"] != " "){
        update_post_meta(  $saved_post_id, 'url_nif_vendedor_frontal',$nifv_frontal["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-nifv-trasero"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-nifv-trasero"]["tmp_name"]);
    $time = current_time('mysql');  
    $nifv_trasero = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($nifv_trasero["url"] != "" && $nifv_trasero["url"] != " "){
        update_post_meta(  $saved_post_id, 'url_nif_vendedor_trasero',$nifv_trasero["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-nifc-frontal"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-nifc-frontal"]["tmp_name"]);
    $time = current_time('mysql');  
    $nifc_frontal = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($nifc_frontal["url"] != "" && $nifc_frontal["url"] != " "){
        update_post_meta(  $saved_post_id, 'url_nif_comprador_frontal',$nifc_frontal["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-nifc-trasero"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-nifc-trasero"]["tmp_name"]);
    $time = current_time('mysql');  
    $nifc_trasero = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($nifc_trasero["url"] != "" && $nifc_trasero["url"] != " "){
        update_post_meta(  $saved_post_id, 'url_nif_comprador_trasero',$nifc_trasero["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-ftecnica-frontal"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-ftecnica-frontal"]["tmp_name"]);
    $time = current_time('mysql');  
    $ficha_tecnica_frontal = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($ficha_tecnica_frontal["url"] != "" && $ficha_tecnica_frontal["url"] != " "){
        update_post_meta(  $saved_post_id, 'ficha_tecnica_vehiculo_frontal',$ficha_tecnica_frontal["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-ftecnica-trasera"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-ftecnica-trasera"]["tmp_name"]);
    $time = current_time('mysql');  
    $ficha_tecnica_trasero = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($ficha_tecnica_trasero["url"] != "" && $ficha_tecnica_trasero["url"] != " "){
        update_post_meta(  $saved_post_id, 'ficha_tecnica_vehiculo_trasero',$ficha_tecnica_trasero["url"] );
    }
            
      
    $filename = sanitize_text_field($_FILES["file-permiso-vehiculo"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-permiso-vehiculo"]["tmp_name"]);
    $time = current_time('mysql');  
    $permiso_vehiculo = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($permiso_vehiculo["url"] != "" && $permiso_vehiculo["url"] != " "){
        update_post_meta(  $saved_post_id, 'permiso_circulacion_vehiculo',$permiso_vehiculo["url"] );
    }
    
    
    $filename = sanitize_text_field($_FILES["file-factura-vehiculo"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-factura-vehiculo"]["tmp_name"]);
    $time = current_time('mysql');  
    $factura_vehiculo = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($factura_vehiculo["url"] != "" && $factura_vehiculo["url"] != " "){
        update_post_meta(  $saved_post_id, 'factura_vehiculo',$factura_vehiculo["url"] );
    }
          
    $filename = sanitize_text_field($_FILES["file-impuesto-hacienda"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-impuesto-hacienda"]["tmp_name"]);
    $time = current_time('mysql');  
    $file_impuesto_hacienda = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($file_impuesto_hacienda["url"] != "" && $file_impuesto_hacienda["url"] != " "){
        update_post_meta(  $saved_post_id, 'archivo_impuesto_hacienda',$file_impuesto_hacienda["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-informe-dgt"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-informe-dgt"]["tmp_name"]);
    $time = current_time('mysql');  
    $file_informe_dgt = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($file_informe_dgt["url"] != "" && $file_informe_dgt["url"] != " "){
        update_post_meta(  $saved_post_id, 'informe_dgt',$file_informe_dgt["url"] );
    }
    
    $filename = sanitize_text_field($_FILES["file-cif-empresa-vendedora"]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-cif-empresa-vendedora"]["tmp_name"]);
    $time = current_time('mysql');  
    $file_cif_empresa = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($file_cif_empresa["url"] != "" && $file_cif_empresa["url"] != " "){
        update_post_meta(  $saved_post_id, 'cif_empresa_vendedora',$file_cif_empresa["url"] );
    }
     
    $filename = sanitize_text_field($_FILES["file-escritura-herencia "]["name"]);
    $filename = $id_usuario_actual.$filename;
    $deprecated = null;
    $bits = file_get_contents($_FILES["file-escritura-herencia "]["tmp_name"]);
    $time = current_time('mysql');  
    $file_cif_empresa = wp_upload_bits($filename, $deprecated, $bits, $time);
    
    if($file_cif_empresa["url"] != "" && $file_cif_empresa["url"] != " "){
        update_post_meta(  $saved_post_id, 'escritura_herencia',$file_cif_empresa["url"] );
    }
    
         
        
     