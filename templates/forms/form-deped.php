<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_input_prefix, $uno_global_table_prefix; ?>

<form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" id="uno_iskolar_deped_form" class="pb-4 dataForm">
  <?php get_template_part( 'templates/forms/form-constants'); ?>
  <input type="hidden" name="uno_beneficiary_category_deped" value="deped">

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary'; ?>
  
  <h4 class="mb-3">Personal Information</h4>
  <?php get_template_part( 'templates/fields/field-uno-id' ); ?>
  <?php get_template_part( 'templates/fields/field-name' ); ?>
  <?php get_template_part( 'templates/fields/field-contact' ); ?>
  <?php get_template_part( 'templates/fields/field-status' ); ?>
  <?php get_template_part( 'templates/fields/field-birth' ); ?>
  <?php get_template_part( 'templates/fields/field-address' ); ?>
  <?php get_template_part( 'templates/fields/field-guardian' ); ?>
  <?php get_template_part( 'templates/fields/field-family-background' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_deped'; ?>

  <?php get_template_part( 'templates/fields/field-school-last-attended' ); ?>
  <?php get_template_part( 'templates/fields/field-school-intended-to-enroll' ); ?>
  <?php get_template_part( 'templates/fields/field-other-finance-source' ); ?>
  
  <h4 class="mb-3 mt-5">Staff Information</h4>
  <?php get_template_part( 'templates/fields/field-interviewed-by' ); ?>
  <?php get_template_part( 'templates/fields/field-validated-by' ); ?>
  <?php get_template_part( 'templates/fields/field-confirmed-by' ); ?>
  <?php get_template_part( 'templates/fields/field-approved-by' ); ?>
  <?php get_template_part( 'templates/fields/field-noted-by' ); ?>
  <?php get_template_part( 'templates/fields/field-date-process' ); ?>
  
  <button type="submit" class="btn btn-primary float-right"><i class="icon-arrow-right-circle mr-2"></i>Submit form</button>
</form>
