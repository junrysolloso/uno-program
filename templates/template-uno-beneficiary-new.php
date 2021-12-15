<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno New Beneficiary
 */

uno_user_check_cap( 'publish' );

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

  global $uno_global_walker_variable;
  $data = $_GET;

  /**
   * Look for the right form
   */
  if ( isset( $data['form'] ) ) {
    uno_nonce_check( 'get', 'uno_nonce' );

    switch ( $data['form'] ) {
      case 'general':
        
        $uno_global_walker_variable = 'New General Information';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-general', [], '']] );

        break;
      case 'gip':
        $uno_global_walker_variable = 'New GIP Assistance';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-gip', [], '']] );

        break;
      case 'tupad':

        $uno_global_walker_variable = 'New TUPAD Assistance';
        
        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-tupad', [], '']] );

        break;
      case 'deped':

        $uno_global_walker_variable = 'New DepEd Assistance';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-deped', [], '']] );

        break;
      case 'ched':
        
        $uno_global_walker_variable = 'New CHED Assistance';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-ched', [], '']] );

        break;
      case 'tesda':

        $uno_global_walker_variable = 'New TESDA Assistance';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-tesda', [], '']] );

        break;
      case 'aics':

        $uno_global_walker_variable = 'New AICS Assistance';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-aics', [], '']] );

        break;
      case 'map':

        $uno_global_walker_variable = 'New MAP Assistance';

        uno_user_check_cap( 'encoder' );
        uno_output_renderer( ['cb' => ['templates/forms/form-map', [], '']] );

        break;
      case 'trabaho':
        
        $uno_global_walker_variable = 'Trabaho Application Form';

        $args = ['cb' => [ 'templates/fields/field-choices-trabaho', ['prefix' => 'uno'], '<div id="form-container"></div>']];
        uno_user_check_cap( 'encoder' );
        uno_output_renderer( $args );

        break;
      case 'iskolar':

        $uno_global_walker_variable = 'Iskolar Application Form';

        $args = ['cb' => ['templates/fields/field-choices-iskolar', ['prefix' => 'uno'], '<div id="form-container"></div>']];
        uno_user_check_cap( 'encoder' );
        uno_output_renderer( $args );

        break;
      case 'ayuda':

        $uno_global_walker_variable = 'Ayuda Application Form';

        $args = ['cb' => ['templates/fields/field-choices-ayuda', ['prefix' => 'uno'], '<div id="form-container"></div>']];
        uno_user_check_cap( 'encoder' );
        uno_output_renderer( $args );

        break;
      case 'legal':

        $uno_global_walker_variable = 'New Legal Assistance';

        $args = ['cb' => [ 'templates/forms/form-legal', [], '']];
        uno_user_check_cap( 'encoder' );
        uno_output_renderer( $args );

        break;
      case 'health':

        $uno_global_walker_variable = 'New Health Assistance';

        $args = ['cb' => ['templates/forms/form-health', [], '']];
        uno_user_check_cap( 'encoder' );
        uno_output_renderer( $args );

        break;
      case 'youth':

        $uno_global_walker_variable = 'New Youth';

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
