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
<section class="page-header">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7">
        <h1>Believing in yourself and those around you</h1>
        <p class="lead">Then it is just like any other process. So, know that what is the first step in any process?.</p>
      </div>
    </div>
  </div>
</section>
<!--=================================
header-inner -->

<!--=================================
Services -->
<section class="space-pb position-relative bg-light">
  <div class="position-absolute top-0 start-0 w-100">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,288L1440,64L1440,0L0,0Z"></path>
    </svg>
  </div>
  <div class="container">
    <div class="row position-relative">
      <div class="col-lg-4">
        <div class="section-title is-sticky">
          <span class="sub-title text-primary">Services</span>
          <h2 class="title">Powerful messaging builds better collaboration.</h2>
          <p>So, make the decision to move forward. Commit your decision to paper, just to bring it into focus. Then, go for it single most important!</p>
        </div>
      </div>
      <div class="col-lg-7 offset-lg-1">
        <div class="row">
          <div class="col-sm-6">
            <div class="feature-info py-5 rounded bg-primary-soft">
              <div class="feature-icon my-4">
              <img class="img-fluid clients-logo" src="images/client/02.svg" alt="">
                <!-- <i class="flaticon-gear-1 text-white bg-primary rounded-circle"></i> -->
                
              </div>
              <h6 class="my-3 fw-bold">Facilities Services</h6>
              <p class="mb-0">You are going on a cruise, but when the ship sets sail, you discover.</p>
            </div>
            <div class="feature-info py-5 rounded mt-4 bg-success-soft">
              <div class="feature-icon my-4">
                <i class="flaticon-technology text-white bg-success rounded-circle"></i>
              </div>
              <h6 class="my-3 fw-bold">Unlimited Products</h6>
              <p class="mb-0">You will sail along until you collide with an immovable object after.</p>
            </div>
            <div class="feature-info py-5 rounded mt-4 bg-light-soft">
              <div class="feature-icon my-4">
                <i class="flaticon-profit bg-light rounded-circle"></i>
              </div>
              <h6 class="my-3 fw-bold">Search Engine</h6>
              <p class="mb-0">Trying to go through life without clarity is similar to sailing a ship.</p>
            </div>
          </div>
          <div class="col-sm-6 mt-sm-5 mt-4">
            <div class="feature-info py-5 rounded bg-orange-soft">
              <div class="feature-icon my-4">
                <i class="flaticon-chart text-white bg-danger rounded-circle"></i>
              </div>
              <h6 class="my-3 fw-bold">Bookkeeping</h6>
              <p class="mb-0">The sad thing is the majority of people have no clue about what they want.</p>
            </div>
            <div class="feature-info py-5 rounded mt-4 bg-warning-soft">
              <div class="feature-icon my-4">
                <i class="flaticon-team text-dark bg-warning rounded-circle"></i>
              </div>
              <h6 class="my-3 fw-bold">CFO Advisory</h6>
              <p class="mb-0">So how do we get clarity? Simply by asking ourselves lots of questions.</p>
            </div>
            <div class="feature-info py-5 rounded mt-4 bg-info-soft">
              <div class="feature-icon my-4">
                <i class="flaticon-analytics text-dark bg-info rounded-circle"></i>
              </div>
              <h6 class="my-3 fw-bold">Tax</h6>
              <p class="mb-0">Introspection is the trick. Understand what you want, why you want it and what.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Services -->

<!--=================================
About us -->
<section class="space-pb bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img class="img-fluid" src="images/about/img-01.png" alt="">
      </div>
      <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
        <div class="section-title">
          <span class="sub-title text-primary">Services</span>
          <h2 class="title">This is what we do and we do it perfectly</h2>
          <p>Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.</p>
        </div>
        <ul class="list-unstyled mb-0">
          <li class="mb-3">
            <span class="badge badge-rounded-circle badge-primary-soft me-2">
              <i class="fa fa-check"></i>
            </span>
            Success is something of which we all want more.
          </li>
          <li class="mb-3">
            <span class="badge badge-rounded-circle badge-primary-soft me-2">
              <i class="fa fa-check"></i>
            </span>
            Most people believe that success is difficult.
          </li>
          <li class="mb-3">
            <span class="badge badge-rounded-circle badge-primary-soft me-2">
              <i class="fa fa-check"></i>
            </span>
            Understanding the price and having the to pay that price.
          </li>
          <li>
            <span class="badge badge-rounded-circle badge-primary-soft me-2">
              <i class="fa fa-check"></i>
            </span>
            Believing in yourself and those around you.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--=================================
