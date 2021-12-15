<?php defined( 'ABSPATH' ) or exit();

/**
 * =================================================================
 * Global queries
 * =================================================================
 */

/**
 * Uno trabaho
 */
$uno_global_queries['uno_trabaho'] = [
  'post_type' 	=> 'uno_beneficiaries',
  'post_status'	=> 'publish',
  'meta_query' 	=> [
    'relation' => 'OR',
    [
      'key' 		=> 'uno_beneficiary_category_gip',
      'value' 	=> 'gip',
      'compare' => '='
    ],
    [
      'key' 		=> 'uno_beneficiary_category_tupad',
      'value' 	=> 'tupad',
      'compare' => '='
    ]
  ]
];

/**
 * Uno iskolar
 */
$uno_global_queries['uno_iskolar'] = [
  'post_type' 	=> 'uno_beneficiaries',
  'post_status'	=> 'publish',
  'meta_query' 	=> [
    'relation' => 'OR',
    [
      'key' 		=> 'uno_beneficiary_category_deped',
      'value' 	=> 'deped',
      'compare' => '='
    ],
    [
      'key' 		=> 'uno_beneficiary_category_ched',
      'value' 	=> 'ched',
      'compare' => '='
    ],
    [
      'key' 		=> 'uno_beneficiary_category_tesda',
      'value' 	=> 'tesda',
      'compare' => '='
    ]
  ]
];

/**
 * Uno ayuda
 */
$uno_global_queries['uno_ayuda'] = [
  'post_type' 	=> 'uno_beneficiaries',
  'post_status'	=> 'publish',
  'meta_query' 	=> [
    'relation' => 'OR',
    [
      'key' 		=> 'uno_beneficiary_category_aics',
      'value' 	=> 'aics',
      'compare' => '='
    ],
    [
      'key' 		=> 'uno_beneficiary_category_map',
      'value' 	=> 'map',
      'compare' => '='
    ]
  ]
];

/**
 * Uno legal
 */
$uno_global_queries['uno_legal'] = [
  'post_type' 	 => 'uno_beneficiaries',
  'post_status'	 => 'publish',
  'meta_key' 		 => 'uno_beneficiary_category_legal',
  'meta_value' 	 => 'legal',
  'meta_compare' => '='
];

/**
 * Uno health
 */
$uno_global_queries['uno_health'] = [
  'post_type' 	 => 'uno_beneficiaries',
  'post_status'	 => 'publish',
  'meta_key' 		 => 'uno_beneficiary_category_health',
  'meta_value' 	 => 'health',
  'meta_compare' => '='
];

/**
 * Uno youth
 */
$uno_global_queries['uno_youth'] = [
  'post_type' 	 => 'uno_beneficiaries',
  'post_status'	 => 'publish',
  'meta_key' 		 => 'uno_beneficiary_category_youth',
  'meta_value' 	 => 'youth',
  'meta_compare' => '='
];



/**
 * =================================================================
 * General fields
 * =================================================================
 */


/**
 * Personal details
 */
$uno_global_data['personal_information'] = [
  [
    'label' => 'Uno ID',
    'value' => uno_get_the_meta( 'uno_beneficiary_id' ),
  ],
  [
    'label' => 'Name',
    'value' => ucwords( uno_get_the_meta( 'uno_beneficiary_name_first' ) ) .' '. ucwords( uno_get_the_meta( 'uno_beneficiary_name_last' ) ),
  ],
  [
    'label' => 'Gender',
    'value' => [
      'male'   => uno_get_the_meta( 'uno_beneficiary_gender_male' ),
      'female' => uno_get_the_meta( 'uno_beneficiary_gender_female' )
    ]
  ],
  [
    'label' => 'Status',
    'value' => [
      'single'    => uno_get_the_meta( 'uno_beneficiary_status_single' ),
      'married'   => uno_get_the_meta( 'uno_beneficiary_status_married' ),
      'wedowed'   => uno_get_the_meta( 'uno_beneficiary_status_wedowed' ),
      'anulled'   => uno_get_the_meta( 'uno_beneficiary_status_anulled' ),
      'separated' => uno_get_the_meta( 'uno_beneficiary_status_separated' )
    ]
  ],
  [
    'label' => 'Age',
    'value' => uno_get_the_meta( 'uno_beneficiary_status_age' )
  ],
  [
    'label' => 'Date of Birth',
    'value' => uno_get_the_meta( 'uno_beneficiary_birth_info_date' )
  ],
  [
    'label' => 'Place of Birth',
    'value' => uno_get_the_meta( 'uno_beneficiary_birth_info_place' )
  ],
  [
    'label' => 'Nationality',
    'value' =>  uno_get_the_meta( 'uno_beneficiary_status_nationality' )
  ],
  [
    'label' => 'Permanent Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_permanent_address_purok' ) .' '. uno_get_the_meta( 'uno_beneficiary_permanent_address_barangay' ) .', '. uno_get_the_meta( 'uno_beneficiary_permanent_address_municipality' )
  ],
  [
    'label' => 'Present Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_present_address_purok' ) .' '. uno_get_the_meta( 'uno_beneficiary_present_address_barangay' ) .', '. uno_get_the_meta( 'uno_beneficiary_present_address_municipality' )
  ],
];

