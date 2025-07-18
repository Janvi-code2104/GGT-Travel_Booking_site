<link rel="stylesheet" href="Style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
.card{
  left: -130px;
  width: 160%;
  }
.card-header{

}
.card-body{
  justify-content: space-between;
  align-items: center;
  /* padding: 5px; */
}

button{
    outline: none;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    padding: 5px;
    color: #ffffff;
    background-color: #0298cf;
}
td a:nth-child(1){
    outline: none;
    border: none;
    border-radius: 2px;
    padding: 5px;
    /* background-color: #0298cf; */
}
td a:nth-child(2){
  outline: none;
    border: none;
    border-radius: 2px;
    padding: 5px;
    background-color: #f80000; 
}

td a:nth-child(1){
    /* background-color: #0298cf; */
}
td a:nth-child(2){
    background-color: #f80000;
}
td img{
     /* height: 60px; */
    width: 70px;
    height: 50px;
    object-fit: cover;
    border-radius: 5px;
    /* border line style  */
    border:3px solid #ced0d2; 
}
td{
  text-align: center;
}
thead{
  text-align: center;
  font-size: 14px;
}
</style>
<?php
session_start();
 include('Header.php');
 include("connection.php");
?>

<body class="bg-light">
<div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8">

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
    <div class="card">
<div class="card-header bg-dark text-light">
    <h5><i class="fa-solid fa-business-time"></i>  Book</h5>
</div>
<div class="card-body">
<table class="table table-striped table-bordered text-center" >
  <thead class="table-dark ">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Username</th>
      <th scope="col">Moblie No.</th>
      <th scope="col">Aadhar No.</th>
      <th scope="col">Email  Id</th>
      <th scope="col">Destination</th>
      <th scope="col">Arrivals</th>
      <th scope="col">Leaving</th>
      <th scope="col">Members</th>
      <th scope="col">View_Data</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <!-- fetch data -->
  <?php
  include("connection.php");
  $query = " select * from book ";
 $result = mysqli_query($db, $query);
 $i=1;
 while ($data = mysqli_fetch_array($result))
 { 
  echo<<<product
  <tr>
  <th scope="col">$i</th>
  <td>$data[username]</td>
  <td>$data[mno]</td>
  <td>$data[aadhar_no]</td>
  <td>$data[email_id]</td>
  <td>$data[destination]</td>
  <td>$data[arrivals]</td>
  <td>$data[leaving]</td>
  <td>$data[how_many]</td>
  <td><a href="?view=$data[bid]" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
  <td><a href="?edit=$data[bid]" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>  
  <a href='Delete_book.php?id=$data[bid]' onclick='return confirm("Are you sure To Cencel This Booking ?")'class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
  </td>
  </tr>
product;
$i++;
 
 }
  ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- view model-->
 <div class="modal fade" id="viewbook" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">view Book</h1>
       </div>

      <form action="Manage_Book.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="input-group">
          <input type="text" class="form-control" name="bid" id="viewid" hidden>
        </div>
      
        <div class="input-group mt-3">
           <label class="input-group-text">Username</label>
           <input type="text" class="form-control" name="username" id="user" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Moblie No.</label>
           <input type="number" class="form-control" name="mno" id="mono" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Aadhar_NO</label>
           <input type="number" class="form-control" name="aadhar_no" id="ano" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Email_Id</label>
           <input type="text" class="form-control" name="email_id" id="email" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Destination</label>
           <input type="text" class="form-control" name="destination" id="destina" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Arrivals</label>
           <input type="text" class="form-control" name="arrivals" id="arrival" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Leaving</label>
           <input type="text" class="form-control" name="leaving" id="leave" >
        </div>
        
        <div class="input-group mt-3">
           <label class="input-group-text">How_many Members</label>
           <input type="text" class="form-control" name="How_many" id="Members" >
        </div>
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="view_btn" class="btn btn-primary">ok</button>
      </div>
</form>
    </div>
  </div>
</div>

<?php
if(isset($_GET['view']) && $_GET['view']>0)
{
  $query="SELECT * FROM `book` WHERE `bid`='$_GET[view]'";
  $result=mysqli_query($db,$query);
 $data=mysqli_fetch_array($result);
  echo"
    <script>
    var viewbook = new bootstrap.Modal(document.getElementById('viewbook'), {
     keyboard: false
     });
     document.querySelector('#user').value=`$data[username]`;
    document.querySelector('#mono').value=`$data[mno]`;
     document.querySelector('#ano').value=`$data[aadhar_no]`;
    document.querySelector('#email').value=`$data[email_id]`;
    document.querySelector('#destina').value=`$data[destination]`;
    document.querySelector('#arrival').value=`$data[arrivals]`;
     document.querySelector('#leave').value=`$data[leaving]`;
    document.querySelector('#Members').value=`$data[how_many]`;
     document.querySelector('#viewid').value=`$_GET[view]`;
      viewbook.show();
    </script>
  ";
}
?>
<!-- edit model -->
<div class="modal fade" id="editbook" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit Book</h1>
      </div>
      <form action="Edit_Book.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="input-group">
          <input type="text" class="form-control" name="bid" id="editid" hidden>
        </div>
      
        <div class="input-group mt-3">
           <label class="input-group-text">Username</label>
           <input type="text" class="form-control" name="username" id="users" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Moblie No.</label>
           <input type="number" class="form-control" name="mno" id="monu" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Aadhar_NO</label>
           <input type="number" class="form-control" name="aadhar_no" id="aano" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Email_Id</label>
           <input type="text" class="form-control" name="email_id" id="emailid" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Destination</label>
           <input type="text" class="form-control" name="destination" id="desti" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Arrivals</label>
           <input type="text" class="form-control" name="arrivals" id="arrivalss" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Leaving</label>
           <input type="text" class="form-control" name="leaving" id="leavei" >
        </div>
        
        <div class="input-group mt-3">
           <label class="input-group-text">How_many Members</label>
           <input type="text" class="form-control" name="How_many" id="Member" >
        </div>
        
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="editbook">Edit</button>
      </div>
    </div>
    </form>
  </div>
</div>

<?php
if(isset($_GET['edit']) && $_GET['edit']>0)
{
  $query="SELECT * FROM `book` WHERE `bid`='$_GET[edit]'";
  $result=mysqli_query($db,$query);
 $data=mysqli_fetch_array($result);
  echo"
    <script>
    var editbook = new bootstrap.Modal(document.getElementById('editbook'), {
     keyboard: false
     });
     document.querySelector('#users').value=`$data[username]`;
    document.querySelector('#monu').value=`$data[mno]`;
     document.querySelector('#aano').value=`$data[aadhar_no]`;
    document.querySelector('#emailid').value=`$data[email_id]`;
    document.querySelector('#desti').value=`$data[destination]`;
    document.querySelector('#arrivalss').value=`$data[arrivals]`;
     document.querySelector('#leavei').value=`$data[leaving]`;
    document.querySelector('#Member').value=`$data[how_many]`;
     document.querySelector('#editid').value=`$_GET[edit]`;
      editbook.show();
    </script>
  ";
}
?>
<?php
 include('Footer.php')
?>
 
    

