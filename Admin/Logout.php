<?php
session_start();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="Style.css" type="text/css">
<?php
if (isset($_SESSION['id'])) 
{  
    session_destroy();
    header("location:index.php");
}
else
{
    echo '<script>alert("something is wrong");</script>';
}
?>
<?php
include("Header.php");	  
?>

<?php
include("Footer.php");	  
?>

