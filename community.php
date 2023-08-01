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




<!--=================================
header -->
<?php include 'header.php' ?>
<!--=================================
header -->

<!--=================================
header-inner -->
<section class="page-header" style="padding-bottom:200px;">
  <div class="container">
      <div class="row justify-content-center text-center">
          <div class="col-lg-7">
              <h1>서비스 커뮤니티</h1>
              <p class="lead">WEB3 PASS로 가입한 서비스들의 커뮤니티에 자유롭게 참여하고, 소통해 보세요.</p>
          </div>
      </div>
  </div>
</section>
<!--=================================
header-inner -->
<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div><h2>보유 중인 서비스 SBT</h2></div>
        <div class="owl-carousel our-clients clients-shadow" data-nav-arrow="false" data-items="5" data-md-items="5" data-sm-items="4" data-xs-items="3" data-xx-items="1" data-space="30" data-autoheight="true" data-autospeed="4000">
          <div class="item">
            <a href="#"><img class="img-fluid clients-logo" src="images/client/01.svg" alt=""></a>
          </div>
          <div class="item">
            <a href="#"><img class="img-fluid clients-logo" src="images/client/02.svg" alt=""></a>
          </div>
          <div class="item">
            <a href="#"><img class="img-fluid clients-logo" src="images/client/03.svg" alt=""></a>
          </div>
          <div class="item">
            <a href="#"><img class="img-fluid clients-logo" src="images/client/04.svg" alt=""></a>
          </div>
          <div class="item">
            <a href="#"><img class="img-fluid clients-logo" src="images/client/05.svg" alt=""></a>
          </div>
          <div class="item">
            <a href="#"><img class="img-fluid clients-logo" src="images/client/06.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Blog -->
<section class="space-pb">
  <div class="container">
    <div class="row">
    <!-- <div><h2>참여 가능한 서비스 안건</h2></div> -->
      <div class="col-md-4 mb-5 mb-md-4">
        <div class="blog bg-white shadow-sm border-0">
          <img class="img-fluid" src="images/blog/01.jpg" alt="">
          <svg  class="blog-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
            <path class="" fill="#ffffff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
            <!-- Card body start -->
            <div class="card-body p-4 pt-0">
              <a class="mb-0 font-weight-normal" href="#">AMAZON</a>
              <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">It Does More. It Costs Less. It’s that Simple</a></h4>
              <hr>
              <div class="d-flex">
                <a class="text-dark me-3 small" href="#"> <i class="far fa-clock text-primary me-1"></i>Feb 20, 2023 </a>
                <a class="text-dark me-3 small" href="#"> <i class="far fa-comment-alt text-primary me-1"></i>13 comment </a>
                <a class="text-dark small" href="#"> <i class="far fa-heart text-primary me-1"></i>16 Like </a>
              </div>
            </div>
            <!-- Card body end -->
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-4">
          <div class="blog position-relative bg-primary p-4 h-100">
            <div class="blog-title pb-5 pb-lg-0">
              <a class="badge badge-dark bg-dark px-3 py-2" href="#">Focus</a>
              <h4 class="mt-3"><a class="d-block text-white" href="#">Five Reasons Why You Must Create A Website For Your Company</a></h4>
              <p class="text-white">Give yourself the power of responsibility. Remind yourself the only thing.</p>
            </div>
            <div class="card-footer p-0 border-0 bg-transparent position-absolute bottom-0 pb-4">
              <div class="d-flex align-items-center">
                <img class="img-fluid avatar-img avatar avatar-sm rounded-circle" src="images/avatar/02.jpg" alt="">
                <div class="ms-3">
                  <span class="d-block text-white">Paul Flavius, Head, <small class="font-weight-light">15 days to go </small> </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-4">
          <div class="blog bg-white shadow-sm border-0">
            <img class="img-fluid" src="images/blog/02.jpg" alt="">
            <svg  class="blog-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
              <path class="" fill="#ffffff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
              <!-- Card body start -->
              <div class="card-body p-4 pt-0">
                <a class="mb-0 font-weight-normal" href="#">Google</a>
                <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">How Google’s BERT Algorithm Affects Your Website Traffic</a></h4>
                <hr>
                <div class="d-flex">
                  <a class="text-dark me-3 small" href="#"> <i class="far fa-clock text-primary me-1"></i>Jan 10, 2023 </a>
                  <a class="text-dark me-3 small" href="#"> <i class="far fa-comment-alt text-primary me-1"></i>12 comment </a>
                  <a class="text-dark small" href="#"> <i class="far fa-heart text-primary me-1"></i>20 Like </a>
                </div>
              </div>
              <!-- Card body end -->
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="blog bg-white shadow-sm border-0">
              <img class="img-fluid" src="images/blog/03.jpg" alt="">
              <svg  class="blog-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
                <path class="" fill="#ffffff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
                <!-- Card body start -->
                <div class="card-body p-4 pt-0">
                  <a class="mb-0 font-weight-normal" href="#">Creative</a>
                  <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">From A Small Startup To A Leading Global Agency In 12 Years</a></h4>
                  <hr>
                  <div class="d-flex">
                    <a class="text-dark me-3 small" href="#"> <i class="far fa-clock text-primary me-1"></i>Mar 14, 2023 </a>
                    <a class="text-dark me-3 small" href="#"> <i class="far fa-comment-alt text-primary me-1"></i>13 comment </a>
                    <a class="text-dark small" href="#"> <i class="far fa-heart text-primary me-1"></i>16 Like </a>
                  </div>
                </div>
                <!-- Card body end -->
              </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="blog bg-white shadow-sm border-0">
              <img class="img-fluid" src="images/blog/04.jpg" alt="">
              <svg  class="blog-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
                <path class="" fill="#ffffff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
                <!-- Card body start -->
                <div class="card-body p-4 pt-0">
                  <a class="mb-0 font-weight-normal" href="#">Startups</a>
                    <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">You discover it has no rudder. What happens?</a></h4>
                  <hr>
                  <div class="d-flex">
                      <a class="text-dark me-3 small" href="#"> <i class="far fa-clock text-primary me-1"></i>June 16, 2023 </a>
                      <a class="text-dark me-3 small" href="#"> <i class="far fa-comment-alt text-primary me-1"></i>20 comment </a>
                      <a class="text-dark small" href="#"> <i class="far fa-heart text-primary me-1"></i>15 Like </a>
                    </div>
                </div>
                  <!-- Card body end -->
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="blog bg-white shadow-sm border-0">
                <img class="img-fluid" src="images/blog/05.jpg" alt="">
                  <svg  class="blog-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
                  <path class="" fill="#ffffff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
                    <!-- Card body start -->
                  <div class="card-body p-4 pt-0">
                      <a class="mb-0 font-weight-normal" href="#">Design</a>
                  <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">This time is used also to put things in their places</a></h4>
                      <hr>
                  <div class="d-flex">
                    <a class="text-dark me-3 small" href="#"> <i class="far fa-clock text-primary me-1"></i>Oct 30, 2022 </a>
                    <a class="text-dark me-3 small" href="#"> <i class="far fa-comment-alt text-primary me-1"></i>14 comment </a>
                    <a class="text-dark small" href="#"> <i class="far fa-heart text-primary me-1"></i>26 Like </a>
                </div>
              </div>
            <!-- Card body end -->
          </div>
        </div>
    </div>
  </div>
</section>
<!--=================================
Blog -->

<!--=================================
footer-->
<svg  class="blog-shape mt-xl-5 mt-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
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
  <script src="js/page/community.js"></script>

</body>
</html>
