jQuery(document).ready(function($) {
  $("#id-menu2").addClass("active");

  $('#modal-signin').click();


});

var lastIdx = 2;
function add_textbox(){

    const box = document.getElementById("box");
    const newP = document.createElement('div');
    newP.innerHTML =
    '<div class="row" id="id-add-'+lastIdx+'"><div class="form-group col-md-1">'
    +'  <button type="button" class="btn btn-danger w-100 mb-3" style="padding: 12px 11px;border-radius: 6px;">'
    +'    <i class="fas fa-unlock text-white w-100" style="font-size:15px;"></i></button>'
    +'</div>'
    +"<div class='form-group col-md-4'>"
    +"<input type='text' class='form-control' id='id-key-"+lastIdx+"' placeholder='항목'>"
    +"              <span class='focus-border'></span>"
    +"            </div>"
    +"            <div class='form-group col-md-7'>"
    +"                          <input type='text' class='form-control' id='id-val-"+lastIdx+"' placeholder='정보'>"
    +"                          <span class='focus-border'></span>"
    +"                        </div></div>";
    // +"<div class='form-group col-md-2'>  <input type='button' class='btn btn-danger w-100 mb-3' value='삭제' onclick='remove(this)'></div></div>";
    box.appendChild(newP);
    lastIdx++;

}
function remove(){
  document.getElementById('id-add-'+lastIdx).remove();
}
