<?php defined( 'ABSPATH' ) or exit();

/**
 * Retrieve global data
 */
global $uno_global_data;

/**
 * School details
 */
$data = [
  'table' => 'educational_attainment',
  'key'   => [
    'uno_beneficiary_educ_attainment_school' => 'Name of School',
    'uno_beneficiary_educ_attainment_from'   => 'From Year',
    'uno_beneficiary_educ_attainment_to'     => 'To Year',
    'uno_beneficiary_educ_attainment_degree' => 'Degree or Diploma'
  ]
];

uno_view_array( $data );

/**
 * Document details
 */
$uno_global_data['documents_received'] = [
  [
    'label' => 'Cedula',
    'value' => uno_view_bool( 'uno_beneficiary_gip_documents_received_cedula' ),
  ],
  [
    'label' => 'Transcript of Records',
    'value' => uno_view_bool( 'uno_beneficiary_gip_documents_received_transcript' ),
  ],
  [
    'label' => 'Form 137 / 138',
    'value' => uno_view_bool( 'uno_beneficiary_gip_documents_received_form_137' ),
  ],
  [
    'label' => 'Certification From School or Any Documents Equivalent',
    'value' => uno_view_bool( 'uno_beneficiary_gip_documents_received_certification' ),
  ],
  [
    'label' => 'Barangay Certification of Indigency',
    'value' => uno_view_bool( 'uno_beneficiary_gip_documents_received_indigency' ),
  ],
  [
    'label' => 'Diploma',
    'value' => uno_view_bool( 'uno_beneficiary_gip_documents_received_diploma' ),
  ]
];

/**
 * Interviewed by
 */
$uno_global_data['interviewed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_interviewed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_interviewed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_interviewed_by_date' ),
  ]
];

/**
 * Validated by
 */
$uno_global_data['validated_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_validated_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_validated_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_validated_by_date' ),
  ]
];

/**
 * Confirm by
 */
$uno_global_data['confirmed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_confirmed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_confirmed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_confirmed_by_date' ),
  ]
];

/**
 * Approved by
 */
$uno_global_data['approved_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_approved_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_approved_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_approved_by_date' ),
  ]
];

/**
 * Noted by
 */
$uno_global_data['noted_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_noted_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_noted_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_noted_by_date' ),
  ]
];

/**
 * Date processed
 */
$uno_global_data['date_proccessed'] = [
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_gip_date_process' ),
  ]
];
