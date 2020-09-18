<?php 
	class controller_search{
		public $model;
		public function __construct(){
			$this->model = new model();
			$search= addslashes(isset($_GET["tukhoa"])?$_GET["tukhoa"]:"");
			//$search = mysql_real_escape_string($search);
			if (empty($search)) {
                echo "Vui lòng nhập từ khóa!";
            }
            else{
				//dinh nghia so ban ghi tren 1 trang
			$record_per_page = 10;
	//tinh tong so ban ghi
	$total = $this->model->num_rows("select pk_product_id from tbl_product where 
		c_name like '%$search%' or c_description like '%$search%'");
	//tinh xem co bao nhieu trang
	$num_page = ceil($total/$record_per_page);
	//lay bien p (la ban chi trang hien tai) truyen tu url
	$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
	//lay tu ban ghi nao
	$from = $p*$record_per_page;
			//thuc hien cau truy van de lay danh sach cac ban ghi
			$arr = $this->model->get_all("select * from tbl_product  where 
				c_name like '%$search%' or c_description like '%$search%'  limit $from,$record_per_page");
			//---------
			//load view
			include "view/frontend/view_search.php";
			}
			//---------
			
		}
	}
	
	new controller_search();
 ?>
