<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_ct.css"/>
    <title>Xem thông tin chi tiết sự kiện</title>
</head>
<body>
    <div id="div_ct">
        <div class="infor_div_ct">
            <div class="back">
                <ul>
                    <li><a href="MainEvents.php" target="main_event">Back</a></li>
                </ul>
                <p class="tieude">Thông tin chi tiết về sự kiện</p>
                <!---->
            </div>
            <div class="thongtin">
            <?php
            $evid = "";
            $tensk = "";
            $ttsk = "";
            $yc = "";
            $dddk= "";
            $tgbd = "";
            $tgkt = "";
            $tght = "";
            $gtn = "";
            $sltg = "";
            $spon = "";
            $sql="";
            if(isset($_POST['xct'])){
                $evid=$_GET['evid'];
                echo $evid;
                echo '<p>Ngày : '.date('d/m/Y').'</p>';
                include 'smallclass/Dconn.php';
                if($evid!=""){
                    $sql = "SELECT * FROM event_infor WHERE EventID ='$evid'";
                    $result = mysqli_query($cn,$sql);
                    $row = mysqli_fetch_assoc($result);
                    $tensk = $row['Event_name'];
                    $ttsk = $row['Event_description'];
                    $tgbd = $row['Start_time'];
                    $tgkt = $row['Ending_time'];
                    $tght = date('Y-m-d');
                    $ghsl = $row['gioihan_soluong_nguoi'];
                    $sltg = $row['SoLuong_nguoi_thamgia'];
                    $spon = $row['Event_sponsor'];
                }
                else{
                    $tensk = "Chưa có hiển thị tên sự kiện";
                    $ttsk = "Chưa có hiện thị thông tin sự kiện";
                    $tgbd = "Chưa có hiện thị";
                    $tgkt = "Chưa có hiện thị";
                    $tght = date('Y-m-d');
                    $ghsl = 1;
                    $sltg = "Chưa có hiện thị";
                    $spon = "Chưa có hiện thị";
                }
            }
            ?>
            <div class="muc">
            <p class="tieude_001">TÊN SỰ KIỆN :</p>
            <p class="noidung_001"><?php echo $tensk;?></p>
            </div>
            <div class="muc">
                <p class="tieude_001">THÔNG TIN SỰ KIỆN :</p>
                <p class="noidung_001"><?php echo $ttsk?></p>
            </div>
            <div class="muc">
                <p class="tieude_001">THỜI GIAN BẮT ĐẦU :</p>
                <p class="noidung_001"><?php echo $tgbd?></p>
            </div>
            <div class="muc">
                <p class="tieude_001">THỜI GIAN HIỆN TẠI :</p>
                <p class="noidung_001"><?php echo $tght?></p>
            </div>
            <div class="muc">
                <p class="tieude_001">THỜI GIAN KẾT THÚC :</p>
                <p class="noidung_001"><?php echo $tgkt?></p>
            </div>
            <div class="muc">
                <p class="tieude_001">GIỚI HẠN SỐ LƯỢNG :</p>
                <p class="noidung_001">
                <?php
                if($ghsl == "0"){
                    echo '<input checked type="checkbox" name="checkdk" > CÓ';
                }
                else{
                    echo '<input unchecked type="checkbox" name="checkdk" > KHÔNG';
                }
                ?>
            </p>
        </div>
        <div class="muc">
            <p class="tieude_001">SỐ LƯỢNG THAM GIA :</p>
            <p class="noidung_001"><?php echo $sltg?></p>
        </div>
        <div class="muc">
            <p class="tieude_001">NHÀ TÀI TRỢ CHƯƠNG TRÌNH NÀY :</p>
            <p class="noidung_001"><?php echo $spon?></p>
        </div>
            </div>
        </div>
        <div class="btn_div_ct">
            <?php
            echo '<form class="fo_btn" action="SignUpEvents.php?evid='.$evid.'" method="POST">';
            echo '<button target="main_event" name="dk_2" class="btn_dk">Đăng ký tham gia sự kiện này !!</button>';
            echo '</form>';
            ?>
        </div>
    </div>
</body>
</html>