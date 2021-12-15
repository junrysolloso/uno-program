$(document).ready(function(){

  const fields = '<div class="col-12 border-top pt-4 household_container__fields" style="margin-top: 1.5rem!important;"><div class="row"><div class="col-lg-4 col-md-6 col-sm-12"><div class="form-group m-0"><small class="form-text text-muted">Complete name</small> <input type="text" name="member_complete_name[]" class="form-control"><div class="input-helper"></div></div></div><div class="col-lg-4 col-md-6 col-sm-12"><div class="form-group m-0"><small class="form-text text-muted">Date of birth</small> <input type="text" name="member_birth_date[]" class="form-control member_birth_date" data-inputmask-inputformat="yyyy-mm-dd"><div class="input-helper"></div></div></div><div class="col-lg-4 col-md-6 col-sm-12"><div class="form-group m-0"><small class="form-text text-muted d-inline">Relationship</small> <small class="form-text text-danger household_minus float-right d-inline" style="cursor:pointer">Remove</small><select name="member_relationship[]" class="form-control select2" style="display:inline"><option value="son">Son</option><option value="daughter">Daughter</option><option value="mother">Mother</option><option value="father">Father</option><option value="brother">Brother</option><option value="guardian">Guardian</option><option value="cousing">Cousin</option></select> <div class="input-helper"></div></div></div></div></div>';
  $('.member_birth_date').inputmask({alias: 'datetime'});
  
  $('body').on('click', '#household_add_btn', function() {
    $('#household_container__add').append(fields);
    $('.select2').select2({width: '100%'});
    $('.member_birth_date').inputmask({alias: 'datetime'});
  });

  $('body').on('click', '.household_minus', function() {
    $(this).closest('.household_container__fields').remove();
  });

  //jSignature
  $("#signature__pad").jSignature({
    'decor-color': 'transparent',
  });
  
  $('#signature__reset').bind('click', function(){
    $("#signature__pad").jSignature('reset');
  });

  $("#signature__pad").bind('change', function(){
    var data = $(this).jSignature('getData','svg');
    $('input[name="person_signature"]').val(data[1]);
  });
    
});
