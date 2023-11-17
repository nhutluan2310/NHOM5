<?php ob_start();
session_start(); ?>
<?php require '../Config/config.php' ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" href="../Assets/css/nicepage.css" media="screen">
  <script class="u-script" type="text/javascript" src="../Assets/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../Assets/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
  <title>Login</title>
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

  <link rel="stylesheet" href="../Assets/css/style_u.css">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <section class="u-clearfix u-grey-10 u-section-1" id="sec-50db">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <b><?= $_SESSION['response']; ?></b>
            </div>
          <?php }
          unset($_SESSION['response']); ?>
          <div class="u-layout-row">
            <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-image u-layout-cell u-size-37 u-image-1" data-image-width="3840" data-image-height="2160">
              <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-size-23 u-white u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width u-form u-login-control u-form-1">
                  <form method="POST" action="action/login-admin.php" class="u-clearfix u-form-custom-backend u-form-spacing-38 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;">
                    <div class="u-form-group u-form-name">
                      <label for="username-a30d" class="u-label">Username<sup style="color:red;">*</sup></label>
                      <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" value="<?php if (isset($username)) echo $username; ?>" class="u-grey-5 u-input u-input-rectangle u-input-1">
                    </div>
                    <div class="u-form-group u-form-password">
                      <label for="password-a30d" class="u-label">Password<sup style="color:red;">*</sup></label>
                      <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" value="<?php if (isset($password_hash)) echo $password_hash; ?>" class="u-grey-5 u-input u-input-rectangle u-input-2">
                    </div>

                    <div class="u-align-left u-form-group u-form-submit">
                      <input type="submit" name="submit" value="Login" class="u-border-none u-btn u-btn-submit u-button-style u-gradient u-none u-color-1-light-1 u-text-body-alt-color u-btn-1">
                    </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include'./Action/login-admin.php'?>
  <?php ob_end_flush() ?>
</body>

</html>