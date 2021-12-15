<?php defined( 'ABSPATH' ) or exit();

/**
 * Global id
 */
global $uno_global_id;

/**
 * Global input prefix
 */
global $uno_global_input_prefix;

/**
 * Household members fields
 */
function uno_household_members( $name = '', $date = '', $relation = '' ) {
  $fields = [
    'household_members' => [
      [
        'id'    => uno_input_id( 'member_name' ),
        'name'  => uno_input_name( 'member_name[]' ),
        'label' => 'Full Name',
        'type'  => 'text',
        'value' => $name,
        'class' => uno_input_class( 'text' ) . ' repeater_field',
        'meta'  => [
          'placeholder' => 'Full Name'
        ]
      ],
      [
        'id'    => uno_input_id( 'member_date_of_birth' ),
        'name'  => uno_input_name( 'member_date_of_birth[]' ),
        'label' => 'Date of Birth',
        'type'  => 'date',
        'value' => $date,
        'class' => uno_input_class( 'date' ) . ' repeater_field',
      ],
      [
        'id'    => uno_input_id( 'member_relationship' ),
        'name'  => uno_input_name( 'member_relationship[]' ),
        'label' => 'Relationship',
        'type'  => 'text',
        'value' => $relation,
        'class' => uno_input_class( 'text' ) . ' repeater_field',
        'meta'  => [
          'placeholder' => 'Relationship'
        ]
      ]
    ]
  ];

  return $fields;
}

/**
 * Filter for adding button
 */
add_filter( 'uno_table_header_right', function() { return '<a href="#" class="ml-4" id="add_button_member"><i class="icon-plus"></i> Add</a>'; } );

if ( $uno_global_id ) {

  $names     = uno_input_value( $uno_global_input_prefix .'_member_name' );
  $dates     = uno_input_value( $uno_global_input_prefix .'_member_date_of_birth' );
  $relations = uno_input_value( $uno_global_input_prefix .'_member_relationship' );

  if ( is_array( $names ) ) {
    $len = count( $names );

    for ( $i = 0; $i < $len; $i++ ) { 
      
      // Filter for remove button
      if (  $len > 1 && $i > 0 ) {
        add_filter( 'uno_table_header_right', function() { return '<a href="#" class="ml-4 text-danger remove_table_fields_edit"><i class="icon-close"></i> Delete</a>'; } );
      }
  
      $fields = uno_household_members( $names[$i], $dates[$i], $relations[$i] );
      uno_field_template( $fields );
    }
  }
} else {
  uno_field_template( uno_household_members() );
}

add_filter( 'uno_table_header_right', '__return_false' );
