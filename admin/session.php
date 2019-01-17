<?php
    <?php include ("../includes/db.php"); ?>
    session_start();
    $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($link,"select username from admin where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session = $row['username'];

?>