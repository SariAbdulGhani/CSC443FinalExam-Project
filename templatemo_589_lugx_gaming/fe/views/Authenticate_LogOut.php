<?php
function SignIn_LogOut(){
    ?>
    <li><a href="#">Sign In</a></li>
    <a class="btn-book-a-table" id="<?php echo isset($_SESSION['username']) ? 'LogOut' : 'SignIn'; ?>">
        <?php echo isset($_SESSION['username']) ? 'Log Out' : 'Log In'; ?>
    </a>
<?php }?>