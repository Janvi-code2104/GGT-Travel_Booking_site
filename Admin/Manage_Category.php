<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
.card{
  left: -130px;
  width: 160%;
  }
.card-body{
  justify-content: space-between;
  align-items: center;
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
td button:nth-child(1):hover{
  /* background-color: #0298cf; */
}
td a:nth-child(2){
    background-color: #f80000;
}
td img{
   
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
         <h5><i class="fa-solid fa-layer-group"></i> Manage Category</h5>
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addcategory">+Add Category</button> 
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered text-center">
          <thead class="table-dark">
          <tr>
          <th scope="col">Sr.No</th>
          <th scope="col">Category_Name</th>
          <th scope="col">Category_Image</th>
          <th scope="col">View_Data</th>
          <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>

         <?php
         $query="SELECT * FROM `category`";
         $result=mysqli_query($db,$query);
         $i=1;
         while($data=mysqli_fetch_array($result)){
        echo<<<product
          <tr>
          <th scope="col">$i</th>
          <td>$data[category]</td>
          <td><img src="./image/$data[image]" height="50" width="150px"></td>
          <td><a href="?view=$data[cid]" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
          <td><a href="?edit=$data[cid]" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>  
          <a href='Delete_Category.php?id=$data[cid]' onclick='return confirm("Are you sure To Delete This Category?")'class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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
<div class="modal fade" id="addcategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Add Category</h1>
      </div>
      <form action="Add_Category.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
      <div class="form-group mt-3">
            <input type="text" class="form-control" name="id" hidden>
        </div>
      
        <div class="input-group mt-3">
            <label class="input-group-text">Category Name</label>
            <input type="text" class="form-control" name="cat_name" placeholder="Enter Category"required>
        </div>

        <div class="input-group mt-3">
        <label class="input-group-text">Image</label>
            <input type="file" class="form-control" name="cimage" placeholder="Select File"required>
        </div>
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="addcategory">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>

 <!-- view model-->
 <div class="modal fade" id="viewcategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">view Category</h1>
        
      </div>

      <form action="Manage_Category.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
        <div class="input-group">
          <input type="text" class="form-control" name="cid" id="id"hidden >
        </div>
      
        <div class="input-group mt-3">
           <label class="input-group-text">Category</label>
           <input type="text" class="form-control" name="category" id="cate" >
        </div>

        <div class="form-group mt-3">
        <input type="text" class="form-control" name="imgpath" id="imgpath"><br>
        <img src="" id="cimage" width="100%"alt="img">
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
  $query="SELECT * FROM `category` WHERE `cid`='$_GET[view]'";
  $result=mysqli_query($db,$query);
  $data=mysqli_fetch_array($result);
  echo"
    <script>
    var viewcategory = new bootstrap.Modal(document.getElementById('viewcategory'), {
     keyboard: false
     });
     document.querySelector('#cate').value=`$data[category]`;
      document.querySelector('#imgpath').value=`$data[image]`;
     document.querySelector('#cimage').src=`./image/$data[image]`;
     document.querySelector('#id').value=`$_GET[view]`;
      viewcategory.show();
    </script>
  ";
}
?>

<!-- edit model -->
<div class="modal fade" id="editcategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit Category</h1>
      </div>
      <form action="Edit_Category.php" method="POST" enctype="multipart/form-data" >
      <div class="modal-body">
      <div class="form-group">
            <input type="text" class="form-control" name="cid" id="editcid" hidden>
        </div>
      
        <div class="input-group mt-3">
            <label class="input-group-text">Category Name</label>
            <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Enter Category">
        </div>

        <div class="input-group mt-3">
        <label class="input-group-text">Image</label>
            <input type="file" class="form-control" name="cimage" placeholder="Select File">
        </div>
        <br><input type="text" name="old_path" id="oldpath"><br>
        <br><img src="" name="cimage" width="70%" id="oldimage" class="mb-3">
 
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="editcategory">Edit</button>
      </div>
    </div>
    </form>
  </div>
</div>

<?php
if(isset($_GET['edit']) && $_GET['edit']>0)
{
  $query="SELECT * FROM `category` WHERE `cid`='$_GET[edit]'";
  $result=mysqli_query($db,$query);
 $data=mysqli_fetch_array($result);
  echo"
    <script>
    var editcategory = new bootstrap.Modal(document.getElementById('editcategory'), {
     keyboard: false
     });
     document.querySelector('#cat_name').value=`$data[category]`;
    document.querySelector('#oldpath').value=`$data[image]`;
     document.querySelector('#oldimage').src=`./image/$data[image]`;
     document.querySelector('#editcid').value=`$_GET[edit]`;
      editcategory.show();
    </script>
  ";
}
?>

</body>
<?php
 include('Footer.php')
?>



 