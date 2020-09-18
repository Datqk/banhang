<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom: 5px;">
	<?php 
		//kiem tra, neu don hang chua giao thi hien thi button giao hang
		$check = $this->model->get_a_record("select customer_id,trangthai from tbl_order where order_id=$order_id");
		if($check->trangthai == 0)
		{
	 ?>
	
		<a href="admin.php?controller=order_detail&act=sent&order_id=<?php echo $order_id; ?>" class="btn btn-primary">Giao hàng</a>&nbsp;
		<?php } ?>
		<a href="admin.php?controller=order" class="btn btn-danger">Quay lại</a>&nbsp;
	</div>
	<div class="card border-primary">
		<div class="card card-header bg-primary text-white" style="padding:7px !important;">Thông tin khách hàng</div>
		<div class="card-body">
			<table class="table table-hover table-bordered">
				<tr style="text-align: center;">
					<th style="width: 100px;">Họ và tên</th>
					<th>Địa chỉ</th>
					<th style="width: 100px;">Điện thoại</th>
				</tr>
				<?php 
		$customer = $this->model->get_a_record("select * from tbl_customer where customer_id=".$check->customer_id);
				?>		 
				<tr style="text-align: center;">
					<td style="text-align: center;"> <?php echo $customer->hovaten; ?></td>
					<td><?php echo $customer->diachi; ?></td>
					<td style="text-align: center;"><?php echo $customer->dienthoai; ?></td>
				</tr>
			</table>
			</div>
	</div>
	<br>
	<div class="card border-primary">
		<div class="card card-header bg-primary text-white" style="padding:7px !important;">Chi tiết hóa đơn</div>
		<div class="card-body">
			<table class="table table-hover table-bordered">
				<tr style="text-align: center;">
					<th style="width: 100px;">Ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th style="width: 100px;">Số lượng</th>

				</tr>
				<?php 
					foreach($arr as $rows)
					{
						//lay thong tin san pham
					$product = $this->model->get_a_record("select * from tbl_product where pk_product_id=".$rows->fk_product_id);
				 ?>				 
				 
				<tr style="text-align: center;">
					<td style="text-align: center;"><img src="public/upload/<?php echo $product->c_img; ?>" style="width:100px;"></td>
					<td><?php echo $product->c_name; ?></td>
					<td style="text-align: center;">
					<?php if($product->c_sale >0 ){
		$sale = $product->c_price - ($product->c_sale * $product->c_price)/100;
	 ?>

<strong><?php echo number_format($sale); ?>VNĐ</strong>
<?php }
		else{
		 ?>

<strong><?php echo number_format($product>c_price); ; ?></strong>
<?php } ?>
					</td>
					<td style="text-align: center;"><?php echo $rows->c_number; ?></td>
			
				</tr>
				<?php } ?>
			</table>
			</div>
			<div class="card-footer" style="padding:7px !important">
			<ul class="pagination">
				<li><a class="page-link" href="#">Trang</a></li>
				<?php 
					for($i = 1; $i<=$num_page; $i++)
					{
				 ?>
				<li <?php echo isset($_GET["p"])&&$_GET["p"]==$i ? "class='active'":""; ?> ><a class="page-link" href="admin.php?controller=order_detail&order_id=<?php echo $rows->order_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
			</ul>
			</div>
	</div>
</div>