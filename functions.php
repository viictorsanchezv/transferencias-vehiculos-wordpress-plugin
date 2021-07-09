<?php 

/**
 * Plugin Name: Transferencia de Vehiculos
 * Plugin URI: 
 * Description: Plugin para el calculo de costo y transferencia de vehiculos segun la DGT España
 * Author: Victor Sanchez
 * Version: 1.9.0
 * Author URI: 
 * Text Domain: transferencia-vehiculos
 * Domain Path: /languages
 * License: GPL-2.0+
 */


include( dirname( __FILE__ ) . '/vendor/autoload.php');
    

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

error_reporting(E_ERROR | E_PARSE);
header("Access-Control-Allow-Origin: *");


const ITPorcentaje = [
    'valencia'      => 6,
    'madrid'        => 4,
    'andalucia'     => 4,
    'aragon'        => 4,
    'asturias'      => 4,
    'baleares'      => 4,
    'canarias'      => 5.5,
    'cantabria'     => 8,
    'mancha'        => 6,
    'leon'          => 5,
    'cataluna'      => 5,
    'ceuta'         => 4,
    'extremadura'   => 6,
    'galicia'       => 8,
    'rioja'         => 4,
    'madrid'        => 4,
    'melilla'       => 4,
    'murcia'        => 4,
    'navarra'       => 4,
    'vazco'         => 4,

];

//Load template from specific page
add_filter( 'page_template', 'register_file_template' );
function register_file_template( $page_template ){
    if ( get_page_template_slug() == '/template/page-transfer.php' ) {
        $page_template = dirname( __FILE__ ) . '/template/page-transfer.php';
    }

    if(  get_page_template_slug() == '/template/cargar-datos.php' ){
        $page_template = dirname( __FILE__ ) . '/template/cargar-datos.php';
    }
    return $page_template;
}

/**
 * Add "Custom" template to page attribute template section.
 */
add_filter( 'theme_page_templates', 'add_template_to_select', 10, 4 );
function add_template_to_select( $post_templates, $wp_theme, $post, $post_type ) {
    // Add custom template named template-custom.php to select dropdown 
    $post_templates['/template/page-transfer.php'] = __('Transferencia de Vehiculos');
    $post_templates['/template/cargar-datos.php'] = __('Cargar datos');
     
    return $post_templates;
}

function get_user_meta_data( $user_id, $key = '', $single = false ) {
    return get_metadata( 'user', $user_id, $key, $single );
}

/** callbacks and routes wordpress API */
add_action('rest_api_init', function(){
    
    register_rest_route('gp/v1', 'car_model', 
        array(
			'methods' => 'GET', 
			'callback' => 'car_model'
        )
    );

    register_rest_route('gp/v1', 'combustible', 
        array(
			'methods' => 'GET', 
			'callback' => 'combustible'
        )
    );
    register_rest_route('gp/v1', 'modelo_tabla', 
        array(
            'methods' => 'GET', 
            'callback' => 'modelo_tabla'
        )
    );
    
    register_rest_route('gp/v1', 'cilindrada', 
        array(
            'methods' => 'GET', 
            'callback' => 'moto_cilindrada'
        )
    );

    register_rest_route('gp/v1', 'itp_final', 
        array(
            'methods' => 'GET', 
            'callback' => 'itp_final'
        )
    );
    
    register_rest_route('gp/v1', 'login', 
        array(
            'methods' => 'GET', 
            'callback' => 'login'
        )
    );
    
    register_rest_route('gp/v1', 'register', 
        array(
            'methods' => 'GET', 
            'callback' => 'register'
        )
    );

    

});


