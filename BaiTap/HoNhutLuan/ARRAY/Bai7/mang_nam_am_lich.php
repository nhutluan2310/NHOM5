<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai7</title>
</head>
<body>
    <?php 
        function tinh_can($nam){
            $nam = $nam-3;
            $can = $nam%10;
            return $can;
        }
        function tinh_chi($nam){
            $nam = $nam-3;
            $chi = $nam%12;
            return $chi;
        }
        function in_nam_al($nam, $mang_can, $mang_chi){
            $can = tinh_can($nam);
            $chi = tinh_chi($nam);
            $namal = $mang_can[$can];
            $namal = $namal . " " . $mang_chi[$chi];
            return $namal;
        }
        function in_hinh_anh($nam, $mang_hinh){
            $chi = tinh_chi($nam);
            $hinh = $mang_hinh[$chi];
            $hinh_anh = "<img src='./12con_giap/$hinh' alt='Anh'>";
            return $hinh_anh;
        }
        if(isset($_POST['submit'])){
            $namdl = $_POST['namdl'];
            if($namdl != NULL){
                $mang_can = array("Quý", "Giáp", "Ất", "Bình", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
                $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân");
                $mang_hinh = array("hoi.jpg", "ty.jpeg", "suu.jpeg", "dan.jpeg", "mao.jpeg", "thin.jpeg", "ran.jpeg", "ngo.jpeg", "mui.jpeg", "than.jpeg", "dau.jpg", "tuat.jpg");
                $namal = in_nam_al($namdl, $mang_can, $mang_chi);
                $hinh_anh = in_hinh_anh($namdl, $mang_hinh);
            }
            else{
                $msg = "NHẬP NĂM DƯƠNG LỊCH !";
            }
            
        }
    ?>
    <form action="mang_nam_am_lich.php" method="post">
        <table style="background: rgba(185,238,255,255)">
            <tr style="background: rgba(9,101,199,255)">
                <th colspan="3" style="color: white">
                    TÍNH NĂM ÂM LỊCH
                </th>
            </tr>
            <tr style="text-align:center">
                <td>
                    Năm dương lịch
                </td>
                <td></td>
                <td>
                    Năm âm lịch
                </td>
            </tr>
            <tr style="text-align:center">
                <td>
                    <input class="textdl" type="text" name="namdl" value="<?php if(isset($namdl)) echo $namdl ?>">
                </td>
                <td>
                    <input class="button-submit" type="submit" name="submit" value="=>">
                </td>
                <td>
                    <input class="textal" type="text" name="namal" readonly value="<?php if(isset($namal)) echo $namal ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align:center">
                    <div class="hinh_anh">
                        <?php
                            if(isset($hinh_anh))
                                echo $hinh_anh; 
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:red"><?php if(isset($msg)) echo "$msg"?></td>
            </tr>
        </table>
    </form>
</body>
<style>
    .button-submit{
        background: rgba(253,252,221,255);
        color:red;
    }
    .hinh_anh{
        width: 100px;
        height: 100px;
        display: flex;
        margin-left: 37% ;
    }
    .textdl,.textal{
        width: 60%
    }
    .textal{
        background: rgba(255,254,206,255);
        color:red;
    }
</style>
</html>