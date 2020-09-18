<?php 
	class controller_detail_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//lay mot ban ghi
			$arr1 = $this->model->get_all("select * from tbl_product where pk_product_id=$id");
			$arr = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
			//load view
			include "view/frontend/view_detail_product.php";
		}
	}
	new controller_detail_product();
 ?>