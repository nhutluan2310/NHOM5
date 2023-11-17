<?php
    session_start();
    include"../Config/config.php";
    $outgoing_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE not (user_id = {$outgoing_id}) ORDER BY user_id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $numRow = mysqli_num_rows($query);
    $output = "";
    if($numRow == 0){
        $output .= "No users are available to chat";
    }elseif($numRow <> 0){
        include"data.php";
        while(mysqli_fetch_array($query)){
            $output.= include'data.php';
        }
    }
    echo $output;
?>