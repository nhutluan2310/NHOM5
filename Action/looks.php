<?php session_start();
include'../Config/config.php'?>
<?php
    $user_id = $_POST['user_id'];
    $height = $_POST['height'];
    $ethnicity = $_POST['ethnicity'];
    $body_type = $_POST['body_type'];
    $hair_color = $_POST['hair_color'];
    $sql_check_user_info_id = "SELECT user_info_id FROM users WHERE user_id = '$user_id' ";
    $res_check_user_info_id = mysqli_query($conn,  $sql_check_user_info_id);

    $row = mysqli_fetch_assoc($res_check_user_info_id);

    $user_info_id = $row['user_info_id'];
    $query_update = "UPDATE `user_info` SET `height`='$height',`ethnicity`='$ethnicity',`body_type`='$body_type',`hair_color`='$hair_color' WHERE user_id = '$user_id' ";
    $res_update = mysqli_query($conn, $query_update);
    ?>