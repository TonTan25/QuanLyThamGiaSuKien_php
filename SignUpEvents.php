<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký sự kiện</title>
    <link rel="stylesheet" type="text/css" href="css/style_signup_events.css"/>
</head>
<body>
    <div id="div_dke">
        <div class="bck"><ul><li><a href="MainEvents.php" target="main_event">Back</a></li></ul></div>
        <p class="P_name">ĐĂNG KÝ THAM GIA SỰ KIỆN</p>
        <p class="txt_00">Bạn vui lòng điền đầy đủ thông tin cần thiết để đăng ký tham gia sự kiện :</p>
        <p class="txt_00">Thông tin cá nhân</p>
        <?php
            include 'smallclass/sue_1.php';
        ?>
        <p class="txt_00">Thông tin sự kiện tham gia :</p>
        <p class="txt_00">nhấn " Tiềm kiếm " 2 lần để kiểm tra lại :</p>
        <?php
            include 'smallclass/sue_2.php';
        ?>
        <form method="post" action="SignUpEvents.php?search=<?php echo $evid;?>">
        <input type="submit" value="Xác Nhận" name="xacnhan" class="btn_3"></form>
        <?php 
            include 'end_work.php';
        ?>
    </div>
</body>
</html>