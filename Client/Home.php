<?php session_start();
?>

<link rel="stylesheet" href="style.css" type="text/css">

  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap Link -->

<!-- Favicon -->
   <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
<!-- <link href="img/favicon.ico" rel="icon"> -->

  <!-- Font Awesome Cdn -->
  <link rel="stylesheet"type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Font Awesome Cdn -->


  <!-- Google Fonts -->
  <link rel="preconnect"type="text/css" href="https://fonts.googleapis.com">
  <link rel="preconnect" type="text/css" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="css/style.css" rel="stylesheet" type="text/css">

  <?php
   include("Header.php");
  ?> 

    <!-- Home Section Start -->
    <div class="home">
    <div class="content">
    <!-- <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4> -->
    <h1 class="display-3 mb-md-4">Let's Discover The <br> <span class="changecontent"></span> Together </h1>                 
    <!-- <h1 class="display-3 text-white mb-md-4"><h4>Explore The India</h4></h1>                  -->
      <!-- <h1>Visit <span class="changecontent"></span></h1> -->             
      <p>Life is not meant to be lived in one place so, Traveling far and wide for unforgettable views</p>
      <a href="Package.php">BOOK PLACE</a>
    </div>
  </div>
  <!-- Home Section End -->
<style>
    /* famous package */
    section{
    max-width:2000px;
    width: 100%;
    margin: 0px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
   
    /* margin-left:20px; */
    margin-top: -40px;
    /* margin-right:100px; */
}
    /* margin: auto; */
    
.packages .card{
    border:none;
    max-width:400px;
    flex:1 1 250PX;
    /* FOR ADJUST  */
    text-align: center;
    width: 200px;
    height: 400px;
    margin: 15px;
    box-shadow: rgba(5, 4, 4, 0.1) 0px 4px 12px;
}
.packages .card .image{
    height: 50%; 
}
.packages .card img{
    position: relative;
  display: flex;
  flex-direction: row;
  min-width: 0;
  flex-wrap: wrap;
  justify-content:space-between;  
    height: 60%;
    object-fit: cover;
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin:0;
    box-shadow:none;
}
.packages .card .card-body{
    /* background: transparent; */
}
.packages .card .card-body h5{
    font-size: 15px;
    /* font-weight: 600; */
    
}
.packages .card .card-body p{
    font-size: 10px;
    
}
.checked{ 
    color: #ffa500;
}
#categ{
 padding:10px 30px;
 margin:30px;
 text-align: center;
margin-left:80%;
}
.star i{
    font-size: 10px;
}
.packages .card .card-body h6{
    font-size: 17px;
    margin-bottom:30px; 
}
.packages .card .card-body h4{
    font-size: 15px;
    margin-bottom:15px; 
    display: flex;

}
.packages .card .card-body a{
    border:none;
    text-decoration: none;
    color: black;
   background-color: #f8f5f5; 
    padding: 15px 50px;
    cursor: pointer;
    font-weight: bold;
    position:relative;
    border-radius: 5px;
}
.packages .card .card-body a:hover{
    cursor: pointer;
    padding: 10px 60px; 
    background-color: rgb(180, 214, 253);
    border-radius: 5px;
    border:1px solid black;
   
}
</style>
<!-- /* Section Packages End */ -->
<div class="container-fluid py-5">
        <div class="container pt-3 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Famous Tour Packages</h1>
            </div>
            </div>
            </div>
<?php
include("connection.php");
 $query="SELECT * FROM `package` where `category_id`= 8 limit 20";
 $result=mysqli_query($db,$query);
?> 
<body class="bg-light">
  <!-- Section Packages Start -->
  <section class="packages" id="packages">  
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
            <div class="card-body">
              <h5><i class="fa-solid fa-location-dot"></i> <?php echo $data['package']?></h5>
               <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
             
              <h6> Price: <strong><?php echo $data['pprice']?> <i class="fa-solid fa-indian-rupee-sign"></i> </strong>  |  <i class="fa-regular fa-calendar-days"></i> Days: <strong><?php echo $data['days']?></strong></h6>
              <!-- <h4>Days: <strong><?php echo $data['days']?></strong></h4> -->
               <!-- <hr> -->
               <a href="Book.php?id=<?php echo $data['pid']?>">Book Now</a>
            </div>
          </div>
          <?php }
    ?>
        </div>
        </section>
        <style>
  .loadmore a{
    margin:0;
        border:none;
        text-decoration:none;
        padding:10px 20px;
        background-color:blue;
        color:white;
    
      }
      </style>
      <div class="loadmore  py-5">
    <center><a href="Package.php">Explore More</a></center>
    </div>
    
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>See the world. It is more beautiful than any dream you can think of & Constantly searching for views that take my breath away.</p>
                         <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/kedarnath.jpg" alt="">
                            </div>
                            
                            <div class="col-6">
                                <img class="img-fluid" src="img/ayodhaya.jpg" alt="">
                            </div>
                        </div>
                        <center>
                        <div class="col-4 pt-0">
                        <img class="img-fluid" src="img/logoo.jpg" alt="">
                            </div></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Life is about the adventures you take and the memories you make. </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Best arranging or booking vacation or travel packages, travel reservations</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">India Coverage</h5>
                            <p class="m-0">Exploring the magic of India</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- category -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-5">
            <div class="text-center mb-0 pb-0">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Category</h1>
            </div>
        </div>
    </div>
    <?php
 include("connection.php");
 $query="SELECT * FROM `category` limit 6 ";
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
<style>
  .loadmore a{
    margin:0;
        border:none;
        text-decoration:none;
        padding:10px 20px;
        background-color:blue;
        color:white;
    
      }
      </style>
      <div class="loadmore py-5">
    <center><a href="Category.php">See More</a></center>
    </div>
    <!-- category end -->
      <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">This usually includes advice on introduction, getting there, attractions, accommodations, dining, activities, safety tips, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Discovering India, one amazing moment at a time. </p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Travel is like a giant blank canvas, and the painting on the canvas is only limited by one’s imagination so travel more and worry less.</p>
                        </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->



      <!-- Registration Start -->
    <!-- <div class="container-fluid bg-registration py-5" style="margin: 90px 0;"> -->
    <!-- <img class="position-absolute w-100 h-100" src="img/about.jpg" style="margin: 90px 0;"> -->
        <!-- <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Festival</h1>
                    </div>
                    <p class="text-white">With its incredible culture, amazing Indian landmarks and delicious food,
                         India is one of favourite travel destinations With Getgotrip.</p>
                    </p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Best Gudie And Service</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Registration End -->

    <style>
.container .guide{
    margin-left:250px;
}    
</style>
       <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
           
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="guide">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image\g1.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Vishruti</h5>
                            <p class="m-0">Travel Guide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image\g2.jpg" alt="">
                            
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Janvi</h5>
                            <p class="m-0">Travel Guide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image\g3.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Radhika</h5>
                            <p class="m-0">Travel Guide</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    

  <?php 
// include("Bookheader.php");
?>
  <?php include("Footerlink.php");?>
     <!-- Back to Top -->
  <a href="Home.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
