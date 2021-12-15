<?php defined( 'ABSPATH' ) or exit();

/**
 * Table prefix
 */
global $uno_global_table_prefix;

/**
 * Name fields
 */
$fields  = [
  $uno_global_table_prefix . 'name' => [
    [
      'id'    => uno_input_id( 'name_first' ),
      'name'  => uno_input_name(),
      'label' => 'First Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'required'    => 'true',
        'placeholder' => 'First Name'
      ]
    ],
    [
      'id'    => uno_input_id( 'name_last' ),
      'name'  => uno_input_name(),
      'label' => 'Last Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'required'    => 'true',
        'placeholder' => 'Last Name'
      ]
    ],
    [
      'id'    => uno_input_id( 'name_middle' ),
      'name'  => uno_input_name(),
      'label' => 'Middle Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Middle Name'
      ]
    ], 
    [
      'id'    => uno_input_id( 'name_suffix' ),
      'name'  => uno_input_name(),
      'label' => 'Name Suffix',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name Suffix'
      ]
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
