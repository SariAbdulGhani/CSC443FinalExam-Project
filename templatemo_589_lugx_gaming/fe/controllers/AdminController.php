<?php 
function ScriptLogin(){
    ?>
        <script src="be/controllers/libs/jquery.min.js"></script>
        <script>
    $(document).ready(function () {

        var modal = document.getElementById("myModal1");
        var modal2 = document.getElementById("myModal2");
        var modal3 = document.getElementById("myModal3");

        var btn = document.getElementById("SignIn");
        btn.onclick = function () {
            if(modal3.style.display != "block" && modal2.style.display != "block")
                modal.style.display = "block";
        };

        
        var btn2 = document.getElementById("SignIn2");
        btn2.onclick = function () {
            modal.style.display = "block";
            modal2.style.display = "none";
        };

        
        var btn2 = document.getElementById("SignIn3");
        btn2.onclick = function () {
            modal.style.display = "block";
            modal3.style.display = "none";
        };

        const errorMessageElement = document.querySelector(".Error-Message");
        var span = modal.querySelector(".close");
        span.onclick = function () {
            modal.style.display = "none";
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
            errorMessageElement.style.display = "none";
        }
        $("#myForm1").submit(function (e) {
            e.preventDefault();
            var isEmpty = false;
            let un = document.getElementById("username").value;
            let pass = document.getElementById("password").value;
            if ((un == "") || (pass == "")) {
                var errorMessage = $('<p>', {
                    class: 'alert alert-danger',
                    role: 'alert',
                    color: 'white',
                    text: 'Please fill in all fields.',
                    style: 'background-color: red;'
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
                url: "../templatemo_589_lugx_gaming/be/controllers/Log_In.php",
                data: $(this).serialize(),
                success: function (response) {
                    $("#responseMsg").html(response);
                    if (response.trim() === "success") {
                        const successText = document.getElementById("successText");
                        successText.style.display = "block";
          //              const errorMessageElement = document.querySelector(".Error-Message");
                        errorMessageElement.style.display = "none";
                        document.getElementById("username").value = "";
                        document.getElementById("password").value = "";
                        var element = document.querySelector(".modal-content");
                        element.style.display = "none";
                        setTimeout(function() {
                            successText.style.display = "none";
                            modal.style.display = "none";
                            location.reload();
                        }, 3000);
                    } else if (response.trim() === "faile"){
                        var errorMessage2 = $('<p>', {
                            class: 'alert alert-danger',
                            role: 'alert',
                            color: 'white',
                            text: 'User Name or Password are incorrect! Please try Again',
                            style: 'background-color: red;'
                        });
            //            const errorMessageElement = document.querySelector(".Error-Message");
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
function ScriptSignUp(){
    ?>
   <script>
    $(document).ready(function () {
        var modal = document.getElementById("myModal2");
        var btn = document.getElementById("SignUp");
        var modal2 = document.getElementById("myModal1");
        btn.onclick = function () {
            modal.style.display = "block";
            modal2.style.display = "none";
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
        $("#myForm2").submit(function (e) {
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
                url: "../templatemo_589_lugx_gaming/be/controllers/Sign_Up.php",
                data: $(this).serialize(),
                success: function (response) {
                    $("#responseMsg2").html(response);
                    if (response.trim() === "success") {
                        const successText = document.getElementById("successText");
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
    });
</script> 
    <?php
} 
?>

<?php 
function ScriptLogOut(){
    ?>
    <script>
    $(document).ready(function () {
        var logout = document.getElementById("LogOut");
        logout.addEventListener('click', function() {
            $.ajax({
                type: "POST",
                url: "../templatemo_589_lugx_gaming/be/controllers/Log_Out.php", 
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


