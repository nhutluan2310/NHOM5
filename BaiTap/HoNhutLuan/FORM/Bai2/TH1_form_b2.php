<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình tròn</title>
</head>
<body>
    <?php 
        if(isset($_POST['tinh'])){
            $bankinh = $_POST['bk'];
            if(is_numeric($bankinh))
                if($bankinh>0){
                    $dt = 3.14 * $bankinh * $bankinh;
                    $cv = 2 * 3.14 * $bankinh;
                }
                    
                else $msg ="Bán kinh không <=0";
            else $msg = "Bán kinh không phải là số!";
        }
    ?>
    <form method="post" name="HCN">
        <table style="background: beige">
            <tr style="background: orange">
                <th colspan="2">
                    DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
                </th>
            </tr>
            <tr>
                <td>
                    Bán kính: 
                </td>
                <td>
                    <input type="text" name="bk" size="20"  value="<?php if(isset($bankinh)) echo "$bankinh"?>">
                </td>
            </tr>
            <tr>
                <td>
                    Diện tích: 
                </td>
                <td>
                    <input type="text" name="dt" size="20" readonly style="background:lightpink" value="<?php if(isset($dt)) echo "$dt"?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chu vi: 
                </td>
                <td>
                    <input type="text" name="cv" size="20" readonly style="background:lightpink" value="<?php if(isset($cv)) echo "$cv"?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" name="tinh" value="Tính" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:red"><?php if(isset($msg)) echo "$msg"?></td>
            </tr>
        </table>
    </form>
</body>
</html>