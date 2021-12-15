<?php defined( 'ABSPATH' ) or exit();

/**
 * Case date fields
 */
$fields  = [
  'date_information' => [
    [
      'id'    => uno_input_id( 'endorsed_to_pao' ),
      'name'  => uno_input_name(),
      'label' => 'Date Endorsed to PAO',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
    [
      'id'    => uno_input_id( 'emailed_to_pao' ),
      'name'  => uno_input_name(),
      'label' => 'Date Emailed to PAO',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
