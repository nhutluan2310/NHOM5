<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai3</title>
</head>
<body>
    <?php 
    function tao_mang($N){
        $a=array();
            for($i=0;$i<$N;$i++)
            {
                $s=rand(0,20);
                $a[$i]=$s;
            }
            return $a;
        
    }
    function xuat_mang($N){
        $mang = implode(" ", $N);
        return $mang;
    }
    function tong_mang($N){
        $tong = 0;
        for($i=0;$i<count($N);$i++){
            $tong += $N[$i];
        }
        return $tong;
    }
    function tim_max($N){
        $max = $N[0];
        for($i=0;$i<count($N);$i++ ){
            if($max < $N[$i]){
                $max = $N[$i];
            }
        }
        return $max;
    }
    function tim_min($N){
        $min = $N[0];
        for($i=0;$i<count($N);$i++ ){
            if($min > $N[$i]){
                $min = $N[$i];
            }
        }
        return $min;
    }

    if(isset($_POST['phatsinh'])){
        $N = $_POST['s1'];
        if(is_numeric($N) and is_int(0+$N)){
            $mang = tao_mang($N);
            $mang_kq = xuat_mang($mang);
            $tong = tong_mang($mang);
            $max = tim_max($mang);
            $min = tim_min($mang);
        }
        else{
            $msg = "Nhập số/số nguyên!";
        }
    }
    
    ?>
    <form method="post" action="mang_phat_sinh_tinh_toan.php">
        <table style="background: rgba(255,250,255,255); border-style: solid;">
            <tr style="background: rgba(167,15,116,255)">
                <th colspan="2" style="color: white">
                    PHÁT SINH MẢNG VÀ TÍNH TOÁN
                </th>
            </tr>
            <tr>
                <td id="td1">
                    Nhập số phần tử:
                </td>
                <td id="td1">
                    <input type="text" name="s1" style="width:70%" value="<?php if(isset($N)) echo $N;?>">
                </td>
            </tr>
            <tr>
                <td id="td1"></td>
                <td id="td1">
                    <input type="submit" name="phatsinh" value="Phát sinh và tính toán" style="background: rgba(252,254,168,255); width:60%">
                </td>
            </tr>
            <tr>
                <td>
                    Mảng:
                </td>
                <td>
                    <input type="text" name="mang" style="width:90%; background: rgba(253,168,165,255)" readonly value="<?php if(isset($mang_kq)) echo $mang_kq;?>">
                </td>
            </tr>
            <tr>
                <td>
                    GTLN (MAX) trong mảng:
                </td>
                <td>
                    <input type="text" name="GTLN" style="width:40%; background: rgba(253,168,165,255)" readonly value="<?php if(isset($max)) echo $max;?>" >
                </td>
            </tr>
            <tr>
                <td>
                    GTNN (MIN) trong mảng:
                </td>
                <td>
                    <input type="text" name="GTNN" style="width:40%; background: rgba(253,168,165,255)" readonly value="<?php if(isset($min)) echo $min;?>"  >
                </td>
            </tr>
            <tr>
                <td>
                    Tổng mảng:
                </td>
                <td>
                    <input type="text" name="tong" style="width:40%; background: rgba(253,168,165,255)" readonly value="<?php if(isset($tong)) echo $tong;?>" >
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    (<span style="color:red; font-weight:bold">Ghi chú:</span> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
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