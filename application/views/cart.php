
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
                      <th>Sno</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Update</th>
                      <th>Delete</th>    
                  </tr>
              </thead>
              <tbody class="align-middle">
               <?php
               $sno = 1;
               $t = 0;
               $s = 0;
               $gt = [];
               $g = [];
               if(count($_SESSION['cart_item'])){

                   foreach ($_SESSION['cart_item']  as $item) {
                      $p = 0;
                      $q = 0;
                      echo "<form action='cartUpdate' method='POST'>";
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
                    $t = $p * $q ;
                    $gt[] = $t;
                    $g[] = $s+$t;
                    echo "<td>".$t."</td>";
                    echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";

                // echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                    echo "<td class='align-middle'>
                    <button type='submit' name='event' value='Delete'><i class='fa fa-times'></i></button>
                    </td>";

                    echo "</form>";
                }

                ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-4">
        <form class="mb-5" method="POST" action="<?php route('cartController/couponApply')?>">
            <div class="input-group">
                <input type="text" name="valueToCoupon" class="form-control p-4" placeholder="Coupon Code" value="<?php echo isset($_POST['valueToCoupon'])?$_POST['valueToCoupon']:'' ?>">
                <!--   <span class="couponError"></span> -->
                <button class="btn btn-primary">Apply Coupon</button>
            </div>
            <div class="error text-danger ml-0">
              <?php if (!empty($data['couponError'])) : echo $data['couponError'];
              endif; ?>
          </div>   
          <?php 
          if(isset($data['CouponData'])){
            foreach ($data['CouponData']  as $item) { 
                // var_dump($item);exit;
                $s =$item->coupon_value;
                ?>
                <?php
            }

        }
        ?>
        <?php
        $Gt =  array_sum($gt);
        $at = $Gt-$s;
        $_SESSION["at"] = $at;
        ?>
    </form>
    <form method="POST" action="<?php route('orderController/checkout')?>">
     
        <div class="card border-secondary mb-5">
            <div class="card-header bg-secondary border-0">
                <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 pt-1">
                    <h6 class="font-weight-medium">Subtotal</h6>
                    <h6 class="font-weight-medium"><?php  echo $Gt ?></h6>
                    <!-- <h6 class="font-weight-medium">150</h6> -->
                </div>
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-medium">Discount</h6>
                    <h6 class="font-weight-medium"><?php  echo $s ?></h6>
                </div>
            </div>
            <div class="card-footer border-secondary bg-transparent">
                <div class="d-flex justify-content-between mt-2">
                    <h5 class="font-weight-bold">Total</h5>
                    <h5 class="font-weight-bold"><?php  echo $at ?></h5>
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-primary my-3 py-3"><a href=""></a>Proceed To Checkout</button>

        </form>
    </div>

<?php }else{
    ?>
    <h1 class="text-danger text-center ml-3"> Your cart is empty !<i class="fas fa-shopping-cart"></i></h1>
    <?php
} 
?>
</div>
<?php include "components/footer.php"; ?>
</body>
</html>



