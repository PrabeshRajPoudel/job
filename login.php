<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Health At Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>

  <?php include 'carousel.php';?>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="login-card card">
          <div class="card-header text-center">
            <h2 class="login-title">Login</h2>
          </div>
          <div class="card-body">
            <form action="login_handler.php" class="login-form" method="POST">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control login-input" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control login-input" id="password" name="password" required>
              </div>
              <button type="submit" class="btn login-btn mt-4" name="submit">Login</button>
            </form>
          </div>
          <div class="card-footer text-center">
            <a href="register.php" class="register-link">Don't have an account? Register here</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
