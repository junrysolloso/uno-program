<?php defined( 'ABSPATH' ) or exit();

/**
 * Just print
 */
function p_( $string ) {
  echo $string;
}

/**
 * Echo version
 */
function uno_e_version() {
	echo UNO_VERSION;
}

/**
 * Echo directory
 */
function uno_e_dir() {
	echo UNO_DIR;
}

/**
 * Echo URI
 */
function uno_e_theme_uri() {
	echo UNO_URI . '/';
}

/**
 * Echo site url
 */
function uno_e_site_url() {
  echo site_url( '/' );
}

/**
 * Get URI
 */
function uno_get_uri() {
  return UNO_URI;
}

/**
 * Get directory
 */
function uno_get_dir() {
  return UNO_DIR;
}

/**
 * Get version
 */
function uno_get_version() {
  return UNO_VERSION;
}

/**
 * Upload directory
 */
function uno_upload_dir() {
  return wp_upload_dir()['basedir'] . '/';
}

/**
 * Upload path
 */
function uno_upload_url() {
  return wp_upload_dir()['baseurl'] . '/';
}

/**
 * Get header
 */
function uno_get_header() {
  get_template_part( 'templates/parts/part-header' );
}

/**
 * Get footer
 */
function uno_get_footer() {
  get_template_part( 'templates/parts/part-footer' );
}

/**
 * Get topbar
 */
function uno_get_topbar() {
  get_template_part( 'templates/parts/part-topbar' );
}

/**
 * Get sidebar
 */
function uno_get_sidebar() {
  get_template_part( 'templates/parts/part-sidebar' );
}

/**
 * Redirect
 */
function uno_redirect( $url = '' ) {
  if ( $url ) {
    wp_redirect( $url );
    exit;
  }
}

/**
 * Login URL
 */
function uno_login_url() {
  return site_url( '/login' );
}

/**
 * User dashboard URL
 */
function uno_user_dashboard_url() {
  return site_url( '/dashboard' );
}

/**
 * Generate account number
 */
function uno_generate_id() {

  $id   = 'UNO-'. mt_rand( 10000000, 99999999 );
  $args = [
    'post_type'    => 'uno_beneficiaries',
    'post_status'  => 'publish',
    'meta_key'     => 'uno_beneficiary_id',
    'meta_value'   => $id,
    'meta_compare' => '='
  ];

  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
    uno_generate_id();
  }

  wp_reset_postdata();

  return $id;
}

/**
 * Server html response
 */
function uno_server_response( $data ) {
  header( 'content-type: application/json' );
  exit( wp_json_encode( $data ) );
}

/**
 * Input meta builder
 */
function uno_input_meta_builder( $meta ) {
  $meta_build = [];

  if ( is_array( $meta ) && ! empty( $meta ) ) {
    foreach ( $meta as $key => $value ) {
      array_push( $meta_build, $key .'="'. $value .'" ');
    }

    return implode( ' ', $meta_build );
  }
}

/**
 * Check user if login and if subscriber
 */
function uno_user_check_cap( $action ) {

  if ( ! is_user_logged_in() ) {
    uno_redirect( uno_login_url() );
  }

  if ( current_user_can( 'administrator' )
  || current_user_can( 'uno_trabaho' )
  || current_user_can( 'uno_iskolar' )
  || current_user_can( 'uno_ayuda' )
  || current_user_can( 'uno_legal' )
  || current_user_can( 'uno_health' )
  || current_user_can( 'uno_youth' ) ) {
    
    if ( ! current_user_can( 'administrator' ) ) {
      switch ( $action ) {
        case 'publish':
  
          uno_check_user_action( 'publish_posts' );
  
          break;
        case 'edit':
  
          uno_check_user_action( 'edit_posts' );
  
          break;
        case 'delete':
  
          uno_check_user_action( 'delete_posts' );
  
          break;
        case 'read':
  
          uno_check_user_action( 'read' );
  
          break;
        case 'encoder':
  
          uno_check_user_access( 'encoder' );
  
          break;
        default:
          
          wp_die( 'Sorry something went wrong.', 'Error' );
  
          break;
      }
    }
  } else {
    wp_die( 'Sorry something went wrong.', 'Error' );
  }
}

/**
 * Check user access
 */
