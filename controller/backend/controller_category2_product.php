<?php
	class controller_category2_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//------------
			//chức năng delete
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			switch($act){
				case "delete":
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					//xóa bản ghi tương ứng với id truyền vào
					$this->model->execute("delete from tbl_category2_product where pk_category2_product_id=$id");
					header("location:admin.php?controller=category2_product");
				break;
			}
			//------------
			//--------------
			//phân trang
			//quy định phân trang
			$record_per_page = 10;
			//tính tổng số bản ghi
			$total = $this->model->num_rows("select pk_category2_product_id from tbl_category2_product");
			//tính xem có bao nhiêu trang 
			$num_page = ceil($total/$record_per_page);
			// lấy biến p (là bản ghi trang hiện tại) truyền từ url
			$p = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;
			// lấy từ bản ghi nào
			$from = $p*$record_per_page;
			//thực hiện truy vấn có phân trang
			$arr = $this->model->get_all("select * from tbl_category2_product order by pk_category2_product_id asc limit $from,$record_per_page");
			//--------------
			//load view
			include "view/backend/view_category2_product.php";
		}
	}
new controller_category2_product();
?>