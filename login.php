<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="assets/img/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Welcome <br> On Alicyart Studio's website</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="assets/img/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Register here<br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <!-- Login -->
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="logind.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="text"><a href="index.php">Back To Home</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
      <!-- Login -->

      <!-- Register -->
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="register.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-phone-square-alt"></i>
                <input type="text" placeholder="Enter your telephone number" name="no_tlp" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="register">
              </div>
              <input type="text" name="role" value="customer" hidden>
              <input type="text" name="picture_profile" value="profile.png" hidden>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    <!-- Register -->
    
    </div>
    </div>
  </div>
</body>
</html>