function uno_check_user_access( $capability ) {
  if ( current_user_can( $capability ) ) {
    return;
  } else {
    if ( is_user_logged_in() ) {
      add_filter( 'uno_error_page_notice', function(){ return 'You are not allowed to access this page.'; } );
      uno_output_renderer( ['page' => 'uno_user_no_access'] );
    } else {
      wp_die( 'Sorry, you are not allowed to access this page.', 'Error' );
    }
  }
}

/**
 * Check user action
 */
function uno_check_user_action( $action ) {
  if ( current_user_can( $action ) ) {
    return;
  } else {
    if ( is_user_logged_in() ) {
      add_filter( 'uno_error_page_notice', function(){ return 'You are not allowed to perform this action.'; } );
      uno_output_renderer( ['page' => 'uno_user_no_access'] );
    } else {
      wp_die( 'You are not allowed to perform this action.', 'Error' );
    }
  }
}

/**
 * Minify html
 */
function uno_html_minifier( $buffer ) {
  $search = array(
    '/\n/',             // replace end of line by a space
    '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
    '/[^\S ]+\</s',     // strip whitespaces before tags, except space
    '/(\s)+/s',         // shorten multiple whitespace sequences
    '/<!--(.|\s)*?-->/' // remove comments
  );

  if ( $buffer ) {
    $replace = array( '', '>', '<', '\\1' );
    $buffer  = preg_replace( $search, $replace, $buffer );
  }

  return $buffer;
}

/**
 * Remove empty key for 3 dimentional array
 */
function uno_unset_empty_array( $array ) {

  if ( is_array( $array ) ) {
    foreach ( $array as $key1 => $val1 ) {
      if ( is_array( $val1 ) ) {
        foreach ( $val1 as $key2 => $val2 ) {
          
          if ( is_array( $val2 ) ) {
            foreach ( $val2 as $key3 => $val3 ) {
              if ( empty( $val3 ) ) {
                unset( $array[ $key1 ][ $key2 ][ $key3 ] );
              }
            }
          } else {
            if ( empty( $val2 ) ) {
              unset( $array[ $key1 ][ $key2 ] );
            }
          }

        }
      } else {
        if ( empty( $val1 ) ) {
          unset( $array[ $key1 ] );
        }
      }
    }

    return $array;
  }
}

/**
 * HTML output renderer
 */
function uno_output_renderer( $param_arr ) {

  /**
   * Remove empty key from the array
   */
  $param_arr = uno_unset_empty_array( $param_arr );

  if ( is_array( $param_arr ) ) {
    ob_start();

    /**
     * Callback
     */
    if ( key_exists( 'page', $param_arr  ) ) {
      $param_arr['page']();
    }

    /**
     * List table
     */
    if ( key_exists( 'list', $param_arr  ) ) {

      uno_get_header();
      uno_list_table_template( $param_arr['list'] );
      uno_get_footer(); 

    } 

    /**
     * Fields
     */
    if ( key_exists( 'fields', $param_arr ) ) {
      uno_field_template( $param_arr['fields'] );
    }
    
    /**
     * Template
     */
    if ( key_exists( 'template', $param_arr ) ) {
      get_template_part( $param_arr['template'] );
    }
    
    /**
     * Template with args
     */
    if ( key_exists( 'cb', $param_arr ) ) {
      uno_get_header();

      get_template_part( $param_arr['cb'][0], '', $param_arr['cb'][1] );
      isset( $param_arr['cb'][2] ) ? p_( $param_arr['cb'][2] ) : null;

      uno_get_footer(); 
    }
    
    /**
     * Cast buffer string then clean the buffer
     */
    $html = ob_get_contents();
    ob_end_clean();

    /**
     * Output minified html
     */
    p_( uno_html_minifier( $html ) );
    exit;
  }
}

/**
 * Security check using WordPress nonce
 */
function uno_nonce_check( $method, $nonce_name, $ajax = true ) {
  $hash = md5( get_current_user() );

	if ( empty( $method ) && empty( $nonce_name ) ) {
    uno_notice( ['error', 'All security parameters is required.'], $ajax );
	}

	if ( ! $_SERVER['REQUEST_METHOD'] == $method ) {
    uno_notice( ['error', 'Invalid request method.'], $ajax );
  }
	
	if ( strtoupper( $method ) == 'POST' ) {
    if ( isset( $_POST[ $nonce_name ] ) ) {
      if ( ! wp_verify_nonce( $_POST[ $nonce_name ], $hash ) ) {
        uno_notice( ['error', 'Security check error.'], $ajax );
      }
    } else {
      uno_notice( ['error', 'Security not present.'], $ajax );
    }
	} 
  else if ( strtoupper( $method ) == 'GET' ) {
    if ( isset( $_GET[ $nonce_name ] ) ) {
      if ( ! wp_verify_nonce( $_GET[ $nonce_name ], $hash ) ) {
        uno_notice( ['error', 'Security check error.'], $ajax );
      }
    } else {
      uno_notice( ['error', 'Security not present.'], $ajax );
    }
	}
}

