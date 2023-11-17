<?php session_start();
include'../Config/config.php' ?>
<?php
if (isset($_FILES['image']['name'])) {
    // get the file information
    $image_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    //$file_type = $_FILES['image']['type'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];

    // check for errors
    if ($file_error == 0) {
        $s = explode(".", $image_name);
        $ext = end($s);
        // Create New Name for Image
        $image_name = "Profile-" . $_SESSION['user-login'] . "." . $ext; //New Image Name May Be "Profile-Name-657.jpg"
        // set the destination folder
        $target_dir = "../Assets/images/profile/" . $image_name;
        // move the file to the destination
        move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);
    }
    $user_id = $_SESSION['user_id'];

    $sql_check_user_info_id = "SELECT user_info_id FROM users WHERE user_id = '$user_id' ";
    $res_check_user_info_id = mysqli_query($conn,  $sql_check_user_info_id);
    $query_update = "UPDATE `users` SET `image`='$image_name' WHERE user_id = '$user_id' ";
    $res_update = mysqli_query($conn, $query_update);
}