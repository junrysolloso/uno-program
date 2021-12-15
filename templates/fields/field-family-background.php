<?php defined( 'ABSPATH' ) or exit();

/**
 * Family background fields
 */
$fields = [
  'family_background' => [
    [
      'id'    => uno_input_id( 'family_siblings' ),
      'name'  => uno_input_name(),
      'label' => 'Number of siblings in the family 18 years old and below',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Number of Siblings'
      ]
    ],
    [
      'label' => 'Is your family a beneficiary of the DSWD\'s pantawid Pamilyang Pilipino Program (4Ps)?',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'family_4ps_beneficiary' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
