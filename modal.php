<style media="screen">
.form-block-sign {
  max-width: 100%;
  -webkit-box-shadow: 0 0 12px rgb(0 0 0 / 6%);
  box-shadow: 0 0 12px rgb(0 0 0 / 6%);
}

.modal-content {
    border: 0px solid rgba(0,0,0,.2);
}
.input-text-org{
  display: block;
width: 85%;
height: calc(1.5em + .75rem + 2px);
padding: .375rem .75rem;
font-size: 23px;
font-weight: 400;
line-height: 1.5;
color: #232323;
background-color: #000;
background-clip: padding-box;
border: 0px solid #ced4da;
border-bottom: 3px solid #232323;
border-radius: 0;
transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
margin:0px;
margin-bottom:20px;
}
.input-text-sub{
  font-size: 23px;
    margin-top: 17px;
    margin-left: 10px;
}
/* PC */
@media (min-width: 992px){
.btn-close-box{
  font-size: 31px !important;
color: #fff !important;
background: #6a26da !important;
border-radius: 40px !important;
line-height: 34px !important;
top: 0px !important;
right: -70px !important;
left: auto !important;
z-index: 100 !important;
position: absolute !important;
opacity: 1;
}
}

@media only screen and (max-width: 480px) {
  .btn-close-box{
    font-size: 31px !important;
  color: #fff !important;
  background: #6a26da !important;
  border-radius: 40px !important;
  line-height: 34px !important;
  top: -66px !important;
  right: -0px !important;
  left: auto !important;
  z-index: 100 !important;
  position: absolute !important;
  opacity: 1;
  }

}

.dark-color{
  background-color: #232323 !important;
  border-color: #232323;
}

.dark-color:hover{
  background-color: #232323 !important;
  border-color: #232323;
}
</style>

<div class="modal fade" id="modal-signin">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<button type="button" class="btn-close btn-close-box btn-primary" data-bs-dismiss="modal" aria-label="Close">X</button>

<div class="modal-body" style="padding:0px;">
  <div class="row g-0 h-100">
    <div class="col-lg-12 align-self-center p-sm-5 p-4">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <form class="row">
            <div class="section-title m-0">
              <span class="sub-title">WEB3 PASS</span>
              <h2 class="title">정보를 입력해 주세요.</h2>
              <p class="">항목과 정보를 입력 후 잠금 여부를 선택해 주세요.<br>잠금 정보는 등록자의 승인이 있어야 확인 가능힙니다.</p>
            </div>
            <!-- <div class="form-group col-md-12">
              <label class="label">
                  <span data-langNum='register_1'>Email Address</span>

                  <input class="form-control" type="email" id="id-forget-email" name="id-forget-email"
                         placeholder="" aria-label="Email address">
              </label>
            </div> -->
            <!-- <div class="col-md-6">
              <div class="form-group select-border">
                <select class="form-control">
                  <option value="1" selected="selected">선택하기</option>
                  <option value="3">Belts</option>
                  <option value="4">Chair</option>
                  <option value="2">Stick</option>
                </select>
              </div>
            </div> -->
            <div class="row" id="id-add-0">
            <div class="form-group col-md-1">
              <button type="button" class='btn btn-danger w-100 mb-3' style="padding: 12px 11px;border-radius: 6px;">
                <i class="fas fa-unlock text-white w-100" style="font-size:15px;"></i></button>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="id-key-0" placeholder="항목">
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-7">
              <input type="text" class="form-control" id="id-val-0" placeholder="정보">
              <span class="focus-border"></span>
            </div>
            </div>

            <div class="row" id="id-add-1">
            <div class="form-group col-md-1">
              <button type="button" class='btn btn-danger w-100 mb-3' style="padding: 12px 11px;border-radius: 6px;">
                <i class="fas fa-unlock text-white w-100" style="font-size:15px;"></i></button>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="id-key-1" placeholder="항목">
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-7">
              <input type="text" class="form-control" id="id-val-1"  placeholder="정보">
              <span class="focus-border"></span>
            </div>
            </div>
     



            <div id="box">

            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary w-100 mb-3" onclick="add_textbox()">항목 추가하기</button>

            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-dark w-100 mb-3" onclick="remove()">항목 삭제하기</button>

            </div>

            

            <div class="col-md-12">
            
              <button type="button" id="id-btn-aes" class="btn btn-success w-100 mb-3" 
              data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" 
              onclick="data_aes();">정보 암호화하기</button>
            </div>
            <div class="col-md-12">
            <button class="btn btn-warning w-100 mb-3" id="id-btn-save-load" style="display:none;" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="false"></span>
              블록체인에 저장 중입니다
            </button>
              <button type="button" id="id-btn-save" class="btn btn-warning w-100 mb-3" style="display:none;" onclick="data_save();">블록체인 저장하기</button>
              <!-- <strong class="text-dark font-weight-normal">Transaction hash : </strong><span class="hashTd" id="id-tx-data"></span> -->
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>



