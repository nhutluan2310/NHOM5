<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền KARAOKE</title>
</head>
<body>
    <?php 
        if(isset($_POST['tinh'])){
            $batdau = $_POST['batdau'];
            $ketthuc = $_POST['ketthuc'];
            $sotien = $_POST['sotien'];
            $lamtron = ($ketthuc - $batdau) - round(($ketthuc - $batdau),0);
            if(is_numeric($batdau) and is_numeric($ketthuc))
                if($batdau>=10 and $ketthuc<=24)
                    if($batdau<$ketthuc){
                        if($batdau>=10 and $ketthuc<=17)
                            $sotien = (($ketthuc - $batdau) - $lamtron + 1) * 20000;
                        if($batdau>=17 and $ketthuc<=24)
                            $sotien = (($ketthuc - $batdau) - $lamtron + 1) * 45000;
                        if($batdau<=17 and $ketthuc>=17)
                            $sotien = ((17 - $batdau)*20000 + ($ketthuc - 17)*45000);
                    }
                    else $msg = "Giờ kết thúc phải lớn hơn giờ bắt đầu";
                else $msg ="Giờ bắt đầu/giờ kết thúc đang trong giờ nghỉ";
            else $msg = "Nhập số!";
        }
    ?>
    <form method="post" name="tinhtien">
        <table style="background: rgb(0, 153, 153)">
            <tr style="background: rgb(0, 128, 128)">
                <th colspan="2" style="color:white">
                    TÍNH TIỀN KARAOKE
                </th>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu:
                </td>
                <td>
                    <input type="text" name="batdau" size="20"  value="<?php if(isset($batdau)) echo "$batdau"?>"> (h)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc:
                </td>
                <td>
                    <input type="text" name="ketthuc" size="20"  value="<?php if(isset($ketthuc)) echo "$ketthuc"?>"> (h)
                </td>
            </tr>
            <tr>
                <td>
                    Tiền thanh toán: 
                </td>
                <td>
                    <input type="text" name="sotien" size="20" readonly style="background:lightyellow" value="<?php if(isset($sotien)) echo "$sotien"?>"> (VNĐ)
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