<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno Dashboard
 */

uno_user_check_cap( 'read' );

/**
 * Global query variable
 */
global $uno_global_queries;

/**
 * Queries
 */
$uno_trabaho = new WP_Query( $uno_global_queries['uno_trabaho'] );
$uno_iskolar = new WP_Query( $uno_global_queries['uno_iskolar'] );
$uno_ayuda   = new WP_Query( $uno_global_queries['uno_ayuda'] );
$uno_legal   = new WP_Query( $uno_global_queries['uno_legal'] );
$uno_health  = new WP_Query( $uno_global_queries['uno_health'] );
$uno_youth   = new WP_Query( $uno_global_queries['uno_youth'] );

/**
 * Values for the widgets
 */
$widgets = [
  [
    'color' => 'success',
    'icon'  => 'icon-briefcase',
    'label' => 'Uno Trabaho',
    'count' => $uno_trabaho->found_posts,
    'link'  => 'trabaho',
  ],
  [
    'color' => 'info',
    'icon'  => 'icon-graduation',
    'label' => 'Uno Iskolar',
    'count' => $uno_iskolar->found_posts,
    'link'  => 'iskolar',
  ],
  [
    'color' => 'primary',
    'icon'  => 'icon-badge',
    'label' => 'Uno Ayuda',
    'count' => $uno_ayuda->found_posts,
    'link'  => 'ayuda',
  ],
  [
    'color' => 'warning',
    'icon'  => 'icon-hourglass',
    'label' => 'Uno Legal',
    'count' => $uno_legal->found_posts,
    'link'  => 'legal',
  ],
  [
    'color' => 'danger',
    'icon'  => 'icon-heart',
    'label' => 'Uno Health',
    'count' => $uno_health->found_posts,
    'link'  => 'health',
  ],
  [
    'color' => 'success',
    'icon'  => 'icon-direction',
    'label' => 'Uno Youth',
    'count' => $uno_youth->found_posts,
    'link'  => 'youth',
  ]
];

/**
 * Reset post data
 */
wp_reset_postdata();

/**
 * Minify and output html
 */
uno_output_renderer( ['page' => 'uno_dashboard_page'] );
function uno_dashboard_page() {
  global $widgets; 
  ?>
  <?php uno_get_header(); ?>
    <div class="row">
      <?php uno_card_widget_template( $widgets ); ?>
    </div>
  <?php uno_get_footer(); ?>
  <?php
}
