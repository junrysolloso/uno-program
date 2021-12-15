<?php defined( 'ABSPATH' ) or exit(); ?>

<?php global $uno_global_id, $uno_global_check; ?>

<?php if ( $uno_global_id ): ?>
  <input type="hidden" name="ID" value="<?php p_( $uno_global_id ); ?>">
  <input type="hidden" name="uno_beneficiary_id" value="<?php p_( uno_get_the_meta( 'uno_beneficiary_id' ) ); ?>" id="uno_beneficiary_id" >
  <input type="hidden" name="uno_beneficiary_sign_data" value="<?php p_( uno_input_value( 'uno_beneficiary_sign_data' ) ); ?>">
<?php else: ?>
  <input type="hidden" name="ID" value="<?php p_( 0 ); ?>">
  <input type="hidden" name="uno_beneficiary_id" value="<?php p_( uno_generate_id() ); ?>" id="uno_beneficiary_id" >
<?php endif; ?>

<input type="hidden" name="uno_nonce" value="<?php p_( uno_get_nonce() ); ?>">
<input type="hidden" name="uno_check" value="<?php $uno_global_check ? p_('edit') : p_( 'publish' ); ?>">
