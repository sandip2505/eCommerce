<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "components/header.php"; ?>
</head>
<style>
  div .error{
    color: red;
  }
</style>
<body>
  <?php include "components/sidebar.php";?>
    <?php include "components/topbar.php";?>

  <div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
      <h2>View Category
       <a href="<?php route('ProductController/category') ?>" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
     </h2>
      

     <table class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Id</th>
         <th>Category Name</th>
        </tr>
     </thead>
     <?php
     foreach ($data as $item) {
      ?>
      <tr>
       <td><?php echo $item->id;?></td>
       <td><?php echo $item ->category_name;?></td>
      
  
   
 
  <td><a href="<?php echo BASEURL; ?>/ProductController/editCategory/<?php echo $item->id; ?>" class="btn btn-success">Edit</a></td>
  <td><a href="<?php echo BASEURL; ?>/ProductController/deletecategory/<?php echo $item->id; ?>"  onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-danger">Delete</a></td>


</tr>
<?php 
}   
?>
</table>
</div>
</body>
<?php include "components/footer.php"; ?>
</div>