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
header -->
<?php include 'header.php' ?>
<!--=================================
header -->

<!--=================================
header-inner -->
<section class="page-header bg-primary position-relative">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7">
        <h1 class="text-white">가입한 사이트</h1>
        <p class="lead text-white">WEB3 PASS 사이트에서 가입한 사이트들을 한번에 관리할 수 있습니다.</p>
      </div>
    </div>
  </div>
</section>
<div class="w-100 mt-n2">
<svg xmlns="http://www.w3.org/2000/svg" width="1920" height="268.5" viewBox="0 0 1920 268.5">
  <defs>
  </defs>
  <path class="fill-primary" d="M0,0H1920V268.5L0,14.5V0Z"/>
</svg>
</div>
<!--=================================
header-inner -->

<!--=================================
job post strat -->
<section class="space-pb mt-n8 mt-lg-n10 mt-xl-n11">
  <div class="container">
    <div class="row justify-content-center position-relative">
      <div class="col-xl-8">
        <div class="row no-gutters p-4">
          <div class="col-6">
            <h6 class="font-weight-normal mb-0 text-white">가입한 서비스명</h6>
          </div>
          <div class="col-6">
            <h6 class="font-weight-normal mb-0 text-white">가입일자</h6>
          </div>
        </div>
        <div class="row no-gutters bg-light rounded p-4 p-sm-5 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">SWF2023 Festival</h6>
            <p class="mb-0">www.swf2023.com</p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-clock pe-1"></i><span>2023-08-01</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
            <a class="btn btn-danger" href="#">권한 삭제하기</a>
          </div>
        </div>
        <div class="row no-gutters rounded p-4 p-sm-5 my-4 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">crypto.com</h6>
            <p class="mb-0">www.crypto.com</p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-clock pe-1"></i><span>2023-07-31</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
          <a class="btn btn-danger" href="#">권한 삭제하기</a>
          </div>
        </div>
        <div class="row no-gutters bg-light rounded p-4 p-sm-5 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">Cronos</h6>
            <p class="mb-0">www.cronos.org</p>
          </div>
          <div class="col-md align-self-center">
          <i class="fa fa-clock pe-1"></i><span>2023-07-31</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
          <a class="btn btn-danger" href="#">권한 삭제하기</a>
          </div>
        </div>
        <div class="row no-gutters rounded p-4 p-sm-5 my-4 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">도서관</h6>
            <p class="mb-0">www.lib.io</p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-clock pe-1"></i><span>2023-07-29</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
          <a class="btn btn-danger" href="#">권한 삭제하기</a>
          </div>
        </div>
        <div class="row no-gutters bg-light rounded p-4 p-sm-5 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">ROCIO</h6>
            <p class="mb-0">www.rocio.io</p>
          </div>
          <div class="col-md align-self-center">
          <i class="fa fa-clock pe-1"></i><span>2023-07-28</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
          <a class="btn btn-danger" href="#">권한 삭제하기</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
job post end -->


<!--=================================
form strat -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
  </div>
</section>
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-lg-3">
        <div class="d-flex align-items-center info-box-02">
          <i class="fa fa-check text-primary icon-xl"></i>
          <h6>Virtual accounting</h6>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="d-flex align-items-center info-box-02">
          <i class="fa fa-check text-primary bg-warning icon-xl"></i>
          <h6>Tax preparation</h6>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="d-flex align-items-center info-box-02">
          <i class="fa fa-check text-white bg-success icon-xl"></i>
          <h6>Grow your business</h6>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="d-flex align-items-center info-box-02">
          <i class="fa fa-check text-white bg-danger icon-xl"></i>
          <h6>Financial planning</h6>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
form end -->

<!--=================================
footer-->
<svg  class="blog-shape mt-5" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
<path class="" fill="#f5f9ff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
<?php include 'footer.php' ?>
<?php include 'modal.php' ?>
<!--=================================
footer-->

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
  <script src="js/page/site.js"></script>


</body>
</html>
