<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_input_prefix, $uno_global_table_prefix; ?>

<form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" id="uno_ayuda_aics_form" class="pb-4 dataForm">
  <?php get_template_part( 'templates/forms/form-constants'); ?>
  <input type="hidden" name="uno_beneficiary_category_aics" value="aics">

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary'; ?>
  <?php get_template_part( 'templates/fields/field-uno-id' ); ?>

  <div class="card mb-4">
    <div class="card-body">
      <h4 class="mb-3">Client Identifying Information</h4>
      <?php get_template_part( 'templates/fields/field-name' ); ?>
      <?php get_template_part( 'templates/fields/field-contact' ); ?>
      <?php get_template_part( 'templates/fields/field-status' ); ?>
      <?php get_template_part( 'templates/fields/field-birth' ); ?>
      <?php get_template_part( 'templates/fields/field-address' ); ?>

      <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
      <?php $uno_global_input_prefix = 'uno_beneficiary_aics'; ?>

      <?php get_template_part( 'templates/fields/field-client-relation' ); ?>
    </div>
  </div>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_aics_beneficiary'; ?>
  <?php $uno_global_table_prefix = 'beneficiary_'; ?>

  <div class="card mb-4">
    <div class="card-body">
      <h4 class="mb-3">Beneficiary's Identifying Information</h4>
      <?php get_template_part( 'templates/fields/field-name' ); ?>
      <?php get_template_part( 'templates/fields/field-contact' ); ?>
      <?php get_template_part( 'templates/fields/field-status' ); ?>
      <?php get_template_part( 'templates/fields/field-birth' ); ?>
      <?php get_template_part( 'templates/fields/field-address' ); ?>

      <?php add_filter( 'uno_label_other_info_1', function() { return 'Relationship To Client'; } ); ?>
      <?php get_template_part( 'templates/fields/field-client-relation' ); ?>
    </div>
  </div>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_aics'; ?>
  <?php $uno_global_table_prefix = ''; ?>
  
  <?php add_filter( 'uno_textarea_name', function() { return 'assessment'; } ); ?>
  <?php add_filter( 'uno_textarea_id', function() { return 'assessment'; } ); ?>
  <?php get_template_part( 'templates/fields/field-textarea' ); ?>

  <?php add_filter( 'uno_textarea_head_title', function() { return 'Recommedations'; } ); ?>
  <?php add_filter( 'uno_textarea_label', function() { return 'Social worker\'s recommedation'; } ); ?>
  <?php add_filter( 'uno_textarea_name', function() { return 'recommendations'; } ); ?>
  <?php add_filter( 'uno_textarea_id', function() { return 'recommendations'; } ); ?>
  <?php get_template_part( 'templates/fields/field-textarea' ); ?>

  <div class="card mb-4">
    <div class="card-body type-of-assistance">
      <h4 class="mb-3">Type of Assistance</h4>
      <?php get_template_part( 'templates/fields/field-assistance' ); ?>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h4 class="mb-3">Staff Information</h4>
      <?php get_template_part( 'templates/fields/field-interviewed-by' ); ?>
      <?php get_template_part( 'templates/fields/field-validated-by' ); ?>
      <?php get_template_part( 'templates/fields/field-confirmed-by' ); ?>
      <?php get_template_part( 'templates/fields/field-approved-by' ); ?>
      <?php get_template_part( 'templates/fields/field-noted-by' ); ?>
      <?php get_template_part( 'templates/fields/field-date-process' ); ?>
    </div>
  </div>

  <button type="submit" class="btn btn-primary float-right"><i class="icon-arrow-right-circle mr-2"></i>Submit Form</button>
</form>
