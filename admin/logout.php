<?php
session_start();
if (isset($_SESSION['admin_id'])) {
    include_once "../Config/config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if (isset($logout_id)) {
        echo $logout_id;
        $last_login = strtotime(time());
        $status = "Offline now";
        $sql = mysqli_query($conn, "UPDATE admin SET status = '{$status}' WHERE admin_id={$logout_id}");
        if ($sql) {
            session_unset();
            session_destroy();
            header("location:" . SITEURL . "admin/login.php");
        }
    } else {
        header("location:" . SITEURL . "admin/index.php");
    }
} else {
    header("location:" . SITEURL . "login.php");
}
