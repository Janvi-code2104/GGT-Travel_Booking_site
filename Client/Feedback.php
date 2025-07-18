<?php
session_start();
if (isset($_SESSION['u_id'])) 
{
?>
<link rel="stylesheet" href="Style.css" type="text/css">
<link href="css/style.css" rel="stylesheet">
<!-- Bootstrap Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
<!-- Bootstrap Link -->

<!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

<!-- Font Awesome Cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<!-- Font Awesome Cdn -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script> -->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

<!-- Google Fonts -->
<?php include("Header.php");?>
<!-- Header Start -->
<div class="container-fluid page-header">
  <div class="container">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-4 text-white text-uppercase">Your Valueable Reviews</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a href="Home.php" class="text-white">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Feedback</p>
                </div>
     </div>
  </div>
</div>
    <!-- Header End -->
   
     <!-- Contact Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Feedback</h6>
                <h2>What Say Our About GETGOTRIP</h2>
            </div>
            <?php
      if(isset($_SESSION['status']) && $_SESSION['status'] !='' ) 
      {
    ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php
    unset($_SESSION['status']);
      }
    ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        
                        <form method="POST">

                            <div class="control-group">
                                <input type="text" class="form-control p-4" placeholder="Username" name="userName" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" type="text" placeholder="Feedback" name="fb" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center py-3">
                                 <input type="submit" class="btn btn-primary" name="Register" value="Feedback"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
include("connection.php");
    if(isset($_POST['Register']))
	{
        $users=$_POST['userName'];
        $feed=$_POST['fb'];
      
        // print_r($_POST);
        // print_r($_FILES);
        // die();
        $sql ="INSERT INTO `feedback`(`username`, `feedback`) VALUES ('$users','$feed')";
        $alert=mysqli_query($db, $sql);
        if($alert)
        {
            $_SESSION['status'] = "Feedback successfully";
        }
        else
        {
            $_SESSION['status'] = "Something is Wrong";
        }

        // header("location:Home.php");
    //     if($alert) 

	// {
    //     header("location:Home.php");
    // } 
	// else  
	// {
    //     header("location:feed.php");
    // }
    }
    ?>   
         
    <!-- Contact End -->
    
    <?php
    
     include("Footerlink.php");
    ?>
     <!-- Back to Top -->
     <?php
}
else {
    header('Location:login.php');
}
?>
<!-- Back to Top -->
<a href="Feedback.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
 
