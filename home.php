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
        #card-container {
            position: relative;
            width: 400px;
            height: 500px;
            min-height: 30em;
            margin: 1%;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .card {
            position: absolute;
            width: 110%;
            height: 135%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            z-index: 100;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px 10px;
            /* Add margin between cards */
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        .overlay {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            padding: 16px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            text-align: left;
        }

        .overlay h2,
        .overlay p {
            margin: 8px 0;
            font-size: 28px;
            color: #fff;
        }

        #buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 16px;
        }

        .overlay .button {
            padding: 8px;
            border: none;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
        }

        .overlay #like-button {
            color: darkcyan;
            font-size: 35px;
            outline: 3px solid darkcyan;

        }

        .overlay #dislike-button {
            font-size: 62px;
            color: red;
        }

        .circle {
            width: 60px;
            height: 60px;
            font-size: 62px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .active {
            color: palevioletred;
        }

        .sidebar {
            font-size: 22px;
        }

        #logo {
            font-size: 30px;
            color: #EC6EAD;
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
            <div class="col col-lg-3 col-md-4 col-xl-2 px-sm-2 px-0 bg-dark sidebar1">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="position:fixed">
                        <li style="width:130%;"> <a href="<?php echo SITEURL . "home.php"; ?>" class="d-flex align-items-center justify-content-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="d-none d-sm-inline" id="logo" style="font-weight:bold;">Lynder</span>
                            </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                        <li class="mt-4 nav-item active"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "home.php"; ?>"> <i class="fas fa-home"></i> <span>Home</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "search.php"; ?>"> <i class="fas fa-search"></i> <span>Find Matches</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" data-event-callback="lwPrepareUploadPlugIn" href="<?php echo SITEURL . "profile.php?user_id=".$_SESSION['user_id']; ?>"> <i class="fas fa-user"></i> <span>My Profile</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" data-event-callback="lwPrepareUploadPlugIn" href="<?php echo SITEURL . "photo.php"; ?>"> <i class="far fa-images"></i> <span>My Photos</span> </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "like.php?user_id=".$user_id; ?>"> <i class="fas fa-fw fa-heart text-success"></i> <span>My Likes</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "block.php?user_id=".$user_id; ?>"> <i class="fas fa-ban"></i> <span>Blocked Users</span> </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                    </ul>
                </div>
            </div>
            <div class="content col col-lg-9 col-md-8 py-3">
                <?php include_once './Layout/menu.php' ?>
                <div class="clearfix"></div>
                <div class="content_body col col-lg-12 col-md-12 ">
                    <div id="card-container">
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT `user_id`, `fullname`, `image`, `location_name`, `dob`, `gender` FROM `users` u JOIN `location` l ON u.location_id=l.location_id WHERE not u.user_id = '$user_id' ORDER BY RAND()  DESC LIMIT 3;";
                        $result = mysqli_query($conn, $query);
                        $numRows = mysqli_num_rows($result);
                        if ($numRows <> 0) {
                            $cont = 3;
                            while ($rows = mysqli_fetch_array($result)) {
                                $user_id = $rows['user_id'];
                        ?>
                                <form method="post" enctype="multipart/form-data" class="card " id="card1">
                                    <?php
                                    if ($rows['image'] == null) { ?>
                                        <img src="Assets/images/d-avatar.jpg" alt="Cat 1">
                                    <?php } else {
                                        echo "<img src='" . SITEURL . "Assets/images/profile/" . $rows['image'] . "'>";
                                    } ?>
                                    <div class="overlay">
                                        <input type="text" name="user_id2" id="user_id" value="<?php echo $user_id; ?>" hidden />
                                        <h2><?php echo $rows['fullname']; ?>&nbsp;
                                            <?php if ($rows['gender'] == 0) {
                                                echo "<i class='fas fa-mars'style='font-size:30px;color: #005eff;'></i>";
                                            } else {
                                                echo "<i class='fas fa-venus'style='font-size:30px;color: #ff0000;'></i>";
                                            } ?><span>&nbsp;(<?php $timestamp = strtotime($rows['dob']);
                                            $now = date("Y", time());
                                            // Convert the timestamp to a formatted date
                                            $age = ($now - date("Y", $timestamp)); echo $age; ?>)</span></h2>
                                        <p><i class="fas fa-map-marker-alt"></i>&nbsp; <?php echo $rows['location_name']; ?></p>
                                        <div id="buttons">
                                            <a class="button circle" onclick="handleSwipe(false);CountDisLike(<?php echo $user_id; ?>);" name="dislike" id="dislike-button"><i class="fas fa-times-circle"></i></a>
                                            <a class="circle" href="<?php echo SITEURL . "profile.php?user_id=" . $user_id; ?>"><i class="fas fa-user-circle" style="color: #007FFF;"></i></a>
                                            <a class="button circle" onclick="handleSwipe(true);CountLike(<?php echo $user_id; ?>);" name="like" id="like-button"><i class="far fa-heart"></i></a>
                                            <span hidden name="like1" id="like">1</span>
                                        </div>
                                    </div>
                                </form>
                        <?php }
                        } ?>
                        <script>
                            const cards = document.querySelectorAll('.card');
                            const likeButton = document.getElementById('like-button');
                            const dislikeButton = document.getElementById('dislike-button');
                            const user_id = document.getElementById('user_id');
                            let currentCardIndex = cards.length - 1; ///
                            function CountLike(user) {

                                var count = 1;
                                let xhr = new XMLHttpRequest();
                                xhr.open("POST", "Action/like.php", true);
                                xhr.onload = () => {
                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                        if (xhr.status === 200) {
                                            let data = xhr.response;
                                        }
                                    }
                                }
                                //var data = `{"like": "${count}", "user_id": "${user_id2}"}`;
                                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xhr.send("like=" + count + "&user_id=" + user);
                            }

                            function CountDisLike(user) {

                                var count = 1;
                                let xhr = new XMLHttpRequest();
                                xhr.open("POST", "Action/like.php", true);
                                xhr.onload = () => {
                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                        if (xhr.status === 200) {
                                            let data = xhr.response;
                                        }
                                    }
                                }
                                //var data = `{"like": "${count}", "user_id": "${user_id2}"}`;
                                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xhr.send("dislike=" + count + "&user_id=" + user);
                            }

                            function handleSwipe(like) {
                                const card = cards[currentCardIndex];
                                const direction = like ? 1 : -1;
                                const cardWidth = card.offsetWidth;

                                card.style.transform = `translateX(${direction * cardWidth}px) rotate(${direction * 30}deg)`;
                                setTimeout(() => {
                                    card.style.display = 'none';
                                    card.style.transform = 'translate(0) rotate(0)';
                                    setTimeout(() => {
                                        card.style.transform = 'none';
                                        card.style.transition = 'transform 0.3s ease, opacity 0.3s ease';
                                        if (currentCardIndex <= cards.length - 1) {
                                            cards[currentCardIndex].style.transform = 'translate(0)'; // Hiển thị card tiếp theo
                                            currentCardIndex--;

                                        }

                                    }, 100);
                                }, 300);

                            }
                        </script>
                    </div>

                </div>
            </div>
        </div>
</body>

</html>