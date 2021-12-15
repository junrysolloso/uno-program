<?php defined( 'ABSPATH' ) or exit();

/**
 * Guardian fields
 */
$fields = [
  'parent_or_guardian_information' => [
    [
      'label' => 'Father',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'guardian_father' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Mother',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'guardian_mother' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
    [
      'label' => 'Legal Guardian',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'guardian_legal' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ],
  ],
  'guardian_personal_information' => [
    [
      'id'    => uno_input_id( 'guardian_name' ),
      'name'  => uno_input_name(),
      'label' => 'Full Name',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Full Name'
      ]
    ],
    [
      'id'    => uno_input_id( 'guardian_address' ),
      'name'  => uno_input_name(),
      'label' => 'Address',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Address'
      ]
    ],
    [
      'id'    => uno_input_id( 'guardian_phone' ),
      'name'  => uno_input_name(),
      'label' => 'Phone Number',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Phone Number'
      ]
    ],
    [
      'id'    => uno_input_id( 'guardian_occupation' ),
      'name'  => uno_input_name(),
      'label' => 'Occupation',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Occupation'
      ]
    ],
    [
      'id'    => uno_input_id( 'guardian_employer' ),
      'name'  => uno_input_name(),
      'label' => 'Name of Employer',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name of Employer'
      ]
    ],
    [
      'id'    => uno_input_id( 'guardian_education' ),
      'name'  => uno_input_name(),
      'label' => 'Highest Educational Attainment',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Highest Educational Attainment'
      ]
    ],
    [
      'id'    => uno_input_id( 'guardian_tax_income' ),
      'name'  => uno_input_name(),
      'label' => 'Total Tax Income',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Total Tax Income'
      ]
    ],
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );
