<?php 
session_start();
	include("connection.php");
    if(isset($_POST['addcategory'])) 
	{
        $category=$_POST["cat_name"];
        $filename = $_FILES["cimage"]["name"];
        $tempname = $_FILES["cimage"]["tmp_name"];
        $folder = "./image/" . $filename;
   // Get all the submitted data from the form
        $sql = "INSERT INTO `category`(`category`, `image`) VALUES ('$category','$filename')";
 
        // Execute query
        $alert=mysqli_query($db, $sql);

        // Now let's move the uploaded image into the folder: image
    if(move_uploaded_file($tempname,$folder)) 
	{
    
        echo '<script>alert("category uploded successfully");</script>';
		header("location:Manage_Category.php");
    } 
	else  
	{
        echo '<script>alert("category not uploded");</script>';
		header("location:Manage_Category.php");
    }
    if($alert)
    {
        $_SESSION['status'] = "category uploded successfully";
    }
    else
    {
        $_SESSION['status'] = "Category Uplodedtion Of Data Failed";
    }
    }
    ?>
    