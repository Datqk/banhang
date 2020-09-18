<?php 
	class controller_hot1_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay 4 san pham noi bat -> c_hotproduct=1
			$arr = $this->model->get_all("select * from tbl_product where c_hotproduct=1 limit 0,4");
			//load view
			include "view/frontend/view_hot1_product.php";
			
		}
	}
	new controller_hot1_product();
 ?>