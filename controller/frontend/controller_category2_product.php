<?php 
	class controller_category2_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//lay tat ca cac ban ghi
			$arr = $this->model->get_all("select * from tbl_category_product order by pk_category_product_id asc");
			//load view
			include "view/frontend/view_category2_product.php";
		}
	}
	new controller_category2_product();
 ?>