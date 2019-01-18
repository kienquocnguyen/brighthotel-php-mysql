<?php include_once("includes/header.php") ?>

<!-- Put Jquery and Bootstrap here because we need to load modal in login function -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Put Jquery and Bootstrap here because we need to load modal in login function -->

<?php
   // Login Controller
   include_once("logincontroller.php");

?>

<div class="card">
    <div class="card-header">
        <strong>Admin</strong> Login
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="">
            <div class="form-group"><label for="nf-email" class=" form-control-label">Email</label><input type="email" id="nf-email" name="email" placeholder="Enter Email.." class="form-control"><span class="help-block">Please enter your email</span></div>
            <div class="form-group"><label for="nf-password" class=" form-control-label">Password</label><input type="password" id="nf-password" name="password" placeholder="Enter Password.." class="form-control"><span class="help-block">Please enter your password</span></div>
            <div>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>
</div>

    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>

    <script src="assets/js/main.js"></script>




</body>