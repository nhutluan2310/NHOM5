<?php
session_start();

if (isset($_SESSION['user_id'])) {
    include_once "../Config/config.php";
    $outgoing_id = $_SESSION['user_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = time();
    // Convert the timestamp to a formatted date
    $message_date = date("Y:m:d H:i", $timestamp);

    if (!empty($message)) {
        $sql = mysqli_query($conn, "INSERT INTO `message`(`message_id`, `sender_id`, `receiver_id`, `message_content`, `message_date`) 
        VALUES (NULL,'{$outgoing_id}','{$incoming_id}','$message','$message_date')") or die();
    }
} else {
    header("location:" . SITEURL . "login.php");
}