</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-join">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<button type="button" class="btn-close btn-close-box btn-primary" data-bs-dismiss="modal" aria-label="Close">X</button>

<div class="modal-body" style="padding:0px;">
  <div class="row g-0 h-100">
    <div class="col-lg-12 align-self-center p-sm-5 p-4">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <form class="row">
            <div class="section-title m-0">
              <span class="sub-title">WEB3 PASS 정보 선택</span>
              <h3 class="title">제공할 정보를 선택해 주세요.</h3>
              <p class="">가입할 사이트에 제공할 정보 선택 시 제공되는 정보는 암호화되어 승인 없이는 확인이 불가합니다.</p>
            </div>
            <div class="row" >
            <div class="form-group col-md-1">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 35px;
    margin-left: -22px;
    margin-top: 7px;">
                <label class="form-check-label ps-1" for="exampleCheck1"></label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control"  placeholder="항목" value="이름" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="id-val-join-0" placeholder="변경할 정보" value="" readonly>
              <span class="focus-border"></span>
            </div>
            </div>

            <div class="row" >
            <div class="form-group col-md-1">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 35px;
    margin-left: -22px;
    margin-top: 7px;">
                <label class="form-check-label ps-1" for="exampleCheck1"></label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control"  placeholder="항목" value="주소" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="id-val-join-1" placeholder="변경할 정보" value="" readonly>
              <span class="focus-border"></span>
            </div>
            </div>

            <div class="row" >
            <div class="form-group col-md-1">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 35px;
    margin-left: -22px;
    margin-top: 7px;">
                <label class="form-check-label ps-1" for="exampleCheck1"></label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control"  placeholder="항목" value="혈액형" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="id-val-join-2" placeholder="변경할 정보" value="A" readonly>
              <span class="focus-border"></span>
            </div>
            </div>

            <div class="row" >
            <div class="form-group col-md-1">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 35px;
    margin-left: -22px;
    margin-top: 7px;">
                <label class="form-check-label ps-1" for="exampleCheck1"></label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control"  placeholder="항목" value="우편번호" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="id-val-join-3" placeholder="변경할 정보" value="68501" readonly>
              <span class="focus-border"></span>
            </div>
            </div>

            <div class="row" >
            <div class="form-group col-md-1">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 35px;
    margin-left: -22px;
    margin-top: 7px;">
                <label class="form-check-label ps-1" for="exampleCheck1"></label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control"  placeholder="항목" value="이메일" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="id-val-join-3" placeholder="변경할 정보" value="jade.jeong@rocio.io" readonly>
              <span class="focus-border"></span>
            </div>
            </div>

            <div class="row" >
            <div class="form-group col-md-1">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 35px;
    margin-left: -22px;
    margin-top: 7px;">
                <label class="form-check-label ps-1" for="exampleCheck1"></label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control"  placeholder="항목" value="COMPANY" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="id-val-join-4" placeholder="변경할 정보" value="ROCIO CO.,Ltd." readonly>
              <span class="focus-border"></span>
            </div>
            </div>

      
            <div class="col-md-12">
            
              <button type="button" class="btn btn-primary w-100 mb-3" 
              data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" 
              onclick="join_send();">정보 제공하고 가입하기</button>
            </div>



          </form>
        </div>
      </div>
    </div>
  </div>



</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-modify">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<button type="button" class="btn-close btn-close-box btn-primary" data-bs-dismiss="modal" aria-label="Close">X</button>

<div class="modal-body" style="padding:0px;">
  <div class="row g-0 h-100">
    <div class="col-lg-12 align-self-center p-sm-5 p-4">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <form class="row">
            <div class="section-title m-0">
              <span class="sub-title">WEB3 PASS 정보 수정</span>
              <h2 class="title">정보를 변경해 주세요.</h2>
              <p class="">항목과 정보를 입력 후 잠금 여부를 선택해 주세요.<br>잠금 정보는 등록자의 승인이 있어야 확인 가능힙니다.</p>
            </div>
            <div class="row" id="id-add-0">
            <div class="form-group col-md-1">
              <button type="button" class='btn btn-danger w-100 mb-3' style="padding: 12px 11px;border-radius: 6px;">
                <i class="fas fa-unlock text-white w-100" style="font-size:15px;"></i></button>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control"  placeholder="항목" value="주소" readonly>
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-7">
              <input type="text" class="form-control" id="id-val-mod-0" placeholder="변경할 정보">
              <span class="focus-border"></span>
            </div>
            </div>

      
            <div class="col-md-12">
            
              <button type="button" id="id-btn-mod-aes" class="btn btn-success w-100 mb-3" 
              data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" 
              onclick="data_mod_aes();">정보 암호화하기</button>
            </div>
            <div class="col-md-12">
            <button class="btn btn-warning w-100 mb-3" id="id-btn-mod-load" style="display:none;" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="false"></span>
              블록체인에 저장 중입니다
            </button>
              <button type="button" id="id-btn-mod" class="btn btn-warning w-100 mb-3" style="display:none;" onclick="data_modify();">블록체인 저장하기</button>
              <!-- <strong class="text-dark font-weight-normal">Transaction hash : </strong><span class="hashTd" id="id-tx-data"></span> -->
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>



