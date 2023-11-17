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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h4><span class="lw-profile-edit-button-container d-flex justify-content-center align-items-center" style="background-color: white; width:150px; height:40px;">
                                            <a class="lw-icon-btn" href="<?php echo SITEURL . "profile.php?user_id=" . $user_id; ?>" role="button" id="lwEditProfileAndCoverPhoto">
                                                Go back <i class="fas fa-backward fa-rotate-180"></i></a>
                                        </span></h4>
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

                            <div class="card mb-3">
                                <div class="card-header"> <span class="float-right">
                                        <h5><i class="fas fa-images text-warning"></i> Profile Image</h5>
                                </div>
                                <div class="card-body choose-photo">
                                    <label for="avatar_img" class="dt_selct_avatar" style="background-image: 
                                    url('./Assets/images/profile/<?php if (empty($row['image'])) echo "d-avatar.jpg";
                                                                    else echo $row['image']; ?>');border-radius: 50%;" id="avatar_span">
                                        <input type="file" hidden id="img_file" class="hide" accept="image/x-png, image/gif, image/jpeg" name="image" onchange="updateAvatarImage();checkFile();">
                                    </label>
                                    <button class="btn-image" onclick="document.getElementById('img_file').click(); return false">Browse Image</button>

                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header"> <span class="float-right">
                                        <h5><i class="fas fa-info-circle text-info"></i> Basic Information</h5>
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
                                                <input type="date" id="dob" <?php echo $row['dob']; ?> class="form-control" name="dob">
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

                                            <div class="form-group"> <label for="about_me"><strong>About Me</strong></label>
                                                <textarea class="form-control" name="about_me" id="about_me" rows="3" placeholder="Say something about yourself."><?php echo $row['bio'] ?></textarea>
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

                                    <form class="lw-ajax-form lw-form" method="post" lwsubmitonchange="" data-callback="getUserProfileData" id="lwUserlooksForm" style="display: block;" novalidate="novalidate">
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
                                                    <option value="" selected="" disabled="">Choose Hair Color</option>
                                                    <option value="brown"> Brown </option>
                                                    <option value="black"> Black </option>
                                                    <option value="white"> White </option>
                                                    <option value="sandy"> Sandy </option>
                                                    <option value="gray_or_partially_gray"> Gray or Partially Gray </option>
                                                    <option value="red/auburn"> Red/Auburn </option>
                                                    <option value="blond/strawberry"> Blond/Strawberry </option>
                                                    <option value="blue"> Blue </option>
                                                    <option value="green"> Green </option>
                                                    <option value="orange"> Orange </option>
                                                    <option value="pink"> Pink </option>
                                                    <option value="purple"> Purple </option>
                                                    <option value="partly_or_completely_bald"> Partly or Completely Bald </option>
                                                    <option value="other"> Other </option>
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

                                    <form class="lw-ajax-form lw-form" method="post" lwsubmitonchange="" action="" data-callback="getUserProfileData" id="lwUserlifestyleForm" style="display: block;" novalidate="novalidate">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0"> <label for="religion"><strong>Religion</strong></label>
                                                <select name="religion" id="religion" class="form-control custom-select">
                                                    <option value="" selected="" disabled="">Choose Religion</option>
                                                    <option value="Đạo"> Đạo </option>
                                                    <option value="Phật"> Phật </option>
                                                    <option value="Other"> Other </option>
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
                            <button type="button" id="submit" style="width:120px; height:50px;" name="submit" onclick="Click_S()" class="btn btn-primary d-flex justify-content-center align-items-center">Save</button>
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
                success: function(response) {
                },
                error: function() {

                }
            });
            window.location.href = "<?php echo SITEURL . "profile.php?user_id=" . $user_id; ?>"

        }
    </script>
</body>

</html>