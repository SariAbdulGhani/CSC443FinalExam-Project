<?php 
function ScriptLogin(){
     // Script responsible for sending login data to the be controller.
    ?>
        <script>
            $(document).ready(function () {
            var modal = document.getElementById("myModal2");
            var btn = document.getElementById("SignIn2");
            btn.onclick = function () {
                    modal.style.display = "block";
            };
            const errorMessageElement = document.querySelector(".Error-Message");
            var span = modal.querySelector(".close");
            span.onclick = function () {
                modal.style.display = "none";
                document.getElementById("username").value = "";
                document.getElementById("password").value = "";
                errorMessageElement.style.display = "none";
            }
            $("#myForm2").submit(function (e) {
                e.preventDefault();
                var isEmpty = false;
                let un = document.getElementById("username").value;
                let pass = document.getElementById("password").value;
                if ((un == "") || (pass == "")) {
                    var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    text: 'Please fill in all fields.',
                    style: 'background-color: red; color: white;'
                });
                    $('.Error-Message').empty().append(errorMessage);
                    return;
                }
                else {
            //       const errorMessageElement = document.querySelector(".Error-Message");
                    errorMessageElement.style.display = "none";
                }
                $.ajax({
                    type: "POST",
                    url: "../../be/controllers/UserControllers.php",
                    data: $(this).serialize(),
                    success: function (response) {
                        $("#responseMsg").html(response);
                        if (response.trim() === "success") {
                            const successText = document.getElementById("successText");
                            successText.style.display = "block";
                            // const errorMessageElement = document.querySelector(".Error-Message");
                            errorMessageElement.style.display = "none";
                            document.getElementById("username").value = "";
                            document.getElementById("password").value = "";
                            var element = document.querySelector(".modal-content");
                            element.style.display = "none";
                            modal.style.display = "none";
                            setTimeout(function() {
                                successText.style.display = "none";
                                window.location = "AddPlatter.php";
                            }, 3000);
                        } else if (response.trim() === "faile") {
                            var errorMessage2 = $('<p>', {
                                class: 'alert alert-danger',
                                role: 'alert',
                                text: 'Invalid Username or password.',
                                style: 'background-color: red; color: white;'
                            });
                            // const errorMessageElement = document.querySelector(".Error-Message");
                            errorMessageElement.style.display = "block";
                            $('.Error-Message').empty().append(errorMessage2);
                            return;
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Ajax request failed:", error);
                    }
                });
            });
        });
    </script>
    <?php
} 
?>

