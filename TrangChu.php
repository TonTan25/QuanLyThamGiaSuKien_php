<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="javascript/code.js"></script>
    <link rel="shortcut icon" href="images/logo_web.ico" />
    <title>Trải Nghiệm Sự Kiện - Event Experience</title>
</head>
<body>
    <!--Menu-->
    <div id="Menu_top">
        <div id="menu_left">
            <ul>
                <li><a href="TrangChu.php" title="ARTrcat" class="images_1"><img src="images/ten_trang_chu.png" class="img_1"/></a></li>
                <li><a href="HotEvents.php" title="SỰ KIỆN HOT" class="no_1" target="main_event">SƯ KIỆN HOT</a></li>
                <li><a href="SignUpEvents.php" title="ĐĂNG KÝ THAM GIA SƯ KIỆN" class="no_1" target="main_event">ĐĂNG KÝ THAM GIA SỰ KIỆN</a></li>
                <li><a href="#" title="CHUYỂN SANG CHỦ ĐỀ KHÁC" class="no_1" target="main_event">OTHER EVENTS</a></li>
            </ul>
        </div>
        <div id="menu_right">
            <div id="myLisatbar" class="Lisatbar">
                <a href="javascript:void(0)" class="LisatClose" onclick="closeNav()">×</a>
                <?php
                $user = "";
                $name = "";
                if(isset($_POST['oke_tc'])){
                    $_GET['user'] = $user;
                    $_GET['name'] = $name;
                    echo '<a href="#">Nguyen Tan</a>';
                    echo '<a href="TrangCaNhan.php" target="main_event">Trang Cá Nhân</a>';
                    echo '<a href="TrangChu.php">Đăng Xuất</a>';
                }   
                else{
                include 'login_acc.php';
                include 'signup_acc.php';
                } 
                ?>
				<a href="#">About</a>
			</div>
			<a class="LisatOpen" onclick="openNav()">☰ LISAT</a>
        </div>
    </div>
    <!--Banner-->
    <div id="Banner">
        <img src="images/3.jpg" class="banner_img">
    </div>
    <!--Menu_bot_ngăn cách banner với body-->
    <div id="Menu_events">
        <div id="Menu_events_left">
            <ul>
                <li><a href="DoneEvents.php" title="SƯ KIỆN ĐÃ DIỄN RA" class="no_2" target="main_event">
                    <img src="images/event_took.png" class="img_2">
                    SƯ KIỆN ĐÃ DIỄN RA</a></li>
                <li><a href="MainEvents.php" title="SỰ KIỆN ĐANG DIỄN RA" class="no_2" target="main_event">
                    <img src="images/event_taking.png" class="img_2">
                    SỰ KIỆN ĐANG DIỄN RA</a></li>
                <li><a href="NewEvents.php" title="SỰ KIỆN SẮP TỚI" class="no_2" target="main_event">
                    <img src="images/event_pre.png" class="img_2">
                    SỰ KIỆN SẮP TỚI</a></li>
            </ul>
        </div>
    </div>
    <!--Body-->
    <div id="Body_main">
    <!--Left : Bên Trái-->
        <div id="Left_main">
            <h1 class="letter_infor">ルビーフェンリルがイベントを後援しました</h1>
            <iframe src="MainEvents.php" frameborder="0" name="main_event" class="main_event"></iframe>
        </div>
        <div id="Right_main">
            <div class="pluc">
                <p class="pl_name">PHỤ LỤC</p>
                <ul>
                    <li><a href="HotEvents.php" target="main_event">Sự kiện HOT</a></li>
                    <li><a href="MainEvents.php" target="main_event">Sự kiện đang diễn ra</a></li>
                    <li><a href="SignUpEvents.php" target="main_event">Đăng ký tham gia sự kiện</a></li>
                    <li><a href="TrangCaNhan.php" target="main_event">Trang cá nhân</a></li>
                    <li><a href="" target="main_event">Hỏi Đáp ?</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--footer-->
    <footer id="Footer">
        <div id="left_footer">
            <ul>
                <h3>Liên hệ: Mèo Hồng Ngọc đến từ hành tinh Gliese 504 b cách Trái Đất 57 năm ánh sáng</h3>
                <h3 style="text-align: center;">=(^...^)=</h3>
                <h3>Email: MeoHongNgoc.2510.2k@gmail.com</h3>
                <h3>Sdt: 0359190216</h3>
            </ul>
        </div>
        <div id="right_footer">
            <ul>
                <h3>Enter your code:</h3>
                <h4>Mã bạn được cấp sẽ thay đổi theo ngày.</h4>
                <input type="text" class="txt_2">
                <input type="submit" name="xacnhan" value="Xác Nhận" class="btn_2">
                <p><a href="#">Kích đây để nhận code</a></p>
            </ul>
    </footer>
</body>
</html>