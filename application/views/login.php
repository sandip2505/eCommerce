<?php $this->flash('accountCreated', 'alert alert-success') ?>


<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
  <!-- 	 <link rel="stylesheet" href="public\assets\css\style1.css"> -->
  <?php linkCSS("assets/css/style1.css") ?>
</head>
<body>


  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="img" style="background-image: url(images/bg.jpg);"></div>
            <h3 class="text-center mb-4">Login Here</h3>
            <form method="POST" class="signup-form" name="form" action="<?php echo BASEURL; ?>/accountController/userLogin">
              <div class="form-group mb-1">
                <label class="label" for="name">User Name:</label>
                <input type="email" name="email" class="form-control" placeholder="Email..." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
                <div class="error">
                  <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
                </div>
              </div>
              <span class="error">  </span><br><br>
              <div class="form-group mb-1">
                <label class="label" for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
                <div class="error">
                  <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
                </div>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <span class="error"> </span><br><br>
              
              <div class="form-group">
                <button name="submit" class="form-control btn btn-primary submit px-3">LOGIN</button><br> <br> if you not registered <a href="<?php route('accountController/index') ?>">Register</a>
                <!-- <button><a href="registration.php">Register</a></button> -->
                <!-- <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button> -->
                <!-- <button name="submit" name="submit" class="form-control btn btn-primary submit px-3">submit </button><br>  if already acoount registered <a href="login.php">LOGIN</a> -->
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>