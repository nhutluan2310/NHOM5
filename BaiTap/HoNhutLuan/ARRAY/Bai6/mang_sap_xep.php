<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài6</title>
</head>
<body>
    <?php 
        function tao_mang($mang){
            $arr = array();
            $arr = explode(",", $mang);
            return $arr;
        }
        function hoan_vi(&$a, &$b){
            $temp = $a;
            $a = $b;
            $b = $temp; 
        }
        function sap_tang($mang){
            for($i=0; $i<count($mang); $i++){
                for($j=$i+1; $j<count($mang); $j++){
                    if($mang[$i] > $mang[$j]){
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                } 
            }
            return $mang;
        }
        function sap_giam($mang){
            for($i=0; $i<count($mang); $i++){
                for($j=$i+1; $j<count($mang); $j++){
                    if($mang[$i] < $mang[$j]){
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                } 
            }
            return $mang;
        }
        function in_mang($mang){
            return implode(",  ", $mang);
        }
        if(isset($_POST['sapxep'])){
            $mang = $_POST['mang'];
            $m = tao_mang($mang);
            $tangdan = sap_tang($m);
            $kqtangdan = in_mang($tangdan);
            $giamdan = sap_giam($m);
            $kqgiamdan = in_mang($giamdan);
        }

    ?>
    <form method="post" name="Bai5">
        <table style="background: rgba(209,222,212,255)">
            <tr style="background: rgb(54,152,151)">
                <th colspan="2" style="color:white">
                    <div class="heading">SẮP XẾP MẢNG</div>
                </th>
            </tr>
            <tr>
                <td>
                    Nhập mảng: 
                </td>
                <td>
                    <input type="text" name="mang" style="width: 80%" value="<?php if(isset($mang)) echo "$mang"?>"><span style="color: red; font-weight:bold"> (*)</span> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="sapxep" value="Sắp xếp tăng/giảm" style="width: 55%; background: rgba(254,254,254,255);">
                </td>
            </tr>
            <tr style="background: rgba(203,231,229,255)">
                <td colspan="2" style="color:red; font-weight:bold">Sau khi sắp xếp:</td>
            </tr>
            <tr style="background: rgba(203,231,229,255)">
                <td>
                    Tăng dần:
                </td>
                <td>
                    <input type="text" name="kqmang" style="width: 80%;  background: rgba(202,251,251,255);" readonly value="<?php if(isset($kqtangdan)) echo "$kqtangdan"?>">
                </td>
            </tr>
            <tr style="background: rgba(203,231,229,255)">
                <td>
                    Giảm dần: 
                </td>
                <td>
                    <input type="text" name="ketqua" style="width: 80%; background:	rgba(202,251,251,255);" readonly value="<?php if(isset($kqgiamdan)) echo "$kqgiamdan"?>">
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
<style >
    table{
        width: 40%;
    }
    tr{
        width: 60%;
    }
    .heading{
        margin-top: 5px; 
        margin-bottom: 5px;
        font-size: 30px;
    }
</style>
</html>