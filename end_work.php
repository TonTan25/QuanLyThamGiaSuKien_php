<?php
$sql = "";
$user = "user01";
if(isset($_POST['xacnhan'])){
    $a = 0;
    $evid = $_GET['search'];
    $sql = "SELECT EventID FROM event_sign_up WHERE Username ='$user'";
    $result = mysqli_query($cn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $ck_ev = $row['EventID'];
        if($evid != $ck_ev){
            $a = 1;
        }
        else{
            continue;
        }
    }
    if($a == 1){
        $sql = "INSERT INTO event_sign_up VALUES ('$user','$evid','$yc','$dddk')";
        $result = mysqli_query($cn,$sql);
        $sql = "SELECT Soluong_events_dangky FROM infor_login_user WHERE Username = '$user'";
        $result = mysqli_query($cn,$sql);
        $row = mysqli_fetch_assoc($result);
        $slev = $row['Soluong_events_dangky'] + 1;
        $sql = "UPDATE infor_login_user SET Soluong_events_dangky ='$slev' WHERE Username = '$user'";
        $result = mysqli_query($cn,$sql);
        echo '<p class="p01">Đã đăng ký thành công sự kiện này !!!</p>';
        echo '<p class="p01">Ban có chuyển tiếp đến <a href="TrangCaNhan.php" target="main_event">Trang cá nhân</a> !!!</p>';
    }
    else{
        echo '<p class="p01">Sự kiện này đã được người dùng đăng ký !</p>';
        echo '<p class="p01">Ban có chuyển tiếp đến <a href="TrangCaNhan.php" target="main_event">Trang cá nhân</a> !!!</p>';
    }
}
    
?>