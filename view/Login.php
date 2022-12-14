<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Join US|GigPal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,700&family=Montserrat:ital,wght@0,800;1,700;1,900&family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
   </head>
<body>
  <nav id="navbar" class="navbar fixed-top ">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">GigPals</span>
    </div>
  </nav>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images\Color Palette.png" alt="">
        <div class="text">
          <span class="text-1">Big visions<br>are realized through small steps</span>
          <span class="text-2">Reach Your Vision With Us</span>
        </div>
      </div>
      <div class="back">
        <img class="back" src="images\Color Palette.png" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            
      </div>
      <div class="login-form">
      <div id="login_title" class="title">Login</div>
          <form action="../controller/LoginController.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
              </div>
              
              <div id="login_submit" class="button input-box">
                <input type="submit" name="login" value="Login">
              </div>
              
            </div>
        </form>
  </div>
    </div>
    </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
