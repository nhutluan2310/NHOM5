<?php session_start();
include '../Config/config.php';
?>

<? if (!isset($_SESSION['admin_id'])) {
    header("location: " . SITEURL . "admin/login.php");
}
else $admin_id = $_SESSION['admin_id'];
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



</head>

<body>

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
                                    <a href="<?php echo SITEURL ."admin/logout.php?logout_id=".$_SESSION['admin_id']; ?>" class="dropdown-item">
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
                    <li><a class="has-arrow" href="index.php" active aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li class="nav-label">User Management</li>
                    <li><a class="has-arrow" href="manager-user.php" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Users</span></a>
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
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Users Online </div>
                                    <div class="stat-digit">
                                        <?php $query = "SELECT COUNT(user_id) as 'Active' FROM users where status = 'Active now'";
                                        $result = mysqli_query($conn, $query);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['Active'];
                                        ?>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success <?php if (isset($row['Active'])) echo "w-" . $row['Active'] * 5; ?>" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Users</div>
                                    <div class="stat-digit">
                                        <?php $query = "SELECT COUNT(user_id) as 'Total' FROM users";
                                        $result = mysqli_query($conn, $query);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['Total'];
                                        ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary <?php if ($row['Total']) echo "w-" . ($row['Total'] * 5); ?>" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total male</div>
                                    <div class="stat-digit">
                                        <?php $query = "SELECT COUNT(user_id) as 'male' FROM users where gender='0'";
                                        $result = mysqli_query($conn, $query);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['male'];
                                        ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning <?php if ($row['male']) echo "w-" . ($row['male'] * 5); ?>" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Packages</div>
                                    <div class="stat-digit"><?php $query = "SELECT COUNT(premium_id) as 'premium' FROM premiummembership";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_assoc($result);
                                                            echo $row['premium'];
                                                            ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger <?php if (isset($row['Active'])) echo "w-" . $row['Active'] * 5; ?>" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Team 5</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./Assets/vendor/global/global.min.js"></script>
    <script src="./Assets/js/quixnav-init.js"></script>
    <script src="./Assets/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./Assets/vendor/raphael/raphael.min.js"></script>
    <script src="./Assets/vendor/morris/morris.min.js"></script>


    <script src="./Assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./Assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./Assets/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./Assets/vendor/flot/jquery.flot.js"></script>
    <script src="./Assets/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./Assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./Assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./Assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./Assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./Assets/js/dashboard/dashboard-1.js"></script>

</body>

</html>