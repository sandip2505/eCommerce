<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php"; ?>
</head>

<body>

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
  
<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
