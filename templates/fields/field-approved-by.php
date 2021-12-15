<?php defined( 'ABSPATH' ) or exit();

/**
 * Approved by fields
 */
$fields = [
  'approved_by' => [
    [
      'id'    => uno_input_id( 'approved_by_name' ),
      'name'  => uno_input_name(),
      'label' => 'Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
    ],
    [
      'id'    => uno_input_id( 'approved_by_position' ),
      'name'  => uno_input_name(),
      'label' => 'Position',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
    ],
    [
      'id'    => uno_input_id( 'approved_by_date' ),
      'name'  => uno_input_name(),
      'label' => 'Date',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
