<?php
	include("connection.php");
	if($_REQUEST["id"])
	{
		$delete="DELETE FROM `feedback` WHERE `fid`=".$_REQUEST["id"];
		 $result = mysqli_query($db, $delete);
		if($result)
		{
			header("location:Manage_Feedback.php");
		}
		else
		{
			echo "<script>alert('record not deleted')</script>";
		}
    }
	?>