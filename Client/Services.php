<?php
session_start();
?>
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>
 <!-- Header Start -->
 <?php include("Header.php");?>
 <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Services</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="Home.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Services</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid py-0">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Safty Guide</h5>
                        <p class="m-0">This usually includes advice on introduction, getting there, attractions, accommodations, dining, activities, safety tips, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <!-- <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i> -->
                        <i class="fa-2x fa-solid fa-utensils mx-auto mb-4"></i>

                        <h5 class="mb-2">Food & Drinks</h5>
                        <p class="m-0">Food is the passport to a thousand journeys, each bite an adventure.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <!-- <i class="fa fa-2x fa-hotel mx-auto mb-4"></i> -->
                        <i class="fa fa-2x fas fa-hiking mx-auto mb-4"></i>
                        <h5 class="mb-2">Adventure</h5>
                        <p class="m-0">Adventure is the spice of life & it is your playground, go out and explore it.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <!-- <i class="fa fa-2x fa-route mx-auto mb-4"></i> -->
                        <i class="fa fa-2x fas fa-globe-asia mx-auto mb-4"></i>
                        <h5 class="mb-2">Around The India</h5>
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
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <!-- <i class="fa fa-2x fa-hotel mx-auto mb-4"></i> -->
                        <i class="fa fa-2x fa-solid fa-plane mx-auto mb-4"></i>
                        <h5 class="mb-2">Fastest Travel</h5>
                        <p class="m-0">A good traveller has no fixed plans and is not intent on arriving.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
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

     <!-- Testimonial Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="image\client4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Getgotrip travel is best service and good company</p>
                        <h5 class="text-truncate">zahid raman</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="image\guide3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Excellent trip with india travel with friends</p>
                        <h5 class="text-truncate">Dora the explore</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="image\guide1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">India is famous for many historical monuments and the architectural skill involved with getgotrip explore comformtably</p>
                        <h5 class="text-truncate">ganga rani</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="image\client3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Wonderful and well arranged tour from travel India one day
                        </p>
                        <h5 class="text-truncate">Harshdeep singh</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<br>
<br>
<br>
    <?php 
 include("Footerlink.php");
?>










