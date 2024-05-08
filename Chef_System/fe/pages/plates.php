<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Chef System</title>
    

    
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
  <?php
    require_once("common/header.php");
    require_once("../../be/models/UserModel.php");
    require_once("../controllers/UserController.php");
    require_once("../views/UserViews.php")
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our PLATES</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Our Plates</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">


    <?php 
        $plats = GetPlats();
        ListPlats($plats);
    ?>   


      

    </div>
  </div>

  <?php footer(); ?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->

  </body>
</html>