function register(){
    $dedica = $_GET['dedica'];
 
     if($dedica != null){
         
        $user_id = wp_create_user( $_GET['username'], $_GET['password'], $_GET['email'] );
         
        $u = new WP_User( $user_id );
        
        // Remove role
        $u->remove_role( 'subscriber' );
        
        // Add role
        $u->add_role( 'profesional' );
         
         
         update_user_meta(  $user_id ,'dedica', $_GET['dedica'] );
         update_user_meta(  $user_id ,'telefono', $_GET['telf'] );
         
        $creds = array(
            'user_login'    => $_GET['username'],
            'user_password' => $_GET['password'],
            'remember'      => true
        );
     
        $user = wp_signon( $creds, false );
        
         return 200;
     }else{
         
        $user_id = wp_create_user( $_GET['username'], $_GET['password'], $_GET['email'] );
        
        $u = new WP_User( $user_id );
        
        // Remove role
        $u->remove_role( 'subscriber' );
        
        // Add role
        $u->add_role( 'custom_role' );
        
        
        $creds = array(
            'user_login'    => $_GET['username'],
            'user_password' => $_GET['password'],
            'remember'      => true
        );
     
        $user = wp_signon( $creds, false );
    
        
        return 200;
     }
}

function login(){
    $password = decode($_GET['password']); 
    
    $creds = array(
        'user_login'    => $_GET['username'],
        'user_password' => $password,
        'remember'      => true
    );
 
    $user = wp_signon( $creds, false );
    
    if ( is_wp_error( $user ) ) {
        return 404;
    }else{
        return 200;
    }
}

function decode($encoded) {
    $encoded = base64_decode(base64_decode($encoded));
   
    return $encoded;
}

function car_model(){
    $posts_array = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'coches',
            'tax_query' => array(
                'relation'  => 'AND',
                array(
                    'taxonomy' => 'marca',
                    'field' => 'term_id',
                    'terms' => $_GET['marca'],
                ),
                array(
                    'taxonomy' => 'combustible',
                    'field' => 'term_id',
                    'terms' => $_GET['combustible'],
                )
                ),
            'meta_query'  => array(
                'key'       => 'periodo',
                'value'     => $_GET['matriculacion'],
                'compare'   => 'IN',
            ),

        )
    );

    return $posts_array;
}

function combustible(){

    $marca = get_term_by('ID', $_GET['marca'], 'marca');

    $terms = get_terms( array(
        'taxonomy' => 'combustible',
        'hide_empty' => false,
        'meta_query' => array(
            [
                'key' => 'marcas',
                'value' =>  $marca->name,
                'compare' => 'LIKE'
            ]
        ),
    ) );

    return $terms;
    
}

function modelo_tabla(){
    
    $marca_carro   =    get_the_terms( $_GET['modelo'], 'marca' );
    $combustible_carro   =    get_the_terms( $_GET['modelo'], 'combustible' );
    $data = array(
        'modelo'           => get_post_meta($_GET['modelo'], 'modelo', true),
        'cilindrada'       => get_post_meta($_GET['modelo'], 'cilindrada', true),
        'cilindros'        => get_post_meta($_GET['modelo'], 'cilindros', true),
        'potencia'         => get_post_meta($_GET['modelo'], 'potencia', true),
        'potencia_fiscal'  => get_post_meta($_GET['modelo'], 'potencia_fiscal', true),
        'periodo'          => get_post_meta($_GET['modelo'], 'periodo', true),
        'valor_euros'      => get_post_meta($_GET['modelo'], 'valor_euros', true),
        'marca'            => $marca_carro[0]->name,
        'combustible'      => $combustible_carro[0]->name,
    );


    return $data;
}

function moto_cilindrada(){
    
    $price = get_term_meta( $_GET['cilindrada'], 'precio', true );

    return $price;
    
}


