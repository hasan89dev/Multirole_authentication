
<?php
include "db_con.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $pass=$_POST['pass'];
    $pass_hash=PASSWORD_HASH($pass,PASSWORD_BCRYPT);
    $ins="INSERT INTO resister (name,email,department,password)
    values('$name','$email','$dept','$pass_hash')";
    $ex=mysqli_query($con,$ins);
    if($ex){
        echo "<script>alert('registration successful')</script>";
    }else{
        echo "<script>alert('registration failed')</script>";   
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <form method="post">
            <h1 class="bg-dark text-center text-white p-2">Register here</h1><br>
            <input type="text" placeholder="enter name" class="form-control" name="name">
            <input type="email" placeholder="enter email" class="form-control" name="email">
            <input type="text" placeholder="enter department" class="form-control" name="dept">
            <input type="password" placeholder="enter password" class="form-control mb-2" name="pass">
            <button class="btn btn-success" name="submit">submit</button><br>
            </form>
            <h5>if you have already registered then try login.</h5><br>
            <a href="login.php"><button class="btn btn-primary">login</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>