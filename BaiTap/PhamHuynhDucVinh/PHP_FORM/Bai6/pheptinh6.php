<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 6: Phép tính</title>
    <style>
        .title{
            color: cornflowerblue;
            text-align: center;
            text-transform: uppercase;
        }
        .second-left{
        color: #ff0a07 ;
        font-weight: bold;
        text-align: right;
        }
        .second-right{
        color: #ff0a07 ;
        }
        .third-four-left{
        color: blue;
        text-align: right;
}
    </style>
</head>
<body>
<form method="post" name="phep_toan6" action="ketquapheptinh6.php">
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
            <input type="text" name="s1" value="<?php if(isset($_POST["s1"])) echo $_POST["s1"]; else $_POST["s1"]=""; ?>">
        </td>
    </tr>
    <tr>
        <td class="third-four-left">Số thứ hai: </td>
        <td>
            <input type="text" name="s2" value="<?php if(isset($_POST["s2"])) echo $_POST["s2"]; else $_POST["s2"]=""; ?>">
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