</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-code">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<button type="button" class="btn-close btn-close-box btn-primary" data-bs-dismiss="modal" aria-label="Close">X</button>

<div class="modal-body" style="padding:0px;">
  <div class="row g-0 h-100">
    <div class="col-lg-12 align-self-center p-sm-5 p-4">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <form class="row">
            <div class="section-title m-0">
              <span class="sub-title">WEB3 PASS NFC 인증</span>
              <h2 class="title">NFC 인증 코드를 입력해 주세요</h2>
              <p class="">NFC 소유자 전화번호로 인증번호가 전송되었습니다.<br>정확한 코드번호를 입력해 주세요.</p>
            </div>
            <div class="row" id="id-add-0">
            <div class="form-group col-md-12">
              <input type="number" class="form-control" id="id-val-code-0" placeholder="인증 코드 입력">
              <span class="focus-border"></span>
            </div>
            <div class="form-group col-md-12">
              <button type="button" onclick="code_chk();" class='btn btn-danger w-100 mb-3' style="padding: 12px 11px;border-radius: 6px;">
                코드 인증하기</button>
            </div>
            </div>

      
            <!-- <div class="col-md-12">
            
              <button type="button" id="id-btn-mod-aes" class="btn btn-success w-100 mb-3" 
              data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" 
              onclick="data_mod_aes();">정보 암호화하기</button>
            </div>
            <div class="col-md-12">
            </div> -->


          </form>
        </div>
      </div>
    </div>
  </div>



</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-forget-pw">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>

            <div class="modal-body" style="padding:0px;">


                <div class="form-block form-block-validation form-block-sign">

                    <div class="form-block-container">
                        <h1 class="form-block-sign-logo dark-color" style="color:#fff;">
                          <span data-langNum='sign_1'>PARROT</span>
                        </h1>
                        <p class="form-block-sign-message" data-langNum='register_11'>
                          Please enter your email address. After email verification is complete, you can set a new password.
                        </p>
                        <form method="post" action="#" class="row form-block-sign-form">
                            <div id="id-forget-mail-box" class="row">
                                <div class="col-md-8">
                                    <label class="label">
                                        <span data-langNum='register_1'>Email Address</span>

                                        <input class="form-control" type="email" id="id-forget-email" name="id-forget-email"
                                               placeholder="" aria-label="Email address">
                                    </label>
                                    <div id="forget_message_e"
                                         style="margin-top:-20px; margin-bottom:15px; margin-left: 5px; font-size:14px;"></div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" id="id-forget-send" class="btn btn-dark btn-block"
                                            style="margin-top: 36px;">
                                        <span data-langNum='register_10'>CODE SEND</span>
                                    </button>
                                </div>
                            </div>


                            <div class="row" id="id-forget-validation" style="display:none;">
                                <div class="col-md-8">
                                    <label class="label">
                                        <span data-langNum='register_7'>Email Validation Code</span>

                                        <input class="form-control" type="number" id="id-forget-email2"
                                               name="id-forget-email2" aria-label="Email address">
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" id="id-forget-send2" class="btn btn-accent btn-block"
                                            style="margin-top: 36px;">
                                        <span data-langNum='register_8'>CONFIRM</span>
                                    </button>
                                </div>
                            </div>

                            <div id="id-new-pw-box" style="display:none;">
                              <div class="col-md-12">
                                  <label class="label">
                                      <span data-langNum='register_9'>NEW Password</span>

                                      <input class="form-control" type="password" id="id-forget-pw1" name="id-forget-pw1">
                                  </label>
                              </div>
                              <div class="col-md-12">
                                  <label class="label">
                                      <span data-langNum='register_4'>Confirm Password</span>

                                      <input class="form-control" type="password" id="id-forget-pw2" name="id-forget-pw2">
                                  </label>
                                  <div id="forget_message_pw"
                                       style="margin-top:0px; margin-bottom:15px; margin-left: 5px; font-size:14px;"></div>
                              </div>

                              <div class="col-lg-12">
                                  <button type="button" id="id-forget-btn" class="btn btn-dark btn-block"
                                          style="border-color: #232323;">
                                      <span data-langNum='register_12'>Password Change</span>
                                  </button>
                              </div>
                            </div>

                        </form>

                        <div class="form-block-sign-footer">
                            <a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal"
                               data-bs-target="#modal-signin" data-langNum='register_6'>Login</a>
                            <!-- <a href="pages-lost-password.html">Lost your password?</a> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-signup">

<div class="modal-dialog modal-dialog-centered">

