<?php
    $evid = "";
    $tensk = "";
    $ttsk = "";
    $yc = "";
    $dddk= "";
    if(isset($_POST['dk_1']) || isset($_POST['dk_2'])){
        $evid=$_GET['evid'];
    }
    else if($_POST['search'] != ""){
        $evid = $_POST['search'];
    }
    else{
        $evid= '';
    }
    ?>
    <table class="tbl" align="center" >
        <tr class="dong">
            <td class="cot1">MÃ SỰ KIỆN :</td>
            <td class="cot2">
                <form action="SignUpEvents.php?search=<?php echo $evid;?>" method="POST" >
                <input type="text" name="search" value="<?php echo $evid;?>">
                <input type="submit" name="sch" value="Tìm kiếm" class="btn_3"></form>
            </td>
        </tr>
        <?php
        $tgbd = "";
        $tgkt = "";
        $tght = "";
        $gtn = "";
        $sltg = "";
        $spon = "";
        $sql="";
        if(isset($_POST['sch'])){
            include 'smallclass/Dconn.php';
            $evid =$_GET['search'];
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
                $sql = "SELECT * FROM event_sign_up WHERE EventID ='$evid'";
                $result = mysqli_query($cn,$sql);
                $row = mysqli_fetch_assoc($result);
                if($row != ""){
                    $yc = $row['DieuKien_thamgia'];
                    $dddk = $row['DaDu_dieukien'];
                }
                else{
                    $yc = "Khong co yeu cau bat buoc";
                    $dddk = "0";
                }
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
                $yc = "Chưa có hiện thị yêu cầu cần có";
                $dddk = "1";
            }
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
            $yc = "Chưa có hiện thị yêu cầu cần có";
            $dddk = "1";
        }
        ?>
        <tr class="dong">
            <td class="cot1">TÊN SỰ KIỆN :</td>
            <td class="cot2"><?php echo $tensk;?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">THÔNG TIN SỰ KIỆN :</td>
            <td class="cot2"><?php echo $ttsk?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">THỜI GIAN BẮT ĐẦU :</td>
            <td class="cot2"><?php echo $tgbd?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">THỜI GIAN HIỆN TẠI :</td>
            <td class="cot2"><?php echo $tght?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">THỜI GIAN KẾT THÚC :</td>
            <td class="cot2"><?php echo $tgkt?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">GIỚI HẠN SỐ LƯỢNG :</td>
            <td class="cot2">
            <?php
            if($ghsl == "0"){
                echo '<input checked type="checkbox" name="checkdk" > CÓ';
            }
            else{
                echo '<input unchecked type="checkbox" name="checkdk" > KHÔNG';
            }
             ?>
            </td>
        </tr>
        <tr class="dong">
            <td class="cot1">SỐ LƯỢNG THAM GIA :</td>
            <td class="cot2"><?php echo $sltg?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">NHÀ TÀI TRỢ CT :</td>
            <td class="cot2"><?php echo $spon?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">YÊU CẦU :</td>
            <td class="cot2"><?php echo $yc;?></td>
        </tr>
        <tr class="dong">
            <td class="cot1">ĐẠT ĐỦ YÊU CẦU :</td>
            <td class="cot2">
                <?php
                    $cck ="";
                    if($dddk == "0"){
                        $cck = 'checked';
                    }
                    else{
                        $cck = 'unchecked';
                    }
                ?>
                <input <?php echo $cck;?> type="checkbox" name="checkdk" > Đã "ĐẠT" đủ yêu cầu cần thiết để tham gia sự kiện</td>
        </tr>
    </table>