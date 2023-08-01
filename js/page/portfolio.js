jQuery(document).ready(function($) {
    $("#id-menu3").addClass("active");
  
    $('#modal-modify').click();
  
    setTimeout(() => {
        data_call();
    }, 500);
  });

  var lastIdx = 1;