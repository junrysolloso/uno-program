<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_input_prefix, $uno_global_table_prefix; ?>

<form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" id="uno_trabaho_general_form" class="pb-4 dataForm">
  <?php get_template_part( 'templates/forms/form-constants'); ?>
  <input type="hidden" name="uno_beneficiary_category_general" value="general">

  <!-- CAUTION: DO NOT CHANGE THE PREFIX!! -->
  <?php $uno_global_input_prefix = 'uno_beneficiary'; ?>

  <?php get_template_part( 'templates/fields/field-uno-id' ); ?>
  <?php get_template_part( 'templates/fields/field-name' ); ?>
  <?php get_template_part( 'templates/fields/field-contact' ); ?>
  <?php get_template_part( 'templates/fields/field-status' ); ?>
  <?php get_template_part( 'templates/fields/field-birth' ); ?>
  <?php get_template_part( 'templates/fields/field-address' ); ?>
  <?php get_template_part( 'templates/fields/field-husband-wife' ); ?>
  <?php get_template_part( 'templates/fields/field-household-members' ); ?>

  <?php get_template_part( 'templates/fields/field-status-of-livelihood' ); ?>
  <?php get_template_part( 'templates/fields/field-skills' ); ?>

  <?php get_template_part( 'templates/fields/field-photo' ); ?>
  <?php get_template_part( 'templates/fields/field-signature' ); ?>
  
  <button type="submit" class="btn btn-primary float-right"><i class="icon-arrow-right-circle mr-2"></i>Submit form</button>
</form>
