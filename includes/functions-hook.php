<?php defined( 'ABSPATH' ) or exit();

/**
 * Enqueue theme style
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );
function theme_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [] );
}

/**
 * Languages
 */
add_action( 'after_setup_theme', 'avada_lang_setup' );
function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}

/**
 * Admin scripts
 */
add_action( 'admin_enqueue_scripts', 'uno_admin_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'uno_admin_enqueue_scripts' );
function uno_admin_enqueue_scripts() {
  wp_enqueue_style( 'admin-style', uno_get_uri() . '/assets/css/admin.css', array(), uno_get_version(), 'all' );
}

/**
 * Remove WordPress default links
 */
add_action( 'wp_before_admin_bar_render', 'uno_remove_default_wp_links' );
function uno_remove_default_wp_links() {
	global $wp_admin_bar;

  $nodes = ['wp-logo', 'about', 'wporg', 'documentation', 'support-forums', 'feedback'];
  foreach ( $nodes as $node ) {
    $wp_admin_bar->remove_node( $node );
  }
}

/**
 * Add menu on admin bar
 */
add_action( 'admin_bar_menu', 'uno_add_admin_bar_item', 1000, 1 );
function uno_add_admin_bar_item( $admin_bar ) {
  $args = array (
    'id'    => 'user-dashboard',
    'title' => '<span class="ab-icon"></span> User Dashboard',
    'href'  => uno_user_dashboard_url(),
    'meta'  => false
  );

  $admin_bar->add_node( $args );
}

/**
 * Remove admin bar for none admin users
 */
add_action( 'after_setup_theme', 'uno_remove_admin_bar' );
function uno_remove_admin_bar() {
  if ( ! current_user_can( 'administrator' ) && ! is_admin() ) {
    show_admin_bar( false );
  }
}

/**
 * Login url
 */
add_filter( 'login_url', 'uno_login_page' );
function uno_login_page() {
  return uno_login_url();
}

/**
 * Redirect to user dashboard
 */
add_action( 'init', 'uno_redirect_to_dashboard' );
function uno_redirect_to_dashboard() {
  if ( is_admin() ) {
    if ( is_user_logged_in() ) {
      if ( current_user_can( 'uno_trabaho' )
      || current_user_can( 'uno_iskolar' )
      || current_user_can( 'uno_ayuda' )
      || current_user_can( 'uno_legal' )
      || current_user_can( 'uno_health' )
      || current_user_can( 'uno_youth' ) ) {
        uno_redirect( uno_user_dashboard_url() );
      }
    }
  }
}

/**
 * Remove disallowed user roles
 */
add_filter( 'editable_roles', 'uno_remove_user_roles' );
function uno_remove_user_roles( $user_roles ) {
	$disallowed_roles = ['subscriber', 'editor', 'author', 'contributor'];

	foreach ( $disallowed_roles as $disallowed_role ) {
		unset( $user_roles[ $disallowed_role ] );
	}
  return $user_roles;
}
