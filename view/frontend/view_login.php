<?php if(isset($_GET["act"])&&$_GET["act"]=="fail"){ ?>
	<p style="color:red">Emai hoặc mật khẩu không đúng!</p>
<?php }else{ ?>
	<p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
<?php } //echo $password; echo $email; ?>
<div class="box grid-50 tablet-grid-50">
	<h2 class="subheader-font bigger-header margin-bottom">
		Đăng Nhập tài khoản
	</h2>
	<form class="content-form" action="" method="POST">
		<div class="form-input">
			<label for="email" class="middle-color">E-mail </label>
			<input type="email" class="text-input dark-color light-bg" name="email" id="email" required />
		</div>
		<div class="form-input">
			<label for="password" class="middle-color">Mật Khẩu</label>
			<input type="password" class="text-input dark-color light-bg" name="password" id="password" required />
		</div>
		<div style="margin-left: 100px;" class="form-submit">
			<button type="submit" class="button-normal button-with-icon light-color active-gradient dark-gradient-hover">
				Đăng Nhập
			</button>
		</div>
	</form>
	<div style="margin-top: -35px;" class="form-submit" >
		<button  class="button-normal button-with-icon light-color active-gradient dark-gradient-hover">
			<a href="index.php?controller=register" style="text-decoration: none;" >Đăng ký</a>
		</button>
	</div>
</div>