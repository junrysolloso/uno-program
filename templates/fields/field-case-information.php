<?php defined( 'ABSPATH' ) or exit();

/**
 * Case status fields
 */
$fields  = [
  'case_information' => [
    [
      'id'    => uno_input_id( 'docket_number' ),
      'name'  => uno_input_name(),
      'label' => 'Docket Number',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Docket Number'
      ]
    ],
    [
      'id'    => uno_input_id( 'complainant' ),
      'name'  => uno_input_name(),
      'label' => 'Complainant',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Complainant'
      ]
    ],
    [
      'id'    => uno_input_id( 'respondent' ),
      'name'  => uno_input_name(),
      'label' => 'Respondent',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Respondent'
      ]
    ],
    [
      'id'    => uno_input_id( 'status' ),
      'name'  => uno_input_name(),
      'label' => 'Case Status',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Case Satus'
      ]
    ],
    [
      'label' => 'Conciliation and Mediation',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'conciliation_and_mediation' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'id'    => uno_input_id( 'bail' ),
      'name'  => uno_input_name(),
      'label' => 'Bail Recommended',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Bail Recommended'
      ]
    ],
    [
      'id'    => uno_input_id( 'other_fees' ),
      'name'  => uno_input_name(),
      'label' => 'Other Fees',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Other Fees'
      ]
    ],
    [
      'id'    => uno_input_id( 'date_received' ),
      'name'  => uno_input_name(),
      'label' => 'Date Received the Pleading',
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
