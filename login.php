<?php
  require('conexion/db.php');
  
  session_start();
  
  if(isset($_SESSION["id_usuario"])){
    header("Location: index.php");
  }
  
  if(!empty($_POST))
  {
    $usuario = mysqli_real_escape_string($mysqli,$_POST['email']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $error = '';
    
    $sha1_pass = sha1($password);
    
    $sql = "SELECT * FROM $tb_users WHERE email = '$usuario' AND password = '$sha1_pass'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['id'] = $row['id'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['first_name'] = $row['first_name'];
      $_SESSION['last_name'] = $row['last_name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['profile'] = $row['profile'];
      $_SESSION['ip'] = $row['ip_address'];
      
      
      header("location: index.php");
      } else {
      $error = '<div class="alert alert-danger">
                 El nombre o password son incorrectos</div>';
    }
  }
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Optimizador</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css ">

    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

<?php
if(isset($_SESSION["email"])){
header("Location: index.php");
exit(); }
?>

<body class="bg-dark">
<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post" action="">
		    
			   
		 <?php echo isset($error) ? utf8_decode($error) : '' ; ?>

	
		
		  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="login_user">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
</div>




	


<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>