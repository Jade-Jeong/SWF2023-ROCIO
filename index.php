<?php
session_start();
  include 'db/db_connect.php';

if($_SESSION['user_account']=="") {
  $logchk = 0;
} else {
  $logchk = 1;
}
// phpinfo();
// $user_email =  AESEncrypt("3084love@naver.com");
// echo $user_email;
//
// echo AESDecrypt("gc8iNExawFvaD0KNOWf5l1UzOy/OYDW1T4E6ByB4uig=");
//
// exit;
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
Banner -->
<section class="banner banner-03 position-relative overflow-hidden">
  <span class="position-absolute right-0 top-0 z-index-n1 mr-n1 d-none d-md-block">
    <svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="1917.888" height="949.954" viewBox="0 0 1920 951">
      <path d="M-0.912,452.270 L225.079,819.393 C225.079,819.393 325.286,985.619 530.067,944.435 L1920.011,746.369 L2018.007,729.363 L2196.000,-199.948 L1441.030,-228.958 L-64.910,-355.000 C-64.910,-355.000 -154.214,-172.939 -150.906,-165.937 C-147.599,-158.934 -87.909,420.260 -87.909,420.260 L-0.912,452.270 Z" class="fill-light"/>
    </svg>
      </span>
    <div id="main-slider" class="container h-950 h-md-700 h-sm-auto ">
        <div class="row align-items-center justify-content-center h-100">
          <div class=" col-lg-6">
            <div class="contant pt-0 pt-md-5 mt-0 mt-sm-4">
              <h1 class="mb-4">Connect With Us <span class="banner-logo mt-3">
                WEB3 PASS
              </span></h1>
            <div class="align-items-center mt-4">
              <p>
WEB3 Pass 서비스 하나로 쇼핑몰, 게임, 명함, 이력서, 자격증 등<br>
나의 정보를 직접 소유하고 관리할 수 있습니다.
                <!-- You can manage information such as shopping malls, games, business cards, resumes, and certificates with one WEB3 Pass service. -->
              </p>
              <div class="d-flex align-items-center info-box-03">
                <i class="fa fa-check icon-lg"></i>
                <p>내가 소유한 정보를 가입할 사이트에 직접 제공합니다.</p>
                </div>
                <div class="d-flex align-items-center info-box-03 mt-0 pt-0">
                <i class="fa fa-check icon-lg"></i>
                <p>WEB3 PASS에서 가입한 사이트 정보를 관리할 수 있습니다.</p>
              </div>
            </div>
            <div class="align-items-center mt-3">
              <a href="#" class="btn btn-primary" onclick="sign_meta();">시작하기<span></span></a>
              <a href="#" class="ms-sm-2 ms-0 btn btn-dark">더 알아보기</a>
            </div>
          </div>
        </div>
          <div class=" col-lg-6 mt-5 mt-lg-0">
             <div class="banner-img">
                <img class="img-fluid" src="images/about/img-03.png" alt="">
              </div>
          </div>
      </div>
  </div>
</section>
<!--=================================
Banner -->

<!--=================================
Awesome features -->
<section class="space-ptb bg-white">
  <div class="container position-relative">
    <div class="position-absolute top-0 start-0">
      <img class="img-fluid" src="images/svg/shape-07.svg" alt="">
    </div>
    <div class="row">
      <div class="col-lg-6 ">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-lg-6 col-md-5 z-index-9 mb-4 mb-md-0">
            <div class="feature-info rounded">
              <div class="feature-icon">
                <i class="flaticon-gear-1 text-white rounded"></i>
              </div>
              <h6 class="my-3 fw-bold">Awesome Stickers</h6>
              <p class="mb-0">Have some fun and hypnotize yourself to be your plan to be very own for you.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 z-index-9">
            <div class="feature-info mb-4 rounded">
              <div class="feature-icon">
                <i class="flaticon-youtube text-white bg-danger rounded"></i>
              </div>
              <h6 class="my-3 fw-bold">Video Chat</h6>
              <p class="mb-0">Ghost of Christmas future and see what the future you are holds for you..</p>
            </div>
            <div class="feature-info rounded">
              <div class="feature-icon">
                <i class="flaticon-phone text-white bg-success rounded"></i>
              </div>
              <h6 class="my-3 fw-bold">Conference Call</h6>
              <p class="mb-0">Success isn’t really that difficult. There is a significant portion in North Americayou are .</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ps-lg-5 ps-3 mt-5 mt-lg-0 align-self-center">
        <div class="section-title">
          <h6 class="sub-title text-primary">Best To Provides</h6>
          <h2 class="title">Who We Are And What We Do Get To Know Us Better.</h2>
          <p>Making a decision to do something this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
              <ul class="list list-unstyled">
                <li class="d-flex mb-4"><i class="fas fa-check pt-1 text-primary"></i><span>For those of you who are serious about having more.</span></li>
                <li class="d-flex mb-4"><i class="fas fa-check pt-1 text-primary"></i><span>Before you make that decision, we are going to see.</span></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list list-unstyled">
                <li class="d-flex mb-4"><i class="fas fa-check pt-1 text-primary"></i><span>Success is something of which we all want more.</span></li>
                <li class="d-flex mb-4"><i class="fas fa-check pt-1 text-primary"></i><span> You want to make a decision and commit to one.</span></li>
              </ul>
            </div>
          </div>
        <a href="#" class="btn btn-primary mt-3">Get Started <i class="fa fa-angle-right ps-3"></i></a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Awesome features -->

