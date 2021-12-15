<?php defined( 'ABSPATH' ) or exit();

/**
 * Retrieve global data
 */
global $uno_global_data;

/**
 * Document details
 */
$uno_global_data['guardian'] = [
  [
    'label' => 'Guardian Type',
    'value' => [
      'mother'   => uno_get_the_meta( 'uno_beneficiary_guardian_mother' ),
      'father'   => uno_get_the_meta( 'uno_beneficiary_guardian_father' ),
      'guardian' => uno_get_the_meta( 'uno_beneficiary_guardian_legal' )
    ]
  ],
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_name' )
  ],
  [
    'label' => 'Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_address' )
  ],
  [
    'label' => 'Phone Number',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_phone' )
  ],
  [
    'label' => 'Occupation',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_occupation' )
  ],
  [
    'label' => 'Name of Employer',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_employer' )
  ],
  [
    'label' => 'Highest Educational Attainment',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_education' )
  ],
  [
    'label' => 'Total Tax Income',
    'value' => uno_get_the_meta( 'uno_beneficiary_guardian_tax_income' )
  ],
];

/**
 * Family Background
 */

$uno_global_data['family_background'] = [
  [
    'label' => 'Number of siblings in the family 18 years old and below',
    'value' => uno_get_the_meta( 'uno_beneficiary_family_siblings' )
  ],
  [
    'label' => 'Is your family a beneficiary of the DSWD\'s pantawid Pamilyang Pilipino Program (4Ps)?',
    'value' => uno_view_bool( 'uno_beneficiary_family_4ps_beneficiary' )
  ],
];


/**
 * School last attended
 */
$uno_global_data['school_last_attended'] = [
  [
    'label' => 'Name of School',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_last_attended_name' )
  ],
  [
    'label' => 'School Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_last_attended_address' )
  ],
  [
    'label' => 'Sector',
    'value' => [
      'private' => uno_get_the_meta( 'uno_beneficiary_ched_last_attended_sector_private' ),
      'public'  => uno_get_the_meta( 'uno_beneficiary_ched_last_attended_sector_public' )
    ]
  ],
  [
    'label' => 'Type of Disability',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_last_attended_disability' )
  ],
  [
    'label' => 'IP Affiliation',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_last_attended_affiliation' )
  ],
];

/**
 * School Intended to enroll
 */
$uno_global_data['school_intended_to_enroll'] = [
  [
    'label' => 'Name of School',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_to_enroll_name' )
  ],
  [
    'label' => 'School Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_to_enroll_address' )
  ],
  [
    'label' => 'Sector',
    'value' => [
      'private' => uno_get_the_meta( 'uno_beneficiary_ched_to_enroll_sector_private' ),
      'public'  => uno_get_the_meta( 'uno_beneficiary_ched_to_enroll_sector_public' )
    ]
  ],
  [
    'label' => 'Degree / Program',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_to_enroll_degree' )
  ]
];

/**
 * Other Finances
 */

$uno_global_data['other_finance_source'] = [
  [
    'label' => 'Are you enjoying other sources of education/finance assistance?',
    'value' => uno_view_bool( 'uno_beneficiary_ched_other_source_option' )
  ],
  [
    'label' => 'Type',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_other_source_type' )
  ],
  [
    'label' => 'Grantee Institution / Agency',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_other_source_agency' )
  ]
];

/**
 * Interviewed by
 */
$uno_global_data['interviewed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_interviewed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_interviewed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_interviewed_by_date' ),
  ]
];

/**
 * Validated by
 */
$uno_global_data['validated_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_validated_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_validated_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_validated_by_date' ),
  ]
];

/**
 * Confirm by
 */
$uno_global_data['confirmed_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_confirmed_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_confirmed_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_confirmed_by_date' ),
  ]
];

/**
 * Approved by
 */
$uno_global_data['approved_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_approved_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_approved_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_approved_by_date' ),
  ]
];

/**
 * Noted by
 */
$uno_global_data['noted_by'] = [
  [
    'label' => 'Name',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_noted_by_name' ),
  ],
  [
    'label' => 'Position',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_noted_by_position' ),
  ],
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_noted_by_date' ),
  ]
];

/**
 * Date processed
 */
$uno_global_data['date_proccessed'] = [
  [
    'label' => 'Date',
    'value' => uno_get_the_meta( 'uno_beneficiary_ched_date_process' ),
  ]
];
