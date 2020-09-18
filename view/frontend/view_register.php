 
<div class="content-with-sidebar grid-75">
	<p>Nếu bạn đã có tài khoản với chúng tôi, vui lòng đăng nhập 
		<a href="index.php?controller=login" class="active-color dark-hover"><strong style="color: blue;">tại trang đăng nhập</strong></a>
	</p>
	<h1>Đăng ký tài khoản</h1>
	<?php 
	if(isset($_GET["act"])&&$_GET["act"]=="success")
	{
		?>
		<p style="color:red;">Bạn đã đăng ký thành công!</p>
	<?php }else{ ?>
		<p>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
	<?php } ?>
	<form class="content-form margin-bottom" action="" method="POST">
		<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
			<div class="content-page grid-100">
				<h2 class="bigger-header with-border subheader-font">
					Thông tin cá nhân
				</h2>
				<div class="form-input">
					<label for="first_name" class="middle-color">Họ Và Tên 
						<span class="active-color">*</span>
					</label>
					<input type="text" class="text-input dark-color light-bg"
						name="hovaten" required />
				</div>
				<div class="form-input">
				<label for="email" class="middle-color">E-mail 
					<span class="active-color">*</span></label>
					<input type="email" class="text-input dark-color light-bg"
					name="email" id="email" required />
				</div>
				<div class="form-input">
					<label for="phone" class="middle-color">Số điện thoại 
						<span class="active-color">*</span></label>
						<input type="number" class="text-input dark-color light-bg" 
						name="dienthoai" required />
				</div>
				<div class="form-input">
					<label for="diachi" class="middle-color">Địa chỉ
					<span class="active-color">*</span></label>
					<input type="text" class="text-input dark-color light-bg" 
						name="diachi" required />
				</div>
			</div>
		</div>
		<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
			<div class="content-page grid-100">
				<h2 class="bigger-header with-border subheader-font">
					Mật Khẩu của bạn
				</h2>
				<div class="form-input">
					<label for="password" class="middle-color">Mật Khẩu
						<span class="active-color">*</span></label>
						<input type="password" class="text-input dark-color light-bg" 
						name="password" id="password" value="" min="6" max = "24"/>
				</div>
				<div class="form-input">
					<label for="confirm_password" class="middle-color">Nhập lại mật khẩu
						<span class="active-color">*</span>
					</label>
					<input type="password" class="text-input dark-color light-bg" 
					name="confirm_password" id="confirm_password" value=""/>
				</div>
			</div>
		</div>
		<p class="align-center middle-color">Tôi đã đọc và đồng ý với
			<a href="#" class="active-color dark-hover">
				<strong>Chính sách bảo mật</strong>
			</a>
		</p>
		<div class="form-submit">
			<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">Tạo tài khoản mới</button>
		</div>
	</form>
</div> 