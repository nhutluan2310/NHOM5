<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
    <link href="../Bai8/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
            
        $ten = $_POST['fullname'];
        $diachi = $_POST['address'];
        $dt = $_POST['phone'];
        $gtinh = $_POST['gender'];
        $qg = $_POST['country'];
        $check = $_POST['check'];
        $nd = $_POST['note'];

        $msg = "";
    }    
    ?>
    <form action="../Bai8/config.php" name="Bai8" method="post">
        <fieldset>
            <legend><h3>Enter your information</h3></legend>
            <table >
                <tr>
                    <td>
                        <label>Fullname</label>  
                    </td>
                    <td>
                        <input type="text" name="fullname" required value="<?php 
                            if(isset($ten)) echo $ten; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Address</label>
                    </td>
                    <td>
                        <input type="text" name="address" required value="<?php if(isset($diachi)) echo $diachi; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >Phone</label>
                    </td>
                    <td>
                        <input type="text" name="phone" required value="<?php if(isset($dt)){ echo $dt;}  ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" required id="radio" value="Nam"><label>Nam</label>
                        <input type="radio" name="gender"id="radio" value="Nữ"><label>Nữ</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Country</label>
                    </td>
                    <td>
                        <select class="select" name="country">
                            <option value="Việt Nam" selected="selected">Việt Nam</option>
                            <option value="Mỹ">Mỹ</option>
                            <option value="Anh">Anh</option>
                            <option value="Nga">Nga</option>
                            <option value="Pháp">Pháp</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Study</label>
                    </td>
                    <td >
                        <input type="checkbox" name="check[]" id="check"  value="PHP & MySQL" ><label>PHP & MySQL</label>
                        <input type="checkbox" name="check[]" id="check" value="ASP.NET" ><label>ASP.NET</label>
                        <input type="checkbox" name="check[]" id="check" value="CCNA" ><label>CCNA</label>
                        <input type="checkbox" name="check[]" id="check" value="Security+" ><label>Security+</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Note</label>
                    </td>
                    <td>
                        <textarea class="form-control" name="note" id="" rows="5" cols="42"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" id="submit" name="submit" value="Gửi">
                        <input type="reset" id="submit" name="reset" value="Hủy">
                        <?php
                            if(isset($_POST['reset'])){
                                $ten =="";
                                $diachi =="";
                                $dt =="";
                                $gtinh =="";
                                $qg =="";
                                $check =="";
                                $nd =="";
                        
                            }
                        ?>    
                    </td>
                    <td colspan="2" align="center" style="color:red;" >
                        <?php if(isset($msg)) echo $msg; ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>