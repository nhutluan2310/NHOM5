<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function thay_the($mang, $cu, $moi){
            for($i=0;$i<count($mang);$i++){
                if($cu == $mang[$i]){
                    $mang[$i] = $moi;
                }
            }
            return $mang;
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $mang = $_POST['pt'];
            $cu = $_POST['cu'];
            $moi = $_POST['moi'];
            $msg = $result = "";
            $arr1 = array();

            if($mang!=""){
                if($cu==""){
                    $msg = "Vui lòng nhập giá trị cần thay thế!";
                    $arr1="";
                }
                else if($moi==""){
                    $msg = "Vui lòng nhập giá trị thay thế!";
                    $arr1="";
                }
                else if($cu != $moi){ //truong hop gia tri cu != moi
                    $arr = explode(",",$mang);
                    $arr1 = implode(" ", $arr);
                    $arr2 = thay_the($arr, $cu, $moi);
                    if($arr == $arr2){ //xet mang cu va mang moi de kiem tra gia tri thay the
                        $result = "Không tìm thấy giá trị cần thay thế!";
                    }
                    else{
                        $result = implode(" ", $arr2);
                    }
                }
                else{ // truong hop gia tri cu == moi
                    $key=0;
                    $arr = explode(",",$mang);
                    $arr1 = implode(" ", $arr);
                    for($i=0;$i<count($arr);$i++){
                        if($cu == $arr[$i]){
                            $key=-1;
                        }
                    }
                    if($key==-1){ //cu == moi nhung co trong mang
                        $result= implode(" ", $arr);
                    }
                    else{ //cu == moi nhung khong co trong mang
                        $result = "Không tìm thấy giá trị cần thay thế!";
                    }
                }
                
            }
            else {
                $msg = "Vui lòng nhập các phần tử!";
                $arr1= "";
            }
        }
    ?>
    <form action="Bai5.php" method="post">
    <table style="background: #FFFF;">
            <tr style="background: #9F0B6E">
                <th align="center" style="color:white" colspan="2">
                    THAY THẾ
                </th>
            </tr>
            <tr style="background: #FED6F1;">
                <td >
                    Nhập các phần tử:
                </td>
                <td >
                    <input type="text" step="any" name="pt" style="width:250px;height:20px;" id="pt" value="<?php
                    if(isset($mang)) echo $mang; ?>">
                </td>
            </tr>
            <tr style="background: #FED6F1;">
                <td >
                    Giá trị cần thay thế:
                </td>
                <td >
                    <input type="text" step="any" name="cu" size="20" style="width:250px;height:20px;" id="cu" value="<?php
                    if(isset($cu)) echo $cu; ?>">
                </td>
            </tr>
            
            <tr style="background: #FED6F1;">
                <td >
                    Giá trị thay thế:
                </td>
                <td >
                    <input type="text" step="any" name="moi" size="20" style="width:250px;height:20px;" id="moi" value="<?php
                    if(isset($moi)) echo $moi; ?>">
                </td>
            </tr>
            
            <tr style="background: #FED6F1;">
                <td></td>
                <td>
                    <input type="submit" value="Thay thế" style="background:#FCFBA8; width:150px;height:25px;" id="submit" name="submit">
                </td>
            </tr>
            
            <tr>
                <td>
                    Mảng cũ:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="txt" style="background: #FCA39E;width:250px;height:20px;" id="txt" readonly value="<?php
                        if(isset($arr1)) echo $arr1; ?>">
                </td>
            </tr>
             
            <tr>
                <td>
                   Mảng sau khi thay thế:
                </td>
                <td>
                    <input type="text" step="any" size="20" name="result" id="result" style="background: #FCA39E; width:250px; height:20px;" readonly value="<?php
                    if(isset($result)) echo $result; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center" style="font-size: 14px;" >
                <span >(<b style="color:red;">Ghi chú:</b> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</span>
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