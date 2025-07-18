<?php
session_start();
	include("connection.php");
	if($_REQUEST["id"])
	{
		$delete="DELETE FROM `category` WHERE `cid`=".$_REQUEST["id"];
		$result = mysqli_query($db, $delete);
		if($result)
		{
			header("location:Manage_Category.php");
			$_SESSION['status'] = "category deleteted successfully";
		}
		else
		{
			$_SESSION['status'] = "Category delettion of Data Failed";
		}
    }
	?>