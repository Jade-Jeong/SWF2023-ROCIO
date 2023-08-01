jQuery(document).ready(function($) {
    // $('#id-modal-join').click();
    if(global_php_act!=""){
        alert("NFC 소유자 전화번호로 인증번호가 전송 되었습니다.");
        $('#id-modal-code').click();
    }
  });


  function join_send(){
    alert("SWF2023 도서관 회원 가입이 완료 되었습니다.");

    location.href="sign-up";
  }

  function code_chk(){
    alert("인증이 완료되었습니다.");
    $('.btn-close').click();
    $('#id-modal-join').click();
    data_nfc_call();

  }