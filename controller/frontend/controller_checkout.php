<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			
			$this->model = new model();
			//kiem tra, neu user chua dang nhap (hoac session timeout) thi yeu cau dang nhap
			if(isset($_SESSION["customer_id"]) == false)
				echo "<script language='javascript'>location.href='index.php?controller=login';</script>";
			$customer_id = $_SESSION["customer_id"];
			//them ban ghi vao tbl_order va lay order_id vua them vao, khoa ngoai la customer_id
			$gia = 0;	
			foreach($_SESSION["cart"] as $product){
				if($product['c_sale'] > 0){
					
		        $gia += ($product['c_price'] - ($product['c_sale'] * $product['c_price'])/100)* $product['number'];
				}
				else
		        $gia += $product['c_price'] * $product['number'];
			}
			$order_id = $this->model->execute("insert into tbl_order(customer_id,ngaymua,gia,trangthai) values($customer_id,now(),$gia,0)");
			//them ban ghi vao tbl_order_detail voi khoa ngoai la order_id
	
			foreach($_SESSION["cart"] as $product){
				$fk_product_id=$product["pk_product_id"];
				$c_number=$product["number"];
				$this->model->execute("insert into tbl_order_detail(order_id,fk_product_id,c_number) values($order_id,$fk_product_id,$c_number)");
				
				
			}
			//xoa gio hang 
			 $_SESSION['cart'] = array();
			 echo "<script language='javascript'>location.href='cart';</script>";
		}
	}
	new controller_checkout();
 ?>
 
