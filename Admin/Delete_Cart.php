<?php
	include("connection.php");
	if($_REQUEST["id"])
	{
		$delete="DELETE FROM `user_info` WHERE `u_id`=".$_REQUEST["id"];
		 $result = mysqli_query($db, $delete);
		if($result)
		{
			header("location:Manage_users.php");
		}
		else
		{
			echo "<script>alert('record not deleted')</script>";
		}
    }
	?>