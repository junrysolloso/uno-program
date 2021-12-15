<?php defined( 'ABSPATH' ) or exit();

/**
 * Table prefix
 */
global $uno_global_table_prefix;

/**
 * Status fields
 */
$fields  = [
  $uno_global_table_prefix . 'gender_information' => [
    [
      'label' => 'Male',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'gender_male' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ],
    [
      'label' => 'Female',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'gender_female' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ]    
  ],
  $uno_global_table_prefix . 'status_information' => [
    [
      'label' => 'Single',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'status_single' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ],
    [
      'label' => 'Married',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'status_married' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ],
    [
      'label' => 'Widowed',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'status_wedowed' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ],
    [
      'label' => 'Anulled',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'status_anulled' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ],
    [
      'label' => 'Separated',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'status_separated' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ]
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
