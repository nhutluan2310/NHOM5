<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍNH TIỀN KARAOKE</title>
    <style>

    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $giobd = $_POST['bd'];
    $giokt = $_POST['kt'];
    $msg = "";
    
    if(is_numeric($giobd) and is_numeric($giokt))
    {
        if($giobd>=10 and $giobd<=24 and $giokt>=10 and $giokt<=24)
        {
            if($giobd < $giokt)
            {
                if($giobd>17)
                    $tt=($giokt-$giobd)*45000;
                else if($giokt<17)
                    $tt=($giokt-$giobd)*20000;
                else $tt=(17-$giobd)*20000+($giokt-17)*45000;
            }
            else $msg="Giờ bắt đầu phải bé hơn kết thúc!";
        }
        else $msg="Đang trong giờ nghỉ! Giờ hoạt động từ 10h đến 24h";
    }
    else $msg="Giờ bắt đầu và giờ kết thúc phải là số!";
}
?>
    <form method="post" name="KARAOKE">
        <table style="background: #FFE8FA;" >
            <tr style="background: #E34E81;">
                <th align="center" colspan="2">
                    TÍNH TIỀN KAORAKE
                </th>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu:
                </td>
                <td>
                    <input type="text" step="any" name="bd" size="20" id="kt" value="<?php
                    if(isset($giobd)) echo "$giobd"; ?>"> (h)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc:
                </td>
                <td>
                    <input type="text" step="any" name="kt" size="20" id="kt" value="<?php
                    if(isset($giokt)) echo "$giokt"; ?>"> (h)
                </td>
            </tr>
            <tr>
                <td>
                    Tiền thanh toán:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="tt" id="tt" style="background: #FFFFA2;" readonly value="<?php
                    if(isset($tt)) echo"$tt"; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Tính tiền" name="submit">
                </td>
            </tr>
            <p></p>
            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($msg)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>