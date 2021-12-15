<?php defined( 'ABSPATH' ) or exit();

/**
 * Retrieve global data
 */
global $uno_global_data, $uno_global_id;

/**
 * Case
 */
$uno_global_data['case_filed'] = [
  [
    'label' => 'Criminal Case',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_case_criminal' ),
  ],
  [
    'label' => 'Civil Case',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_case_civil' ),
  ],
  [
    'label' => 'Administrative Case',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_case_administrative' ),
  ],
  [
    'label' => 'Labor Case',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_case_labor' ),
  ],
];

/**
 * Case Information
 */
$uno_global_data['case_information'] = [
  [
    'label' => 'Docket Number',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_docket_number' ),
  ],
  [
    'label' => 'Complainant',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_complainant' ),
  ],
  [
    'label' => 'Respondent',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_respondent' ),
  ],
  [
    'label' => 'Case Status',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_status' ),
  ],
  [
    'label' => 'Conciliation and Mediation',
    'value' => uno_view_bool( 'uno_beneficiary_legal_conciliation_and_mediation' ),
  ],
  [
    'label' => 'Bail Recommended',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_bail' ),
  ],
  [
    'label' => 'Other Fees',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_other_fees' ),
  ],
  [
    'label' => 'Date Received the Pleading',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_date_received' ),
  ],
];

/**
 * Document presented
 */
$data = [
  'table' => 'document_information',
  'key'   => [
    'uno_beneficiary_legal_document_presented' => 'Document Presented'
  ]
];

uno_view_array( $data );

/**
 * Date
 */
$uno_global_data['date'] = [
  [
    'label' => 'Date Endorsed to PAO',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_endorsed_to_pao' ),
  ],
  [
    'label' => 'Date Emailed to PAO',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_emailed_to_pao' ),
  ]
];

/**
 * Lawyer
 */
$uno_global_data['lawyer_assigned'] = [
  [
    'label' => 'Lawyer Assigned',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_lawyer_name' ),
  ]
];

/**
 * Interviewed by
 */
$uno_global_data['interviewed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_interviewed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_interviewed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_interviewed_by_date' ),
  ]
];

/**
 * Validated by
 */
$uno_global_data['validated_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_validated_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_validated_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_validated_by_date' ),
  ]
];

/**
 * Confirm by
 */
$uno_global_data['confirmed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_confirmed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_confirmed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_confirmed_by_date' ),
  ]
];

/**
 * Approved by
 */
$uno_global_data['approved_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_approved_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_approved_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_approved_by_date' ),
  ]
];

/**
 * Noted by
 */
$uno_global_data['noted_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_noted_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_noted_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_noted_by_date' ),
  ]
];

/**
 * Date processed
 */
$uno_global_data['date_proccessed'] = [
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_legal_date_process' ),
  ]
];