<div class="modal-content">

<button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>

<div class="modal-body" style="padding:0px;">


  <div class="form-block form-block-validation form-block-sign">

  <div class="form-block-container">
    <h1 class="form-block-sign-logo dark-color" style="color:#fff;">
          PARROT
    </h1>

  <form method="post" action="#" class="row form-block-sign-form">


<div class="row">
  <div class="col-md-8">
    <label class="label" >
      <span data-langNum='register_1'>Email Address</span>

    <input class="form-control" type="email" id="id-join-email" name="id-join-email" placeholder="" aria-label="Email address">
    </label>
    <div id="message_e" style="margin-top:-20px; margin-bottom:15px; margin-left: 5px; font-size:14px;"></div>
  </div>
  <div class="col-md-4">
    <button type="button" id="id-join-send" class="btn btn-accent btn-block" style="margin-top: 36px;">
    <span data-langNum='register_2'>SEND</span>
    </button>
  </div>
</div>





  <div class="row" id="id-m-validation"  style="display:none;">
  <div class="col-md-8">
    <label class="label">
      <span data-langNum='register_7'>Email Validation Code</span>

    <input class="form-control" type="number" id="id-join-email2" name="id-join-email2" aria-label="Email address">
    </label>
  </div>
  <div class="col-md-4">
    <button type="button" id="id-join-send2" class="btn btn-accent btn-block" style="margin-top: 36px;">
    <span data-langNum='register_8'>CONFIRM</span>
    </button>
  </div>
  </div>


  <div class="col-md-12">
  <label class="label" >
    <span data-langNum='register_3'>Password</span>

  <input class="form-control" type="password" id="id-pw1" name="id-pw1">
  </label>
  </div>
  <div class="col-md-12">
  <label class="label" >
    <span data-langNum='register_4'>Confirm Password</span>

  <input class="form-control" type="password" id="id-pw2" name="id-pw2">
  </label>
  <div id="message_pw" style="margin-top:0px; margin-bottom:15px; margin-left: 5px; font-size:14px;"></div>
  </div>
  <div class="col-md-12" style="padding-top:5px; margin-bottom: 30px;">
    <div class="checkbox">
            <label style="padding-left: 3px;">
              <input onclick="reg_agree_chk();" id="reg_term_agree" name="reg_term_agree" type="checkbox" value="">
              <span class="cr" style="margin-right:20px;"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
              <span style="font-size:16px; color:#777; margin-left: -10px;" data-langNum='reg_agree'>I have read and agree to the
                <a href="#" target="_blank" style="color:blue;">Terms of Use</a> and <a href="#" target="_blank" style="color:blue;">Privacy Policy.</a>
              </span>
              <!-- <span style="font-size:16px; color:#777; margin-left: -10px;" data-langNum='wd_agree'>위 주의사항을 모두 읽었으며, 전환 신청에 동의합니다.</span> -->
            </label>
    </div>
    <!-- <div style="text-align:center; margin-top:20px; ">
      <span onclick="location.href='terms/terms.php';" style="font-size: 14px; border-bottom:1px solid #999; color:#999; padding-bottom:1px; ">서비스 약관</span> <img onclick="location.href='terms/terms.php';" src="assets/images/icon_right.png" style="width:13px;" >
      <span onclick="location.href='terms/privacy.php';" style="font-size: 14px; border-bottom:1px solid #999; color:#999; padding-bottom:1px; margin-left:10%;">개인정보 취급방침</span> <img onclick="location.href='terms/privacy.php';" src="assets/images/icon_right.png" style="width:13px;" >
    </div> -->

  </div>

  <input type="hidden" id="id-recom" name="id-recom" >
  <div class="col-lg-12">
  <!-- <button type="button" id="id-join-btn" class="btn btn-accent btn-block dark-color" style="border-color: #232323;">
  <span data-langNum='register_5'>REGISTER</span>
  </button> -->
  <button type="button" id="id-join-btn" class="btn btn-dark gray-color btn-block" style="border-color: #232323;" disabled>
  <span data-langNum='register_5'>REGISTER</span>
  </button>
  </div>
  </form>

  <div class="form-block-sign-footer">
    <a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#modal-signin" data-langNum='register_6'>Login</a>
  <!-- <a href="pages-lost-password.html">Lost your password?</a> -->
  </div>
  </div>
  </div>







</div>
</div>
</div>
</div>


<!-- EDIT PROFILE -->
<div class="modal fade" id="modal-edit-profile">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header" style="font-weight:bold; font-size:24px; color:#292929;">
    Edit Profile
    </div>
<!-- <button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button> -->
<div class="modal-body" style="padding:0px;">
  <div class="form-block form-block-validation form-block-sign" style="margin-bottom: 0px;">
  <div class="form-block-container">

  <form id="id-edit-form" method="post" action="#" class="row form-block-sign-form">