/**
 * Error notice
 */
function uno_notice( $message = [], $ajax = true ) {
  if ( ! empty( $message ) ) {
    if ( $ajax ) {
      uno_server_response( ['status' => $message[0], 'message' => $message[1]] );
    } else {
      wp_die( $message[0], 'Error' );
    }
  }
}

/**
 * Search input class in a group of classes
 */
function uno_search_input_class( $niddle, $classes ) {
  $return = false;
  $array  = explode( ' ', $classes );

  if ( array_search( $niddle, array_values( $array ) ) ) {
    $return = true;
  }

  return $return;
}

/**
 * Input classes
 */
function uno_input_class( $input = '' ) {
  $classes = [
    'radio'  => 'iradio_flat',
    'check'  => 'icheckbox_flat',
    'bool'   => 'true_false',
    'text'   => 'form-control',
    'date'   => 'form-control',
    'email'  => 'form-control',
    'url'    => 'form-control',
    'select' => 'form-control select2',
  ];

  if ( $input ) {
    return $classes[ $input ];
  }
}

/**
 * Input field id format 
 */
function uno_input_id( $id ) {
  global $uno_global_input_prefix;
  global $uno_global_walker_variable;

  $uno_global_walker_variable = $id;
  if ( $id ) {
    $id = $uno_global_input_prefix .'_'. $id .'_id';
  }

  return $id;
}

/**
 * Input field name format 
 */
function uno_input_name( $name = '' ) {
  global $uno_global_input_prefix;
  global $uno_global_walker_variable;

  if ( $name ) {
    $name = $uno_global_input_prefix .'_'. $name;
  } else {
    $name = $uno_global_input_prefix .'_'. $uno_global_walker_variable;
  }

  return $name;
}

/**
 * Input view value for boolean
 */
function uno_view_bool( $key ) {
  global $ID;
  $return = 'No';

  $value = uno_get_the_meta( $key, $ID );
  if ( $value ) {
    $return = 'Yes';
  }

  return $return;
}

/**
 * Table id format 
 */
function uno_table_id( $id ) {
  $id = 'table_'. $id;
  return $id;
}

/**
 * Get post meta value
 */
function uno_input_value( $name = '' ) {
  global $uno_global_input_prefix;
  global $uno_global_walker_variable;
  global $uno_global_id;

  $meta_value = '';

  if ( $uno_global_id ) {
    $key = $uno_global_input_prefix .'_'. $uno_global_walker_variable;

    if ( $name ) {
      $meta_value = get_post_meta( $uno_global_id, $name, true );
    } else {
      $meta_value = get_post_meta( $uno_global_id, $key, true );
    }
  }

  return $meta_value;
}

/**
 * Generate random characters
 */
function uno_generate_random_chars( $length = 32 ) {
	$chars     = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$chars_len = strlen( $chars );
	$random    = '';

	for ( $i = 0; $i < $length; $i++ ) {
		$random .= $chars[ rand( 0, $chars_len - 1 ) ];
	}

	return $random;
}

/**
 * Value extractor
 * 
 * Extract the array values from a single meta key
 * The return value is key value pair of label and a value
 */
function uno_view_array( $params ) {
  global $uno_global_data, $uno_global_id;

  $values = [];
  $pairs  = [];

  $uno_global_data[ $params['table'] ] = [];
  
  if ( $uno_global_id ) {
    
    foreach ( array_keys( $params['key'] ) as $key ) {
      array_push( $values, ['value' => uno_get_the_meta( $key )] );
    }
    
    $key_len    = count( $params['key'] );
    $values_len = count( $values[0]['value'] );
  
    for ( $i = 0; $i < $values_len; $i++ ) { 
      for ( $j = 0; $j < $key_len; $j++ ) {
        array_push( $pairs,
          [
            'label' => array_values( $params['key'] )[ $j ],
            'value' => $values[ $j ]['value'][ $i ]
          ]
        );
      }

      array_push( $uno_global_data[ $params['table'] ], $pairs );
      $pairs = [];
    }
  }
}

