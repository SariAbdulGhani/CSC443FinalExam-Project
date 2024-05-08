
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="../../assets/css/fontawesome.css">
<link rel="stylesheet" href="../../assets/css/templatemo-lugx-gaming.css">
<link rel="stylesheet" href="../../assets/css/owl.css">
<link rel="stylesheet" href="../../assets/css/Styles.css">
<link rel="stylesheet" href="../../assets/css/animate.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<?php
    require_once("../../be/common/dbconfig.php");
    session_start();
?>


    <div id="successText" class="hidden">
        <div id = "successTick">
            <i class="fas fa-check-circle"></i>
        </div>
            <p>Login successfuly</p>
    </div>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="../../index.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="../../index.php" class="active">Home</a></li>
                      <li><a href="plates.php">Our Plates</a></li>
                      <li><a href="Aboutus.php">About Us</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                      <?php
                          require_once("../controllers/AdminController.php");
                          require_once("../views/AdminViews.php");
                          require_once("../views/AdminViews.php");
                          SignIn_Return();
                          LogIn_Form();
                          ScriptLogin();  
                          ScriptReturn();

                  //        SignUp_Form();
                  //        ScriptSignUp();
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../assets/js/isotope.min.js"></script>
  <script src="../../assets/js/owl-carousel.js"></script>
  <script src="../../assets/js/counter.js"></script>
  <script src="../../assets/js/custom.js"></script>