<div class="row" id="id-upload-box">
  <div class="col-md-8">
    <label class="label">
    <span data-langNum='edit_0'>Profile Image</span>
    <input class="form-control" type="file" id="id-edit-file" name="id-edit-file" accept="image/*" placeholder="">
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
    <input type="hidden" name="mode" value="uploads" />
    </label>
  </div>
  <div class="col-md-4">
    <button type="button" id="id-edit-img-send" onclick="img_upload();" class="btn btn-accent btn-block" style="margin-top: 36px;">
    <span data-langNum='edit_1'>REGISTER</span>
    </button>
  </div>
</div>
  <div class="col-md-12">
  <label class="label">
  <span data-langNum='edit_2'>User Name</span>
  <input class="form-control" type="text" id="id-edit-name" name="id-edit-name" value="<?=$nick_name;?>">
  </label>
  </div>
  <div class="col-md-12">
  <label class="label">
    <span data-langNum='edit_3'>Bio</span>
  <textarea class="form-control" rows="3" id="id-edit-bio" name="id-edit-bio"><?=$profile_comment;?></textarea>
  </label>
  </div>

  <div class="col-md-12">
  <label class="label">
    <span data-langNum='edit_4'>Web site</span>
  <input class="form-control" type="text" id="id-edit-web" name="id-edit-web" value="<?=$web_link;?>" placeholder="http:// or https://">
  </label>
  </div>
  <div class="col-md-12">
  <label class="label">
    <span data-langNum='edit_5'>Twitter</span>
  <input class="form-control" type="text" id="id-edit-twitter" name="id-edit-twitter" value="<?=$twitter_link;?>" placeholder="@">
  </label>
  </div>
  <div class="col-md-12">
  <label class="label">
  <span data-langNum='edit_6'>Instagram</span>
  <input class="form-control" type="text" id="id-edit-insta" name="id-edit-insta" value="<?=$insta_link;?>" placeholder="Instagram Username">
  </label>
  </div>
  <div class="col-md-12">
  <label class="label">
  <span data-langNum='edit_7'>Youtube</span>
  <input class="form-control" type="text" id="id-edit-youtube" name="id-edit-youtube" value="<?=$youtube_link;?>" placeholder="Channel URL">
  </label>
  </div>


  <div class="col-lg-6">
  <button type="button" data-bs-dismiss="modal" aria-label="Close"  class="btn btn-dark btn-outline btn-block" style="border-color: #232323;">
  <span data-langNum='close'>CLOSE</span>
  </button>
  </div>
  <div class="col-lg-6">
  <button type="button" onclick="data_modify_ok();" class="btn btn-accent btn-block dark-color" style="border-color: #232323;">
  <span data-langNum='edit_9'>SAVE</span>
  </button>
  </div>

  <div class="col-md-12">
    <button type="button" onclick="member_del();" class="btn btn-danger btn-block" style="">
    <span data-langNum='mem_del_btn'>Membership Withdrawal</span>
    </button>
  </div>

  </form>
  </div>
  </div>
</div>
</div>
</div>
</div>

<!-- MVR LIST -->
<div class="modal fade" id="modal-mvr-list">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header" style="font-weight:bold; font-size:24px; color:#292929;">
  <span id="">MVR Cash History</span>
    <button type="button" class="btn-close btn-close-inbox" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

<div class="modal-body" style="">
  <ul id="id-mvr-list" class="icon-list bordered-list grey-2-color-border">
  <li class="cursor-p" onclick="profile_move(1);">
      <img
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  </ul>
</div>
</div>
</div>
</div>


<!-- followers -->
<div class="modal fade" id="modal-follow-list">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header" style="font-weight:bold; font-size:24px; color:#292929;">
  <span id="id-follow-title">Followers</span>
    <button type="button" class="btn-close btn-close-inbox" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

<div class="modal-body" style="">
  <ul id="id-follow-list" class="icon-list bordered-list grey-2-color-border">
  <li class="cursor-p" onclick="profile_move(1);">
      <img
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  </ul>
</div>
</div>
</div>
</div>


<!-- 출금 신청 -->
<div class="modal fade" id="modal-withdraw">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header" style="font-weight:bold; font-size:24px; color:#292929;">
    <span data-langNum='profile_6'></span>
    </div>
