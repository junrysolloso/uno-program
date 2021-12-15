<?php defined( 'ABSPATH' ) or exit();

/**
 * Global Id
 */
global $uno_global_id;

/**
 * Uno Id fields
 */
$fields  = [
  'uno_id' => [
    [
      'label'   => 'Existing Uno ID',
      'type'    => 'checkbox',
      'class'   => uno_input_class( 'bool' ),
      'options' => [
        [ 
          'id'    => uno_input_id( 'id_option' ),
          'name'  => uno_input_name(),
          'value' => 0,
        ]
      ],
    ],
    [ 
      'id'    => uno_input_id( 'id_new' ),
      'name'  => uno_input_name(),
      'label' => 'Uno ID',
      'type'  => 'text',
      'value' => '',
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'required' => 'true',
        'disabled' => 'true'
      ]
    ],
    [
      'id'    => uno_input_id( 'id_old' ),
      'name'  => uno_input_name(),
      'label' => 'Uno Existing ID',
      'type'  => 'text',
      'value' => '',
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'required'    => 'true',
        'placeholder' => 'Uno Existing ID'
      ]
    ],
  ]
];

/**
 * If this is edit page get the id
 */
if ( $uno_global_id ) {
  unset( $fields['uno_id'][0] );

  $fields['uno_id'][1]['meta']['disabled'] = 'true';
  $fields['uno_id'][1]['value'] = uno_input_value( 'uno_beneficiary_id_new' );
}

/**
 * Show fields
 */
uno_field_template( $fields );
