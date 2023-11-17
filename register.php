<?php ob_start();
session_start(); ?>
<?php require('Config/config.php'); ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title></title>
  <link rel="stylesheet" href="Assets/css/nicepage.css" media="screen">
  <script class="u-script" type="text/javascript" src="/Assets/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="/Assets/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Login">
  <meta property="og:type" content="website">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="Assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Font Awsome Icons-->
  <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/all.css">
  <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
  <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
  <link rel="stylesheet" href="https://site-Assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .u-section-1 {
      background-image: none;
    }

    .u-section-1 .u-sheet-1 {
      min-height: 100vh;
    }

    .u-section-1 .u-layout-wrap-1 {
      margin: 60px auto;
    }

    .u-section-1 .u-container-layout-1 {
      padding: 0;
    }

    .u-section-1 .u-layout-cell-2 {
      min-height: 554px;
      background-image: none;
    }

    .u-section-1 .u-container-layout-2 {
      padding: 0 0 30px;
    }

    .u-section-1 .u-form-1 {
      height: 401px;
      margin-top: 28px;
      margin-bottom: 0;
    }

    .u-section-1 .u-input-1 {
      background-image: none;
    }

    .u-section-1 .u-input-2 {
      background-image: none;
    }

    .u-section-1 .u-btn-1 {
      width: 100%;
      background-image: linear-gradient(to right, #ff665c, #ff3874);
      border-style: none;
      padding: 10px 31px 10px 29px;
    }

    .u-section-1 .u-btn-2 {
      align-self: center;
      border-style: none;
      margin: 13px auto 0;
      padding: 0;
    }

    .u-section-1 .u-btn-3 {
      border-style: none;
      margin: 20px auto 0;
      padding: 0;
    }

    @media (max-width: 1199px) {
      .u-section-1 .u-layout-wrap-1 {
        margin-right: initial;
        margin-left: initial;
      }

      .u-section-1 .u-image-1 {
        min-height: 457px;
      }

      .u-section-1 .u-layout-cell-2 {
        min-height: 457px;
      }
    }

    @media (max-width: 991px) {
      .u-section-1 .u-image-1 {
        min-height: 350px;
      }

      .u-section-1 .u-layout-cell-2 {
        min-height: 100px;
      }
    }

    @media (max-width: 767px) {
      .u-section-1 .u-layout-wrap-1 {
        margin-bottom: 41px;
        margin-top: 41px;
        margin-right: initial;
        margin-left: initial;
      }

      .u-section-1 .u-image-1 {
        min-height: 426px;
      }

      .u-section-1 .u-form-1 {
        margin-top: 0;
      }

      .u-section-1 .u-btn-2 {
        margin-top: 0;
      }
    }

    @media (max-width: 575px) {
      .u-section-1 .u-layout-wrap-1 {
        margin-bottom: 60px;
        margin-top: 60px;
        margin-right: initial;
        margin-left: initial;
      }

      .u-section-1 .u-image-1 {
        min-height: 268px;
      }
    }

    /*--------------------------------------------------------------
      # Preloader
      --------------------------------------------------------------*/
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      overflow: hidden;
      background: #1a1814;
    }

    #preloader:before {
      content: "";
      position: fixed;
      top: calc(50% - 30px);
      left: calc(50% - 30px);
      border: 6px solid #1a1814;
      border-top-color: #cda45e;
      border-bottom-color: #cda45e;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: animate-preloader 1s linear infinite;
    }

    @keyframes animate-preloader {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    /*--------------------------------------------------------------
      # Back to top button
      --------------------------------------------------------------*/
    .back-to-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 996;
      width: 44px;
      height: 44px;
      border-radius: 50px;
      transition: all 0.4s;
      border: 2px solid #cda45e;
    }

    .back-to-top i {
      font-size: 28px;
      color: #cda45e;
      line-height: 0;
    }

    .back-to-top:hover {
      background: #cda45e;
      color: #1a1814;
    }

    .back-to-top:hover i {
      color: #444444;
    }

    .back-to-top.active {
      visibility: visible;
      opacity: 1;
    }

    /*--------------------------------------------------------------
      # Disable aos animation delay on mobile devices
      --------------------------------------------------------------*/
    @media screen and (max-width: 768px) {
      [data-aos-delay] {
        transition-delay: 0 !important;
      }
    }

    /*--------------------------------------------------------------
      # Top Bar
      --------------------------------------------------------------*/
    #topbar {
      height: 40px;
      font-size: 14px;
      transition: all 0.5s;
      z-index: 996;
    }

    #topbar.topbar-scrolled {
      top: -40px;
    }

    #topbar .contact-info i {
      font-style: normal;
      color: #d9ba85;
    }

    #topbar .contact-info i span {
      padding-left: 5px;
      color: #fff;
    }

    #topbar .languages ul {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
      color: #cda45e;
    }

    #topbar .languages ul a {
      color: white;
    }

    #topbar .languages ul li+li {
      padding-left: 10px;
    }

    #topbar .languages ul li+li::before {
      display: inline-block;
      padding-right: 10px;
      color: rgba(255, 255, 255, 0.5);
      content: "/";
    }

    /*--------------------------------------------------------------
      # Header
      --------------------------------------------------------------*/
    #header {
      background: rgba(12, 11, 9, 0.6);
      border-bottom: 1px solid rgba(12, 11, 9, 0.6);
      transition: all 0.5s;
      z-index: 997;
      padding: 15px 0;
      top: 0;
    }

    #header.header-scrolled {
      top: 0;
      background: rgba(0, 0, 0, 0.85);
      border-bottom: 1px solid #37332a;
    }

    #header .logo {
      font-size: 28px;
      margin: 0;
      padding: 0;
      line-height: 1;
      font-weight: 300;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-family: "Poppins", sans-serif;
    }

    #header .logo a {
      color: #fff;
    }

    #header .logo img {
      max-height: 40px;
    }

    /*--------------------------------------------------------------
      # Login button Menu
      --------------------------------------------------------------*/
    .book-a-table-btn {
      margin: 0 0 0 15px;
      border: 2px solid #cda45e;
      color: #fff;
      border-radius: 50px;
      padding: 8px 25px;
      text-transform: uppercase;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 1px;
      transition: 0.3s;
    }

    .book-a-table-btn:hover {
      background: #cda45e;
      color: #fff;
    }

    @media (max-width: 992px) {
      .book-a-table-btn {
        margin: 0 15px 0 0;
        padding: 8px 20px;
      }
    }

    /*--------------------------------------------------------------
      # Navigation Menu
      --------------------------------------------------------------*/
    /**
      * Desktop Navigation 
      */
    .navbar {
      padding: 0;
    }

    .navbar ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }

    .navbar li {
      position: relative;
    }

    .navbar a,
    .navbar a:focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0 10px 30px;
      color: #fff;
      white-space: nowrap;
      transition: 0.3s;
      font-size: 14px;
    }

    .navbar a i,
    .navbar a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
    }

    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
      color: #d9ba85;
    }

    .navbar .dropdown ul {
      display: block;
      position: absolute;
      left: 14px;
      top: calc(100% + 30px);
      margin: 0;
      padding: 10px 0;
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      transition: 0.3s;
      border-radius: 4px;
    }

    .navbar .dropdown ul li {
      min-width: 200px;
    }

    .navbar .dropdown ul a {
      padding: 10px 20px;
      color: #444444;
    }

    .navbar .dropdown ul a i {
      font-size: 12px;
    }

    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul .active:hover,
    .navbar .dropdown ul li:hover>a {
      color: #cda45e;
    }

    .navbar .dropdown:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }

    .navbar .dropdown .dropdown ul {
      top: 0;
      left: calc(100% - 30px);
      visibility: hidden;
    }

    .navbar .dropdown .dropdown:hover>ul {
      opacity: 1;
      top: 0;
      left: 100%;
      visibility: visible;
    }

    @media (max-width: 1366px) {
      .navbar .dropdown .dropdown ul {
        left: -90%;
      }

      .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
      }
    }

    /**
      * Mobile Navigation 
      */
    .mobile-nav-toggle {
      color: #fff;
      font-size: 28px;
      cursor: pointer;
      display: none;
      line-height: 0;
      transition: 0.5s;
    }

    @media (max-width: 991px) {
      .mobile-nav-toggle {
        display: block;
      }

      .navbar ul {
        display: none;
      }
    }

    .navbar-mobile {
      position: fixed;
      overflow: hidden;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.9);
      transition: 0.3s;
      z-index: 999;
    }

    .navbar-mobile .mobile-nav-toggle {
      position: absolute;
      top: 15px;
      right: 15px;
    }

    a {
      text-decoration: none;
    }

    .navbar-mobile ul {
      display: block;
      position: absolute;
      top: 55px;
      right: 15px;
      bottom: 15px;
      left: 15px;
      padding: 10px 0;
      border-radius: 6px;
      background-color: #fff;
      overflow-y: auto;
      transition: 0.3s;
    }

    .navbar-mobile a,
    .navbar-mobile a:focus {
      padding: 10px 20px;
      font-size: 15px;
      color: #1a1814;
    }

    .navbar-mobile a:hover,
    .navbar-mobile .active,
    .navbar-mobile li:hover>a {
      color: #cda45e;
    }

    .navbar-mobile .getstarted,
    .navbar-mobile .getstarted:focus {
      margin: 15px;
    }

    .navbar-mobile .dropdown ul {
      position: static;
      display: none;
      margin: 10px 20px;
      padding: 10px 0;
      z-index: 99;
      opacity: 1;
      visibility: visible;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    }

    .navbar-mobile .dropdown ul li {
      min-width: 200px;
    }

    .navbar-mobile .dropdown ul a {
      padding: 10px 20px;
    }

    .navbar-mobile .dropdown ul a i {
      font-size: 12px;
    }

    .navbar-mobile .dropdown ul a:hover,
    .navbar-mobile .dropdown ul .active:hover,
    .navbar-mobile .dropdown ul li:hover>a {
      color: #cda45e;
    }

    .navbar-mobile .dropdown>.dropdown-active {
      display: block;
    }

    /*--------------------------------------------------------------
      # Footer
      --------------------------------------------------------------*/
    #footer {
      background: black;
      padding: 0 0 30px 0;
      color: #fff;
      font-size: 14px;
    }

    #footer .footer-top {
      background: #0c0b09;
      border-top: 1px solid #37332a;
      border-bottom: 1px solid #28251f;
      padding: 60px 0 30px 0;
    }

    #footer .footer-top .footer-info {
      margin-bottom: 30px;
    }

    #footer .footer-top .footer-info h3 {
      font-size: 24px;
      margin: 0 0 20px 0;
      padding: 2px 0 2px 0;
      line-height: 1;
      font-weight: 300;
      text-transform: uppercase;
      font-family: "Poppins", sans-serif;
    }

    #footer .footer-top .footer-info p {
      font-size: 14px;
      line-height: 24px;
      margin-bottom: 0;
      font-family: "Playfair Display", serif;
      color: #fff;
    }

    #footer .footer-top .social-links a {
      font-size: 18px;
      display: inline-block;
      background: #28251f;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }

    #footer .footer-top .social-links a:hover {
      background: #cda45e;
      color: #fff;
      text-decoration: none;
    }

    #footer .footer-top h4 {
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      position: relative;
      padding-bottom: 12px;
    }

    #footer .footer-top .footer-links {
      margin-bottom: 30px;
    }

    #footer .footer-top .footer-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    #footer .footer-top .footer-links ul i {
      padding-right: 2px;
      color: #cda45e;
      font-size: 18px;
      line-height: 1;
    }

    #footer .footer-top .footer-links ul li {
      padding: 10px 0;
      display: flex;
      align-items: center;
    }

    #footer .footer-top .footer-links ul li:first-child {
      padding-top: 0;
    }

    #footer .footer-top .footer-links ul a {
      color: #fff;
      transition: 0.3s;
      display: inline-block;
      line-height: 1;
    }

    #footer .footer-top .footer-links ul a:hover {
      color: #cda45e;
    }

    #footer .footer-top .footer-newsletter form {
      margin-top: 30px;
      background: #28251f;
      padding: 6px 10px;
      position: relative;
      border-radius: 50px;
      border: 1px solid #454035;
    }

    #footer .footer-top .footer-newsletter form input[type=email] {
      border: 0;
      padding: 4px;
      width: calc(100% - 110px);
      background: #28251f;
      color: white;
    }

    #footer .footer-top .footer-newsletter form input[type=submit] {
      position: absolute;
      top: -1px;
      right: -1px;
      bottom: -1px;
      border: 0;
      background: none;
      font-size: 16px;
      padding: 0 20px 2px 20px;
      background: #cda45e;
      color: #fff;
      transition: 0.3s;
      border-radius: 50px;
    }

    #footer .footer-top .footer-newsletter form input[type=submit]:hover {
      background: #d3af71;
    }

    #footer .copyright {
      text-align: center;
      padding-top: 30px;
    }

    #footer .credits {
      padding-top: 10px;
      text-align: center;
      font-size: 13px;
      color: #fff;
    }

    .gradient-custom-3 {
      background-color: #e9d8ff;
      background-image: url("./Assets/images/background.webp");
      background-size: 100% 100%;
    }

    .gradient-custom-4 {
      /* fallback for old browsers */
      background: #84fab0;
      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
    }

    p:not(.u-text-variant) {
      font-size: 18px;
    }

    .error {
      font-size: 12px;
      text-transform: italic;
    }

    .card {
      line-height: 100%;
    }
  </style>
</head>

<body>
  <?php include'./Action/register.php';?>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container mb-5 mt-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
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

                <div class="form-check d-flex justify-content-left mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="terms-checkbox" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" id="submit" name="submit" disabled class="btn btn-success btn-block btn-lg gradient-custom-4 text-body btn-register" value="Register">
                </div>
                <script>
                  const termsCheckbox = document.getElementById('terms-checkbox');
                  const registerButton = document.querySelector('.btn-register');

                  termsCheckbox.addEventListener('change', function() {
                    registerButton.disabled = !termsCheckbox.checked;
                  });
                </script>
                <p class="text-center text-black text-login mt-4 mb-0">Have already an account? <a href="<?php echo SITEURL; ?>login.php" style="font-size:18px;" class="text-blue text-decoration-none">Login here</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>



  <?php include_once('./Layout/footer.php'); ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="Assets/vendor/aos/aos.js"></script>
  <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="Assets/js/main.js"></script>
  <?php ob_end_flush(); ?>
</body>

</html>