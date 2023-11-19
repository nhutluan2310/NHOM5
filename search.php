<?php session_start();
require 'Config/config.php';
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './Layout/headerPage.php'; ?>

    <title>Lynder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <link rel="stylesheet" href="./Assets/css/style_home.css">
    <link rel="stylesheet" href="./Assets/css/search.css">
    <style>
        img {
            max-width: 100%;
            height: auto;
            vertical-align: top;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .h5,
        h5 {
            font-size: 1.25rem;
        }

        a {
            text-decoration: none;
        }

        .team-style07 {
            background: #fff;
            text-align: center;
            padding: 30px;
            box-shadow: 0px 10px 30px 0px rgb(26 29 72 / 7%);
            border-radius: 15px;
            transition: all .3s ease-in-out;
        }

        .team-style07 {
            background: #fff;
            text-align: center;
            padding: 30px;
            box-shadow: 0px 10px 30px 0px rgba(26, 29, 72, 0.07);
            border-radius: 15px;
            transition: all .3s ease-in-out
        }

        .team-style07:hover {
            background: #292dc2
        }

        .team-style07:hover h3 a,
        .team-style07:hover p {
            color: #fff
        }

        .team-style07 .team-thumb {
            position: relative
        }

        .team-style07 .team-thumb .team-social {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0
        }

        .team-style07:hover .team-thumb .team-social .styled-icons li:nth-child(1) {
            left: 40px;
            position: absolute;
            bottom: 0;
            z-index: 10;
            opacity: 1;
            transition: all .4s ease-in-out 0s
        }

        .team-style07 .team-thumb .team-social .styled-icons li:nth-child(1) {
            position: absolute;
            opacity: 0;
            left: -10px;
            bottom: -20px;
            z-index: 10;
            transition: all .3s ease-in-out
        }

        .team-style07 .team-thumb .team-social .styled-icons li:nth-child(2) {
            position: absolute;
            opacity: 0;
            left: 0;
            right: 0;
            bottom: -40px;
            transition: all .3s ease-in-out
        }

        .team-style07 .team-thumb .team-social .styled-icons li:nth-child(3) {
            opacity: 0;
            position: absolute;
            right: 0;
            bottom: -20px;
            transition: all .3s ease-in-out
        }

        .team-style07:hover .team-thumb .team-social .styled-icons li:nth-child(3) {
            position: absolute;
            right: 40px;
            bottom: 0;
            opacity: 1;
            transition: all .4s ease-in-out 0s
        }

        .team-style07:hover .team-thumb .team-social .styled-icons li:nth-child(2) {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -20px;
            opacity: 1;
            transition: all .5s ease-in-out 0s
        }

        .team-style07 .team-thumb .team-social .styled-icons li a {
            background: #3457f1;
            color: #fff;
            height: 40px;
            width: 40px;
            line-height: 40px;
            border: none;
            font-size: 16px;
            transition: all .3s ease-in-out
        }

        .mb-1-9,
        .my-1-9 {
            margin-bottom: 1.9rem;
        }

        .styled-icons a {
            border: 2px solid transparent;
            color: #333;
            display: inline-block;
            font-size: 16px;
            height: 36px;
            line-height: 2;
            margin-right: 4px;
            position: relative;
            text-align: center;
            text-decoration: none;
            width: 36px;
            transition: all .2s ease;
            border-radius: 50%
        }

        .styled-icons li {
            display: inline-block;
            margin-bottom: 5px;
            margin-top: 0;
            padding-left: 0 !important
        }

        .card {
            position: relative;
            width: 100%;
            min-width: 41em;
            max-width: 90em;
            height: 100%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            align-items: start;
            justify-content: start;
            margin: 20px 5px;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        #buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 16px;
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

        .overlay .button {
            padding: 8px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .overlay #like-button {
            background-color: #4CAF50;
            color: #fff;
        }

        .overlay #dislike-button {
            color: #fff;
        }

        .circle {
            width: 60px;
            height: 60px;
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
            height: 100%;
            border-top-right-radius: 10px;
        }

        .menu {
            width: 100%;
            min-width: 96.5em;
        }

        .sidebar1 {
            min-height: 50em;
        }

        .container-fluid {
            min-height: 50em;
        }

        .head {
            color: #ff058f;
            font-size: 40px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
        }

        .form-inline label {
            display: flex;
            align-items: start;
            justify-content: start;
            margin-bottom: 10px;
        }

        .container {
            width: 100%;
            min-width: 100em;
            margin-left: 30px;
            margin-bottom: 30px;
        }

        .col-md-6 {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="position:fixed">
                        <li style="width:130%;"> <a href="<?php echo SITEURL . "home.php"; ?>" class="d-flex align-items-center justify-content-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="d-none d-sm-inline" id="logo" style="font-weight:bold;">Lynder</span>
                            </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                        <li class="mt-4 nav-item "> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "home.php"; ?>"> <i class="fas fa-home"></i> <span>Home</span> </a> </li>
                        <li class="nav-item active"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "search.php"; ?>"> <i class="fas fa-search"></i> <span>Find Matches</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" data-event-callback="lwPrepareUploadPlugIn" href="<?php echo SITEURL . "profile.php?user_id=" . $_SESSION['user_id']; ?>"> <i class="fas fa-user"></i> <span>My Profile</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" data-event-callback="lwPrepareUploadPlugIn" href="<?php echo SITEURL . "photo.php"; ?>"> <i class="far fa-images"></i> <span>My Photos</span> </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "like.php"; ?>"> <i class="fas fa-fw fa-heart text-success"></i> <span>My Likes</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "block.php"; ?>"> <i class="fas fa-ban"></i> <span>Blocked Users</span> </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                    </ul>
                </div>
            </div>
            <div class="content col py-3">
                <?php include_once './Layout/menu.php' ?>
                <div class="clearfix"></div>
                <div class="content_body align-items-md-start">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card mb-3 col-lg-12 col-md-6 col-sm-4" style="background-color:white;">
                            <div class="card-header " style="background-color:white; border:none; color:#ff058f;"><span class="float-right">
                                    <h4><i class="fas fa-search"></i> Find your partner</h4>
                            </div>
                            <div class="card-body col-md-12 col-sm-6">

                                <form class="form-inline col-md-12 mr-auto d-flex justify-content-start align-items-start form-group text-left lw-ajax-form lw-action-with-url" method="get" data-show-processing="true" novalidate="novalidate">
                                    <!-- Add Name -->
                                    <div class="lw-distance-location-container me-3 lw-basic-filter-field">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" name="fullname" id="name" x-model="name" placeholder="Name">
                                    </div>
                                    <!-- Add Name -->

                                    <!-- Looking For -->
                                    <div class="lw-looking-for-container me-3 lw-basic-filter-field">
                                        <label for="lookingFor">Looking For</label>
                                        <select name="looking_for" x-model="looking_for" style="width:90px;" class="form-control custom-select" id="lookingFor">
                                            <option value="all">All</option>
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                            <option value="2">Secret</option>
                                        </select>
                                    </div>
                                    <!-- /Looking For -->
                                    <!-- Age between -->
                                    <div class="lw-age-between-container me-3 lw-basic-filter-field">
                                        <label for="minAge">Age Between</label>
                                        <select name="min_age" x-model="min_age" style="width:65px;" class="form-control me-3 custom-select" id="minAge">
                                            <option value="18" selected="">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                            <option value="60">60</option>
                                            <option value="61">61</option>
                                            <option value="62">62</option>
                                            <option value="63">63</option>
                                            <option value="64">64</option>
                                            <option value="65">65</option>
                                            <option value="66">66</option>
                                            <option value="67">67</option>
                                            <option value="68">68</option>
                                            <option value="69">69</option>
                                            <option value="70">70</option>
                                        </select>
                                        <select name="max_age" x-model="max_age" style="width:65px;" class="form-control me-3 custom-select" id="maxAge">
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50" selected="">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                            <option value="60">60</option>
                                            <option value="61">61</option>
                                            <option value="62">62</option>
                                            <option value="63">63</option>
                                            <option value="64">64</option>
                                            <option value="65">65</option>
                                            <option value="66">66</option>
                                            <option value="67">67</option>
                                            <option value="68">68</option>
                                            <option value="69">69</option>
                                            <option value="70">70</option>
                                        </select>
                                    </div>
                                    <!-- /Age between -->
                                    <!-- Distance from my location -->
                                    <div class="lw-distance-location-container me-3 lw-basic-filter-field">
                                        <label class="justify-content-start" for="distance">Location</label>
                                        <input type="text" min="1" class="form-control" name="location" placeholder="Anywhere">
                                    </div>
                                    <!-- /Distance from my location -->
                                    <div class="col-12 mb-2 p-0">
                                        <!-- User Type -->
                                        <div class="lw-looking-for-container mb-5 lw-basic-filter-field">

                                        </div>
                                        <!-- /User Type -->
                                        <div class="lw-basic-filter-footer-container d-flex d-inline lw-basic-filter-field">
                                            <button type="submit" name="submit" class="btn btn-primary me-3 btn-block-on-mobile">Search</button>
                                            <button type="button" x-show="!showAdvanceFilter" onclick="showAdvanceFilter()" class="btn btn-secondary btn-block-on-mobile" style="display: block;" id="lwShowAdvanceFilterLink"><i class="fas fa-filter"></i> Show Advanced Filter</button>
                                            <button type="button" x-show="showAdvanceFilter" onclick="closeAdvanceFilter()" class="btn btn-secondary btn-block-on-mobile" style="display: none;" id="lwHideAdvanceFilterLink"><i class="fas fa-filter"></i> Hide Advanced Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="lw-advance-filter-container lw-expand-filter" style="display:none" id="mydropdown">
                                <div class="lw-filter-message text-secondary">
                                </div>
                                <!-- Tabs for advance filter -->
                                <div class="lw-advance-filter-tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <!-- Personal Tab -->
                                        <li class="nav-item ">
                                            <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">
                                                <i class="fas fa-info-circle"></i> Personal </a>
                                        </li>
                                        <!-- /Personal Tab -->
                                        <li class="nav-item ">
                                            <a class="nav-link " data-toggle="tab" href="#tabContainer-looks" role="tab" aria-controls="looks" aria-selected="false">
                                                <i class="far fa-smile text-danger"></i> Looks </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tabContainer-personality" role="tab" aria-controls="personality" aria-selected="false">
                                                <i class="fas fa-child text-success"></i> Personality </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tabContainer-lifestyle" role="tab" aria-controls="lifestyle" aria-selected="false">
                                                <i class="fas fa-umbrella-beach text-warning"></i> Lifestyle </a>
                                        </li>
                                    </ul>
                                    <form class="lw-ajax-form lw-action-with-url" data-show-processing="true" action="" method="get" novalidate="novalidate">
                                        <div class="tab-content" id="lwAdvanceFilterTabContent">
                                            <input type="hidden" name="is_advance_filter" value="yes">
                                            <!-- Hidden field of basic filter -->
                                            <input type="hidden" name="name" x-model="name">
                                            <input type="hidden" name="username" x-model="username">
                                            <input type="hidden" name="looking_for" x-model="looking_for" value="all">
                                            <input type="hidden" name="user_type" x-model="user_type" value="0">
                                            <input type="hidden" name="min_age" x-model="min_age" value="18">
                                            <input type="hidden" name="max_age" x-model="max_age" value="50">
                                            <input type="hidden" name="distance" x-model="distance" value="1">
                                            <!-- /Hidden field of basic filter -->

                                            <!-- Personal Tab Content -->
                                            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">

                                                <!-- Relationship Status -->
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong> Relationship Status </strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="relationship_status[1]" name="relationship_status[1]" value="1">
                                                            <label class="custom-control-label" for="relationship_status[1]">Single</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="relationship_status[2]" name="relationship_status[2]" value="2">
                                                            <label class="custom-control-label" for="relationship_status[2]">Married</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="relationship_status[3]" name="relationship_status[3]" value="3">
                                                            <label class="custom-control-label" for="relationship_status[3]">Divorced</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="relationship_status[4]" name="relationship_status[4]" value="4">
                                                            <label class="custom-control-label" for="relationship_status[4]">Widow</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Relationship Status -->

                                                <!-- Work Status -->
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong> Work Status </strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="work_status[1]" name="work_status[1]" value="1">
                                                            <label class="custom-control-label" for="work_status[1]">Studying</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="work_status[2]" name="work_status[2]" value="2">
                                                            <label class="custom-control-label" for="work_status[2]">Working</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="work_status[3]" name="work_status[3]" value="3">
                                                            <label class="custom-control-label" for="work_status[3]">Looking for work</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="work_status[4]" name="work_status[4]" value="4">
                                                            <label class="custom-control-label" for="work_status[4]">Retired</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="work_status[5]" name="work_status[5]" value="5">
                                                            <label class="custom-control-label" for="work_status[5]">Self-Employed</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="work_status[6]" name="work_status[6]" value="6">
                                                            <label class="custom-control-label" for="work_status[6]">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Work Status -->
                                            </div>
                                            <!-- /Personal Tab Content -->
                                            <!-- Other Tab Content -->
                                            <div class="tab-pane fade" id="tabContainer-looks" role="tabpanel" aria-labelledby="looks-tab">
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Height</strong>
                                                </div>
                                                <div class="lw-specification-select-box d-flex d-inline mb-3">
                                                    <select name="min_height" class="form-control custom-select me-4 " style="width:25em;" id="min_height">
                                                        <option value="" selected="">Select Min Height</option>
                                                        <option value="139">139 cm</option>
                                                        <option value="140">140 cm (4' 7″)</option>
                                                        <option value="141">141 cm</option>
                                                        <option value="142">142 cm (4' 8″)</option>
                                                        <option value="143">143 cm</option>
                                                        <option value="144">144 cm</option>
                                                        <option value="145">145 cm (4' 9″)</option>
                                                        <option value="146">146 cm</option>
                                                        <option value="147">147 cm (4' 10″)</option>
                                                        <option value="148">148 cm</option>
                                                        <option value="149">149 cm</option>
                                                        <option value="150">150 cm (4' 11″)</option>
                                                        <option value="151">151 cm</option>
                                                        <option value="152">152 cm (5' 0″)</option>
                                                        <option value="153">153 cm</option>
                                                        <option value="154">154 cm</option>
                                                        <option value="155">155 cm (5' 1″)</option>
                                                        <option value="156">156 cm</option>
                                                        <option value="157">157 cm (5' 2″)</option>
                                                        <option value="158">158 cm</option>
                                                        <option value="159">159 cm</option>
                                                        <option value="160">160 cm (5' 3″)</option>
                                                        <option value="161">161 cm</option>
                                                        <option value="162">162 cm</option>
                                                        <option value="163">163 cm (5' 4″)</option>
                                                        <option value="164">164 cm</option>
                                                        <option value="165">165 cm (5' 5″)</option>
                                                        <option value="166">166 cm</option>
                                                        <option value="167">167 cm</option>
                                                        <option value="168">168 cm (5' 6″)</option>
                                                        <option value="169">169 cm</option>
                                                        <option value="170">170 cm (5' 7″)</option>
                                                        <option value="171">171 cm</option>
                                                        <option value="172">172 cm</option>
                                                        <option value="173">173 cm (5' 8″)</option>
                                                        <option value="174">174 cm</option>
                                                        <option value="175">175 cm (5' 9″)</option>
                                                        <option value="176">176 cm</option>
                                                        <option value="177">177 cm</option>
                                                        <option value="178">178 cm (5' 10″)</option>
                                                        <option value="179">179 cm</option>
                                                        <option value="180">180 cm (5' 11″)</option>
                                                        <option value="181">181 cm</option>
                                                        <option value="182">182 cm</option>
                                                        <option value="183">183 cm (6' 0″)</option>
                                                        <option value="184">184 cm</option>
                                                        <option value="185">185 cm (6' 1″)</option>
                                                        <option value="186">186 cm</option>
                                                        <option value="187">187 cm</option>
                                                        <option value="188">188 cm (6' 2″)</option>
                                                        <option value="189">189 cm</option>
                                                        <option value="190">190 cm</option>
                                                        <option value="191">191 cm (6' 3″)</option>
                                                        <option value="192">192 cm</option>
                                                        <option value="193">193 cm (6' 4″)</option>
                                                        <option value="194">194 cm</option>
                                                        <option value="195">195 cm</option>
                                                        <option value="196">196 cm (6' 5″)</option>
                                                        <option value="197">197 cm</option>
                                                        <option value="198">198 cm (6' 6″)</option>
                                                        <option value="199">199 cm</option>
                                                        <option value="200">200 cm</option>
                                                        <option value="201">201 cm (6' 7″)</option>
                                                        <option value="202">202 cm</option>
                                                        <option value="203">203 cm (6' 8″)</option>
                                                        <option value="204">204 cm</option>
                                                        <option value="205">205 cm</option>
                                                        <option value="206">206 cm (6' 9″)</option>
                                                        <option value="207">207 cm</option>
                                                        <option value="208">208 cm (6' 10″)</option>
                                                        <option value="209">209 cm</option>
                                                        <option value="210">210 cm</option>
                                                        <option value="211">211 cm (6' 11″)</option>
                                                        <option value="212">212 cm</option>
                                                        <option value="213">213 cm (7' 0″)</option>
                                                        <option value="214">214 cm</option>
                                                        <option value="215">215 cm</option>
                                                        <option value="216">216 cm (7' 1″)</option>
                                                        <option value="217">217 cm</option>
                                                        <option value="218">218 cm</option>
                                                        <option value="220">220 cm (7' 3″)</option>
                                                    </select>
                                                    <select name="max_height" class="form-control custom-select" style="width:25em;" id="max_height">
                                                        <option value="" selected="">Select Max Height</option>
                                                        <option value="139">139 cm</option>
                                                        <option value="140">140 cm (4' 7″)</option>
                                                        <option value="141">141 cm</option>
                                                        <option value="142">142 cm (4' 8″)</option>
                                                        <option value="143">143 cm</option>
                                                        <option value="144">144 cm</option>
                                                        <option value="145">145 cm (4' 9″)</option>
                                                        <option value="146">146 cm</option>
                                                        <option value="147">147 cm (4' 10″)</option>
                                                        <option value="148">148 cm</option>
                                                        <option value="149">149 cm</option>
                                                        <option value="150">150 cm (4' 11″)</option>
                                                        <option value="151">151 cm</option>
                                                        <option value="152">152 cm (5' 0″)</option>
                                                        <option value="153">153 cm</option>
                                                        <option value="154">154 cm</option>
                                                        <option value="155">155 cm (5' 1″)</option>
                                                        <option value="156">156 cm</option>
                                                        <option value="157">157 cm (5' 2″)</option>
                                                        <option value="158">158 cm</option>
                                                        <option value="159">159 cm</option>
                                                        <option value="160">160 cm (5' 3″)</option>
                                                        <option value="161">161 cm</option>
                                                        <option value="162">162 cm</option>
                                                        <option value="163">163 cm (5' 4″)</option>
                                                        <option value="164">164 cm</option>
                                                        <option value="165">165 cm (5' 5″)</option>
                                                        <option value="166">166 cm</option>
                                                        <option value="167">167 cm</option>
                                                        <option value="168">168 cm (5' 6″)</option>
                                                        <option value="169">169 cm</option>
                                                        <option value="170">170 cm (5' 7″)</option>
                                                        <option value="171">171 cm</option>
                                                        <option value="172">172 cm</option>
                                                        <option value="173">173 cm (5' 8″)</option>
                                                        <option value="174">174 cm</option>
                                                        <option value="175">175 cm (5' 9″)</option>
                                                        <option value="176">176 cm</option>
                                                        <option value="177">177 cm</option>
                                                        <option value="178">178 cm (5' 10″)</option>
                                                        <option value="179">179 cm</option>
                                                        <option value="180">180 cm (5' 11″)</option>
                                                        <option value="181">181 cm</option>
                                                        <option value="182">182 cm</option>
                                                        <option value="183">183 cm (6' 0″)</option>
                                                        <option value="184">184 cm</option>
                                                        <option value="185">185 cm (6' 1″)</option>
                                                        <option value="186">186 cm</option>
                                                        <option value="187">187 cm</option>
                                                        <option value="188">188 cm (6' 2″)</option>
                                                        <option value="189">189 cm</option>
                                                        <option value="190">190 cm</option>
                                                        <option value="191">191 cm (6' 3″)</option>
                                                        <option value="192">192 cm</option>
                                                        <option value="193">193 cm (6' 4″)</option>
                                                        <option value="194">194 cm</option>
                                                        <option value="195">195 cm</option>
                                                        <option value="196">196 cm (6' 5″)</option>
                                                        <option value="197">197 cm</option>
                                                        <option value="198">198 cm (6' 6″)</option>
                                                        <option value="199">199 cm</option>
                                                        <option value="200">200 cm</option>
                                                        <option value="201">201 cm (6' 7″)</option>
                                                        <option value="202">202 cm</option>
                                                        <option value="203">203 cm (6' 8″)</option>
                                                        <option value="204">204 cm</option>
                                                        <option value="205">205 cm</option>
                                                        <option value="206">206 cm (6' 9″)</option>
                                                        <option value="207">207 cm</option>
                                                        <option value="208">208 cm (6' 10″)</option>
                                                        <option value="209">209 cm</option>
                                                        <option value="210">210 cm</option>
                                                        <option value="211">211 cm (6' 11″)</option>
                                                        <option value="212">212 cm</option>
                                                        <option value="213">213 cm (7' 0″)</option>
                                                        <option value="214">214 cm</option>
                                                        <option value="215">215 cm</option>
                                                        <option value="216">216 cm (7' 1″)</option>
                                                        <option value="217">217 cm</option>
                                                        <option value="218">218 cm</option>
                                                        <option value="220">220 cm (7' 3″)</option>
                                                    </select>
                                                </div>
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Ethnicity</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ethnicity[white]" name="ethnicity[]">
                                                            <label class="custom-control-label" for="ethnicity[white]">Kinh</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ethnicity[black]" name="ethnicity[]">
                                                            <label class="custom-control-label" for="ethnicity[black]">Tày</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ethnicity[middle_eastern]" name="ethnicity[]">
                                                            <label class="custom-control-label" for="ethnicity[middle_eastern]">Mường</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ethnicity[north_african]" name="ethnicity[]">
                                                            <label class="custom-control-label" for="ethnicity[north_african]">Chăm</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ethnicity[latin_american]" name="ethnicity[]">
                                                            <label class="custom-control-label" for="ethnicity[latin_american]">Rắc-Lây</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ethnicity[mixed]" name="ethnicity[]">
                                                            <label class="custom-control-label" for="ethnicity[mixed]">Khác</label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Body Type</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[slim]" name="body_type[slim]">
                                                            <label class="custom-control-label" for="body_type[slim]">Slim</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[sporty]" name="body_type[sporty]">
                                                            <label class="custom-control-label" for="body_type[sporty]">Sporty</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[curvy]" name="body_type[curvy]">
                                                            <label class="custom-control-label" for="body_type[curvy]">Curvy</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[round]" name="body_type[round]">
                                                            <label class="custom-control-label" for="body_type[round]">Round</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[supermodel]" name="body_type[supermodel]">
                                                            <label class="custom-control-label" for="body_type[supermodel]">Supermodel</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[average]" name="body_type[average]">
                                                            <label class="custom-control-label" for="body_type[average]">Average</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="body_type[other]" name="body_type[other]">
                                                            <label class="custom-control-label" for="body_type[other]">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Hair Color</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4 ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[brown]" name="hair_color[brown]">
                                                            <label class="custom-control-label" for="hair_color[brown]">Brown</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[black]" name="hair_color[black]">
                                                            <label class="custom-control-label" for="hair_color[black]">Black</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[white]" name="hair_color[white]">
                                                            <label class="custom-control-label" for="hair_color[white]">White</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[sandy]" name="hair_color[sandy]">
                                                            <label class="custom-control-label" for="hair_color[sandy]">Sandy</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[gray_or_partially_gray]" name="hair_color[gray_or_partially_gray]">
                                                            <label class="custom-control-label" for="hair_color[gray_or_partially_gray]">Gray or Partially Gray</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[red/auburn]" name="hair_color[red/auburn]">
                                                            <label class="custom-control-label" for="hair_color[red/auburn]">Red/Auburn</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[blond/strawberry]" name="hair_color[blond/strawberry]">
                                                            <label class="custom-control-label" for="hair_color[blond/strawberry]">Blond/Strawberry</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[blue]" name="hair_color[blue]">
                                                            <label class="custom-control-label" for="hair_color[blue]">Blue</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[green]" name="hair_color[green]">
                                                            <label class="custom-control-label" for="hair_color[green]">Green</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[orange]" name="hair_color[orange]">
                                                            <label class="custom-control-label" for="hair_color[orange]">Orange</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[pink]" name="hair_color[pink]">
                                                            <label class="custom-control-label" for="hair_color[pink]">Pink</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[purple]" name="hair_color[purple]">
                                                            <label class="custom-control-label" for="hair_color[purple]">Purple</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[partly_or_completely_bald]" name="hair_color[partly_or_completely_bald]">
                                                            <label class="custom-control-label" for="hair_color[partly_or_completely_bald]">Partly or Completely Bald</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="hair_color[other]" name="hair_color[other]">
                                                            <label class="custom-control-label" for="hair_color[other]">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tabContainer-personality" role="tabpanel" aria-labelledby="personality-tab">
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Nature</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4 ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[accommodating]" name="nature[accommodating]">
                                                            <label class="custom-control-label" for="nature[accommodating]">Accommodating</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[adventurous]" name="nature[adventurous]">
                                                            <label class="custom-control-label" for="nature[adventurous]">Adventurous</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[calm]" name="nature[calm]">
                                                            <label class="custom-control-label" for="nature[calm]">Calm</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[careless]" name="nature[careless]">
                                                            <label class="custom-control-label" for="nature[careless]">Careless</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[cheerful]" name="nature[cheerful]">
                                                            <label class="custom-control-label" for="nature[cheerful]">Cheerful</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[demanding]" name="nature[demanding]">
                                                            <label class="custom-control-label" for="nature[demanding]">Demanding</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[extroverted]" name="nature[extroverted]">
                                                            <label class="custom-control-label" for="nature[extroverted]">Extroverted</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[honest]" name="nature[honest]">
                                                            <label class="custom-control-label" for="nature[honest]">Honest</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[generous]" name="nature[generous]">
                                                            <label class="custom-control-label" for="nature[generous]">Generous</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[humorous]" name="nature[humorous]">
                                                            <label class="custom-control-label" for="nature[humorous]">Humorous</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[introverted]" name="nature[introverted]">
                                                            <label class="custom-control-label" for="nature[introverted]">Introverted</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[liberal]" name="nature[liberal]">
                                                            <label class="custom-control-label" for="nature[liberal]">Liberal</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[lively]" name="nature[lively]">
                                                            <label class="custom-control-label" for="nature[lively]">Lively</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[loner]" name="nature[loner]">
                                                            <label class="custom-control-label" for="nature[loner]">Loner</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[nervous]" name="nature[nervous]">
                                                            <label class="custom-control-label" for="nature[nervous]">Nervous</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[possessive]" name="nature[possessive]">
                                                            <label class="custom-control-label" for="nature[possessive]">Possessive</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[quiet]" name="nature[quiet]">
                                                            <label class="custom-control-label" for="nature[quiet]">Quiet</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[reserved]" name="nature[reserved]">
                                                            <label class="custom-control-label" for="nature[reserved]">Reserved</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[sensitive]" name="nature[sensitive]">
                                                            <label class="custom-control-label" for="nature[sensitive]">Sensitive</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[shy]" name="nature[shy]">
                                                            <label class="custom-control-label" for="nature[shy]">Shy</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[social]" name="nature[social]">
                                                            <label class="custom-control-label" for="nature[social]">Social</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[spontaneous]" name="nature[spontaneous]">
                                                            <label class="custom-control-label" for="nature[spontaneous]">Spontaneous</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[stubborn]" name="nature[stubborn]">
                                                            <label class="custom-control-label" for="nature[stubborn]">Stubborn</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[suspicious]" name="nature[suspicious]">
                                                            <label class="custom-control-label" for="nature[suspicious]">Suspicious</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[thoughtful]" name="nature[thoughtful]">
                                                            <label class="custom-control-label" for="nature[thoughtful]">Thoughtful</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[proud]" name="nature[proud]">
                                                            <label class="custom-control-label" for="nature[proud]">Proud</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[considerate]" name="nature[considerate]">
                                                            <label class="custom-control-label" for="nature[considerate]">Considerate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[friendly]" name="nature[friendly]">
                                                            <label class="custom-control-label" for="nature[friendly]">Friendly</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[polite]" name="nature[polite]">
                                                            <label class="custom-control-label" for="nature[polite]">Polite</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[reliable]" name="nature[reliable]">
                                                            <label class="custom-control-label" for="nature[reliable]">Reliable</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[careful]" name="nature[careful]">
                                                            <label class="custom-control-label" for="nature[careful]">Careful</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[helpful]" name="nature[helpful]">
                                                            <label class="custom-control-label" for="nature[helpful]">Helpful</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[patient]" name="nature[patient]">
                                                            <label class="custom-control-label" for="nature[patient]">Patient</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="nature[optimistic]" name="nature[optimistic]">
                                                            <label class="custom-control-label" for="nature[optimistic]">Optimistic</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="tabContainer-lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Religion</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[muslim]" name="religion[muslim]">
                                                            <label class="custom-control-label" for="religion[muslim]">Muslim</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[atheist]" name="religion[atheist]">
                                                            <label class="custom-control-label" for="religion[atheist]">Atheist</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[buddhist]" name="religion[buddhist]">
                                                            <label class="custom-control-label" for="religion[buddhist]">Buddhist</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[catholic]" name="religion[catholic]">
                                                            <label class="custom-control-label" for="religion[catholic]">Catholic</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[christian]" name="religion[christian]">
                                                            <label class="custom-control-label" for="religion[christian]">Christian</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[hindu]" name="religion[hindu]">
                                                            <label class="custom-control-label" for="religion[hindu]">Hindu</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[jewish]" name="religion[jewish]">
                                                            <label class="custom-control-label" for="religion[jewish]">Jewish</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[agnostic]" name="religion[agnostic]">
                                                            <label class="custom-control-label" for="religion[agnostic]">Agnostic</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[sikh]" name="religion[sikh]">
                                                            <label class="custom-control-label" for="religion[sikh]">Sikh</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="religion[other]" name="religion[other]">
                                                            <label class="custom-control-label" for="religion[other]">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Smoke</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="smoke[never]" name="smoke[never]">
                                                            <label class="custom-control-label" for="smoke[never]">Never</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="smoke[i_some_sometimes]" name="smoke[i_some_sometimes]">
                                                            <label class="custom-control-label" for="smoke[i_some_sometimes]">I Smoke Sometimes</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="smoke[chain_smoker]" name="smoke[chain_smoker]">
                                                            <label class="custom-control-label" for="smoke[chain_smoker]">Chain Smoker</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lw-specification-sub-heading mb-1">
                                                    <strong>Drink</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="drink[never]" name="drink[never]">
                                                            <label class="custom-control-label" for="drink[never]">Never</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="drink[i_drink_sometimes]" name="drink[i_drink_sometimes]">
                                                            <label class="custom-control-label" for="drink[i_drink_sometimes]">I Drink Sometimes</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Other Tab Content -->
                                        </div>
                                        <div class="lw-search-button-container mb-3 mt-3">
                                            <button type="submit" name="submit1" class="btn btn-primary btn-block-on-mobile">Search with Advanced Filters</button>
                                        </div>
                                    </form>

                                    <div class="clearfix"></div>
                                </div>
                                <!-- /Tabs for advance filter -->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="container mt-100 mt-60">
                            <?php
                            if (isset($_GET['submit'])) {
                                $fullname = $_GET['fullname'];
                                $looking_for = $_GET['looking_for'];
                                $min_age = $_GET['min_age'];
                                $max_age = $_GET['max_age'];
                                $location_name = $_GET['location'];
                                $time = date("Y", time());
                                $min = $time -  $min_age;
                                $max = $time - $max_age;
                                if ($looking_for == "all") {
                                    $query = "SELECT * FROM users u JOIN location l ON u.location_id = l.location_id Where fullname like '%$fullname%' OR (('$time' - YEAR(dob)) >= '$min_age'  and ('$time' - YEAR(dob)) <='$max_age') OR l.location_name = '$location_name'";
                                    $result = mysqli_query($conn, $query);
                                } else {
                                    $query = "SELECT * FROM users u JOIN location l ON u.location_id = l.location_id Where fullname like '%$fullname%' and gender = '$looking_for' and (('$time' - YEAR(dob)) >= '$min_age'  and ('$time' - YEAR(dob)) <='$max_age') and l.location_name = '$location_name'";
                                    $result = mysqli_query($conn, $query);
                                }
                                $numRow = mysqli_num_rows($result);
                                if ($numRow == 0) {
                            ?>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <div class="section-title">
                                                <h4 class="title mb-4">Sorry</h4>
                                                <p class="text-muted para-desc mx-auto mb-0">0 matches found</p>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <?php } else if ($numRow <> 0) {
                                    echo '<div class="row text-center md-3 me-3 mb-3 card1">';
                                    $user_id =  $_SESSION['user_id'];
                                    while ($rows = mysqli_fetch_array($result)) { 
                                        $user_id1= $rows['user_id']?>
                                        <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            <div class="team-style07">
                                                <div class="team-thumb mb-1-9">
                                                    <div class="thumb"><img src="<?php if ($rows['image'] == null) echo SITEURL . "Assets/images/d-avatar.jpg";
                                                                                    else echo SITEURL . "Assets/images/profile/" . $rows['image']; ?>" class="rounded-circle" alt="..."></div>
                                                    <div class="team-social">
                                                    </div>
                                                </div>
                                                <h3 class="h5 mb-1"><a href="<?php echo SITEURL . "profile.php?user_id=" . $user_id1; ?>"><?php echo $rows['fullname'] ?></a></h3>
                                                <p class="mb-0"><?php $timestamp = strtotime($rows['dob']);
                                                                $now = date("Y", time());
                                                                // Convert the timestamp to a formatted date
                                                                $age = ($now - date("Y", $timestamp));
                                                                echo $age; ?>, <?php if ($rows['gender'] == 0) echo "Male";
                                                                                                    else if ($rows['gender'] == 1) echo "Female";
                                                                                                    else echo "Sercet"; ?></p>
                                            </div>
                                        </div>
                                <?php }
                                }
                                ?>
                            <?php } ?>
                            <?php
                            if (isset($_GET['submit1'])) {
                                $height = $_GET['height'];
                                $ethnicity = $_GET['ethnicity'];
                                $body_type = $_GET['body_type'];
                                $hair_color = $_GET['hair_color'];
                                $relationship_status = $_GET['relationship_status'];
                                $religion = $_GET['religion'];
                                $drink = $_GET['drink'];
                                $character = $_GET['nature'];
                                $smoke = $_GET['smoke'];
                                $work_status = $_GET['work_status'];

                                $query = "SELECT * FROM users u JOIN user_info ui ON u.user_info_id = ui.user_info_id Where height = '$height' and ethnicity = '$ethnicity' and body_type = '$body_type' and hair_color = '$hair_color' and relationship = '$relationship_status' and region = '$religion' and
                            drink = '$drink' and character_status = '$character' and smoke = '$smoke' and working_status = '$work_status'";
                                $result = mysqli_query($conn, $query);
                                $numRow = mysqli_num_rows($result);
                                if ($numRow == 0) {
                            ?>
                                    <div class="row text-center">
                                        <div class="col-12 text-center">
                                            <div class="section-title">
                                                <h4 class="title mb-4">Sorry</h4>
                                                <p class="text-muted para-desc mx-auto mb-0">0 matches found</p>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <?php } else if ($numRow > 0) {
                                    echo '<div class="row text-center md-3 me-3 mb-3 card1">';
                                    $user_id =  $_SESSION['user_id'];
                                    while ($rows = mysqli_fetch_array($result)) {
                                        $user_id1= $rows['user_id']; ?>
                                        <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            <div class="team-style07">
                                                <div class="team-thumb mb-1-9">
                                                    <div class="thumb"><img src="<?php if ($rows['image'] == null) echo SITEURL . "Assets/images/d-avatar.jpg";
                                                                                    else echo SITEURL . "Assets/images/profile/" . $rows['image']; ?>" class="rounded-circle" alt="..."></div>
                                                    
                                                </div>
                                                <h3 class="h5 mb-1"><a href="<?php echo SITEURL . "profile.php?user_id=1" . $user_id; ?>">a<?php echo $rows['fullname'] ?></a></h3>
                                                <p class="mb-0"><?php $timestamp = strtotime($rows['dob']);
                                                                $now = date("Y", time());
                                                                // Convert the timestamp to a formatted date
                                                                $age = ($now - date("Y", $timestamp));
                                                                echo $age; ?>, <?php if ($rows['gender'] == 0) echo "Male";
                                                                                                    else if ($rows['gender'] == 1) echo "Female";
                                                                                                    else echo "Sercet"; ?></p>
                                            </div>
                                        </div>
                                <?php }
                                }
                                ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
        function showAdvanceFilter() {
            var a = document.getElementById("mydropdown");
            var b = document.getElementById("lwShowAdvanceFilterLink");
            var c = document.getElementById("lwHideAdvanceFilterLink");
            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "block";

        }

        function closeAdvanceFilter() {
            var a = document.getElementById("mydropdown");
            var b = document.getElementById("lwShowAdvanceFilterLink");
            var c = document.getElementById("lwHideAdvanceFilterLink");
            a.style.display = "none";
            b.style.display = "block";
            c.style.display = "none";
        }
        $(document).ready(function() {
            $(".nav-tabs a").click(function() {
                $(this).tab('show');
            });
        });
    </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php
    if (isset($_GET['submit1'])) {
        $height1 = $_GET['min_height'];
        $height2 = $_GET['max_height'];
        $ethnicity = $_GET['ethnicity'];
        $body_type = $_GET['body_type'];
        $hair_color = $_GET['hair_color'];
        $relationship_status = $_GET['relationship_status'];
        $religion = $_GET['religion'];
        $drink = $_GET['drink'];
        $character = $_GET['nature'];
        $smoke = $_GET['smoke'];
        $work_status = $_GET['work_status'];

        $query = "SELECT * FROM users u JOIN user_info ui ON u.user_info_id = ui.user_info_id Where (height >= '$height1' and height <= '$height2') and ethnicity = '$ethnicity' and body_type = '$body_type' and hair_color = '$hair_color' and relationship = '$relationship_status' and region = '$religion' and
        drink = '$drink' and character_status = '$character' and smoke = '$smoke' and working_status = '$work_status'";
        $result = mysqli_query($conn, $query);
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>