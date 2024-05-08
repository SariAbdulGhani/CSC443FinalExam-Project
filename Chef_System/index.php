<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Chef System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/Styles.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <?php 
    session_start();
    ?>
    <div id="successText" class="hidden">
          <div id="successTick">
          <i class="fas fa-check-circle"></i>
      </div>
          <p>Login successfuly</p>
      </div> 

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!--<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="fe/pages/plates.php">Our Plates</a></li>
                    <li><a href="fe/pages/Aboutus.php">About Us</a></li>
                    <li><a href="fe/pages/contact.php">Contact Us</a></li>
                   <!--   <li><a href="#">Sign In</a></li> -->
                   <?php
                          require_once("fe/controllers/AdminController.php");
                          require_once("fe/views/AdminViews.php");
                          require_once("fe/views/AdminViews.php");
                          SignIn_Return_index();
                          LogIn_Form_index();
                          ScriptLogin_index();  
                          ScriptReturn_index();
                      ?>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>

  
    </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="caption header-text">
              <h6>Welcome to Chef Steve Web</h6>
              <h2>BEST CHEF SITE EVER!</h2>
              <p>
                This website is made to introduce its visitors to Chef Steve,
                from Lebanon Beqaa, special chef whos made up tastey platters
                for you guys to enjoy.
              </p>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-2">
            <div class="right-image">
              <img src="assets/images/sale.png" alt="" />
              <span class="price">$22</span>
              <span class="offer">-40%</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="image">
                <img
                  src="assets/images/taste.png"
                  alt=""
                  style="max-width: 44px; border-radius: 10px" />
              </div>
              <h4>Good Taste</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="image">
                <img
                  src="assets/images/safe.jpg"
                  alt=""
                  style="max-width: 44px; border-radius: 10px" />
              </div>
              <h4>Safe</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="image">
                <img
                  src="assets/images/24.jpg"
                  alt=""
                  style="max-width: 44px; border-radius: 10px" />
              </div>
              <h4>Available</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="image">
                <img
                  src="assets/images/love.png"
                  alt=""
                  style="max-width: 65px; border-radius: 7px" />
              </div>
              <h4>Made With Love</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section most-played">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading">
              <h6>TOP PLATTERS</h6>
              <h2>Most Ordered</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="main-button">
              <a href="fe/pages/plates.php">View All</a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="item">
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/pl1.png" alt=""
                /></a>
              </div>
              <div class="down-content">
                <span class="category">Cold Platters</span>
                <h4>Crap Salad</h4>
                <a href="fe/pages/plates.php">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="item">
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/pl2.png" alt=""
                /></a>
              </div>
              <div class="down-content">
                <span class="category">Cold Platters</span>
                <h4>Goat Salad</h4>
                <a href="fe/pages/plates.php">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="item">
              <div class="thumb">
                <a href="fe/views/plates.php"
                  ><img src="assets/images/sale.png" alt=""
                /></a>
              </div>
              <div class="down-content">
                <span class="category">Meaters</span>
                <h4>Steve Steak</h4>
                <a href="fe/pages/plates.php">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="item">
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/3p.jpg" alt=""
                /></a>
              </div>
              <div class="down-content">
                <span class="category">More Categories</span>

                <a href="fe/pages/plates.php">Explore</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section categories">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h6>Categories</h6>
              <h2>Top Categories</h2>
            </div>
          </div>
          <div class="col-lg col-sm-6 col-xs-12">
            <div class="item">
              <h4>Cold Platters</h4>
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/cold.jpeg" alt=""
                /></a>
              </div>
            </div>
          </div>
          <div class="col-lg col-sm-6 col-xs-12">
            <div class="item">
              <h4>Meaters</h4>
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/meat.jpeg" alt=""
                /></a>
              </div>
            </div>
          </div>
          <div class="col-lg col-sm-6 col-xs-12">
            <div class="item">
              <h4>Breakfast Platters</h4>
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/break.jpeg" alt=""
                /></a>
              </div>
            </div>
          </div>
          <div class="col-lg col-sm-6 col-xs-12">
            <div class="item">
              <h4>More and more</h4>
              <div class="thumb">
                <a href="fe/pages/plates.php"
                  ><img src="assets/images/3p.jpg" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="plates">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h6>Our plates</h6>
                    <h2>
                      Go Buy & Get Best <em>Prices and Taste</em> For You!
                    </h2>
                  </div>
                  <p>
                    Each and every plate was made with love and passion, enjoy
                    and be steveyyy.
                  </p>
                  <div class="main-button">
                    <a href="fe/pages/plates.php">Eat Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 GT_Students. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

 </body>
</html>