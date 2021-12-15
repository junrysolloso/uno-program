<?php defined( 'ABSPATH' ) or exit();

/**
 * Global Id
 */
global $uno_global_id;

/**
 * Global input prefix
 */
global $uno_global_input_prefix;

/**
 * Educational attainment fields
 */
function uno_educational_attainment( $school = '', $from = '', $to = '', $degree = '' ) {
  $fields = [
    'educational_attainment' => [
      [
        'id'    => uno_input_id( 'educ_attainment_school' ),
        'name'  => uno_input_name( 'educ_attainment_school[]' ),
        'label' => 'Name of School',
        'type'  => 'text',
        'value' => $school,
        'class' => uno_input_class( 'text' ) .' repeater_field',
        'meta'  => [
          'placeholder' => 'School Name'
        ]
      ],
      [
        'id'    => uno_input_id( 'educ_attainment_from' ),
        'name'  => uno_input_name( 'educ_attainment_from[]' ),
        'label' => 'From Year',
        'type'  => 'text',
        'value' => $from,
        'class' => uno_input_class( 'text' ) .' repeater_field',
        'meta'  => [
          'placeholder' => 'From'
        ]
      ],
      [
        'id'    => uno_input_id( 'educ_attainment_to' ),
        'name'  => uno_input_name( 'educ_attainment_to[]' ),
        'label' => 'To Year',
        'type'  => 'text',
        'value' => $to,
        'class' => uno_input_class( 'text' ) .' repeater_field',
        'meta'  => [
          'placeholder' => 'To'
        ]
      ],
      [
        'id'    => uno_input_id( 'educ_attainment_degree' ),
        'name'  => uno_input_name( 'educ_attainment_degree[]' ),
        'label' => 'Degree or Diploma',
        'type'  => 'text',
        'value' => $degree,
        'class' => uno_input_class( 'text' ) .' repeater_field',
        'meta'  => [
          'placeholder' => 'Degree / Diploma'
        ]
      ],
    ]
  ];

  return $fields;
}

/**
 * Filter for adding button
 */
add_filter( 'uno_table_header_right', function() { return '<a href="#" class="ml-4" id="add_button_school"><i class="icon-plus"></i> Add</a>'; } );

if ( $uno_global_id ) {

  $schools = uno_input_value( $uno_global_input_prefix .'_educ_attainment_school' );
  $froms   = uno_input_value( $uno_global_input_prefix .'_educ_attainment_from' );
  $tos     = uno_input_value( $uno_global_input_prefix .'_educ_attainment_to' );
  $degrees = uno_input_value( $uno_global_input_prefix .'_educ_attainment_degree' );

  if ( is_array( $schools ) ) {
    $len = count( $schools );

    for ( $i = 0; $i < $len; $i++ ) { 
    
      // Filter for remove button
      if (  $len > 1 && $i > 0 ) {
        add_filter( 'uno_table_header_right', function() { return '<a href="#" class="ml-4 text-danger remove_table_fields_edit"><i class="icon-close"></i> Delete</a>'; } );
      }
  
      $fields = uno_educational_attainment( $schools[$i], $froms[$i], $tos[$i], $degrees[$i] );
      uno_field_template( $fields );
    }
  }
} else {
  uno_field_template( uno_educational_attainment() );
}

add_filter( 'uno_table_header_right', '__return_false' );
