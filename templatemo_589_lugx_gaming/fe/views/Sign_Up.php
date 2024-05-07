<?php
function SignUp_Form(){
    ?>
    
<div id="myModal2" class="modal">
    <div class="modal-content">
        <div style = "float: right;"><span class="close">&times;</span></div>
        <h2 style="text-align: center;">Sign Up Form</h2><br>
        <form id="myForm2">
            <input type="hidden" name="action" value="SIGNUP">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" id="first_name"><br>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="last_name"><br>
            <input type="text" class="form-control" name="username2" placeholder="Username" id="username2"><br>
            <input type="password" class="form-control" name="password2" placeholder="Password" id="password2"><br>
            <input type="password" class="form-control" name="check_password" placeholder="Confirm Password" id="check_password"><br>
            <div class="Error-Message2"></div>
            <div style="text-align: center;"><button type="submit" class="button-click">Submit</button></div>
            <br>
            <div type="text">Already Have an Account?<a id = "SignIn2" class="models_link">Log In </a></div>
        </form>

    </div>
</div>
<?php }?>