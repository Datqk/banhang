<?php 
	class controller_sale_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay 4 san pham moi nhat -> co id lon nhat
			$arr = $this->model->get_all("select * from tbl_product order by c_sale desc limit 0,4");
			//load view
			include "view/frontend/view_sale_product.php";
		}
	}
	new controller_sale_product();
 ?>