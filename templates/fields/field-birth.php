<?php defined( 'ABSPATH' ) or exit();

/**
 * Input prefix
 */
global $uno_global_table_prefix;

/**
 * Birth fields
 */
$fields  = [
  $uno_global_table_prefix . 'birth_information' => [
    [ 
      'id'    => uno_input_id( 'status_age' ),
      'name'  => uno_input_name(),
      'label' => 'Age',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Age'
      ]
    ],
    [
      'id'    => uno_input_id( 'birth_info_date' ),
      'name'  => uno_input_name(),
      'label' => 'Date of Birth',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' )
    ],
    [
      'id'    => uno_input_id( 'birth_info_place' ),
      'name'  => uno_input_name(),
      'label' => 'Place of Birth',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Place of Birth'
      ]
    ],
    [
      'id'    => uno_input_id( 'status_nationality' ),
      'name'  => uno_input_name(),
      'label' => 'Nationality',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Nationality'
      ]
    ],
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
