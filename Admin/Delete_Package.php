<?php
	include("connection.php");
	if($_REQUEST["id"])
	{
		$delete="DELETE FROM `package` WHERE `pid`=".$_REQUEST["id"];
		 $result = mysqli_query($db, $delete);
		if($result)
		{
			header("location:Manage_Package.php");
		}
		else
		{
			echo "<script>alert('record not deleted')</script>";
		}
    }
	?>