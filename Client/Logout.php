<?php
session_start();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="Style.css" type="text/css">
<?php
if(true)
{
    session_destroy();
    header("location:Home.php");
}
else
{
    echo '<script>alert("something is wrong");</script>';
}
?>


