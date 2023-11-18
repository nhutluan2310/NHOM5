<?php session_start(); 
  include '../Config/config.php';?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login - Admin</title>
  <!-- Favicon icon -->
  <link href="./Assets/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
  <div class="authincation h-100">
    <div class="container-fluid h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <h4 class="text-left mb-4">Welcome Admin, Please Sign in!</h4>
                  <h4 class="text-center mb-4">Sign in</h4>
                  <?php if (isset($_SESSION['response'])) { ?>
                    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <b><?= $_SESSION['response']; ?></b>
                    </div>
                  <?php }
                  unset($_SESSION['response']); ?>
                  <form action="" method="post">
                    <div class="form-group">
                      <label><strong>Username</strong></label>
                      <input type="text" name="username" class="form-control" value="<?php ?>">
                    </div>
                    <div class="form-group">
                      <label><strong>Password</strong></label>
                      <input type="password" name="password" class="form-control" value="">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    if (empty($_POST["username"])) {
      $_SESSION['response'] = "Username is required!";
      $_SESSION['res_type'] = "danger";
    } else if (empty($_POST["password"])) {
      $_SESSION['response'] = "Password is required!";
      $_SESSION['res_type'] = "danger";
    } else {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $query = "SELECT `admin_id`, `username`,`password` FROM `admin`  WHERE  `username` = '$username' ";
      $result = mysqli_query($conn, $query);
      $numRows = mysqli_num_rows($result);
      if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $row['admin_id'];
        if ($password == $row['password']) {
          $status = "Active now";
          $sql2 = mysqli_query($conn, "UPDATE admin SET status = '{$status}' WHERE admin_id = {$row['admin_id']}");
          $_SESSION['admin-login'] = $username;
          header("Location:" . SITEURL . "admin/index.php");
        } else {
          $_SESSION['response'] = "Wrong Password!";
          $_SESSION['res_type'] = "danger";
        }
      } else {
        $_SESSION['response'] = "Admin Doesn't Exist!";
        $_SESSION['res_type'] = "danger";
      }
    }
  }
  ?>

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="./Assets/vendor/global/global.min.js"></script>
  <script src="./Assets/js/quixnav-init.js"></script>
  <script src="./Assets/js/custom.min.js"></script>

</body>

</html>