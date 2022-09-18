<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_tcn.css"/>
    <title>Trang Cá Nhân</title>
</head>
<body>
    <div id="div_tcn">
        <div><h1>THÔNG TIN CÁ NHÂN NGƯỜI DÙNG </h1></div>
        <div class="avatar">
            <input type="image" src="images/avatar.jpg">
        </div>
        <div class="thongtin">
            <?php include 'smallclass/Dconn.php';
            $sql = "";
            $user = "user01";
            $sql = "SELECT * FROM infor_login_user WHERE Username = '$user'";
            $result = mysqli_query($cn,$sql);
            $row = mysqli_fetch_assoc($result);
            $hoten = $row['Hoten'];
            $age = $row['Age'];
            $email = $row['Email'];
            $slev = $row['Soluong_events_dangky'];
            $mdd = $row['Madinhdanh'];
            ?>
            <table class="tbl" align="center">
                <tr class="dong">
                    <td class="cot1"><p>Họ và Tên: </p></td>
                    <td class="cot2"><?php echo $hoten?></td>
                </tr>
                <tr class="dong">
                    <td class="cot1"><p>Tuổi : </p></td>
                    <td class="cot2"><?php echo $age?></td>
                </tr>
                <tr class="dong">
                    <td class="cot1"><p>Email : </p></td>
                    <td class="cot2"><?php echo $email?></td>
                </tr>
                <tr class="dong">
                    <td class="cot1"><p>Số lượng sự kiện đã đăng ký : </p></td>
                    <td class="cot2"><?php echo $slev?></td>
                </tr>
                <tr class="dong">
                    <td class="cot1"><p>Mã định Danh: </p></td>
                    <td class="cot2"><?php echo $mdd?></td>
                </tr>
            </table>
        </div>
        <div class="find_ev">
            <?php
            include 'smallclass/xoa_sk.php';
            ?>
        </div>
        <div class="evinfor">
            <table class="tbl_2">
                <tr class="dong">
                    <td class="cot">Mã sự kiện</td>
                    <td class="cot">Tên sự kiện</td>
                    <td class="cot">Thời gian bắt đầu</td>
                    <td class="cot">Hiện tại</td>
                    <td class="cot">Thời gian kết thúc</td>
                    <td class="cot">Điều kiện</td>
                    </tr>
                <?php
                include 'smallclass/sk_dk_user.php';
                ?>
            </table>
            <div class="pagination">
                <?php 
                    // PHẦN HIỂN THỊ PHÂN TRANG
                    // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                    if ($current_page > 1 && $total_page > 1){
                        echo '<a href="TrangCaNhan.php?page='.($current_page-1).'" target="main_event">Prev</a> | ';
                    }
                // Lặp khoảng giữa
                    for ($i = 1; $i <= $total_page; $i++){
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                        if ($i == $current_page){
                            echo '<span>'.$i.'</span> | ';
                        }
                        else{
                            echo '<a href="TrangCaNhan.php?page='.$i.'" target="main_event">'.$i.'</a> | ';
                        }
                    }
                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1){
                        echo '<a href="TrangCaNhan.php?page='.($current_page+1).'" target="main_event">Next</a> | ';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>