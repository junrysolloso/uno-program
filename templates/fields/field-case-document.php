<?php defined( 'ABSPATH' ) or exit();

/**
 * Input prefix
 */
global $uno_global_id;

/**
 * Global input prefix
 */
global $uno_global_input_prefix;

/**
 * Documents fields
 */
function uno_documents_presented( $document = '' ) {
  $fields  = [
    'document_information' => [
      [
        'id'    => uno_input_id( 'document_presented' ),
        'name'  => uno_input_name( 'document_presented[]' ),
        'label' => 'Document Presented',
        'type'  => 'text',
        'value' => $document,
        'class' => uno_input_class( 'text' ) . ' repeater_field',
        'meta'  => [
          'placeholder' => 'Document Presented'
        ]
      ],
    ],
  ];

  return $fields;
}

/**
 * Filter for adding button
 */
add_filter( 'uno_table_header_right', function() { return '<a href="#" class="ml-4" id="add_button_document"><i class="icon-plus"></i> Add</a>'; } );

if ( $uno_global_id ) {

  $documents = uno_input_value( $uno_global_input_prefix .'_document_presented' );

  if ( is_array( $documents ) ) {
    $len = count( $documents );
    
    for ( $i = 0; $i < $len; $i++ ) { 
    
      // Filter for remove button
      if (  $len > 1 && $i > 0 ) {
        add_filter( 'uno_table_header_right', function() { return '<a href="#" class="ml-4 text-danger remove_table_fields_edit"><i class="icon-close"></i> Delete</a>'; } );
      }
  
      $fields = uno_documents_presented( $documents[$i] );
      uno_field_template( $fields );
    }
  }
} else {
  uno_field_template( uno_documents_presented() );
}

add_filter( 'uno_table_header_right', '__return_false' );
