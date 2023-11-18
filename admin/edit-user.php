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
                    } else {
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT * FROM `users` u JOIN user_info ui on u.user_info_id = ui.user_info_id JOIN location l on u.location_id = l.location_id  WHERE u.user_id = '$user_id';";
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
                                <div class="card mb-3">
                                    <div class="card-header" style="font-size:30px;">
                                        <h4><span class="lw-profile-edit-button-container d-flex justify-content-center align-items-center" style="background-color: white; width:150px; height:40px;">
                                                <a class="lw-icon-btn" href="javascript:window.history.back(-1);" role="button" id="lwEditProfileAndCoverPhoto">
                                                    <i class="fas fa-backward"></i> Go back </a>
                                            </span></h4>
                                        <h4 style="font-size:30px;"> <?php echo $row['fullname']; ?><span>&nbsp;<?php if ($row['gender'] == 0) {
                                                                                            echo "<i class='fas fa-mars'style='font-size:30px;color: #005eff;'></i>";
                                                                                        } else {
                                                                                            echo "<i class='fas fa-venus'style='font-size:35px;color: #ff0000;'></i>";
                                                                                        } ?>&nbsp;(<?php
                                                                                                    $now = date("Y", time());
                                                                                                    $age = ($now - date("Y", strtotime($row['dob'])));
                                                                                                    echo $age; ?>)</span> </h4>
                                        <hr> <i class="fas fa-map-marker-alt text-success"></i> <span class="mr-3"><span data-model="profileData.city"> &nbsp;<?php echo $row['location_name']; ?></span></span>
                                        <div class="float-right"> <i class="fas fa-heart text-danger"></i> <span id="lwTotalUserLikes" class="mr-3"><?php echo $row['likes']; ?> likes</span></div>
                                    </div>
                                </div>

                                <div class="card mb-3" >
                                    <div class="card-header"> <span class="float-right">
                                            <h5  style="font-size:30px;"><i class="fas fa-images text-warning"></i> Profile Image</h5>
                                    </div>
                                    <div class="card-body choose-photo">
                                        <label for="avatar_img" class="dt_selct_avatar" style="background-image: 
                        url('../Assets/images/profile/<?php if (empty($row['image'])) echo "d-avatar.jpg";
                                                        else echo $row['image']; ?>');border-radius: 50%;" id="avatar_span">
                                            <input type="file" hidden id="img_file" class="hide" accept="image/x-png, image/gif, image/jpeg" name="image" onchange="updateAvatarImage();checkFile();">
                                        </label>
                                        <button class="btn-image" onclick="document.getElementById('img_file').click(); return false">Browse Image</button>

                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header"> <span class="float-right">
                                            <h5 ><i class="fas fa-info-circle text-info"></i> Basic Information</h5>
                                    </div>
                                    <div class="card-body">

                                        <form class="lw-ajax-form lw-form" lwsubmitonchange="" method="post" data-show-message="true" action="" data-callback="getUserProfileData" id="lwUserBasicInformationForm" novalidate="novalidate">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="first_name">
                                                        <strong>Full Name</strong>
                                                    </label>
                                                    <input type="text" value="<?php echo $row['fullname']; ?>" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="email">
                                                        <strong>Emai</strong>
                                                    </label>
                                                    <input type="email" value="<?php echo $row['email']; ?>" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="select_gender"><strong>Gender</strong></label>
                                                    <select name="gender" id="gender" class="form-control custom-select" id="select_gender">
                                                        <option value="" selected="" disabled="">Choose your gender</option>
                                                        <option value="0" <?php if ($row['gender'] == 0) echo 'selected=""'; ?>>Male</option>
                                                        <option value="1 <?php if ($row['gender'] == 1) echo 'selected=""'; ?>">Female</option>
                                                        <option value="2" <?php if ($row['gender'] == 2) echo 'selected=""'; ?>>Secret</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="birthday"><strong>Birthday</strong></label>
                                                    <input type="date" id="dob" value="<?php echo date("mm/dd/YYYY",strtotime($row['dob'])); ?>" class="form-control" name="dob">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="select_relationship_status"><strong>Relationship Status</strong>
                                                    </label>
                                                    <select name="relationship_status" id="relationship_status" class="form-control custom-select" id="select_relationship_status">
                                                        <option value="" selected="" disabled="">Choose your Relationship Status</option>
                                                        <option value="Single" <?php if ($row['relationship'] == 'Single') echo 'selected=""'; ?>>Single</option>
                                                        <option value="Married" <?php if ($row['relationship'] == 'Married') echo 'selected=""'; ?>>Married</option>
                                                        <option value="Divorced" <?php if ($row['relationship'] == 'Divorced') echo 'selected=""'; ?>>Divorced</option>
                                                        <option value="Widow" <?php if ($row['relationship'] == 'Widow') echo 'selected=""'; ?>>Widow</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6"> <label for="select_work_status">
                                                        <strong>Work Status</strong></label>
                                                    <select name="work_status" id="work_status" class="form-control custom-select" id="select_work_status">
                                                        <option value="" selected="" disabled="">Choose your work status</option>
                                                        <option value="Studying" <?php if ($row['working_status'] == "Studying") echo 'selected=""'; ?>>Studying</option>
                                                        <option value="Working" <?php if ($row['working_status'] == "Working") echo 'selected=""'; ?>>Working</option>
                                                        <option value="Looking for work" <?php if ($row['working_status'] == "Looking for work") echo 'selected=""'; ?>>Looking for work</option>
                                                        <option value="Retired" <?php if ($row['working_status'] == "Retired") echo 'selected=""'; ?>>Retired</option>
                                                        <option value="Self-Employed" <?php if ($row['working_status'] == "Self-Employed") echo 'selected=""'; ?>>Self-Employed</option>
                                                        <option value="Other" <?php if ($row['working_status'] == "Other") echo 'selected=""'; ?>>Other</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">

                                                <div class="form-group" > <label for="about_me" style="margin-left:15px"><strong>About Me</strong></label>
                                                    <textarea class="form-control" name="about_me" id="about_me" rows="3" cols="211" style="margin-left:10px;" placeholder="Say something about yourself."><?php echo $row['bio'] ?></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
                                    </div>
                                    <div class="card-body">

                                        <div id="lwUserEditableLocation">
                                            <div class="form-group"> <label for="address_address"><strong>Location</strong></label>
                                                <input type="text" id="location_name" name="address_address" class="form-control map-input pac-target-input" placeholder="Enter a location" value="<?php echo $row['location_name']; ?>" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5><i class="far fa-smile text-primary"></i> Looks</h5>
                                    </div>
                                    <div class="card-body">

                                        <form class="lw-ajax-form lw-form" method="post" lwsubmitonchange="" data-callback="getUserProfileData" id="lwUserlooksForm" novalidate="novalidate">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="height"><strong>Height</strong></label>
                                                    <select name="height" id="height" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Height</option>
                                                        <option <?php if ($row['height'] == "139") echo 'selected=""'; ?> value="139"> 139 cm </option>
                                                        <option <?php if ($row['height'] == "140") echo 'selected=""'; ?> value="140"> 140 cm (4' 7″) </option>
                                                        <option <?php if ($row['height'] == "141") echo 'selected=""'; ?> value="141"> 141 cm </option>
                                                        <option <?php if ($row['height'] == "142") echo 'selected=""'; ?> value="142"> 142 cm (4' 8″) </option>
                                                        <option <?php if ($row['height'] == "144") echo 'selected=""'; ?> value="144"> 144 cm </option>
                                                        <option <?php if ($row['height'] == "145") echo 'selected=""'; ?> value="145"> 145 cm (4' 9″) </option>
                                                        <option <?php if ($row['height'] == "146") echo 'selected=""'; ?> value="146"> 146 cm </option>
                                                        <option <?php if ($row['height'] == "147") echo 'selected=""'; ?> value="147"> 147 cm (4' 10″) </option>
                                                        <option <?php if ($row['height'] == "148") echo 'selected=""'; ?> value="148"> 148 cm </option>
                                                        <option <?php if ($row['height'] == "149") echo 'selected=""'; ?> value="149"> 149 cm </option>
                                                        <option <?php if ($row['height'] == "150") echo 'selected=""'; ?> value="150"> 150 cm (4' 11″) </option>
                                                        <option <?php if ($row['height'] == "151") echo 'selected=""'; ?> value="151"> 151 cm </option>
                                                        <option <?php if ($row['height'] == "152") echo 'selected=""'; ?> value="152"> 152 cm (5' 0″) </option>
                                                        <option <?php if ($row['height'] == "153") echo 'selected=""'; ?> value="153"> 153 cm </option>
                                                        <option <?php if ($row['height'] == "154") echo 'selected=""'; ?> value="154"> 154 cm </option>
                                                        <option <?php if ($row['height'] == "155") echo 'selected=""'; ?> value="155"> 155 cm (5' 1″) </option>
                                                        <option <?php if ($row['height'] == "156") echo 'selected=""'; ?> value="156"> 156 cm </option>
                                                        <option <?php if ($row['height'] == "157") echo 'selected=""'; ?> value="157"> 157 cm (5' 2″) </option>
                                                        <option <?php if ($row['height'] == "158") echo 'selected=""'; ?> value="158"> 158 cm </option>
                                                        <option <?php if ($row['height'] == "159") echo 'selected=""'; ?> value="159"> 159 cm </option>
                                                        <option <?php if ($row['height'] == "160") echo 'selected=""'; ?> value="160"> 160 cm (5' 3″) </option>
                                                        <option <?php if ($row['height'] == "161") echo 'selected=""'; ?> value="161"> 161 cm </option>
                                                        <option <?php if ($row['height'] == "162") echo 'selected=""'; ?> value="162"> 162 cm </option>
                                                        <option <?php if ($row['height'] == "163") echo 'selected=""'; ?> value="163"> 163 cm (5' 4″) </option>
                                                        <option <?php if ($row['height'] == "164") echo 'selected=""'; ?> value="164"> 164 cm </option>
                                                        <option <?php if ($row['height'] == "165") echo 'selected=""'; ?> value="165"> 165 cm (5' 5″) </option>
                                                        <option <?php if ($row['height'] == "166") echo 'selected=""'; ?> value="166"> 166 cm </option>
                                                        <option <?php if ($row['height'] == "167") echo 'selected=""'; ?> value="167"> 167 cm </option>
                                                        <option <?php if ($row['height'] == "168") echo 'selected=""'; ?> value="168"> 168 cm (5' 6″) </option>
                                                        <option <?php if ($row['height'] == "169") echo 'selected=""'; ?> value="169"> 169 cm </option>
                                                        <option <?php if ($row['height'] == "170") echo 'selected=""'; ?> value="170"> 170 cm (5' 7″) </option>
                                                        <option <?php if ($row['height'] == "171") echo 'selected=""'; ?> value="171"> 171 cm </option>
                                                        <option <?php if ($row['height'] == "172") echo 'selected=""'; ?> value="172"> 172 cm </option>
                                                        <option <?php if ($row['height'] == "173") echo 'selected=""'; ?> value="173"> 173 cm (5' 8″) </option>
                                                        <option <?php if ($row['height'] == "174") echo 'selected=""'; ?> value="174"> 174 cm </option>
                                                        <option <?php if ($row['height'] == "175") echo 'selected=""'; ?> value="175"> 175 cm (5' 9″) </option>
                                                        <option <?php if ($row['height'] == "176") echo 'selected=""'; ?> value="176"> 176 cm </option>
                                                        <option <?php if ($row['height'] == "177") echo 'selected=""'; ?> value="177"> 177 cm </option>
                                                        <option <?php if ($row['height'] == "178") echo 'selected=""'; ?> value="178"> 178 cm (5' 10″) </option>
                                                        <option <?php if ($row['height'] == "179") echo 'selected=""'; ?> value="179"> 179 cm </option>
                                                        <option <?php if ($row['height'] == "180") echo 'selected=""'; ?> value="180"> 180 cm (5' 11″) </option>
                                                        <option <?php if ($row['height'] == "181") echo 'selected=""'; ?> value="181"> 181 cm </option>
                                                        <option <?php if ($row['height'] == "182") echo 'selected=""'; ?> value="182"> 182 cm </option>
                                                        <option <?php if ($row['height'] == "183") echo 'selected=""'; ?> value="183"> 183 cm (6' 0″) </option>
                                                        <option <?php if ($row['height'] == "184") echo 'selected=""'; ?> value="184"> 184 cm </option>
                                                        <option <?php if ($row['height'] == "185") echo 'selected=""'; ?> value="185"> 185 cm (6' 1″) </option>
                                                        <option <?php if ($row['height'] == "186") echo 'selected=""'; ?> value="186"> 186 cm </option>
                                                        <option <?php if ($row['height'] == "187") echo 'selected=""'; ?> value="187"> 187 cm </option>
                                                        <option <?php if ($row['height'] == "188") echo 'selected=""'; ?> value="188"> 188 cm (6' 2″) </option>
                                                        <option <?php if ($row['height'] == "189") echo 'selected=""'; ?> value="189"> 189 cm </option>
                                                        <option <?php if ($row['height'] == "190") echo 'selected=""'; ?> value="190"> 190 cm </option>
                                                        <option <?php if ($row['height'] == "191") echo 'selected=""'; ?> value="191"> 191 cm (6' 3″) </option>
                                                        <option <?php if ($row['height'] == "192") echo 'selected=""'; ?> value="192"> 192 cm </option>
                                                        <option <?php if ($row['height'] == "193") echo 'selected=""'; ?> value="193"> 193 cm (6' 4″) </option>
                                                        <option <?php if ($row['height'] == "194") echo 'selected=""'; ?> value="194"> 194 cm </option>
                                                        <option <?php if ($row['height'] == "195") echo 'selected=""'; ?> value="195"> 195 cm </option>
                                                        <option <?php if ($row['height'] == "196") echo 'selected=""'; ?> value="196"> 196 cm (6' 5″) </option>
                                                        <option <?php if ($row['height'] == "197") echo 'selected=""'; ?> value="197"> 197 cm </option>
                                                        <option <?php if ($row['height'] == "198") echo 'selected=""'; ?> value="198"> 198 cm (6' 6″) </option>
                                                        <option <?php if ($row['height'] == "199") echo 'selected=""'; ?> value="199"> 199 cm </option>
                                                        <option <?php if ($row['height'] == "200") echo 'selected=""'; ?> value="200"> 200 cm </option>
                                                        <option <?php if ($row['height'] == "201") echo 'selected=""'; ?> value="201"> 201 cm (6' 7″) </option>
                                                        <option <?php if ($row['height'] == "202") echo 'selected=""'; ?> value="202"> 202 cm </option>
                                                        <option <?php if ($row['height'] == "203") echo 'selected=""'; ?> value="203"> 203 cm (6' 8″) </option>
                                                        <option <?php if ($row['height'] == "204") echo 'selected=""'; ?> value="204"> 204 cm </option>
                                                        <option <?php if ($row['height'] == "205") echo 'selected=""'; ?> value="205"> 205 cm </option>
                                                        <option <?php if ($row['height'] == "206") echo 'selected=""'; ?> value="206"> 206 cm (6' 9″) </option>
                                                        <option <?php if ($row['height'] == "207") echo 'selected=""'; ?> value="207"> 207 cm </option>
                                                        <option <?php if ($row['height'] == "208") echo 'selected=""'; ?> value="208"> 208 cm (6' 10″) </option>
                                                        <option <?php if ($row['height'] == "209") echo 'selected=""'; ?> value="209"> 209 cm </option>
                                                        <option <?php if ($row['height'] == "210") echo 'selected=""'; ?> value="210"> 210 cm </option>
                                                        <option <?php if ($row['height'] == "211") echo 'selected=""'; ?> value="211"> 211 cm (6' 11″) </option>
                                                        <option <?php if ($row['height'] == "212") echo 'selected=""'; ?> value="212"> 212 cm </option>
                                                        <option <?php if ($row['height'] == "213") echo 'selected=""'; ?> value="213"> 213 cm (7' 0″) </option>
                                                        <option <?php if ($row['height'] == "214") echo 'selected=""'; ?> value="214"> 214 cm </option>
                                                        <option <?php if ($row['height'] == "215") echo 'selected=""'; ?> value="215"> 215 cm </option>
                                                        <option <?php if ($row['height'] == "216") echo 'selected=""'; ?> value="216"> 216 cm (7' 1″) </option>
                                                        <option <?php if ($row['height'] == "217") echo 'selected=""'; ?> value="217"> 217 cm </option>
                                                        <option <?php if ($row['height'] == "218") echo 'selected=""'; ?> value="218"> 218 cm </option>
                                                        <option <?php if ($row['height'] == "220") echo 'selected=""'; ?> value="220"> 220 cm (7' 3″) </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="ethnicity"><strong>Ethnicity</strong></label>
                                                    <select name="ethnicity" id="ethnicity" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Ethnicity</option>
                                                        <option <?php if ($row['ethnicity'] == "Kinh") echo 'selected=""'; ?> value="Kinh"> Kinh </option>
                                                        <option <?php if ($row['ethnicity'] == "Tày") echo 'selected=""'; ?> value="Tày"> Tày </option>
                                                        <option <?php if ($row['ethnicity'] == "Mường") echo 'selected=""'; ?> value="Mường"> Mường </option>
                                                        <option <?php if ($row['ethnicity'] == "Chăm") echo 'selected=""'; ?> value="Chăm"> Chăm </option>
                                                        <option <?php if ($row['ethnicity'] == "Rắc-lây") echo 'selected=""'; ?> value="Rắc-lây"> Rắc-lây </option>
                                                        <option <?php if ($row['ethnicity'] == "Other") echo 'selected=""'; ?> value="Other"> Other </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="body_type"><strong>Body Type</strong></label>
                                                    <select name="body_type" id="body_type" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Body Type</option>
                                                        <option <?php if ($row['body_type'] == "slim") echo 'selected=""'; ?> value="slim"> Slim </option>
                                                        <option <?php if ($row['body_type'] == "sporty") echo 'selected=""'; ?> value="sporty"> Sporty </option>
                                                        <option <?php if ($row['body_type'] == "curvy") echo 'selected=""'; ?> value="curvy"> Curvy </option>
                                                        <option <?php if ($row['body_type'] == "supermodel") echo 'selected=""'; ?> value="supermodel"> Supermodel </option>
                                                        <option <?php if ($row['body_type'] == "average") echo 'selected=""'; ?> value="average"> Average </option>
                                                        <option <?php if ($row['body_type'] == "Other") echo 'selected=""'; ?> value="other"> Other </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="hair_color"><strong>Hair Color</strong></label>
                                                    <select name="hair_color" id="hair_color" class="form-control custom-select">
                                                        <option  value="" selected="" disabled="">Choose Hair Color</option>
                                                        <option  <?php if ($row['hair_color'] == "brown") echo 'selected=""'; ?> value="brown"> Brown </option>
                                                        <option  <?php if ($row['hair_color'] == "black") echo 'selected=""'; ?> value="black"> Black </option>
                                                        <option  <?php if ($row['hair_color'] == "white") echo 'selected=""'; ?> value="white"> White </option>
                                                        <option  <?php if ($row['hair_color'] == "sandy") echo 'selected=""'; ?> value="sandy"> Sandy </option>
                                                        <option  <?php if ($row['hair_color'] == "red/auburn") echo 'selected=""'; ?> value="red/auburn"> Red/Auburn </option>
                                                        <option  <?php if ($row['hair_color'] == "blond/strawberry") echo 'selected=""'; ?> value="blond/strawberry"> Blond/Strawberry </option>
                                                        <option  <?php if ($row['hair_color'] == "blue") echo 'selected=""'; ?> value="blue"> Blue </option>
                                                        <option  <?php if ($row['hair_color'] == "green") echo 'selected=""'; ?> value="green"> Green </option>
                                                        <option  <?php if ($row['hair_color'] == "orange") echo 'selected=""'; ?> value="orange"> Orange </option>
                                                        <option  <?php if ($row['hair_color'] == "pink") echo 'selected=""'; ?> value="pink"> Pink </option>
                                                        <option  <?php if ($row['hair_color'] == "purple") echo 'selected=""'; ?> value="purple"> Purple </option>
                                                        <option  <?php if ($row['hair_color'] == "other") echo 'selected=""'; ?> value="other"> Other </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="card mb-3">
                                    <div class="card-header"> <span class="float-right">
                                            <h5><i class="fas fa-umbrella-beach text-warning"></i> Lifestyle</h5>
                                    </div>
                                    <div class="card-body">

                                        <form class="lw-ajax-form lw-form" method="post" lwsubmitonchange="" action="" data-callback="getUserProfileData" id="lwUserlifestyleForm" novalidate="novalidate">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="religion"><strong>Religion</strong></label>
                                                    <select name="religion" id="religion" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Religion</option>
                                                        <option <?php if ($row['region'] == "Đạo") echo 'selected=""'; ?> value="Đạo"> Đạo </option>
                                                        <option <?php if ($row['region'] == "Phật") echo 'selected=""'; ?> value="Phật"> Phật </option>
                                                        <option <?php if ($row['region'] == "Other") echo 'selected=""'; ?> value="Other"> Other </option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="nature"><strong>Character</strong></label> <select name="nature" id="nature" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Nature</option>
                                                        <option value="accommodating"> Accommodating </option>
                                                        <option value="adventurous"> Adventurous </option>
                                                        <option value="calm"> Calm </option>
                                                        <option value="careless"> Careless </option>
                                                        <option value="cheerful"> Cheerful </option>
                                                        <option value="demanding"> Demanding </option>
                                                        <option value="extroverted"> Extroverted </option>
                                                        <option value="honest"> Honest </option>
                                                        <option value="generous"> Generous </option>
                                                        <option value="humorous"> Humorous </option>
                                                        <option value="introverted"> Introverted </option>
                                                        <option value="liberal"> Liberal </option>
                                                        <option value="lively"> Lively </option>
                                                        <option value="loner"> Loner </option>
                                                        <option value="nervous"> Nervous </option>
                                                        <option value="possessive"> Possessive </option>
                                                        <option value="quiet"> Quiet </option>
                                                        <option value="reserved" selected=""> Reserved </option>
                                                        <option value="sensitive"> Sensitive </option>
                                                        <option value="shy"> Shy </option>
                                                        <option value="social"> Social </option>
                                                        <option value="spontaneous"> Spontaneous </option>
                                                        <option value="stubborn"> Stubborn </option>
                                                        <option value="suspicious"> Suspicious </option>
                                                        <option value="thoughtful"> Thoughtful </option>
                                                        <option value="proud"> Proud </option>
                                                        <option value="considerate"> Considerate </option>
                                                        <option value="friendly"> Friendly </option>
                                                        <option value="polite"> Polite </option>
                                                        <option value="reliable"> Reliable </option>
                                                        <option value="careful"> Careful </option>
                                                        <option value="helpful"> Helpful </option>
                                                        <option value="patient"> Patient </option>
                                                        <option value="optimistic"> Optimistic </option>
                                                    </select> </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="smoke"><strong>Smoke</strong></label>
                                                    <select name="smoke" id="smoke" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Smoke</option>
                                                        <option value="never"> Never </option>
                                                        <option value="I some sometimes"> I Smoke Sometimes </option>
                                                        <option value="chain smoker"> Chain Smoker </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label for="drink"><strong>Drink</strong></label>
                                                    <select name="drink" id="drink" class="form-control custom-select">
                                                        <option value="" selected="" disabled="">Choose Drink</option>
                                                        <option value="never"> Never </option>
                                                        <option value="I drink sometimes"> I Drink Sometimes </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="ccol-sm-6 mb-3 d-flex justify-content-center  text-center">
                                <button type="button" id="submit" style="width:120px;height:50px;" name="submit" onclick="Click_S()" class="btn btn-primary d-flex justify-content-center align-items-center">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function checkFile() {
                var fileInput = document.getElementById('img_file');
                var nextButton = document.getElementById('next1');

                if (fileInput.files.length > 0) {
                    nextButton.removeAttribute('disabled');
                } else {
                    nextButton.setAttribute('disabled', 'disabled');
                }
            }

            function updateAvatarImage() {
                var avatarSpan = document.getElementById('avatar_span');
                var fileInput = document.getElementById('img_file');

                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        avatarSpan.style.backgroundImage = "url('" + e.target.result + "')";
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
            $('#img_file').on("change", function() {
                var file = $(this)[0].files[0];
                var form = new FormData();
                form.append('image', file);
                $.ajax({
                    url: "Action/uploads.php",
                    type: 'post',
                    processData: false, // tell jQuery not to process the data
                    contentType: false,
                    enctype: "multipart/form-data",
                    data: form,
                });
            });

            function Click_S() {
                var form1 = new FormData();
                var height = $('#height').val();
                var ethnicity = $('#ethnicity').val();
                var body_type = $('#body_type').val();
                var hair_color = $('#hair_color').val();
                var relationship_status = $('#relationship_status').val();
                var religion = $('#religion').val();
                var drink = $('#drink').val();
                var nature = $('#nature').val();
                var smoke = $('#smoke').val();
                var work_status = $('#work_status').val();
                var about_me = $('#about_me').val();
                var fullname = $('#fullname').val();
                var email = $('#email').val();
                var gender = $('#gender').val();
                var dob = $('#dob').val();
                form1.append('height', height);
                form1.append('ethnicity', ethnicity);
                form1.append('body_type', body_type);
                form1.append('hair_color', hair_color);
                form1.append('relationship_status', relationship_status);
                form1.append('religion', religion);
                form1.append('drink', drink);
                form1.append('nature', nature);
                form1.append('smoke', smoke);
                form1.append('work_status', work_status);
                form1.append('about_me', about_me);
                form1.append('fullname', fullname);
                form1.append('email', email);
                form1.append('gender', gender);
                form1.append('dob', dob);
                $.ajax({
                    url: 'Action/edit-profile.php',
                    type: 'post',
                    processData: false, // tell jQuery not to process the data
                    contentType: false,
                    enctype: "multipart/form-data",
                    data: form1,
                    success: function(response) {},
                    error: function() {

                    }
                });
                window.location.href = "<?php echo SITEURL . "profile.php?user_id=" . $user_id; ?>"

            }
        </script>
    </div>
    <!-- Required vendors -->
    <script src="./Assets/vendor/global/global.min.js"></script>
    <script src="./Assets/js/quixnav-init.js"></script>
    <script src="./Assets/js/custom.min.js"></script>

    <!-- Datatable -->
    <script src="./Assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    </body>

</html>