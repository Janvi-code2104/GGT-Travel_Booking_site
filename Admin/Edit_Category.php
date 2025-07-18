<?php 
session_start();
	include("connection.php");
    if(isset($_POST['editcategory'])) 
	{
        $user_id=$_POST['cid'];
        $category=$_POST['cat_name'];
        $new_image = $_FILES['cimage']['name'];
        $tempname = $_FILES['cimage']['tmp_name'];
        $folder = "./image/" . $new_image;
        $old_image=$_POST['old_path'];
       
        if($new_image !='')
        {
            $update_filename=$_FILES['cimage']['name'];
            // echo $update_filename;
        }
        else{
            $update_filename=$old_image;
            // echo $update_filename;
        }
      
        // print_r($_POST);
        // print_r($_FILES);
        // die();
        $update="UPDATE `category` SET `category`='$category',`image`='$update_filename' WHERE `cid`='$user_id'";
           // Execute query
           $result=mysqli_query($db, $update);
           if($result) 
           {
            if($_FILES['cimage']['name'] !='')
               {
                move_uploaded_file($tempname,$folder);
                unlink("./image/".$old_image);
               }
               header("location:Manage_Category.php");
               $_SESSION['status'] = "category updated successfully";
           } 
           else  
           {
               header("location:Manage_Category.php");
               $_SESSION['status'] = "Category Updation of Data Failed";
           }
           
        } 
    ?>
    