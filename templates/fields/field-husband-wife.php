<?php defined( 'ABSPATH' ) or exit();

/**
 * Husband or wife fields
 */
$fields = [
  'husband_or_wife_information' => [
    [
      'id'    => uno_input_id( 'spouse_first' ),
      'name'  => uno_input_name(),
      'label' => 'First Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'First Name'
      ]
    ],
    [
      'id'    => uno_input_id( 'spouse_last' ),
      'name'  => uno_input_name(),
      'label' => 'Last Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Last Name'
      ]
    ],
    [
      'id'    => uno_input_id( 'spouse_middle' ),
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
      'id'    => uno_input_id( 'spouse_phone' ),
      'name'  => uno_input_name(),
      'label' => 'Phone Number',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Phone Number'
      ]
    ], 
    [
      'id'    => uno_input_id( 'spouse_email' ),
      'name'  => uno_input_name(),
      'label' => 'Email Address',
      'type'  => 'email',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Email Address'
      ]
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
