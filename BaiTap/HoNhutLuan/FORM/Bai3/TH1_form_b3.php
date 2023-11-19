<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền điện</title>
</head>
<body>
    <?php 
        if(isset($_POST['tinh'])){
            $tench = $_POST['tench'];
            $socu = $_POST['socu'];
            $somoi = $_POST['somoi'];
            $dongia = $_POST['dg'];
            if(is_numeric($socu) and is_numeric($somoi))
                if($socu>0 and $somoi>0)
                    if($somoi>=$socu)
                        $sotien = ($somoi - $socu) * $dongia;
                    else $msg = "Chỉ số mới phải lớn hoặc bằng chỉ số cũ";
                else $msg ="Chỉ số cũ và chỉ số mới phải lớn hơn 0";
            else $msg = "Chỉ số cũ và chỉ số mới phải là số!";
        }
    ?>
    <form method="post" name="tiendien">
        <table style="background: beige">
            <tr style="background: orange">
                <th colspan="2" style="color:red">
                    THANH TOAN TIỀN ĐIỆN
                </th>
            </tr>
            <tr>
                <td>
                    Tên chủ hộ: 
                </td>
                <td>
                    <input type="text" name="tench" size="20" value="<?php if(isset($tench)) echo "$tench"?>" >
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số cũ: 
                </td>
                <td>
                    <input type="text" name="socu" size="20"  value="<?php if(isset($socu)) echo "$socu"?>"> (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số mới: 
                </td>
                <td>
                    <input type="text" name="somoi" size="20"  value="<?php if(isset($somoi)) echo "$somoi"?>"> (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Đơn giá: 
                </td>
                <td>
                    <input type="text" name="dg" size="20"  value="<?php if(isset($dongia)) {echo "$dongia";} else {$dongia = 20000; echo "$dongia";}?>"> (VNĐ)
                </td>
            </tr>
            
            <tr>
                <td>
                    Số tiền thanh toán: 
                </td>
                <td>
                    <input type="text" name="sotien" size="20" readonly style="background:lightpink" value="<?php if(isset($sotien)) echo "$sotien"?>"> (VNĐ)
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" name="tinh" value="Tính" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:red"><?php if(isset($msg)) echo "$msg"?></td>
            </tr>
        </table>
    </form>
</body>
</html>