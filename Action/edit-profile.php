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
    $about_me = $_POST['about_me'];
    $user_id = $_SESSION['user_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $sql_check_user_info_id = "SELECT user_info_id FROM users WHERE user_id = '$user_id' ";
    $res_check_user_info_id = mysqli_query($conn,  $sql_check_user_info_id);

    $row = mysqli_fetch_assoc($res_check_user_info_id);

    $user_info_id = $row['user_info_id'];
    
    $query_insert = "UPDATE `user_info` SET `height`= '$height', `body_type`= '$body_type', `ethnicity` ='$ethnicity', `relationship` = '$relationship_status', `hair_color` = '$hair_color', `character_status` = '$character', `region` = '$religion', `smoke` = '$smoke', `drink` = '$drink', `working_status` = '$work_status' WHERE user_info_id = '$user_info_id'";
    $res_insert = mysqli_query($conn, $query_insert);
    $query_update = "UPDATE `users` SET `bio`='$about_me',`fullname`='$fullname',`email`='$email',`gender`='$gender',`dob`='$dob' WHERE user_id = '$user_id' ";
    $res_update = mysqli_query($conn, $query_update);
?>