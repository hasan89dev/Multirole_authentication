<?php
include "../db_con.php";
session_start();
$msg=$user_id="";
if($_SESSION['email']==true){
    $user_id=$_SESSION['id'];
}else{
    header("location:login.php");
}

if(isset($_POST['add'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $insert="INSERT INTO student_info (user_id,name,email,phpne)
    values('$user_id','$name','$email','$phone')";
    $ex=mysqli_query($con,$insert);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDEBAR</title>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="bar" id="toggle">
        <i class="fa-solid fa-bars"></i>
    </div>

    <div class="row_1" id="side_bar">
        <ul class="sidebar">
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Description</a></li>
            <li><a href="">Clients</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
        <ul class="social">
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            
        </ul>
    </div>

    <div class="container">
        <div class="row">
           <form method="POST"> 
            <input type="text" placeholder="enter name" class="form-control" name="name">
            <input type="email" placeholder="enter email" class="form-control" name="email">
           
            <input type="text" placeholder="enter phone number" class="form-control" name="phone">
            <button class="btn btn-primary" name="add">add students</button>
        </form>

        <table class="table">
        
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone number</th>
            
        </thead>
        
        <tbody>
         
            <?php
            $id=1;
            $sel="SELECT * FROM student_info where user_id='$user_id'";
            $e=mysqli_query($con,$sel);
            while($row=mysqli_fetch_array($e)){ ?>
            
             <tr>
                <td><?php echo $id++ ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['email']  ?></td>
                <td><?php echo $row['phpne']  ?></td>
             </tr>

            <?php }
            ?>
          </tbody>
        </table>
        </div>
    </div>

    <script src="sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>