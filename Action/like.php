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
    }
    if(isset($_POST['dislike'])){ 
        $user_id2 = $_POST['user_id'];
        $query_check = "SELECT dislikes from users where user_id = '$user_id2'";
        $result_check = mysqli_query($conn, $query_check);
        $row = mysqli_fetch_assoc($result_check);
        $count = $row['dislike']+1;
        $query="UPDATE `users` SET `dislikes`='$count' WHERE user_id = '$user_id2'";
        $result = mysqli_query($conn, $query);
    }
?>