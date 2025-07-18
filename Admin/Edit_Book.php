<?php 
session_start();
	include("connection.php");
    if(isset($_POST['editbook'])) 
	{
        $user_id=$_POST['bid'];
        $user=$_POST["username"];
        $no=$_POST["mno"];
        $aadharno=$_POST["aadhar_no"];
        $email=$_POST["email_id"];
        $destin=$_POST["destination"];
        $arrival=$_POST["arrivals"];
        $leave=$_POST["leaving"];
        $Howmany=$_POST["How_many"];

        $update="UPDATE `book` SET `username`='$user',`mno`='$no',`aadhar_no`='$aadharno',`email_id`='$email',`destination`='$destin',`arrivals`='$arrival',`leaving`='$leave',`how_many`='$Howmany' WHERE `bid`='$user_id'";
        // Execute query
        $result=mysqli_query($db, $update);
        if($result) 
        {
            header("location:Manage_Book.php");
            $_SESSION['status'] = "Booking updated successfully";
        } 
        else  
        {
            header("location:Manage_Book.php");
            $_SESSION['status'] = "Book Updation of Data Failed";
        }
    }
       ?>
