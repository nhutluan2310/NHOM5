<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "../Config/config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            
            $last_login = strtotime(time());
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}', last_login = '{$last_login}' WHERE user_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location:".SITEURL."login.php");
            }
        }else{
            header("location:".SITEURL ."home.php");
        }
    }else{  
        header("location:".SITEURL ."login.php");
    }
?>