<?php
$sql="SELECT count(Username) as total FROM event_sign_up WHERE Username = '$user'";
$result =mysqli_query($cn,$sql);
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;

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
$sql = "SELECT * FROM event_sign_up a JOIN event_infor b ON a.EventID = b.EventID WHERE a.Username = '$user' LIMIT $start, $limit";
$result = mysqli_query($cn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $evid = $row['EventID'];
    $dktg = $row['DieuKien_thamgia'];
    //$sql = "SELECT * FROM event_sign_up a JOIN event_infor b ON a.EventID = b.EventID WHERE a.Username = ''";
    // $result = mysqli_query($cn,$sql);
    // $row = mysqli_fetch_assoc($result);
    $evname = $row['Event_name'];
    $tgbd = $row['Start_time'];
    $tght = date('Y-m-d');
    $tgkt = $row['Ending_time'];
    echo '<tr class="dong">';
    echo '<td class="cot">'.$evid.'</td>';
    echo '<td class="cot">'.$evname.'</td>';
    echo '<td class="cot">'.$tgbd.'</td>';
    echo '<td class="cot">'.$tght.'</td>';
    echo '<td class="cot">'.$tgkt.'</td>';
    echo '<td class="cot">'.$dktg.'</td>';
    echo '</tr>';
}
?>