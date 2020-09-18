<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit product</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Loại sản phẩm</div>
							<div class="col-md-10">
<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục</div>
							<div class="col-md-10">
							<select name="fk_category_product_id">
								<option value="0"></option>
	<?php 
		//lay toan bo ban ghi trong tbl_category_product
		$category = $this->model->get_all("select * from tbl_category_product");
		foreach($category as $rows)
		{
	 ?>
		<option <?php if(isset($arr->fk_category_product_id)&&$arr->fk_category_product_id==$rows->pk_category_product_id){ echo "selected"; } ?> value="<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></option>

	<?php } ?>
	</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>