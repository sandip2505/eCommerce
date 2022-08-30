<!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="<?php route(''); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/shop'); ?>"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/detail'); ?>"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/cart'); ?>"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/checkout'); ?>"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="<?php route('welcome/contact'); ?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="<?php route(''); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/shop'); ?>"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/detail'); ?>"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="<?php route('welcome/cart'); ?>"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="<?php route('orderController/checkout'); ?>"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="<?php route('welcome/contact'); ?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="<?php route('accountController/newsletter') ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" name="name" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" name="email" placeholder="Your Email"
                                required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="https://codecrewinfotech.com/">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://codecrewinfotech.com/">HTML Codex</a><br>
                    Distributed By <a href="https://codecrewinfotech.com/" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="public/assets/img/payments.png" alt="">
            </div>
        </div> -->
    </div>
    <!-- Footer End -->

 
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <?php linkJS('assets/lib/easing/easing.min.js');?>
    <?php linkJS('assets/lib/owlcarousel/owl.carousel.min.js');?>

    <!-- Contact Javascript File -->
    <?php linkJS('assets/mail/jqBootstrapValidation.min.js');?>
    <?php linkJS('assets/mail/contact.js');?>

    <!-- Template Javascript -->
    <?php linkJS('assets/js/main.js'); ?>