
<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['full_name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $pwd1 = $_POST['password'];
    $pwd2 = $_POST['confirm_password'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = time();
    // Convert the timestamp to a formatted date
    $registrationDate = date("Y:m:d", $timestamp);
    $last_login = date("Y:m:d H:i:s", $timestamp);
    $option = [
        'cost' => 12,
    ];
    $hashedPassword = password_hash($pwd1, PASSWORD_DEFAULT, $option);

    //Xử lý location
    $latitude = $longitude =  0;
    $apiUrl = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($location);
    $httpOptions = [
        "http" => [
            "method" => "GET",
            "header" => "User-Agent: Nominatim-Test"
        ]
    ];
    $streamContext = stream_context_create($httpOptions);
    $json = file_get_contents($apiUrl, false, $streamContext);

    // Xử lý kết quả JSON
    $data = json_decode($json, true);

    // Kiểm tra xem có kết quả không
    if (!empty($data) && isset($data[0]['lat']) && isset($data[0]['lon'])) {
        $latitude = $data[0]['lat'];
        $longitude = $data[0]['lon'];
    } else {
        $_SESSION['response_l'] = "*Location can't be found!";
    }
    //Check validation
    if ((!preg_match("/^[a-zA-Z-' ]*$/", $fullname))) {
        // check if name only contains letters and whitespace
        $_SESSION['response_fn'] = "*Only letters and space allowed!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // check if e-mail address is well-formed
        $_SESSION['response_e'] = "*Invalid email format!";
    }
    if (password_verify($pwd2, $hashedPassword)) {
        //check if exist
        $query_check_username = "SELECT `username` FROM `users` where `username` = '$username'";
        $result = mysqli_query($conn, $query_check_username);
        $numRows = mysqli_num_rows($result);
        if ($numRows == 1) {
            $_SESSION['response_un'] = "*Username already exist!";
        } else {
            //generate loacion id
            $location_id = rand(1000, 99999);
            // Check if the generated already exists in the database
            $sql_check_location_id = "SELECT * FROM users WHERE location_id='$location_id'";
            $res_check_location_id = mysqli_query($conn,  $sql_check_location_id);

            // If the generated already exists, generate a new one
            while (mysqli_num_rows($res_check_location_id) > 0) {
                $location_id = rand(1000, 99999);
                $sql_check_location_id = "SELECT * FROM users WHERE location_id='$location_id'";
                $res_check_location_id = mysqli_query($conn,  $sql_check_location_id);
            }

            $user_info_id = rand(10000, 99999);
            // Check if the generated user_info_id already exists in the database
            $sql_check_user_info_id = "SELECT * FROM users WHERE user_info_id='$user_info_id'";
            $res_check_user_info_id = mysqli_query($conn,  $sql_check_user_info_id);

            // If the generated cart_items_id already exists, generate a new one
            while (mysqli_num_rows($res_check_user_info_id) > 0) {
                $user_info_id = rand(10000000, 99999999);
                $sql_check_user_info_id = "SELECT * FROM users WHERE user_info_id='$user_info_id'";
                $res_check_user_info_id = mysqli_query($conn,  $sql_check_user_info_id);
            } 
            $query_location = "INSERT INTO `location`(`location_id`, `location_name`, `latitude`, `longitude`) VALUES ('$location_id','$location','$latitude','$longitude')";
            $result = mysqli_query($conn, $query_location);
            $query = "INSERT INTO `users`(`user_id`,`fullname`, `username`, `email`, `password_hash`, `registration_date`, `bio`, `image`, `location_id`, `dob`, `gender`, `last_login`, `is_premium`,`user_info_id`,`likes`,`dislikes`,`status`) VALUES (NULL,'$fullname','$username','$email','$hashedPassword','$registrationDate',NULL,NULL,$location_id,'$dob',' $gender','$last_login',1,'$user_info_id',0,0,'Offline now')";
            $result = mysqli_query($conn, $query);
            header("Location:" . SITEURL . "login.php");
        }
    } else {
        // check if confirm password is equal password
        $_SESSION['response_p'] = "*Wrong Password!";
    }
}
mysqli_close($conn);
