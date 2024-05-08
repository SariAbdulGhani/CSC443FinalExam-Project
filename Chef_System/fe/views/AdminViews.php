<?php
function AddForm(){?>
    <div class="contact-page section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="contact-form" action="../../be/controllers/AdminControllers.php" method="post">
                                    <div class="row">
                                    <div class="col-lg-6">
                      <fieldset>
                        <label for="name" style="margin-left:10px;margin-bottom:10px;">Platter:</label>
                        <input type="name" name="Platter" id="Platter" placeholder="Platter" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <label for="name" style="margin-left:10px;margin-bottom:10px;">Category:</label>
                        <input type="subject" name="Category" id="Category" placeholder="Category" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <label for="name" style="margin-left:10px;margin-bottom:10px;">Price:</label>
                        <input type="subject" name="Price" id="Price" placeholder="Price" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <label for="name" style="margin-left:10px;margin-bottom:10px;">Discount:</label>
                        <input type="subject" name="Discount" id="Discount" placeholder="Discount" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <label for="name" style="margin-left:10px;margin-bottom:10px;">Is-Active(0 or 1):</label>
                        <input type="subject" name="IsActive" id="IsActive" placeholder="IsActive" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <label for="name" style="margin-left:10px;margin-bottom:10px;">Description:</label>
                        <textarea name="Description" id="Description" placeholder="Description"></textarea>
                      </fieldset>
                    </div>
                                        <div class="col-lg-12">
                                            <div class="Error-Message" style="display: none;"></div>
                                            <fieldset>
                                            <input type="hidden" name="activate" value="4">
                                                <button type="submit" id="form-submit" class="orange-button">Add the platter</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}



function TopBar_And_Welcome() { ?>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="AddPlatter.php" class="active">Add Platters</a></li>
                      <li><a href="AlterPlatter.php" class="active">Alter Platters</a></li>
                      <li><a href="PreviewPlatter.php" class="active">View Platters</a></li>
                      <li><a href="../../index.php">Preview Cite</a></li>
                      <li><a href="PreviewCite.php">Create Admin Account</a></li>
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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Administrator Section</h3>
          <span class="breadcrumb">Wellcome</span>  
        </div>
      </div>
    </div>
  </div>

  <?php }

  function footer() { ?>
  <footer>  
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 GT students. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>
  <?php }

function AlterTable(){
    require_once("../../be/models/AdminModel.php");
    $platters = GetPlattersForAlter();
    ?>
        <br>
        <h1>
        <center>
            List Of Platters
        </center>
        <br>
    </h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Platter Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Status</th>
            <th>Activate/Deactivate</th>
            <th>Delete</th>
        </tr>

        <?php
        foreach ($platters as $platter) { ?>
            <tr>
                <td><?php echo $platter->id; ?></td>
                <td><?php echo $platter->plattername; ?></td>
                <td><?php echo $platter->category; ?></td>
                <td><?php echo $platter->price; ?></td>
                <td><?php echo $platter->discount; ?></td>
                <td><?php echo $platter->isActive ? "Active" : "Deactivated"; ?></td>
                <td>
                    <form name="activateItem" method="post" action="../../be/controllers/AdminControllers.php">
                        <input type="hidden" name="id" value="<?php echo $platter->id; ?>">
                        <input type="hidden" name="activate" value="<?php echo $platter->isActive ? 0 : 1; ?>">
                        <input type="submit" value="<?php echo $platter->isActive ? "Deactivate" : "Activate"; ?>">
                    </form>
                </td>
                <td>
                    <form name="RemoveItem" method="post" action="../../be/controllers/AdminControllers.php">
                        <input type="hidden" name="activate" value="2">
                        <input type="hidden" name="id" value="<?php echo $platter->id; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php }


function ListPlats($plats)
{ ?>
  <div class="section trending">
    <div class="container">

    <div class="row trending-box">
    
    <?php
    
    foreach ($plats as $plat) {
      if($plat->IS_ACTIVE == "1"){ ?>
            <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rac adv">
                <div class="item">
                    <div class="thumb">
                    <a href="Platter-details.php?data-id=<?php echo $plat->ID; ?>"><img src="../../assets/images/Platter/<?php echo $plat->ID; ?>.jpg" alt=""></a>
                        <span class="price"><em><?php if($plat->discount != 0){ echo $plat->price;} ?></em><?php echo $plat->price*(1- $plat->discount); ?></span>
                    </div>
                    <div class="down-content">
                        <span class="category"><?php echo $plat->category; ?></span>
                        <h4><?php echo $plat->PLATTER; ?></h4>
                        <a href="Platter-details.php?data-id=<?php echo $plat->ID; ?>"><i class="fa fa-shopping-bag"></i></a>
                     
                    </div>
                </div>
            </div>
        
        <?php }
    }
          
 ?> </div>
    </div></div>
    <?php

      }
?>


<?php
function SignIn_LogOut(){
    ?>
    <li><a id="<?php echo isset($_SESSION['username']) ? 'LogOut' : 'SignIn'; ?>">
    <?php echo isset($_SESSION['username']) ? 'Log Out' : 'Log In'; ?></a></li>
<?php }?>

<?php
function LogIn_Form(){
    ?>
<div id="myModal2" class="modal">
    <div class="modal-content">
        <div style = "float: right;"><span class="close">&times;</span></div>
        <h2 style="text-align: center;">Log In Form</h2><br>

        <form id="myForm2">
            <input type="hidden" name="action" value="LOGIN">
            <input type="text" class="form-control" name="username" placeholder="Username" id="username"><br>
            <input type="password" class="form-control" name="password" placeholder="Password" id="password"><br>
            <div class="Error-Message"></div>
            <div style="text-align: center;"><button type="submit" class="btn-book-a-table button-click">Submit</button></div>
            <br>
        </form>
    </div>
</div>    

<?php }?>


<?php
function SignIn_Return(){
    ?>
    <li><a class="redy" id="<?php echo isset($_SESSION['username']) ? 'GoToAdmin2' : 'SignIn2'; ?>">
    <?php echo isset($_SESSION['username']) ? 'Preview Admin Site' : 'Log In'; ?></a></li>
<?php }?>


<?php
function SignIn_Return_index(){
    ?>
    <li><a class="redy" id="<?php echo isset($_SESSION['username']) ? 'GoToAdmin' : 'SignIn'; ?>">
    <?php echo isset($_SESSION['username']) ? 'Preview Admin Site' : 'Log In'; ?></a></li>
<?php }?>

<?php
function LogIn_Form_index(){
    ?>
<div id="myModal" class="modal">
    <div class="modal-content">
        <div style = "float: right;"><span class="close">&times;</span></div>
        <h2 style="text-align: center;">Log In Form</h2><br>

        <form id="myForm">
            <input type="hidden" name="action" value="LOGIN">
            <input type="text" class="form-control" name="username" placeholder="Username" id="username"><br>
            <input type="password" class="form-control" name="password" placeholder="Password" id="password"><br>
            <div class="Error-Message"></div>
            <div style="text-align: center;"><button type="submit" class="btn-book-a-table button-click">Submit</button></div>
            <br>
        </form>
    </div>
</div> 

<?php }?>