<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản lý Sữa</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/fontawesome.min.js" integrity="sha512-64O4TSvYybbO2u06YzKDmZfLj/Tcr9+oorWhxzE3yDnmBRf7wvDgQweCzUf5pm2xYTgHMMyk5tW8kWU92JENng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/regular.min.js" integrity="sha512-kSAGSlODsZwG7bMv/Hydyvybjk+WOz4oEqQiWYwpCxQ7/7yXMFynr2QrvNc2myZW/7wyi0IF2TXZZWMeg8AGhw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/solid.min.js" integrity="sha512-s6yNeC6faUgveCQocceGXVia7ciAebyTH7hRNazwZa2FHhnxX22qaGeb9d3a8PUKdnoHo3T3bYI/0ZOjmgWkNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    }
    body{
        font-size: 16px;
        line-height: 20px;
        text-align: justify;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", sans-serif;
        background-color: white;
    }
    a{
        text-decoration: none;
    }
    a:hover{
        color:#0389ff;
    }
    .clear{
        clear: both;
    }
    .container{
        width: 100%;
        margin: 0 auto;
    }
    .header{
        width: 100%;
        padding-top: 15px;
    }
    .header-left{
        width: 50%;
        float: left;
    }
    .header-left h2{
        padding-bottom: 10px;
        padding-left: 90px;
    }
    .header-right{
        width: 40%;
        float: right;
        text-align: right;
    }
    .header-left a{
        color: blue;
        padding-top: 20px;
        padding-left: 15px;
    }
    .bt{
        padding: 3px 10px;
        margin-right: 5px;
        color: gray;
        background-color: #ebf7fc;
        border: 0px;
        font-size: 20px;
    }
    .bt:hover{
        color: blue;
    }
    .header-right ul{
        list-style-type: none;
        margin-top: 20px;
        margin-right: 20px;
    }
    .header-right ul li{
        font-size: 20px;
        padding-right:10px;
        display: inline-block;
    }
    #menu{
        list-style-type: none;
        line-height: 40px;
        min-height: 40px;
        padding-bottom: 20px;
        font-weight: bold;
        font-size: 23px;
    }
    #menu li{
        text-transform: uppercase;
        color:blue;
    }
    #menu li a{
        color: blue;
    }
    .body{
        width: 100%;
        margin-top:20px;
    }
    .body-left{
        width: 23%;
        float: left;
        margin-left: 1%;
        margin-right: 1%;
        
    }
    .body-center{
        width:73%;
        float:left;
        margin-left:1%;
        margin-right:1%;
    }
    .content{
        width: 100%;
        margin-top: 10px;
    }
    .content h1{
        color: blue;
        font-size: 35px;
        width: 100%;
        padding: 5px;  
        text-align: center; 
    }
    .content h1:hover{
        color:#0389ff;
    }
    .ImgSP{
        float: left;
        padding: 10px;
        width: 30%;
    }
    .content-product{
        float: left;
        width: 70%;
        padding: 10px;
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        line-height: 25px;
    }
    .list_img{
        width: 100%;
        border: 2px solid #AAA;
        padding: 0px;
    }
    .list_img img{
        width: 16%;
        height: auto;
        display: inline-block;
    }
    .pro{
        background-color: white;
    }
    .body-left ul{
        
        list-style-type: none;
        color: #333;
    }
    .body-left ul a{
        line-height: 1.3;
    }
    .body-left ul a:hover{
        color: #1435c3;
    }
    .body-left ul li{
        margin: 10px;
    }
    .body-left ul .num{
        color: #fff;
        border-radius: 3px;
        display: inline-block;
        font-size: 11px;
        width: 18px;
        height: 18px;
        line-height: 18px;
        text-align: center;
        left: 0;
        top: 2px;
    }
    .body-left .num-1{
        background-color: #ff4c4c;
    }
    .body-left .num-2{
        background-color: #ff9900;
    }
    .body-left .num-3{
        background-color: #0389ff;
    }
    .body-left .num-4{
        background-color: seagreen;
    }
    .body-left .num-5{
        background-color: purple;
    }
    .body-left .num-6{
        background-color: cadetblue;
    }
    .body-left .num-7{
        background-color: teal;
    }
    .body-left .num-8{
        background-color: salmon;
    }
    .footer{
        width: 100%;
        margin-top: 20px;
        padding: 10px;
        border-top: 1px solid #CCC;
        font-size: 12px;
    }
    .footer-left{
        width: 50%;
        float: left;
        text-align: left; 
    }
    .footer-right{
        width: 40%;
        float: right;
        text-align: right;
    }
    .footer-right ul{
        list-style-type: none;
    }
    .footer-right ul li{
        display: inline-block;
        margin: 2px;
    }
    .banner{
        padding-top: 20px;
        line-height: 40px;
    }
    table{
        border-collapse: collapse;
        width: 100%;
        font-size: 18px;
        
    }
    .TblInsert{
        margin-top:15px;
    }
    .TblInsert select{
        font-size: 20px;
        text-align: center;
    }
    .TblInsert label{
        font-size:22px;
    }
    .TblInsert td{
        padding-top: 15px;
    }
    .TblInsert #search{
        margin-top:10px;
        font-size: 20px;
        width: 350px;
    }
    .TblInsert #submit{
        font-size:20px;
        width: 110px;
        padding:2px;
        margin-left: 10px;
        background-color: pink;
    }
    
    #title{
        font-size: 25px;
        color: #0389ff;
        padding: 5px;
    }
    .txt {
        font-size: 20px;
        padding: 10px;
    }
