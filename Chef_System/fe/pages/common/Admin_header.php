<?php
if(!isset($_SESSION["username"])){
    header("Location:../../index.php");
}
?>

<div id="successText" class="hidden">
        <div id = "successTick">
            <i class="fas fa-check-circle"></i>
        </div>
            <p>Admin Account Created</p>
    </div>

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
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="AddPlatter.php" class="active">Add Platters</a></li>
                      <li><a href="AlterPlatter.php" class="active">Alter Platters</a></li>
                      <li><a href="PreviewPlatter.php" class="active">View Platters</a></li>
                      <li><a href="../../index.php">Preview Cite</a></li>
                      <li><a href="Logout.php">Logout</a></li>
                      <li id = "SignUp"><a >Add Admin</a></li>
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
          <span class="breadcrumb">Wellcome <?php echo $_SESSION["username"]?></span>  
        </div>
      </div>
    </div>
  </div>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div id="myModal3" class="modal">
    <div class="modal-content">
        <div style = "float: right;"><span class="close">&times;</span></div>
        <h2 style="text-align: center;">Sign Up Form</h2><br>
        <form id="myForm3" action = "SIGNUP">
            <input type="hidden"  name="activate" value="3">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" id="first_name"><br>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="last_name"><br>
            <input type="text" class="form-control" name="username2" placeholder="Username" id="username2"><br>
            <input type="password" class="form-control" name="password2" placeholder="Password" id="password2"><br>
            <input type="password" class="form-control" name="check_password" placeholder="Confirm Password" id="check_password"><br>
            <div class="Error-Message2"></div>
            <div style="text-align: center;"><button type="submit" class="button-click">Submit</button></div>
            <br>
        </form>

    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script> /*
    $(document).ready(function () {
        var m = document.getElementById("myModal3");
        var b = document.getElementById("SignUp");
        b.onclick = function () {
            m.style.display = "block";
        } 
        const errorMessageElement = document.querySelector(".Error-Message2");
        var span = modal.querySelector(".close");
        span.onclick = function () {
            modal.style.display = "none";
            document.getElementById("first_name").value = "";
            document.getElementById("last_name").value = "";
            document.getElementById("username2").value = "";
            document.getElementById("password2").value = "";
            document.getElementById("check_password").value = "";
            errorMessageElement.style.display = "none";
        }
        $("#myForm3").submit(function (e) {
            e.preventDefault();
            var isEmpty = false;
            let fname = document.getElementById("first_name").value;
            let lname = document.getElementById("last_name").value;
            let un = document.getElementById("username2").value;
            let pass = document.getElementById("password2").value;
            let check_pass = document.getElementById("check_password").value;
            if ((un == "") || (pass == "") || (fname == "") || (lname == "") || (check_pass == "")) {
                var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please fill in all fields.',
                    style: 'background-color: red;'
                });
                $('.Error-Message2').empty().append(errorMessage);
                return;
            }
            else if (pass.length<8) {
                var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Password must be at least 8 characters.',
                    style: 'background-color: red;'
                });
                $('.Error-Message2').empty().append(errorMessage);
                return;
            }
            else if (pass !== check_pass) {
                var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Password are not the same.',
                    style: 'background-color: red;'
                });
                $('.Error-Message2').empty().append(errorMessage);
                return;
            }
            else {
                const errorMessageElement = document.querySelector(".Error-Message2");
                errorMessageElement.style.display = "none";
            }
            $.ajax({
                type: "POST",
                url: "../../be/controllers/Log_In.php",
                data: $(this).serialize(),
                success: function (response) {
                    $("#responseMsg2").html(response);
                    if (response.trim() === "success") {
                        const successText = document.getElementById("successText2");
                        successText.style.display = "block";
                        const errorMessageElement = document.querySelector(".Error-Message2");
                        errorMessageElement.style.display = "none";                        
                        var element = document.querySelector("#myModal2 .modal-content");
                        element.style.display = "none";
                        document.getElementById("first_name").value = "";
                        document.getElementById("last_name").value = "";
                        document.getElementById("username2").value = "";
                        document.getElementById("password2").value = "";
                        document.getElementById("check_password").value = "";
                        setTimeout(function() {
                            successText.style.display = "none";
                            modal.style.display = "none";
                            location.reload();
                        }, 3000);
                    } else if (response.trim() === "usernameExists"){
                        var errorMessage2 = $('<p>', {
                            class: 'alert alert-danger',
                            role: 'alert',
                            color: 'white',
                            text: 'UserName already taken, please choose other one ',
                            style: 'background-color: red;'
                        });
                        const errorMessageElement = document.querySelector(".Error-Message2");
                        errorMessageElement.style.display = "block";
                        $('.Error-Message2').empty().append(errorMessage2);
                        return;
                    }
                    else if (response.trim() === "already exists password"){
                        var errorMessage3 = $('<p>', {
                            class: 'alert alert-danger',
                            role: 'alert',
                            color: 'white',
                            text: 'Password already taken, please choose other one',
                            style: 'background-color: red;'
                        });
                        const errorMessageElement = document.querySelector(".Error-Message2");
                        errorMessageElement.style.display = "block";
                        $('.Error-Message2').empty().append(errorMessage3);
                        return;
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed:", error);
                } 
            });
        });
    });  */
</script>

  <?php
   // require_once("../views/AdminViews/Sign_Up.php");
    require_once("../controllers/AdminController.php");
   // SignUp_Form();
    ScriptSignUp(); 
    ?>