<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KẾT QUẢ THI ĐẠI HỌC</title>
    <style>

    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $dtoan = $_POST['toan'];
    $dly = $_POST['ly'];
    $dhoa = $_POST['hoa'];
    $dchuan = $_POST['dc'];
    
    $msg = "";
    
    if(is_numeric($dtoan) and is_numeric($dly) and is_numeric($dhoa)){
        if($dtoan>=0 and $dly>=0 and $dhoa>=0 and $dtoan<=10 and $dly <=10 and $dhoa <=10){
            $td = $dtoan+$dly+$dhoa;
            if($dchuan <=30){
                if($td>=$dchuan and $dtoan!=0 and $dhoa!=0 and $dly!=0){
                    $kq = "Đậu";
                }
                else $kq = "Rớt";
            }
            else $msg="Điểm chuẩn phải <= tổng 3 môn cộng lại";
        }
        else{ 
            $msg = "Điểm số phải từ 0 - 10";
            $dtoan="";
            $dly="";
            $dhoa="";
        }
    }
    else{
        $msg = "Vui lòng nhập điểm số!(Không nhập chữ)!";
        $dtoan="";
        $dly="";
        $dhoa="";
    }    
}
?>
    <form method="post" name="KQTDH">
        <table style="background: #FFE8FA;" >
            <tr style="background: #E34E81;">
                <th align="center" colspan="2">
                    KẾT QUẢ THI ĐẠI HỌC
                </th>
            </tr>
            <tr>
                <td>
                    Toán:
                </td>
                <td>
                    <input type="text" step="any" name="toan" size="20" id="toan" value="<?php
                    if(isset($dtoan)) echo "$dtoan"; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Lý:
                </td>
                <td>
                    <input type="text" step="any" name="ly" size="20" id="ly" value="<?php
                    if(isset($dly)) echo "$dly"; ?>">
                </td>
            </tr>
            <tr>    
                <td>
                    Hóa:
                </td>
                <td>
                    <input type="text" step="any" name="hoa" size="20" id="hoa" value="<?php
                    if(isset($dhoa)) echo "$dhoa"; ?>">
                </td>
            </tr>
            <tr>
            <tr>    
                <td>
                    Điểm chuẩn:
                </td>
                <td>
                    <input type="text" step="any" name="dc" style="color:red;" size="20" id="dc" value="<?php
                    if(isset($dchuan)) echo "$dchuan"; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Tổng điểm:
                </td>
                <td>
                    <input type="text" step="any" name="td" size="20" readonly id="td" style="background-color: #FFFFA2;" value="<?php
                    if(isset($td)){ 
                        echo "$td";} ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả thi:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="kq" id="kq" style="background: #FFFFA2;" readonly value="<?php
                    if(isset($kq)) echo"$kq"; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Xem kết quả" name="submit">
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