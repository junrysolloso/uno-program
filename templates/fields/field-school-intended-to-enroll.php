<?php defined( 'ABSPATH' ) or exit();

/**
 * School inteded to enroll fields
 */
$fields = [
  'school_intended_to_enroll' => [
    [
      'id'    => uno_input_id( 'to_enroll_name' ),
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
      'id'    => uno_input_id( 'to_enroll_address' ),
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
          'id'    => uno_input_id( 'to_enroll_sector_private' ),
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
          'id'    => uno_input_id( 'to_enroll_sector_public' ),
          'name'  => uno_input_name(),
          'label' => 'Public',
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'id'    => uno_input_id( 'to_enroll_degree' ),
      'name'  => uno_input_name(),
      'label' => 'Degree / Program',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta' => [
        'placeholder' => 'Degree / Program'
      ]
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
