<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "../Config/config.php";
        $outgoing_id = $_SESSION['user_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM message LEFT JOIN users ON users.user_id = message.sender_id
                WHERE (sender_id = {$outgoing_id} AND receiver_id = {$incoming_id})
                OR (sender_id = {$incoming_id} AND receiver_id = {$outgoing_id}) ORDER BY message_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['sender_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['message_content'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="'.SITEURL.'Assets/images/profile/'.$row['image'].'" alt="">
                                <div class="details">
                                    <p>'. $row['message_content'] .'</p>
                                </div>
                                <div>
                                    <small><sup>'.$row['message_date'].'</sup></small>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location:".SITEURL."login.php");
    }

?>