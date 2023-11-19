<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
</head>
<body>
    <?php 
        if(isset($_POST['tinh'])){
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $tongdiem = $_POST['tong'];
            $diemchuan = $_POST['diemchuan'];
            $ketqua = "";
            if(is_numeric($toan) and is_numeric($ly) and is_numeric($hoa))
                if($toan>=0 and $ly>=0 and $hoa>=0 and $toan<=10 and $ly<=10 and $hoa<=10)
                    if($diemchuan<=30)
                        $tongdiem = $toan + $ly + $hoa;
                    else $msg = "Điểm chuẩn phải nhỏ hơn bằng 30";
                else $msg ="Nhập điểm phải từ 0 - 10";
            else $msg = "Nhập số!";
            if($toan !=0 and $ly !=0 and $hoa !=0 and $tongdiem>=$diemchuan)
                $ketqua = "Đậu";
            else $ketqua = "Rớt";
        }
    ?>
    <form method="post" name="ketqua">
        <table style="background: pink">
            <tr style="background: rgb(204, 0, 102)">
                <th colspan="2" style="color:white">
                    KẾT QUẢ THI ĐẠI HỌC
                </th>
            </tr>
            
            <tr>
                <td>
                    Toán: 
                </td>
                <td>
                    <input type="text" name="toan" size="20"  value="<?php if(isset($toan)) echo "$toan"?>">
                </td>
            </tr>
            <tr>
                <td>
                    Lý: 
                </td>
                <td>
                    <input type="text" name="ly" size="20"  value="<?php if(isset($ly)) echo "$ly"?>"> 
                </td>
            </tr>
            <tr>
                <td>
                    Hoá: 
                </td>
                <td>
                    <input type="text" name="hoa" size="20"  value="<?php if(isset($hoa)) echo "$hoa"?>"> 
                </td>
            </tr>
            <tr>
                <td>
                    Điểm chuẩn: 
                </td>
                <td>
                    <input type="text" name="diemchuan" size="20" style="color:red" value="<?php if(isset($diemchuan)) echo "$diemchuan"?>">
                </td>
            </tr>
            <tr>
                <td>
                    Tổng điểm:
                </td>
                <td>
                    <input type="text" name="tong" size="20" readonly style="background:lightyellow" value="<?php if(isset($tongdiem)) echo "$tongdiem"?>"> 
                </td>
            </tr>
            
            <tr>
                <td>
                    Kết quả thi
                </td>
                <td>
                    <input type="text" name="ketqua" size="20" readonly style="background:lightyellow" value="<?php if(isset($ketqua)) echo "$ketqua"?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" name="tinh" value="Xem kết quả" size="60">
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