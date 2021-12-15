<?php defined( 'ABSPATH' ) or exit();

/**
 * Table prefix
 */
global $uno_global_table_prefix;

/**
 * Address fields
 */
$fields  = [
  $uno_global_table_prefix . 'permanent_address' => [
    [
      'id'    => uno_input_id( 'permanent_address_purok' ),
      'name'  => uno_input_name(),
      'label' => 'Purok',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purok'
      ]
    ],
    [
      'id'    => uno_input_id( 'permanent_address_street' ),
      'name'  => uno_input_name(),
      'label' => 'Street',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Street'
      ]
    ],
    [
      'id'    => uno_input_id( 'permanent_address_barangay' ),
      'name'  => uno_input_name(),
      'label' => 'Barangay',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Barangay',
        'Benglen',
        'Catadman',
        'Columbus',
        'Coring',
        'Cortes',
        'Diegas',
        'Doña Helene',
        'Edera',
        'Ferdinand',
        'Geotina',
        'Imee',
        'Melgar',
        'Montag',
        'Navarro',
        'New Nazareth',
        'Poblacion',
        'Puerto Princesa',
        'Rita Glenda',
        'Roma',
        'Roxas',
        'Santa Monica',
        'Santo Niño',
        'Sering',
        'Sombrado',
        'Tag-abaca',
        'Villa Ecleo',
        'Villa Pantinople',
        'Boa',
        'Cabunga-an',
        'Del Pilar',
        'Laguna',
        'Legaspi',
        'Ma-atas',
        'Mabini',
        'Nueva Estrella',
        'R. Ecleo',
        'San Jose',
        'Santa Rita',
        'Tigbao',
        'Valencia',
        'Bagumbayan',
        'Cab-ilan',
        'Cabayawan',
        'Cayetano',
        'Escolta',
        'Gomez',
        'Justiniana Edera',
        'Magsaysay',
        'Mauswagon',
        'New Mabuhay',
        'Wadas',
        'White Beach',
        'Albor',
        'Arellano',
        'Bayanihan',
        'Doña Helen',
        'Garcia',
        'General Aguinaldo',
        'Kanihaan',
        'Llamera',
        'Osmeña',
        'Plaridel',
        'Quezon',
        'Rosita',
        'San Antonio',
        'Carmen',
        'Esperanza',
        'Helene',
        'Liberty',
        'Panamaon',
        'San Juan',
        'Santa Cruz',
        'Santiago',
        'Aurelio',
        'Cuarinta',
        'Don Ruben Ecleo',
        'Jacquez',
        'Luna',
        'Mahayahay',
        'Matingbe',
        'Wilson',
        'Diaz',
        'Imelda',
        'Malinao',
        'San Roque',
        'San Vicente',
      ],
      'meta' => [
        'data-value'  => uno_input_value(),
      ]
    ],
    [
      'id'    => uno_input_id( 'permanent_address_municipality' ),
      'name'  => uno_input_name(),
      'label' => 'Municipality',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Municipality',
        'Cadianao',
        'Dinagat',
        'San Jose',
        'Basilisa',
        'Libjo',
        'Tubajon',
        'Loreto',
      ],
      'meta' => [
        'data-value' => uno_input_value(),
      ]
    ]
  ],
  $uno_global_table_prefix . 'different_address' => [
    [
      'label' => 'Permanent address is different from present address?',
      'type'  => 'checkbox',
      'class' => uno_input_class( 'bool' ),
      'options' => [
        [
          'id'    => uno_input_id( 'different_address_option' ),
          'name'  => uno_input_name(),
          'value' => uno_input_value()
        ]
      ],
      'meta' => [
        'data-value' => uno_input_value(),
      ]
    ],
  ],
  $uno_global_table_prefix . 'present_address' => [
    [
      'id'    => uno_input_id( 'present_address_purok' ),
      'name'  => uno_input_name(),
      'label' => 'Purok',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Purok'
      ]
    ],
    [
      'id'    => uno_input_id( 'present_address_street' ),
      'name'  => uno_input_name(),
      'label' => 'Street',
      'type'  => 'text',
      'value' => uno_input_value(),
      'class' => uno_input_class( 'text' ),
      'meta'  => [
        'placeholder' => 'Street'
      ]
    ],
    [
      'id'    => uno_input_id( 'present_address_barangay' ),
      'name'  => uno_input_name(),
      'label' => 'Barangay',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Barangay',
        'Benglen',
        'Catadman',
        'Columbus',
        'Coring',
        'Cortes',
        'Diegas',
        'Doña Helene',
        'Edera',
        'Ferdinand',
        'Geotina',
        'Imee',
        'Melgar',
        'Montag',
        'Navarro',
        'New Nazareth',
        'Poblacion',
        'Puerto Princesa',
        'Rita Glenda',
        'Roma',
        'Roxas',
        'Santa Monica',
        'Santo Niño',
        'Sering',
        'Sombrado',
        'Tag-abaca',
        'Villa Ecleo',
        'Villa Pantinople',
        'Boa',
        'Cabunga-an',
        'Del Pilar',
        'Laguna',
        'Legaspi',
        'Ma-atas',
        'Mabini',
        'Nueva Estrella',
        'R. Ecleo',
        'San Jose',
        'Santa Rita',
        'Tigbao',
        'Valencia',
        'Bagumbayan',
        'Cab-ilan',
        'Cabayawan',
        'Cayetano',
        'Escolta',
        'Gomez',
        'Justiniana Edera',
        'Magsaysay',
        'Mauswagon',
        'New Mabuhay',
        'Wadas',
        'White Beach',
        'Albor',
        'Arellano',
        'Bayanihan',
        'Doña Helen',
        'Garcia',
        'General Aguinaldo',
        'Kanihaan',
        'Llamera',
        'Osmeña',
        'Plaridel',
        'Quezon',
        'Rosita',
        'San Antonio',
        'Carmen',
        'Esperanza',
        'Helene',
        'Liberty',
        'Panamaon',
        'San Juan',
        'Santa Cruz',
        'Santiago',
        'Aurelio',
        'Cuarinta',
        'Don Ruben Ecleo',
        'Jacquez',
        'Luna',
        'Mahayahay',
        'Matingbe',
        'Wilson',
        'Diaz',
        'Imelda',
        'Malinao',
        'San Roque',
        'San Vicente',
      ],
      'meta' => [
        'data-value' => uno_input_value(),
      ]
    ],
    [
      'id'    => uno_input_id( 'present_address_municipality' ),
      'name'  => uno_input_name(),
      'label' => 'Municipality',
      'type'  => 'select',
      'class' => uno_input_class( 'select' ),
      'options' => [
        'Select Municipality',
        'Cadianao',
        'Dinagat',
        'San Jose',
        'Basilisa',
        'Libjo',
        'Tubajon',
        'Loreto',
      ],
      'meta' => [
        'data-value' => uno_input_value(),
      ]
    ]
  ]
];

/**
 * Show fields
 */
uno_field_template( $fields );