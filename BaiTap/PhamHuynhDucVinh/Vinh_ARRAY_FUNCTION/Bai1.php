<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1 MẢNG-CHUỖI-HÀM</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 30px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .container{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-flow: row wrap;
            text-align: center;
        }
        form{
            text-align: center;
            margin-top: 5px;
        }
        #sNd{
            margin-left: 10px;
            font-size: 27px;
        }
        textarea{  
            margin-left: 10px;
            padding-left: 7px;
            font-size: 27px;
        }
        #kq{
            vertical-align: top;
            text-align: right;
        }
        #submit{
            width: 150px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $n = $_POST['sNd'];
            $msg ="";
            if(!empty($n) and is_numeric($n) and is_int(0+$n) and $n>0){ //a
                $a=array();
                for($i=0;$i<$n;$i++) //b
                {
                    $s=rand(-100,200);
                    $a[$i]=$s;
                }
                $ketqua="Mảng được tạo là:\n" .implode(" ",$a)."\n";
                $count=0;
                //c
                foreach ($a as $i){
                    if($i%2==0) $count++;
                }
                if ($count==2) $ketqua.="Có $count số chẵn trong mảng.\n";
                //d
                $count=0;
                foreach ($a as $i){
                    if($i<100) $count++;
                }
                $ketqua.="Có $count phần tử trong mảng có giá trị là số nhỏ hơn 100 \n";
                $sum=0;
                foreach ($a as $i){
                    if($i<0) $sum=$sum+$i;
                }
                $ketqua.="Tổng của các phần tử trong mảng có giá trị là số âm là: $sum \n";
                $zero=0;
                foreach ($a as $index=>$value){
                    if ($value==0) $zero=$index;
                }
                if ($zero!=0) $ketqua.="vị trí của các phần tử trong mảng có giá trị bằng 0 la: $zero \n";
                else $ketqua.="Không có phần tử giá trị bằng 0 \n";
                asort($a);
                $ketqua.="Mảng sau khi sắp xếp: \n" .implode(" ",$a)."\n";
            }
            else{ 
                $msg = "*Vui lòng nhập số nguyên dương bất kì!(>0)";
                $ketqua="";
                $n="";
            }
        }
    ?>
    <div class="container">
    <form action="Bai1.php" method="post">
    <table>
        <tr>
            <td>Nhập vào số n:</td>
            <td> 
                <input type="text" name="sNd" size="38" id="sNd" value="<?php if(isset($n)) echo $n; ?>">
            </td>
            <td colspan="2" align="center" style="color:red;" >
                    <?php if(isset($msg)) echo $msg; ?>
                </td>
        </tr>
        <tr>
            <td id="kq">Kết quả:</td>
            <td> 
                <textarea cols="41" rows="10" readonly name="ketqua"><?php if (isset($_POST['ketqua'])) echo $ketqua;?></textarea> 
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">  
                <input type="submit" value="Thực hiện" name="submit" id="submit">
            </td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>