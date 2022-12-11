<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link href="bootstrap-5.2.3-dist\css\bootstrap.min.css" rel="stylesheet">
        <link href="..\view\css\adminlogin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,700&family=Montserrat:ital,wght@0,800;1,700;1,900&family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
      </head>
    <body>
      <nav id="navbar" class="navbar fixed-top bg-light ">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1" style="--bs-navbar-brand-font-size:2rem;">GigPals</span>
        </div>
      </nav>
      <form class="adminlogin" action="../controller/AdminLoginController.php" method="post">
        <div class="container maincontainer">
          <div class="forms">
            <div class="form-content">
              <div class="login-form">
                <div id="login_title" class="title">Login</div>
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div id="login_submit" class="button input-box">
                    <input type="submit" name="Login" value="Login">
                  </div>
                </div>
          </div>
        </div>
        </form>
    </body>
</html>