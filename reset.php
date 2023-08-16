<?php
include "db_con.php";
if(isset($_POST['reset'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $sel="SELECT *FROM student_info WHERE email='$email'";
    $ex=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($ex);
    $pass_hash=PASSWORD_HASH($pass,PASSWORD_BCRYPT);
    if($pass==$cpass){
        $update="UPDATE resister SET password='$pass_hash' WHERE email='$email'";
        $e=mysqli_query($con,$update);
        if($e){
            echo "<script>alert('password reset successful')</script>";
        }else{
            echo "<script>alert('password reset failed')</script>";
        }
    }else{
           echo "<script>alert('password does not match')</script>";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <div class="row">
        <h1 class="bg-dark text-white text-center p-2">Password reset page</h1>
        <form method="POST">
           <input type="email" placeholder="enter email" name="email" class="form-control">
           <input type="password" placeholder="enter new password" name="pass" class="form-control">
           <input type="password" placeholder="enter password again" name="cpass" class="form-control">
           <button class="btn btn-primary mt-2" name="reset">reset</button><br>
           <a href="login.php" class="btn btn-primary mt-2">login</a>
        
        </form>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>