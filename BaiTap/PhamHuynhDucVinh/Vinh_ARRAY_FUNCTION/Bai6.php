<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    
<?php
        function hoan_vi(&$a,&$b){
            $temp=$a;
            $a=$b;
            $b=$temp;
        }
        function sap_giam ($mang)
        {
            for($i=0;$i<count($mang)-1;$i++)
                for($j=$i+1;$j<count($mang);$j++)
                    if($mang[$i] < $mang[$j]) 
                        hoan_vi($mang[$i],$mang[$j]);
            return $mang;
        }
        function sap_tang ($mang)
        {
            for($i=0;$i<count($mang)-1;$i++)
                for($j=$i+1;$j<count($mang);$j++)
                    if($mang[$i] > $mang[$j]) 
                        hoan_vi($mang[$i],$mang[$j]);
            return $mang;
        }
        if (isset($_POST['submit'])){
            $mang=$_POST['m'];
            $msg="";
            if($mang==""){
                $msg ="Vui lòng nhập mảng!";
            }
            else{
                $arr=explode(",",$mang);
                $mang_giam = implode(", ",sap_giam($arr));
                $result_decre = 
                $mang_tang = implode(", ",sap_tang($arr));
            }
        }
        ?>
    <form action="Bai6.php" method="post">
        <table style="background: #D1DED4">
            <tr style="background: #319A98">
                <th align="center" style="color:white" colspan="2">
                    SẮP XẾP MẢNG
                </th>
            </tr>
            <tr style="background: #D1DED4">
                <td >
                    Nhập mảng:
                </td>
                <td>
                    <input type="text" step="any" name="m" style="width:250px;height:20px;" id="m" value="<?php
                    if(isset($mang)) echo $mang; ?>">
                </td>
            </tr>
            
            <tr style="background: #D1DED4">
                <td></td>
                <td>
                    <input type="submit" value="Sắp xếp tăng/giảm" style="background:#FFFF; width:150px;height:25px;" id="submit" name="submit">
                </td>
            </tr>
            <tr>
                <td style="color:red;">
                    Sau khi sắp xếp:
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Tăng dần:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="tang" style="background: #CCFCFE;width:250px;height:20px;" id="tang" readonly value="<?php
                        if(isset($mang_tang)) echo $mang_tang; ?>">
                </td>
            </tr>

            <tr>
                <td>
                  Giảm dần:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="giam" id="giam" style="background: #CCFCFE; width:250px; height:20px;" readonly value="<?php
                    if(isset($mang_giam)) echo $mang_giam; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center" style="font-size: 14px;" >
                    <span style="color:red;">(*)</span> Các số được nhập cách nhau bằng dấu ","
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($msg)) echo $msg; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>