<?php 
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model.php
	include "model/model.php";
	//kiem tra xem user da dang nhap chua, neu chua dang nhap thi hien thi MVC login, neu da dang nhap thi hien thi cac chuc nang cua admin
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	//gan gia tri de bien $controller tro thanh duong dan thuc (la duong dan tro den file controller can load ra)
	if($controller == "" || file_exists("controller/frontend/controller_$controller.php") == false)
		$controller = "controller/frontend/controller_home.php";
	else
		$controller = "controller/frontend/controller_$controller.php";
	//load file master
	if(file_exists($controller))
		include "view/frontend/master_product.php";
	else
		include "view/frontend/master_index.php";
 ?>