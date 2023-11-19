<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền KARAOKE</title>
</head>
<body>
    <?php 
        #set timeline in VietNam
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if(isset($_POST['tinh'])){
            $batdau = $_POST['batdau'];
            $ketthuc = $_POST['ketthuc'];
            $sotien = $_POST['sotien'];
            $giobd = explode(":",$batdau)[0];
            $phutbd = explode(":",$batdau)[1];
            $giokt = explode(":",$ketthuc)[0];
            $phutkt = explode(":",$ketthuc)[1];
            if(is_numeric($giobd) and is_numeric($phutbd) and is_numeric($giokt) and is_numeric($phutkt))
                if($giobd>=10 and $giokt<=24)
                    if($giobd<$giokt or $phutbd!=$phutkt){
                        if($giobd>=10 and $giokt<=17)
                        {
                            if($phutbd<=$phutkt){
                                $sophut = ($giokt - $giobd)*60 + ($phutkt - $phutbd);
                                $sotien = round(($sophut * 20000)/60,3);
                            }
                            if($phutkt<$phutbd){
                                $sophut = ($giokt - $giobd)*60 - ($phutbd - $phutkt);
                                $sotien = round(($sophut * 20000)/60,3);
                            }
                        }
                        if($giobd>=17 and $giokt<=24)
                        {
                            if($phutbd<=$phutkt){
                                $sophut = ($giokt - $giobd)*60 + ($phutkt - $phutbd);
                                $sotien = round(($sophut * 45000)/60,3);
                            }
                            if($phutkt<$phutbd){
                                $sophut = ($giokt - $giobd)*60 - ($phutbd - $phutkt);
                                $sotien = round(($sophut * 45000)/60,3);
                            }
                        }
                        if($giobd<=17 and $giokt>=17)
                        {
                            $sotien1 = (((17 - $giobd)*60 - $phutbd)*20000)/60;
                            $sotien2 = ((($giokt - 17)*60 + $phutkt)*45000)/60;
                            $sotien = round($sotien1 + $sotien2,3);
                        }
                    }
                    else $msg = "Giờ kết thúc phải lớn hơn giờ bắt đầu/Chưa hát được tí nào!";
                else $msg ="Giờ bắt đầu/giờ kết thúc đang trong giờ nghỉ";
            else $msg = "Nhập số!";
        }
    ?>
    <form method="post" name="tinhtien">
        <table style="background: rgb(0, 255, 255)">
            <tr style="background: rgb(102, 0, 204)">
                <th colspan="2" style="color:black">
                    <h1>TÍNH TIỀN KARAOKE</h1>
                </th>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu:
                </td>
                <td>
                    <input type="time" name="batdau" style="width: 45%" value="<?php if(isset($batdau)) echo "$batdau"?>"> (hh:mm)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc:
                </td>
                <td>
                    <input type="time" name="ketthuc" style="width: 45%" value="<?php if(isset($ketthuc)) echo "$ketthuc"?>"> (hh:mm)
                </td>
            </tr>
            <tr>
                <td>
                    Tiền thanh toán: 
                </td>
                <td>
                    <input type="text" name="sotien" style="width: 45%; background:	rgb(255, 255, 0);" readonly value="<?php if(isset($sotien)) echo "$sotien"?>"> (VNĐ)
                </td> 
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" name="tinh" value="Tính tiền" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:red"><?php if(isset($msg)) echo "$msg"?></td>
            </tr>
        </table>
    </form>
</body>
<style>
    table{
        width: 40%;
    }
    tr{
        width: 80%;
    }
</style>
</html>