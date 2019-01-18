
<!-- login function -->
<?php
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

//Wrong Password Alert
            echo "<script>$(document).ready(function(){ $('#wrongpasswordoremail').modal('show'); });</script>
            <!-- Wrong email or password modal -->
            <div class='modal' id='wrongpasswordoremail'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                  
                    <!-- Modal Header -->
                    <div class='modal-header'>
                      <h4 class='modal-title'>Wrong email or password</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class='modal-body'>
                      <p>Please Try Again</p>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class='modal-footer'>
                      <a href='login.php' class='btn btn-danger'>Go Back</a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- Wrong email or password modal -->";
            exit();
//Wrong Password Alert

        }
    }
?>

<!--login function -->
