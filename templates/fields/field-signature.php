<?php defined( 'ABSPATH' ) or exit();

/**
 * Signature field
 */
?>

<div class="card mb-4">
  <div class="card-body form-fields p-0">
    <table class="table table-fields" id="<?php p_( uno_table_id( 'signature' ) ); ?>">
      <thead>
        <tr>
          <th class="text-wrap">
            <a aria-label="Please use the box below to draw the signature." data-microtip-size="large" data-microtip-position="bottom-right" role="tooltip"><i class="icon-info mr-2"></i></a>
            <b>Signature</b>
          </th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-wrap">Draw signature on the box</td>
          <td>
            <div class="person_signature__container">
              <div id="signature__pad"></div>
              <input type="hidden" name="uno_beneficiary_signature" id="uno_beneficiary_signature_id">
            </div>
            <button type="button" class="btn btn-primary mt-2" id="signature__reset" style="width: 320px;">
              <i class="icon-trash"></i>Clear
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
