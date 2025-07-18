<?php session_start();
?>
<link rel="stylesheet" href="Style.css" type="text/css">
<!-- Bootstrap Link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap Link -->


<!-- Font Awesome Cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<!-- Font Awesome Cdn -->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<!-- Google Fonts -->
<link href="css/style.css" rel="stylesheet">

<?php include("Header.php");?>
<!-- Header Start -->
<div class="container-fluid page-header">
  <div class="container">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-4 text-white text-uppercase">TOP Exclusive Category</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a href="Home.php" class="text-white">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Category</p>
                </div>
     </div>
  </div>
</div>
    <!-- Header End -->

      <div class="container-fluid py-0">
        <div class="container pt-5 pb-0">
            <div class="text-center mb-0 pb-0">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Category</h1>
            </div>
        </div>
    </div>
<?php
 include("connection.php");
 $query="SELECT * FROM `category` ";
 $result=mysqli_query($db,$query);
?>
<main>
    <?php
    while($data=mysqli_fetch_array($result))
    {
        echo<<<product
        <div class="card">
        <div class="image">
         <img src="./image/$data[image]"  alt="img">
        </div>
        product;
    ?>
    
        <div class="caption">
        <p class="category_name"> <?php echo $data['category']?></p>
        
             
    <center><a href="Package.php?id=<?=$data['cid']?>" class="add" >View Package</a></center>
    <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
    </div>
    </div>
    <?php }
    ?>
</main>

<?php 
 include("Footerlink.php");
?>
<a href="Package.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

