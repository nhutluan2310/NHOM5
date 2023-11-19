<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 7</title>
    <link href="../Bai6/style.css" rel="stylesheet" type="text/css">
</head>
<body>


<?php
$pheptinh=$so1=$so2=$ketqua="";
if(isset($_POST["submit"])&& isset($_POST["phep_tinh"]))
{
    $so1=$_POST["n1st"];
    $so2=$_POST["n2nd"];
    switch ($_POST["phep_tinh"]) {
        case "Cong": {$pheptinh="Cong";$ketqua=$so1+$so2;break;}
        case "Tru": {$pheptinh="Tru";$ketqua=$so1-$so2;break;}
        case "Nhan": {$pheptinh="Nhan";$ketqua=$so1*$so2;break;}
        case "Chia": {$pheptinh="Chia";$ketqua=$so1/$so2;break;}
        default: echo "Sai phép toán. Cần nhập lại";
    };
}
?>
<form method="post" name="phep_toan" action="../Bai6/ketquapheptinh.php">
<table align="center">
<tr>
    <td colspan="2">
        <h2 class="title" >
            PHÉP TÍNH TRÊN HAI SỐ
        </h2>
    </td>
    <tr style="color:red;">
        <td class="second-left">Chọn phép tính: </td>
        <td class="second-right">
            <input type="radio" name="phep_tinh"  value="Cong"
                   <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Cong')) {echo 'checked="checked"';}?> checked>Cộng
            <input type="radio" name="phep_tinh" value="Tru"
                   <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Tru')) {echo 'checked="checked"';}?>> Trừ
            <input type="radio" name="phep_tinh" value="Nhan"
                   <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Nhan')) {echo 'checked="checked"';}?> > Nhân
            <input type="radio" name="phep_tinh" value="Chia"
                    <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Chia')) {echo 'checked="checked"';}?>> chia
            <!-- <input type="radio" name="phep_tinh" value="Phan_Tram"
                <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Phan_Tram')) {echo 'checked="checked"';}?>> % -->
        </td>
    </tr>
    <tr>
        <td class="third-four-left">Số thứ nhất: </td>
        <td>
            <input type="text" name="n1st" value="<?php if(isset($_POST["n1st"])) echo $n1st; else $n1st=""; ?>">
        </td>
    </tr>
    <tr>
        <td class="third-four-left">Số thứ hai: </td>
        <td>
            <input type="text" name="n2nd" value="<?php if(isset($_POST["n2nd"])) echo $n2nd; else $n2nd=""; ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="submit" value="Tính"> </td>
    </tr>
</tr>
</table>
</form>
</body>
</html>