/**
 * Upload photo
 */
function uno_upload_photo( $ID, $photo_data ) {
  if ( ! empty( $photo_data ) ) {

    $photo_dir = uno_upload_dir() . 'photos';
    if ( ! file_exists( $photo_dir ) ) {
      mkdir( $photo_dir );
    }

    $photo     = uno_generate_random_chars() . '.jpg'; 
    $photo_dir = uno_upload_dir() . 'photos/' . $photo;
    $photo_url = uno_upload_url() . 'photos/' . $photo;

    /**
     * Delete existing photo
     */
    uno_delete_profile_photo( $ID );

    /**
     * Upload photo
     */
    $file = file_put_contents( $photo_dir, base64_decode( $photo_data ) );

    /**
     * Check if it returns the lenght of the photo
     */
    if ( is_numeric( $file ) ) {
      return $photo_url;
    } else {
      return false;
    }
  }
}

/**
 * Delete photo
 */
function uno_delete_profile_photo( $ID ) {
  /**
   * Get the photo link
   */
  $old_photo = get_post_meta( $ID, 'uno_beneficiary_photo', true );

  /**
   * Check then delete it
   */
  if ( $old_photo ) {
    $filename = array_reverse( explode( '/', $old_photo ) );
    $file     = uno_upload_dir() . 'photos/' . $filename[0];

    if ( file_exists( $file ) ) {
      unlink( $file );
    }
  }
}

/**
 * Upload signature
 */
function uno_upload_signature( $ID, $signature_data ) {

  /**
   * Load library
   */
  require_once UNO_DIR . '/libraries/function-base30-to-png.php';

  /**
   * Check signature if greater than default
   */
  if ( strlen( $signature_data ) > 30 ) {

    $sign_dir = uno_upload_dir() . 'signatures';
    if ( ! file_exists( $sign_dir ) ) {
      mkdir( $sign_dir );
    }

    $sign     = uno_generate_random_chars() . '.png'; 
    $sign_dir = uno_upload_dir() . 'signatures/' . $sign;
    $sign_url = uno_upload_url() . 'signatures/' . $sign;

    /**
     * Delete old signature
     */
    uno_delete_profile_signature( $ID );

    /**
     * Save signature
     */
    $file = base30_to_jpeg( $signature_data, $sign_dir );

    /**
     * Check if it exists
     */
    if ( file_exists( $file ) ) {
      return $sign_url;
    } else {
      return false;
    }
  }
}

/**
 * Delete signature
 */
function uno_delete_profile_signature( $ID ) {
  /**
   * Get signature link
   */
  $old_sign = get_post_meta( $ID, 'uno_beneficiary_signature', true );

  /**
   * Check then delete it
   */
  if ( $old_sign ) {
    $filename = array_reverse( explode( '/', $old_sign ) );
    $file     = uno_upload_dir() . 'signatures/' . $filename[0];

    if ( file_exists( $file ) ) {
      unlink( $file );
    }
  }
}

/**
 * Insert beneficiary to database
 */
function uno_insert_beneficiary( $post_array ) {
  if ( is_array( $post_array ) ) {

    $name = $post_array['uno_beneficiary_name_last'] .' '. $post_array['uno_beneficiary_name_first'];
    key_exists( 'id', $post_array ) ? $ID = $post_array['id'] : $ID = 0;

    /**
     * Check if it is existing profile then use the ID
     */
    if ( ! empty( $post_array['uno_beneficiary_id_old'] ) ) {
      $args = [
        'post_type'    => 'uno_beneficiaries',
        'post_status'  => 'publish',
        'meta_key'     => 'uno_beneficiary_id',
        'meta_value'   => $post_array['uno_beneficiary_id_old'],
        'meta_compare' => '='
      ];
    
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          $ID = get_the_ID();
        }
      } else {
        uno_notice( ['error', 'There is no record found for the specified Uno ID.'] );
      }

      /**
       * Remove empty keys
       */
      $post_array = uno_unset_empty_array( $post_array );

      /**
       * Remove input id in order not to replace the existing id
       */
      unset( $post_array['uno_beneficiary_id'] );
    }

    /**
     * Remove unecessary fields
     */
    $remove = ['filter', 'ID', 'id', 'uno_nonce', 'uno_check'];
    foreach ( $remove  as $key ) {
      unset( $post_array[ $key ] );
    }

    $post_data = [
      'ID'          => $ID,
      'post_title'  => $name,
      'post_author' => get_current_user_id(),
      'post_status' => 'publish',
      'post_type'   => 'uno_beneficiaries',
      'meta_input'  => $post_array,
    ];

    /**
     * Try to insert data
     */
    $id = wp_insert_post( $post_data, true );  

    /**
     * Check for errors
     */
    if ( ! is_wp_error( $id ) ) {
      uno_notice( ['success', 'Data successfully processed.'] );
    } else {
      uno_notice( ['error', 'Unable to process data.'] );
    }
  }
}