</style>

</head>
<body>
<?php  
    require 'config.php'; 
    if(isset($_GET['submit'])){
        $makh = $_GET['makh'];
        $tenkh = $_GET['tenkh'];
        $phai = $_GET['gender'];
        $diachi = $_GET['diachi'];
        $sdt = $_GET['dt'];
        $email = $_GET['email'];
        $msg="";
        if (empty($_GET["tenkh"])) {
            $msg="Tên KH: Vui lòng nhập tên!";
        }
        else if(!isset($_GET["gender"])) {
           $msg="Phái: Vui lòng chọn phái!";
        }
        else if (empty($_GET["email"])) {
            $msg="Email: Vui lòng nhập email!";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // check if e-mail address is well-formed
            $msg="Email: Email không hợp lệ!";
        }
        else if (empty($_GET["dt"])) {
           $msg="SDT: Vui lòng nhập số điện thoại!";
        } 
        else if (!preg_match("/^[0-9' ]*$/",$sdt)) { 
            // check if name only contains letters and whitespace
           $msg="SDT: Chỉ có ký tự số được cho phép!";
        }
        else{
            $query="INSERT INTO `khach_hang`(`Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email`) 
            VALUES ('$makh','$tenkh','$phai','$diachi','$sdt','$email')";
            $result = mysqli_query($conn,$query);
            if (!$result ) die ('<br> <b>Query failed</b>');
            else $msg="Thêm thành công!";
        }
    }
    if(isset($_GET['reset'])){
        $makh = $tenkh = $phai = $diachi = $sdt = $email = $msg="";
    }
