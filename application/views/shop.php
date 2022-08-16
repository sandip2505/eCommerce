<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>


    <!-- Featured Start -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="<?php route(''); ?>">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="<?php route('accountController/shop'); ?>">Shop</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">

            </div>
            <!-- Shop Sidebar End -->
            <!-- Shop Product Start -->
            <div class="container-fluid pt-5">
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
                </div>

                <div class="row px-xl-5 pb-3">
                    <?php
                    
                    foreach ($data['Productdata'] as $item) {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="../public/assets/img/download.jpg" alt="">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h4 class="text-truncate mb-3"><?php echo $item ->name;?></h4>
                                    <h6 class="text-truncate mb-3"><?php echo $item  ->description; ?></h6>
                                    <div class="d-flex justify-content-center">
                                        <h6><?php echo $item ->price;?></h6><h6 class="text-muted ml-2"><del><?php echo $item ->rrp;?></del></h6>
                                    </div>
                                </div> 
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                    <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> -->
                                    <button class="btn btn-sm text-dark p-0"  type='submit'>Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }   
                    ?>

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
    <!-- Vendor End -->

    <?php include "components/footer.php"; ?>

</body>

</html>