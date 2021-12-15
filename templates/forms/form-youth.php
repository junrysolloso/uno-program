<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_input_prefix, $uno_global_table_prefix; ?>

<form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" id="uno_trabaho_general_form" class="pb-4 dataForm">
  <?php get_template_part( 'templates/forms/form-constants'); ?>
  <input type="hidden" name="uno_beneficiary_category_youth" value="youth">

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary'; ?>

  <?php get_template_part( 'templates/fields/field-uno-id' ); ?>
  <?php get_template_part( 'templates/fields/field-name' ); ?>
  <?php get_template_part( 'templates/fields/field-contact' ); ?>
  <?php get_template_part( 'templates/fields/field-status' ); ?>
  <?php get_template_part( 'templates/fields/field-birth' ); ?>
  <?php get_template_part( 'templates/fields/field-address' ); ?>
  <?php get_template_part( 'templates/fields/field-guardian' ); ?>
  <?php get_template_part( 'templates/fields/field-household-members' ); ?>

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary_youth'; ?>

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
  
  <button type="submit" class="btn btn-primary float-right"><i class="icon-arrow-right-circle mr-2"></i>Submit form</button>
</form>
