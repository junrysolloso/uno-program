<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno Analytics
 */

uno_user_check_cap( 'read' );

uno_get_header();


global $uno_global_id, $uno_global_data;


$array = [
  'table' => 'document_information',
  'key'   => [
    'uno_beneficiary_educ_attainment_school'  => 'Name of School',
  ]
];


function uno_document_presented( $params ) {
  global $uno_global_data, $uno_global_id;

  $values = [];
  $pairs  = [];

  $uno_global_data[ $params['table'] ] = [];
  
  if ( $uno_global_id ) {
    
    foreach ( array_keys( $params['key'] ) as $key ) {
      array_push( $values, ['value' => uno_get_the_meta( $key )] );
    }
    
    $key_len    = count( $params['key'] );
    $values_len = count( $values[0]['value'] );
  
    for ( $i = 0; $i < $values_len; $i++ ) { 
      for ( $j = 0; $j < $key_len; $j++ ) {
        array_push( $pairs,
          [
            'label' => array_values( $params['key'] )[ $j ],
            'value' => $values[ $j ]['value'][ $i ]
          ]
        );
      }

      array_push( $uno_global_data[ $params['table'] ], $pairs );
      $pairs = [];
    }
  }
}

uno_document_presented( $array );

var_dump($uno_global_data['document_information']);



uno_get_footer();
