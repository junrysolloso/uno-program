<?php defined( 'ABSPATH' ) or exit();

/**
 * Skills fields
 */
$fields = [
  'skills' => [
    [
      'label' => 'Construction / Carpentry',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_carpentry' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Farming',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_farming' ),
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
          'id'    => uno_input_id( 'skills_fishing' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Vulcanizing / Welding',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_welding' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Cosmetology',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_cosmetology' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Tailoring / Dressmaking',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_tailoring' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Computer',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_computer' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Performing Arts',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_arts' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Handicraft',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'skills_handicraft' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'id'    => uno_input_id( 'skills_other' ),
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
