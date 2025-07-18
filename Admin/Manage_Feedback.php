<link rel="stylesheet" href="style.css" type="text/css">
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
    width: 0px;
    height: 50px;
    object-fit: cover;
    border-radius: 10px;
    /* border line style  */
    border:3px solid #ced0d2; 
}
td{
  text-align: center;
}
thead{
  text-align: center;
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
    <h5><i class="fa-solid fa-message"></i> View Feedback</h5>
</div>
<div class="card-body">
<table class="table table-striped table-bordered text-center" >
  <thead class="table-dark ">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Username</th>
      <th scope="col">Feedback</th>
      <th scope="col">View_Data</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     <!-- fetch data -->
  <?php
  include("connection.php");
  $query = " select * from feedback ";
 $result = mysqli_query($db, $query);
 $i=1;
 while ($data = mysqli_fetch_array($result))
 {
  echo<<<product
  <tr>
  <th scope="col">$i</th>
  <td>$data[username]</td>
  <td>$data[feedback]</td>
  <td><a href="?view=$data[fid]" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
  <td><a href='Delete_Feedback.php?id=$data[fid]' onclick='return confirm("Are you sure To Delete Feedback ?")'class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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
<div class="modal fade" id="viewfeedback" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">view Feedback</h1>
       </div>

      <form action="Manage_Feedback.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="input-group">
          <input type="text" class="form-control" name="fid" id="viewid" hidden>
        </div>
      
        <div class="input-group mt-3">
           <label class="input-group-text">Username</label>
           <input type="text" class="form-control" name="username" id="user" >
        </div>

        <div class="input-group mt-3">
           <span class="input-group-text">Feedback</span>
           <textarea class="form-control" name="feedback" id="feed"></textarea>
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
  $query="SELECT * FROM `feedback` WHERE `fid`='$_GET[view]'";
  $result=mysqli_query($db,$query);
 $data=mysqli_fetch_array($result);
  echo"
    <script>
    var viewfeedback = new bootstrap.Modal(document.getElementById('viewfeedback'), {
     keyboard: false
     });
     document.querySelector('#user').value=`$data[username]`;
    document.querySelector('#feed').value=`$data[feedback]`;
     document.querySelector('#viewid').value=`$_GET[view]`;
     viewfeedback.show();
    </script>
  ";
}
?>
<?php
 include('Footer.php')
?>
 
    

