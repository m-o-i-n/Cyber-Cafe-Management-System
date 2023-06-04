<?php
session_start();

if(isset($_REQUEST['login']))
        {
            $em=$_REQUEST['username'];
            $pas=$_REQUEST['password'];
        
         require_once('connection.php');
        
         $sql="select * from tbladmin where UserName='$em' and Password='$pas'" ;
        
         $res=mysqli_query($link,$sql);
         $count=mysqli_fetch_assoc($res);
         
         if($count>0)
         {
           $_SESSION['adfname']=$count['AdminName'];
           // $_SESSION['adimg']=$count['img'];
           $_SESSION['id']=$count['aid'];
          
           header("location:dashboard.php");
        
         }
         else
         {
          
            echo"<script>alert('Credentials Are Wrong')</script>";
         }
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Login | Cyber Cafe</title>
</head>

<body>
    <div class="login">
        <h1>Admin Login | Cyber Cafe Management</h1>
        <form action="" method="post" name="login">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
            </div>
        </form>
    </div>

</body>

</html>