/**
 * Post request handler
 */
function uno_post_handler() {
  $data = $_POST;
  
  /**
   * Check user capability
   */
  uno_user_check_cap( sanitize_text_field( $data['uno_check'] ) );

  /**
   * Check nonce
   */
  uno_nonce_check( 'post', 'uno_nonce' );

  if ( is_array( $data ) ) {
    $data   = uno_sanitize_data( $data );
    $data   = sanitize_post( $data, 'db' );
    $action = $data['uno_check'];
    
    /**
     * Delete action
     */
    if ( $action == 'delete' ) {
      $ID = (int) $data['uno_id'];

      if ( key_exists( 'uno_id', $data ) ) {
        if ( wp_trash_post( $ID ) ) {
          /**
           * Delete photo and signature
           */
          uno_delete_profile_signature( $ID );
          uno_delete_profile_photo( $ID );

          uno_notice( ['success', 'Data successfully deleted.'] );
        }
      }
    }

    /**
     * Publish action
     */
    if ( $action == 'publish' || $action == 'edit' ) {

      if ( key_exists( 'uno_beneficiary_photo', $data ) ) {
        /**
         * Upload photo
         */
        $photo_url = uno_upload_photo( $data['id'], $data['uno_beneficiary_photo'] );

        /**
         * Check if successful
         */
        if ( $photo_url ) {
          $data['uno_beneficiary_photo'] = $photo_url;
        } else {
          unset( $data['uno_beneficiary_photo'] );
        }
      }

      if ( key_exists( 'uno_beneficiary_signature', $data ) ) {
        /**
         * Upload signature
         */
        $sign_url = uno_upload_signature( $data['id'], $data['uno_beneficiary_signature'] );

        /**
         * Check if successful
         */
        if ( $sign_url ) {
          $data['uno_beneficiary_sign_data'] = $data['uno_beneficiary_signature'];
          $data['uno_beneficiary_signature'] = $sign_url;
        } else {
          unset( $data['uno_beneficiary_signature'] );
        }
      }
      
      /**
       * Insert data to database
       */
      uno_insert_beneficiary( $data );
    }
  }
}

/**
 * Sanitize data
 */
function uno_sanitize_data( $datas ) {
  $raw_data        = $datas;
  $sanitized_key   = '';
  $sanitized_data  = [];

  /**
   * Sanitize the key and value
   */
  foreach ( $raw_data as $key => $value ) {
    $sanitized_key                    = sanitize_key( $key );
    $sanitized_data[ $sanitized_key ] = sanitize_post_field( $sanitized_key, $value, $datas['ID'], 'raw' );
  }

  return $sanitized_data;
}

/**
 * Form request handler
 */
function uno_get_form_handler() {
  $data = $_GET;

  if ( isset( $data['form'] ) ) {
    uno_nonce_check( 'get', 'uno_nonce' );

    switch ( $data['form'] ) {
      case 'general':

        uno_trabaho_general_form();

        break;
      case 'gip':

        uno_trabaho_gip_form();

        break;
      case 'tupad':

        uno_trabaho_tupad_form();

        break;
      case 'deped':

        uno_iskolar_deped_form();

        break;
      case 'ched':

        uno_iskolar_ched_form();

        break;
      case 'tesda':

        uno_iskolar_tesda_form();

        break;
      case 'aics':

        uno_ayuda_aics_form();

        break;
      case 'map':

        uno_ayuda_map_form();

        break;
      default:

        wp_die( 'Ooops.. Invalid request.' );

        break;
    }
  }
}

