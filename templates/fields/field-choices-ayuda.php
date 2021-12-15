<?php defined( 'ABSPATH' ) or exit();

/**
 * Set input prefix
 */
global $uno_global_input_prefix;
$uno_global_input_prefix = 'uno';

/**
 * Ayuda form choices fields
 */
$fields = [
  'uno_ayuda_form' => [
    [
      'label'   => 'AICS',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'ayuda_form_aics' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ],
    [
      'label'   => 'MAP',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'ayuda_form_map' ),
          'name'  => uno_input_name(),
          'value' => 0
        ]
      ],
      'meta' => [
        'data-nonce' => uno_get_nonce()
      ]
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