<!--=================================
about -->
<section class="space-pb">
  <div class="container position-relative">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0 position-relative">
        <img class="img-fluid vert-move" src="images/bg/16.png" alt="">
      </div>
      <div class="col-lg-6 ps-3 ps-lg-5">
        <div class="section-title">
          <h6 class="sub-title text-primary">good start</h6>
          <h2 class="title">Stay on track simply through willpower.</h2>
          <p>What is the exact sequence of events that will take you to where you want to be Have a think consciously of what.</p>
        </div>
        <div class="row mb-4">
          <div class="col-md-4 col-6">
            <span class="fs-1 text-dark">100%</span>
            <h6>Satisfaction</h6>
          </div>
          <div class="col-md-4 col-6">
            <span class="fs-1 text-dark">24/7</span>
            <h6>Support</h6>
          </div>
        </div>
        <a href="#" class="btn btn-primary mt-3">Read more <i class="fa fa-angle-right ps-3"></i></a>
      </div>
    </div>
  </div>
</section>
<!--=================================
about -->

<!--=================================
Portfolio -->
<section class="space-pt bg-light">
  <div class="container">
    <div class="row mb-5 mb-md-4 align-items-center">
      <div class="col-xl-6">
        <div class="section-title">
          <h6 class="sub-title text-primary">Our Works</h6>
          <h2 class="title">Let's have a look at what creativity is!</h2>
        </div>
      </div>
      <div class="col-xl-6">
        <p>This is the beginning of creating the life that you want to live. Know what the future holds for you as a result of the choice you can make today.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="portfolio portfolio-style-01">
          <div class="portfolio-img portfolio-lg">
      			<img class="img-fluid" src="images/portfolio/small/01.jpg" alt="">
          </div>
          <div class="portfolio-info">
            <a class="portfolio-title font-weight-bold text-primary" href="#">During Team Meeting</a>
            <a class="portfolio-services text-dark mb-0" href="#">Marketing</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio portfolio-style-01">
          <div class="portfolio-img portfolio-lg">
      			<img class="img-fluid" src="images/portfolio/small/02.jpg" alt="">
          </div>
            <div class="portfolio-info">
              <a class="portfolio-title font-weight-bold text-primary" href="#">Team work</a>
              <a class="portfolio-services text-dark mb-0" href="#">Studio</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio portfolio-style-01">
          <div class="portfolio-img portfolio-lg">
      			<img class="img-fluid" src="images/portfolio/small/03.jpg" alt="">
          </div>
          <div class="portfolio-info">
            <a class="portfolio-title font-weight-bold text-primary" href="#">Group Activities</a>
            <a class="portfolio-services text-dark mb-0" href="#">Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio portfolio-style-01">
          <div class="portfolio-img portfolio-lg">
      			<img class="img-fluid" src="images/portfolio/small/04.jpg" alt="">
          </div>
          <div class="portfolio-info">
            <a class="portfolio-title font-weight-bold text-primary" href="#">Empty Office</a>
            <a class="portfolio-services text-dark mb-0" href="#">Music</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio portfolio-style-01">
            <div class="portfolio-img portfolio-lg">
      			<img class="img-fluid" src="images/portfolio/small/05.jpg" alt="">
            </div>
            <div class="portfolio-info">
              <a class="portfolio-title font-weight-bold text-primary" href="#">Hero scene mockup</a>
              <a class="portfolio-services text-dark mb-0" href="#">Web Design</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="portfolio portfolio-style-01">
          <div class="portfolio-img portfolio-lg">
      			<img class="img-fluid" src="images/portfolio/small/06.jpg" alt="">
          </div>
          <div class="portfolio-info">
            <a class="portfolio-title font-weight-bold text-primary" href="#">Group Activities</a>
            <a class="portfolio-services text-dark mb-0" href="#">Marketing</a>
          </div>
        </div>
      </div>
     <div class="col-12 text-center mt-3 mt-md-5">
      <a href="#" class="btn btn-primary">View All out wrok</a>
      <p class="mt-2 small">Contact us to discuss the goals for your brand</p>
    </div>
    </div>
  </div>
</section>
<!--=================================
Portfolio -->



