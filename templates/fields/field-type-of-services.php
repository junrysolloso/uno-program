<?php defined( 'ABSPATH' ) or exit();

/**
 * Type of services fields
 */
$fields  = [
  'hypertension_information' => [
    [
      'label' => 'Hypertension',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'hypertension_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'hypertension_medicine' ),
      'name'  => uno_input_name(),
      'label' => 'Medicines',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Medicine',
        'Losartan (50 mg)',
        'Amlodipine (10 mg)',
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'hypertension_physician' ),
      'name'  => uno_input_name(),
      'label' => 'Name of Physician',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name of Physician'
      ]
    ],
    [
      'id'    => uno_input_id( 'hypertension_number_of_med' ),
      'name'  => uno_input_name(),
      'label' => 'Number of Medicines',
      'type'  => 'number',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Number of Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'hypertension_med_packaging' ),
      'name'  => uno_input_name(),
      'label' => 'Type of Packaging',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Packaging',
        'Tablet',
        'Bottle'
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'hypertension_date_released' ),
      'name'  => uno_input_name(),
      'label' => 'Date Released',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ],
  'diabetis_information' => [
    [
      'label' => 'Diabetis',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'diabetis_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'diabetis_medicine' ),
      'name'  => uno_input_name(),
      'label' => 'Medicines',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Medicine',
        'Metformin (500 mg)',
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'diabetis_physician' ),
      'name'  => uno_input_name(),
      'label' => 'Name of Physician',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name of Physician'
      ]
    ],
    [
      'id'    => uno_input_id( 'diabetis_number_of_med' ),
      'name'  => uno_input_name(),
      'label' => 'Number of Medicines',
      'type'  => 'number',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Number of Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'diabetis_med_packaging' ),
      'name'  => uno_input_name(),
      'label' => 'Type of Packaging',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Packaging',
        'Tablet',
        'Bottle'
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'diabetis_date_released' ),
      'name'  => uno_input_name(),
      'label' => 'Date Released',
      'type'  => 'date',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ],
  'mental_illness_information' => [
    [
      'label' => 'Mental Illness',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'mental_illness_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'mental_illness_medicine' ),
      'name'  => uno_input_name(),
      'label' => 'Medicines',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Medicine',
        'Beperidine (2 mg)',
        'Respiredone (2 mg)',
        'Flupinazine (25 mg)',
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'mental_illness_physician' ),
      'name'  => uno_input_name(),
      'label' => 'Name of Physician',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name of Physician'
      ]
    ],
    [
      'id'    => uno_input_id( 'mental_illness_number_of_med' ),
      'name'  => uno_input_name(),
      'label' => 'Number of Medicines',
      'type'  => 'number',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Number of Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'mental_illness_med_packaging' ),
      'name'  => uno_input_name(),
      'label' => 'Type of Packaging',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Packaging',
        'Tablet',
        'Bottle'
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'mental_illness_date_released' ),
      'name'  => uno_input_name(),
      'label' => 'Date Released',
      'type'  => 'date',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ],
  'vitamins_information' => [
    [
      'label' => 'Vitamins',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'vitamins_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'vitamins_medicine' ),
      'name'  => uno_input_name(),
      'label' => 'Medicines',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'vitamins_physician' ),
      'name'  => uno_input_name(),
      'label' => 'Name of Physician',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name of Physician'
      ]
    ],
    [
      'id'    => uno_input_id( 'vitamins_number_of_med' ),
      'name'  => uno_input_name(),
      'label' => 'Number of Medicines',
      'type'  => 'number',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Number of Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'vitamins_med_packaging' ),
      'name'  => uno_input_name(),
      'label' => 'Type of Packaging',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Packaging',
        'Tablet',
        'Bottle'
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'vitamins_date_released' ),
      'name'  => uno_input_name(),
      'label' => 'Date Released',
      'type'  => 'date',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ],
  'other_information' => [
    [
      'label' => 'Other Medicines',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'other_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value(),
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'other_medicine' ),
      'name'  => uno_input_name(),
      'label' => 'Medicines',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'other_physician' ),
      'name'  => uno_input_name(),
      'label' => 'Name of Physician',
      'type'  => 'text',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Name of Physician'
      ]
    ],
    [
      'id'    => uno_input_id( 'other_number_of_med' ),
      'name'  => uno_input_name(),
      'label' => 'Number of Medicines',
      'type'  => 'number',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Number of Medicines'
      ]
    ],
    [
      'id'    => uno_input_id( 'other_med_packaging' ),
      'name'  => uno_input_name(),
      'label' => 'Type of Packaging',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Packaging',
        'Tablet',
        'Bottle'
      ],
      'meta' => [
        'data-value' => uno_input_value()
      ]
    ],
    [
      'id'    => uno_input_id( 'other_date_released' ),
      'name'  => uno_input_name(),
      'label' => 'Date Released',
      'type'  => 'date',
      'value' =>  uno_input_value(),
      'class' => uno_input_class( 'date' ),
    ],
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
