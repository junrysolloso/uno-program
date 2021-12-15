$(document).ready(function(){

  var init = false;

  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
  });

  $('#camera_btn__init').on('click', function(){
    if (!init) {
      Webcam.attach( '#camera_container__view' );
      $('#camera_btn__init').html('<i class="mdi mdi-image-filter-center-focus-weak"></i>');
      init = true;

      if ($('#camera_container__view').hasClass('hide')) {
        $('#camera_container__view').toggleClass('hide');
        $('#person_photo__img').toggleClass('hide');
      }
    } else {
      Webcam.snap( function(data) {
        $('#person_photo__img').toggleClass('hide');
        $('#camera_container__view').toggleClass('hide');

        if ($('#person_photo__img').attr('src', data)) {
          $('input[name="person_photo"]').val(data.replace(/^data\:image\/\w+\;base64\,/, ''));
          $('#camera_btn__init').html('<i class="mdi mdi-camera"></i>');
          Webcam.reset();
          init = false;
        }
      });
    }
  });
  
});
