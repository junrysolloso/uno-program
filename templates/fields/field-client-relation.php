<?php defined( 'ABSPATH' ) or exit();

/**
 * Table prefix
 */
global $uno_global_table_prefix;

/**
 * Client relation fields
 */
$fields = [
  $uno_global_table_prefix . 'other_information' => [
    [
      'id'    => uno_input_id( 'other_info_relation' ),
      'name'  => uno_input_name(),
      'label' => apply_filters( 'uno_label_other_info_relation', 'Relationship To Beneficiary' ),
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Relationship'
      ]
    ],
    [
      'label' => apply_filters( 'uno_label_other_info_option', 'Livelihood Member' ),
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'other_info_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'id'    => uno_input_id( 'other_info_group' ),
      'name'  => uno_input_name(),
      'label' => apply_filters( 'uno_label_other_info_group', 'Name of Association' ),
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
