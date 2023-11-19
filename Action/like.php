<?php
    session_start();
    include_once'../Config/config.php';
    if(isset($_POST['like'])){
        $user_id2 = $_POST['user_id'];
        $query_check = "SELECT likes from users where user_id = '$user_id2'";
        $result_check = mysqli_query($conn, $query_check);
        $row = mysqli_fetch_assoc($result_check);
        $count = $row['likes']+1;
        $query="UPDATE `users` SET `likes`='$count' WHERE user_id = '$user_id2'";
        $result = mysqli_query($conn, $query);

        $interaction_id = rand(10000, 99999);
        // Check if the generated already exists in the database
        $sql_check_id = "SELECT * FROM interaction WHERE interaction_id='$interaction_id'";
        $res_check_id = mysqli_query($conn,  $sql_check_id);

        // If the generatedalready exists, generate a new one
        while (mysqli_num_rows($res_check_id) > 0) {
            $interaction_id = rand(10000000, 99999999);
            $sql_check_id = "SELECT * FROM interaction WHERE interaction_id='$interaction_id'";
            $res_check_id = mysqli_query($conn,  $sql_check_id);
        }
        $user_id = $_SESSION['user_id'];        
        $status = 1;
        
        $now = time();
        $interaction_date = date("Y:m:d H:i:s", $now);
        $query_i = "INSERT INTO `interaction`(`interaction_id`, `swiper_id`, `swipee_id`, `status`, `interaction_date`) VALUES ('$interaction_id','$user_id','$user_id2','$status','$interaction_date')";
        $result_i = mysqli_query($conn, $query_i);
    }
    if(isset($_POST['dislike'])){ 
        $user_id2 = $_POST['user_id'];
        $query_check = "SELECT dislikes from users where user_id = '$user_id2'";
        $result_check = mysqli_query($conn, $query_check);
        $row = mysqli_fetch_assoc($result_check);
        $count = $row['dislike']+1;
        $query="UPDATE `users` SET `dislikes`='$count' WHERE user_id = '$user_id2'";
        $result = mysqli_query($conn, $query);
        
        $interaction_id = rand(10000, 99999);
        // Check if the generated already exists in the database
        $sql_check_id = "SELECT * FROM interaction WHERE interaction_id='$interaction_id'";
        $res_check_id = mysqli_query($conn,  $sql_check_id);

        // If the generatedalready exists, generate a new one
        while (mysqli_num_rows($res_check_id) > 0) {
            $interaction_id = rand(10000000, 99999999);
            $sql_check_id = "SELECT * FROM interaction WHERE interaction_id='$interaction_id'";
            $res_check_id = mysqli_query($conn,  $sql_check_id);
        }
        $user_id = $_SESSION['user_id'];        
        $status = 0;
        $now = time();
        $interaction_date = date("Y:m:d H:i:s", $now);
        $query_i = "INSERT INTO `interaction`(`interaction_id`, `swiper_id`, `swipee_id`, `status`, `interaction_date`) VALUES ('$interaction_id','$user_id','$user_id2','$status','$interaction_date')";
        $result_i = mysqli_query($conn, $query_i);
    }
?>