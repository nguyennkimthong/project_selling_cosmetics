<?php 
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
<link rel="stylesheet" href="assets/frontend/css/style11.css" />
<link rel="stylesheet" href="assets/frontend/css/style12.css" />
<link rel="stylesheet" href="assets/frontend/css/style13.css" />
<p style="margin: 10px;font-style: italic;">Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
<div class="content">
        <form style="margin: 0px auto;" method='post' action="index.php?controller=account&action=loginPost" class="form-vertical">
          <div class="title-block">
            <span class="text-bold">SIGN IN</span>
          </div>
          <div class="block-form-login">
            <div class="title-form">
              <span>Insert your account information:</span>
            </div>
            <div class="form-group novform-email">
              <input
                type="email"
                name="email"
                id="Email-login"
                class
                placeholder="Email"
              />
            </div>
            <div class="form-group novform-password">
              <input
                type="password"
                value
                name="password"
                id="HeaderPassword"
                class
                placeholder="Password"
              />
              <div class="hide_show_password">
                <!-- <span class="show">
                  <i class='fas fa-eye-slash'></i>
                </span> -->
              </div>
            </div>
            <div class="forgot_password">
              <i class="material-icons">email</i>
              <a href="" id="RecoverPassword">Forgot your <strong> Password ?</strong> </a>
            </div>
            <div class="bank_register">
              If you have an account, please <a href="index.php?controller=account&action=register">Register Here</a>
            </div>
            <div class="form_submit">
              <input type="submit" class="btn" value="Login">
            </div>
          </div>
        </form>
      </div>