<?php
function ScriptLogin_index(){
    // Script responsible for sending login data to the be controller. This function if for the index page.
    ?>

  <script>
      $(document).ready(function () {
      var modal = document.getElementById("myModal");
      var btn = document.getElementById("SignIn");
      btn.onclick = function () {
              modal.style.display = "block";
      };
      const errorMessageElement = document.querySelector(".Error-Message");
      var span = modal.querySelector(".close");
      span.onclick = function () {
          modal.style.display = "none";
          document.getElementById("username").value = "";
          document.getElementById("password").value = "";
          errorMessageElement.style.display = "none";
      }
      $("#myForm").submit(function (e) {
          e.preventDefault();
          var isEmpty = false;
          let un = document.getElementById("username").value;
          let pass = document.getElementById("password").value;
          if ((un == "") || (pass == "")) {
              var errorMessage = $('<p>', {
              class: 'alert alert-danger',
              role: 'alert',
              text: 'Please fill in all fields.',
              style: 'background-color: red; color: white;'
          });
              $('.Error-Message').empty().append(errorMessage);
              return;
          }
          else {
              errorMessageElement.style.display = "none";
          }
          $.ajax({
              type: "POST",
              url: "be/controllers/UserControllers.php",
              data: $(this).serialize(),
              success: function (response) {
                  $("#responseMsg").html(response);
                  if (response.trim() === "success") {
                      const successText = document.getElementById("successText");
                      successText.style.display = "block";
                      errorMessageElement.style.display = "none";
                      document.getElementById("username").value = "";
                      document.getElementById("password").value = "";
                      var element = document.querySelector(".modal-content");
                      element.style.display = "none";
                      modal.style.display = "none";
                      setTimeout(function() {
                          successText.style.display = "none";
                          window.location = "fe/pages/AddPlatter.php";
                      }, 3000);
                  } else if (response.trim() === "faile") {
                      var errorMessage2 = $('<p>', {
                          class: 'alert alert-danger',
                          role: 'alert',
                          text: 'Invalid Username or password.',
                          style: 'background-color: red; color: white;'
                      });
                      errorMessageElement.style.display = "block";
                      $('.Error-Message').empty().append(errorMessage2);
                      return;
                  }
              },
              error: function (xhr, status, error) {
                  console.error("Ajax request failed:", error);
              }
          });
      });
  });
</script>

<?php
    }
    function ScriptSignUp() {
        // Script responsible for sending sign-up data to the be controller.
        ?>
        <script>
            $(document).ready(function () {
                var modal = document.getElementById("myModal3");
                var b = document.getElementById("SignUp");
                b.onclick = function () {
                    modal.style.display = "block";
                };
                var errorMessageElement = document.querySelector(".Error-Message2");
                var span = modal.querySelector(".close");
                span.onclick = function () {
                    modal.style.display = "none";
                    document.getElementById("first_name").value = "";
                    document.getElementById("last_name").value = "";
                    document.getElementById("username2").value = "";
                    document.getElementById("password2").value = "";
                    document.getElementById("check_password").value = "";
                    errorMessageElement.style.display = "none";
                };
                $("#myForm3").submit(function (e) {
                    e.preventDefault();
                    var isEmpty = false;
                    var fname = document.getElementById("first_name").value;
                    var lname = document.getElementById("last_name").value;
                    var un = document.getElementById("username2").value;
                    var pass = document.getElementById("password2").value;
                    var check_pass = document.getElementById("check_password").value;
                    if (un === "" || pass === "" || fname === "" || lname === "" || check_pass === "") {
                        var errorMessage = $('<p>', {
                            class: 'alert alert-danger',
                            role: 'alert',
                            text: 'Please fill in all fields.',
                            style: 'background-color: red;'
                        });
                        $('.Error-Message2').empty().append(errorMessage);
                        return;
                    } else if (pass.length < 8) {
                        var errorMessage = $('<p>', {
                            class: 'alert alert-danger',
                            role: 'alert',
                            text: 'Password must be at least 8 characters.',
                            style: 'background-color: red;'
                        });
                        $('.Error-Message2').empty().append(errorMessage);
                        return;
                    } else if (pass !== check_pass) {
                        var errorMessage = $('<p>', {
                            class: 'alert alert-danger',
                            role: 'alert',
                            text: 'Passwords are not the same.',
                            style: 'background-color: red;'
                        });
                        $('.Error-Message2').empty().append(errorMessage);
                        return;
                    }
                    $.ajax({
                        type: "POST",
                        url: "../../be/controllers/AdminControllers.php",
                        data: $(this).serialize(),
                        success: function (response) {
                            $("#responseMsg2").html(response);
                            if (response.trim() === "success") {
                                const successText = document.getElementById("successText");
                                successText.style.display = "block";
                                errorMessageElement.style.display = "none";
                                var element = document.querySelector(".modal-content");
                                element.style.display = "none";
                                document.getElementById("first_name").value = "";
                                document.getElementById("last_name").value = "";
                                document.getElementById("username2").value = "";
                                document.getElementById("password2").value = "";
                                document.getElementById("check_password").value = "";
                                modal.style.display = "none";
                                setTimeout(function () {
                                    successText.style.display = "none";
                                    window.location.href = window.location.href;
                                }, 3000);
                            } else if (response.trim() === "usernameExists") {
                                var errorMessage2 = $('<p>', {
                                    class: 'alert alert-danger',
                                    role: 'alert',
                                    color: 'white',
                                    text: 'UserName already taken, please choose other one ',
                                    style: 'background-color: red;'
                                });
                                errorMessageElement.style.display = "block";
                                $('.Error-Message2').empty().append(errorMessage2);
                                return;
                            } else if (response.trim() === "already exists password") {
                                var errorMessage3 = $('<p>', {
                                    class: 'alert alert-danger',
                                    role: 'alert',
                                    color: 'white',
                                    text: 'Password already taken, please choose other one',
                                    style: 'background-color: red;'
                                });
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
            });
        </script>
        <?php
    }

function ScriptReturn_index() { 
    // Script responsible for redirecting to the admin section. This function if for the index page.
    ?>
    <script>
        window.onload = function() {
            var btn = document.getElementById("GoToAdmin");
            btn.onclick = function() {
                window.location.href = "fe/pages/AddPlatter.php";
            };
        };
    </script>
    <?php
}
?>

<?php

function ScriptReturn() {
    // Script responsible for redirecting to the admin section.
    ?>
    <script>
        window.onload = function() {
            var btn = document.getElementById("GoToAdmin2");
            btn.onclick = function() {
                window.location.href = "AddPlatter.php";
            };
        };
    </script>
    <?php
}

function ScriptLogOut(){
    // Script responsible for logout of the admin .
    ?>
    <script>
    $(document).ready(function () {
        var logout = document.getElementById("LogOut");
        logout.addEventListener('click', function() {
            $.ajax({
                type: "POST",
                url: "../../be/controllers/Log_Out.php", 
                data: { action: "LOGOUT" }, 
                success: function(response) {
                        location.reload();
                },
                error: function(xhr, status, error) {
                    console.error("Ajax request failed:", error);
                }
            });
        });
    });
    </script>
<?php
} 
?>



<?php
function AddPlatterfun(){
    // Script responsible for adding the platters by sending the data to the be controller.
    ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("contact-form");

    form.addEventListener("submit", function(event) {
        var Platter = document.getElementById("Platter").value;
        var Description = document.getElementById("Description").value;
        var Discount = document.getElementById("Discount").value;
        var IsActive = document.getElementById("IsActive").value;
        var Price = document.getElementById("Price").value;
        var Category = document.getElementById("Category").value;

        if (Platter.trim() === '' || Description.trim() === '' || Discount.trim() === '' || IsActive.trim() === '' || Price.trim() === '' || Category.trim() === '') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    color: 'white',
                    text: 'Please fill in all fields.',
                    style: 'background-color: red;'
                });
                const errorMessageElement = document.querySelector(".Error-Message");
                errorMessageElement.style.display = "block";
                $('.Error-Message').empty().append(errorMessage);
                event.preventDefault();
                return;
        } else if (IsActive !== '0' && IsActive !== '1') {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    color: 'white',
                    text: 'Is Active must be 1 or 0.',
                    style: 'background-color: red;'
                });
                const errorMessageElement = document.querySelector(".Error-Message");
                errorMessageElement.style.display = "block";
                $('.Error-Message').empty().append(errorMessage);
                event.preventDefault();
                return;
        } else if (isNaN(Price)) {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    color: 'white',
                    text: 'Price must be a number.',
                    style: 'background-color: red;'
                });
                const errorMessageElement = document.querySelector(".Error-Message");
                errorMessageElement.style.display = "block";
                $('.Error-Message').empty().append(errorMessage);
                event.preventDefault();
                return;
        } else if (isNaN(Discount) || Discount < 0 || Discount > 1) {
            var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    color: 'white',
                    text: 'Discount must be between 0 and 1 .',
                    style: 'background-color: red;'
                });
                const errorMessageElement = document.querySelector(".Error-Message");
                errorMessageElement.style.display = "block";
                $('.Error-Message').empty().append(errorMessage);
                event.preventDefault();
                return;
        } else {
            const errorMessageElement = document.querySelector(".Error-Message");
            errorMessageElement.style.display = "none";
            form.submit();
        }
    });
});
</script>
<?php }?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>