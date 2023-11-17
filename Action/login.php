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
    $password_hash = $_POST['password'];
    $option = [
      'cost' => 12,
    ];
    $query = "SELECT `user_id`, `user_info_id`,`username`, `email`, `password_hash` FROM `users`  WHERE  `username` = '$username' ";
    $result = mysqli_query($conn, $query);
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user_id'] = $row['user_id'];
      $user_info_id = $row['user_info_id'];
      $query1 = "SELECT `user_info_id` from user_info where `user_info_id` = '$user_info_id'";
      $result1 = mysqli_query($conn, $query1);
      $row1 = mysqli_fetch_assoc($result1);
      $user_info_id1 = $row1['user_info_id'];
      if (password_verify($password_hash, $row['password_hash'])) {
        $status = "Active now";
        $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE user_id = {$row['user_id']}");
        $_SESSION['user-login'] = $username;
        if ($user_info_id1) {
          header("Location:" . SITEURL . "home.php");
        } else header("Location:" . SITEURL . "encounters.php");
      } else {
        $_SESSION['response'] = "Wrong Password!";
        $_SESSION['res_type'] = "danger";
      }
    } else {
      $_SESSION['response'] = "User Doesn't Exist!";
      $_SESSION['res_type'] = "danger";
    }
  }
}
