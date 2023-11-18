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
    $rowsPerPage = 5;
    if (!isset($_GET['page']))
        $_GET['page'] = 1;
    $offset = ($_GET['page'] - 1) * $rowsPerPage;
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $query = "SELECT * FROM `users` u JOIN location l ON u.location_id = l.location_id JOIN  premiummembership p ON u.is_premium = p.premium_id WHERE fullname like '%$search%' LIMIT $offset, $rowsPerPage";
        $result = mysqli_query($conn, $query);
    } else {
        $query = "SELECT * FROM `users` u JOIN location l ON u.location_id = l.location_id JOIN  premiummembership p ON u.is_premium = p.premium_id LIMIT $offset, $rowsPerPage";
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="text-center " style="width:10%;">
                                        <a href='add-user.php' style="width:150px;font-size:20px;" class="text-primary fs-4">Add</a>

                                    </div>
                                        <?php if (isset($_SESSION['response_admin'])) { ?>
                                            <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <b><?= $_SESSION['response_admin']; ?></b>
                                            </div>
                                        <?php }
                                        unset($_SESSION['response_admin']); ?>
                                    <div id="example_filter" class="dataTables_filter text-right mb-3">
                                        <form method="get">
                                            <label>Search:&nbsp; <input id="search" type="search" name="search" class="" style="border-radius:10px" placeholder=" username" aria-controls="example"></label>
                                        </form>
                                    </div>

                                    <table id="example" class="display text-center" style="width:100%;min-width: 900px">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Date of Birth</th>
                                                <th>Package use</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($numRows <> 0) {
                                                $temp = $_GET['page'] * $rowsPerPage; // danh so thu tu
                                                if ($temp <= $rowsPerPage) $num = 0;
                                                else $num = $temp - $rowsPerPage;
                                                while ($rows = mysqli_fetch_array($result)) {

                                                    if ($rows['gender'] == 0) {
                                                        $rows['gender'] = "Male";
                                                    }
                                                    if ($rows['gender'] == 1) {
                                                        $rows['gender'] = "Female";
                                                    } else $rows['gender'] = "Sercet";
                                                    $date = date("d-m-Y", strtotime($rows['dob']));
                                                    echo "<tr>";
                                                    echo "<td><img class='mt-3' src='" . SITEURL . "Assets/images/profile/" . $rows['image'] . "' width='150px' height='150px'></td>";
                                                    echo "<td>" . $rows['fullname'] . "</td>";
                                                    echo "<td>" . $rows['gender'] . "</td>";
                                                    echo "<td>" . $rows['email'] . "</td>";
                                                    echo "<td>" . $rows['location_name'] . "</td>";
                                                    echo "<td>" . $date . "</td>";
                                                    echo "<td>" . $rows['name_package'] . "</td>";
                                                    echo "<td>";
                                                    echo "<a href='edit-user.php?user_id=" . $rows['user_id'] . "'>Edit</a>";
                                                    echo "&nbsp;|&nbsp;";
                                                    echo "<a href='detail-user.php?user_id=" . $rows['user_id'] . "'>Detail</a>";
                                                    echo "&nbsp;|&nbsp;";
                                                    echo "<a href='delete-user.php?user_id=" . $rows['user_id'] . "'>Delete</a>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php $maxPage = floor($numRows / $rowsPerPage) + 1;
                                                echo "<div class='text-center'>";
                                                if ($_GET['page'] > 1) {
                                                    echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">Previous</a> "; //gắn thêm nút Back
                                                }
                                                for ($i = 1; $i <= $maxPage; $i++) {
                                                    if ($i == $_GET['page']) {
                                                        echo '<b class="center">Trang' . $i . '</b> '; //trang hiện tại sẽ được bôi đậm
                                                    } else {
                                                        echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . ">Trang " . $i . "</a> ";
                                                    }
                                                }
                                                if ($_GET['page'] < $maxPage) {
                                                    echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">Next</a>";  //gắn thêm nút Next
                                                }
                                                echo "</div>";
                                            }
                                ?>
                                </div>

                            </div>
                        </div>
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