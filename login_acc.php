<a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng Nhập</a>
<div id="id01" class="modal">
	<form class="modal-content animate" action="login.php" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="images/ARTrcat.gif" alt="Avatar" class="avatar">
		</div>
		<div class="container">
			<label for="uname"><b style="color:rgb(0, 2, 134);">Tên đăng nhập:</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>
			<label for="psw"><b style="color:rgb(0, 2, 134);">Mật Khẩu:</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
                                <button type="submit" name="dp">Đăng Nhập</button>
			<input type="checkbox" checked="checked" name="remember">
                                    <b style="color:rgb(255, 0, 157);">Remember me</b>
		</div>
		<div class="container" style="background-color:#f1f1f1">
			<span class="psw"><a href="#" style="color:darkcyan;">Forget password?</a></span>
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		</div>
	</form>
</div>