/**
 * Get single post meta for display only
 */
function uno_get_the_meta( $key ) {
  global $uno_global_id;

  if ( $uno_global_id ) {
    $value = get_post_meta( $uno_global_id, $key, true );
    return uno_convert_date( $value );
  }

  if ( ! empty( $key ) ) {
    $value = get_post_meta( get_the_ID(), $key, true );
    return uno_convert_date( $value );
  }
}

/**
 * Convert string to date
 */
function uno_convert_date( $string ) {
  /**
   * If value is date then convert to date format
   */
  if ( $string && is_string( $string ) && date_create( $string ) ) {
    return date_format( date_create( $string ), 'F j, Y' );
  }

  return $string;
}

/**
 * Generate Qrcode
 */
function uno_create_qrcode() {
  /**
   * Require QrCode library
   */
  require_once UNO_DIR . '/libraries/class-qrcode.php';

  /**
   * QRcode information
   */
  $info = [
    'id'      => uno_get_the_meta( 'uno_beneficiary_id' ),
    'name'    => ucwords( uno_get_the_meta( 'uno_beneficiary_name_first' ) ) .' '. ucwords( uno_get_the_meta( 'uno_beneficiary_name_last' ) ),
    'phone'   => uno_get_the_meta( 'uno_beneficiary_contact_phone_number' ),
    'email'   => uno_get_the_meta( 'uno_beneficiary_contact_email_address' ),
    'address' => uno_get_the_meta( 'uno_beneficiary_permanent_address_purok' ) .' '. uno_get_the_meta( 'uno_beneficiary_permanent_address_barangay' ) .', '. uno_get_the_meta( 'uno_beneficiary_permanent_address_municipality' ) .', DI',
    'gender'  => uno_get_the_meta( 'uno_beneficiary_gender_male' ) ? 'Male' : 'Female'
  ];

  /**
   * Convert array to object
   */
  $info = (object) $info;

  /**
   * File variables
   */
  $temp_url = uno_upload_url() . 'temp/';
  $temp_dir = uno_upload_dir() . 'temp/';
  $name     = uno_generate_random_chars() .  '.png';

  $file     = $temp_dir . $name;
  $path     = $temp_url . $name;

  /**
   * Check directory if exist otherwise make one
   */
  if ( ! file_exists( $temp_dir ) ) {
    mkdir( $temp_dir );
  }
  
  /**
   * Delete existing files
   */
  uno_clean_dir( $temp_dir );

  /**
   * QRcode content
   */
  $content  = 'ID'. "\t\t\t\t\t\t\t\t" .': '. $info->id . "\n";
  $content .= 'Name'. "\t\t\t" .': '.         $info->name . "\n" ;
  $content .= 'Phone'. "\t\t\t" .': '.        $info->phone . "\n";
  $content .= 'Email'. "\t\t\t\t" .': '.      $info->email . "\n";
  $content .= 'Address'. "\t" .': '.          $info->address . "\n";
  $content .= 'Gender'. "\t\t" .': '.         $info->gender . "\n";

  /**
   * Generate QRcode
   */
  QRcode::png( $content, $file, QR_ECLEVEL_L, 3, 2 );
    
  /**
   * Return the URL
   */
  return $path;
}

/**
 * Cleanup directory
 */
function uno_clean_dir( $directory, $limit = 10 ) {

  /**
   * Check directory if exists
   */
  if ( ! file_exists( $directory ) ) {
    return;
  }

  /**
   * Get all temporary files
   */
  $files = glob( $directory . '*' );

  /**
   * Check if it reaches the limit
   */
  if ( count( $files ) < $limit ) {
    return;
  }

  /**
   * Delete all files from the folder
   */
  if ( is_array( $files ) ) {
    foreach ( $files as $file ) {
      if ( file_exists( $file ) ) {
        unlink( $file );
      }
    }
  }
}

/**
 * Generate nonce
 */
function uno_get_nonce() {
  /**
   * Check if user is logged in then create nonce
   */
  if ( is_user_logged_in() ) {
    $hash  = md5( get_current_user() );
    $nonce = wp_create_nonce( $hash );
  
    return $nonce;
  } else {
    wp_die( 'Ooops... No cheaten bro!', 'Error' );
  }
}

/**
 * Just return the global variable value
 */
function uno_return_global( $any ) {
  global $$any;

  return $$any;
}
