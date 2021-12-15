<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno Edit Beneficiary
 */

uno_user_check_cap( 'edit' );

/**
 * Get global id
 */
global $uno_global_id;

/**
 * Check for POST request method
 */
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  uno_post_handler();
}

/**
 * Check for GET request method
 */
else if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
  $data = $_GET;
  add_filter( 'uno_page_header_title', function() { return 'Personal Information'; } );

  if ( isset( $data['uno_cat'] ) ) {

    /**
     * Check nonce
     */
    uno_nonce_check( 'get', 'uno_nonce', false );

    switch ( $data['uno_cat'] ) {
      case 'general':
        
          $args = ['cb' => [ 'templates/forms/form-general', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'gip':

          $args = ['cb' => [ 'templates/forms/form-gip', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'tupad':

          $args = ['cb' => [ 'templates/forms/form-tupad', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'deped':

          $args = ['cb' => [ 'templates/forms/form-deped', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'ched':

          $args = ['cb' => [ 'templates/forms/form-ched', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'tesda':

          $args = ['cb' => [ 'templates/forms/form-tesda', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'aics':

          $args = ['cb' => [ 'templates/forms/form-aics', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'map':

          $args = ['cb' => [ 'templates/forms/form-map', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'legal':

          $args = ['cb' => [ 'templates/forms/form-legal', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'health':

          $args = ['cb' => [ 'templates/forms/form-health', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      case 'youth':

          $args = ['cb' => [ 'templates/forms/form-youth', [], '']];
          uno_user_check_cap( 'encoder' );
          uno_output_renderer( $args );

        break;
      default:
          wp_die( 'Invalid request.' );
        break;
    }

  }
}
