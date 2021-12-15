<?php defined( 'ABSPATH' ) or exit();

/**
 * Photo field
 */
?>

<div class="card mb-4">
  <div class="card-body form-fields p-0">
    <table class="table table-fields" id="<?php p_( uno_table_id( 'photo' ) ); ?>">
      <thead>
        <tr>
          <th class="text-wrap">
            <a aria-label="Please make sure you have camera attach or enable and allow this browser to access your camera." data-microtip-size="large" data-microtip-position="bottom-right" role="tooltip"><i class="icon-info mr-2"></i></a>
            <b>Photo</b>
          </th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-wrap">Take a picture using the camera</b></td>
          <td>
            <div class="person_photo__container">
              <div id="camera_container__view"></div>
              <input type="hidden" name="uno_beneficiary_photo" id="uno_beneficiary_photo_id">
            </div>
          
            <button type="button" class="btn btn-primary d-inline mt-2" id="camera_btn__init" style="width: 320px;">
              <i class="icon-camera"></i>Open camera
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
