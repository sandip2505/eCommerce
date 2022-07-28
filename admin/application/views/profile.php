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
  <?php include "components/menu.php"; ?>
  <div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
  <h2>View Records
   <a href="<?php route() ?>" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
</h2>

<table class="table table-hover">
 <thead>
  <tr>
   <th>Id</th>
   <th>Product Name</th>
   <th>Price</th>
   <th>Quantity</th>
   <th>SKU Code</th>
   <th>RRP</th>
   <th>Image</th>
   <th>Description</th>
   <th>Action</th>


</tr>
</thead>
<?php
foreach ($data as $item) {
  ?>
 <tr>
   <td><?php echo $item->id;?></td>
   <td><?php echo $item ->name;?></td>
   <td><?php echo $item ->price;?></td>
   <td><?php echo $item ->quantity;?></td>
   <td><?php echo $item ->sku;?></td>
   <td><?php echo $item ->rrp;?></td>
   <td><img src="<?php route('public/assets/upload') ?>/<?php echo $item ->image?>" width="100px" height="100px"></td>
   <td><?php echo $item  ->description; ?></td>
   <td><a href="<?php echo BASEURL; ?>/ProductController/editProduct/<?php echo $item->id; ?>" class="btn btn-info">Edit</a></td>
   <td><a href="<?php echo BASEURL; ?>/new_controller/delete/<?php echo $item->id; ?>" class="btn btn-danger">Delete</a></td>


</tr>
<?php 
}   
?>
</table>

</div>
</body>
<?php include "components/footer.php"; ?>
</div>