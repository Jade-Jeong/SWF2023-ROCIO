jQuery(document).ready(function($) {
    // $('#id-modal-join').click();
    
    UserAgent = navigator.userAgent;
    if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
    {
      setTimeout(() => {
        data_nfc_call();
      }, 500);
  }else{//PC
    setTimeout(() => {
      data_call();
    }, 500);
    }
    
 
    
  });


  function join_send(){
    alert("SWF2023 도서관 회원 가입이 완료 되었습니다.");

    location.href="sign-up";
  }