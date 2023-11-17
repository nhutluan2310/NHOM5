<?php session_start();
include'./Config/config.php';
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
