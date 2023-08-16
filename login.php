<?php
include "db_con.php";
session_start();
if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sel="SELECT * FROM resister WHERE email='$email'";
    $e=mysqli_query($con,$sel);
    if(mysqli_num_rows($e)>0){
      $row=mysqli_fetch_array($e);
      $pass_ver=password_verify($pass,$row['password']);
        if($pass_ver){
          $_SESSION['email']=$row['email'];
          $_SESSION['id']=$row['id'];
          header("location:sidebar/dashboard.php");
        }
        else{
          echo "<script>alert('login failed. Wrong password')</script>";
        }
      
    }
    else{
      echo "<script>alert('login failed')</script>";
    }
    
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <form method="POST">
            <h1 class="bg-dark text-center text-white p-2">login here</h1><br>
            
            <input type="email" placeholder="enter email" class="form-control" name="email">
            
            <input type="password" placeholder="enter password" class="form-control mb-2" name="pass">
            <button class="btn btn-primary mb-2" name="login">login</button>
            </form>
            
            <a href="register.php"><button class="btn btn-primary">register</button></a>
            <a href="reset.php"><button class="btn btn-warning mt-2">reset</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>