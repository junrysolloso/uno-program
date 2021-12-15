<?php defined( 'ABSPATH' ) or exit(); 

/**
 * Template Name: Uno Trabaho
 */

uno_user_check_cap( 'encoder' );

/**
 * Check for POST request method
 */
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  uno_post_handler();
}

/**
 * Args for WP_Query
 */
global $uno_global_queries, $uno_global_walker_variable;

/**
 * Render html output
 */
$uno_global_walker_variable = 'Uno Trabaho Beneficiaries';
uno_output_renderer( ['list' => $uno_global_queries['uno_trabaho']] );
