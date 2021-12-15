<?php defined( 'ABSPATH' ) or exit();

/**
 * Date fields
 */
$fields = [
  'date_information' => [
    [
      'id'    => uno_input_id( 'date_accomplished' ),
      'name'  => uno_input_name(),
      'label' => 'Date Accomplished',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
