<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>

    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="<?php route(''); ?>">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>

    <!-- Checkout Start -->
    <form action="<?php route ('orderController/createOrder')?>" method="post">
        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="Please Enter Firstname" name="firtsname" value="<?php if (!empty($data['firtsname'])) : echo $data['firtsname'];
                                endif; ?>">
                                <span class="error text-danger">
                                    <?php if (!empty($data['firtsnameError'])) : echo $data['firtsnameError'];
                                    endif; ?>
                                </span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Please Enter Laststname"name="lastname" value="<?php if (!empty($data['lastname'])) : echo $data['lastname'];
                                endif; ?>">
                                <span class="error text-danger">
                                    <?php if (!empty($data['lastnameError'])) : echo $data['lastnameError'];
                                    endif; ?>
                                </span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="email" placeholder="example@email.com"name="email" value="<?php if (!empty($data['email'])) : echo $data['email'];
                                endif; ?>">
                                <span class="error text-danger">
                                    <?php if (!empty($data['emailError'])) : echo $data['emailError'];
                                    endif; ?>
                                </span>                                                                                                    
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789"name="mobile" value="<?php if (!empty($data['mobile'])) : echo $data['mobile'];
                                endif; ?>">
                                <span class="error text-danger">
                                    <?php if (!empty($data['mobileError'])) : echo $data['mobileError'];
                                    endif; ?>
                                </span>                                                                                  
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" placeholder="123 Street"name="address_1" value="<?php if (!empty($data['address_1'])) : echo $data['address_1'];
                                endif; ?>">
                                <span class="error text-danger">
                                    <?php if (!empty($data['address_1Error'])) : echo $data['address_1Error'];
                                    endif; ?>
                                </span>                                                                                  
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" placeholder="123 Street"name="address_2" value="<?php if (!empty($data['address_2'])) : echo $data['address_2'];
                                endif; ?>">
                                <span class="error text-danger">
                                    <?php if (!empty($data['address_2Error'])) : echo $data['address_2Error'];
                                    endif; ?>
                                </span>                                                                                        
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select id="select" name="Country" class="form-control" value="<?php if (!empty($data['Country'])) : echo $data['Country'];
                                endif; ?>">
                                <option >select</option>
                                <option value="India">India</option>
                                <option value="United States">United States</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York"name="city" value="<?php if (!empty($data['city'])) : echo $data['city'];
                            endif; ?>">
                            <span class="error text-danger">
                                <?php if (!empty($data['cityError'])) : echo $data['cityError'];
                                endif; ?>
                            </span>                                                                                                                
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York"name="state" value="<?php if (!empty($data['state'])) : echo $data['state'];
                            endif; ?>">
                            <span class="error text-danger">
                                <?php if (!empty($data['stateError'])) : echo $data['stateError'];
                                endif; ?>
                            </span>                                                                                                                
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123"name="post_code" value="<?php if (!empty($data['post_code'])) : echo $data['post_code'];
                            endif; ?>">
                            <span class="error text-danger">
                                <?php if (!empty($data['post_codeError'])) : echo $data['post_codeError'];
                                endif; ?>
                            </span>                                                                                                                
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>

                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <?php
                        $t = 0;
                        $s = 50;
                        $gt = [];
                        $it = [];
                        $g = [];
                        foreach ($_SESSION['cart_item']  as $item) {
                          // echo "<pre>";   var_dump($_SESSION['cart_item']);exit;
                            $p = 0;
                            $q = 0;
                            ?>
                            <div class="d-flex justify-content-between">
                                <?php
                                foreach ($item as $key => $value) {
                                    if ($key == 0) {
                                        echo "<p>$value </p>";
                                        $n=$value;
                                    } 
                                    
                                    else if ($key == 1) {
                                        echo "<p>$value </p>";
                                        $p = $value;
                                        
                                    }else if ($key == 2) {
                                    // echo "<p>$value </p>";
                                       $q = $value;

                                   }else if ($key == 3) {

                                      // echo "<p> $value </p>";
                                       $i = $value;
                                       // var_dump($i);
                                   }
                               }
                               $it[]=$i;
                               
                               $t = $p * $q;
                               $gt[] = $t;
                               $g[] = $s + $t;
                               $m = $_SESSION['at'] +  $s ;


                               ?>
                           </div>

                           <?php
                       } 
                       ?>
                       <?php
                       $n = implode(',',$it);
                            // var_dump($n);exit;
                       ?>
                       <hr class="mt-0">
                       <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium"><?php echo $_SESSION['at'];?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">50</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold"><?php echo $m; ?></h5>
                    </div>
                </div>
            </div>


            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Payment</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Direct Check</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                        </div>
                    </div>
                </div>
                <div>
                 <!-- <input type="hidden" name="u_id" value="<?php echo $_SESSION['userId'] ;?>"> -->
                          <!-- <?php foreach($it as $m){
                                    // var_dump($m);
                            
                          ?> -->    
                          <input type="hidden" name="id" value="<?php echo $n ?>">
                          <input type="hidden" name="Quantity" value="<?php echo $q ?>">
                          <input type="hidden" name="total_price" value="<?php echo array_sum($g) ?>">
                          <input class="form-control" type="hidden" name="user_id" value="<?php echo $_SESSION['userId']; ?>">
                      </div>
                      <!--     <?php } ?> -->
                      
                      <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" id="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" name="submit" value="submit">
                            Place Order
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
<!-- Checkout End -->


<?php include "components/footer.php"; ?>
</body>

</html>