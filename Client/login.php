<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    <!-- Font Awesome Cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <!-- <nav>
        <a href="#">
            <img src="logo.jpg" alt="logo" width="100">
        </a>
    </nav> -->
   
    <div class="form-wrapper">
    <!-- action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] )?>"  -->
        <form method="POST">
        <div class="close">  
    <a href="Home.php" class="close"><i class="fa-solid fa-rectangle-xmark"></i></a></div>
            <h2>User Login Here</h2>
            <div class="myform">
                <input type="text"name="AdminName" required>
                <label>Username</label>
            <div class="myform">
                    <input type="password" name="AdminPass" required>
                    <label>Password</label>
                </div>
                <button type="submit" name="login">LOGIN</button>
                <br>
        </form>
<br>
        <p>Don't have an account? <a href="Register.php">Register here</a></p>
                
    </div>
   
    <div class="image">
          <img src="image\Hawa-mahal.jpg" width="300" height="250" alt="image">
        <center>
        <h5>welcome to your Dreamy Destination</h5>
            <h3>GET_GO TRIP</h3>
            <!-- <img src="image\logo.png" alt="logo" width="80"> -->    
        </center>
    </div>
    </div>
<?php
include("connection.php");
if (isset($_POST['login'])){
    $query="SELECT * FROM `user_info` WHERE `username`='$_POST[AdminName]' AND `password`='$_POST[AdminPass]'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result)==1)
    {
       session_start();
       $_SESSION['u_id']=$_POST['AdminName'];
       header("location:Home.php");
       
    }
    else{
        echo"<script>alert('Incorrect Password');</script>";
        // header("location:Login.php");
        
    }
    
}
?>

</body>
</html>