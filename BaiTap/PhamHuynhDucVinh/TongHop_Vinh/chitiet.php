<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản lý Sữa</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/solid.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        width:48%;
        float:left;
        margin-left:1%;
        margin-right:1%;
    }
    .body-right{
        width: 23%;
        float: right;
        margin-left: 1%;
        margin-right: 1%;
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
    .Tblsearch{
        margin-top:15px;
    }
    .Tblsearch select{
        font-size: 20px;
        text-align: center;
    }
    .Tblsearch label{
        font-size:22px;
    }
    .Tblsearch #search{
        margin-top:10px;
        font-size: 20px;
        width: 350px;
    }
    .Tblsearch #submit{
        font-size:20px;
        width: 110px;
        padding:2px;
        margin-left: 10px;
        background-color: pink;
    }
    
    #title{
        font-size: 25px;
        color: #0389ff;
        padding: 15px;
    }
    .txt {
        font-size: 23px;
        padding: 15px;
        padding-bottom: 120px;
        text-align: justify;
    }
    .txt p{
        padding: 10px 0px;
    }
</style>

</head>
<body>
<?php  
    include 'config.php';
    if(isset($_GET['submit'])){
        $tim= $_GET['search'];
        $loaisua = $_GET['loaisua'];
        $hangsua = $_GET['hangsua']; 
    }
    $rowsPerPage=6;
    if ( ! isset($_GET['page']))
        $_GET['page'] = 1;
    $offset =($_GET['page']-1)*$rowsPerPage;    
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
            <div class="content">
            <?php
                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

                if ($conn->connect_error) {
                die('Could not connect to the database!' . $conn->connect_error);
                } 
                if(isset($_GET['milk'])){
                    $milk = $_GET['milk'];
                    $query1="SELECT `sua`.`Hinh` as'Hình',`sua`.`Ten_sua` as 'Tên Sữa', `sua`.`TP_Dinh_Duong` as 
                        'Thành phần dinh dưỡng', `sua`.`Loi_ich` as'Lợi ích',`sua`.`Trong_luong` as 'Trọng lượng', 
                        `sua`.`Don_gia` as'Đơn giá', `hang_sua`.`Ten_hang_sua` FROM sua CROSS JOIN hang_sua CROSS 
                        JOIN loai_sua WHERE `sua`.`Ma_hang_sua`=`hang_sua`.`Ma_hang_sua` 
                        and `sua`.`Ma_loai_sua`= `loai_sua`.`Ma_loai_sua` and (`sua`.`Ma_sua` = '$milk') GROUP BY sua.Ma_sua";
                    $result1 = mysqli_query($conn,$query1);
                    if (!$result1 ) die ('<br> <b>Query failed</b>');
                    $numRows= mysqli_num_rows($result1);
                    if($numRows<>0)
                    {
                        echo "<div style='overflow-x: auto;'>
                            <table >";
                        $field_info = mysqli_fetch_fields($result1);
                        while($rows=mysqli_fetch_array($result1))
                        { 
                            echo "<tr style='background:#FEFD98;'>
                                <th id='title' colspan='3' align='left'><h2>{$rows['Tên Sữa']} - {$rows['Ten_hang_sua']}</h2></th>
                                </tr>";
                            echo "<tr>
                                <td style='background:white;' colspan='2' align='center'><img src=Hinh_sua/{$rows['Hình']} style='padding:15px;' height="."400px"." width="."400px"."></td>
                                <td class='txt' colspan='1'>";
                                    
                            foreach ($field_info as $val) {                                  
                                if($val->name=="Thành phần dinh dưỡng"){
                                    echo "<b>";
                                    echo $val->name .":";
                                    echo "</b><br>";
                                    echo "<p>{$rows['Thành phần dinh dưỡng']}</p>";
                                }
                                if($val->name=="Lợi ích"){
                                    echo "<br><b>";
                                    echo $val->name .":";
                                    echo "</b><br>";
                                    echo "<p>{$rows['Lợi ích']}</p>";
                                }  
                                if($val->name=="Trọng lượng"){
                                    echo "<br><b>". $val->name .":</b> ";
                                    echo "<span style='color:red;'>{$rows['Trọng lượng']} gr </span>";
                                }
                                if($val->name=="Đơn giá"){
                                    echo "<b>- ". $val->name .":</b> ";
                                    echo "<span style='color:red;'>{$rows['Đơn giá']} VNĐ</span>";
                                }
                            }  
                            echo "</td></tr>";
                        }
                        echo"</table> </div>";
                    }
                }
                mysqli_close($conn);
            ?>
                <div class="clear"></div>
            </div>
        </div>
        <div class="body-right">
            <div class="content">
                <div class="banner">
                    <img src="Images/banner26.jpg" width="430px" height="210px" alt="banner1">
                    <img src="Images/banner28.jpg" width="430px" height="220px" alt="banner2">
                    <img src="Images/banner25.jpg" width="430px" height="200px" alt="banner3">
                    <img src="Images/banner29.jpg" width="430px" height="200px" alt="banner3">
                </div>
                <div class="clear"></div>
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