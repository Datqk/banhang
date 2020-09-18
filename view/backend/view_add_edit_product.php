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
							<div class="col-md-2 text-right">Tiêu đề</div>
							<div class="col-md-10">
<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:''; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
						<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục1</div>
							<div class="col-md-10">
							<select name="fk_category_product_id">
								<option value="0"></option>
	<?php 
		//lay toan bo ban ghi trong tbl_category_product
		$category2 = $this->model->get_all("select * from tbl_category_product");
		foreach($category2 as $rows2)
		{
	 ?>
<option <?php if(isset($arr->fk_category_product_id)&&$arr->fk_category_product_id==$rows2->pk_category_product_id){ echo "selected"; } ?> value="<?php echo $rows2->pk_category_product_id; ?>"><?php echo $rows2->c_name; ?></option>
	<?php } ?>
	</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục2</div>
							<div class="col-md-10">
							<select name="fk_category2_product_id">
								<option value="0"></option>
	<?php 
		//lay toan bo ban ghi trong tbl_category_product
		$category = $this->model->get_all("select * from tbl_category2_product");
		foreach($category as $rows)
		{
	 ?>
<option <?php if(isset($arr->fk_category2_product_id)&&$arr->fk_category2_product_id==$rows->pk_category2_product_id){ echo "selected"; } ?> value="<?php echo $rows->pk_category2_product_id; ?>"><?php echo $rows->c_name; ?></option>
	<?php } ?>
	</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu</div>
							<div class="col-md-10">
								<textarea name="c_description">
<?php echo isset($arr->c_description)?$arr->c_description:""; ?>
								</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("c_description");
					</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Chi tiết</div>
							<div class="col-md-10">
								<textarea name="c_content">
<?php echo isset($arr->c_content)?$arr->c_content:""; ?>								
								</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("c_content");
					</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<input type="checkbox" <?php echo isset($arr->c_hotproduct)&&$arr->c_hotproduct==1 ? "checked":""; ?> name="c_hotproduct"> Sản phẩm nổi bật
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Sale</div>
							<div class="col-md-10">
<input type="text" name="c_sale" value="<?php echo isset($arr->c_sale)?$arr->c_sale:''; ?>" required>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Màu</div>
							<div class="col-md-10">
							<select name="c_color">
								<option value="0"></option>
	<?php 
		//lay toan bo ban ghi trong tbl_category_product
		$category1 = $this->model->get_all("select * from tbl_color");
		foreach($category1 as $rows1)
		{
	 ?>
<option <?php if(isset($arr->c_color)&&$arr->c_color==$rows1->c_name){ echo "selected"; } ?> 
value="<?php echo $rows1->c_name?>"><?php echo $rows1->c_name; ?></option>
	<?php } ?>
	</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Size</div>
							<div class="col-md-10">
<input type="text" name="c_size" value="<?php echo isset($arr->c_size)?$arr->c_size:''; ?>" required >
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giá</div>
							<div class="col-md-10">
<input type="text" name="c_price" value="<?php echo isset($arr->c_price)?$arr->c_price:''; ?>" required >
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh</div>
							<div class="col-md-10">
							<input type="file" name="c_img">
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