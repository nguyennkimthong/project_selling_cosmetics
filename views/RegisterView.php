<?php
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
?>
<link rel="stylesheet" href="assets/frontend/css/style11.css" />
<link rel="stylesheet" href="assets/frontend/css/style12.css" />
<link rel="stylesheet" href="assets/frontend/css/style13.css" />
<?php if(isset($_GET["notify"]) && $_GET['notify'] == 'error'): ?>
<p style="margin: 10px 0 10px;color: red;font-style: italic;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
<?php else: ?>
<p style="margin: 10px 0 10px;color: red;font-style: italic;"> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
<?php endif; ?>
<div style="margin-top: -120px;" class="content">
	<form method='post' action="index.php?controller=account&action=registerPost" class="form-vertical">
		<div class="title-block">
			<span class="text-bold">Create an account</span>
		</div>
		<div class="block-form-login">
			<div class="form-group novform-email">
				<input
				type="text"
				name="name"
				id="Email-login"
				class
				placeholder="Họ và tên"
				/>
			</div>
			<div class="form-group novform-email">
				<input
				type="text"
				name="email"
				id="Email-login"
				class
				placeholder="Email"
				required
				/>
			</div>
			<div class="form-group novform-email">
				<input
				type="text"
				name="address"
				id="Email-login"
				class
				placeholder="Địa chỉ"
				/>
			</div>
			<div class="form-group novform-email">
				<input
				type="text"
				name="phone"
				id="Email-login"
				class
				placeholder="Số điện thoại"
				/>
			</div>
			<div class="form-group novform-password">
				<input
				type="password"
				value
				name="password"
				id="HeaderPassword"
				class
				placeholder="Mật khẩu"
				required
				/>
				<div class="hide_show_password">
					<!-- <span class="show">
						<i class='fas fa-eye-slash'></i>
					</span> -->
				</div>
			</div>
			
			<div class="forgot_password">
				<input type="checkbox" id="cbx">
				<a href="" id="RecoverPassword"
					>Sign up for our newsletter
					<strong></strong>
				</a>
			</div>
			<div class="bank_register">
				If you have an account, please <a href="index.php?controller=account&aciton=login">Login Here</a>
			</div>
			<div class="form_submit">
				<input type="submit" class="btn" value="Register" />
			</div>
		</div>
	</form>
</div>