<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍNH TIỀN KARAOKE</title>
    <style>
        #kt{
            width: 132px;
        }
        table tr, td{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST['submit'])){
    $giobd =strtotime($_POST['bd']);
    $giokt = strtotime($_POST['kt']);
    $th1 = date ("H",$giobd);
    $th2 = date("H",$giokt);
    $t1 = date("i",$giobd);
    $t2 = date("i",$giokt);
    $giophut1 = $th1*60+$t1; 
    $giophut2 =$th2*60+$t2;
     
    $msg = "";
    
    
    if(is_numeric($th1) and is_numeric($th2))
    {
        if($th1>=10 and $th1<=24 and $th2>=10 and $th2<=24)
        {
            if($th1 <= $th2)
            {
                if($giophut2 >= $giophut1){
                    if($th1>17)
                        $tt=round(($giophut2- $giophut1*45000)/60,3);
                    else if($th2<17)
                        $tt=round((($giophut2- $giophut1)*20000)/60,3);
                    else $tt=round(((17*60- $giophut1)*20000+($giophut2-17*60)*45000)/60,3);
                }
                else $msg="phút bắt đầu phải bé hơn phút kết thúc";
            }
            else $msg="Giờ:phút bắt đầu phải bé hơn Giờ:phút kết thúc!";
        }
        else $msg="Đang trong giờ nghỉ! Giờ hoạt động từ 10h đến 24h";
    }
    else $msg="Vui lòng nhập giờ bắt đầu và giờ kết thúc!";
   
}
?>
    <form method="post" name="KARAOKE">
        <table style="background: #00FFFF;" >
            <tr style="background: #6A00FF;">
                <th align="center" colspan="2">
                    TÍNH TIỀN KAORAKE
                </th>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu:
                </td>
                <td>
                    <input type="time" name="bd" size="20" id="kt" value="<?php
                    if(isset($giobd)) echo $_POST['bd']; ?>"> (hh:mm)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc:
                </td>
                <td>
                    <input type="time" name="kt" size="20" id="kt" value="<?php
                    if(isset($giokt)) echo $_POST['kt']; ?>"> (hh:mm)
                </td>
            </tr>
            <tr>
                <td>
                    Tiền thanh toán:
                </td>
                <td>
                    <input type="text" step="any" size="15" name="tt" id="tt" style="background: #FFFFA2;" readonly value="<?php
                    if(isset($tt)) echo"$tt"; ?>"> (VNĐ)
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Tính tiền" name="submit">
                    <input type="submit" value="Nhập lại" name="reset">
                    <?php
                     if(isset($_POST['reset'])){
                        $_POST['bd']==""; 
                        $_POST['kt']=="";
                        }
                        ?>
                </td>
            </tr>
            <p></p>
            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($msg)){ echo $msg; }?>
                </td>
                <?php  ?>
            </tr>
        </table>
    </form>
</body>
</html>