<!--=================================
testimonial -->
<section class="space-ptb">
  <div class="container position-relative z-index-9">
    <div class="row g-0 align-items-center">
      <div class="col-md-6 pe-md-5 pe-0">
        <img class="img-fluid" src="images/bg/15.png" alt="">
      </div>
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="section-title">
            <h6 class="sub-title text-primary">Our testimonial</h6>
            <h2 class="title">What Our Happy Clients say about us</h2>
          </div>
        <div class="owl-carousel testimonial testimonial-style-01 text-left" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
          <div class="item">
            <div class="quote">
              <i class="fas fa-quote-left fa-4x"></i>
            </div>
            <div class="testimonial-item rounded ps-0 pt-0">
              <div class="testimonial-content">
                <div class="rating mb-3">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                  </ul>
                </div>
                <p class="mb-4">It's exactly what I've been looking for. The service was excellent. I don't know what else to say. Not able to tell you how happy I am with Saaskit.</p>
              </div>
              <div class="testimonial-info">
                <div class="testimonial-author">
                  <h6 class="author-name">- John Deo.</h6>
                  <span class="author-designation">Product Designer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote">
              <i class="fas fa-quote-left fa-4x"></i>
            </div>
            <div class="testimonial-item rounded ps-0 pt-0">
              <div class="testimonial-content">
                <div class="rating mb-3">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                    <li><i class="fas fa-star text-warning"></i></li>
                  </ul>
                </div>
                <p class="mb-4">Thanks to Saaskit, we've just launched our 5th website! I would gladly pay over 600 dollars for Saaskit. Keep up the excellent work. Really good.</p>
              </div>
              <div class="testimonial-info">
                <div class="testimonial-author">
                  <h6 class="author-name">- Fern W.</h6>
                  <span class="author-designation">CEO</span>
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
testimonial -->



<!--=================================
blog -->
<section class="space-pt">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-10">
        <div class="section-title text-center">
          <h6 class="sub-title text-primary">Our Latest Blog</h6>
          <h2 class="title">Latest News And Inspirational Stories</h2>
          <p>Have some fun and hypnotize yourself to be your very own “Ghost of Christmas future” and see what the future holds for you.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="blog-02">
          <div class="blog-img">
            <img class="img-fluid rounded" src="images/blog/01.jpg" alt="">
          </div>
          <!-- Card body start -->
          <div class="card-body">
            <a class="badge bg-danger" href="#">Startups</a>
            <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">From A Small Startup To A Leading Global Agency In 12 Years</a></h4>
            <p>Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.</p>
          </div>
          <!-- Card body end -->
          <div class="blog-info">
            <div class="blog-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/01.jpg" alt="">
            </div>
            <div class="blog-author">
              <h6 class="author-name">- Fern W.</h6>
              <span class="author-designation">Developer</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="blog-02">
          <div class="blog-img">
            <img class="img-fluid rounded" src="images/blog/02.jpg" alt="">
          </div>
          <!-- Card body start -->
          <div class="card-body">
            <a class="badge bg-warning" href="#">Startups</a>
            <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">Five Reasons Why You Must Create A Website Your Company</a></h4>
            <p>Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.</p>
          </div>
          <!-- Card body end -->
          <div class="blog-info">
            <div class="blog-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/02.jpg" alt="">
            </div>
            <div class="blog-author">
              <h6 class="author-name">- Paul Flavius.</h6>
              <span class="author-designation">CEO</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-02">
          <div class="blog-img">
            <img class="img-fluid rounded" src="images/blog/03.jpg" alt="">
          </div>
          <!-- Card body start -->
          <div class="card-body">
            <a class="badge bg-primary" href="#">Startups</a>
            <h4 class="font-weight-normal mt-2"><a class="text-dark" href="blog-single-image.html">How Google’s BERT Algorithm Affects Your Website Traffic</a></h4>
            <p>Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.</p>
          </div>
          <!-- Card body end -->
          <div class="blog-info">
            <div class="blog-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/03.jpg" alt="">
            </div>
            <div class="blog-author">
              <h6 class="author-name">- Josepha N</h6>
              <span class="author-designation">Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
blog -->

<!--=================================
Cal To Action -->
<section class="action-box-style-01">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="justify-content-between align-items-center rounded p-5 bg-holder" style="background-image: url(images/bg/04.png);">
          <div class="section-title text-center">
            <h6 class="sub-title text-white">Cal to action</h6>
            <h2 class="title text-white">Are you ready for a better & more business?</h2>
          </div>
          <form class="form-row row d-flex mb-0 mt-4">
            <div class="col-md-4 col-12 mb-3 mb-md-0 me-lg-3">
              <input type="email" class="form-control round" placeholder="User name">
            </div>
            <div class="col-md-4 col-12 mb-3 mb-md-0 me-lg-3">
              <input type="email" class="form-control round" placeholder="name@example.com">
            </div>
            <div class="col-md-3 col-12 d-grid">
              <button type="submit" class="btn btn-dark">Try for free</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Cal To Action -->

<?php include 'footer.php' ?>

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
  <script src="js/page/main.js"></script>

</body>
</html>
