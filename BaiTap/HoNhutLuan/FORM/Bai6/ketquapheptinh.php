<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả bài 6</title>
    <link href="../Bai6/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        $pheptinh=$so1=$so2=$ketqua="";
        if(isset($_POST["submit"]) && isset($_POST["phep_tinh"]))
        {
            $so1=$_POST["n1st"];
            $so2=$_POST["n2nd"];
            if(is_numeric($so1) and is_numeric($so2)){
                switch ($_POST["phep_tinh"]) {
                    case "Cong": {$pheptinh="Cộng";$ketqua=$so1+$so2;break;}
                    case "Tru": {$pheptinh="Trừ";$ketqua=$so1-$so2;break;}
                    case "Nhan": {$pheptinh="Nhân";$ketqua=$so1*$so2;break;}
                    case "Chia": {
                        $pheptinh="Chia";
                        if ($so2==0) header("Location: pheptinh.php");
                        else $ketqua=round($so1/$so2,3);
                        break;}
                    default: echo "Sai phép toán. Cần nhập lại";
                };
            }
            else {
                header("Location: pheptinh.php");
            }
        }
    ?>
    <table align="center">
        <tr>
            <td colspan="2">
                <h1 class="title">
                    Phép tính trên hai số
                </h1>
            </td>
        <tr>
            <td class="second-left">Phép tính đã chọn: </td>
            <td class="second-right">
                <input type="radio" name="PhepTinh" checked> <?php echo $pheptinh?>
            </td>
        </tr>
        <tr>
            <td class="third-four-left">Số 1: </td>
            <td>
                <input type="text" name="so1" value="<?php echo $so1 ?>">
            </td>
        </tr>
        <tr>
            <td class="third-four-left">Số 2: </td>
            <td>
                <input type="text" name="so2" value="<?php echo $so2 ?>">
            </td>
        </tr>
        <tr>
            <td class="third-four-left">Kết quả: </td>
            <td> <input type="text" name="ketqua" value="<?php echo $ketqua ?>"> </td>
        </tr>
        <tr>
            <td></td>
            <td><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
        </tr>
    </table>
</body>
</html>