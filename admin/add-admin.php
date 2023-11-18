<?php session_start();
ob_start();
include '../Config/config.php';
?>

<? if (!isset($_SESSION['admin_id'])) {
    header("location: " . SITEURL . "admin/login.php");
}
$admin = SITEURL."/admin/";
if ($admin) {
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
    $rowsPerPage = 5;
    if (!isset($_GET['page']))
        $_GET['page'] = 1;
    $offset = ($_GET['page'] - 1) * $rowsPerPage;
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $query = "SELECT * FROM `admin` WHERE username like '%$search%' LIMIT $offset, $rowsPerPage";
        $result = mysqli_query($conn, $query);
    } else {
        $query = "SELECT * FROM `admin` LIMIT $offset, $rowsPerPage";
        $result = mysqli_query($conn, $query);
    }
    $numRows = mysqli_num_rows($result);
    $maxPage = ceil($numRows / $rowsPerPage);
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

                <div class="row d-flex justify-content-center align-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create New Adminsitor</h4>
                                
                            </div>
                            <div class="card-body">
                            <?php if (isset($_SESSION['response'])) { ?>
                                    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <b><?= $_SESSION['response']; ?></b>
                                    </div>
                                <?php }
                                unset($_SESSION['response']); ?>
                                <div class="basic-form">
                                    <form method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary text-center">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $status = "Offline now";
                    if (empty($_POST["username"])) {
                        $_SESSION['response'] = "Username is required!";
                        $_SESSION['res_type'] = "danger";
                    } else if (empty($_POST["password"])) {
                        $_SESSION['response'] = "Password is required!";
                        $_SESSION['res_type'] = "danger";
                    } else {
                        $query = "SELECT * FROM admin where username = '$username'";
                        $result = mysqli_query($conn, $query);
                        $numRows = mysqli_num_rows($result);
                        if ($numRows == 1) {
                            $_SESSION['response'] = "Username already exist! Please choose another username.";
                            $_SESSION['res_type'] = "danger";
                        } else {
                            $query1 = "INSERT INTO `admin`(`admin_id`, `username`, `password`, `status`) VALUES (NULL,'$password','$password','$status')";
                            $result1 = mysqli_query($conn, $query1);
                            header("location:" . SITEURL . "admin/manager-admin.php");
                        }
                    }
                } ?>
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
<?php ob_end_flush(); ?>