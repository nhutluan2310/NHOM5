<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sữa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            background-color: #ebf7fc;
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
        .header-left h3{
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
            background-color: #1435c3;
            border: 1px solid #333;
            line-height: 40px;
            min-height: 40px;
            padding-left: 20px;
            font-weight: bold;
            font-size: 23px;
        }
        #menu li{
            display: inline-block;
            text-transform: uppercase;
            color:white;
            padding-left: 10px;
        }
        #menu li a{
            color: white;
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
        .content h3{
            color: #AAA;
            font-size: 25px;
            width: 100%;
            padding: 5px;
            border-bottom: 1px solid #AAA;   
        }
        .content h3:hover{
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
        .news{
            list-style-type: none;
        }
        .news li{
            padding-top: 15px;
            padding-bottom: 15px;
            border-bottom: 2px dashed #CCC;
        }
        .news img{
            width: 15%;
            float: left;
            margin-right: 1%;
        }
        .news li {
            width: 80%;
            float: left;
            line-height: 1.5;
            font-size: 20px;
        }
        #last_layout{
            border-bottom: none;
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
           
        }
        table td,th{
            border:1px solid black;
            padding: 10px;
        }
    </style>

</head>
<body>
    
    <?php  
        require 'config.php'; 
        if(isset($_GET['milk'])){
            $milk = $_GET['milk'];
            header("Location: chitiet.php?milk=$milk");
        }
    ?>
    <div class="container">
        <div class="header">
            <a href="#"><img src="Images/bannerDL.png" width="100%" height="80%" alt="BannerDL"></a>
            <div class="clear"></div>
            <ul id="menu">
                <li>
                    <a href="index.php">
                        <i style="font-size: 30px; " class="fa fa-fw fa-home"></i>
                        Trang chủ
                    </a>
                </li>
                <li>|</li>
                <li>
                    <a href="themSua.php">
                        <i style="font-size: 30px; " class="fa fa-fw fa-pen-to-square"></i>  
                        Thêm sữa mới
                    </a>
                </li>
                <li>|</li>
                <li>
                    <a href="suabanchay.php">
                        <i style="font-size: 30px; " class="fa fa-fw fa-star"></i>  
                        Sữa bán chạy
                    </a>
                </li>
                <li>|</li>
                <li>
                    <a href="Timkiem.php">
                        <i style="font-size: 30px; " class="fa fa-fw fa-search"></i>  
                        Tìm kiếm sữa
                    </a>
                </li>
                <li>|</li>
                <li>
                    <a href="themKH.php">
                        <i style="font-size: 30px; " class="fa fa-fw fa-user"></i>    
                        Thêm khách hàng
                    </a>
                </li>
            </ul>
        </div>
        <div class="body" >
            <div class="body-left" style="background: #FDFDCA;">
                <div class="content" >
                        <h3 style="background:pink;color:red">Sản phẩm theo hãng sữa</h3>
                        <?php
                           $query="SELECT  `Ma_hang_sua`, `Ten_hang_sua` FROM hang_sua";
                           $result = mysqli_query($conn,$query);
                           if (!$result ) die ('<br> <b>Query failed</b>');
                           $numRows= mysqli_num_rows($result);
                           if($numRows<>0)
                           {
                              echo "<ul>";
                              $num=1;
                              while($rows=mysqli_fetch_array($result)){
                                  echo "<li><span class='num num-$num'>$num</span>";
                                  echo "<a href=" . $_SERVER['PHP_SELF'] . "?typed=" . "{$rows['Ma_hang_sua']}" . ">&nbsp;{$rows['Ten_hang_sua']}</a>";
                                  echo "</li>";
                                  $num++;
                              }
                              echo "</ul>";
                           }
                           mysqli_close($conn);
                        ?>
                </div>
                <div class="content">
                        <h3 style="background:pink;color:red">Sản phẩm theo loại</h3>
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
                              echo "<ul>";
                              $num=1;
                              while($rows=mysqli_fetch_array($result)){
                                 
                                  echo "<li><span class='num num-$num'>$num</span>";
                                  echo "<a href=" . $_SERVER['PHP_SELF'] . "?typed=" . "{$rows['Ma_loai_sua']}" . ">&nbsp;{$rows['Ten_loai']}</a>";
                                  echo "</li>";
                                  $num++;
                              }
                              echo "</ul>";
                           }
                           mysqli_close($conn);
                        ?>
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
                        //phan trang
                        $rowsPerPage=6;
                        if ( ! isset($_GET['page']))
                            $_GET['page'] = 1;
                        $offset =($_GET['page']-1)*$rowsPerPage;
                        //$query="Select * from sua LIMIT $offset, $rowsPerPage";
                        if(!isset($_GET['typed'])){
                            $query="SELECT `sua`.`Ten_sua`, `sua`.`Trong_luong`,`sua`.`Hinh`, `sua`.`Don_gia`,`sua`.`Ma_sua` 
                            FROM sua CROSS JOIN hang_sua CROSS JOIN loai_sua WHERE `sua`.`Ma_hang_sua`=`hang_sua`.`Ma_hang_sua` and `sua`.`Ma_loai_sua`= `loai_sua`.`Ma_loai_sua`  LIMIT $offset, $rowsPerPage;";
                        
                            $result = mysqli_query($conn,$query);
                            if (!$result ) die ('<br> <b>Query failed</b>');
                            $numRows= mysqli_num_rows($result);
                            $maxPage = ceil($numRows / $rowsPerPage);
                            if($numRows<>0)
                            {
                                echo "<div style='overflow-x: auto;'>
                                    <table>
                                        <tr style='background:pink;'><th colspan='7' align='center'><p class='center'>Danh mục sản phẩm</p></th></tr>
                                        <tr>
                                            <th align='center'>STT</th>
                                            <th align='center'>Hình</th>
                                            <th align='center'>Tên Sữa</th>
                                            <th align='center'>Trọng Lượng<br>(gr)</th>
                                            <th align='center'>Đơn giá<br>(VNĐ)</th>	
                                    </tr>";
                                $temp=$_GET['page']*$rowsPerPage;// danh so thu tu
                                if($temp<=$rowsPerPage) $num=0;
                                else $num=$temp-$rowsPerPage;
                                while($rows=mysqli_fetch_array($result))
                                {
                                    $num++;
                                    echo "<tr>";
                                        echo "<td align='center'>".$num."</td>";
                                        echo "<td align='center'>"."<img src=Hinh_sua/{$rows['Hinh']} width="."100"."></td>";
                                        echo "<td align='center'><a href="."chitiet.php"."?milk=".$rows['Ma_sua'].">{$rows['Ten_sua']}</a></td>";
                                        echo "<td align='center'>{$rows['Trong_luong']} </td>";
                                        echo "<td align='center'>{$rows['Don_gia'] } </td>";
                                    echo "</tr>";
                                }
                                echo"</table> </div>";
                                $re = mysqli_query($conn, 'select * from sua');
                                $numRows = mysqli_num_rows($re);
                                $maxPage = floor($numRows/$rowsPerPage) + 1;
                                echo "<div class='center'>";
                                if ($_GET['page'] > 1){
                                    echo "<a  href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">Back</a> "; //gắn thêm nút Back
                                }
                                for ($i=1 ; $i<=$maxPage ; $i++)
                                {
                                    if ($i == $_GET['page'])
                                    {
                                        echo '<b class="center">Trang'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
                                    }
                                    else {
                                        echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . ">Trang " . $i . "</a> ";
                                    }
                                }
                                if ($_GET['page'] < $maxPage) {
                                    echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">Next</a>";  //gắn thêm nút Next
                                }
                                echo"</div>";
                            }
                        }
                        else{
                            $name = $_GET['typed'];
                            $query1="SELECT `sua`.`Hinh` as'Hình',`sua`.`Ten_sua` as 'Tên Sữa', `sua`.`Trong_luong` as 'Trọng lượng', `sua`.`Don_gia` as'Đơn giá', `sua`.`Ma_sua`
                            FROM sua CROSS JOIN hang_sua CROSS JOIN loai_sua WHERE `sua`.`Ma_hang_sua`=`hang_sua`.`Ma_hang_sua` and `sua`.`Ma_loai_sua`= `loai_sua`.`Ma_loai_sua` and (`sua`.`Ma_hang_sua`  = '$name' or `sua`.`Ma_loai_sua` = '$name')  LIMIT $offset, $rowsPerPage;";
                            $result1 = mysqli_query($conn,$query1);
                            if (!$result1 ) die ('<br> <b>Query failed</b>');
                            $numRows1= mysqli_num_rows($result1);
                            if($numRows1<>0){
                                echo "<div style='overflow-x: auto;'>
                                <table>
                                    <tr style='background:pink;'><th colspan='7' align='center'><p class='center'>Danh mục sản phẩm</p></th></tr>
                                ";

                                $temp=$_GET['page']*$rowsPerPage;// danh so thu tu
                                if($temp<=$rowsPerPage) $num=0;
                                else $num=$temp-$rowsPerPage;

                                $field_info = mysqli_fetch_fields($result1);
                                echo "<tr>";
                                echo '<th align="center">STT</th>';
                                foreach ($field_info as $val) {                                
                                    if($val->name!="Ma_sua")
                                        echo '<th align="center">'.$val->name;
                                    if($val->name=="Trọng lượng"){
                                        echo "<br>(gr)";
                                    }
                                    if($val->name=="Đơn giá"){
                                        echo "<br>(VNĐ)";
                                    }
                                    echo '</th>';
                                }
                                echo "</tr>";

                                while($rows=mysqli_fetch_array($result1))
                                {
                                    $num++;
                                    echo "<tr>";
                                        echo "<td align='center'>".$num."</td>";
                                        echo "<td align='center'>"."<img src=Hinh_sua/{$rows['Hình']} width="."150"."></td>";
                                        echo "<td align='center'><a href="."chitiet.php"."?milk=".$rows['Ma_sua'].">{$rows['Tên Sữa']}</a></td>";
                                        echo "<td align='center'>{$rows['Trọng lượng']} </td>";
                                        echo "<td align='center'>{$rows['Đơn giá'] } </td>";
                                    echo "</tr>";
                                }
                                echo"</table> </div>";
                                $maxPage = floor($numRows1/$rowsPerPage) + 1;
                                echo "<div class='center'>";
                                if ($_GET['page'] > 1){
                                    echo "<a  href=" .$_SERVER['PHP_SELF'] . "?page=".($_GET['page']-1)."&typed=$name".">Back</a> "; //gắn thêm nút Back
                                }
                                for ($i=1 ; $i<=$maxPage ; $i++)
                                {
                                    if ($i == $_GET['page'])
                                    {
                                        echo '<b class="center">Trang'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
                                    }
                                    else {
                                        echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . "&typed=$name" . ">Trang " . $i . "</a> ";
                                    }
                                }
                                if ($_GET['page'] < $maxPage) {
                                    echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . "&typed=$name" . ">Next</a>";  //gắn thêm nút Next
                                }
                                echo"</div>";
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