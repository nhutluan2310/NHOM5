<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bài 8</title>
<style>
    *{
margin: 0 auto;
padding: 0;
box-sizing: border-box;
font-size: 30px;
}
table{
padding: 20px;
}
table tr td{
padding-top: 10px;
}
</style>
</head>
<body>
    <?php
    ?>
<div class="container">
    <table>
        <tr>
            <td>
                <p>Bạn đã nhập thành công, dưới dây là những thông tin bạn đã nhập:</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <b>Họ tên:</b> <?php if(isset($_POST['fullname'])){ 
                        echo $_POST['fullname'];} ?>
                </p>                
            </td>
        </tr> 
        <tr>
            <td>
                <p>
                    <b>Address:</b> <?php if(isset($_POST['address'])) echo $_POST['address']; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p> 
                    <b>Phone:</b> <?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <b>Gender:</b> <?php if($_POST["gender"]=="Nam") echo "Nam"; else echo"Nữ"; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <b>Country:</b> <?php if(isset($_POST['country'])) echo $_POST['country']; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <b>Study:</b> <?php 
                        if(isset($_POST['check']))
                            echo implode(', ', $_POST['check']);
                        else echo "None";    
                        ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <b>Note:</b> <?php if(isset($_POST['note'])) echo $_POST['note']; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><a href="javascript:window.history.back(-1);">Quay về</a></td>
        </tr>
    </table>
</div>
</body>
</html>