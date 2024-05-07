<?php
function ListPlats($plats)
{ ?>
    <div class="row trending-box">
    <?php
    foreach ($plats as $plat) { ?>
            <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rac adv">
                <div class="item">
                    <div class="thumb">
                        <a href="product-details.html"><img src="assets/images/trending-02.jpg" alt=""></a>
                        <span class="price"><em><?php echo $plat->price; ?></em><?php echo $plat->discount; ?></span>
                    </div>
                    <div class="down-content">
                        <span class="category"><?php echo $plat->category; ?></span>
                        <h4><?php echo $plat->PLATTER; ?></h4>
                        <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
?>
