<?php defined( 'ABSPATH' ) or exit();

/**
 * Table prefix
 */
global $uno_global_table_prefix;

/**
 * Contact fields
 */
$fields  = [
  $uno_global_table_prefix . 'contact_details' => [
    [
      'id'    => uno_input_id( 'contact_phone_number' ),
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
      'id'    => uno_input_id( 'contact_email_address' ),
      'name'  => uno_input_name(),
      'label' => 'Email Address',
      'type'  => 'email',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Email Address'
      ]
    ]
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
