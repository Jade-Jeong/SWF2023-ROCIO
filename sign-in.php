<?php

$act = $_GET['act'];
if($act=="0x5891537187c87b9FFC1fc6a9F4B5DEcE9407940a"){
  $_POST['msg'] =
  "[WEB3 PASS]\nNFC 정보 인증 문자입니다.\n\n951203";
  // 메세지 내용 : euc-kr로 치환이 가능한 문자열만 사용하실 수 있습니다. (이모지 사용불가능)
  $_POST['receiver'] = "01026028618"; // 수신번호
  $_POST['destination'] = ''; // 수신인 %고객명% 치환
  $_POST['sender'] ="07077551012"; // 발신번호
  $_POST['rdate'] = ''; // 예약일자 - 20161004 : 2016-10-04일기준
  $_POST['rtime'] = ''; // 예약시간 - 1930 : 오후 7시30분
  $_POST['testmode_yn'] = 'N'; // Y 인경우 실제문자 전송X , 자동취소(환불) 처리
  $_POST['subject'] = ''; //  LMS, MMS 제목 (미입력시 본문중 44Byte 또는 엔터 구분자 첫라인)
  // $_POST['image'] = '/tmp/pic_57f358af08cf7_sms_.jpg'; // MMS 이미지 파일 위치 (저장된 경로)
  $_POST['msg_type'] = ''; //  SMS, LMS, MMS등 메세지 타입을 지정
  // ※ msg_type 미지정시 글자수/그림유무가 판단되어 자동변환됩니다. 단, 개행문자/특수문자등이 2Byte로 처리되어 SMS 가 LMS로 처리될 가능성이 존재하므로 반드시 msg_type을 지정하여 사용하시기 바랍니다.
  /****************** 전송정보 설정끝 ***************/
  //테스트 후 주석 제거
  // include 'sms/curl_send.php';
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Saaskit- Landing Page Template for SaaS, Startup & Agency" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SWF2023 도서관</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Roboto:wght@300;400;500;700;900&display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/select2/select2.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/swiper/swiper.min.css" />
    <link rel="stylesheet" href="css/animate/animate.min.css"/>

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

  </head>
<body>

<!--=================================
Login -->
<section class="vh-100 sign-in">
  <div class="container-fluid h-100 p-0">
    <div class="row g-0 h-100">
      <div class="col-lg-6 col-xl-4 overflow-hidden position-relative d-lg-block d-none">
        <div class="sign-in-img">
          <img class="img-fluid" src="images/bg/14.png" alt="#">
        </div>
      </div>
      <div class="col-lg-6 align-self-center p-sm-5 p-4">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-10">
            <nav class="navbar navbar-static-top navbar-expand-lg header-sticky justify-content-between">
              <div style="font-size:40px; font-weight:900; color:#157347;margin-bottom:20px;">SWF2023 도서관</div>
              <!-- <a class="navbar-brand" href="index.html"><img class="img-fluid logo" src="images/logo.svg" alt="logo"></a> -->
            </nav>
            <div class="section-title m-0">
              <!-- <span class="sub-title">Welcome</span> -->
              <h2 class="title">Sign in to your Account</h2>
              <p class="">Sign in with your id or social media</p>
            </div>
            <form class="">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                <span class="focus-border"></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <span class="focus-border"></span>
              </div>
              <p>Forgot your password?</p>
              <button type="submit" class="btn btn-success w-100 mb-3">로그인</button>
              <button type="submit" class="btn w-100 mb-3" style="background:#fee500; color:#191600;">카카오 로그인</button>
              <!-- <img src="images/kakao_login.png" class="w-100 mb-3" alt=""> -->
              <button type="button" class="btn btn-primary w-100 mb-3" onclick="sign_meta();">WEB3 PASS 로그인</button>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label ps-1" for="exampleCheck1">Remember Me</label>
              </div>
              <hr>
              <p class="mt-2 mb-0">Don't have an account? <a href="sign-up.html"> Create one here</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Login -->

<!--=================================
Back To Top-->

<div id="back-to-top" class="back-to-top">
  <a href="#"> <i class="fas fa-angle-up"></i></a>
</div>
<?php include 'modal.php' ?>
<!--=================================
Back To Top-->

<!--=================================
Javascript -->
<script type="text/javascript">
var global_php_act="<?=$act;?>";
</script>
<script type="text/javascript">
  var login_chk = false;
   if('<?=$logchk;?>'==1){
     login_chk = true;
   }

 </script>
  <!-- JS Global Compulsory (Do not remove)-->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="js/jquery.appear.js"></script>
  <script src="js/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/swiper/swiper.min.js"></script>
  <script src="js/swiperanimation/SwiperAnimation.min.js"></script>



  <!-- Template Scripts (Do not remove)-->
  <script src="js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
  <script src="js/crypto.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ethereumjs/browser-builds/dist/ethereumjs-tx/ethereumjs-tx-1.3.3.min.js"></script>
  <script src="js/blockchain/truffle-contract-4.1.js"></script>
  <script src="js/blockchain/web3.min-3.0.js"></script>
  <script src="js/page/langs.js"></script>
  <script src="js/page/common.js"></script>
  <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
  <script type="text/javascript" src="js/blockchain/evm-chains-index.min.js"></script>
  <script type="text/javascript" src="js/blockchain/web3-provider.min.js"></script>
  <script src="js/page/metamask_total.js??<?= time() ?>"></script>
  <script src="js/page/signin.js??<?= time() ?>"></script>

</body>
</html>
