﻿<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<base href="http://https://banhang12345678.herokuapp.com/">
<title>Shoppie - Thời trang Online</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
<meta property="og:image" content="public/images/facebook-like-image.jpg">
 
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700" type="text/css">
<link rel="stylesheet" href="public/frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="public/frontend/css/unsemantic.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/responsive.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="public/frontend/js/juicy/css/juicy.css" type="text/css">
<link rel="stylesheet" href="public/frontend/js/juicy/css/themes/shoppie/style.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/colors/red.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/base.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/layout.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/pages/homepage.css" type="text/css">
 
<link rel="shortcut icon" href="public/images/icons/favicon.ico">
<link rel="apple-touch-icon" sizes="152x152" href="public/images/icons/apple-touch-icon-152.png">
<link rel="apple-touch-icon" sizes="120x120" href="public/images/icons/apple-touch-icon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="public/images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" href="public/images/icons/apple-touch-icon.png">
<!--[if lt IE 9]>
        <script src="js/html5shim.js"></script>
        <![endif]-->
</head>
<body class="body-background2 content-font dark-color">
<?php
	//load file remove_unicode.php
	include "remove_unicode.php";
	?>
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1&appId=331995390170685";
//            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<a id="top"></a>
<header>
 
<nav class="top-menu grid-container hide-on-tablet hide-on-mobile">
<div class="grid-100">
<div class="fb-like" data-href="#" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
<div class="top-menu-left">
<ul>
<li>
<!--<a href="blog.html" class="dark-color">Blog</a>-->
</li>
<li>
<a href="#" class="dark-color">Về chúng tôi</a>
</li>
<li>
<a href="#" class="dark-color">Tài khoản của bạn</a>
</li>
</ul>
</div>
<div class="top-menu-right">
<ul>
<li>
	 <?php 
		  	//kiem tra, neu user da dang nhap thi hien thi thong tin user
		  	if(isset($_SESSION["customer_email"]))
		  	{
		   ?>
		   Xin chào <?php echo $_SESSION["customer_email"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?controller=login&act=logout">Logout</a>
		   <?php }else{ ?>
<a href="login" class="dark-color" onclick="Global.clickShowToggle('#quick-login'); return false;">
<i class="icon-off"></i>
Đăng nhập
</a>
 
<form action="index.php?controller=login" method="POST">
<ul class="popup-box quick-login cream-bg" id="quick-login">
<li class="arrow-top"><span class="shadow cream-bg"></span></li>
<li class="close-button">
<a href="#" class="circle-button middle-bg active-bg-hover" onclick="Global.clickShowToggle('#quick-login'); return false;"><span class="cancel"></span></a>
</li>
<li>
<input class="text-input dark-color light-bg" type="text" name="email" placeholder="your email">
</li>
<li>
<input class="text-input dark-color light-bg" type="password" name="password" placeholder="enter password">
</li>
<li class="clearfix">
<a href="login" class="forgotten-link middle-color float-left"></a>
<button class="button-small button-with-icon float-right light-color middle-gradient dark-gradient-hover" type="submit">
Đăng Nhập
<span><i class="icon-angle-right"></i></span>
</button>
</li>
</ul> 
</form>
</li>
<li>
<a href="register" class="dark-color">Đăng Ký</a>
</li>
	<?php } ?>
</ul>
</div>
</div>
</nav> 
 
<div class="header-middle grid-container light-gradient">
<div class="grid-100">
<a href="trang-chu" class="header-logo grid-20" title="Shoppie">
<img src="public/images/img-shoppie.png" alt="Shoppie"/>
</a>
<div class="grid-80 remove-whitespaces">
<div class="header-middle-box">
<script type="text/javascript">
              function search(){
                tukhoa = document.getElementById("tukhoa").value;
                location.href="index.php?controller=search&tukhoa="+tukhoa;
                return false;
              }
            </script>
<!-- <form action="" method="POST">
<input type="text" id="tukhoa" class="text-input input-round dark-color light-bg" value="" placeholder="Search..." onclick="return search();">
<button type="submit" class="btn btn-success"><i class="icon-search"></i></button>
</form> -->
<form class="form-inline mr-auto">
      <input class="form-control" type="text" id="tukhoa" placeholder="Search" aria-label="Search">
      <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2"
      onclick="return search();" type="submit">Search</button>
</form>
</div>
<div class="header-middle-box last-box hide-on-mobile hide-on-tablet">
<div class="header-cart" id="header-cart">
<a href="cart" class="text-input input-round dark-color light-bg">
<?php include "controller/frontend/controller_cart1.php"; ?>
</a>
</div>
</div>
</div>
</div>
</div> 
 <nav class="main-menu grid-container" id="main-menu">
<div class="mobile-overlay"></div>
<ul class="main-menu-mobile">
<li class="middle-color light-hover">
<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-reorder"></i>
</a>
</li>
<li class="middle-color light-hover">
<a href="trang-chu" class="main-menu-item"><i class="icon-home"></i></a>
</li>
<li class="main-menu-cart active-color light-hover">
<a href="index.php?controller=cart" class="main-menu-item">
<i class="icon-shopping-cart">&nbsp;</i>
Giỏ Hàng
</a>
</li>
<li class="middle-color light-hover">
<a href="#sidebar-mobile" class="main-menu-item click-slide"><i class="icon-ellipsis-vertical"></i></a>
</li>
</ul> 
 
<ul class="main-menu-desktop dark-gradient transition-all" id="menu-mobile">
<li class="middle-color light-hover home">
<a href="trang-chu" class="main-menu-item transition-all"><i class="icon-home"></i></a>
</li>
<li class="middle-color light-hover back">
<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-chevron-left"></i></a>
</li>
 <?php include "controller/frontend/controller_category_product.php"; ?>
</ul>
</nav> 
</header>
 
<section class="page-content">
 
<div class="page-block page-tabs-block cream-bg grid-container">
 
<div class="page-tabs grid-100 shoppie-tabs">
<h2 class="header-font">
<a class="light-color active-hover dark-gradient cream-gradient-hover transition-color" href="#tab-recomend">
<span class="hide-on-mobile">Sản Phẩm mới nhất</span>
<i class="icon-thumbs-up hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="light-color active-hover dark-gradient cream-gradient-hover transition-color" href="#tab-top-seller">
<span class="hide-on-mobile">Sản phẩm đang sale</span>
<i class="icon-heart hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="light-color active-hover dark-gradient cream-gradient-hover transition-color" href="#tab-top-rated">
<span class="hide-on-mobile">Sản phẩm đang hot</span>
<i class="icon-star hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
</div>  
<div class="page-tabs-holder">
 
<div class="page-tab" id="tab-recomend">
 
 <?php include "controller/frontend/controller_new_product.php"; ?>
<div class="grid-100 clear-before">
	</div> 
</div> 
 
<div class="page-tab" id="tab-top-seller">
 <div class="header-font">
<h3 style="margin-left: 10px;"> Sản phẩm đang sale</h3>
	</div>
<?php include "controller/frontend/controller_sale_product.php"; ?> 
<div class="grid-100 clear-before">
</div> 
</div> 
 
<div class="page-tab" id="tab-top-rated">
<div class="header-font">
<h3 style="margin-left: 10px;"> Sản phẩm đang Hot</h3>
	</div>
<?php include "controller/frontend/controller_hot_product.php"; ?> 
</div> 
</div>
<div class="grid-100 clear-before">
</div>
</div> 
</section>
<footer>
 
<div class="footer-top grid-container clearfix">
<div class="grid-50 grid-parent">
<div class="grid-33 tablet-grid-33">
<h3 class="light-color subheader-font">
<strong>hỗ trợ của chúng tôi</strong>
</h3>
<ul class="middle-color">
<li class="light-hover">
<a href="#">Thông tin giao hàng</a>
</li>
<li class="light-hover">
<a href="#">Chính sách bảo mật</a>
</li>
<li class="light-hover">
<a href="#">Điều khoản & Điều kiện</a>
</li>
<li class="light-hover">
<a href="#">Liên hệ với chúng tôi</a>
</li>
</ul>
</div>
<div class="grid-33 tablet-grid-33">
<h3 class="light-color subheader-font">
<strong>Dịch vụ của chúng tôi</strong>
</h3>
<ul class="middle-color">
<li class="light-hover">
<a href="my-account.html">Tài khoản của tôi</a>
</li>
<li class="light-hover">
<a href="#">Lịch sử giao hàng</a>
</li>
<li class="light-hover">
<a href="#">Trả lại</a>
</li>
</ul>
</div>
<div class="grid-33 tablet-grid-33">
<h3 class="light-color subheader-font">
<strong>Thông Tin</strong>
</h3>
<ul class="middle-color">
<li class="light-hover">
<a href="#">Về chúng tôi</a>
</li>
<li class="light-hover">
<a href="#">Thông tin giao hàng</a>
</li>
<li class="light-hover">
<a href="#">Chính sách bảo mật</a>
</li>
<li class="light-hover">
<a href="#">Điều khoản & Điều kiện</a>
</li>
</ul>
</div>
</div>
<div class="grid-50 grid-parent">
<div class="grid-50 tablet-grid-50">
<h3 class="light-color subheader-font">
<strong>Thanh Toán</strong>
</h3>
<a href="#"><img src="public/images/icons/icon-visa-e.png" alt="Visa Electron"/></a>
<a href="#"><img src="public/images/icons/icon-mastercard.png" alt="MasterCard"/></a>
<a href="#"><img src="public/images/icons/icon-paypal.png" alt="PayPal"/></a>
<a href="#"><img src="public/images/icons/icon-visa.png" alt="Visa"/></a>
</div>
<div class="grid-50 tablet-grid-50">
<h3 class="light-color">
<strong>Trợ giúp</strong>
</h3>
<p class="middle-color">
Để lại gmail để trợ giúp
</p>
<form method="POST" action="#">
<div class="input-with-button">
<input type="text" placeholder="Enter your email..." name="email" class="text-input dark-color light-bg">
<button type="submit" class="middle-color dark-hover"><i class="icon-plus"></i></button>
</div>
</form>
</div>
</div>
</div> 
 
<div class="footer-bottom grid-container clearfix">
<div style="float: right" class="footer-social grid-30">
<a href="#" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-facebook-sign"></i>
</a>
<a href="#" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-twitter"></i>
</a>
<a href="#" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-linkedin-sign"></i>
</a>
<a href="#" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-pinterest-sign"></i>
</a>
<a href="#" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-google-plus-sign"></i>
</a>
</div>
</div> 
</footer>
 
 
<script type="text/javascript" src="public/frontend/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="public/frontend/js/juicy/js/jquery.juicy.js"></script>
<script type="text/javascript" src="public/frontend/js/shoppie.scripts.js"></script>
<script type="text/javascript">
   Global.documentReady(); 
            Homepage.documentReady();
</script>
<script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-29358822-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
</script>
</body>
</html>