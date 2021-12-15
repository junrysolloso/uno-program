<?php defined( 'ABSPATH' ) or exit();

/**
 * Lawyer fields
 */
$fields  = [
  'lawyer_information' => [
    [
      'id'    => uno_input_id( 'lawyer_name' ),
      'name'  => uno_input_name(),
      'label' => 'Lawyer Assigned',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Lawyer Assigned'
      ]
    ],
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
