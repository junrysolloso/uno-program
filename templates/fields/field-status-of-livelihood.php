<?php defined( 'ABSPATH' ) or exit();

/**
 * Status of livelihood fields
 */
$fields = [
  'status_of_livelihood' => [
    [
      'label' => 'Crop Growing',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_crop_growing' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Fishing',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_fishing' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Home Based Work',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_home_based' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Livestock / Poultries Raising',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_livestock' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Servicing',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_servicing' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Alternative Trasporting',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_transporting' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'label' => 'Vending',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'livelihood_vending' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ]
    ],
    [
      'id'    => uno_input_id( 'livelihood_other' ),
      'name'  => uno_input_name(),
      'label' => 'Other',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Other'
      ]
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
