<?php 
	class controller_login{
		public function __construct(){
			$this->model = new model();
			//---------
			//logout
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "logout":
					$_SESSION["customer_id"] = null;
					$_SESSION["customer_email"] = null;
					echo "<script language='javascript'>location.href='index.php';</script>";
				break;
			}
			//---------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST["email"];
				//$email = mysql_real_escape_string($email);
				$password = $_POST["password"];
				//$password = mysql_real_escape_string($email);
				//$password1 = md5($password);
				//kiem tra thong tin trong csdl
				$this->model->execute("insert into tbl_customer(email,password) values('$email','$password')");
				echo $email; echo $password;
				//$arr = $this->model->get_a_record("select customer_id,email,password from tbl_customer where email='$email'");
				//if(isset($arr->email)){
					//kiem tra password
					//if($password1 == $arr->password){
						//dang nhap thanh cong
						//$_SESSION["customer_id"] = $arr->customer_id;
						//$_SESSION["customer_email"]= $email;
						//echo "<script language='javascript'>location.href='index.php';</script>";
						// header("location:index.php");
					//}else{
						//echo "<script language='javascript'>location.href='index.php?controller=login&act=fail';</script>";
						//echo "Email hoặc mật khẩu không chính xác";
						// header("location:index.php?controller=login&act=fail");
					//}
				//}else{
					//echo "<script language='javascript'>location.href='index.php?controller=login&act=fail';</script>";
					//echo "Email hoặc mật khẩu không chính xác";
					// header("location:index.php?controller=login&act=fail");
				//}
				echo "<script language='javascript'>location.href='http://banhang4.000webhostapp.com/banhang4/';</script>";
					// header("location:index.php");
			}
			//---------
			//load view
			//include "view/frontend/view_login.php";
		}
	}
	new controller_login();
 ?>