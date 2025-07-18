<!DOCTYPE html>
<html lang="en">
<head>
    <!-- icon style -->
    <link rel=”stylesheet” href=”https://use.fontawesome.com/releases/v5.8.1/css/all.css”>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <!-- profile image -->
        <div class="profile">
            <img src="Admin_Profile2.jpg" alt="image">
            <h4><?php echo $_SESSION['id']?></h4>
            <p>Welcome</p>
        </div>
          <!-- menu item -->
        <ul>
            <li> 
                <a href="Template.php">
                   <span class="icon"><i class="fas fa-home"></i></span>
                      <span class="item">Home</span>
                </a>
            </li>
            <li>
                <a href="Manage_Category.php">
                <span class="icon"><i class="fa-solid fa-layer-group"></i></span>
                   <span class="item">Category</span>
                </a>
            </li>
            <li>
                <a href="Manage_Package.php">
                <span class="icon"><i class="fa-solid fa-umbrella-beach"></i></span>
                    <span class="item">Package</span>
                </a>
            </li>
            <li>
                <a href="Manage_Book.php">
                <span class="icon"><i class="fa-solid fa-business-time"></i></i></span>
                    <span class="item">Book</span>
                </a>
            </li>
            <li>
                <a href="Manage_users.php">
                 <span class="icon"> <i class="fa-solid fa-user"></i></span>
                <span class="item">Customer</span>
                </a>
            </li>
            <li>
                <a href="Manage_Feedback.php ">
                <span class="icon"><i class="fa-solid fa-message"></i></span>
                    <span class="item">Feedback</span>
                </a>
            </li>
            <li><a href="Logout.php">
            <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                <span class="item">logout</span></a></li>
        </ul>
    </div> 
       </div>

</body>
</html>