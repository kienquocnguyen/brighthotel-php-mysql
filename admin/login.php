<?php include_once("includes/header.php") ?>

<!--login function -->
<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = mysqli_real_escape_string($link,$_POST['email']);
        $password = mysqli_real_escape_string($link,$_POST['password']);
        $sql = "select id from admin where email='".$email."'AND password='".$password."'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['login_user']=$email;
            header('location: index.php');
            exit();
        }
        else{
            echo  "<script>$('#myModal').modal('show')</script> ";
            exit();
        }
    }
?>
<!--login function -->
<!-- Wrong email or password modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!-- Wrong email or password modal -->


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

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>