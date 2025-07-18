<?php
session_start();
if (isset($_SESSION['u_id'])) 
{
?>
<link rel="stylesheet" href="Style.css" type="text/css">
<link href="css/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Bootstrap Link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap Link -->
 <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

<!-- Font Awesome Cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<!-- Font Awesome Cdn -->


<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<style>
.card{
    border:none;
    /* max-width:1300px; */
    /* text-align: center; */
    width: 1300px;
    height: 280px;
    /* margin: 15px; */
    box-shadow: rgba(5, 4, 4, 0.1) 0px 4px 12px;
}
.card .card-body{
  position: absolute;
  top: 54%;
  left: 53%;
  transform: translate(-50%, -50%);
  z-index: 1;
  /* color: white; Or any desired color */
  font-size: 24px;
  /* font-weight: bold; */
  margin:20px;

}
.card .image{
    height: 100%; 
}
.card img{
  position: relative;
  object-fit: cover;
  width: 30%;
  height: 85%;
  object-fit: cover;
  box-shadow:none;
  margin:20px;
 
}
.star i{
    font-size: 15px;
    /* color:black; */
}
.checked{ 
    color: #ffa500;
}

.card .card-body h4{
    font-size: 25px;
    margin-top:-60px;  
}
.card .card-body h4 i {
  color:blue;
}
.card .card-body h6{
    font-size: 20px;
}
.card .card-body h6 i{
 font-size:23px;
 color:gray;
}
.card .card-body h5{
    margin-top:18px;
    font-size: 22px;
}
.card .card-body h5 i{
 font-size:23px;
 color:brown;
}
.card .card-body p{
    font-size:20px;
    color:black;
    margin-bottom:10px;
}
    </style>
<!-- Google Fonts -->
<?php include("Header.php");?>
<!-- Header Start -->
<div class="container-fluid page-header">
  <div class="container">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-4 text-white text-uppercase">Book your Dream Place</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a href="Home.php" class="text-white">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Book</p>
                </div>
     </div>
  </div>
</div> 

     <!-- Contact Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Let's Explore The World</h6>
                <h2>Book Your Perfect Tour Package</h2>
            </div>
            <!-- Header End -->
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
    <?php
     include("connection.php");
      if(isset($_GET['id']))
      {
      $id=$_GET['id'];
     $sql="SELECT * from package where pid=$id";
      $result=mysqli_query($db, $sql);
      while($data=mysqli_fetch_array($result))
     {
 ?>
<?php
     echo<<<product
     <div class="card">
     <div class="image">
      <img src="./image/$data[image]" alt="img" width="350">
     </div>
     product;
     ?>
         <div class="card-body">
           <h4><i class="fa-solid fa-location-dot"></i> <?php echo $data['package']?></h4>
             <div class="star">
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
           </div>
           <p>
               With its incredible culture, amazing Indian landmarks and delicious food, India is one of favourite travel destinations.</p>
               <h6><i class="fa-regular fa-calendar-days"></i> Days: <strong><?php echo $data['days']?></strong></h6>
           <h5>Total Price:<strong><?php echo $data['pprice']?> <i class="fa-solid fa-indian-rupee-sign"></i></strong></h5>
           
         </div>
       </div>
       <?php }  }
 ?>
</div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <form  method="POST">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" name="book" placeholder="Username" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="number" class="form-control p-4" name="mono" placeholder="Moblie Number" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="number" class="form-control p-4"name="add" placeholder="Aadher Number" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" name="email" placeholder="Your Email" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" name="dest" placeholder="Destination" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="date" class="form-control p-4" name="date" placeholder="Arrivals Date" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="date" class="form-control p-4" name="day" placeholder="leaving" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="number" class="form-control p-4" name="many" placeholder="Members" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="text-center py-3">
                            <input type="submit" class="btn btn-primary" name="Register" value="Book"> 
                            
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
        $users=$_POST['book'];
        $number=$_POST['mono'];
        $addhar=$_POST['add'];
        $ema=$_POST['email'];
        $destin=$_POST['dest'];
        $arrival=$_POST['date'];
        $leave=$_POST['day'];
        $memers=$_POST['many'];
        // print_r($_POST);
        // print_r($_FILES);
        // die();
        $sql ="INSERT INTO `book`(`username`, `mno`, `aadhar_no`, `email_id`, `destination`, `arrivals`, `leaving`, `how_many`) VALUES ('$users','$number','$addhar','$ema','$destin','$arrival','$leave','$memers')";
        $alert=mysqli_query($db, $sql);
        if($alert)
        {
            $_SESSION['status'] = "Booking successfully";
        }
        else
        {
            $_SESSION['status'] = "Something is Wrong";
        }
    //    if($alert) 
	// {
    //     header("location:Home.php");
    // } 
	// else  
	// {
    //     header("location:Book.php");
    // }

    }?>
    <!-- Contact End -->
    <?php include("Footerlink.php");?>
     <!-- Back to Top -->
  <?php
}
else {
    header('Location: login.php');
}
?>
<a href="Book.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>



