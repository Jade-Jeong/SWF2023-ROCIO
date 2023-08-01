<!--=================================
header -->
<header class="header default header-transparent">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-static-top navbar-expand-lg header-sticky justify-content-between">
          <a class="navbar-brand" href="index"><img class="img-fluid logo" src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-left"></i>
          </button>
          <div class="navbar-collapse collapse" id="navbarmenu">
            <ul class="nav navbar-nav">
              <li class="nav-item" id="id-menu1">
                <a class="nav-link" href="index" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
              <li class="nav-item mega-menu" id="id-menu2">
                <a href="regist" class="nav-link">Registration</a>
              </li>
              <li class="nav-item mega-menu" id="id-menu3">
                <a href="portfolio" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item menu4" id="id-menu4">
                <a class="nav-link dropdown-toggle" href="community"  aria-haspopup="true" aria-expanded="false">
Community
                </a>

              </li>
              <li class="nav-item mega-menu" id="id-menu5">
                <a href="site" class="nav-link">Site</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop <i class="fas fa-chevron-down fa-xs"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="shop.html">Shop Grid</a></li>
                  <li><a class="dropdown-item" href="shop-list.html">Shop List</a></li>
                  <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                  <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                  <li><a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item mega-menu">
                <a href="#" class="nav-link" data-bs-toggle="dropdown">Elements<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-sm-6 col-lg-4">
                        <h6 class="mb-3 nav-title">Elements</h6>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a href="elements-accordions.html">Accordions </a></li>
                          <li><a href="elements-counter.html">Counter </a></li>
                          <li><a href="elements-call-to-action.html">Call to Action </a></li>
                          <li><a href="elements-clients.html">Clients </a></li>
                          <li><a href="elements-countdown-timer.html">Countdown Timer </a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-lg-4">
                        <h6 class="mb-3 nav-title">Elements</h6>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a href="elements-feature-icon.html">Feature Icon </a></li>
                          <li><a href="elements-feature-step.html">Feature Step </a></li>
                          <li><a href="elements-list-style.html">List Style </a></li>
                          <li><a href="elements-pricing-plan.html">Pricing Plan</a></li>
                          <li><a href="elements-skills.html">Skills </a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-lg-4">
                        <h6 class="mb-3 nav-title">Elements</h6>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a href="elements-tabs.html">Tabs </a></li>
                          <li><a href="elements-team.html">Team </a></li>
                          <li><a href="elements-testimonials.html">Testimonials </a></li>
                          <li><a href="elements-typography.html">Typography </a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
          <div class="social">
            <ul class="list-unstyled">
              <!-- <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
              <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
              <li><a href="#"> <i class="fab fa-pinterest-p"></i> </a></li>
              <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
              <li><a href="#"> <i class="fab fa-youtube"></i> </a></li>
              <li class="header-search nav-item">
                <div class="search">
                  <a class="search-btn not_click" href="javascript:void(0);"></a>
                  <div class="search-box not-click">
                    <form action="search.html" method="get">
                      <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                      <button class="search-button"> <i class="fa fa-search not-click"></i></button>
                    </form>
                  </div>
                </div>
              </li> -->
              <li><a href="#" id="id_wallet" class="btn btn-primary" onclick="connect_metamask();" style="color:#fff; border-radius:5px;">CONNECT WALLET<span></span></a></li>
              <li><a href="db/logout" id="id_mypage" class="btn btn-primary" style="color:#fff; border-radius:5px; display:none;">SIGN OUT<span></span></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--=================================
 header -->
 <script type="text/javascript">
  var login_chk = false;
   if('<?=$logchk;?>'==1){
     login_chk = true;
   }

 </script>
