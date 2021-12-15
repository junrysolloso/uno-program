<?php defined( 'ABSPATH' ) or exit();

/**
 * Assistance fields
 */
$fields  = [
  'medical_assistance_information' => [
    [
      'label' => 'Medical Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'medical_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'medical_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'medical_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'medical_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'medical_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'food_assistance_information' => [
    [
      'label' => 'Food Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'food_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'food_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'food_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'food_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'food_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'transportation_assistance_information' => [
    [
      'label' => 'Transportation Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'transportation_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'transportation_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'transportation_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'transportation_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'transportation_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'burial_assistance_information' => [
    [
      'label' => 'Burial Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'burial_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'burial_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'burial_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'burial_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'burial_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'educational_assistance_information' => [
    [
      'label' => 'Educational Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'educational_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'educational_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'educational_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'educational_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'educational_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'cash_assistance_information' => [
    [
      'label' => 'Cash Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'cash_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'cash_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'cash_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'cash_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'cash_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'legal_assistance_information' => [
    [
      'label' => 'Legal Assistance',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'legal_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'legal_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'legal_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'legal_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'legal_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
  'non_food_assistance_information' => [
    [
      'label' => 'Non-food Items',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'non_food_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
    ], 
    [
      'id'    => uno_input_id( 'non_food_purpose' ),
      'name'  => uno_input_name(),
      'label' => 'Purpose',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purpose',
      ]
    ],
    [
      'id'    => uno_input_id( 'non_food_amount' ),
      'name'  => uno_input_name(),
      'label' => 'Amount of Assistance',
      'type'  => 'number',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Amount of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'non_food_mode' ),
      'name'  => uno_input_name(),
      'label' => 'Mode of Assistance',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Mode of Assistance',
      ]
    ],
    [
      'id'    => uno_input_id( 'non_food_fund_source' ),
      'name'  => uno_input_name(),
      'label' => 'Source of Fund',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Source of Fund',
      ]
    ],
  ],
];

/**
 * Show fields
 */
uno_field_template( $fields );
