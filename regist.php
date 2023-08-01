<?php
session_start();
  include 'db/db_connect.php';

if($_SESSION['user_account']=="") {
  $logchk = 0;
} else {
  $logchk = 1;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="WEB3 PASS" />
    <meta name="description" content="WEB3 PASS" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WEB3 PASS</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Roboto:wght@300;400;500;700;900&display=swap">
    <link
  		href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i%7cOswald:300,400,500,600,700%7cPlayfair+Display:400,400i,700,700i"
  		rel="stylesheet"> -->

      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

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

<?php include 'header.php' ?>

<!--=================================
header-inner -->
<section class="page-header bg-light position-relative pb-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7">
        <h1 class="mb-4" style="letter-spacing:-3px; font-size:50px;">나의 정보 등록</h1>
        <p class="lead mb-0">다양한 형태의 나의 정보를 블록체인에 기록할 수 있으며,<br>모든 등록 정보는 암호화되어 저장됩니다.</p>
          <div class="form-search" style="margin-top:50px;">
          <div class="form-group mb-4 justify-content-center shadow">
              <input type="text" class="form-control round" placeholder="이용자들이 등록한 정보 타입 검색">
              <button type="submit" class="btn btn-primary btn-lg m-0">Search</button>
          </div>
          </div>

      </div>
    </div>
  </div>
</section>
<div class="w-100 mt-n1">
<svg xmlns="http://www.w3.org/2000/svg" width="1917" height="131.625" viewBox="0 0 1917 131.625">
  <defs>
  </defs>
  <path class="fill-light" d="M0,0.089s1.965,0.9,5.762,2.582C62.48,27.8,528.022,142.15,962,130.943c463.03-11.957,829.35-70.02,955-130.854" transform="translate(0 -0.094)"/>
</svg>
</div>
<!--=================================
header-inner -->

<!--=================================
Faqs -->
<section class="space-pb mt-md-n6">
  <div class="container">
 <div class="row justify-content-center">
  <div class="col-md-10 col-lg-8">
   <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-account-1 text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">개인 정보</h5>
        <p class="mb-0 mt-md-3">이름, 생년월일, 전화번호, 주소, 이메일, 성별, 키, 몸무게, 혈액형 등 개인 정보를 등록할 수 있습니다.
          <br>
          <font color="#6a26da" style="padding-top:10px;">
            ※개인 정보는 최고 보안 등급으로 등록자의 승인 없이 정보 확인이 불가합니다.
          </font> </p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-signin" href="#">개인 정보 등록하기</a>
      </div>
    </div>
    </div>
    <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-research text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">의료 정보</h5>
        <p class="mb-0 mt-md-3">지병, 복용약, 혈액형, 보호자 연락처, 의료 특이사항 등 의료 정보를 등록할 수 있습니다.
          <br>
          <font color="#6a26da" style="padding-top:10px;">
            ※의료 정보는 최고 보안 등급으로 긴급 시 의료 기관에 제공됩니다.
          </font>
         </p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" href="#">의료 정보 등록하기</a>
      </div>
    </div>
    </div>
    <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-bank text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">배송지 정보</h5>
        <p class="mb-0 mt-md-3">주소, 전화번호, 우편번호 등 쇼핑몰에서 배송에 필요한 정보를 등록할 수 있습니다.</p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" href="#">배송지 등록하기</a>
      </div>
    </div>
    </div>
   <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-briefcase text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">직장 정보</h5>
        <p class="mb-0 mt-md-3">회사명, 직급, 회사주소, 연락처 등 명함 정보를 등록할 수 있습니다.</p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" href="#">명함 등록하기</a>
      </div>
    </div>
    </div>

   <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-technology text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">게임 정보</h5>
        <p class="mb-0 mt-md-3">닉네임, 아이디, 레벨, 아이템, 게임머니 등 게임 정보를 등록할 수 있습니다.</p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" href="#">게임 정보 등록하기</a>
      </div>
    </div>
    </div>
    <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-portfolio text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">취업 정보</h5>
        <p class="mb-0 mt-md-3">증명사진, 이력서, 포트폴리오, 자기소개서 등 취업 정보를 등록할 수 있습니다.</p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" href="#">취업 정보 등록하기</a>
      </div>
    </div>
    </div>

    <div class="bg-white rounded shadow p-5 mb-4">
    <div class="row no-gutters">
      <div class="col-md-2 align-self-center">
       <i class="flaticon-travel text-primary display-3"></i>
      </div>
      <div class="col-md-6 align-self-center">
       <h5 class=" font-weight-normal my-3 my-md-0">취미 정보</h5>
        <p class="mb-0 mt-md-3">여행, 악기, 자전거, 등산, 드라이브, 운동, 사진 등 취미 정보를 등록할 수 있습니다.</p>
      </div>
      <div class="col-md-4 align-self-center text-md-end mt-3 mt-md-0">
        <a class="btn btn-success" href="#">취미 정보 등록하기</a>
      </div>
    </div>
    </div>

     <div class="row mt-5">
      <div class="col-12 text-center">
       <a class="btn btn-primary" href="#">Load More Access</a>
     </div>
    </div>
   </div>
 </div>
 </div>
</section>
<!--=================================
Faqs -->

<!--=================================
Faqs -->
<section class="space-pb">
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="section-title text-center">
        <h6 class="sub-title text-primary">Our Works</h6>
        <h2 class="title">Talk to our dedicated team for your queries</h2>
        <p>Understand what you want, why you want it and what it will do for you. This is a critical factor, and as such, is probably the most difficult step.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-4 mb-md-0">
     <div class="feature-info py-4 rounded text-center h-100">
        <div class="feature-icon mb-4">
          <i class="fas fa-phone-alt text-white bg-praimry rounded-circle"></i>
        </div>
        <h6 class="my-3 fw-bold">Contact Us</h6>
         <p class="mb-0">+0987 456 321</p>
         <p class="mb-0">+0123 456 789</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 mb-md-0">
     <div class="feature-info py-4 rounded text-center h-100">
        <div class="feature-icon mb-4">
          <i class="far fa-envelope text-white bg-danger rounded-circle"></i>
        </div>
        <h6 class="my-3 fw-bold">Email</h6>
        <p class="mb-0">letstalk@example.com</p>
      </div>
    </div>
   <div class="col-md-4">
     <div class="feature-info py-4 rounded text-center h-100">
        <div class="feature-icon mb-4">
          <i class="fas fa-paper-plane text-white bg-warning rounded-circle"></i>
        </div>
        <h6 class="my-3 fw-bold">Address</h6>
        <p class="mb-0">7850 Green Drive Brookfield, WI 53045</p>
      </div>
    </div>
  </div>
 </div>
</section>
<!--=================================
Faqs -->

<?php include 'footer.php' ?>
<?php include 'modal.php' ?>

<!--=================================
Back To Top-->

<div id="back-to-top" class="back-to-top">
  <a href="#"> <i class="fas fa-angle-up"></i></a>
</div>

<!--=================================
Back To Top-->

<!--=================================
Javascript -->

<script type="text/javascript">
var global_php_my_account="<?=$_SESSION['user_account'];?>";
</script>
  <!-- JS Global Compulsory (Do not remove)-->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"
          integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="js/select2/select2.full.js"></script>
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
  <script src="js/page/regist.js"></script>

</body>
</html>
