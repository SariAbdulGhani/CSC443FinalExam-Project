<?php


function plat_desc($plat){ ?>

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3><?php echo $plat->plattername?> </h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Platters</a>  >  <?php echo $plat->plattername?></span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="../../assets/images/platter/<?php echo $plat->id ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4><?php  echo $plat->plattername?></h4>
          <span class="price"><em><?php if($plat->discount != 0){ echo $plat->price;} ?></em><?php echo $plat->price*(1- $plat->discount); ?></span>
          <p><?php echo $plat->description ?></p>

          <ul>
            <li><span>Platter Name:</span><?php echo $plat->plattername?></li>
            <li><span>Category:</span><?php echo $plat->category?></li>
            <li><span>Price After Discount:</span><?php echo $plat->price*(1- $plat->discount); ?></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

 
<?php
} ?>