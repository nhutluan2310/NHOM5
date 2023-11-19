<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
</head>
<body>
    <?php
        function Search($m, $gtri){
            // // xai ham
            // $find = array_search($gtri,$m);
            // return $find;
            $key=array();
            for($i=0;$i<count($m);$i++){
                if($gtri == $m[$i]){
                    $key[] = $i+1;
                }
            }
            return $key;
        }
        if(isset($_POST['submit'])){
            $mang = $_POST['m'];
            $key = $_POST['search'];
            $msg="";
            $result = "";
            if($mang!=""){
                if($key!=""){
                    $arr1 = explode(",",$mang);
                    Search($arr1,$key);
                    $txt = implode(" ", Search($arr1,$key));
                    echo $txt;
                    if(Search($arr1,$key)){
                        $result = "Tìm thấy $key tại vị trí thứ " . implode(" và thứ ",Search($arr1,$key)) ." của mảng";
                    }else{
                        $result = "Không tìm thấy $key trong mảng.";
                    }
                    $arr2 = implode(", ", $arr1);
                }
                else{
                    $msg = "Vui lòng nhập số cần tìm!";
                }
            }
            else {
                $msg = "Vui lòng nhập mảng!";
                $key ="";
            }
        }
       
    ?>
    <form action="Bai4.php" method="post">
        <table style="background: #D1DED4">
            <tr style="background: #2F9B99">
                <th align="center" style="color:white" colspan="2">
                    TÌM KIẾM
                </th>
            </tr>
            <tr>
                <td >
                    Nhập mảng:
                </td>
                <td >
                    <input type="text" step="any" name="m" style="width:280px;height:20px;" id="m" value="<?php
                    if(isset($mang)) echo $mang; ?>">
                </td>
            </tr>
            <tr>
                <td >
                    Nhập số cần tìm:
                </td>
                <td >
                    <input type="text" step="any" name="search" size="20" style="width:280px;height:20px;" id="search" value="<?php
                    if(isset($key)) echo $key; ?>">
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tìm kiếm" style="background:#94CDFD; width:150px;height:25px;" id="submit" name="submit">
                </td>
            </tr>
            
            <tr>
                <td>
                    Mảng:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="txt" style="width:280px;height:20px;" id="txt" readonly value="<?php
                        if(isset($arr2)) echo $arr2; ?>">
                </td>
            </tr>
             
            <tr>
                <td>
                   Kết quả tìm kiếm:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="result" id="result" style="font-size:11px;background: #C7FEFA; color:red; width:280px; height:20px;" readonly value="<?php
                    if(isset($result)) echo $result; ?>">
                </td>
            </tr>
             
            <tr style="background: #77D0D1;">
                <td colspan="2" align="center" style="font-size: 14px;" >
                <span >(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</span>
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