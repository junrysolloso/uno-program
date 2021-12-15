<?php defined( 'ABSPATH' ) or exit();

/**
 * Set input prefix
 */
global $uno_global_input_prefix;
$uno_global_input_prefix = 'uno';

/**
 * Iskolar form choices fields
 */
$fields = [
  'uno_iskolar_form' => [
    [
      'label'   => 'DepEd',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'iskolar_form_deped' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ],
    [
      'label'   => 'CHED',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'iskolar_form_ched' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ],
    [
      'label'   => 'TESDA',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'iskolar_form_tesda' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
