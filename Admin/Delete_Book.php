<?php
	include("connection.php");
	if($_REQUEST["id"])
	{
		$delete="DELETE FROM `book` WHERE `bid`=".$_REQUEST["id"];
		 $result = mysqli_query($db, $delete);
		if($result)
		{
			header("location:Manage_Book.php");
		}
		else
		{
			echo "<script>alert('record not deleted')</script>";
		}
    }
	?>