function itp_final(){  
    
    switch($_GET['provincia']){
        
        case 'andalucia':
            //return 16;
            if( (int)$_GET['cvf'] > 15 ){
                return 8;
            }else{
                return 4;
            }
        
        break;
        
        case 'aragon':
            if((int)$_GET['year'] >= 10 && (int)$_GET['cc'] <= 1000 ){
                return 0;
            }else{
                if( (int)$_GET['year'] >= 10 && (int)$_GET['cc'] > 1000 && (int)$_GET['cc'] < 1500){
                    return 20;
                }else{
                    if((int)$_GET['year'] >= 10 && (int)$_GET['cc'] > 1500 && (int)$_GET['cc'] < 2000 ){
                        return 30;
                    }else{
                        return 4;
                    }
                }
            }
        break;
        
        case 'asturias':
            if( (int)$_GET['cvf'] > 15 ){
                return 8;
            }else{
                return 4;
            }
        
        break;

        case 'baleares':
            if( (int)$_GET['cvf'] > 15 ){
                return 8;
            }else{
                return 4;
            }
        break;
        
        case 'canarias':
            if( (int)$_GET['year'] > 10 && (int)$_GET['cc'] <= 1000  ){
                return 40;
            }else{
                if((int)$_GET['year'] > 10 && (int)$_GET['cc'] > 1000 && (int)$_GET['cc'] <= 1500){
                    return 70;
                }else{
                    if( (int)$_GET['year'] > 10 && (int)$_GET['cc'] > 1500 && (int)$_GET['cc'] <= 2000 ){
                        return 115;
                    }else{
                        return 5.5;
                    }
                }
            }
        break;   
        
        case 'cantabria':
            return 8;
        break;

        case 'mancha':
            return 8;
        break;

        case 'leon':
            if( (int)$_GET['cvf'] > 15 ){
                return 8;
            }else{
                return 5;
            }
        break;
        
        case 'cataluna':
            if( (int)$_GET['year'] > 10 && (int)$_GET['precio'] < 40000 ){
                return 0;
            }else{
                if( (int)$_GET['cc'] < 50 ){
                    return 0;
                }else{
                    return 5;
                }
            }
        break;
        
        case 'ceuta':

            return 4;
           
        break;
        
        case 'valencia':
            if( (int)$_GET['precio'] < 20000 && (int)$_GET['year'] > 12  ){
                if( (int)$_GET['cc'] <= 1500 ){
                    return 40;
                }else{
                    if( (int)$_GET['cc'] > 1500 && (int)$_GET['cc'] <= 2000 ){
                        return 60;
                    }else{
                        if( (int)$_GET['cc'] > 2000 ){
                            return 140;
                        }
                    }
                }

                if( (int)$_GET['cc'] <= 250 ){
                    return 10;
                }else{
                    if( (int)$_GET['cc'] > 250 && (int)$_GET['cc'] <= 550 ){
                        return 20;
                    }else{
                        if( (int)$_GET['cc'] > 550 && (int)$_GET['cc'] <= 750 ){
                            return 35;
                        }else{
                            if( (int)$_GET['cc'] > 750 ){
                                return 55;
                            }
                        }
                    }   
                }
            //if superior
            }else{
                if( (int)$_GET['precio'] < 20000 && (int)$_GET['year'] > 5 && (int)$_GET['year'] <= 12 ){
                    if( (int)$_GET['cc'] <= 1500 ){
                        return  120;
                    }else{
                        if( (int)$_GET['cc'] > 1500 && (int)$_GET['cc'] <= 2000 ){
                            return 180;
                        }else{
                            if( (int)$_GET['cc'] > 2000 ){
                                return 280;
                            }
                        }
                    }
    
                    if( (int)$_GET['cc'] <= 250 ){
                        return 30;
                    }else{
                        if( (int)$_GET['cc'] > 250 && (int)$_GET['cc'] <= 550 ){
                            return 60;
                        }else{
                            if( (int)$_GET['cc'] > 550 && (int)$_GET['cc'] <= 750 ){
                                return 90;
                            }else{
                                if( (int)$_GET['cc'] > 750 ){
                                    return 140;
                                }
                            }
                        }   
                    }
                
                
                }else{
                    if( (int)$_GET['year'] <= 5 && (int)$_GET['cc'] > 2000 && (int)$_GET['precio'] >= 20000 ){
                        return 8;
                    }else{
                        return 6;
                    }
                }
            }

        break;    

        case 'extremadura':
            return 6;
        break;
        
        case 'galicia':
            if( (int)$_GET['year'] > 15 && (int)$_GET['cc'] < 1600 && (int)$_GET['cc'] > 1199 ){
                return 22;
            }else{
                if( (int)$_GET['year'] > 15 && (int)$_GET['cc'] >= 1600 ){
                    return 38;
                }else{
                    return 8;
                }  
            }
        
        break;
        
        case 'rioja':
            return 4;
        break;
        
        case 'madrid':
            return 4;
        break;    
        
        case 'melilla':
            return 4;

        break;

        case 'murcia':
            if( (int)$_GET['year'] > 12 ){
                if( (int)$_GET['cc'] <= 1000 ){
                    return 0;
                }else{
                    if( (int)$_GET['cc'] > 1000 && (int)$_GET['cc'] <= 1500 ){
                        return 30;
                    }else{
                        if( (int)$_GET['cc'] > 1500 && (int)$_GET['cc'] <= 2000  ){
                            return 50;
                        }else{
                            if((int)$_GET['cc'] > 2000  ){
                                return 75;
                            }
                        }
                    }

                }
            }else{
                return 4;
            }

        break;    

        case 'navarra';
            if( (int)$_GET['year'] > 10 && (int)$_GET['precio'] < 40000 ){
                return 0;
            }else{
                if( (int)$_GET['cc'] < 50  ){
                    return 0;
                }else{
                    return 4;
                }
            }
        break;
        
        case 'alava':
            return 4;
        break;
        
        case 'guipuzcoa':
            return 4;
        break;   

        case 'vizcaya':
            return 4;
        break;    

        default:

        return '';

    }
}



