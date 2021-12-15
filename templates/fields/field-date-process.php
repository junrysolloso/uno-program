<?php defined( 'ABSPATH' ) or exit();

/**
 * Date processed fields
 */
$fields = [
  'date_information' => [
    [
      'id'    => uno_input_id( 'date_process' ),
      'name'  => uno_input_name(),
      'label' => 'Date Process',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
