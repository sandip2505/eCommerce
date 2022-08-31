<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>
  
<!-- Products Start end -->
    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">This catogiry Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
            foreach ($data['searchdata'] as $item) {
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                         <a href="<?php route('accountController/detail')?>/<?php echo $item ->id;?>">
                         <img  class="img-fluid w-100" src="../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>"  alt="">
                         <img  class="img-fluid w-100" src="../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>"  alt="">
                         <input type="text" name="" value="<?php echo $item->image;?>">
                        
                        </a>
                     </div>
                     <form method="POST" action="<?php route('cartController/cartAdd')?>">
                        <input type='hidden' name='code' value="<?php echo $item ->code;?>" />
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <input type='hidden'  name='name' value="<?php echo $item ->name;?>" />
                            <h4 class="text-truncate mb-3"><?php echo $item ->name;?></h4>
                            <input type="hidden" name="qty" placeholder="Quantity" value="1" required class="form-control">
                            <input type="hidden" name="product_id" value="<?php echo $item->product_id;?>">
                            <div class="d-flex justify-content-center">
                               <input type='hidden'  name='price' value="<?php echo $item ->price;?>" />
                               <h6><?php echo $item ->price;?></h6><h6 class="text-muted ml-2"><del><?php echo $item ->rrp;?></del></h6>
                           </div>
                           <div class="d-flex justify-content-center">
                            <div class="text-primary  mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star-half-alt"></small>
                                <small class="far fa-star"></small>
                            </div>
                            <small class="pt-1">(50 Reviews)</small>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center bg-light border">
                        <button class="btn btn-sm text-dark p-0" data-toggle='modal'><a class="fas fa-eye text-primary mr-1"
                            href="<?php route('accountController/detail')?>/<?php echo $item ->id;?>">View Detail</a></button>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
        }   
        ?>

    </div>
</div>
<!-- Products end -->


<?php include "components/footer.php"; ?>

</body>

</html>