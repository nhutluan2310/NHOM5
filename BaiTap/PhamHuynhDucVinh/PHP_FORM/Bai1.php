<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCN</title>
    <style>

    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $cd = $_POST['cd'];
    $cr = $_POST['cr'];
    $msg = "";
    if(is_numeric($cd) || is_numeric($cr)){
        if($cd >0 and $cr >0){
            if($cd>=$cr){
                $dt = round(($cd*$cr),2);
            }
                else{ $msg = "Chiều dài không được bé hơn chiều rộng!";
                $cd="";
                $cr="";
            }
        }
        else{
            $msg = "Chiều dài và chiều rộng phải lớn hơn không!";
            $cd="";
            $cr="";  
        }    
    }
    else {
        $msg="Chiều dài hoặc chiều rộng không phải là số";
        $cd="";
        $cr="";
     
    }
}
?>
    <form method="post" name="HCN">
        <table style=" background: beige;">
            <tr style="background: lightpink;">
                <th align="center" colspan="2">
                    DIỆN TÍCH HÌNH CHỮ NHẬT
                </th>
            </tr>
            <tr>
                <td>
                    Chiều dài:
                </td>
                <td>
                    <input type="text" step="any" name="cd" size="20" id="cd" value="<?php
                    if(isset($cd)) echo "$cd"; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                    Chiều rộng:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="cr" id="cr" value="<?php
                    if(isset($cr)) echo"$cr"; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                    Diện tích:
                </td>
                <td>
                    <input type="text" name="dt" size="20" style="background: lightpink;" id="dt" readonly
                    value="<?php
                    if(isset($dt)) echo "$dt"; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Tính" name="submit">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:red;" >
                    <?php if(isset($cd)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>