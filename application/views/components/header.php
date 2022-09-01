
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
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-danger font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
        </div>
           <form >
        </form>
    <div class="col-lg-6 col-6 text-left">
        <form action="<?php echo BASEURL; ?>/accountController/search" method="POST">
            <div class="input-group">
                <!-- <input type="hidden" name="valueToSearch "> -->
                <input type="text" name="valueToSearch" class="form-control"  placeholder="Search for products">
                <div class="input-group-append">
                    <span class="input-group-text bg-transparent text-primary">

                       <a href="<?php echo BASEURL; ?>/accountController/search"> <i class="fa fa-search"></i></a>
                        
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
        <?php
        $sno = 0; 
        if(isset($_SESSION['cart_item'])){

         foreach ($_SESSION['cart_item']  as $item) {

           $sno++;
       }
   }
   ?>
  <!--      </tbody>
   </table>
   <a href="<?php route('CartController/cartview'); ?>" class="btn border">

     -

   </tbody>
</table> -->
<a href="<?php route('CartController/cartview'); ?>" class="btn border">
    <i class="fas fa-shopping-cart text-primary"></i>
    <span class="badge"><?php echo $sno ?></span>
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
                    <?php
                    $mainObj = new Controller();
                    $catData = $mainObj->getCategoryList();
                    foreach ($catData as $item) {
                        if(isset($item['mainCat'])){ ?>
                            <div class="nav-item dropdown">
                                <?php if(isset($item['childCat'])){ ?>
                                    <a href="<?php route('accountController/CatProduct');?>/<?php echo $item['mainCat'][0]->id;?>" class="nav-link" data-toggle="dropdown" ><?php echo $item['mainCat'][0]->category_name;?><i class="fa fa-angle-down float-right mt-1"></i></a>
                                    <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                        <?php
                                        foreach ($item['childCat'] as $childItem) {
                                          ?>
                                          <a href="<?php route('accountController/CatProduct');?>/<?php echo $childItem->id;?>" class="dropdown-item"><?php echo $childItem->category_name;?></a>
                                          <?php 
                                      } 
                                      ?>
                                  </div>
                              <?php }else{ ?>
                                <a href="#" class="dropdown-item"  ><?php echo $item['mainCat'][0]->category_name;?></a>
                            <?php } ?>
                        </div>
                    <?php }
                    
                } 

                ?>

            </div>
        </nav>
    </div>
    <?php
    $url= $_SERVER['REQUEST_URI']; 
    ?>
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

                    <a href="<?php route(''); ?>" class="nav-item nav-link <?php if ($url=="/eCommerceShop/") {echo "active"; } else{echo "noactive";}?>">Home</a>
                    <a href="<?php route('accountController/shop'); ?>" class="nav-item nav-link <?php if ($url=="/eCommerceShop/accountController/shop") {echo "active"; } else{echo "noactive";}?>">Shop</a>
                    <a href="<?php route('welcome/contact'); ?>" class="nav-item nav-link <?php if ($url=="/eCommerceShop/welcome/contact") {echo "active"; } else{echo "noactive";}?>">Contact</a>
                    <a href="<?php route('CartController/cartview'); ?>" class="nav-item nav-link <?php if ($url=="/eCommerceShop/CartController/cartview") {echo "active"; } else{echo "noactive";}?>">Cart</a>
                    <a href="<?php route('welcome/about'); ?>" class="nav-item nav-link <?php if ($url=="/eCommerceShop/welcome/about") {echo "active"; } else{echo "noactive";}?> ">About Us</a>
                </div>
                <div class="navbar-nav ml-auto py-0">


                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav mr-auto">
                         <?php   if (!isset($_SESSION['userId'])):?> 
                          <li class="nav-item">
                            <a class="btn big-register" data-toggle="modal" data-target="#modalRegisterForm" href="javascript:void(0);">Register</a>
                        </li>


                        <li class="nav-item">
                            <a class="btn big-login" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0);">Log in</a>
                        </li>
                    <?php else: ?>


                    <?php endif; ?>
                </ul>
                <?php if(isset($_SESSION['userId'])):?> 


                 <?php
                 include 'profile.php';
                 ?>

             <?php endif; ?>
         </div>



     </div>
 </div>

