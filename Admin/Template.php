<?php
session_start();
if(!isset($_SESSION['id'])) 
{
    // Redirect to the login page if the session ID is not set
    header("location:index.php");   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- icon style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
    <style>
.wrapper .section .top_navbar h5{
    margin-left:500px;
    position:fixed;
    padding-top: 1rem;
    color: #f4fbff;
    font-family:initial;
}
 </style>
</head>

<body>
       
<div class="wrapper">      
    <div class="section">
        <div class="top_navbar">
            <div class="hamburger">
                <a href="#"><i class="fa-solid fa-house-user"></i></a>  
            </div>
                <h5>Welcome To Admin Panel-<?php echo $_SESSION['id']?></h4></h5> 
        </div> 
    </div>
</div>

<?php include("Header.php");?>
    
<?php include("Footer.php");?>
    
</body>
</html>