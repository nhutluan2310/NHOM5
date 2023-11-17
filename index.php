<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lynder</title>
  <!-- Favicons -->
  <link href="Assets/img/favicon.png" rel="icon">
  <link href="Assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    body {
      font-family: "Open Sans", sans-serif;
      background: #0c0b09;
      color: #fff;
    }

    a {
      color: #cda45e;
      text-decoration: none;
    }

    a:hover {
      color: red;
      text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Playfair Display", serif;
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
      # Book a table button Menu
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
      # Hero Section
      --------------------------------------------------------------*/
    #hero {
      width: 100%;
      height: 100vh;
      background: url("./Assets/images/background.jpg") top center;
      background-size: cover;
      position: relative;
      padding: 0;
    }

    #hero:before {
      content: "";
      background: rgba(0, 0, 0, 0.5);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    #hero .container {
      padding-top: 110px;
    }

    @media (max-width: 992px) {
      #hero .container {
        padding-top: 98px;
      }
    }

    #hero h1 {
      margin: 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      color: #fff;
      font-family: "Poppins", sans-serif;
    }

    #hero h1 span {
      color: #cda45e;
    }

    #hero h2 {
      color: #eee;
      margin-bottom: 10px 0 0 0;
      font-size: 22px;
    }

    #hero .btns {
      margin-top: 30px;
    }

    #hero .btn-menu,
    #hero .btn-book {
      font-weight: 600;
      font-size: 13px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      display: inline-block;
      padding: 12px 30px;
      border-radius: 50px;
      transition: 0.3s;
      line-height: 1;
      color: white;
      border: 2px solid #cda45e;
    }

    #hero .btn-menu:hover,
    #hero .btn-book:hover {
      background: #cda45e;
      color: #fff;
    }

    #hero .btn-book {
      margin-left: 15px;
    }

    #hero .play-btn {
      width: 94px;
      height: 94px;
      background: radial-gradient(#cda45e 50%, rgba(205, 164, 94, 0.4) 52%);
      border-radius: 50%;
      display: block;
      position: relative;
      overflow: hidden;
    }

    #hero .play-btn::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 100;
      transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    #hero .play-btn::before {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      animation-delay: 0s;
      animation: pulsate-btn 2s;
      animation-direction: forwards;
      animation-iteration-count: infinite;
      animation-timing-function: steps;
      opacity: 1;
      border-radius: 50%;
      border: 5px solid rgba(205, 164, 94, 0.7);
      top: -15%;
      left: -15%;
      background: rgba(198, 16, 0, 0);
    }

    #hero .play-btn:hover::after {
      border-left: 15px solid #cda45e;
      transform: scale(20);
    }

    #hero .play-btn:hover::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border: none;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 200;
      animation: none;
      border-radius: 0;
    }

    @media (min-width: 1366px) {
      #hero {
        background-attachment: fixed;
      }
    }

    @media (max-width: 992px) {
      #hero .play-btn {
        margin-top: 30px;
      }
    }

    @media (max-height: 500px) {
      #hero {
        height: auto;
      }

      #hero .container {
        padding-top: 130px;
        padding-bottom: 60px;
      }
    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }

      #hero h2 {
        font-size: 18px;
        line-height: 24px;
      }
    }

    @keyframes pulsate-btn {
      0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
      }

      100% {
        transform: scale(1, 1);
        opacity: 0;
      }
    }

    /*--------------------------------------------------------------
      # Sections General
      --------------------------------------------------------------*/
    section {
      padding: 60px 0;
      overflow: hidden;
    }

    .section-bg {
      background-color: #1a1814;
    }

    .section-title {
      padding-bottom: 40px;
    }

    .section-title h2 {
      font-size: 14px;
      font-weight: 500;
      padding: 0;
      line-height: 1px;
      margin: 0 0 5px 0;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #aaaaaa;
      font-family: "Poppins", sans-serif;
    }

    .section-title h2::after {
      content: "";
      width: 120px;
      height: 1px;
      display: inline-block;
      background: rgba(255, 255, 255, 0.2);
      margin: 4px 10px;
    }

    .section-title p {
      margin: 0;
      margin: 0;
      font-size: 36px;
      font-weight: 700;
      font-family: "Playfair Display", serif;
      color: #cda45e;
    }

    /*--------------------------------------------------------------
      # About
      --------------------------------------------------------------*/
    .breadcrumbs {
      padding: 15px 0;
      background: #1d1b16;
      margin-top: 110px;
    }

    @media (max-width: 992px) {
      .breadcrumbs {
        margin-top: 98px;
      }
    }

    .breadcrumbs h2 {
      font-size: 26px;
      font-weight: 300;
    }

    .breadcrumbs ol {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
      font-size: 14px;
    }

    .breadcrumbs ol li+li {
      padding-left: 10px;
    }

    .breadcrumbs ol li+li::before {
      display: inline-block;
      padding-right: 10px;
      color: #37332a;
      content: "/";
    }

    @media (max-width: 768px) {
      .breadcrumbs .d-flex {
        display: block !important;
      }

      .breadcrumbs ol {
        display: block;
      }

      .breadcrumbs ol li {
        display: inline-block;
      }
    }

    /*--------------------------------------------------------------
      # About
      --------------------------------------------------------------*/
    .about {
      background: url("../img/about-bg.jpg") center center;
      background-size: cover;
      position: relative;
      padding: 80px 0;
    }

    .about:before {
      content: "";
      background: rgba(0, 0, 0, 0.8);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    .about .about-img {
      position: relative;
      transition: 0.5s;
    }

    .about .about-img img {
      max-width: 100%;
      border: 4px solid rgba(255, 255, 255, 0.2);
      position: relative;
    }

    .about .about-img::before {
      position: absolute;
      left: 20px;
      top: 20px;
      width: 60px;
      height: 60px;
      z-index: 1;
      content: "";
      border-left: 5px solid #cda45e;
      border-top: 5px solid #cda45e;
      transition: 0.5s;
    }

    .about .about-img::after {
      position: absolute;
      right: 20px;
      bottom: 20px;
      width: 60px;
      height: 60px;
      z-index: 2;
      content: "";
      border-right: 5px solid #cda45e;
      border-bottom: 5px solid #cda45e;
      transition: 0.5s;
    }

    .about .about-img:hover {
      transform: scale(1.03);
    }

    .about .about-img:hover::before {
      left: 10px;
      top: 10px;
    }

    .about .about-img:hover::after {
      right: 10px;
      bottom: 10px;
    }

    .about .content {
      position: relative;
    }

    .about .content h3 {
      font-weight: 600;
      font-size: 26px;
    }

    .about .content ul {
      list-style: none;
      padding: 0;
    }

    .about .content ul li {
      padding-bottom: 10px;
    }

    .about .content ul i {
      font-size: 20px;
      padding-right: 4px;
      color: #cda45e;
    }

    .about .content p:last-child {
      margin-bottom: 0;
    }

    @media (min-width: 1024px) {
      .about {
        background-attachment: fixed;
      }
    }

    /*--------------------------------------------------------------
      # Why Us
      --------------------------------------------------------------*/
    .why-us .box {
      padding: 50px 30px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      transition: all ease-in-out 0.3s;
      background: #1a1814;
    }

    .why-us .box span {
      display: block;
      font-size: 28px;
      font-weight: 700;
      color: #cda45e;
    }

    .why-us .box h4 {
      font-size: 24px;
      font-weight: 600;
      padding: 0;
      margin: 20px 0;
      color: rgba(255, 255, 255, 0.8);
    }

    .why-us .box p {
      color: #aaaaaa;
      font-size: 15px;
      margin: 0;
      padding: 0;
    }

    .why-us .box:hover {
      background: #cda45e;
      padding: 30px 30px 70px 30px;
      box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
    }

    .why-us .box:hover span,
    .why-us .box:hover h4,
    .why-us .box:hover p {
      color: #fff;
    }

    /*--------------------------------------------------------------
      # Menu Section
      --------------------------------------------------------------*/
    .menu #menu-flters {
      padding: 0;
      margin: 0 auto 0 auto;
      list-style: none;
      text-align: center;
      border-radius: 50px;
    }

    .menu #menu-flters li {
      cursor: pointer;
      display: inline-block;
      padding: 8px 12px 10px 12px;
      font-size: 16px;
      font-weight: 500;
      line-height: 1;
      color: #fff;
      margin-bottom: 10px;
      transition: all ease-in-out 0.3s;
      border-radius: 50px;
      font-family: "Playfair Display", serif;
    }

    .menu #menu-flters li:hover,
    .menu #menu-flters li.filter-active {
      color: #cda45e;
    }

    .menu #menu-flters li:last-child {
      margin-right: 0;
    }

    .menu .menu-item {
      margin-top: 50px;
    }

    .menu .menu-img {
      width: 70px;
      border-radius: 50%;
      float: left;
      border: 5px solid rgba(255, 255, 255, 0.2);
    }

    .menu .menu-content {
      margin-left: 85px;
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      position: relative;
    }

    .menu .menu-content::after {
      content: "......................................................................" "...................................................................." "....................................................................";
      position: absolute;
      left: 20px;
      right: 0;
      top: -4px;
      z-index: 1;
      color: #bab3a6;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    .menu .menu-content a {
      padding-right: 10px;
      background: #1a1814;
      position: relative;
      z-index: 3;
      font-weight: 700;
      color: white;
      transition: 0.3s;
    }

    .menu .menu-content a:hover {
      color: #cda45e;
    }

    .menu .menu-content span {
      background: #1a1814;
      position: relative;
      z-index: 3;
      padding: 0 10px;
      font-weight: 600;
      color: #cda45e;
    }

    .menu .menu-ingredients {
      margin-left: 85px;
      font-style: italic;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
      color: rgba(255, 255, 255, 0.5);
    }

    /*--------------------------------------------------------------
      # Specials
      --------------------------------------------------------------*/
    .specials {
      overflow: hidden;
    }

    .specials .nav-tabs {
      border: 0;
    }

    .specials .nav-link {
      border: 0;
      padding: 12px 15px;
      transition: 0.3s;
      color: #fff;
      border-radius: 0;
      border-right: 2px solid #cda45e;
      font-weight: 600;
      font-size: 15px;
    }

    .specials .nav-link:hover {
      color: #cda45e;
    }

    .specials .nav-link.active {
      color: #1a1814;
      background: #cda45e;
      border-color: #cda45e;
    }

    .specials .nav-link:hover {
      border-color: #cda45e;
    }

    .specials .tab-pane.active {
      animation: fadeIn 0.5s ease-out;
    }

    .specials .details h3 {
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 20px;
      color: #fff;
    }

    .specials .details p {
      color: #aaaaaa;
    }

    .specials .details p:last-child {
      margin-bottom: 0;
    }

    @media (max-width: 992px) {
      .specials .nav-link {
        border: 0;
        padding: 15px;
      }
    }

    /*--------------------------------------------------------------
      # Events
      --------------------------------------------------------------*/
    .events {
      background: url(../img/events-bg.jpg) center center no-repeat;
      background-size: cover;
      position: relative;
    }

    .events::before {
      content: "";
      background-color: rgba(0, 0, 0, 0.8);
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
    }

    .events .section-title h2 {
      color: #fff;
    }

    .events .container {
      position: relative;
    }

    @media (min-width: 1024px) {
      .events {
        background-attachment: fixed;
      }
    }

    .events .events-carousel {
      background: rgba(255, 255, 255, 0.08);
      padding: 30px;
    }

    .events .event-item {
      color: #fff;
    }

    .events .event-item h3 {
      font-weight: 600;
      font-size: 26px;
      color: #cda45e;
    }

    .events .event-item .price {
      font-size: 26px;
      font-family: "Open Sans", sans-serif;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .events .event-item .price span {
      border-bottom: 2px solid #cda45e;
    }

    .events .event-item ul {
      list-style: none;
      padding: 0;
    }

    .events .event-item ul li {
      padding-bottom: 10px;
    }

    .events .event-item ul i {
      font-size: 20px;
      padding-right: 4px;
      color: #cda45e;
    }

    .events .event-item p:last-child {
      margin-bottom: 0;
    }

    .events .swiper-pagination {
      margin-top: 30px;
      position: relative;
    }

    .events .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: rgba(255, 255, 255, 0.4);
      opacity: 1;
    }

    .events .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #cda45e;
    }

    /*--------------------------------------------------------------
      # Book A Table
      --------------------------------------------------------------*/
    .book-a-table .php-email-form {
      width: 100%;
    }

    .book-a-table .php-email-form .form-group {
      padding-bottom: 8px;
    }

    .book-a-table .php-email-form .validate {
      display: none;
      color: red;
      margin: 0 0 15px 0;
      font-weight: 400;
      font-size: 13px;
    }

    .book-a-table .php-email-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: left;
      padding: 15px;
      font-weight: 600;
    }

    .book-a-table .php-email-form .error-message br+br {
      margin-top: 25px;
    }

    .book-a-table .php-email-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .book-a-table .php-email-form .loading {
      display: none;
      text-align: center;
      padding: 15px;
    }

    .book-a-table .php-email-form .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #cda45e;
      border-top-color: #1a1814;
      animation: animate-loading 1s linear infinite;
    }

    .book-a-table .php-email-form input,
    .book-a-table .php-email-form textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
      background: #0c0b09;
      border-color: #625b4b;
      color: white;
    }

    .book-a-table .php-email-form input::-moz-placeholder,
    .book-a-table .php-email-form textarea::-moz-placeholder {
      color: #a49b89;
    }

    .book-a-table .php-email-form input::placeholder,
    .book-a-table .php-email-form textarea::placeholder {
      color: #a49b89;
    }

    .book-a-table .php-email-form input:focus,
    .book-a-table .php-email-form textarea:focus {
      border-color: #cda45e;
    }

    .book-a-table .php-email-form input {
      height: 44px;
    }

    .book-a-table .php-email-form textarea {
      padding: 10px 12px;
    }

    .book-a-table .php-email-form button[type=submit] {
      background: #cda45e;
      border: 0;
      padding: 10px 35px;
      color: #fff;
      transition: 0.4s;
      border-radius: 50px;
    }

    .book-a-table .php-email-form button[type=submit]:hover {
      background: #d3af71;
    }

    /*--------------------------------------------------------------
      # Testimonials
      --------------------------------------------------------------*/
    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
      overflow: hidden;
    }

    .testimonials .testimonial-item {
      box-sizing: content-box;
      min-height: 320px;
    }

    .testimonials .testimonial-item .testimonial-img {
      width: 90px;
      border-radius: 50%;
      margin: -40px 0 0 40px;
      position: relative;
      z-index: 2;
      border: 6px solid rgba(255, 255, 255, 0.2);
    }

    .testimonials .testimonial-item h3 {
      font-size: 18px;
      font-weight: bold;
      margin: 10px 0 5px 45px;
      color: white;
    }

    .testimonials .testimonial-item h4 {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.6);
      margin: 0 0 0 45px;
    }

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
      color: #d3af71;
      font-size: 26px;
    }

    .testimonials .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
    }

    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 15px 0 15px;
      padding: 20px 20px 60px 20px;
      background: #26231d;
      position: relative;
      border-radius: 6px;
      position: relative;
      z-index: 1;
    }

    .testimonials .swiper-pagination {
      margin-top: 30px;
      position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: rgba(255, 255, 255, 0.4);
      opacity: 1;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #cda45e;
    }

    /*--------------------------------------------------------------
      # Gallery
      --------------------------------------------------------------*/
    .gallery .gallery-item {
      overflow: hidden;
      border-right: 3px solid #454035;
      border-bottom: 3px solid #454035;
    }

    .gallery .gallery-item img {
      transition: all ease-in-out 0.4s;
    }

    .gallery .gallery-item:hover img {
      transform: scale(1.1);
    }

    /*--------------------------------------------------------------
      # Chefs
      --------------------------------------------------------------*/
    .chefs .member {
      text-align: center;
      margin-bottom: 20px;
      background: #343a40;
      position: relative;
      overflow: hidden;
    }

    .chefs .member .member-info {
      opacity: 0;
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
      transition: 0.2s;
    }

    .chefs .member .member-info-content {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 10px;
      transition: bottom 0.4s;
    }

    .chefs .member .member-info-content h4 {
      font-weight: 700;
      margin-bottom: 2px;
      font-size: 18px;
      color: #fff;
    }

    .chefs .member .member-info-content span {
      font-style: italic;
      display: block;
      font-size: 13px;
      color: #fff;
    }

    .chefs .member .social {
      position: absolute;
      left: 0;
      bottom: -38px;
      right: 0;
      height: 48px;
      transition: bottom ease-in-out 0.4s;
      text-align: center;
    }

    .chefs .member .social a {
      transition: color 0.3s;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
    }

    .chefs .member .social a:hover {
      color: #cda45e;
    }

    .chefs .member .social i {
      font-size: 18px;
      margin: 0 2px;
    }

    .chefs .member:hover .member-info {
      background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.8) 20%, rgba(0, 212, 255, 0) 100%);
      opacity: 1;
      transition: 0.4s;
    }

    .chefs .member:hover .member-info-content {
      bottom: 60px;
      transition: bottom 0.4s;
    }

    .chefs .member:hover .social {
      bottom: 0;
      transition: bottom ease-in-out 0.4s;
    }

    /*--------------------------------------------------------------
      # Contact
      --------------------------------------------------------------*/
    .contact .info {
      width: 100%;
    }

    .contact .info i {
      font-size: 20px;
      float: left;
      width: 44px;
      height: 44px;
      background: #cda45e;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50px;
      transition: all 0.3s ease-in-out;
    }

    .contact .info h4 {
      padding: 0 0 0 60px;
      font-size: 18px;
      font-weight: 500;
      margin-bottom: 5px;
      font-family: "Poppins", sans-serif;
    }

    .contact .info p {
      padding: 0 0 0 60px;
      margin-bottom: 0;
      font-size: 14px;
      color: #bab3a6;
    }

    .contact .info .open-hours,
    .contact .info .email,
    .contact .info .phone {
      margin-top: 40px;
    }

    .contact .php-email-form {
      width: 100%;
    }

    .contact .php-email-form .form-group {
      padding-bottom: 8px;
    }

    .contact .php-email-form .validate {
      display: none;
      color: red;
      margin: 0 0 15px 0;
      font-weight: 400;
      font-size: 13px;
    }

    .contact .php-email-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .php-email-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .php-email-form .loading {
      display: none;
      text-align: center;
      padding: 15px;
    }

    .contact .php-email-form .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #cda45e;
      border-top-color: #1a1814;
      animation: animate-loading 1s linear infinite;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
      background: #0c0b09;
      border-color: #625b4b;
      color: white;
    }

    .contact .php-email-form input::-moz-placeholder,
    .contact .php-email-form textarea::-moz-placeholder {
      color: #a49b89;
    }

    .contact .php-email-form input::placeholder,
    .contact .php-email-form textarea::placeholder {
      color: #a49b89;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus {
      border-color: #cda45e;
    }

    .contact .php-email-form input {
      height: 44px;
    }

    .contact .php-email-form textarea {
      padding: 10px 12px;
    }

    .contact .php-email-form button[type=submit] {
      background: #cda45e;
      border: 0;
      padding: 10px 35px;
      color: #fff;
      transition: 0.4s;
      border-radius: 50px;
    }

    .contact .php-email-form button[type=submit]:hover {
      background: #d3af71;
    }

    @keyframes animate-loading {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
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

    .content {
      max-width: 1090px;
      width: 100%;
      margin: auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .content .card {
      background: lightgoldenrodyellow;
      color:black;
      width: calc(33% - 20px);
      text-align: center;
      padding: 15px 30px 30px 30px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }

    .content .card .top {
      height: 130px;
      color: whitesmoke;
      padding: 12px 0 0 0;
      clip-path: polygon(0 0, 100% 0, 100% 53%, 49% 100%, 0 53%);
    }

    .content .card .top .title {
      font-size: 27px;
      font-weight: 600;
    }

    .content .card .top .price-sec {
      margin-top: -10px;
      font-weight: 600;
    }

    .content .card .top .price {
      font-size: 45px;
    }

    .content .card .info {
      font-size: 16px;
      margin-top: 20px;
    }

    .content .card .details .one {
      margin-top: 25px;
      font-size: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }

    .content .card .details .one::before {
      position: absolute;
      content: "";
      width: 100%;
      background: #ddd;
      height: 1px;
      left: 0;
      top: -12px;
      border-radius: 25px;
    }

    .content .card .details .one i {
      color: darkgoldenrod;
    }

    .content .card .details i.fa-times {
      color: #cd3241;
    }

    .content .card button {
      outline: none;
      border: none;
      height: 42px;
      color: whitesmoke;
      margin-top: 30px;
      border-radius: 3px;
      font-size: 20px;
      width: 100%;
      display: block;
      transition: all 0.3s ease;
      cursor: pointer;
      letter-spacing: 1px;
    }

    .content .one .top,
    .content .one button {
      background: darkcyan;
    }

    .content .two .top,
    .content .two button {
      background: goldenrod;
    }

    .content .three .top,
    .content .three button {
      background: lightgreen;
    }

    .content button:hover {
      filter: brightness(90%);
    }

    .content .one ::selection {
      background: #8af5b6;
    }

    .content .two ::selection {
      background: #f2b08c;
    }

    .content .three ::selection {
      background: #d0f9fb;
    }

    @media (max-width:1000px) {
      .content .card {
        background: whitesmoke;
        width: calc(50% - 20px);
        margin-bottom: 30px;
      }
    }

    @media (max-width:715px) {
      .content .card {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <?php include './Layout/header.php'; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Lynder</span>!</h1>
          <h2>Join Lynder, where you could meet anyone, anywhere!</h2>

          <div class="btns">
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="Assets/images/image_3.jpeg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>About Lynder.</h3>
            <p class="fst-italic">
              &nbsp;&nbsp;&nbsp;Launched in 2023, Lynder is a dating website where you can find your soulmate. More than half of all users are 18-25 years old. Most Innovative Companies by Fast Company.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> More than 50% of Lynder users are ages 18-25 (Gen Z).</li>
              <li><i class="bi bi-check-circle"></i> 100+ total matches</li>
              <li><i class="bi bi-check-circle"></i> More Genders feature led to 100+ new matches to date .</li>
            </ul>
            <p>
              &nbsp;&nbsp;&nbsp;If you're looking for love, want to start dating, or just keep it casual,
              you need to be on Lynnder. It's the place to be to meet your next best match.
              Let's be real, the dating landscape looks very different today, as most people are meeting online.
              With Lynder, you have millions of other single people at your fingertips
              and they're all ready to meet someone like you. Whether you're straight or in the LGBTQIA community,
              Lynder's here to bring you all the sparks.
              <br>
              &nbsp;&nbsp;&nbsp;There really is something for everyone on Lynder. Want to get into a relationship? You got it.
              Trying to find some new friends? Say no more. New kid on campus and looking to make the most of your
              college experience? Lynder U's got you covered. Lynnder isn't your average dating site — it's the most
              diverse dating website, where adults of all backgrounds and experiences are invited to make connections,
              memories, and everything in between.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Lynder</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        <div class="content">
          <div class="card one">
            <div class="top">
              <div class="title">Basic</div>
              <div class="price-sec">
                <span class="dollar"></span>
                <span class="price">0</span>
                <span class="decimal">.00$</span>
              </div>
            </div>
            <div class="info">Limited features you will get on this package or plan</div>
            <div class="details">
              <div class="one">
                <span>Can Chat</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Update your profile</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Find you soulmate</span>
                <i class="fas fa-times"></i>
              </div>
              <div class="one">
                <span>Unlimited</span>
                <i class="fas fa-times"></i>
              </div>
              <button>Purchase</button>
            </div>
          </div>
          <div class="card two">
            <div class="top">
              <div class="title">Premium</div>
              <div class="price-sec">
                <span class="dollar"></span>
                <span class="price">49</span>
                <span class="decimal">.99$</span>
              </div>
            </div>
            <div class="info">Only some features you will get on this package or plan</div>
            <div class="details">
              <div class="one">
                <span>Five Addons Domain</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>200GB Local Storage</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Lifetime Tech Support</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Unlimited Data Transfer</span>
                <i class="fas fa-times"></i>
              </div>
              <button>Purchase</button>
            </div>
          </div>
          <div class="card three">
            <div class="top">
              <div class="title">Golden</div>
              <div class="price-sec">
                <span class="dollar"></span>
                <span class="price">99</span>
                <span class="decimal">.99$</span>
              </div>
            </div>
            <div class="info">All features you will get on this package or plan</div>
            <div class="details">
              <div class="one">
                <span>10 Addons Domain</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Unlimited Local Storage</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Lifetime Tech Support</span>
                <i class="fas fa-check"></i>
              </div>
              <div class="one">
                <span>Unlimited Data Transfer</span>
                <i class="fas fa-check"></i>
              </div>
              <button>Purchase</button>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Menu Section -->



    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Couple</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_5.webp" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_5.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_6.webp" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_6.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image__7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image__7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Assets/images/gallery/image_8.webp" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Assets/images/gallery/image_8.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team 5</h2>
          <p>Our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="Assets/images/vinh.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Phạm Huỳnh Đức Vinh</h4>
                  <span>Team Leader</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="Assets/images/loc.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Võ Thành Lộc</h4>
                  <span>Designer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="Assets/images/luan.webp" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hồ Nhựt Luân</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124762.71289544654!2d109.16410106830399!
        3d12.259457855145003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677811cc886f%3A0x5c4bbc0aa8
        1edcb9!2zTmhhIFRyYW5nLCBLaMOhbmggSMOyYSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1699511433142!5m2!1svi!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Nha Trang city, Khanh Hoa, Vietnam</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  8:00 AM - 600 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+84 0000 1111 999</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="Assets/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <div id="preloader"></div>
  <?php include './Layout/footer.php'; ?>
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

</body>

</html>