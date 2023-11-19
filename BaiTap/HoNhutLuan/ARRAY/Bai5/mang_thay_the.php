<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài5</title>
</head>
<body>
    <?php 
        function tao_mang($mang){
            $arr = array();
            $arr = explode(", ", $mang);
            return $arr;
        }
        function in_mang($mang){
            return implode("  ", $mang);
        }
        function thay_the($mang, $cu, $moi){
            for($i=0;$i<count($mang);$i++){
                if($mang[$i] == $cu){
                    $mang[$i] = $moi;
                }
            }
            return $mang;
        }
        if(isset($_POST['thaythe'])){
            $mang = $_POST['mang'];
            $cu = $_POST['gtctt'];
            $moi = $_POST['gttt'];
            if(!empty($cu) and !empty($moi)){
                $m = tao_mang($mang);
                $mang_cu = in_mang($m);
                $thay_the = thay_the($m,$cu,$moi);
                $mang_moi = in_mang($thay_the);
            }
            else{
                $msg = "Nhập giá trị cần thay thế/ giá trị thay thế!";
            }
        }
    ?>
    <form method="post" action="mang_thay_the.php">
        <table style="background: rgba(255,250,255,255); border-style: solid;">
            <tr style="background: rgba(167,15,116,255)">
                <th colspan="2" style="color: white">
                    THAY THẾ
                </th>
            </tr>
            <tr>
                <td id="td1">
                    Nhập các phần tử:
                </td>
                <td id="td1">
                    <input type="text" name="mang" style="width:90%" value="<?php if(isset($mang)) echo $mang;?>">
                </td>
            </tr>
            <tr>
                <td id="td1">
                    Giá trị cần thay thế:
                </td>
                <td id="td1">
                    <input type="text" name="gtctt" style="width:40%" value="<?php if(isset($cu)) echo $cu;?>">
                </td>
            </tr>
            <tr>
                <td id="td1">
                    Giá trị thay thế:
                </td>
                <td id="td1">
                    <input type="text" name="gttt" style="width:40%" value="<?php if(isset($moi)) echo $moi;?>">
                </td>
            </tr>
            <tr>
                <td id="td1"></td>
                <td id="td1">
                    <input type="submit" name="thaythe" value="Thay thế" style="background: rgba(252,254,168,255)">
                </td>
            </tr>
            <tr>
                <td>
                    Mảng cũ:
                </td>
                <td>
                    <input type="text" name="mangcu" style="width:90%; background: rgba(253,168,165,255)" readonly value="<?php if(isset($mang_cu)) echo $mang_cu;?>">
                </td>
            </tr>
            <tr>
                <td>
                    Mảng sau khi thay thế:
                </td>
                <td>
                    <input type="text" name="mangm" style="width:90%; background: rgba(253,168,165,255)" readonly value="<?php if(isset($mang_moi)) echo $mang_moi;?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    (<span style="color:red; font-weight:bold">Ghi chú:</span> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:red"><?php if(isset($msg)) echo "$msg"?></td>
            </tr>
        </table>
    </form>
</body>
<style>
    #td1{
        background: rgba(254,218,244,255);
    }
    table{
        width: 500px;
    }

</style>
</html>