<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chính của các sự kiện</title>
    <link rel="stylesheet" type="text/css" href="css/style_main_events.css"/>
</head>
<body>
    <p class="letter_font">SỰ KIỆN ĐÃ ĐIỄN RA</p>
    <?php 
        include 'smallclass/Dconn.php';
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $sql="SELECT count(EventID) as total FROM event_infor";
        $result =mysqli_query($cn,$sql);
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 4;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $sql1= "SELECT * FROM event_infor LIMIT $start, $limit";
        $result = mysqli_query($cn,$sql1);
 
    ?>
    <?php 
    // PHẦN HIỂN THỊ TIN TỨC
    // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
    while ($row = mysqli_fetch_assoc($result)){
        $tieude = $row['Event_name'];
        $evid = $row['EventID'];
        echo '<div id="div_show">';
        echo '<div class="infor_show">';
        echo '<ul><li><a href="#" class="size_tieude">';
        echo $tieude;
        echo '</a>';
        echo '<img src="images/ARTrcat.gif" class="norImg">';
        echo '<p>'.$evid.'</p>';
        echo $row['Event_description'];
        echo '</li></ul>';
        echo '<div id="button_st">';
        echo '<form class="fo_btn" action="ChiTiet.php?evid='.$evid.'" method="POST">';
        echo '<button target="main_event" name="xct" class="btn">Xem Chi tiết</button></form>';
        echo '<form class="fo_btn" action="SignUpEvents.php?evid='.$evid.'" method="POST">';
        echo '<button target="main_event" name="dk_1" class="btn">Đăng Ký</button></form>';
        echo '</div></div></div>';
        }
    ?>
    <div class="pagination">
       <?php 
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG
       // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
            echo '<a href="MainEvents.php?page='.($current_page-1).'" target="main_event">Prev</a> | ';
        }
       // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="MainEvents.php?page='.$i.'" target="main_event">'.$i.'</a> | ';
            }
        }
        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="MainEvents.php?page='.($current_page+1).'" target="main_event">Next</a> | ';
        }
       ?>
    </div>
</body>
</html>