<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Thanh toán</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr style="text-align: center;">
					<th>Tên khách hàng</th>
					<th>Ngày mua</th>
					<th>Đơn giá</th>
					<th style="width: 150px;">Trạng thái</th>
					<th style="width: 200px">Quản lý</th>
				</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
				<tr>
					<td><?php echo $rows->hovaten; ?></td>
					<td style="text-align: center;">
					<?php 
						$date = date_create($rows->ngaymua);
						echo date_format($date,"d/m/Y"); 
					?></td>
					<td style="text-align: center;"><?php echo number_format($rows->gia); ?> VNĐ</td>
					<td style="text-align: center;">
						<?php echo $rows->trangthai==1?"Đã giao hàng":"<span style='color:red;'>Chưa giao hàng</span>" ?>
					</td>
					<td style="text-align: center;">
					<a href="admin.php?controller=order_detail&order_id=<?php echo $rows->order_id; ?>">Chi tiết</a>
					&nbsp;&nbsp;
						<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=order&act=delete&id=<?php echo $rows->order_id; ?>">Delete</a>
						
					</td>
				</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php 
					for($i = 1; $i<=$num_page; $i++)
					{
				 ?>
				<li class="page-item" <?php echo isset($_GET["p"])&&$_GET["p"]==$i ? "class='active'":""; ?> ><a class="page-link" href="admin.php?controller=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>