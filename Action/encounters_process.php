<?php session_start();
include'../Config/config.php'?>
<?php
    $height = $_POST['height'];
    $ethnicity = $_POST['ethnicity'];
    $body_type = $_POST['body_type'];
    $hair_color = $_POST['hair_color'];
    $relationship_status = $_POST['relationship_status'];
    $religion = $_POST['religion'];
    $drink = $_POST['drink'];
    $character = $_POST['nature'];
    $smoke = $_POST['smoke'];
    $work_status = $_POST['work_status'];
    $about_me="";
    $about_me =mysqli_real_escape_string($conn,$_POST['about_me']);
    $user_id = $_SESSION['user_id'];

    $sql_check_user_info_id = "SELECT user_info_id FROM users WHERE user_id = '$user_id' ";
    $res_check_user_info_id = mysqli_query($conn,  $sql_check_user_info_id);

    $row = mysqli_fetch_assoc($res_check_user_info_id);

    $user_info_id = $row['user_info_id'];

    $query_insert = "INSERT INTO `user_info`(`user_info_id`, `height`, `body_type`, `ethnicity`, `hair_color`, 
        `relationship`, `character_status`, `region`, `smoke`, `drink`, `working_status`) 
        VALUES ('$user_info_id','$height','$body_type','$ethnicity','$hair_color','$relationship_status','$character',
        '$religion','$smoke','$drink','$work_status')";
    $res_insert = mysqli_query($conn, $query_insert);

    $query_update = "UPDATE `users` SET `bio`='$about_me' WHERE user_id = '$user_id' ";
    $res_update = mysqli_query($conn, $query_update);
?>