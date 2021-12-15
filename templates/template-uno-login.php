<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno Login
 */

/**
 * Check server request
 */
$error = false;
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  if ( isset( $_POST['username'] ) && isset( $_POST['userpass'] ) ) {

    $data = [
      'user_login'    => sanitize_text_field( $_POST['username'] ),
      'user_password' => sanitize_text_field( $_POST['userpass'] ),
      'remember'      => false
    ];

    $user = wp_signon( $data, true );
    if ( ! is_wp_error( $user ) ) {

      wp_set_current_user( $user->ID );
      wp_set_auth_cookie( $user->ID, 0, is_ssl() );

    } else {
      $error = true;
    }
  }
}

/**
 * Check if user is login
 */
if ( is_user_logged_in() ) {

  uno_user_check_cap( 'read' );
  uno_redirect( uno_user_dashboard_url() );
  
}

/**
 * Menify and output
 */
uno_output_renderer( ['page' => 'uno_login_template'] );