</nav>

                <?php # add condition if home page is active then and only ot will show 
                if($_SERVER['REQUEST_URI'] == '/eCommerceShop/accountController/index' || $_SERVER['REQUEST_URI'] == '/eCommerceShop/'){ ?>
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 410px;">
                                <img class="img-fluid" src="public\assets/img/carousel-1.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                        <a href="<?php route('accountController/shop'); ?>" class="btn btn-light py-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img class="img-fluid" src="public\assets/img/carousel-2.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                        <a href="<?php route('accountController/shop'); ?>" class="btn btn-light py-2 px-3">Shop Now</a>
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
              <input type="email" id="email" name="email" class="form-control validate" onblur="check()" placeholder="Email..." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>" >
              <span class="text-danger" id="error7"></span>

              <div class="error">
                  <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
              </div>
          </div>

          <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <p>
                  <input type="password" name="password" id="password" class="form-control validate" onblur="check()" placeholder="Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>" >
                  <span class="text-danger" id="error7"></span>

                  <i class="bi bi-eye-slash" id="togglePassword"></i>
              </p>
              <div class="error" >
                  <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
              </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" id="login">Login</button>
    </div>

</form>
</div>
</div>
</div>


<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="POST" class="signup-form" name="form" action="<?php echo BASEURL; ?>/accountController/createAccount">


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
          <input type="text" id="uname" class="form-control validate" name="uname" onblur="check()" placeholder="User name" value="<?php if(!empty($data['uname'])): echo $data['uname']; endif; ?>">
          <span class="text-danger" id="error1"></span>
          <div class="error">
            <?php if(!empty($data['unameError'])): echo $data['unameError']; endif; ?>
        </div>
        <!-- <label data-error="wrong" data-success="right" for="orangeForm-name">User name</label> -->
    </div>
    <div class="md-form mb-5">
      <i class="fas fa-user prefix grey-text"></i>
      <!-- <input type="text" id="orangeForm-name" class="form-control validate"> -->
      <input type="text" id="fname" class="form-control validate" name="fname" onblur="check()"  placeholder="First name" value="<?php if(!empty($data['fname'])): echo $data['fname']; endif; ?>" >
      <span class="text-danger" id="error2"></span>

      <div class="error">
        <?php if(!empty($data['fnameError'])): echo $data['fnameError']; endif; ?>
    </div> 
    <!-- <label data-error="wrong" data-success="right" for="orangeForm-name">First name</label> -->
</div>
<div class="md-form mb-5">
  <i class="fas fa-user prefix grey-text"></i>
  <!-- <input type="text" id="orangeForm-name" class="form-control validate"> -->
  <input type="text" id="lname" class="form-control validate" name="lname" onblur="check()"  placeholder="Last name" value="<?php if(!empty($data['lname'])): echo $data['lname']; endif; ?>" >
  <span class="text-danger" id="error3"></span>

  <div class="error">
    <?php if(!empty($data['lnameError'])): echo $data['lnameError']; endif; ?>
</div> 
<!-- <label data-error="wrong" data-success="right" for="orangeForm-name">Last name</label> -->
</div>
<div class="md-form mb-5">
  <i class="fas fa-envelope prefix grey-text"></i>
  <!-- <input type="email" id="orangeForm-email" class="form-control validate"> -->
  <input type="email" id="Remail" class="form-control validate" name="email" onblur="check()" placeholder="Your email" value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
  <span class="text-danger" id="error4"></span>
  <div class="error">
    <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
</div>
<!-- <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label> -->
</div>

<div class="md-form mb-4">
  <i class="fas fa-lock prefix grey-text"></i>
  <!-- <input type="password" id="orangeForm-pass" class="form-control validate"> -->
  <input id="Rpassword" type="password" class="form-control validate" name="password" onblur="check()"  placeholder="Your password" value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>" >
  <span class="text-danger" id="error5"></span>

  <div class="error">
    <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
</div>
<!-- <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label> -->
</div>

</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-deep-orange" id="submit"  >Sign up</button>
    <input type="hidden" value="1" name="is_deleted" >
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

<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>
    <?php linkJS('assets/js/style.js'); ?>