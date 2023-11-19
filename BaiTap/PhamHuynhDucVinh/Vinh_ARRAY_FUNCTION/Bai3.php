<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <style>
        #pt, #txt, #min, #max, #sum{
            width:350px;
            
        }
    </style>
    <?php
    // function taoMang($n)
    // {
    //     $mang = array();
    //     for ($i = 0; $i < $n; $i++) {
    //         $mang[] = rand(0, 20); // Thêm phần tử ngẫu nhiên từ 0 đến 20 vào mảng
    //     }
    //     return $mang;
    // }

    // // Hàm xuất mảng
    // function xuatMang($mang)
    // {
    //     return implode(', ', $mang); // Chuyển mảng thành chuỗi và ngăn cách bằng dấu phẩy
    // }

    // // Hàm tính tổng mảng
    // function tinhTong($mang)
    // {
    //     return array_sum($mang); // Tính tổng các phần tử trong mảng
    // }

    // // Hàm tìm giá trị lớn nhất trong mảng
    // function timMax($mang)
    // {
    //     return max($mang); // Tìm giá trị lớn nhất trong mảng
    // }

    // // Hàm tìm giá trị nhỏ nhất trong mảng
    // function timMin($mang)
    // {
    //     return min($mang); // Tìm giá trị nhỏ nhất trong mảng
    // }
    function taomang($n){
        if(is_numeric($n) and $n>0 and is_int(0+$n)){ //a
            $arr=array();
            for($i=0;$i<$n;$i++) //b
            {
                $arr[]=rand(0,20);
               
            }
        }
        else{
           
            return $arr=array();
        }
        return $arr;
    }
    function xuatmang($arr){
        if(count($arr)!=0){
            $xuat = implode(" ", $arr);
        }
        else{
            return $arr;
        }
        return $xuat;
    }
    function tinhtong($arr){
        $sum = 0;
        for($i=0;$i<count($arr);$i++){
            $sum = $sum + $arr[$i];
        }
        return $sum;
    }
    function timmin($arr){
        $min = $arr[0];
        for($i=0;$i<count($arr);$i++){
            if($min>$arr[$i]){
                $min = $arr[$i];
            }
        }
        return $min;
    } 
    function timmax($arr){
        $max = $arr[0];
        for($i=0;$i<count($arr);$i++){
            if($max<$arr[$i]){
                $max = $arr[$i];
            }
        }
        return $max;
    }
        if(isset($_POST['submit'])){
            $pt = $_POST['pt'];
            $tong = 0;
            $msg ="";
            $txt=taomang($pt);
            if(xuatmang($txt)){
                $xm = xuatmang($txt);
                $tong = tinhtong($txt);
                $min = timmin($txt);
                $max = timmax($txt);
                
            }
            else{ 
                $msg = "Vui lòng nhập số nguyên lớn hơn 0!";
            }
    }
    ?>
<form action="Bai3.php" method="post">
    <table style="background: #FFFAFF;">
            <tr style="background: #A70F74">
                <th align="center" style="color:white" colspan="2">
                    PHÁT SINH MẢNG VÀ TÍNH TOÁN
                </th>
            </tr>
            <tr>
                <td style="background:#FED9F4;">
                    Nhập số phần tử:
                </td>
                <td style="background:#FED9F4;">
                    <input type="text" step="any" name="pt" size="20" id="pt" value="<?php
                    if(isset($pt)) echo "$pt"; ?>">
                </td>
            </tr>
            
            <tr>
                <td style="background:#FED9F4;"> </td>
                <td style="background: #FED9F4;">
                    <input type="submit" value="Phát sinh và tính toán" style="background:#F7F48E; width:180px;" id="submit" name="submit">
                </td>
            </tr>
            
            <tr>
                <td>
                    Mảng:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="txt" id="txt" style="background: #FEA5A7;" readonly value="<?php
                        if(isset($xm)) echo $xm; ?>">
                </td>
            </tr>
             
            <tr>
                <td>
                    GTLN (MAX) trong mảng:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="max" id="max" style="background: #FEA5A7;" readonly value="<?php
                    if(isset($max)) echo"$max"; ?>">
                </td>
            </tr>
             
            <tr>
                <td>
                    GTNN (MIN) trong mảng:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="min" id="min" style="background: #FEA5A7;" readonly value="<?php
                    if(isset($min)) echo"$min"; ?>">
                </td>
            </tr>
             
            <tr>
                <td>
                    Tổng mảng:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="sum" id="sum" style="background: #FEA5A7;" readonly value="<?php
                    if(isset($tong)) echo $tong; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size: 14px;" >
                <span >(<b style="color:red;">Ghi chú:</b> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($msg)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>