function test(){


    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
    $reader->setReadDataOnly(TRUE);
    $spreadsheet = $reader->load("./tablas.xlsx");

    $worksheet = $spreadsheet->getActiveSheet();
    // Get the highest row and column numbers referenced in the worksheet
    $highestRow = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
    $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
    $car = array();
    echo '<table>' . "\n";
    for ($row = 52929; $row <= 53704; ++$row) {
        echo '<tr>' . PHP_EOL;
        for ($col = 1; $col <= 9; ++$col) {
            $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
            echo '<td>' . $value . '</td>' . PHP_EOL;
            $car []= $value;
        }

        // Create post object
        $my_post = array(
            'post_title'    => $car[0],
            'post_status'   => 'publish',
            'post_type'     => 'coches'
        );
        
        // Insert the post into the database
        $post_id = wp_insert_post( $my_post );
       
        switch($car[4]){
            case 'G';
                wp_set_post_terms( $post_id, array(9) , 'combustible' );
            break;
            case 'g';
                wp_set_post_terms( $post_id, array(9) , 'combustible' );
            break;
            case 'D':
                wp_set_post_terms( $post_id, array(25) , 'combustible' );
            break;
            
            case 'S':
                wp_set_post_terms( $post_id, array(26) , 'combustible' );
            break;
            
            case 'GyE':
                wp_set_post_terms( $post_id, array(22) , 'combustible' );
            break;
            
            case 'GYE':
                wp_set_post_terms( $post_id, array(22) , 'combustible' );
            break;
            
            case 'M':
                wp_set_post_terms( $post_id, array(29) , 'combustible' );
            break;
            
            case 'DyE':
                wp_set_post_terms( $post_id, array(23) , 'combustible' );
            break;
            
            case 'Elc':
                wp_set_post_terms( $post_id, array(10) , 'combustible' );
            break;

        }
        
        wp_set_post_terms( $post_id, array(95) , 'marca' );
        update_post_meta( $post_id, 'modelo', $car[0]  );
        update_post_meta( $post_id, 'periodo', $car[1]);
        update_post_meta( $post_id, 'cilindrada', $car[2]);
        update_post_meta( $post_id, 'cilindros', $car[3]);
        update_post_meta( $post_id, 'potencia', $car[7]);
        update_post_meta( $post_id, 'potencia_fiscal', $car[6]);

        update_post_meta( $post_id, 'valor_euros', $car[8]);


        echo '</tr>' . PHP_EOL;
        echo '<pre>';
        //var_dump($car);
        $car = array();
        echo '<pre>';
        // die();
    }
    echo '</table>' . PHP_EOL;

    die();
}

add_shortcode('test','test');