About us -->

<!--=================================
features -->
<section class="bg-primary space-ptb position-relative">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <span class="sub-title text-white">Our testimonials</span>
          <h2 class="title text-white">Our customers love us!</h2>
          <p class="text-white">Imagine reaching deep inside you for all the strength and wisdom that you need to make this decision today.</p>
        </div>
      </div>
    </div>
    <div class="row position-relative z-index-9">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="testimonial-item rounded bg-white p-4">
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
            <p class="mb-4">We were treated like royalty. Needless to say we are extremely satisfied with the results. Thank you for making it painless.</p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/01.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Ara A.</h6>
              <span class="author-designation">Marketing</span>
            </div>
          </div>
        </div>
        <div class="testimonial-item rounded bg-white p-4 mt-4">
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
            <p class="mb-4">We were treated like royalty. Needless to say we are extremely satisfied with the results. Thank you for making it painless.</p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/02.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Sumner N.</h6>
              <span class="author-designation">Product Designer</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="testimonial-item rounded bg-white p-4 mt-4 mt-md-0">
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
            <p class="mb-4">We were treated like royalty. Needless to say we are extremely satisfied with the results. </p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/04.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Nev W.D95.</h6>
              <span class="author-designation">Product Designer</span>
            </div>
          </div>
        </div>
        <div class="testimonial-item rounded bg-white p-4 mt-4">
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
            <p class="mb-4">We were treated like royalty. Needless to say we are extremely satisfied with the results. </p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/04.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Hali D.</h6>
              <span class="author-designation">Product Designer</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="testimonial-item rounded bg-white p-4 mt-4 mt-lg-0">
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
            <p class="mb-4">For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do.</p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/08.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Scarlett D.</h6>
              <span class="author-designation">Product Designer</span>
            </div>
          </div>
        </div>
         <div class="testimonial-item rounded bg-white p-4 mt-4 mb-4 mb-sm-0">
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
            <p class="mb-4">For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do.</p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/06.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Lacey E.</h6>
              <span class="author-designation">CEO</span>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="testimonial-item rounded bg-white p-4">
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
            <p class="mb-4">We were treated like royalty. Needless to say we are extremely satisfied with the results. Thank you for making it painless.</p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/07.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Emily M.</h6>
              <span class="author-designation">Product Designer</span>
            </div>
          </div>
        </div>
        <div class="testimonial-item rounded bg-white p-4 mt-4">
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
            <p class="mb-4">We were treated like royalty. Needless to say we are extremely satisfied with the results. Thank you for making it painless.</p>
          </div>
          <div class="testimonial-info">
            <div class="testimonial-avatar-img">
              <img class="img-fluid avatar w-auto rounded-circle" src="images/avatar/08.jpg" alt="">
            </div>
            <div class="testimonial-author">
              <h6 class="author-name">- Jaymee S</h6>
              <span class="author-designation">Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="position-absolute bottom-0 end-0 w-100">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,288L1440,64L1440,320L0,320Z"></path>
    </svg>
  </div>
</section>
<!--=================================
features -->

<!--=================================
Faqs -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="section-title text-center">
          <h2 class="title">Got A Question?</h2>
          <p class="lead">Feel free to drop me a quick email at letstalk@example.com</p>
        </div>
        <div class="accordion accordion-big" id="accordionExample">
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            How can we motivate ourselves?
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important.
              </div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            What drives me?
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals.
              </div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Can the particular activity be done later?
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process.
              </div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingfour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            Why do I want a particular thing?
            </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.
              </div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingfive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            How will this achievement change my life?
            </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Commitment – understanding the price and having the willingness to pay that price
              </div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingsix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
            Does it need to be done at all?
            </button>
            </h2>
            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Commitment – understanding the price and having the willingness to pay that price
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingseven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
            Why is Clarity so important?
            </button>
            </h2>
            <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people.
              </div>
            </div>
          </div>
        </div>
        <p class="mt-4 mb-0 text-center">Still have questions? <a href="#"> Ask us directly</a></p>
      </div>
    </div>
  </div>
</section>
<!--=================================
Faqs -->

<!--=================================
footer-->
<svg  class="blog-shape mt-2 mt-md-5" xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1920 100">
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
  <script src="js/page/community.js"></script>

</body>
</html>
