<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
    <style>
        td{
            text-align: center;
        }
        img{
            width: 150px;
            height:150px;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
        $nam1 = $_POST['duong'];
        $mang_can = array("Quý", "Giáp","Ất","Bính","Đinh","Mậu",
        "Kỷ","Canh","Tân","Nhâm");
        $mang_chi = array("Hợi","Tí","Sửu","Dần","Mão","Thìn","Tỵ",
        "Ngọ","Mùi","Thân","Dậu","Tuất");
        $mang_hinh = array("hoi.jpg","chuot.jpg","suu.jpg","dan.jpg",
        "meo.jpg","thin.jpg","ty.jpg","ngo.jpg","mui.jpg",
        "than.jpg","dau.jpg","tuat.jpg");
        if($nam1 !=""){
            if(is_numeric($nam1) and is_int(0+$nam1) and $nam1>-1){
                if($nam1 >=0 and $nam1 >=1700){
                    $nam = $nam1 - 3;
                    $can = $nam%10;
                    $chi = $nam%12;
                    $nam_al = $mang_can[$can];
                    $nam_al = $nam_al ." " . $mang_chi[$chi];
                    $hinh = $mang_hinh[$chi];
                    $hinh_anh = "<img src='12con_giap/$hinh'>";
                }
                else{
                    $msg = "Vui lòng nhập năm dương lịch từ năm 1700";
                }
            }
            else{
                $msg = "Năm dương lịch phải là số nguyên dương! Vui lòng nhập lại.";
            }
        }
        else{
            $msg = "Vui lòng nhập năm dương lịch!";
            $nam1="";
        }
    }
    ?>
    <form action="Bai7.php" method="post">
    <table  style="background: #B9EEFF">
            <tr style="background: #0B62CC">
                <th align="center" style="color:white" colspan="3">
                    TÍNH NĂM ÂM LỊCH
                </th>
            </tr>
            <tr style="background: #B9EEFF">
                <td >
                    Năm dương lịch
                </td>
                <td></td>
                <td>Năm âm lịch</td>
            </tr>
            
            <tr style="background: #B9EEFF">
                <td>
                    <input type="text" step="any" size="20" name="duong" style="background: #FFFF;width:130px;height:20px;" id="duong" value="<?php
                        if(isset($nam1)) echo $nam1; ?>">
                </td>
                <td style="width:100px;" >
                    <input type="submit" value="=>" style="background:#FEFED7; height:25px;" id="submit" name="submit">
                </td>
                <td>
                    <input type="text" step="any" size="20" name="am" style="background: #FEFED7; color:red;width:130px;height:20px;" id="am" readonly value="<?php
                        if(isset($nam_al)) echo $nam_al; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php if(isset($hinh_anh)) echo $hinh_anh; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" style="color:red;" >
                    <?php if(isset($msg)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>