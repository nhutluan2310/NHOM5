<?php
    while($row = mysqli_fetch_assoc($query)){
        $user_id = $row['user_id'];
        $sql2 = "SELECT * FROM message WHERE (receiver_id = {$user_id}
                OR sender_id = {$user_id}) AND (sender_id = {$outgoing_id} 
                OR receiver_id = {$outgoing_id}) ORDER BY message_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['message_content'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['sender_id'])){
            ($outgoing_id == $row2['sender_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['user_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['user_id'] .'">
                    <div class="content">
                    <img src="'.SITEURL.'Assets/images/profile/'. $row['image'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fullname'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>