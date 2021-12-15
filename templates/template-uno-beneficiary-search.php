<?php defined( 'ABSPATH' ) or exit();

/**
 * Template Name: Uno Search Beneficiary
 */

uno_user_check_cap( 'read' );

/**
 * Check client request
 */
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {

  /**
   * Check nonce
   */
  uno_nonce_check( 'get', 'uno_nonce' );

  /**
   * Check field
   */
  isset( $_GET['search'] ) ? $search = sanitize_text_field( $_GET['search'] ) : $search = '';

  /**
   * Query
   */
  $args = [
    'post_type' 	=> 'uno_beneficiaries',
    'post_status'	=> 'publish',
    'meta_query' 	=> [
      'relation'  => 'OR',
      [
        'key' 		=> 'uno_beneficiary_ID',
        'value' 	=> $search,
        'compare' => 'LIKE'
      ],
      [
        'key' 		=> 'uno_beneficiary_name_first',
        'value' 	=> $search,
        'compare' => 'LIKE'
      ],
      [
        'key' 		=> 'uno_beneficiary_name_last',
        'value' 	=> $search,
        'compare' => 'LIKE'
      ],
      [
        'key' 		=> 'uno_beneficiary_permanent_address_barangay',
        'value' 	=> $search,
        'compare' => 'LIKE'
      ],
      [
        'key' 		=> 'uno_beneficiary_permanent_address_municipality',
        'value' 	=> $search,
        'compare' => 'LIKE'
      ]
    ]
  ];

  if ( ! empty( $search ) ) {
    uno_output_renderer( ['page' => 'uno_search_results'] );
  }

}

/**
 * Show results
 */
function uno_search_results() {

  /**
   * Get global query for search
   */
  global $args;

  /**
   * new WP_Query
   */
  $query = new WP_Query( $args );

  ?>
  <table class="table" id="search_results_table">
    <tbody>
      <?php if ( $query->have_posts() ): ?>
        <?php while( $query->have_posts() ): $query->the_post(); ?>
          <tr>
            <td class="text-uno">
              <a title="Uno ID" href="<?php uno_e_site_url() ?>beneficiary/?uno_id=<?php p_( get_the_ID() ); ?>&uno_nonce=<?php p_( uno_get_nonce() ); ?>&uno_cat=<?php p_( uno_get_the_meta( 'uno_beneficiary_category' ) ); ?>&uno_check=read">
                <?php p_( uno_get_the_meta( 'uno_beneficiary_id' ) ); ?>  
              </a>
            </td>
            <td class="text-uno">
              <span title="Name">
                <?php p_( ucfirst( uno_get_the_meta( 'uno_beneficiary_name_last' ) ) ); ?>, 
                <?php p_( ucfirst( uno_get_the_meta( 'uno_beneficiary_name_first' ) ) ); ?>
              </span>
            </td>
            <td class="text-uno">
              <span title="Municipality">
                <?php p_( ucfirst( uno_get_the_meta( 'uno_beneficiary_permanent_address_municipality' ) ) ); ?>
              </span>
            </td>
            <td>
              <span title="Copy Uno ID">
                <i class="search_results_copybtn icon-docs" data-clipboard-text="<?php p_( uno_get_the_meta( 'uno_beneficiary_id' ) ); ?>"></i>
              </span>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td>No data found.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
  <?php

  wp_reset_postdata();
}
