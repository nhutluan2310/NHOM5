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

    <!-- Font Awsome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css" integrity="sha512-4wfcoXlib1Aq0mUtsLLM74SZtmB73VHTafZAvxIp/Wk9u1PpIsrfmTvK0+yKetghCL8SHlZbMyEcV8Z21v42UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.css" integrity="sha512-wO3k1bQ1JmvSX/mCJ8wbWyfdLvKZyIOJ86Sm/7uu28XrYem1Hm90nW/yLJqtDoe9o8Q/n3ZcTnS4dyt/yGgAPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.css" integrity="sha512-J0oLapSOxlpuL54IrxtPLHVqUjvo1/p/QzK6VqQWU0qNHkWq9UCSrwTrpeNiLphyMv47rsw1cVawMSiWiMtcBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/regular.css" integrity="sha512-mDy/Ig+MXOxiNbnifwee6wMNpVJSMgrgZbiZDfYcNLOMZ8pHwzmA5ifUNAPrVe2pQC2RphclkG2z1D//4keqow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.css" integrity="sha512-n70Ch6Ee+tQZeUNLfwxkT85Hzr1vewp+npJBTcwSWjrkiYWy1ZXL5QSwCNJeJS3yjChsdogcCauQmEAQsok+Kw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .choose-photo {
            margin-top: 40px;
            text-align: center;

        }

        .choose-photo .dt_selct_avatar {
            width: 400px;
            display: table;
            height: 400px;
            overflow: hidden;
            color: white;
            background: #fff;
            margin: auto;
            position: relative;
            cursor: pointer;
            border-radius: 12px;
            border: 4px solid white;
            outline: 2px solid gainsboro;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .btn-image {
            width: 130px;
            font-size: 16px;
            margin-top: 25px;
            text-align: center;
            background-color: darkorchid;
            color: whitesmoke;
        }
    </style>


</head>
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
            <div class="row flex-nowrap">

                <div class="content col py-3">
                    <?php
                    if (isset($_GET['user_id'])) {
                        $user_id = $_GET['user_id'];
                        $query = "SELECT * FROM `users` u JOIN user_info ui on u.user_info_id = ui.user_info_id JOIN location l on u.location_id = l.location_id WHERE u.user_id = '$user_id';";
                        $result = mysqli_query($conn, $query);
                        $numRow = mysqli_num_rows($result);
                    }
                    ?>
                    <div class="clearfix"></div>
                    <div class="lw-page-content">
                        <div class="lw-contains-profile-fields">
                            <?php if ($numRow <> 0) {
                                $row = mysqli_fetch_assoc($result);
                            ?>
                                <div class="card m-3">
                                    <div class="card-header" style="font-size:30px">
                                        <h4><span class="lw-profile-edit-button-container d-flex justify-content-center align-items-center" style="background-color: white; width:150px; height:40px;">
                                                <a class="lw-icon-btn" href="javascript:window.history.back(-1);" role="button" id="lwEditProfileAndCoverPhoto">
                                                    <i class="fas fa-backward"></i> Go back </a>
                                            </span></h4>
                                        <h4 style="font-size:30px;"> <?php echo $row['fullname']; ?><span>&nbsp;<?php if ($row['gender'] == 0) {
                                                                                                                    echo "<i class='fas fa-mars'style='font-size:30px;color: #005eff;'></i>";
                                                                                                                } else {
                                                                                                                    echo "<i class='fas fa-venus'style='font-size:30px;color: #ff0000;'></i>";
                                                                                                                } ?>&nbsp;(<?php
                                                                                                    $now = date("Y", time());
                                                                                                    $age = ($now - date("Y", strtotime($row['dob'])));
                                                                                                    echo $age; ?>)</span> </h4>

                                        <hr> <i class="fas fa-map-marker-alt text-success"></i> <span class="mr-3"><span data-model="profileData.city">&nbsp;<?php echo $row['location_name']; ?></span></span>
                                        <div class="float-right" "> <i class=" fas fa-heart text-danger"></i> <span id="lwTotalUserLikes" class="mr-3"><?php echo $row['likes']; ?> likes</span></div>
                                    </div>
                                </div>
                                <div class="card m-3 lw-profile-image-card-container">
                                    <div class="card-body">
                                        <div class="mt-4 d-none d-md-flex lw-profile-side-block-container"> </div>
                                        <div class="row" id="lwProfileAndCoverStaticBlock">
                                            <div class="col-lg-12">
                                                <div class="card mb-3 lw-profile-image-card-container1" style="display:flex; justify-content:center;align-items: center;">
                                                    <?php echo "<img src='" . SITEURL . "Assets/images/profile/" . $row['image'] . "' style='width: 400px; height:400px;border-radius: 50%;'"; ?>
                                                </div>
                                            </div>
                                            <div class="row" id="lwProfileAndCoverEditBlock" style="display: none;">
                                                <div class="col-lg-3">
                                                    <div class="filepond--root filepond lw-file-uploader filepond--hopper" id="lwFileUploader" data-style-panel-layout="compact circle" data-style-button-remove-item-position="left bottom" data-style-button-process-item-position="right bottom" data-style-load-indicator-position="center bottom" data-style-progress-indicator-position="right bottom" data-style-button-remove-item-align="false"><input class="filepond--browser" type="file" id="filepond--browser-s3n96859z" name="filepond" aria-controls="filepond--assistant-s3n96859z" aria-labelledby="filepond--drop-label-s3n96859z" accept="">
                                                        <div style="height: 100%;"></div>
                                                        <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-s3n96859z" id="filepond--drop-label-s3n96859z" aria-hidden="true">Drag &amp; Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></label></div>
                                                        <div class="filepond--list-scroller">
                                                            <ul class="filepond--list" role="list"></ul>
                                                        </div>
                                                        <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                            <div class="filepond--panel-top filepond--panel-root"></div>
                                                            <div class="filepond--panel-center filepond--panel-root"></div>
                                                            <div class="filepond--panel-bottom filepond--panel-root"></div>
                                                        </div><span class="filepond--assistant" id="filepond--assistant-s3n96859z" role="status" aria-live="polite" aria-relevant="additions"></span>
                                                        <div class="filepond--drip"></div>
                                                        <fieldset class="filepond--data"></fieldset>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="filepond--root filepond lw-file-uploader mt-5 filepond--hopper" id="lwFileUploader" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false"><input class="filepond--browser" type="file" id="filepond--browser-uqi0phfsc" name="filepond" aria-controls="filepond--assistant-uqi0phfsc" aria-labelledby="filepond--drop-label-uqi0phfsc" accept="">
                                                        <div style="height: 100%;"></div>
                                                        <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-uqi0phfsc" id="filepond--drop-label-uqi0phfsc" aria-hidden="true">Drag &amp; Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></label></div>
                                                        <div class="filepond--list-scroller">
                                                            <ul class="filepond--list" role="list"></ul>
                                                        </div>
                                                        <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                            <div class="filepond--panel-top filepond--panel-root"></div>
                                                            <div class="filepond--panel-center filepond--panel-root"></div>
                                                            <div class="filepond--panel-bottom filepond--panel-root"></div>
                                                        </div><span class="filepond--assistant" id="filepond--assistant-uqi0phfsc" role="status" aria-live="polite" aria-relevant="additions"></span>
                                                        <div class="filepond--drip"></div>
                                                        <fieldset class="filepond--data"></fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <div class="card-header"> <span class="float-right">
                                                <h5><i class="fas fa-images text-warning"></i> Photos</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row text-center text-lg-left lw-horizontal-container pl-2"> Ooops... No images found... </div>
                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <div class="card-header"> <span class="float-right">
                                                <h5><i class="fas fa-info-circle text-info"></i> Basic Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="lwStaticBasicInformation">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label for="first_name"><strong>Full Name</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="userData.first_name"><?php echo $row['fullname'] ?></div>
                                                    </div>
                                                    <div class="col-sm-6"> <label for="last_name"><strong>Email</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="userData.last_name"><?php echo $row['email'] ?></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label for="select_gender"><strong>Gender</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="profileData.gender_text"><?php if ($row['gender'] == 0) echo "Male";
                                                                                                                                else if ($row['gender'] == 1) echo "Female";
                                                                                                                                else echo "Other"; ?></div>
                                                    </div>
                                                    <div class="col-sm-6"> <label for="birthday"><strong>Birthday</strong></label>
                                                        <div class="lw-inline-edit-text d-block" data-model="profileData.birthday"><?php
                                                                                                                                    $date = $row['dob'];
                                                                                                                                    $Year = date('Y', strtotime($date));
                                                                                                                                    $month = date('m', strtotime($date));
                                                                                                                                    $Year = date('Y', strtotime($date));
                                                                                                                                    $day = date('d', strtotime($date));
                                                                                                                                    echo $day . "th " . $month . " " . $Year . "" ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Relationship Status</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="profileData.formatted_relationship_status"><?php echo $row['relationship'] ?></div>
                                                    </div>
                                                    <div class="col-sm-6"> <label for="work_status"><strong>Work Status</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="profileData.formatted_work_status"><?php echo $row['working_status'] ?></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="form-group"> <strong><label for="about_me">About Me</label></strong> <textarea class="form-control" name="about_me" id="about_me" readonly rows="3" cols="211" style="margin-left:10px;" placeholder=""><?php echo $row['bio'] ?></textarea> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <div class="card-header"> <span class="float-right">
                                                <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="lwUserStaticLocation">
                                                <div class="gmap_canvas">
                                                    <iframe height="300" id="gmap_canvas" src="https://maps.google.com/maps/place?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>&amp;output=embed&amp;language=en" frameborder="0" width="100%" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <div class="card-header">
                                            <h5><i class="far fa-smile text-primary"></i> Looks</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="lwlooksStaticContainer">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Height</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.height"><?php echo $row['height'] . " cm"; ?> </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Ethnicity</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.ethnicity"> <?php echo $row['ethnicity'] ?></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Body Type</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.body_type"> <?php echo $row['body_type'] ?> </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Hair Color</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.hair_color"><?php echo $row['hair_color'] ?> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <div class="card-header"> <span class="float-right">
                                                <h5><i class="fas fa-umbrella-beach text-warning"></i> Lifestyle</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="lwlifestyleStaticContainer">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Religion</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.religion"><?php echo $row['region'] ?> </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Nature</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.nature"><?php echo $row['character_status'] ?> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Smoke</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.smoke"><?php echo $row['smoke'] ?> </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Drink</strong></label>
                                                        <div class="lw-inline-edit-text" data-model="specificationData.drink"><?php echo $row['drink'] ?> </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>
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