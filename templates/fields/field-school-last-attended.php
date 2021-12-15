<?php defined( 'ABSPATH' ) or exit();

/**
 * Schoola last attended fields
 */
$fields = [
  'school_last_attended' => [
    [
      'id'    => uno_input_id( 'last_attended_name' ),
      'name'  => uno_input_name(),
      'label' => 'Name of School',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta' => [
        'placeholder' => 'Name of School'
      ]
    ],
    [
      'id'    => uno_input_id( 'last_attended_address' ),
      'name'  => uno_input_name(),
      'label' => 'School Address',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta' => [
        'placeholder' => 'School Address'
      ]
    ],
    [
      'label' => 'Private',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'last_attended_sector_private' ),
          'name'  => uno_input_name(),
          'label' => 'Private',
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Public',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'last_attended_sector_public' ),
          'name'  => uno_input_name(),
          'label' => 'Public',
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'id'    => uno_input_id( 'last_attended_disability' ),
      'name'  => uno_input_name(),
      'label' => 'Type of Disability',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta' => [
        'placeholder' => 'Type of Disability'
      ]
    ],
    [
      'id'    => uno_input_id( 'last_attended_affiliation' ),
      'name'  => uno_input_name(),
      'label' => 'IP Affiliation',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta' => [
        'placeholder' => 'IP Affiliation'
      ]
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
