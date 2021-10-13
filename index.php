
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="asset/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="welcome/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="welcome/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="welcome/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="welcome/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="welcome/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="welcome/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="welcome/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="welcome/vendor/daterangepicker/daterangepicker.css">
</head>
<body class="hold-transition login-page" style="background-image: url('background.jpg'); background-size:100% 100%;">
<!-- <div class="container-login100" style="background-image: url('background.jpg');"> -->
<div class="login-box">
  <div class="login-logo">
    <h2><b>Admin</b>-Data Center<h2>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login</p>

      <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}
	}
	?>

      <form action="proses_login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->


  </div>
</div>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="asset/js/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/js/adminlte.min.js"></script>

</body>
</html>
