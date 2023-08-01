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

<?php include 'header.php' ?>

<!--=================================
header-inner -->
<section class="page-header bg-light position-relative pb-0">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7">
        <h1 class="mb-4">나의 정보</h1>
          <p class="lead mb-0">WEB3 PASS에 안전하게 저장되어 있는 정보, NFT 등 나의 포트폴리오입니다.</p>
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
Team -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="is-sticky">
        <div class="team bg-light p-3 pt-0 mb-4 rounded">
          <div class="team-img">
            <img class="img-fluid" src="images/team/10.jpg" alt="">
          </div>
          <div class="team-info clients-detail text-start">
            <h5 class="mb-3"><a href="#" class="team-name text-dark" id="id-name1"></a></h5>
             <ul class="list-unstyled mt-0">
              <li class="d-flex mb-3 mx-0">
                <strong class="text-dark me-2">성별 : </strong>남
              </li>
              <li class="d-flex mb-3 mx-0">
               <strong class="text-dark me-2"> 혈액형 : </strong>A형
              <li class="d-flex mb-3 mx-0">
               <strong class="text-dark me-2"> 전화번호 : </strong>010-0000-1111
              </li>
              <li class="d-flex mb-3 mx-0">
               <strong class="text-dark me-2"> 이메일 : </strong>jade.jeong@rocio.io
              </li>
              <li class="d-flex mb-3 mx-0">
               <strong class="text-dark me-2"> 주소 : </strong><span id="id-address1"></span>
              </li>
              <li class="d-flex mb-3 mx-0">
               <strong class="text-dark me-2"> Follow on : </strong>
                <div class="social">
                 <ul class="list-unstyled">
                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-pinterest-p"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-youtube"></i> </a></li>
                 </ul>
               </div>
              </li>
            </ul>
          </div>
         </div>
       </div>
      </div>
     <div class="col-md-8 mt-5 mt-md-0">

      <div class="col-xl-12">
        <div class="row no-gutters p-4">
          <div class="col-6">
            <h6 class="font-weight-normal mb-0 ">등록 정보 내역</h6>
          </div>
          <div class="col-6">
            <h6 class="font-weight-normal mb-0 ">카테고리</h6>
          </div>
        </div>
        <div class="row no-gutters bg-light rounded p-4 p-sm-5 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">우편번호</h6>
            <p class="mb-0">68501</p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-location-arrow pe-1"></i><span>배송 정보</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
            <a class="btn btn-success" href="#">정보 수정하기</a>
          </div>
        </div>
        <div class="row no-gutters rounded p-4 p-sm-5 my-4 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">COMPANY</h6>
            <p class="mb-0">ROCIO Co.,Ltd.</p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-building pe-1"></i><span>직장 정보</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
            <a class="btn btn-success" href="#">정보 수정하기</a>
          </div>
        </div>
        <div class="row no-gutters bg-light rounded p-4 p-sm-5 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">FIFA ONLINE4</h6>
            <p class="mb-0">veryverygood</p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-gamepad pe-1"></i><span>게임 정보</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
            <a class="btn btn-success" href="#">정보 수정하기</a>
          </div>
        </div>
        <div class="row no-gutters rounded p-4 p-sm-5 my-4 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">이름</h6>
            <p class="mb-0" id="id-name2"></p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-address-book pe-1"></i><span>개인 정보</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
            <a class="btn btn-success" href="#">정보 수정하기</a>
          </div>
        </div>
        <div class="row no-gutters bg-light rounded p-4 p-sm-5 mx-0">
          <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
            <h6 class="mb-0">주소</h6>
            <p class="mb-0" id="id-address2"></p>
          </div>
          <div class="col-md align-self-center">
            <i class="fa fa-address-book pe-1"></i><span> 개인 정보</span>
          </div>
          <div class="col-md align-self-center text-md-right mt-3 mt-md-0">
            <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-modify" href="#">정보 수정하기</a>
          </div>
        </div>
      </div>

     </div>
    </div>
  </div>
</section>
<!--=================================
Team -->

<!--=================================
Client -->
<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <div class="row mt-5 pt-5">
      <div class="col-lg-12 mb-3">
        <h3>지갑에 보유 중인 NFT</h3>
      </div>
      <div class="col-12">
        <div class="owl-carousel" data-nav-dots="true" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-xx-items="1">
          <div class="item">
            <div class="portfolio portfolio-style-01">
              <div class="portfolio-img portfolio-lg">
                <img class="img-fluid" src="https://d3kqfz1wbygykm.cloudfront.net/nft/nft_gp167L_1671293092622074" alt="">
              </div>
              <div class="portfolio-info">
                <a class="portfolio-title font-weight-bold text-primary" href="#">#5 Store Metaverse Item</a>
                <a class="portfolio-services text-dark mb-0" href="#">Store Metaverse items are NFTs that can be used for decoration in the ORDA service and can be freely traded.</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio portfolio-style-01">
              <div class="portfolio-img portfolio-lg">
                <img class="img-fluid" src="https://ipfs.io/ipfs/bafybeid5lpm7lgtcb3vseatz5n636dulw2y5upcf3i64uftgwgall5semq/316148968_643365127450478_6108098132252212675_n.jpg" alt="">
              </div>
              <div class="portfolio-info">
                <a class="portfolio-title font-weight-bold text-primary" target="_blank" href="https://sepolia.etherscan.io/tx/0x39c60449aa159d83a32a5c3a1cf75702a7cea158b37976bc1168ded830f99d39">#4 Store Metaverse Item</a>
                <a class="portfolio-services text-dark mb-0" target="_blank" href="https://sepolia.etherscan.io/tx/0x39c60449aa159d83a32a5c3a1cf75702a7cea158b37976bc1168ded830f99d39">Store Metaverse items are NFTs that can be used for decoration in the ORDA service and can be freely traded.</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio portfolio-style-01">
              <div class="portfolio-img portfolio-lg">
                <img class="img-fluid" src="https://d3kqfz1wbygykm.cloudfront.net/nft/nft_yuLl3n_1671290532497750" alt="">
              </div>
              <div class="portfolio-info">
                <a class="portfolio-title font-weight-bold text-primary" href="#">#1 Store Metaverse Item</a>
                <a class="portfolio-services text-dark mb-0" href="#">Store Metaverse items are NFTs that can be used for decoration in the ORDA service and can be freely traded.</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio portfolio-style-01">
              <div class="portfolio-img portfolio-lg">
                <img class="img-fluid" src="https://d3kqfz1wbygykm.cloudfront.net/nft/nft_TfVrCX_1671290777265324" alt="">
              </div>
              <div class="portfolio-info">
                <a class="portfolio-title font-weight-bold text-primary" href="#">#3 Store Metaverse Item</a>
                <a class="portfolio-services text-dark mb-0" href="#">Store Metaverse items are NFTs that can be used for decoration in the ORDA service and can be freely traded.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Client -->

<!--=================================
footer-->
<svg  class="blog-shape mt-sm-5 mt-0" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
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
  <script src="js/page/portfolio.js"></script>

</body>
</html>
