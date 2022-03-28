<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/frontend/css/style.css">
		<link rel="stylesheet" href="assets/frontend/css/style1.css">
		<link rel="stylesheet" href="assets/frontend/css/style2.css">
		<link rel="stylesheet" href="assets/frontend/css/style3.css">
		<link rel="stylesheet" href="assets/frontend/css/style4.css">
		<link rel="stylesheet" href="assets/frontend/css/style5.css">
		<link rel="stylesheet" href="assets/frontend/css/style6.css">
		<link rel="stylesheet" href="assets/frontend/css/style7.css">
		<link rel="stylesheet" href="assets/frontend/css/style8.css">
		<link rel="stylesheet" href="assets/frontend/css/style9.css">
		<link rel="stylesheet" href="assets/frontend/css/stylefix.css">
		<!--css new-->
		<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
		<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
		<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
		<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
		<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
		<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
		<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
		<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
		<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
		<!--/css new-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<title>Danh mục sản phẩm</title>
	</head>
	<body>
		<!--chat-->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61daa986b84f7301d32a1378/1fov2cdev';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <!--/chat-->
		<div class="container-fluid">
			<?php include "views/HeaderView.php"; ?>
			<hr style="margin: 0;" >
			
			<!-- main -->
			
			<?php echo $this->view; ?>
			
			<!-- end main -->
		</div>
		<div style="margin-top: 3180px;" class="footer">
			<div class="menu-footer">
				<div class="item-footer">
					<ul>
						<li><h4>COMPANY</h4></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Store Locations</a></li>
						<li><a href="#">Careers</a></li>
					</ul>
				</div>
				<div class="item-footer">
					<ul>
						<li><h4>HELP</h4></li>
						<li><a href="">Order Tracking</a></li>
						<li><a href="">FAQ’s</a></li>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="item-footer">
					<ul>
						<li><h4>STORE</h4></li>
						<li><a href="">New</a></li>
						<li><a href="">Skincare</a></li>
						<li><a href="">Makeup</a></li>
						<li><a href="">Sale</a></li>
					</ul>
				</div>
				<div class="item-footer1">
					<h4>FOLLOW US</h4>
					<p>And get Free Shipping on all your orders!</p>
					<div class="icon-footer">
						<ul>
							<li><i class="fab fa-facebook-f"></i></li>
							<li><i class="fab fa-instagram"></i></li>
							<li><i class="fab fa-twitter"></i></li>
							<li><i class="fab fa-pinterest"></i></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="ft-footer">
				<h2>Sign up now & get 10% off</h2>
				<p>Be the first to know about our new arrivals and exclusive offers.</p>
				<div class="btn-footer">
					<input type="text" placeholder="Your email address">
					<button>Send</button>
				</div>
				<hr />
				<div class="end"><h4>©2021 NovaThemes</h4></div>
			</div>
		</div>
	</div>
</div>
<style>
.sticker{
position: fixed;
right: 5%;
top: 80%;
font-size: 30px;
opacity: .4;
}
</style>
<span class="glyphicon glyphicon-upload sticker" onclick="getBackToBeginning()"></span>
<script>
function getBackToBeginning() { window.scrollTo(0, 0);
}
</script>
</body>
<script src="assets/frontend/js/script1.js"></script>
<!--js new-->
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
<!--/js new-->
</html>