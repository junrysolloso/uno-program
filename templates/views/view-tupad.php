<?php defined( 'ABSPATH' ) or exit();

/**
 * Retrieve global data
 */
global $uno_global_data;

/**
 * Interviewed by
 */
$uno_global_data['interviewed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_interviewed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_interviewed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_interviewed_by_date' ),
  ]
];

/**
 * Validated by
 */
$uno_global_data['validated_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_validated_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_validated_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_validated_by_date' ),
  ]
];

/**
 * Confirm by
 */
$uno_global_data['confirmed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_confirmed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_confirmed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_confirmed_by_date' ),
  ]
];

/**
 * Approved by
 */
$uno_global_data['approved_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_approved_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_approved_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_approved_by_date' ),
  ]
];

/**
 * Noted by
 */
$uno_global_data['noted_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_noted_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_noted_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_noted_by_date' ),
  ]
];

/**
 * Date processed
 */
$uno_global_data['date_proccessed'] = [
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_tupad_date_process' ),
  ]
];