<!-- <button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button> -->
<div class="modal-body" style="padding:0px;">
  <div class="form-block form-block-validation form-block-sign" style="margin-bottom: 0px;">
  <div class="form-block-container">

  <form id="id-withdraw-form" method="post" action="#" class="row form-block-sign-form">

  <div class="col-md-12">
  <label class="label">
  <span data-langNum='wd_1'>출금 가능 수량</span>
  <input class="form-control" type="text" id="id-wd-my-amount" name="id-wd-my-amount" value="<?=$my_mvr;?>" readonly>
  </label>
  </div>
  <div class="col-md-12">
  <label class="label">
    <span data-langNum='wd_2'>송금 받을 MVR 지갑 주소</span>
    <input class="form-control" type="text" id="id-wd-address" name="id-wd-address" value="">
  </label>
  </div>

  <div class="col-md-12">
  <label class="label">
  <span data-langNum='wd_3'>출금 신청 수량</span>
  <input class="form-control" type="text" id="id-wd-amount" name="id-wd-amount">
  </label>
  </div>

  <div class="col-md-12" style="padding-top:5px; margin-top: 20px; margin-bottom: 10px;">

    <div class="col-md-12 form-group label-floating" style="margin-bottom:0px; font-size:16px; color:#e0485e  ;">
      <span data-langNum='wd_notice'></span>
        <!-- ※ 주 의 사 항 ※<br><br>
        1. 송금 받을 MVR 지갑 주소 오기로 인한 송금 오류에 관하여 당사에서는 책임지지 않습니다.<br><br>
        2. 전환 신청 후 14일 간 유예 후 영업일에 등록한 송금 주소로 MVR 토큰이 송금됩니다.<br><br>
        3. 14일 간 유예 후 송금일이 토,일,공휴일일 경우 다음 영업일에 송금됩니다.<br><br>
        4. 전환 신청한 건에 관해서 전환 신청 취소가 불가합니다. <br><br> -->
    </div>
  </div>

  <div class="col-md-12" style="padding-top:5px; margin-bottom: 30px;">
    <div class="checkbox">
            <label style="padding-left: 3px;">
              <input onclick="agree_chk();" id="term_agree" name="term_agree" type="checkbox" value="">
              <span class="cr" style="margin-right:20px;"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
              <span style="font-size:16px; color:#777; margin-left: -10px;" data-langNum='wd_agree'>위 주의사항을 모두 읽었으며, 전환 신청에 동의합니다.</span>
            </label>
    </div>
    <!-- <div style="text-align:center; margin-top:20px; ">
      <span onclick="location.href='terms/terms.php';" style="font-size: 14px; border-bottom:1px solid #999; color:#999; padding-bottom:1px; ">서비스 약관</span> <img onclick="location.href='terms/terms.php';" src="assets/images/icon_right.png" style="width:13px;" >
      <span onclick="location.href='terms/privacy.php';" style="font-size: 14px; border-bottom:1px solid #999; color:#999; padding-bottom:1px; margin-left:10%;">개인정보 취급방침</span> <img onclick="location.href='terms/privacy.php';" src="assets/images/icon_right.png" style="width:13px;" >
    </div> -->

  </div>
<input type="hidden" name="transfer_code" id="transfer_code">

  <div class="col-lg-6">
  <button type="button" data-bs-dismiss="modal" aria-label="Close"  class="btn btn-dark btn-outline btn-block" style="border-color: #232323;">
  <span data-langNum='close'>CLOSE</span>
  </button>
  </div>
  <div class="col-lg-6">
  <button type="button" id="withdrawBtn" onclick="withdraw_ok();" class="btn gray-color btn-block" style="border-color: #232323;" disabled>
  <span data-langNum='profile_6'>Withdraw</span>
  </button>
  </div>

  <!-- <div class="col-md-12">
    <button type="button" onclick="member_del();" class="btn btn-danger btn-block" style="">
    <span>Membership Withdrawal</span>
    </button>
  </div> -->
  </form>
  </div>
  </div>
</div>
</div>
</div>
</div>

<!-- 오퍼 모달 -->
<input type="hidden" id="id-modal-offer" data-bs-toggle="modal" data-bs-target="#modal-offer">
<div class="modal fade" id="modal-offer">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>
<div class="modal-body" style="padding:0px; color:#333;">
  <div class="form-block form-block-validation form-block-sign">
  <div class="form-block-container">
    <h1 class="form-block-sign-logo dark-color" style="color:#fff; text-align:left;">
            Make an Offer
    </h1>
  <form method="post" action="#" class="row form-block-sign-form">
    <!-- <div class="col-md-12" style="font-size:40px; margin-top:20px;  font-weight:bold;margin-bottom:40px;  ">
    Make an Offer
    </div> -->
    <div class="col-md-12" style="font-size:15px; font-weight:300; margin-bottom:20px;  ">
      <!-- you are about to purchase imagination from a bag -->
      <!-- <span style="font-weight:bold;"><?=$nft_title;?></span> 작품 경매에 입찰하시려면 최고 입찰가보다 최소 10% 높은 ETH로 응찰해 주세요. -->
    </div>

    <!-- <div class="col-md-12" style="margin-top: 40px; margin-bottom: 40px; text-align: center; font-size:24px;">
      Current Price
      <div style="font-weight:900;margin-top:10px;">
      <span id="id_top_price">  0 <?=$crcy_txt;?> </span>
        ≈ <span id="id_won_price"> ￦ 0 </span>
      </div>
    </div> -->
      <div class="form-group col-md-12" style="display:inline-flex;">
        <input type="number" class="input-text-org" name="offer_price" id="offer_price" placeholder="Amount" >
        <div class="input-text-sub" style="text-align:right;"> <?=$crcy_txt;?></div>
      </div>

      <div class="row" style="display:flex; font-size:18px;">
          <div class="col-md-6">
            My Balance
          </div>
          <div class="col-md-6" id="id_my_eth_of" style="text-align:right;">
             0 <?=$crcy_txt;?>
          </div>
      </div>

      <div class="col-md-12" style="padding-top:5px; margin-top: 20px; margin-bottom: 10px;">

        <div class="col-md-12 form-group label-floating" style="margin-bottom:0px; font-size:16px; color:#e0485e  ;">
          <span data-langNum='offer_notice'></span>
            <!-- ※ 주 의 사 항 ※<br><br>
            1. 경매 낙찰 시 24시간 이내 구매하지 않을 경우 경매 참가가 제한됩니다.<br><br>
            2. 1순위 낙찰자가 구매하지 않을 경우 2순위에게 구매 기회가 주어집니다.<br> -->
        </div>
      </div>
      <div class="col-lg-12" style="margin-top:40px; ">
      <button type="button" id="id_send_btn2" onclick="offer_send();" class="btn btn-info btn-outline-reverse btn-block" style=" font-size: 18px; display:none;">
      <span>Make Offer</span>
      </button>
      </div>
  </form>


  </div>
  </div>
