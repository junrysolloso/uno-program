<?php defined( 'ABSPATH' ) or exit();

/**
 * Document received fields
 */
$fields = [
  'documents_received' => [
    [
      'label' => 'Cedula',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'documents_received_cedula' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Transcript of Records',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'documents_received_transcript' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Form 137 / 138',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'documents_received_form_137' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Certification From School or Any Documents Equivalent',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'documents_received_certification' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Barangay Certification of Indigency',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'documents_received_indigency' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Diploma',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'documents_received_diploma' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
