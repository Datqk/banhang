<?php 
	class controller_new1_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay 4 san pham moi nhat -> co id lon nhat
			$arr = $this->model->get_all("select * from tbl_product order by pk_product_id desc limit 0,4");
			//load view
			include "view/frontend/view_new1_product.php";
		}
	}
	new controller_new1_product();
 ?>