
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
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
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge">0</span>
            </a>
            <a href="" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->
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
                   <!--  <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div> -->
                     <?php
                        foreach ($data as $item) {
                          ?>
                    <a href="" class="nav-item nav-link"> <?php echo $item ->category_name;?></a>
                         
                    <!-- <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a> -->
                          <?php 
                      }   
                      ?>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?php route(''); ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php route('welcome/shop'); ?>" class="nav-item nav-link">Shop</a>
                        <a href="<?php route('welcome/detail'); ?>" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php route('welcome/cart'); ?>" class="dropdown-item">Shopping Cart</a>
                                <a href="<?php route('welcome/checkout'); ?>" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="<?php route('welcome/contact'); ?>" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">

                       <!-- if($this->getSession('userId')){
                        
            $this->redirect("profile");
        } -->

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
              <?php if(!$this->getSession('userId')): ?>
                  <li class="nav-item">
                    <a class="btn big-register" data-toggle="modal" data-target="#modalRegisterForm" href="javascript:void(0);">Register</a>
                </li>
                <li class="nav-item">
                    <a class="btn big-login" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0);">Log in</a>
                </li>
            <?php else: ?>

            <?php endif; ?>
        </ul>
        <?php if($this->getSession('userId')): ?>
          <!--  <ul class="my-2 my-lg-0"><a href="<?php echo BASEURL; ?>/accountController/logout" class="btn btn-success">Logout</a></ul> -->

           <?php
           include 'profile.php';
           ?>

       <?php endif; ?>
   </div>




   <!-- </ul> -->

            <!-- <a class="btn big-login" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0);">Log in</a>
                <a class="btn big-register" data-toggle="modal" data-target="#modalRegisterForm" href="javascript:void(0);">Register</a> -->
                <!-- <a class="btn big-register" data-toggle="modal" data-target="#modalProfile" href="javascript:void(0);">Profile</a> -->

            </div>
        </div>

    </nav>

                <?php # add condition if home page is active then and only ot will show 
                if($_SERVER['REQUEST_URI'] == '/eCommerceShop/welcome/index' || $_SERVER['REQUEST_URI'] == '/eCommerceShop/'){ ?>
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 410px;">
                                <img class="img-fluid" src="public\assets/img/carousel-1.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                        <a href="<?php route('welcome/shop'); ?>" class="btn btn-light py-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img class="img-fluid" src="public\assets/img/carousel-2.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                        <a href="<?php route('welcome/shop'); ?>" class="btn btn-light py-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="kjnimyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" class="signup-form" name="form" action="<?php echo BASEURL; ?>/accountController/userLogin">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Login Here</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="email" name="email" class="form-control validate" placeholder="Email..." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>" required>
              <div class="error">
                  <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
              </div>
          </div>

          <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <input type="password" name="password" class="form-control validate" placeholder="Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>" required>
              <div class="error" >
                  <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
              </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
    </div>
</form>
</div>
</div>
</div>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="POST" class="signup-form" name="form" action="<?php route('accountController/createAccount') ?>">


          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <!-- <input type="text" id="orangeForm-name" class="form-control validate"> -->
          <input type="text" id="orangeForm-name" class="form-control validate" name="uname" placeholder="User name" value="<?php if(!empty($data['uname'])): echo $data['uname']; endif; ?>"  required> 
          <div class="error">
            <?php if(!empty($data['unameError'])): echo $data['unameError']; endif; ?>
        </div>
        <!-- <label data-error="wrong" data-success="right" for="orangeForm-name">User name</label> -->
    </div>
    <div class="md-form mb-5">
      <i class="fas fa-user prefix grey-text"></i>
      <!-- <input type="text" id="orangeForm-name" class="form-control validate"> -->
      <input type="text" id="orangeForm-name" class="form-control validate" name="fname" placeholder="First name" value="<?php if(!empty($data['fname'])): echo $data['fname']; endif; ?>" required>
      <div class="error">
        <?php if(!empty($data['fnameError'])): echo $data['fnameError']; endif; ?>
    </div> 
    <!-- <label data-error="wrong" data-success="right" for="orangeForm-name">First name</label> -->
</div>
<div class="md-form mb-5">
  <i class="fas fa-user prefix grey-text"></i>
  <!-- <input type="text" id="orangeForm-name" class="form-control validate"> -->
  <input type="text" id="orangeForm-name" class="form-control validate" name="lname" placeholder="Last name" value="<?php if(!empty($data['lname'])): echo $data['lname']; endif; ?>" required>
  <div class="error">
    <?php if(!empty($data['lnameError'])): echo $data['lnameError']; endif; ?>
</div> 
<!-- <label data-error="wrong" data-success="right" for="orangeForm-name">Last name</label> -->
</div>
<div class="md-form mb-5">
  <i class="fas fa-envelope prefix grey-text"></i>
  <!-- <input type="email" id="orangeForm-email" class="form-control validate"> -->
  <input type="text" id="orangeForm-email" class="form-control validate" name="email" placeholder="Your email" value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>" required>
  <div class="error">
    <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
</div>
<!-- <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label> -->
</div>

<div class="md-form mb-4">
  <i class="fas fa-lock prefix grey-text"></i>
  <!-- <input type="password" id="orangeForm-pass" class="form-control validate"> -->
  <input id="orangeForm-pass" type="password" class="form-control validate" name="password" placeholder="Your password" value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>" required>
  <div class="error">
    <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
</div>
<!-- <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label> -->
</div>

</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-deep-orange">Sign up</button>
</form>
</div>
</div>
</div>
</div>
</div>

<!-- profile section -->


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDiscount">Launch
modal</button> -->

<!--Modal: modalDiscount-->
<div class="modal fade right" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading">User profile:
          <strong>User Name</strong>
      </p>
      <h3><?php echo $userData['uname']; ?></h3>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
      </button>
  </div>

  <!--Body-->
  <div class="modal-body">

    <div class="row">
      <div class="col-3">
        <p></p>
        <p class="text-center">
          <i class="fas fa-gift fa-4x"></i>
      </p>
  </div>

  <div class="col-9">
    <p>Sharing is caring. Therefore, from time to time we like to give our visitors small gifts. Today is
    one of those days.</p>
    <p>
      <strong>Copy the following code and use it at the checkout. It's valid for
        <u>one day</u>.</strong>
    </p>
    <h2>
      <span class="badge">v52gs1</span>
  </h2>

</div>
</div>
</div>

<!--Footer-->
<div class="modal-footer flex-center">
    <a href="<?php echo BASEURL; ?>/../eCommerceShop/accountController/logout" class="btn btn-danger">Logout
      <!-- <i class="far fa-gem ml-1 white-text"></i> -->
  </a>
  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
</div>
</div>
<!--/.Content-->
</div>
</div>
<!--Modal: modalDiscount-->

  <!-- <div >
    <a href="<?php echo BASEURL; ?>/../eCommerceShop/accountController/logout" class="nav-item nav-link">Logout</a>
</div> --> 

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>











