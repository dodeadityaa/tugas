<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link rel="shortcut icon" href="sawah.png">
  <!-- Bootstrap core CSS-->
  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="style/css/sb-admin.css" rel="stylesheet">
<style type="text/css">
  body{
    background: url(rice.jpg);
    opacity: 0.8;
    background-size: 100%;
  }
</style>
</head>

<body class="bg-dark">
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
              <form action="login_data.php" method="post">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember Password</label>
                  </div>
                </div>
                <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">

              </form>
              <div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account?</a>
              </div>
            </div>
          </div>
        </div>
  <!-- Bootstrap core JavaScript-->
  <script src="style/jquery/jquery.min.js"></script>
  <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="style/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
