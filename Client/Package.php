<?php session_start();
?>

<link rel="stylesheet" href="Style.css" type="text/css">
<link href="css/style.css" rel="stylesheet">
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
<?php include("Header.php");?>
<!-- Header Start -->
<div class="container-fluid page-header">
  <div class="container">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-4 text-white text-uppercase">TOP Famous Package</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a href="Home.php" class="text-white">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Package</p>
                </div>
     </div>
  </div>
</div>
    <!-- Header End -->


<style>
    /* Section Packages Start */
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
.packages .card .image img:hover{
    /* border-width: 30px; */
    transform: scale(1.1);
    /* border-top: 30px; */
    /* transition: .5s; */
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
/* Section Packages End */
    </style>
    <body class="bg-light">
<?php
include("connection.php");
 $query="SELECT * FROM `category` ";
 $result=mysqli_query($db,$query); 
 if(isset($_GET['id']))
      {
      $id=$_GET['id'];
 $sql="SELECT * from package where category_id=$id limit 1" ;
 $result=mysqli_query($db, $sql);
 while($data=mysqli_fetch_array($result))
 {
    ?>
     <div class="container-fluid py-5">
        <div class="container pt-3 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>ALL<?php echo $data['category']?></h1>
            </div>
        </div>
    </div>
     <?php
 }}
?> 
   <section class="packages" id="packages">
   <?php
      if(isset($_GET['id']))
      {
      $id=$_GET['id'];
     $sql="SELECT * from package where category_id=$id";
      $result=mysqli_query($db, $sql);
      while($data=mysqli_fetch_array($result))
     {
 ?>
<?php
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
           <h6>Price: <strong><?php echo $data['pprice']?> <i class="fa-solid fa-indian-rupee-sign"></i> |  </strong> <i class="fa-regular fa-calendar-days"></i> Days: <strong><?php echo $data['days']?></strong> </h6>
           <!-- <h4>Days: <strong><?php echo $data['days']?></strong></h4> -->
           <a href="Book.php?id=<?php echo $data['pid']?>">Book Now</a>
         </div>
       </div>
       <?php }  }
 ?>  
     </div>
     </section>
     <div class="container-fluid py-5">
        <div class="container pt-3 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Perfect Tour Packages</h1>
            </div>
            </div>
            </div>
 <?php
 $query="SELECT * FROM `package` ";
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
        <?php 
 include("Footerlink.php");
?>
<a href="Package.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
