<?php defined( 'ABSPATH' ) or exit();

/**
 * Set input prefix
 */
global $uno_global_input_prefix;
$uno_global_input_prefix = 'uno';

/**
 * Trabaho form choices fields
 */
$fields = [
  'uno_trabaho_form' => [
    [
      'label'   => 'General',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'trabaho_form_general' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ],
    [
      'label'   => 'GIP',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'trabaho_form_gip' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ],
    [
      'label'   => 'TUPAD',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'trabaho_form_tupad' ),
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
