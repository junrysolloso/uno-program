<?php defined( 'ABSPATH' ) or exit();

/**
 * Other finance fields
 */
$fields = [
  'other_finance_source' => [
    [
      'label' => 'Are you enjoying other sources of education/finance assistance?',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'other_source_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'id'    => uno_input_id( 'other_source_type' ),
      'name'  => uno_input_name(),
      'label' => 'Sector',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Sector'
      ]
    ],
    [
      'id'    => uno_input_id( 'other_source_agency' ),
      'name'  => uno_input_name(),
      'label' => 'Grantee Institution / Agency',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Grantee Institution / Agency'
      ]
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
