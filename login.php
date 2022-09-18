<?php
    $user = "";
    $psw = "";
    $name = "";
    if(isset($_POST['dp'])){
        $user = $_POST['uname'];
        $psw = $_POST['psw'];
        try{
            $servername="localhost";
            $username="root";
            $password="";
            $database="ql_events"; // ten CSDL qlsua;
        
            $cn = mysqli_connect($servername, $username, $password, $database);
            
        }catch(Exception $ex) {
            exit($ex->getMessage()); 
        }
        $anum = 0;
        $sql = "SELECT count(Username) as num FROM login_control";
        $result = mysqli_query($cn,$sql);
        $row = mysqli_fetch_assoc($result);
        $num = $row['num'];
        $sql = "SELECT Username,Hoten FROM login_control";
        $result = mysqli_query($cn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $check_uname = $row['Username'];
            $name = $row['Hoten'];
            if($user == $check_uname){
                continue;
            }
            else{
                $anum++;
            }
        }
        if($anum == $num -1){
            echo '<form action="TrangChu.php?user='.$user.'&name='.$name.'" method="post">';
            echo '<p>BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG !!</p>';
            echo 'Xin chào:'.$name.'</br>';
            echo 'Với tài khoản đăng nhập là : '.$user.'</br>';
            echo '<button type="submit" name="oke_tc">Chuyển Tiếp</button></form>';
        }else{
            echo '<form action="TrangChu.php" method="post">';
            echo '<p>BẠN ĐĂNG NHẬP KHÔNG THÀNH CÔNG !!</p>';
            echo '<button type="submit" name="oke_tb">QUAY LẠI</button></form>';
        }
    }
?>