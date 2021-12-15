/**
 * Localize variables
 */
const strToCapital = (str, lower = false) => (lower ? str.toLowerCase() : str).replace(/(?:^|\s|["'([{])+\S/g, match => match.toUpperCase()); 
const trimWhitespace = (str) => str.replace(/\s/g,'');

const base_url   = $('#base_url').val();
const search_url = base_url + 'beneficiary/search/';
const new_url    = base_url + 'beneficiary/new/';
const edit_url   = base_url + 'beneficiary/edit/';
const view_url   = base_url + 'beneficiary/';

/**
 * Ajax
 */
 var ajaxOptions  = {
  dataType: 'json',
  beforeSend: uno_loader,
  success: showSuccessResponse,
  error: function(res) {
    console.log(res);
  }
}

var validateOptions = {
  errorElement: 'div',
  errorClass: 'text-danger notice',
  errorPlacement: function(error, element) {
    error.appendTo(element.next('.input-helper'));
    element.next('.input-helper').show();
  },
  submitHandler: function(form){
    $('.true_false').each(function(){
      if($(this).prop('checked')) {
        $(this).parent().prev().disabled = true;
      }
    });

    $(form).ajaxSubmit(ajaxOptions);
  }
}
 
function showSuccessResponse(res) {
  $('.swal-modal').css('width', '400px');
  $('.swal-modal').css('padding', '10px 40px 30px 40px');

  switch (res.status) {
    case 'success':
        showSuccessSwal(res.message);
      break;
    case 'exist':
        showWarningSwal(res.message);
      break;
    case 'error':
        showErrorSwal(res.message);
      break;
    case 'file':
        showErrorSwal(res.message);
      break;
    default:
        swal.close();
        console.log(res);
      break;
  }
}

/**
 * Popup - Swal and Toast
 */
showWarningSwal = function(msg) {
  'use strict';
  swal({
    title: 'Warning',
    text: msg,
    icon: 'warning',
    dangerMode: false,
    closeOnClickOutside: false,
  })
}

showSuccessSwal = function(msg) {
  'use strict';
  swal({
    title: 'Success',
    text: msg,
    icon: 'success',
    dangerMode: false,
    closeOnClickOutside: false,
  }).then((value) => {
    if(value) {
      location.reload();
    }
  });
}

showErrorSwal = function(msg) {
  'use strict';
  swal({
    title: 'Error',
    text: msg,
    icon: 'error',
    dangerMode: true,
    closeOnClickOutside: false,
  })
}

showInfoSwal = function(msg, show_button) {
  'use strict';
  swal({
    title: 'Message',
    text: msg,
    icon: 'info',
    dangerMode: false,
    buttons: show_button,
    closeOnClickOutside: false,
  })
}

/**
 * Webcam
 */
function webcam_set() {
  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90,
    unfreeze_snap: false
  });
}

/**
 * Loader
 */
function uno_loader() {
  swal({
    dangerMode: false,
    buttons: false,
    closeOnClickOutside: false,
  });
  
  $('.swal-modal').html('<div class="square-box-loader"><div class="square-box-loader-container"><div class="square-box-loader-corner-top"></div><div class="square-box-loader-corner-bottom"></div></div><div class="square-box-loader-square"></div></div>');
  $('.swal-modal').css('width', '130px');
  $('.swal-modal').css('padding', '60px 40px');
}

/**
 * Init webcam
 */
function init_webcam_js(){
  var init_camera = false;
  webcam_set();

  $('body').on('click', '#camera_btn__init', function(){
    if (!init_camera) {

      Webcam.attach('#camera_container__view');
      $(this).html('<i class="icon-frame"></i> Capture');
      init_camera = true;

    } else {
      Webcam.snap( function(data) {
        var image_data = data.replace(/^data\:image\/\w+\;base64\,/, '');
        swal({
          title: 'Preview',
          dangerMode: false,
          closeOnClickOutside: false,
        });

        $('.swal-modal').html('<img src="'+ data +'" width="500" style="border-radius: 6px;" /><div class="swal-footer"><div class="swal-button-container"><button class="swal-button swal-button--cancel">Capture again</button></div><div class="swal-button-container"><button class="swal-button swal-button--confirm">Use this photo</button></div></div>');
        $('.swal-modal').css('width', '580px');
        $('.swal-modal').css('padding', '40px 40px 25px');
        
        $('body').on('click', '.swal-button--confirm', function(){
          $('#uno_beneficiary_photo_id').val(image_data);
          $('#camera_btn__init').html('<i class="icon-camera"></i> Open Camera');

          swal.close();
          Webcam.reset();
          init_camera = false;
        });

        $('body').on('click', '.swal-button--cancel', function(){
          swal.close();
        });
      });
    }
  });
}

/**
 * jSignature
 */
init_jsignature();
function init_jsignature() {
  $("#signature__pad").jSignature({
    'decor-color': 'transparent',
  });
  
  $('body').on('click', '#signature__reset', function(){
    $("#signature__pad").jSignature('reset');
  });

  $("body").on('change', '#signature__pad', function(){
    var data = $(this).jSignature('getData', 'base30');
    if (data) {
      $('#uno_beneficiary_signature_id').val(data);
    }
  });
}

const sign = $('input[name="uno_beneficiary_sign_data"]');
if(sign.length && sign.val().length > 30) {
  var data = sign.val();
  $("#signature__pad").jSignature("setData", "data:" + data);
}


/**
 * ============================================================================
 * Actions
 * ============================================================================
 */
(function($) {

  /**
   * Initialize input mask
   */
  $(":input").inputmask();

  /**
   * Initialize Select2
   */
  init_select();
  function init_select() {
    $('.select2').select2({width: '100%'});

    $('.select2').each(function(){
      var value = $(this).attr('data-value');

      if(value) {
        $(this).val(value);
        $(this).trigger('change');
      }
    });
  }

  /**
   * Initialize iCheck
   */
  init_icheck();
  function init_icheck() {
    $('.iradio_flat, .icheckbox_flat').iCheck({
      checkboxClass: 'iradio_flat-blue',
      radioClass: 'icheckbox_flat-blue',
      increaseArea: '20%'
    });
  }

  /**
   * Initialize form validation
   */
  init_form_validation();
  function init_form_validation() {
    $('.dataForm').validate(validateOptions);
  }

  /**
   * Delete action
   */
  $('.deleteForm').on('submit', function(ev) {
    ev.preventDefault();
    uno_notice($(this));
  });

  /**
   * Clipboard
   */
  uno_clipboard('.search_results_copybtn');
  function uno_clipboard(element) {
    var copy = new ClipboardJS(element);

    copy.on('success', function(e){
      /**
       * Add check icon
       */
      e.trigger.classList.remove('icon-docs');
      e.trigger.classList.add('icon-check');
      e.trigger.classList.add('text-success');
  
      e.clearSelection();
  
      /**
       * Restor default icon
       */
      setTimeout(function(){
        e.trigger.classList.remove('icon-check');
        e.trigger.classList.remove('text-success');
        e.trigger.classList.add('icon-docs');
      }, 2000);
    });
  }

  /**
   * Show notice message
   */
  function uno_notice(form) {
    swal({
      title: "Warning",
      text: "This action cannot be reverted.",
      icon: "warning",
      buttons: {
        cancel: true,
        confirm: {
          text: 'Yes! Delete It',
          value: true
        }
      },
      dangerMode: true,
      closeOnClickOutside: false,
    })
    .then((value) => {
      if (value) {
        form.ajaxSubmit(ajaxOptions);
      } else {
        swal.close();
      }
    });

    $('.swal-modal').css('width', '400px');
    $('.swal-modal').css('padding', '10px 40px 30px');
  }

  /**
   * Init image lazy loading
   */
  init_lazy_load();
  function init_lazy_load() {
    $('.lazy').Lazy({
      effect: 'fadeIn',
      effectTime: 1500,
      delay: 2000,
      visibleOnly: true,
      scrollDirection: 'vertical'
    });
  }

  /**
   * Switch button
   */
  var switch_btn = '.true_false'; 
  init_switch_button();

  function init_switch_button() {
    lc_switch(switch_btn, {
      on_txt: 'Yes',
      off_txt: 'No',
      compact_mode : false,
      on_color : '#0E3355',
    });
  }

  /**
   * Toggles switch if value is 1
   */
  $('.true_false').each(function(){
    if($(this).val() == '1') {
      lcs_toggle($(this));
    }
  });

  /**
   * Init all
   */
  init_plugins();
  function init_plugins() {
    init_icheck();
    init_select();
    init_switch_button();
    init_form_validation();
    init_webcam_js();
    init_jsignature();
    uno_set_ID();
  }

  /**
   *  Clone field table
   */
  var add_btn_id = '';
  var table_id   = '';

  function uno_add_table_fields( add_btn_id, table_id ) {
    var additional       = 0;

    $('body').on('click', '#'+ add_btn_id, function(){
      const fields = $('#'+ table_id);

      if(fields.length) {
        var copy = fields.clone();
        fields.parent('.card-body').append(copy);
        copy.attr('id', table_id + '_' + additional );

        $('#'+ table_id +'_'+ additional +' thead tr .w-65').html( '<a href="#" class="float-right text-danger remove_table_fields"><i class="icon-close"></i> Delete</a>' );
        additional++;
      }

      return false;
    });
  }

  /**
   * Remove table
   */
  uno_remove_table_fields();
  function uno_remove_table_fields() {
    $('body').on('click', '.remove_table_fields', function(){

      $(this).parent().parent().parent().parent().remove();
      additional = 0;
      return false;
    });
  }

  uno_remove_table_fields_edit();
  function uno_remove_table_fields_edit() {
    $('body').on('click', '.remove_table_fields_edit', function(){
      $(this).parents('.card').remove();
      return false;
    });
  }

  /**
   * Addtional fields actions
   */
  add_btn_id = 'add_button_school';
  table_id   = 'table_educational_attainment';
  uno_add_table_fields( add_btn_id, table_id );

  add_btn_id = 'add_button_member';
  table_id   = 'table_household_members';
  uno_add_table_fields( add_btn_id, table_id );
  
  add_btn_id = 'add_button_document';
  table_id   = 'table_document_information';
  uno_add_table_fields( add_btn_id, table_id );

  /**
   * Switch button actions
   */
  uno_switch_btn_actions();
  function uno_switch_btn_actions() {
    /**
     * Switch on
     */
    $('body').on('lcs-on', '.true_false', function(){ 
      var btn_id = $(this).attr('id');
      var table_id = $(this).parent().parent().parent().parent().parent().parent().attr('id');

      $(this).val('1');
      switch_off(btn_id, table_id);
      uno_form_actions(btn_id, 'show');
    });

    /**
     * Switch off
     */
    $('body').on('lcs-off', '.true_false', function(){
      var btn_id = $(this).attr('id');

      $(this).val('0');
      uno_form_actions(btn_id, 'hide');
    });
  }

  /**
   * Hide tables
   */
  function uno_beneficiary_tables(hide = false) {
    var tables = ['#table_name', '#table_contact_details', '#table_status_information', '#table_birth_information', '#table_different_address', '#table_permanent_address']
    tables.forEach(function(v,i){
      if (hide) {
        $(v).eq(0).parent().parent().hide();
      } else {
        $(v).eq(0).parent().parent().show();        
      }
    });
  }

  /**
   * Show present address if option value is 1
   */
  if($('#uno_beneficiary_different_address_option_id').val() == 1) {
    $('#uno_beneficiary_different_address_option_id').parents('.table').next().show();
  }

  /**
   * Show other fields if this is check
   */
  $('.type-of-assistance .true_false').each(function(){
    if( $(this).val() == 1 ) {
      $(this).parents('tbody').children('tr').show();
    }
  });

  $('.type-of-service .true_false').each(function(){
    if( $(this).val() == 1 ) {
      $(this).parents('tbody').children('tr').show();
    }
  });

  /**
   * Set same uno ID
   */
  uno_set_ID();
  function uno_set_ID() {
    $('#uno_beneficiary_id_new_id').val($('#uno_beneficiary_id').val());
  }

  /**
   * Off other button
   */
  function switch_off(id, table) {
    if (table == 'table_status_information' 
    || table  == 'table_beneficiary_status_information'
    || table  == 'table_gender_information'
    || table  == 'table_beneficiary_gender_information'
    || table  == 'table_parent_or_guardian_information'
    || table  == 'table_uno_trabaho_form'
    || table  == 'table_uno_iskolar_form'
    || table  == 'table_uno_ayuda_form'
    || table  == 'table_school_last_attended'
    || table  == 'table_school_intended_to_enroll' ) {
      $('#'+ table +' .true_false').each(function(){
        if( $(this).attr('id') != id ) {
          lcs_off($(this));
        }
      });
    }
  }

  /**
   * Search
   */
  $('#search_field_top').on('keyup', function(){
    if($(this).val().length > 2){
      $.ajax({
        type: 'GET',
        dataType: 'html',
        url: search_url,
        data: {
          search: $(this).val(),
          uno_nonce: $('#search_nonce_top').val(),
          uno_check: $('#search_check_top').val(),
        },
        success: function(res) {
          if (res) {
            $('input[name="search_field_top"]').css('border-bottom-left-radius', '0px');
            $('input[name="search_field_top"]').css('border-bottom-right-radius', '0px');
            $('input[name="search_field_top"]').css('box-shadow', '0 0 4px 0 var(--uno-s)');

            $('#search_results_top').html(res);
            $('#search_results_top').slideDown('fast');
          }
        }
      });
    } else {
      $('input[name="search_field_top"]').css('border-bottom-left-radius', '6px');
      $('input[name="search_field_top"]').css('border-bottom-right-radius', '6px');
      $('input[name="search_field_top"]').css('box-shadow', 'unset');
      $('#search_results_top').fadeOut('fast');
    }
  });

  /**
   * Request content
   */
  function uno_ajax_get_form(form, nonce) {
    if (form) {
      $.ajax({
        type: 'GET',
        dataType: 'html',
        url: window.location.href,
        data: {
          form: form,
          uno_nonce: nonce
        },
        beforeSend: uno_loader,
        success: function(res) {
          $('#form-container').html(res);
        },
        error: function(res) {
          console.log(res);
        },
        complete: function() {
          swal.close();
          init_plugins();
        }
      });
    }
  }

  /**
   * Checkbox on/off action
   */
  function uno_form_actions(id, action) {
    var nonce = $('#' + id).attr('data-nonce');

    if (action == 'show') {
      switch ( id ) {
        case 'uno_beneficiary_aics_medical_option_id':
        case 'uno_beneficiary_aics_food_option_id':
        case 'uno_beneficiary_aics_transportation_option_id':
        case 'uno_beneficiary_aics_burial_option_id':
        case 'uno_beneficiary_aics_educational_option_id':
        case 'uno_beneficiary_aics_cash_option_id':
        case 'uno_beneficiary_aics_legal_option_id':
        case 'uno_beneficiary_aics_non_food_option_id':

        case 'uno_beneficiary_map_medical_option_id':
        case 'uno_beneficiary_map_food_option_id':
        case 'uno_beneficiary_map_transportation_option_id':
        case 'uno_beneficiary_map_burial_option_id':
        case 'uno_beneficiary_map_educational_option_id':
        case 'uno_beneficiary_map_cash_option_id':
        case 'uno_beneficiary_map_legal_option_id':
        case 'uno_beneficiary_map_non_food_option_id':

        case 'uno_beneficiary_health_hypertension_option_id':
        case 'uno_beneficiary_health_diabetis_option_id':
        case 'uno_beneficiary_health_mental_illness_option_id':
        case 'uno_beneficiary_health_vitamins_option_id':
        case 'uno_beneficiary_health_other_option_id':

          $('#' + id).parents('tbody').children('tr').show();

          break;
        case 'uno_beneficiary_different_address_option_id':
        case 'uno_beneficiary_aics_beneficiary_different_address_option_id':
        case 'uno_beneficiary_map_beneficiary_different_address_option_id':
        case 'uno_beneficiary_health_beneficiary_different_address_option_id':

          $('#' + id).parents('.table').next().show();

          break;
        case 'uno_beneficiary_id_option_id':

          $('#uno_beneficiary_id_old_id').val('');
          $('#uno_beneficiary_id_new_id').parents('tr').hide();
          $('#uno_beneficiary_id_old_id').parents('tr').show();
          uno_beneficiary_tables(true);

          break;
        case 'uno_trabaho_form_general_id':

          window.location = new_url + '?form=general&uno_nonce=' + nonce;

          break;
        case 'uno_trabaho_form_gip_id':

          window.location = new_url + '?form=gip&uno_nonce=' + nonce;

          break;
        case 'uno_trabaho_form_tupad_id':

          window.location = new_url + '?form=tupad&uno_nonce=' + nonce;

          break;
        case 'uno_iskolar_form_deped_id':

          window.location = new_url + '?form=deped&uno_nonce=' + nonce;

          break;
        case 'uno_iskolar_form_ched_id':

          window.location = new_url + '?form=ched&uno_nonce=' + nonce; 

          break;
        case 'uno_iskolar_form_tesda_id':

          window.location = new_url + '?form=tesda&uno_nonce=' + nonce;

          break;
        case 'uno_ayuda_form_aics_id':

          window.location = new_url + '?form=aics&uno_nonce=' + nonce;

          break;
        case 'uno_ayuda_form_map_id':

          window.location = new_url + '?form=map&uno_nonce=' + nonce;

          break;
        default:
          break;
      }
    } 
    else {
      switch ( id ) {
        case 'uno_beneficiary_aics_medical_option_id':
        case 'uno_beneficiary_aics_food_option_id':
        case 'uno_beneficiary_aics_transportation_option_id':
        case 'uno_beneficiary_aics_burial_option_id':
        case 'uno_beneficiary_aics_educational_option_id':
        case 'uno_beneficiary_aics_cash_option_id':
        case 'uno_beneficiary_aics_legal_option_id':
        case 'uno_beneficiary_aics_non_food_option_id':

        case 'uno_beneficiary_map_medical_option_id':
        case 'uno_beneficiary_map_food_option_id':
        case 'uno_beneficiary_map_transportation_option_id':
        case 'uno_beneficiary_map_burial_option_id':
        case 'uno_beneficiary_map_educational_option_id':
        case 'uno_beneficiary_map_cash_option_id':
        case 'uno_beneficiary_map_legal_option_id':
        case 'uno_beneficiary_map_non_food_option_id':
          
        case 'uno_beneficiary_health_hypertension_option_id':
        case 'uno_beneficiary_health_diabetis_option_id':
        case 'uno_beneficiary_health_mental_illness_option_id':
        case 'uno_beneficiary_health_vitamins_option_id':
        case 'uno_beneficiary_health_other_option_id':

          $('#' + id).parents('tbody').children('tr:not(:first-child)').hide();

          break;
        case 'uno_beneficiary_different_address_option_id':
        case 'uno_beneficiary_aics_beneficiary_different_address_option_id':
        case 'uno_beneficiary_map_beneficiary_different_address_option_id':
        case 'uno_beneficiary_health_beneficiary_different_address_option_id':

          $('#' + id).parents('.table').next().hide();

          break;
        case 'uno_beneficiary_id_option_id':

          $('#uno_beneficiary_id_new_id').parents('tr').show();
          $('#uno_beneficiary_id_old_id').parents('tr').hide();
          uno_beneficiary_tables(false);

          break;
        case 'uno_trabaho_form_general_id':
        case 'uno_trabaho_form_gip_id':
        case 'uno_trabaho_form_tupad_id':
        case 'uno_iskolar_form_deped_id':
        case 'uno_iskolar_form_ched_id':
        case 'uno_iskolar_form_tesda_id':
        case 'uno_ayuda_form_aics_id':
        case 'uno_ayuda_form_map_id':

          $('#form-container').html('');

          break;
        default:
          break;
      }
    }
  }


  /**
   * ============================================================================
   * Context menu
   * ============================================================================
   */


  var icons = {
    trabaho: 'briefcase',
    iskolar: 'graduation',
    ayuda  : 'share-alt',
    legal  : 'hourglass ',
    health : 'heart',
    youth  : 'direction',
  }

  $("body").on("contextmenu", ".table-with-contextmenu tbody tr", function(event){
    event.preventDefault();

    var icon       = '';
    var html       = '';
    var data       = JSON.parse($(this).attr('data-uno'));
    var categories = data.c.split(',');

    /**
     * General profile
     */
    html += '<a href="#" class="dropdown-item text-uno"><i class="icon-user mr-2"></i>General Profile</a>';
    html += '<div class="contextmenu-sub">';
    html += '<a href="'+ view_url +'?uno_id='+ data.i +'&uno_nonce='+ data.n +'&uno_cat=general" class="dropdown-item text-uno"><i class="icon-arrow-right-circle mr-2"></i>View</a>';
    html += '<a href="'+ edit_url +'?uno_id='+ data.i +'&uno_nonce='+ data.n +'&uno_cat=general" class="dropdown-item border-bottom text-uno"><i class="icon-arrow-right-circle mr-2"></i>Edit</a>';
    html += '</div>';

    /**
     * Link for each service availed
     */
    if (data.c) {

      /**
       * Add dropdown header
       */
      html += '<h6 class="dropdown-header border-bottom bg-blue-gradient">Services Received</h6>';

      /**
       * Loop through all categories
       */
      for (let i = 0; i < categories.length; i++) {

        /**
         * Find correct icon
         */
        switch (categories[i]) {
          case 'general':
          case 'gip':
          case 'tupad':
            
            icon = icons.trabaho;

            break;
          case 'deped':
          case 'ched':
          case 'tesda':

            icon = icons.iskolar;
          
            break;
          case 'aics':
          case 'map':

            icon = icons.ayuda;

            break;
          case 'legal':

            icon = icons.legal;

            break;
          case 'health':

            icon = icons.health;

            break;
          case 'youth':

            icon = icons.youth;

            break;
          default:

            icon = 'note';

            break;
        }

        /**
         * services profile
         */
        html += '<a href="#" class="dropdown-item text-uno"><i class="icon-'+ icon +' mr-2"></i>'+ categories[i].toUpperCase() +'</a>';
        html += '<div class="contextmenu-sub">';
        html += '<a href="'+ view_url +'?uno_id='+ data.i +'&uno_nonce='+ data.n +'&uno_cat='+ categories[i] +'" class="dropdown-item text-uno"><i class="icon-arrow-right-circle mr-2"></i>View</a>';
        html += '<a href="'+ edit_url +'?uno_id='+ data.i +'&uno_nonce='+ data.n +'&uno_cat='+ categories[i] +'" class="dropdown-item border-bottom text-uno"><i class="icon-arrow-right-circle mr-2"></i>Edit</a>';
        html += '</div>';
      }
    }

    /**
     * Show context menu
     */
    show_context_menu(event, 'context-menu--container', html);
  });

  /**
   * Show submenu
   */
  $('body').on('click', '#context-menu--container > a', function(){

    $('#context-menu--container > a').removeClass('active');
    $(this).toggleClass('active');

    $('.contextmenu-sub').slideUp();
    $(this).next('.contextmenu-sub').toggle('slideDown');
    
    return false;
  });

  /**
   * Body action
   */
  $('body').on('click', function(){

    /**
     * Hide context menu
     */
    hide_context_menu('context-menu--container');
  });

  /**
   * Hide context menu
   */
  function hide_context_menu(menu_id) {
    var menu_container = document.getElementById(menu_id);
  
    menu_container.style.display = "";
    menu_container.style.left    = "";
    menu_container.style.top     = "";
    menu_container.innerHTML     = "";
  }

  /**
   * Show context menu
   */
  function show_context_menu(event, menu_id, content) {
    var menu_container = document.getElementById(menu_id);
    
    menu_container.style.display = "block";
    menu_container.style.left    = (event.pageX - 10)+"px";
    menu_container.style.top     = (event.pageY - 10)+"px";
    menu_container.innerHTML     = content;
  }

  // /**
  //  * Container context menu
  //  */
  // var container = document.getElementById("container_scroller");
  // container.addEventListener('contextmenu', event => event.preventDefault());

  // /**
  //  * Main panel context menu
  //  */
  // var notepad = document.getElementById("main_panel");
  // notepad.addEventListener("contextmenu",function(event){
  //     event.preventDefault();
  //     var ctxMenu = document.getElementById("context-menu--main-panel");
  //     ctxMenu.style.display = "block";
  //     ctxMenu.style.left = (event.pageX - 10)+"px";
  //     ctxMenu.style.top = (event.pageY - 10)+"px";
  // },false);
  // notepad.addEventListener("click",function(event){
  //     var ctxMenu = document.getElementById("context-menu--main-panel");
  //     ctxMenu.style.display = "";
  //     ctxMenu.style.left = "";
  //     ctxMenu.style.top = "";
  // },false);

  // var reload = document.getElementById('context-menu--reload');
  // reload.addEventListener('click', function(e){
  //   e.preventDefault();
  //   location.reload();
  // });

})(jQuery);


/**
 * ============================================================================
 * Navigation
 * ============================================================================
 */
 (function($){

  $(function() {
    
    // Set nav menu active when in the specified page
    if ($('.sidebar').length) {
      $('#sidebar >.nav > li:not(.not-navigation-link) a').each(function () {
        if (! $('#sidebar').hasClass("dynamic-active-class-disabled")) {
          var http = $(location).attr('href'); //.split('https:');
          
          if ( $(this).attr('href') == http ) {
  
            $(this).parents('.nav-item').last().addClass('active');
            if ($(this).parents('.sub-menu').length) {
              $(this).addClass('active');
            }
           
            $(this).parents('.nav-item').last().find(".nav-link").attr("aria-expanded", "true");
            if ($(this).parents('.sub-menu').length) {
              $(this).closest('.collapse').addClass('show');
            }
          }
        }
      });
    }
  });

  $(function() {
    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active');
    });
  });

  //Open submenu on hover in compact sidebar mode and horizontal menu mode
  $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function (ev) {
    var body = $('body');
    var sidebarIconOnly = body.hasClass("sidebar-icon-only");
    var horizontalMenu = body.hasClass("horizontal-menu");
    var sidebarFixed = body.hasClass("sidebar-fixed");
    var $menuItem = $(this);
    if (!('ontouchstart' in document.documentElement)) {
      if (sidebarIconOnly || horizontalMenu) {
        if (sidebarFixed) {
          if (ev.type === 'mouseenter') {
            body.removeClass('sidebar-icon-only');
          }
        } else {
          if (ev.type === 'mouseenter') {
            $menuItem.addClass('hover-open')
          } else {
            $menuItem.removeClass('hover-open')
          }
        }
      }
    } else {
      if (sidebarIconOnly || horizontalMenu) {
        if (ev.type === 'mouseenter') {
          $menuItem.addClass('hover-open')
        } else {
          $menuItem.removeClass('hover-open')
        }
      }
    }
  });

  // Horizontal menu toggle fuction for mobile
  $(".navbar.horizontal-layout .navbar-menu-wrapper .navbar-toggler").on("click", function () {
    $(".navbar.horizontal-layout").toggleClass("header-toggled");
  });

  $(function () {
    var body = $('body');
    
    //Close other submenu in sidebar on opening any
    $("#sidebar > .nav > .nav-item > a[data-toggle='collapse']").on("click", function () {
      $("#sidebar > .nav > .nav-item").find('.collapse.show').collapse('hide');
    });

    //Change sidebar and content-wrapper height
    applyStyles();

    function applyStyles() {
      //Applying perfect scrollbar
      if (!body.hasClass("rtl")) {
        if ($('.settings-panel .tab-content .tab-pane.scroll-wrapper').length) {
          const settingsPanelScroll = new PerfectScrollbar('.settings-panel .tab-content .tab-pane.scroll-wrapper');
        }
        if ($('.chats').length) {
          const chatsScroll = new PerfectScrollbar('.chats');
        }
        if ($('.scroll-container').length) {
          const ScrollContainer = new PerfectScrollbar('.scroll-container');
        }
        if (body.hasClass("sidebar-fixed")) {
          var fixedSidebarScroll = new PerfectScrollbar('#sidebar .nav');
        }
        if ($('.ps-enabled').length) {
          const psEnabled = new PerfectScrollbar('.ps-enabled');
        }
      }
    }

    $('[data-toggle="minimize"]').on("click", function () {
      if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
        body.toggleClass('sidebar-hidden');
      } else {
        body.toggleClass('sidebar-icon-only');
      }
    });

  });

  $('[data-toggle="tooltip"]').tooltip();

  $(".sidebar .sidebar-inner > .nav > .nav-item").not(".brand-logo").attr('toggle-status', 'closed');
  $(".sidebar .sidebar-inner > .nav > .nav-item").on('click', function () {
    $(".sidebar .sidebar-inner > .nav > .nav-item").removeClass("active");
    $(this).addClass("active");
    $(".sidebar .sidebar-inner > .nav > .nav-item").find(".submenu").removeClass("open");
    $(".sidebar .sidebar-inner > .nav > .nav-item").not(this).attr('toggle-status', 'closed');
    var toggleStatus = $(this).attr('toggle-status');
    if (toggleStatus == 'closed') {
      $(this).find(".submenu").addClass("open");
      $(this).attr('toggle-status', 'open');
    } else {
      $(this).find(".submenu").removeClass("open");
      $(this).not(".brand-logo").attr('toggle-status', 'closed');
    }
  });

})(jQuery);
