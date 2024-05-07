<?php
function LogIn_Form(){
    ?>
<div id="myModal1" class="modal">
    <div class="modal-content">
        <div style = "float: right;"><span class="close">&times;</span></div>
        <h2 style="text-align: center;">Log In Form</h2><br>

        <form id="myForm1">
            <input type="hidden" name="action" value="LOGIN">
            <input type="text" class="form-control" name="username" placeholder="Username" id="username"><br>
            <input type="password" class="form-control" name="password" placeholder="Password" id="password"><br>
            <div class="Error-Message"></div>
            <div style="text-align: center;"><button type="submit" class="btn-book-a-table button-click">Submit</button></div>
            <br>
            <div type="text">Don't have an Account?<a id = "SignUp" class="models_link">Sign Up</a></div>
        </form>
    </div>
</div>    

<?php }?>