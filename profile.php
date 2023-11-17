<?php session_start();
require 'Config/config.php';
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'Layout/headerPage.php'; ?>

    <title>Lynder</title>


    <link rel="stylesheet" href="./Assets/css/style_home.css">
    <style>
        .container-fluid {
            min-height: 200em;
        }

        .content {
            border-radius: 10px;
        }

        .content_body {
            min-height: 180em;
            position: relative;
            top: 10px;
            border-radius: 10px;
        }

        .lw-profile-image-card-container1 {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .lw-profile-image-card-container1 img {
            border-radius: 50%;
            width: 500px;
            height: 500px;
            ;
        }

        .lw-profile-edit-button-container {
            position: absolute;
            right: 23px;

        }

        .content {
            width: 83%;
            border-top-right-radius: 10px;
        }

        .menu {
            width: 100%;
        }

        .sidebar1 {
            min-height: 50em;
        }

        .container-fluid {
            min-height: 50em;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <div class="content col py-3">

                <?php include_once './Layout/menu.php' ?>
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
                            <div class="card m-3">
                                <div class="card-header">
                                <?php if($_SESSION['user_id'] == $_GET['user_id']) { ?><h3><span class="lw-profile-edit-button-container d-flex justify-content-center align-items-center" style="background-color: white; width:100px; height:40px;">
                                    <a href="<?php echo SITEURL . "chat.php?user_id=".$user_id; ?>"><i class="fas fa-comment-dots" style="font-size: 24px; padding-top:23px;"></i></a> 
                                    &nbsp;<a class="lw-icon-btn" href="<?php echo SITEURL . "edit-profile.php"; ?>" role="button" id="lwEditProfileAndCoverPhoto">
                                                <i class="fa fa-pencil-alt"></i> Edit </a>
                                        </span></h3>
                                        <?php } ?>
                                    <h4> <?php echo $row['fullname']; ?><span>&nbsp;<?php if ($row['gender'] == 0) {
                                                                                        echo "<i class='fas fa-mars'style='font-size:30px;color: #005eff;'></i>";
                                                                                    } else {
                                                                                        echo "<i class='fas fa-venus'style='font-size:30px;color: #ff0000;'></i>";
                                                                                    } ?>&nbsp;(<?php
                                                                                                $now = date("Y", time());
                                                                                                $age = ($now - date("Y", strtotime($row['dob'])));
                                                                                                echo $age; ?>)</span> </h4>

                                    <hr> <i class="fas fa-map-marker-alt text-success"></i> <span class="mr-3"><span data-model="profileData.city"><?php echo $row['location_name']; ?></span></span>
                                    <div class="float-right"> <i class="fas fa-heart text-danger"></i> <span id="lwTotalUserLikes" class="mr-3"><?php echo $row['likes']; ?> likes</span></div>
                                </div>
                            </div>
                            <div class="card m-3 lw-profile-image-card-container">
                                <div class="card-body">
                                    <div class="mt-4 d-none d-md-flex lw-profile-side-block-container"> </div>
                                    <div class="row" id="lwProfileAndCoverStaticBlock">
                                        <div class="col-lg-12">
                                            <div class="card mb-3 lw-profile-image-card-container1">
                                                <?php echo "<img src='" . SITEURL . "Assets/images/profile/" . $row['image'] . "'>"; ?>
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

                                                <div class="form-group"> <strong><label for="about_me">About Me</label></strong> <textarea class="form-control" name="about_me" id="about_me" readonly rows="3" placeholder=""><?php echo $row['bio']?></textarea> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-3">
                                    <div class="card-header"> <span class="float-right"> <a class="lw-icon-btn" href="" role="button" id="lwEditUserLocation"> <i class="fa fa-pencil-alt"></i> </a> <a class="lw-icon-btn" href="" role="button" id="lwCloseLocationBlock" style="display: none;"> <i class="fa fa-times"></i> </a> </span>
                                        <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="lwUserStaticLocation">
                                            <div class="gmap_canvas">
                                            <iframe height="300" id="gmap_canvas" src="https://maps.google.com/maps/place?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>&amp;output=embed&amp;language=en" frameborder="0" width="100%" scrolling="no" marginheight="0" marginwidth="0"></iframe> </div>
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
                                <!-- <div class="card mb-3">
                                    <div class="card-header"> <span class="float-right">
                                            <h5><i class="far fa-heart text-danger"></i> Favorites</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="lwfavoritesStaticContainer">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Music Genre</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.music_genre"> </div>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Singer</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.singer"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Song</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.song"> </div>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Hobby</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.hobby"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Sport</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.sport"> </div>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Book</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.book"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Dish</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.dish"> </div>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Color</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.color"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Movie</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.movie"> </div>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Show</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.show"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"> <label><strong>Inspired From</strong></label>
                                                    <div class="lw-inline-edit-text" data-model="specificationData.inspired_from"> </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->

                            <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>