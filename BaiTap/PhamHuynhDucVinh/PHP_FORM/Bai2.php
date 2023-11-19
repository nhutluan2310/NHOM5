<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích và chu vi hình tròn</title>
    <style>

    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $bk = $_POST['bk'];
    define("PI",3.14);
    $msg = "";
    if(is_numeric($bk)){
        if($bk>0){
            $dt = round(PI * pow($bk,2),2);
            $cv = round((PI * 2 * $bk), 2);
        }
        else{ $msg = "Bán kính phải lớn hơn 0!";
                $bk="";
        }
    }
    else{
        $msg = "Bán kính khổng phải là số!";
        $bk="";  
        }    
    }
?>
    <form method="post" name="HT">
        <table style="background: beige;">
            <tr style="background: goldenrod;">
                <th align="center" style="color:brown" colspan="2">
                    DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
                </th>
            </tr>
            <tr>
                <td>
                    Bán kính:
                </td>
                <td>
                    <input type="text" step="any" name="bk" size="20" id="bk" value="<?php
                    if(isset($bk)) echo "$bk"; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                    Diện tích:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="dt" id="dt" style="background: lightpink;" readonly value="<?php
                    if(isset($dt)) echo"$dt"; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                    Chu vi:
                </td>
                <td>
                    <input type="text" name="cv" size="20" style="background: lightpink;" id="cv" readonly
                    value="<?php
                    if(isset($cv)) echo "$cv"; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Tính" name="submit">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($bk)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>