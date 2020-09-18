<?php 
	class controller_register{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hovaten = $_POST["hovaten"];
				$email = $_POST["email"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				//kiem tra thong tin trong csdl
				// echo $email;
				$arr = $this->model->get_a_record("select email from tbl_customer where email='$email'");
				if(isset($arr->email)){
					echo "email đã tồn tại";
				}
				else {
				if(($password1 = $_POST["password"]) == ($confirm_password = $_POST["confirm_password"])){
				$password = md5($password1);
				//insert thong tin vao csdl
				$this->model->execute("insert into tbl_customer(hovaten,email,diachi,dienthoai,password) values('$hovaten','$email','$diachi','$dienthoai','$password')");
				// header("location:index.php?controller=register&act=success");
				echo "<script language='javascript'>location.href='index.php?controller=register&act=success';</script>";
				}
				
				else{ echo "Mật khẩu không khớp"; }
				
			}
		}
			//----------
			//load view
			include "view/frontend/view_register.php";
		}
	}
	new controller_register();
 ?>