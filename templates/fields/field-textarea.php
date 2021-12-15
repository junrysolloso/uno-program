<?php defined( 'ABSPATH' ) or exit();

/**
 * Textarea field
 */
?>

<?php $uno_global_input_prefix = 'uno_beneficiary_aics'; uno_input_id( apply_filters( 'uno_textarea_name', 'textarea' ) ); ?>
<div class="card mb-4">
  <div class="card-body form-fields p-0">
    <table class="table table-fields" id="<?php p_( uno_table_id( 'textarea' ) ); ?>">
      <thead>
        <tr>
          <th class="text-wrap">
            <a aria-label="Please type your note on the box and no more than 300 characters." data-microtip-size="large" data-microtip-position="bottom-right" role="tooltip"><i class="icon-info mr-2"></i></a>
            <b><?php p_( apply_filters( 'uno_textarea_head_title', 'Assessment' ) ); ?></b>
          </th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-wrap">
            <?php p_( apply_filters( 'uno_textarea_label', 'Social worker\'s assessment' ) ); ?>
          </td>
          <td>
            <textarea name="<?php p_( uno_input_name() ); ?>" maxlength="300" class="form-control" id="<?php p_( uno_input_id( apply_filters( 'uno_textarea_id', 'textarea' ) ) ); ?>" cols="30" rows="10">
              <?php p_( uno_input_value() ); ?>
            </textarea>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