?>
<div class="container">
    <div class="header">
        <a href="#"><img src="Images/bannerDL.png" width="100%" height="80%" alt="BannerDL"></a>
        <div class="clear"></div>
    </div>
    <div class="body" >
        <div class="body-left" style="background: #FDFDCA;">
            <div class="content" >
                <ul id="menu">
                    <li>
                        <a href="index.php">
                            <i style="font-size: 30px; " class="fa fa-fw fa-home"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li style="background: #FDFE9B;">
                        <a href="themSua.php">
                            <i style="font-size: 30px; " class="fa fa-fw fa-pen-to-square"></i>  
                            Thêm sữa mới
                        </a>
                    </li>
                    <li>
                        <a href="suabanchay.php">
                            <i style="font-size: 30px; " class="fa fa-fw fa-star"></i>  
                            Sữa bán chạy
                        </a>
                    </li>
                    <li style="background: #FDFE9B;">
                        <a href="Timkiem.php">
                            <i style="font-size: 30px; " class="fa fa-fw fa-search"></i>  
                            Tìm kiếm sữa
                        </a>
                    </li>
                    <li>
                        <a href="themKH.php">
                            <i style="font-size: 30px; " class="fa fa-fw fa-user"></i>    
                            Thêm khách hàng
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="content">
                <div class="banner">
                    <img src="Images/banner30.webp" width="430px" alt="banner1">
                    <img src="Images/banner27.jpg" width="430px" alt="banner1">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        <div class="body-center">
            <div class="content" style="background: #FDFDCA;;">
                
                <form action="themKH.php" method="get">
                    <table class="TblInsert">
                        <tr style="background: #FDFE9B;">
                            <th align="center" colspan="2" style="padding: 10px;">
                            <h1>THÊM KHÁCH HÀNG MỚI</h1>
                            </th>
                        </tr>
                        <tr>
                        <?php
                                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                                if ($conn->connect_error) {
                                    die('Could not connect to the database!' . $conn->connect_error);
                                }   
                                $query="SELECT COUNT(khach_hang.Ma_khach_hang) as'MaKH' FROM khach_hang ORDER BY khach_hang.Ma_khach_hang DESC;";
                                $result = mysqli_query($conn,$query);
                                if (!$result ) die ('<br> <b>Query failed</b>');
                                $numRows= mysqli_num_rows($result);
                                if($numRows<>0)
                                {
                                    while($rows=mysqli_fetch_array($result)){
                                        $num = str_pad($rows['MaKH']+1, 3, '0', STR_PAD_LEFT);
                                        $makh = 'kh' . $num;
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                            <td align="right" style="padding:15px;">
                                <label for="makh" style="font-size: 25px;">Mã KH:</label>
                                <input type="text" name="makh" size="20" style="height:35px; font-size:23px; text-align:center" readonly  value="<?php if(isset($makh)) echo $makh; ?>" id="makh">
                            </td>
                            <td align="left" style="padding:18px;">
                                <label for="tenkh"  style="font-size: 25px;">Tên KH:</label>
                                <input type="text" name="tenkh" size="30" style="height:35px; font-size:23px;"  value="<?php if(isset($tenkh)) echo $tenkh; ?>" id="tenkh">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" style="padding-right:117px;">
                            <!-- <?php if(isset($phai)==0) echo "checked";?> -->
                            <!-- <?php if(isset($phai)==1) echo "checked";?>  -->
                                <label for="makh" style="padding-right:10px;font-size: 25px;">Phái:</label>
                                <input type="radio" name="gender" <?php if(isset($phai) and $phai==0)   echo "checked";?> required   value="0">
                                <label for="0" style="padding-right:30px; font-size:23px;" >Nam</label>
                                <input type="radio" name="gender" <?php if(isset($phai) and $phai==1) echo "checked";?> value="1">
                                <label for="1" style="padding-right:30px;font-size:23px;">Nữ</label>
                            </td>
                            <td align="left" style="padding-left:20px;">
                                <label for="diachi" style="font-size:25px;">Địa chỉ:</label>
                                <input type="text" name="diachi" size="30" style="height:35px;font-size:23px;"  value="<?php if(isset($diachi)) echo $diachi; ?>" id="diachi">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" style="padding-right:13px; padding-top:20px;padding-bottom:20px ">
                                <label for="dt" style="font-size:25px;">Điện thoại:</label>
                                <input type="text" name="dt" size="20" style="height:35px;font-size:23px;"  value="<?php if(isset($sdt)) echo $sdt; ?>" id="dt">
                            </td>
                            <td  align="left" style="padding-left:20px;">
                                <label for="email" style="font-size:25px;padding-left:16px;">Email:</label>
                                <input type="email" name="email" size="30" style="height:35px;font-size:23px;"  value="<?php if(isset($email)) echo $email; ?>" id="email">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="padding:10px; padding-top:20px; padding-right:100px;">
                               <input type="submit" name="submit" style="width:130px;height:35px;font-size:23px; background:paleturquoise" value="Thêm mới">
                               <input type="submit" name="reset" style="width:130px;height:35px;font-size:23px; background:paleturquoise" value="Reset">
                            </td>
                        <tr>
                            <td align="center" colspan="2" style="padding:10px;">
                                <b><?php if(isset($msg)) echo $msg; ?></b>
                                
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    </div>
        <div class="footer" >
            <div class="footer-left">
                <h4>Công Ty Cổ Phần Thương Mại Dịch Vụ Phong Vũ</h4>
                Địa chỉ trụ sở chính: Tầng 5, Số 117-119-121 Nguyễn Du, Phường Bến Thành, Quận 1, Thành Phố Hồ Chí Minh
                <br>
                Điện thoại: <a href="#">18006865</a>
            </div>
            <div class="footer-right">
                <ul>
                    <li>
                        <i class='bx bx-qr-scan' style="font-size: 20px;"></i>
                        <a href="#">QR Code</a>
                    </li>
                    <li>|</li>
                    <li>
                        <i class='bx bx-money' style="font-size: 20px;" ></i>
                        <a href="#">Tiền mặt</a>
                    </li>
                    <li>|</li>
                    <li>
                        <i class='bx bx-time' style="font-size: 20px;" ></i>
                        <a href="#">Trả góp</a>
                    </li>
                    <li>|</li>
                    <li>
                        <i class='bx bx-credit-card' style="font-size: 20px;" ></i>
                        <a href="#">Internet Banking</a>
                    </li>
                </ul>
                <h5>Copyright (c) 2007 Công Ty Cổ Phần Thương Mại Dịch Vụ Phong Vũ</h5>
            </div>
        </div>
    </div>
</div>
</body>
</html>