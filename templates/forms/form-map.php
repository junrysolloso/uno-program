<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_input_prefix, $uno_global_table_prefix; ?>

<form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" id="uno_ayuda_map_form" class="pb-4 dataForm">
  <?php get_template_part( 'templates/forms/form-constants'); ?>
  <input type="hidden" name="uno_beneficiary_category_map" value="map">

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary'; ?>

  <h4 class="mb-3">Client Identifying Information</h4>
  <?php get_template_part( 'templates/fields/field-uno-id' ); ?>
  <?php get_template_part( 'templates/fields/field-name' ); ?>
  <?php get_template_part( 'templates/fields/field-contact' ); ?>
  <?php get_template_part( 'templates/fields/field-status' ); ?>
  <?php get_template_part( 'templates/fields/field-birth' ); ?>
  <?php get_template_part( 'templates/fields/field-address' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_map'; ?>

  <?php get_template_part( 'templates/fields/field-client-relation' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_map_beneficiary'; ?>
  <?php $uno_global_table_prefix = 'beneficiary_'; ?>

  <h4 class="mb-3">Beneficiary's Identifying Information</h4>
  <?php get_template_part( 'templates/fields/field-name' ); ?>
  <?php get_template_part( 'templates/fields/field-contact' ); ?>
  <?php get_template_part( 'templates/fields/field-status' ); ?>
  <?php get_template_part( 'templates/fields/field-birth' ); ?>
  <?php get_template_part( 'templates/fields/field-address' ); ?>

  <?php add_filter( 'uno_label_other_info_relation', function() { return 'Relationship To Client'; } ); ?>
  <?php get_template_part( 'templates/fields/field-client-relation' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_map'; ?>
  <?php $uno_global_table_prefix = ''; ?>
  
  <?php add_filter( 'uno_textarea_name', function() { return 'assessment'; } ); ?>
  <?php add_filter( 'uno_textarea_id', function() { return 'assessment'; } ); ?>
  <?php get_template_part( 'templates/fields/field-textarea' ); ?>

  <?php add_filter( 'uno_textarea_head_title', function() { return 'Recommedations'; } ); ?>
  <?php add_filter( 'uno_textarea_label', function() { return 'Social worker\'s recommedation'; } ); ?>
  <?php add_filter( 'uno_textarea_name', function() { return 'recommendations'; } ); ?>
  <?php add_filter( 'uno_textarea_id', function() { return 'recommendations'; } ); ?>
  <?php get_template_part( 'templates/fields/field-textarea' ); ?>

  <div class="type-of-assistance">
    <h4 class="mb-3 mt-4">Type of Assistance</h4>
    <?php get_template_part( 'templates/fields/field-assistance' ); ?>
  </div>

  <h4 class="mb-3 mt-4">Staff Information</h4>
  <?php get_template_part( 'templates/fields/field-interviewed-by' ); ?>
  <?php get_template_part( 'templates/fields/field-validated-by' ); ?>
  <?php get_template_part( 'templates/fields/field-confirmed-by' ); ?>
  <?php get_template_part( 'templates/fields/field-approved-by' ); ?>
  <?php get_template_part( 'templates/fields/field-noted-by' ); ?>
  <?php get_template_part( 'templates/fields/field-date-process' ); ?>

  <button type="submit" class="btn btn-primary float-right"><i class="icon-arrow-right-circle mr-2"></i>Submit form</button>
</form>
