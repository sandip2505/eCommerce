
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- <link rel="stylesheet" href="public\assets\css\style1.css"> -->
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
            <h3 class="text-center mb-4">Create Your Account</h3>
            <form method="POST" class="signup-form" name="form" action="<?php route('accountController/createAccount') ?>">
              <div class="form-group mb-3">
                <label class="label" for="name">User Name</label>
                <input type="text" class="form-control" placeholder="User Name" name="uname" id="uname" value="<?php if(!empty($data['uname'])): echo $data['uname']; endif; ?>">
              </div>
              <div class="error">
                <?php if(!empty($data['unameError'])): echo $data['unameError']; endif; ?>
              </div>
              <div class="form-group mb-3">
                <label class="label" for="comment">First name</label>
                <input type="text" class="form-control" placeholder="First name" name="fname" id="fname" value="<?php if(!empty($data['fname'])): echo $data['fname']; endif; ?>">
              </div>
               <div class="error">
                <?php if(!empty($data['fnameError'])): echo $data['fnameError']; endif; ?>
              </div>
              <div class="form-group mb-3">
                <label class="label" for="comment">Last name</label>
                <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname" value="<?php if(!empty($data['lname'])): echo $data['lname']; endif; ?>">
              </div>
              <div class="error">
                <?php if(!empty($data['lnameError'])): echo $data['lnameError']; endif; ?>
              </div>
              <div class="form-group mb-3">
                <label class="label" for="email">Email Address</label>
                <input type="text" class="form-control" placeholder="Email Address" name="email" value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
              </div>
              <div class="error">
                <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
              </div>
              
              <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="error">
                <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
              </div>
              <div class="form-group mb-3">
                <label for ="gender"> Gender </label>
                <input type="radio" name="gender" <?php  if(isset($gender) && $gender=="MALE") echo "checked";?> value="MALE"  >MALE</input>
                <input type="radio" name="gender" <?php  if(isset($gender) && $gender=="FEMALE") echo "checked";?> value="FEMALE" >FEMALE</input>
              </div>
             
              <div class="form-group">
                <!-- <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button> -->
                <button name="submit"  class="form-control btn btn-primary submit px-3">submit </button><br><br>


                if already acoount registered <a href="<?php route('accountController/loginForm') ?>">LOGIN</a>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>


</body>
</html> 