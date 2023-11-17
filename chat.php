<?php
session_start();
include_once "Config/config.php";
if (!isset($_SESSION['user_id'])) {
  header("location:" . SITEURL . "login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
  <link rel="stylesheet" href="Assets/css/chat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
    .clear {
      clear: both;
    }

    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    .row {
      display: flex;
    }

    .col {
      flex: 1;
    }

    .col-lg-4 {
      flex: 0 0 33.333333%;
      max-width: 130%;
    }

    .col-lg-8 {
      flex: 0 0 66.666667%;
      max-width: 100%;
      margin-left: 0px;
    }
    .wrapper{
      min-height: 60em;
      border-radius: 0px;
    }
    .userwrapper{
      min-height: 60.8em;
    }
    .chat-box{
      min-height: 800px;
    }
    .chatwrapper{
      
      min-width: 83em;
    }
    .typing-area input{
      height:50px;
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col col-lg-4 col-md-4 col-sm-4">
      <div class="wrapper userwrapper col-lg-4 col-md-4 col-sm-4">
        <section class="users">
          <header>
            <div class="conten2">
              <?php
              $user_id = $_SESSION['user_id'];
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$user_id'");
              if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
              }
              ?>
              <img src="<?php echo SITEURL . "Assets/images/profile/" . $row['image']; ?>" alt="">
              <div class="details">
                <span><?php echo $row['username']; ?></span>
                <p><?php echo $row['status']; ?></p>
              </div>
            </div>
            <a href="<?php echo SITEURL . "Action/logout.php?logout_id=" . $row['user_id']; ?>" class="logout">Logout</a>
          </header>
          <div class="search">
            <span class="text">Select an user match to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fas fa-search"></i></button>
          </div>
          <div class="users-list">
          </div>
      </div>
      </section>

      <script src="Assets/js/users.js"></script>
    </div>
    <div class="clear"></div>
    <div class="col col-lg-8 col-sm-6 col-md-6">
      <div class="wrapper chatwrapper col col-lg-8 col-sm-6 col-md-6">
        <section class="chat-area">
          <header>
            <?php
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = {$user_id}");
            if (mysqli_num_rows($sql) > 0) {
              $row = mysqli_fetch_assoc($sql);
            } else {
              header("location:" . SITEURL . "users-chat.php");
            }
            ?>
            <a href="<?php echo SITEURL; ?>users-chat.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="<?php echo SITEURL."Assets/images/profile/".$row['image']; ?>" alt="">
            <div class="details">
              <span><?php echo $row['fullname'] ?></span>
              <p><?php echo $row['status']; ?></p>
            </div>
          </header>
          <div class="chat-box">
          </div>
          <form action="#" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
          </form>
        </section>
      </div>
    </div>
  </div>
  <script src="./Assets/js/chat.js"></script>
</body>

</html>

<body>