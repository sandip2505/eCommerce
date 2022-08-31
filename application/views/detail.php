<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "components/head.php"; ?>
</head>

<body>
   <?php include "components/header.php"; ?>
   <!-- <img class="img-fluid" src="../public\assets/img/carousel-1.jpg" alt="Image"> -->


   <!-- Page Header Start -->
   <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<!-- <img class="w-100 h-100" src="../public\assets/img/product-1.jpg" alt="Image"> -->
<?php


foreach ($data['Productdata'] as $item) {
    // var_dump($item);exit;
 ?>
 <!-- <img  class="w-100 h-100" src="/../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>"  alt=""> -->
 <!-- <h3 class="font-weight-semi-bold"><?php echo $item ->name;?></h3> -->

 <div class="container-fluid py-4">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-4">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">

                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="/../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="/../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>" alt="Image">
                    </div>
                    <!-- <div class="carousel-item">
                        <img class="w-100 h-100" src="/../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="/../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>" alt="Image">
                    </div> -->
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>
        <form method="POST" action="<?php route('cartController/cartAdd')?>">
            <div class="col-lg-7 pb-4">
                 <input type='hidden'  name='id' value="<?php echo $item ->id;?>" />
               <input type='hidden'  name='name' value="<?php echo $item ->name;?>" />
               <h3 class="font-weight-semi-bold"><?php echo $item ->name;?></h3>
               <input type="hidden" name="qty" placeholder="Quantity" value="1" required class="form-control">
               <input type="hidden" name="product_id" value="<?php echo $item->product_id;?>">
               <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            <input type='hidden'  name='price' value="<?php echo $item ->price;?>" />
            <h3 class="font-weight-semi-bold mb-4"><?php echo $item ->price;?></h3>

            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="size-1" name="size">
                    <label class="custom-control-label" for="size-1">XS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="size-2" name="size">
                    <label class="custom-control-label" for="size-2">S</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="size-3" name="size">
                    <label class="custom-control-label" for="size-3">M</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="size-4" name="size">
                    <label class="custom-control-label" for="size-4">L</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="size-5" name="size">
                    <label class="custom-control-label" for="size-5">XL</label>
                </div>

            </div>

            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="color-1" name="color">
                    <label class="custom-control-label" for="color-1">Black</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="color-2" name="color">
                    <label class="custom-control-label" for="color-2">White</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="color-3" name="color">
                    <label class="custom-control-label" for="color-3">Red</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="color-4" name="color">
                    <label class="custom-control-label" for="color-4">Blue</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="color-5" name="color">
                    <label class="custom-control-label" for="color-5">Green</label>
                </div>

            </div>
            <div class="d-flex align-items-center mb-4 pt-2">
                <!-- <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control bg-secondary text-center" value="1">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-plus">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div> -->
                <!-- <button type="submit" name="add" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button> -->
                <button type="submit" name="add" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Add to cart</button>
                <!-- <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button> -->
            </div>
        </form>
        <div class="d-flex pt-2">
            <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
            <div class="d-inline-flex">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
$gt=[]; 
foreach ($data['reviewdata'] as $value) {

    $gt[]= $value ->review;;

}
?>

<div class="row px-xl-5">
    <div class="col">
        <div class="nav nav-tabs justify-content-center border-secondary mb-4">
            <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (<?php echo count($gt);?>)</a>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-pane-1">
                <h4 class="mb-3">Product Description</h4>
                <?php echo $item ->description;?>
                <!-- <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                    <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p> -->
                </div>
                <?php
            }
            ?>
            <div class="tab-pane fade" id="tab-pane-2">
                <h4 class="mb-3">Additional Information</h4>
                <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                            </li>
                            <li class="list-group-item px-0">
                                Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                            </li>
                            <li class="list-group-item px-0">
                                Duo amet accusam eirmod nonumy stet et et stet eirmod.
                            </li>
                            <li class="list-group-item px-0">
                                Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                            </li>
                        </ul> 
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                            </li>
                            <li class="list-group-item px-0">
                                Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                            </li>
                            <li class="list-group-item px-0">
                                Duo amet accusam eirmod nonumy stet et et stet eirmod.
                            </li>
                            <li class="list-group-item px-0">
                                Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pane-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-4">1 review for "<?php echo $item ->name;?>"</h4>
                        <div><br>
                            <?php
                            $gt=[]; 
                            foreach ($data['reviewdata'] as $item) {

                                // $name=array($item);

                                ?>
                                <img src="../../public\assets/img/user.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><?php echo $item ->name;?><small> - <i><?php echo $item ->created_at;?></i></small></h6>

                                   <!--  <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5>"/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label> 
                                    </div><br><br> -->
                                    <p><?php echo $item ->review;?></p>
                                    <p><?php echo $item ->rate;?></p> 
                                </div><br>
                                <?php
                            }
                            ?>





                        </div>
                        <br>
                    </div>
                    <div class="col-md-6" style="margin-top: 100px;">
                        <h4 class="mb-4">Leave a review</span></h4>
                        <small>Your email address will not be published. Required fields are marked *</small>
                        <form method="POST" action="<?php route('cartController/CreateReview')?>">
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Your Rating * :</p>
                            <!-- <div class="text-primary">
                              <span class="far fa-star checked"></span>    
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                          </div> -->
                          <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $item->product_id;?>">
                    <div class="form-group">
                        <label for="message">Your Review *</label>
                        <textarea id="message" name="review" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email *</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Shop Detail End -->
<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
    </div>
    <div class="container-fluid py-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <?php
                foreach ($data['ProductData'] as $item) {
                    ?>
                    <form method="POST" action="<?php route('cartController/cartAdd')?>">
                        <div class="card product-item border-0">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="<?php route('accountController/detail')?>/<?php echo $item ->id;?>">
                                <img  class="img-fluid w-100" src="/../eCommerceAdmin/public/assets/upload/<?php echo $item->image;?>"  alt="">
                                </a>
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                             <input type='hidden'  name='name' value="<?php echo $item ->name;?>" />
                             <input type='hidden'  name='id' value="<?php echo $item ->id;?>" />
                             <h6 class="text-truncate mb-3"><?php echo $item ->name; ?></h6>
                             <div class="d-flex justify-content-center">
                                 <input type='hidden'  name='price' value="<?php echo $item ->price;?>" />
                                 <h6><?php echo $item ->price;?></h6><h6 class="text-muted ml-2"><del><?php echo $item ->rrp;?></del></h6>
                             </div>
                         </div>
                         <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="<?php route('accountController/detail')?>/<?php echo $item ->id;?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <button type="submit" name="add" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Add to cart</button>
                        </div>
                    </div>
                </form>

                <?php
            }
            ?>
        </div>
    </div>
</div>
</div>
<!-- Products End -->



<?php include "components/footer.php"; ?>
</body>

</html>