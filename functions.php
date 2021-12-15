<?php defined( 'ABSPATH' ) or exit();

/**
 * Uno constants
 */
define( 'UNO_VERSION', '1.2.92' );
define( 'UNO_URI', get_stylesheet_directory_uri() );
define( 'UNO_DIR', __DIR__ );

/**
 * Global variable use anywhere
 */
$uno_global_table_prefix    = '';
$uno_global_input_prefix    = '';
$uno_global_walker_variable = '';
$uno_global_queries         = [];

/**
 * Get global data from query string
 */
isset( $_GET['uno_id'] )    ? $uno_global_id    = sanitize_text_field( $_GET['uno_id'] )    : $uno_global_id = 0;
isset( $_GET['uno_cat'] )   ? $uno_global_cat   = sanitize_text_field( $_GET['uno_cat'] )   : $uno_global_cat = '';
isset( $_GET['uno_check'] ) ? $uno_global_check = sanitize_text_field( $_GET['uno_check'] ) : $uno_global_check = '';

/**
 * Add core functions
 */
require_once UNO_DIR . '/includes/functions-post-type.php';
require_once UNO_DIR . '/includes/functions-utility.php';
require_once UNO_DIR . '/includes/functions-hook.php';
require_once UNO_DIR . '/includes/functions-global-vars.php';
require_once UNO_DIR . '/includes/functions-templates.php';
