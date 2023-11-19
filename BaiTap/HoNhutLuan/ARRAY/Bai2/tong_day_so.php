<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai2</title>
</head>
<body>
    <?php 
        if(isset($_POST['tongds'])){
            $mang = $_POST['mang'];
            $arr = array();
            $arr = explode(",",$mang);
            $ketqua = 0;
            $flag = 0;
            $msg = "";
            for($i=0;$i<count($arr);$i++){
                if(!is_numeric($arr[$i]))
                    $flag++;
            }
            if($flag!=0){
                $msg = "Nhập số!";
                $ketqua="Error";
            }
            else{
                for($i=0;$i<count($arr);$i++){
                    $ketqua += $arr[$i];
                }
            }
            
        }
    ?>
    <form method="post" name="Bai2.php">
        <table style="background: rgb(179, 255, 198)">
            <tr style="background: rgb(0, 153, 115)">
                <th colspan="2" style="color:white">
                    NHẬP VÀ TÍNH TRÊN DÃY SỐ
                </th>
            </tr>
            <tr>
                <td>
                    Nhập dãy số: 
                </td>
                <td>
                    <input type="text" name="mang" style="width: 80%" value="<?php if(isset($mang)) echo "$mang"?>"> <span style="color: red">(*)</span> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="tongds" value="Tổng dãy số" style="width: 43%; background: rgb(255, 255, 0);">
                </td>
            </tr>
            <tr>
                <td>
                    Tổng dãy số: 
                </td>
                <td>
                    <input type="text" name="sotien" style="width: 40%; background:	rgb(204, 255, 51);" readonly value="<?php if(isset($ketqua)) echo "$ketqua"?>">
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><span style="color: red">(*)</span> Các số được nhập cách nhau bằng dấu ","</td>
            </tr>
            <tr>
                <td colspan="2" style="color:red"><?php if(isset($msg)) echo "$msg"?></td>
            </tr>
        </table>
    </form>
</body>
<style>
    table{
        width: 30%;
    }
    tr{
        width: 80%;
    }
</style>
</html>