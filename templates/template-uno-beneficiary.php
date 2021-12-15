<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno Beneficiary
 */

uno_user_check_cap( 'read' );

/**
 * Global beneficiary data
 */
global $uno_global_data;
global $uno_global_cat;
global $uno_global_id;

/**
 * Check for GET request
 */
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
  if ( $uno_global_id && $uno_global_cat ) {

    /**
     * Check nonce
     */
    uno_nonce_check( 'get', 'uno_nonce', false );

    /**
     * Check user capability
     */
    uno_user_check_cap( 'encoder' );

    /**
     * Look for the requested profile then include the data
     */
    switch ( $uno_global_cat ) {
      case 'general':
        
        get_template_part( 'templates/views/view-general' );

        break;
      case 'tupad':
        
        get_template_part( 'templates/views/view-tupad' );

        break;
      case 'gip':
      
        unset( $uno_global_data['skills'] );
        unset( $uno_global_data['status_of_livelihood'] );
        unset( $uno_global_data['husband_or_wife_information'] );

        get_template_part( 'templates/views/view-gip' );

        break;
      case 'deped':
    
        unset( $uno_global_data['skills'] );
        unset( $uno_global_data['status_of_livelihood'] );
        unset( $uno_global_data['husband_or_wife_information'] );

        get_template_part( 'templates/views/view-deped' );

        break;
      case 'ched':
  
        unset( $uno_global_data['skills'] );
        unset( $uno_global_data['status_of_livelihood'] );
        unset( $uno_global_data['husband_or_wife_information'] );

        get_template_part( 'templates/views/view-ched' );

        break;
      case 'tesda':
        
        unset( $uno_global_data['skills'] );
        unset( $uno_global_data['status_of_livelihood'] );
        unset( $uno_global_data['husband_or_wife_information'] );

        get_template_part( 'templates/views/view-tesda' );

        break;
      case 'legal':
      
        unset( $uno_global_data['skills'] );
        unset( $uno_global_data['status_of_livelihood'] );
        unset( $uno_global_data['husband_or_wife_information'] );

        get_template_part( 'templates/views/view-legal' );

        break;
      default:

        wp_die( 'Invalid request.', 'Error' );

        break;
    }

    // var_dump( get_post_meta(193) );
    // exit;

    /**
     * Show profile
     */
    uno_output_renderer( ['page' => 'uno_view_single_data'] );
  }
}