</div>
</div>
</div>
</div>
<!-- 오퍼 모달 -->

<!-- 경매 모달 -->

<!-- <input type="hidden" id="modal_auction_clk" data-toggle="modal" data-target="#auctionModal">
<input type="hidden" id="modal_auction_close" data-dismiss="modal" aria-label="Close"> -->

<div class="modal fade" id="modal-auction">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>
<div class="modal-body" style="padding:0px; color:#333;">
  <div class="form-block form-block-validation form-block-sign">
  <div class="form-block-container">
  <form method="post" action="#" class="row form-block-sign-form">
    <div class="col-md-12" style="font-size:40px; margin-top:20px;  font-weight:bold;margin-bottom:40px;  ">
      Auction Bid
    </div>
    <div class="col-md-12" style="font-size:15px; font-weight:300; margin-bottom:20px;  ">
      <!-- you are about to purchase imagination from a bag -->
      <!-- <span style="font-weight:bold;"><?=$nft_title;?></span> 작품 경매에 입찰하시려면 최고 입찰가보다 최소 10% 높은 ETH로 응찰해 주세요. -->
    </div>

    <div class="col-md-12" style="margin-top: 40px; margin-bottom: 40px; text-align: center; font-size:24px;">
      Current Price
      <div style="font-weight:900;margin-top:10px;">
      <span id="id_top_price">  0 <?=$crcy_txt;?> </span>
        ≈ <span id="id_won_price"> ￦ 0 </span>
      </div>
    </div>
    <!-- <div class="col-md-12" style="margin-top: 40px; margin-bottom: 40px; text-align: center; font-size:24px; display:;">
      즉시 구매가
      <div style="font-weight:900;margin-top:10px;">
      <span id="id_buy_price">  0 ETH </span>
        ≈ <span id="id_won_price3"> ￦ 0 </span>
      </div>

    </div> -->


      <div class="form-group col-md-12" style="display:inline-flex;">
        <input type="number" class="input-text-org" name="ac_price" id="ac_price" placeholder="Enter your bid" >
        <div class="input-text-sub" style="text-align:right;"> <?=$crcy_txt;?></div>
      </div>
      <div id="id_ac_chg_box" style="font-size:18px; margin-bottom: 20px; display:none;">
          <div class="col-md-12">
            ≈ <span id="id_won_price2"> ￦ 0 </span>
          </div>
      </div>
      <div class="row" style="display:flex; font-size:18px;">
          <div class="col-md-6">
            My Balance
          </div>
          <div class="col-md-6" id="id_my_eth" style="text-align:right;">
             0 <?=$crcy_txt;?>
          </div>
      </div>

      <div class="col-md-12" style="padding-top:5px; margin-top: 20px; margin-bottom: 10px;">

        <div class="col-md-12 form-group label-floating" style="margin-bottom:0px; font-size:16px; color:#e0485e  ;">
          <span data-langNum='auc_notice'></span>
            <!-- ※ 주 의 사 항 ※<br><br>
            1. 경매 낙찰 시 24시간 이내 구매하지 않을 경우 경매 참가가 제한됩니다.<br><br>
            2. 1순위 낙찰자가 구매하지 않을 경우 2순위에게 구매 기회가 주어집니다.<br> -->
        </div>
      </div>

      <!-- <div style="display:flex; font-size:18px;">
          <div class="col-md-6">
             OWNER ADDR.
          </div>
          <div class="col-md-6" id="id_owner_addr" style="text-align:right; overflow-x:hidden; ">
                <?=substr( $nft_owner, 0 ,10 )."...";?>
          </div>
      </div> -->
      <!-- <input type="hidden"  id="form_idx" name="form_idx" >

      <input type="hidden"  id="nft_idx" name="nft_idx" >
      <input type="hidden"  id="auction_krw" name="auction_krw" >
      <input type="hidden"  id="max_eth" name="max_eth" >
      <input type="hidden"  id="my_eth" name="my_eth" >

      <input type="hidden"  id="sub_date" name="sub_date" > -->


      <div class="col-lg-12" style="margin-top:40px; ">
      <button type="button" id="id_send_btn" onclick="auction_send();" class="btn btn-accent btn-block dark-color" style="border-color: #232323; font-size: 18px; display:none;">
      <span>Place a bid</span>
      </button>
      </div>
  </form>


  </div>
  </div>