/**
 * Contact details
 */
$uno_global_data['contact_information'] = [
  [
    'label' => 'Phone Number',
    'value' => uno_get_the_meta( 'uno_beneficiary_contact_phone_number' ),
  ],
  [
    'label' => 'Email Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_contact_email_address' ),
  ],
];

/**
 * Spouse details
 */
$uno_global_data['husband_or_wife_information'] = [
  [
    'label' => 'Name',
    'value' => ucwords( uno_get_the_meta( 'uno_beneficiary_spouse_first' ) ) .' '. ucwords( uno_get_the_meta( 'uno_beneficiary_spouse_last' ) ),
  ],
  [
    'label' => 'Phone Number',
    'value' => uno_get_the_meta( 'uno_beneficiary_spouse_phone' ),
  ],
  [
    'label' => 'Email Address',
    'value' => uno_get_the_meta( 'uno_beneficiary_spouse_email' ),
  ],
];

/**
 * Livelihood details
 */
$uno_global_data['status_of_livelihood'] = [
  [
    'label' => 'Crop Growing',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_crop_growing' ),
  ],
  [
    'label' => 'Fishing',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_fishing' ),
  ],
  [
    'label' => 'Home Based Work',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_home_based' ),
  ],
  [
    'label' => 'Livestock / Poultries Raising',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_livestock' ),
  ],
  [
    'label' => 'Servicing',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_servicing' ),
  ],
  [
    'label' => 'Alternative Trasporting',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_transporting' ),
  ],
  [
    'label' => 'Vending',
    'value' => uno_view_bool( 'uno_beneficiary_livelihood_vending' ),
  ],
  [
    'label' => 'Other',
    'value' => uno_get_the_meta( 'uno_beneficiary_livelihood_other' ),
  ],
];

/**
 * Skills details
 */
$uno_global_data['skills'] = [
  [
    'label' => 'Construction / Carpentry',
    'value' => uno_view_bool( 'uno_beneficiary_skills_carpentry' ),
  ],
  [
    'label' => 'Farming',
    'value' => uno_view_bool( 'uno_beneficiary_skills_farming' ),
  ],
  [
    'label' => 'Fishing',
    'value' => uno_view_bool( 'uno_beneficiary_skills_fishing' ),
  ],
  [
    'label' => 'Vulcanizing / Welding',
    'value' => uno_view_bool( 'uno_beneficiary_skills_welding' ),
  ],
  [
    'label' => 'Cosmetology',
    'value' => uno_view_bool( 'uno_beneficiary_skills_cosmetology' ),
  ],
  [
    'label' => 'Tailoring / Dressmaking',
    'value' => uno_view_bool( 'uno_beneficiary_skills_tailoring' ),
  ],
  [
    'label' => 'Computer',
    'value' => uno_view_bool( 'uno_beneficiary_skills_computer' ),
  ],
  [
    'label' => 'Performing Arts',
    'value' => uno_view_bool( 'uno_beneficiary_skills_arts' ),
  ],
  [
    'label' => 'Handicraft',
    'value' => uno_view_bool( 'uno_beneficiary_skills_handicraft' ),
  ],
  [
    'label' => 'Other',
    'value' => uno_get_the_meta( 'uno_beneficiary_skills_other' ),
  ],
];
