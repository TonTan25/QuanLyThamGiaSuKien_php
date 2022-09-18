<a onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Đăng Ký</a>
<div id="id02" class="modal">
	<form class="modal-content animate" action="smallclass/signup_acc.php" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="images/ARTrcat.gif" alt="Avatar" class="avatar">
		</div>
		<div class="container">
			<label for="uname"><b style="color:rgb(0, 2, 134);">Tên đăng nhập :</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>
			<label for="psw"><b style="color:rgb(0, 2, 134);">Mật Khẩu :</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
                                <label for="rwpsw"><b style="color:rgb(0, 2, 134);">Nhập lại Mật Khẩu :</b></label>
			<input type="password" placeholder="Enter Password" name="rwpsw" required>
                                <button type="submit" name="dk">Đăng Ký</button>
		</div>
		<div class="container" style="background-color:#f1f1f1">
			<span class="psw"><a href="#" style="color:darkcyan;">Do you want Another Choice?</a></span>
                                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		</div>
	</form>
</div>