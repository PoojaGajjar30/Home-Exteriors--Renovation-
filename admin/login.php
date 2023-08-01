<?php include_once ('../database/index.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/HSD1.png">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="login/css/util.css">
  <link rel="stylesheet" type="text/css" href="login/css/main.css">
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt><br><br><br><br>
          <center><img src="login/images/HSD.png" alt="IMG"><br></center><br><br>
        </div>
        <form class="login100-form validate-form" action="loginaction.php" method="post">
          <span class="login100-form-title">
            Member Login
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
            <input class="input100" type="text" name="Email" placeholder="Username" required> 
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="Password" placeholder="Password" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="loginbtn">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>