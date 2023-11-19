<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $ds = $_POST['ds'];
        $sum="";
        $arr = [];
        $msg="";

        if($ds!=""){
            
            $arr = explode(",",$ds);
            foreach ($arr as $i){
                if(!is_numeric($i)){
                    $msg="Nhập số only!";
                    $sum="";
                    break;
                }
                else $sum=round((double)$sum+$i,3);
            }
        }
        else{
            $msg = "Vui lòng nhập dãy số!";
        }

    }
    ?>
    <form action="Bai2.php" method="post">
    <table style="background: #CCD9CF;">
            <tr style="background: #2D9498;">
                <th align="center" style="color:white" colspan="2">
                    NHẬP VÀ TÍNH TRÊN DÃY SỐ
                </th>
            </tr>
            <tr>
                <td>
                    Nhập dãy số:
                </td>
                <td>
                    <input type="text" step="any" name="ds" size="20" id="ds" value="<?php
                    if(isset($ds)) echo "$ds"; ?>"><span style="Color:red;">(*)</span>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Tổng dãy số" style="background:#F7F48E;" name="submit">
                </td>
            </tr>
            
            <tr>
                <td>
                    Tổng dãy số:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="sum" id="sum" style="background: #C4F998; color:red;" readonly value="<?php
                    if(isset($sum)) echo"$sum"; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"  >
                    <span style="color:red;">(*)</span> Các số được nhập cách nhau bằng dấu ","
                </td>
            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($msg)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>