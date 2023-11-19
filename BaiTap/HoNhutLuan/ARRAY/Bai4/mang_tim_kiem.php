<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài4</title>
</head>
<body>
    <?php 
        function tao_mang($mang){
            $arr = array();
            $arr = explode(",",$mang);
            return $arr;
        }
        function tim_kiem($mang, $gt_tim){
            $vt = array();
            for($i=0;$i<count($mang);$i++){
                if($gt_tim == $mang[$i]){
                    $vt[] = $i + 1;
                }
            }
            return $vt;
        }
        function in_mang($mang){
            return implode(",  ", $mang);
        }
        function ketquatimkiem($mang, $gt_tim, $vt){
            $ketqua = "";
            if(!empty($vt)){
                if(count($vt) > 2){
                    $ketqua = "Đã tìm thấy $gt_tim tại vị trí thứ ". implode(", ",$vt) . " của mảng";
                }
                else{
                    $ketqua = "Đã tìm thấy $gt_tim tại vị trí thứ ". implode(" và ",$vt) . " của mảng";
                }
            }
            else{
                $ketqua = "Không tìm thấy $gt_tim trong mảng";
            }
            return $ketqua;
        }
        if(isset($_POST['timkiem'])){
            $mang = $_POST['mang'];
            $gt_tim = $_POST['gt_tim'];
            $m = tao_mang($mang);
            $tk = tim_kiem($m,$gt_tim);
            $kqmang = in_mang($m);
            $ketqua = ketquatimkiem($m,$gt_tim,$tk);
        }
    ?>
    <form method="post" name="Bai4">
        <table style="background: rgb(221, 238, 234)">
            <tr style="background: rgb(54,152,151)">
                <th colspan="2" style="color:white">
                    <div class="heading">TÌM KIẾM</div>
                </th>
            </tr>
            <tr>
                <td>
                    Nhập mảng: 
                </td>
                <td>
                    <input type="text" name="mang" style="width: 80%" value="<?php if(isset($mang)) echo "$mang"?>">
                </td>
            </tr>
            <tr>
                <td>
                    Nhập số cần tìm:
                </td>
                <td>
                    <input type="text" name="gt_tim" style="width: 30%;" value="<?php if(isset($gt_tim)) echo "$gt_tim"?>">
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="timkiem" value="Tìm kiếm" style="width: 33%; background: rgba(146,204,252,255);">
                </td>
            </tr>
            <tr>
                <td>
                    Mảng: 
                </td>
                <td>
                    <input type="text" name="kqmang" style="width: 80%" readonly value="<?php if(isset($kqmang)) echo "$kqmang"?>">
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả tìm kiếm: 
                </td>
                <td>
                    <input type="text" name="ketqua" style="width: 80%; background:	rgba(204,252,255,255); color:red" readonly value="<?php if(isset($ketqua)) echo "$ketqua"?>">
            </tr>
            <tr  style="background: rgba(121,208,209,255)">
                <td colspan="2" style="text-align:center">(Các số được nhập cách nhau bằng dấu ",")</td>
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