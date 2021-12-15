<?php defined( 'ABSPATH' ) or exit();

/**
 * Custom post type
 */
add_action( 'init', 'uno_register_post_type', 5 );
function uno_register_post_type() {
  register_post_type(
    'uno_beneficiaries',
    array(
      'labels' => array(
        'name'               => __( 'Uno Beneficiaries' ),
        'all_items'          => __( 'All Beneficiaries' ),
        'singular_name'      => __( 'Beneficiary' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Beneficiary' ),
        'edit_item'          => __( 'Edit Beneficiary' ),
        'new_item'           => __( 'New Beneficiary' ),
        'view_item'          => __( 'View Beneficiary' ),
        'search_items'       => __( 'Search Beneficiaries' ),
        'not_found'          => __( 'No Beneficiaries Found' ),
        'not_found_in_trash' => __( 'No Beneficiaries found in Trash' ),
      ),
      'public'               => false,
      'publicly_queryable'   => false, 
      'hierarchical'         => false,
      'show_ui'              => true,
      'show_in_menu'         => true,
      'show_in_admin_bar'    => false,
      'capability_type'      => 'post',
      'has_archive'          => false,
      'delete_with_user'     => false,
      'show_in_rest'         => false,
      'exclude_from_search'  => true,
      'supports'             => array(),
      'rewrite'              => array( 'slug' => 'uno_beneficiaries', 'with_front'=> false ),
      'query_var'            => false,
      'menu_icon'            => 'dashicons-image-filter',
      'menu_position'        => 2
    )
  );
}

/**
 * Create user roles
 */
add_action( 'init', 'uno_add_roles' );
function uno_add_roles() {
  $caps = [
    'delete_posts'         => true,
    'edit_posts'           => true,
    'publish_posts'        => true,
    'read'                 => true,
  ];

  $roles = [
    [
      'name'    => 'encoder',
      'display' => 'Encoder',
      'cap'     => $caps
    ]
  ];

  foreach ( $roles as $key ) {
    add_role( $key['name'], $key['display'], $key['cap'] );
  }
}
