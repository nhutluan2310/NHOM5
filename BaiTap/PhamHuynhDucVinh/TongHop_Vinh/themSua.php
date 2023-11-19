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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        $masua = $_GET['masua'];
        $tensua = $_GET['tensua'];
        $hangsua = $_GET['hangsua'];
        $loaisua = $_GET['loaisua'];
        $trongluong = $_GET['trongluong'];
        $dongia = $_GET['dongia'];
        $tpdd = $_GET['tpdd'];
        $loiich = $_GET['loiich'];
        $hinhanh = $_GET['hinhanh'];
        if(!is_numeric($trongluong)){
            $msg = "Trọng lượng: Vui lòng nhập kiểu số!";
        }
        else if(!is_numeric($dongia)){
            $msg ="Đơn giá: Vui lòng nhập kiểu số!";
        }
        else if (empty($hinhanh)) {
            $msg = "Hình ảnh: Chưa có hình ảnh";
        }
        else if($hinhanh != "jpg" && $hinhanh != "png" && $hinhanh != "jpeg"
        && $hinhanh != "gif" ) {
          $msg = "Hình ảnh: Xin lỗi, Chỉ tệp có đuôi .JPG, .JPEG, .PNG & .GIF được cho phép.";
        }
        else{
            $query="INSERT INTO `sua`(`Ma_sua`, `Ten_sua`, `Ma_hang_sua`, `Ma_loai_sua`, `Trong_luong`, `Don_gia`, `TP_Dinh_Duong`, 
            `Loi_ich`, `Hinh`) VALUES ('$masua','$tensua','$hangsua','$loaisua','$trongluong','$dongia','$tpdd','$loiich','$hinhanh')";
            $result = mysqli_query($conn,$query);
            if (!$result ) die ('<br> <b>Query failed</b>');
            else $msg="Thêm thành công!";
            mysqli_close($conn);
        }
    }
    if(isset($_GET['Reset'])){
        $masua = $tensua = $hangsua = $loaisua = $_GET['trongluong'] = $dongia = $tpdd = $loiich = $hinhanh = "";
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
                
                <form  action="themSua.php" method="get" id="themsuaF" name="themsuaF" enctype="multipart/form-data">
                    <table class="TblInsert">
                        <tr style="background: #FDFE9B;">
                            <th align="center" colspan="2" style="padding: 10px;">
                            <h1>THÊM SỮA MỚI</h1>
                            </th>
                        </tr>
                        <tr>
                            <?php
                                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                                if ($conn->connect_error) {
                                    die('Could not connect to the database!' . $conn->connect_error);
                                }   
                                if(empty($_GET['hangsua'])){
                                    $hangsua = "AB";
                                }
                                else $hangsua = $_GET['hangsua'];
                                $query="SELECT sua.Ma_sua,hang_sua.Ma_hang_sua as'Ma_hang_sua', COUNT(sua.Ma_sua) as'MaS' FROM sua JOIN hang_sua WHERE 
                                sua.Ma_hang_sua = hang_sua.Ma_hang_sua and (sua.Ma_hang_sua = '$hangsua')  ORDER BY sua.Ma_sua;";
                                $result = mysqli_query($conn,$query);
                                if (!$result ) die ('<br> <b>Query failed</b>');
                                $numRows= mysqli_num_rows($result);
                                if($numRows<>0)
                                {
                                    while($rows=mysqli_fetch_array($result)){
                                        $num = str_pad($rows['MaS']+1, 4, '0', STR_PAD_LEFT);
                                        $masua = $rows['Ma_hang_sua'] . $num;
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Mã sữa:</label>
                            </td>
                            <td align="left" >
                            <input type="text" name="masua" size="10" style="height:35px;font-size:23px; text-align:center;" value="<?php if(isset($masua)) echo $masua; ?>" readonly id="masua" >
                            </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Tên sữa:</label>
                            </td>
                            <td align="left" >
                                <input type="text" name="tensua" size="33" style="height:35px;font-size:23px;"  id="tensua">
                               </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Hãng sữa:</label>
                                <span name="ma" style="display: none;"></span>
                            </td>
                            <td align="left" >
                                <select name="hangsua" id="hangsua" style="width:172px; height:35px;" onchange="window.location.href='themSua.php?hangsua='+this.value">
                                    <?php
                                      $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
  
                                      if ($conn->connect_error) {
                                        die('Could not connect to the database!' . $conn->connect_error);
                                      } 
                                      $query="SELECT `Ma_hang_sua`, `Ten_hang_sua` FROM hang_sua";
                                      $result = mysqli_query($conn,$query);
                                      if (!$result ) die ('<br> <b>Query failed</b>');
                                      $numRows= mysqli_num_rows($result);
                                      if($numRows<>0)
                                      {
                                          while($rows=mysqli_fetch_array($result)){
                                              if($_GET['hangsua'] == $rows['Ma_hang_sua']){
                                                  echo "<option value={$rows['Ma_hang_sua']} selected>{$rows['Ten_hang_sua']}</option>";
                                              }
                                              else echo "<option value={$rows['Ma_hang_sua']}>{$rows['Ten_hang_sua']}</option>";
                                          }
                                      }
                                      mysqli_close($conn);
                                  ?>
                                </select>
                                
                            </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Loại sữa:</label>
                            </td>
                            <td align="left" >
                                <select name="loaisua" id="loaisua" style="width:172px; height:35px;">
                                    <?php
                                        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
  
                                        if ($conn->connect_error) {
                                            die('Could not connect to the database!' . $conn->connect_error);
                                        } 
                                        $query="SELECT `Ma_loai_sua`, `Ten_loai` FROM loai_sua";
                                        $result = mysqli_query($conn,$query);
                                        if (!$result ) die ('<br> <b>Query failed</b>');
                                        $numRows= mysqli_num_rows($result);
                                        if($numRows<>0)
                                        {
                                            while($rows=mysqli_fetch_array($result)){
                                                if($loaisua == $rows['Ma_loai_sua']){
                                                    echo "<option value={$rows['Ma_loai_sua']} selected>{$rows['Ten_loai']}</option>";
                                                }
                                                else echo "<option value={$rows['Ma_loai_sua']}>{$rows['Ten_loai']}</option>";
                                            }
                                        }
                                        mysqli_close($conn);
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Trọng lượng:</label>
                            </td>
                            <td align="left" >
                                <input type="text" name="trongluong" size="33" style="height:35px;font-size:23px;" value="<?php if(isset($trongluong)) echo $trongluong; ?>"  id="trongl">
                                <label style="font-size:20px;">&nbsp;(gr hoặc ml)</label>
                               </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Đơn giá:</label>
                            </td>
                            <td align="left" >
                                <input type="text" name="dongia" value="<?php if(isset($dongia)) echo $dongia; ?>" size="33" style="height:35px;font-size:23px;"  id="dongia">
                                <label style="font-size:20px;">&nbsp;(VNĐ)</label>
                               </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Thành phần dinh dưỡng:</label>
                            </td>
                            <td align="left" >
                                <textarea name="tpdd"  style="font-size:20px;" cols="39" rows="8"><?php if(isset($tpdd)) echo $tpdd; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" >
                                <label style="font-size: 25px;padding-left:100px;">Lợi ích:</label>
                            </td>
                            <td align="left" >
                                <textarea name="loiich" style="font-size:20px;"id="" cols="39" rows="8"><?php if(isset($loiich)) echo $loiich; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <label style="font-size: 25px; padding-left:100px;">Hình ảnh:</label>
                            </td>
                            <td align="left" >
                                <input type="text" name="hinhanh" value="<?php if(isset($hinhanh)) echo $hinhanh; ?>" id="hinhanh" size="51" style="height:35px;font-size:16px;" readonly>
                                <input type="file" id="fileInput" name="fileInput" style="display: none;">
                                <input type="button" id="btnOpen" style="width:100px; height:35px; text-align:center; font-size:18px;" name="btnPic" onclick="openFile()" value="Browser..." >
                            </td>
                            <script>
                                function openFile() {
                                    var input = document.getElementById('fileInput');
                                    input.click();
                                    input.onchange = function () {
                                        document.getElementById('hinhanh').value = input.files[0].name;
                                    }
                                }
                            </script>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="padding:10px; padding-top:20px; padding-right:100px;">
                               <input type="submit" name="submit" style="width:130px;height:35px;font-size:23px; background:paleturquoise" value="Thêm mới">
                               <input type="submit" name="Reset" style="width:130px;height:35px;font-size:23px; background:paleturquoise" value="Reset">
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