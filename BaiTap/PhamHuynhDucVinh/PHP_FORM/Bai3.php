<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán tiền điện</title>
    <style>

    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $ch = $_POST['ch'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $dg = $_POST['dg'];
    
    $msg = "";
    if(!empty($ch)){
        if(is_numeric($s1) and is_numeric($s2)){
            if($s1>=0 and $s2>=0){
                if($s2 >=$s1){
                    $tt = round((($s2-$s1)*$dg),5);
                }
                else{
                    $msg="Chỉ số mới phải lớn hơn chỉ số cũ!";
                }
            }
        }
        else{
            $msg = "Vui lòng nhập số mới số cũ(phải là kiểu số)";
        }    
    }
    else $msg= "Vui lòng nhập Tên chủ hộ!";
}
?>
    <form method="post" name="TD">
        <table style="background: beige;">
            <tr style="background: goldenrod;">
                <th align="center" style="color:brown;" colspan="2">
                    THANH TOÁN TIỀN ĐIỆN
                </th>
            </tr>
            <tr>
                <td>
                    Tên chủ hộ:
                </td>
                <td>
                    <input type="text" step="any" name="ch" size="20" id="ch" value="<?php
                    if(isset($ch)) echo "$ch"; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số cũ:
                </td>
                <td>
                    <input type="text" step="any" name="s1" size="20" id="s1" value="<?php
                    if(isset($s1)) echo "$s1"; ?>"> (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số mới:
                </td>
                <td>
                    <input type="text" step="any" name="s2" size="20" id="s2" value="<?php
                    if(isset($s2)) echo "$s2"; ?>"> (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Đơn giá:
                </td>
                <td>
                    <input type="text" step="any" name="dg" size="20" id="dg" value="<?php
                    if(isset($dg)){ 
                        echo "$dg";} else{
                            $dg = 20000;
                            echo "$dg";
                        } ?>"> (VNĐ)
                </td>
            </tr>
            <tr>
                <td>
                    Số tiền thanh toán:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="tt" id="tt" style="background: lightpink;" readonly value="<?php
                    if(isset($tt)) echo"$tt"; ?>"> (VNĐ)
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Tính" name="submit">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($ch)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>