</div>
</div>
</div>
</div>



<!-- 아이템 상세페이지 Owners -->
<div class="modal fade" id="modal-owner-list">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header" style="font-weight:bold; font-size:24px; color:#292929;">
    Owned by
    </div>
<button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>
<div class="modal-body" style="">
  <!-- <ul class="icon-list bordered-list grey-2-color-border"> -->
  <ul id="id-md-owner-list" class="icon-list bordered-list grey-2-color-border">
    <!-- No Owner -->

  <!-- <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li> -->
  </ul>
</div>
</div>
</div>
</div>


<!-- 아이템 상세페이지 favorites -->
<div class="modal fade" id="modal-favor-list">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header" style="font-weight:bold; font-size:24px; color:#292929;">
    Favorited by
    </div>
<button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>
<div class="modal-body" style="">
  <ul id="id-md-favor-list" class="icon-list bordered-list grey-2-color-border">
  <!-- <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e3ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">NFT Supper Genesis</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li>
  <li>
      <img onclick="location.href='profile'"
      src="https://source.boringavatars.com/bauhaus/26/0x18c6a47aca1c6a237e53ed2fc3a8fb392c976b?colors=E3DC28,F2018A,306DFF,0F3DA9,C9C9CFg" alt="Avatar" class="rounded-circle" />
      <span style="margin-left:5px; color:#292929; font-weight:500;">Santa</span>
    <div style="margin-left:35px;font-size:14px;margin-top: -5px;">
      0x52df..1df
    </div>
  </li> -->
  </ul>
</div>
</div>
</div>
</div>


<!-- 팝업 기본 세트  -->
<!-- 외부 호출용 input -->
<input type="hidden" id="id-modal-popup" data-bs-toggle="modal" data-bs-target="#modal-popup">
                      <!-- 고유 ID 지정 -->                              <!-- 아래의 타겟 ID 지정 -->

<!-- 팝업창 구성 내용 -->
<div class="modal fade" id="modal-popup">
                         <!-- 타겟 ID -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 21px;">
      <button type="button" class="btn-close btn-close-box" data-bs-dismiss="modal" aria-label="Close">X</button>
      <div class="modal-body" style="padding:0px;">
        <img onclick="banner_move('<?=$popupLink;?>');" src="<?=$popupImg;?>" alt="POPUP" style="width:100%;border-radius: 21px;"/>
        <!-- <img src="https://d1kuymu336tpg5.cloudfront.net/nft/awss3_9V0QAC" alt="POPUP" style="width:100%;border-radius: 21px;"/> -->


                  <!-- 여기 이미지 URL 변경 -->
      </div>
    </div>
  </div>
</div>
<!-- 팝업창 구성 내용 -->

<!-- 외부에서 팝업 호출 시  -->
<!-- 스크립트 구문에서 고유 ID 클릭 코드 작성 아래 참조 -->
<!-- $('#id-modal-popup').click(); -->
<!-- 메인페이지에서 호출 시 main-page.js의 ready 구문에 코드 작성 -->

<!-- 팝업 기본 세트 -->


<input type="hidden" id="id-modal-follower" data-bs-toggle="modal" data-bs-target="#modal-follow-list">
<input type="hidden" id="id-modal-mvr" data-bs-toggle="modal" data-bs-target="#modal-mvr-list">
<input type="hidden" id="id-modal-favorite" data-bs-toggle="modal" data-bs-target="#modal-favor-list">
<input type="hidden" id="id-modal-owners" data-bs-toggle="modal" data-bs-target="#modal-owner-list">

<input type="hidden" id="id-modal-auction" data-bs-toggle="modal" data-bs-target="#modal-auction">
<input type="hidden" id="id-modal-withdraw" data-bs-toggle="modal" data-bs-target="#modal-withdraw">

<input type="hidden" id="id-modal-join" data-bs-toggle="modal" data-bs-target="#modal-join">
<input type="hidden" id="id-modal-code" data-bs-toggle="modal" data-bs-target="#modal-code">
