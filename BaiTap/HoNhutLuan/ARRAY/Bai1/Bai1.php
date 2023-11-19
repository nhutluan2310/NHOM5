<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $n = $_POST['sNd'];
            $msg = "";
            if(!empty($n) and is_numeric($n) and is_int(0+$n) and $n>0){
                $a = array();
                for($i=0;$i<$n;$i++){
                    $t = rand(-100,200);
                    $a[$i] = $t;
                }
                $ketqua = "Mảng tạo được là: \n".implode(" ",$a)."\n";
                $count = 0;
                for($i=0;$i<$n;$i++){
                    if($a[$i]%2==0) 
                        $count++;
                }
                if($count == 1)
                    $ketqua.="Có $count phần tử trong mảng là số chẵn.\n";
                $count = 0;
                for($i=0;$i<$n;$i++){
                    if($a[$i]<100) 
                        $count++;
                }
                $ketqua.= "Có $count phần tử trong mảng có giá trị là số nhỏ hơn 100. \n";
                $sum = 0;
                for($i=0;$i<$n;$i++){
                    if($a[$i]<0) 
                        $sum += $a[$i];
                }
                $ketqua.= "Tổng các phần tử trong mảng có giá trị là số âm là: $sum \n";
                $index = 0;
                for($i=0;$i<$n;$i++){
                    if($a[$i]==0) 
                        $index = $i;
                }
                if($index!=0)
                    $ketqua.= "Vị trí của các phần tử trong mảng có giá trị bằng 0: $index\n";
                else
                    $ketqua.= "Không có phần tử giá trị bằng 0\n";
                $temp = 0;
                for($i=0; $i<count($a); $i++){
                    for($j=$i+1; $j<count($a); $j++){
                        if($a[$i] > $a[$j]){
                            $temp = $a[$i];
                            $a[$i] = $a[$j];
                            $a[$j] = $temp; 
                        }
                    } 
                }
                $ketqua.= "Mảng sau khi sắp xếp: \n". implode(" ", $a)."\n";
            }
            else{
                $msg = "Vui lòng nhập số nguyên bất kì >0";
                $ketqua = "";
                $n = "";
            }
        }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nhập vào số n:</td>
                <td> 
                    <input type="text" name="sNd" size="38" id="sNd" value="<?php if(isset($n)) echo $n; ?>">
                </td>
                <td style="color:red;" ><?php if(isset($msg)) echo $msg;?></td>
            </tr>
            <tr>
                <td class="kq">Kết quả:</td>
                <td> 
                    <textarea cols="38" rows="9" name="ketqua"><?php if (isset($_POST['ketqua'])) echo $ketqua;?></textarea> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>  
                    <input type="submit" value="Thực hiện" name="submit" id="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
<style>
    .kq{
        vertical-align: top;
        text-align: right;
    }
</style>
</html>