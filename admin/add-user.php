<?php session_start();
include '../Config/config.php';
?>

<? if (!isset($_SESSION['admin_id'])) {
    header("location: " . SITEURL . "admin/login.php");
}
if (SITEURL) {
    header("location:" . SITEURL . "admin/login.php");
} else $admin_id = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Lynder</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./Assets/images/favicon.png">
    <link rel="stylesheet" href="./Assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./Assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./Assetsvendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./Assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>

<body>
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
                header("location:" . SITEURL . "admin/manager-user.php");
            }
        } else {
            // check if confirm password is equal password
            $_SESSION['response_p'] = "*Wrong Password!";
        }
    }
    ?>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo SITEURL . 'admin/logout.php?logout_id=' . $_SESSION['admin_id']; ?>" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="index.php" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li class="nav-label">User Management</li>
                    <li><a class="has-arrow" href="manager-user.php" active aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Users</span></a>
                    </li>
                    <li class="nav-label">Admin Management</li>
                    <li><a class="has-arrow" href="manager-admin.php" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Admin</span></a>
                    </li>
                    <li class="nav-label">Premium Management</li>
                    <li><a class="has-arrow" href="manager-premium.php" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Packages</span></a>
                    </li>

                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row page-titles mx-0">

                    <div class="col-sm-6 p-md-0 justify-content-sm-start mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="admin/manager-user.php">Users</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="full-name">Full name:<?php if (isset($_SESSION['response_fn'])) { ?>
                                            <b class=" text text-danger font-italic error"><?= $_SESSION['response_fn']; ?></b>
                                        <?php }
                                                                            unset($_SESSION['response_fn']); ?></label>
                                        <input type="text" id="full-name" name="full_name" class="form-control" value="<?php if (isset($fullname)) echo $fullname; ?>" required oninvalid="this.setCustomValidity('Please fill fullname Here!')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="username">Username:<?php if (isset($_SESSION['response_un'])) { ?>
                                            <b class=" text text-danger font-italic error"><?= $_SESSION['response_un']; ?></b>
                                        <?php }
                                                                        unset($_SESSION['response_un']); ?></label>
                                        <input type="text" id="username" name="username" class="form-control" value="<?php if (isset($username)) echo $username; ?>" required oninvalid="this.setCustomValidity('Please fill username here!')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Gender:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender-male" value="0" checked>
                                            <label class="form-check-label" for="gender-male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender-female" value="1">
                                            <label class="form-check-label" for="gender-female">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender-other" value="2">
                                            <label class="form-check-label" for="gender-other">Other</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="date-of-birth">Date of Birth:</label>
                                        <input type="date" id="date-of-birth" name="dob" step="1" class="form-control" required oninvalid="this.setCustomValidity('Please fill Date of Birth here!')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group mb-4">
                                        <label for="address">Address:</label>
                                        <input type="text" name="location" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="email">Email:<?php if (isset($_SESSION['response_e'])) { ?>
                                            <b class=" text text-danger font-italic error"><?= $_SESSION['response_e']; ?></b>
                                        <?php }
                                                                    unset($_SESSION['response_e']); ?></label>
                                        <input type="email" id="email" name="email" class="form-control" value="<?php if (isset($email)) echo $email; ?>" required oninvalid="this.setCustomValidity('Please fill email correctly!\nExample: abc@gmail.com')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password">Password:</label>
                                        <input type="password" id="password" name="password" class="form-control" value="<?php if (isset($pwd1)) echo $pwd1; ?>" required oninvalid="this.setCustomValidity('Please fill password here!')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="confirm-password">Confirm Password:<?php if (isset($_SESSION['response_p'])) { ?>
                                            <b class=" text text-danger font-italic error"><?= $_SESSION['response_p']; ?></b>
                                        <?php }
                                                                                        unset($_SESSION['response_p']); ?></label>
                                        <input type="password" id="confirm-password" name="confirm_password" value="<?php if (isset($pwd2)) echo $pwd2; ?>" class="form-control" required oninvalid="this.setCustomValidity('Please confirm password!')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" id="submit" name="submit" class="btn btn-success btn-block btn-lg text-body btn-register" style="background-color: #343957;" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Required vendors -->
    <script src="./Assets/vendor/global/global.min.js"></script>
    <script src="./Assets/js/quixnav-init.js"></script>
    <script src="./Assets/js/custom.min.js"></script>

    <!-- Datatable -->
    <script src="./Assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
</body>

</html>