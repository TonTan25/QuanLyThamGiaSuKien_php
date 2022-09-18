<form action="TrangCaNhan.php" method="post">
    <table>
        <tr>
            <td class="c">Tìm kiến sự kiện :</td>
            <td class="c"><input type="text" class="ipt_x" name="find"></td>
            <td class="c"><input type="submit" class="btn_x" name="xoa" value="Xóa Sự kiện"></td>
        </tr>
    </table>
</form>
<?php
    $sql ="";
    if(isset($_POST['xoa'])){
        $evid = $_POST['find'];
        $a = 0;
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
        $sql = "DELETE FROM event_sign_up WHERE Username = 'user01' AND EventID ='$evid'";
        $result = mysqli_query($cn,$sql);$sql = "SELECT Soluong_events_dangky FROM infor_login_user WHERE Username = '$user'";
        $result = mysqli_query($cn,$sql);
        $row = mysqli_fetch_assoc($result);
        $slev = $row['Soluong_events_dangky'] + 1;
        $sql = "UPDATE infor_login_user SET Soluong_events_dangky ='$slev' WHERE Username = '$user'";
        $result = mysqli_query($cn,$sql);
        echo '<p> Ban đã xóa thành công </p>';
        echo '<p> Vui lòng tải lại trang </p>';
    }
    else{
        echo '<p> Không tồn tại sự kiện này </p>';
        echo '<p> Vui lòng tải lại trang </p>';
    }
    }
?>