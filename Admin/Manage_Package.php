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
    width: 70px;
    height: 50px;
    object-fit: cover;
    border-radius: 5px;
    /* border line style  */
    border:2px solid #ced0d2; 
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
include("connection.php");
 include("Header.php");
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
    <h5><i class="fa-solid fa-umbrella-beach"></i> Manage Package</h5>
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addpackage">
  +Add Package
</button>
</div>
<div class="card-body">
<table class="table table-striped table-bordered text-center" >
  <thead class="table-dark ">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Package_Name</th>
      <th scope="col">Package_Image</th>
      <th scope="col">Price</th>
      <th scope="col">Days</th>
      <th scope="col">Category</th>
      <th scope="col">View_Data</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  <!-- fetch data -->
  <?php
  include("connection.php");
  $query = " select * from package";
  $result = mysqli_query($db, $query);
  $i=1;
  while($data = mysqli_fetch_array($result))
 { 
  echo<<<product
  <tr>
  <th scope="col">$i</th>
  <td>$data[package]</td>
  <td><img src="./image/$data[image]" height="50" width="150px"></td>
  <td>$data[pprice]</td>
  <td>$data[days]</td>
  <td>$data[category]</td>
  <td><a href="?view=$data[pid]" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
  <td><a href="?edit=$data[pid]" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>  
  <a href='Delete_Package.php?id=$data[pid]' onclick='return confirm("Are you sure To Delete This Package?")'class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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

<!--add Modal -->
<div class="modal fade" id="addpackage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Add Package</h1>
      </div>
      <form action="Add_Package.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
      <div class="form-group mt-3">
            <input type="text" class="form-control" name="id" hidden>
        </div>
      
        <div class="input-group mt-3">
            <label class="input-group-text">Package Name</label>
            <input type="text" class="form-control" name="pack_name" placeholder="Enter Package"required>
        </div>

        <div class="input-group mt-3">
        <label class="input-group-text">Image</label>
            <input type="file" class="form-control" name="pimage" placeholder="Select File"required>
        </div>

        <div class="input-group mt-3">
            <label class="input-group-text">Package Price</label>
            <input type="number" class="form-control" name="pprice" placeholder="Enter Price"required>
        </div>
        
        <div class="input-group mt-3">
            <label class="input-group-text">Days</label>
            <input type="number" class="form-control" name="Days" placeholder="Enter Days"required>
        </div>
        <div class="input-group mt-3">
        <label class="input-group-text">Select category</label> 
        <select name="category">
        <?php
        $categories="SELECT `category` FROM `category`";
        $query_categories=mysqli_query($db,$categories);
        while($rows_categories=mysqli_fetch_array($query_categories))
        {
            echo'<option>'.$rows_categories['category'].'</option>';
        }
        ?>
         </select>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="addpackage">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>

 <!-- view model-->
 <div class="modal fade" id="viewpackage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">view Package</h1>
       </div>

      <form action="Manage_Package.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="input-group">
          <input type="text" class="form-control" name="pid" id="id" hidden>
        </div>
      
        <div class="input-group mt-3">
           <label class="input-group-text">Package</label>
           <input type="text" class="form-control" name="Package" id="pack" >
        </div>

        <div class="form-group mt-3 ">
        <input type="text" class="form-control" name="imgpath" id="imgpath"><br>
        <img src="" id="pimage" width="70%"alt="img">
        </div> 
        
        <div class="input-group mt-3">
           <label class="input-group-text">Price</label>
           <input type="number" class="form-control" name="price" id="pri" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Days</label>
           <input type="number" class="form-control" name="days" id="da" >
        </div>

        <div class="input-group mt-3">
           <label class="input-group-text">Category</label>
           <input type="text" class="form-control" name="category" id="cate" >
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
  $query="SELECT * FROM `package` WHERE `pid`='$_GET[view]'";
  $result=mysqli_query($db,$query);
 $data=mysqli_fetch_array($result);
  echo"
    <script>
    var viewpackage = new bootstrap.Modal(document.getElementById('viewpackage'), {
     keyboard: false
     });
     document.querySelector('#pack').value=`$data[package]`;
    document.querySelector('#imgpath').value=`$data[image]`;
     document.querySelector('#pimage').src=`./image/$data[image]`;
    document.querySelector('#pri').value=`$data[pprice]`;
     document.querySelector('#da').value=`$data[days]`;
    document.querySelector('#cate').value=`$data[category]`;
     document.querySelector('#id').value=`$_GET[view]`;
      viewpackage.show();
    </script>
  ";
}
?>

<!-- edit model -->
<div class="modal fade" id="editpackage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit Package</h1>
      </div>
      <form action="Edit_Package.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
      <div class="form-group">
            <input type="text" class="form-control" name="pid" id="editpid"hidden>
        </div>
      
        <div class="input-group mt-3">
            <label class="input-group-text">Pacakge Name</label>
            <input type="text" class="form-control" name="pack_name" id="pack_name" placeholder="Enter Package">
        </div>

        <div class="input-group mt-3">
        <label class="input-group-text">Image</label>
            <input type="file" class="form-control" name="pimage" placeholder="Select File">
        </div>
        <br><input type="text" name="old_path" id="oldpath"><br>
        <br><img src="" name="old_image" width="30%" id="oldimage" class="mb-3">
 
        
        <div class="input-group mt-3">
            <label class="input-group-text">Price</label>
            <input type="text" class="form-control" name="pprice" id="price">
        </div>
        
        <div class="input-group mt-3">
            <label class="input-group-text">Days</label>
            <input type="text" class="form-control" name="Days" id="Day">
        </div>
        
        <div class="input-group mt-3">
        <label class="input-group-text">Select category</label> 
        <select name="newcategory" id="categ">
        <?php
        $categories="SELECT `category` FROM `category`";
        $query_categories=mysqli_query($db,$categories);
        while($rows_categories=mysqli_fetch_array($query_categories))
        {
            echo'<option>'.$rows_categories['category'].'</option>';
        }
        ?>
         </select>
        </div>     
        </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="editpackage">Edit</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php
if(isset($_GET['edit']) && $_GET['edit']>0)
{
  $query="SELECT * FROM `package` WHERE `pid`='$_GET[edit]'";
  $result=mysqli_query($db,$query);
 $data=mysqli_fetch_array($result);
  echo"
    <script>
    var editpackage = new bootstrap.Modal(document.getElementById('editpackage'), {
     keyboard: false
     });
     document.querySelector('#pack_name').value=`$data[package]`;
    document.querySelector('#oldpath').value=`$data[image]`;
     document.querySelector('#oldimage').src=`./image/$data[image]`;
      document.querySelector('#price').value=`$data[pprice]`;
    document.querySelector('#Day').value=`$data[days]`;
    document.querySelector('#categ').value=`$data[category]`;
     document.querySelector('#editpid').value=`$_GET[edit]`;
    editpackage.show();
    </script>
  ";
}
?>

</body>
<?php
 include('Footer.php')
?>

    