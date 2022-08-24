<?php
// if (isset($_SESSION['name'])): 
// endif;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php"; ?>
</head>

<body>
 <?php include "components/header.php"; ?>

 <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="<?php route(''); ?>">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="row">
    <!-- <h1 class="text-center border-bottom pb-4 mb-4">View Cart Products</h1> -->
    <?php
    if(isset($_GET['value']) == "updated"){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Successfully!</strong> Your product updated.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }else if(isset($_GET['value']) == "deleted"){
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Successfully!</strong> Your product deleted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    ?>
</div>
<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                     <td>Sno</td>
                     <td>Name</td>
                     <td>Price</td>
                     <td>Quantity</td>
                     <td>Total</td>
                     <td>Update</td>
                     <td>Delete</td>
                 </tr>
             </thead>
             <tbody class="align-middle">

                 <?php
                 $sno = 1;
                 $t = 0;
                 foreach ($_SESSION  as $item) {
                  $p = 0;
                  $q = 0;
                  echo "<form action='cartDelete' method='POST'>";
                  echo "<tr>";
                  echo "<td>".$sno++."</td>";
                  foreach($item as $key => $value){
                    if($key == 0){
                        echo "<td>".$value."</td>";
                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                    }else if($key == 1){
                        echo "<td>".$value."</td>";
                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                        $p = $value;
                    }else if($key == 2){
                        echo "<td><input type='text' name='pro$key' value='".$value."' class=''></td>";
                        $q = $value;
                    }
                }
                $t = $p * $q;
                echo "<td>".$t."</td>";
                echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";

                // echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                echo "<td class='align-middle'>
                <button type='submit' name='event' value='Delete'><i class='fa fa-times'></i></button>
                </td>";

                echo "</form>";
            }

            ?>
                   <!--  <tr>
                        <td><img src='public/assets/img/download.jpg' width="50" height="40" /></td>
                        <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div> -->
                           <!--  <select name='quantity' class='quantity' onchange="this.form.submit()">
                                <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                                <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                            </select> -->
                        <!-- </td>
                            <td class="align-middle"></td> -->

                            <!-- <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td> -->
<!--                         <td class="align-middle">

                            <input type='hidden' name='code' value="" />
                            <input type='hidden' name='action' value="remove" />
                            <button type='submit' ><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                -->                
                       <!--  <tr>
                            <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-4.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><?php $a =150; ?></h6>
                            <h6 class="font-weight-medium">150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?php  echo "$t"?></h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3"><a href="<?php route('welcome/checkout')?>"></a>Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <?php include "components/footer.php"; ?>
</body>

</html>