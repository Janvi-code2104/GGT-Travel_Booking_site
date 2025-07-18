
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
     
<!-- Topbar Start -->
 <div class="container-fluid bg-light pt-4 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-4 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                    
                       <p><i class="fa fa-envelope mr-2"></i>info@GetGoTrip.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                    </div>
                </div>
                 <div class="col-lg-6 text-center text-lg-right">
                    <!-- <div class="d-inline-flex align-items-center"> -->
                        <!-- <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a> -->
                        <div class="login">
                        <?php
                if(isset($_SESSION['u_id']))
                {?>
                <a href="Profile.php">
                  <h5><img src="Admin_Profile2.jpg" alt="image" width="50"> <?php echo $_SESSION['u_id']?></h5></a>
                <?php
                }else
                { 
                  // header("location:Home.php");
                }
                ?>
          <!-- <input class="form-control me-0" type="text" placeholder="Search"> -->
          <!-- <a href="Logout.php" class="btn btn-primary" type="button">logout</a> -->
              <!-- </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
<!-- Topbar End -->

<!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
      <a class="navbar-brand" id="logo"><span><i class="fa-solid fa-plane-departure"></i></span>
        GETGO<span>TRIP</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                   <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3"  id="navbarCollapse">
          <ul class="navbar-nav me-auto py-0">
          <li class="nav-item">
            <a class="nav-link active" href="Home.php"><i class="fas fa-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Category.php">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Package.php">Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Book.php">Book</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i>Cart</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="Feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.php">Services</a>
          </li>
          <?php
                if(isset($_SESSION['u_id']))
          {?>
               <li class="nav-item">
            <a class="nav-link" href="Logout.php">logout <i class="fa-solid fa-right-from-bracket"></i></a>
          </li> 
          <?php } 
          else { 
            ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">login <i class="fa-solid fa-user"></i></a>
          </li>

          <?php }?>
          
        </ul>
        
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <?php 
//  include("Footerlink.php");
?>

      

        
    
    
        