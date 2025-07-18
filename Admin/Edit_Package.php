<?php 
session_start();
	include("connection.php");
    if(isset($_POST['editpackage'])) 
	{
        $user_id=$_POST['pid'];
        $package=$_POST['pack_name'];
        $new_image = $_FILES['pimage']['name'];
        $tempname = $_FILES['pimage']['tmp_name'];
        $folder = "./image/" . $new_image;
        $old_image=$_POST['old_path'];
        $price=$_POST['pprice'];
        $days=$_POST['Days'];
        $newcategory=$_POST['newcategory'];
        if($new_image !='')
        {
            $update_filename=$_FILES['pimage']['name'];
            // echo $update_filename;
        }
        else{
            $update_filename=$old_image;
            // echo $update_filename;
        }
       
        // print_r($_POST);
        // print_r($_FILES);
        // die();

        $update="UPDATE `package` SET `package`='$package',`image`='$update_filename',`pprice`='$price',`days`='$days',`category`='$newcategory' WHERE `pid`='$user_id'";
        // Execute query
        $result=mysqli_query($db, $update);
        if($result) 
        {
         if($_FILES['pimage']['name'] !='')
            {
             move_uploaded_file($tempname,$folder);
             unlink("./image/".$old_image);
            }
            
            header("location:Manage_Package.php");
            $_SESSION['status'] = "Package updated successfully";
        } 
        else  
        {
            header("location:Manage_Package.php");
            $_SESSION['status'] = "Package Updation of Data Failed";
        }
      
      
    }