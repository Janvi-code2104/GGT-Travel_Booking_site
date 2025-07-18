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
<style>
    .form-wrapper h2 {
    color: #1c1c1e;
    font-size: 2rem;
    margin: 25px 25px 10px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-left: 10px;
}
.myform textarea {
    outline: none;
    border: none;
    border-bottom: 2px solid #1c1c1e;
    font-size: 1rem;
    border-radius: 4px;
    /* padding: 10px 0; */
    width: 90%;
    margin-block: 5px;
    margin-bottom: 10px;
}
.myform textarea:is(:focus, :valid) {
    /* padding: 0 20px 0; */
    padding-left: 10px;
}
.myform textarea:is(:focus, :valid)~label {
    font-size: 0.75rem;
    transform: translateY(-130%);  
}
form .close a i{
    width: 90%;
    padding: 10px 0;
    font-size: 1rem;
    background: #00000b;
    outline: none;
    border: none;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    cursor: pointer;
    transition: 0.1s ease;
    font-family: serif;
    margin-top: 160px;
    margin-bottom: 15px;
}
.form-wrapper .regform input{
    text-decoration:none;
    width: 90%;
    cursor: pointer;
    background-color:black;
    /* padding: 10px 120px; */
    font-size: 20px;
    outline: none;
    border: none;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    transition: 0.1s ease;
    font-family: serif;
    /* margin-top: 900px; */
    /* margin-bottom: 15px; */
}
.image img{
    margin-top:30px;
}
    </style>
<body>
<?php
include("connection.php");
?>
    <!-- <nav>
        <a href="#">
            <img src="logo.jpg" alt="logo" width="100">
        </a>
    </nav> -->
   
    <div class="form-wrapper">
        <form method="POST">
         
        <a href="Login.php" class="close"><i class="fa-solid fa-rectangle-xmark"></i></a>
        
            <h2>New Register Here</h2>
            <div class="myform">
                <input type="text"name="Name" required>
                <label>Username</label>
            
            <div class="myform">
                    <input type="password" name="Pass" required>
                    <label>Password</label>
    
            <div class="myform">
            <input type="text" name="Mno" required>
            <label>Phone No</label>       
            <div class="myform">
                <textarea class="myform2" rows="2" name="address" required></textarea>
                <label>Address</label> 
            </div>
            <div class="myform">
                    <input type="text" name="city" required>
                    <label>City</label>
            </div>
            <div class="regform">
                <!-- <br> -->
            <input type="submit" name="Register" Value= "Register" required>  
            <!-- <a href="Add_Register.php" name="Register">Register</a> -->
            </div></div>
     </div>
</form> 
</div>
     <div class="image">
          <img src="image\kedarnath.jpg" width="300" height="300" alt="image">
        <center>
        <h5>welcome to your Dreamy Destination</h5>
            <h3>GET_GO TRIP</h3><br>
            
    
            <!-- <img src="image\logo.png" alt="logo" width="80"> -->
        </center>
    </div>
    </div>
</body>
</html>
<?php 
    include("connection.php");
    if(isset($_POST['Register'])) 
	{
        $username=$_POST["Name"];
        $Password=$_POST["Pass"];
        $Moblieno=$_POST["Mno"];
        $address=$_POST["address"];
        $city=$_POST["city"]; 

        $sql = "INSERT INTO `user_info`(`username`, `password`, `mno`, `address`, `city`) VALUES ('$username','$Password',' $Moblieno','$address','$city')";
       $alert=mysqli_query($db, $sql);
       if($alert) 
	{
    
        echo '<script>alert("category uploded successfully");</script>';
		header("location:Login.php");
    } 
	else  
	{
        echo '<script>alert("category not uploded");</script>';
		header("location:Register.php");
    }

    }?>