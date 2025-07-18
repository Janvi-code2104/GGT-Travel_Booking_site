<?php 
session_start();
	include("connection.php");
    if(isset($_POST['addpackage'])) 
	{
        $package=$_POST["pack_name"];
        $filename = $_FILES["pimage"]["name"];
        $tempname = $_FILES["pimage"]["tmp_name"];
        $folder = "./image/" . $filename;
        $price=$_POST["pprice"];
        $days=$_POST["Days"];
        $category=$_POST["category"];
        
        // Get all the submitted data from the form
        $sql="INSERT INTO `package`(`package`, `image`, `pprice`, `days`, `category`) VALUES ('$package','$filename','$price','$days',' $category')";
        
        // Execute query
        $alert=mysqli_query($db, $sql);
        // Now let's move the uploaded image into the folder: image
    if(move_uploaded_file($tempname,$folder)) 
	{
        echo "<script>alert('package uploded successfully')</script>";
		header("location:Manage_Package.php");
    } 
	else  
	{
        echo "<script>alert('package not uploded')</script>";
		header("location:Manage_Package.php");
    }
    if($alert)
    {
        $_SESSION['status'] = "package uploded successfully";
    }
    else
    {
        $_SESSION['status'] = "package Uplodedtion Of Data Failed";
    }
    }
    ?>
    

