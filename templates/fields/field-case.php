<?php defined( 'ABSPATH' ) or exit();

/**
 * Case fields
 */
$fields  = [
  'case_filed' => [
    [
      'id'    => uno_input_id( 'case_criminal' ),
      'name'  => uno_input_name(),
      'label' => 'Criminal Case',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Criminal Case'
      ]
    ],
    [
      'id'    => uno_input_id( 'case_civil' ),
      'name'  => uno_input_name(),
      'label' => 'Civil Case',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Civil Case'
      ]
    ],
    [
      'id'    => uno_input_id( 'case_administrative' ),
      'name'  => uno_input_name(),
      'label' => 'Administrative Case',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Administrative Case'
      ]
    ],
    [
      'id'    => uno_input_id( 'case_labor' ),
      'name'  => uno_input_name(),
      'label' => 'Labor Case',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Labor Case'
      ]
    ],
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
