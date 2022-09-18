<?php
$user = "user01";
$hoten = "";
$age = "";
$email = "";
$mddanh = "";
include 'smallclass/Dconn.php';
if($user != ""){
    $sql = "SELECT * FROM infor_login_user WHERE Username = '$user'";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result);
    $hoten = $row['Hoten'];
    $age = $row['Age'];
    $email = $row['Email'];
    $mddanh = $row['Madinhdanh'];
}
else{
    $hoten = "khong co thong tin";
    $age = "khong co thong tin";
    $email = "khong co thong tin";
    $mddanh = "khong co thong tin";
}
?>
<table class="tbl" align="center" >
    <tr class="dong">
        <td class="cot1">TÊN ĐẦY ĐỦ:</td>
        <td class="cot2"><input type="text" value="<?php echo $hoten?>"></td>
    </tr>
    <tr class="dong">
        <td class="cot1">TUỔI :</td>
        <td class="cot2"><input type="text" value="<?php echo $age?>"></td>
    </tr>
    <tr class="dong">
       <td class="cot1">EMAIL :</td>
        <td class="cot2"><input type="text" value="<?php echo $email?>"></td>
    </tr>
    <tr class="dong">
        <td class="cot1">MÃ ĐỊNH DANH :</td>
        <td class="cot2"><input type="text" value="<?php echo $mddanh?>"></td>
    </tr>
</table>