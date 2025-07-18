<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login panel</title>
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
            <h2>Admin Login</h2>
            <div class="myform">
                <input type="text"name="AdminName" required>
                <label>Username</label>
                <div class="myform">
                    <input type="password" name="AdminPass" required>
                    <label>Password</label>
                </div>
                <button type="submit" name="login">LOGIN</button>
        </form>
    </div>
    <div class="image">
        <img src="travelgirl.jpg" width="250" height="250" alt="image">
        <center>
            <h3>GET_GO TRIP</h3>
            <h5>welcome to your Dreamy Destination</h5>
           
        </center>
    </div>
    </div>
<?php
include("connection.php");
if (isset($_POST['login'])){
    $query="SELECT * FROM `login` WHERE `username`='$_POST[AdminName]' AND `password`='$_POST[AdminPass]'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result)==1)
    {
       session_start();
       $_SESSION['id']=$_POST['AdminName'];
       header("location:Template.php");
       
    }
    else{
        echo"<script>alert('Incorrect Password');</script>";
    }
    
}
?>

</body>
</html>