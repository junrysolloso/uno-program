<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_input_prefix, $uno_global_table_prefix; ?>

<form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" id="uno_ayuda_aics_form" class="pb-4 dataForm">
  <?php get_template_part( 'templates/forms/form-constants'); ?>
  <input type="hidden" name="uno_beneficiary_category_health" value="health">

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
  <?php $uno_global_input_prefix = 'uno_beneficiary_health'; ?>

  <?php add_filter( 'uno_label_other_info_option', function() { return 'Indigenous People'; } ); ?>
  <?php add_filter( 'uno_label_other_info_group', function() { return 'Tribe'; } ); ?>
  <?php get_template_part( 'templates/fields/field-client-relation' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_health_beneficiary'; ?>
  <?php $uno_global_table_prefix = 'beneficiary_'; ?>

  <h4 class="mb-3 mt-5">Beneficiary's Identifying Information</h4>
  <?php get_template_part( 'templates/fields/field-name' ); ?>
  <?php get_template_part( 'templates/fields/field-contact' ); ?>
  <?php get_template_part( 'templates/fields/field-status' ); ?>
  <?php get_template_part( 'templates/fields/field-birth' ); ?>
  <?php get_template_part( 'templates/fields/field-address' ); ?>

  <?php add_filter( 'uno_label_other_info_relation', function() { return 'Relationship To Client'; } ); ?>
  <?php get_template_part( 'templates/fields/field-client-relation' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_health'; ?>
  <?php $uno_global_table_prefix = ''; ?>

  <?php add_filter( 'uno_textarea_head_title', function() { return 'Purpose'; } ); ?>
  <?php add_filter( 'uno_textarea_label', function() { return 'Fill-in details of purpose'; } ); ?>
  <?php add_filter( 'uno_textarea_name', function() { return 'purpose'; } ); ?>
  <?php add_filter( 'uno_textarea_id', function() { return 'purpose'; } ); ?>
  <?php get_template_part( 'templates/fields/field-textarea' ); ?>

  <div class="type-of-service">
    <h4 class="mb-3 mt-5">Type of Services</h4>
    <?php get_template_part( 'templates/fields/field-type-of-services' ); ?>
  </div>

  <h4 class="mb-3 mt-5">Staff Information</h4>
  <?php get_template_part( 'templates/fields/field-interviewed-by' ); ?>
  <?php get_template_part( 'templates/fields/field-validated-by' ); ?>
  <?php get_template_part( 'templates/fields/field-confirmed-by' ); ?>
  <?php get_template_part( 'templates/fields/field-approved-by' ); ?>
  <?php get_template_part( 'templates/fields/field-noted-by' ); ?>
  <?php get_template_part( 'templates/fields/field-date-process' ); ?>

  <button type="submit" class="btn btn-primary float-right"><i class="icon-arrow-right-circle mr-2"></i>Submit form</button>
</form>
