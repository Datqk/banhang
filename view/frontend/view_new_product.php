
<?php
foreach($arr as $rows)
{
?>
	<div class="grid-25 tablet-grid-50">
		<div class="product-box light-bg">
			<div class="ribbon-small ribbon-blue">
				<div class="ribbon-inner">
					<span class="ribbon-text">New</span>
					<span class="ribbon-aligner"></span>
				</div>
			</div>
			<a class="product-img" href="index.php?controller=detail_product&id=<?php echo $rows->pk_product_id; ?>">
				<span><img src="public/upload/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"/></span>
			</a>
			<div class="product-info light-bg middle-border">
				<h3 class="product-title subheader-font">
					<a href="product/detail/<?php echo remove_unicode($rows->c_name)?>/<?php echo $rows->pk_product_id; ?>" class="dark-color active-hover">
						<strong><?php echo $rows->c_name; ?></strong>
					</a>
				</h3>
				<?php
				$category = $this->model->get_a_record("select c_name from tbl_category2_product where pk_category2_product_id=".$rows->fk_category2_product_id);
				{
				?>
				<a href="product/category2/<?php echo remove_unicode($category->c_name)?>/<?php echo $rows->fk_category2_product_id; ?>" class="product-category middle-color dark-hover">
				<?php 
				//lay mot ban ghi, goi ham get_a_record() trong model
					echo isset($category->c_name)?$category->c_name:"";
				?>
				</a>
				<?php } ?>
				<div class="product-bottom">
					<?php if($rows->c_sale >0 ){
						$sale = $rows->c_price - ($rows->c_sale * $rows->c_price)/100;
					?>
					<div class="product-price active-color">
						<del class="light-gradient middle-border dark-color"><?php echo number_format($rows->c_price); ?> VNĐ</del>
						<strong><?php echo number_format($sale); ?>VNĐ</strong>
					</div>
					<?php }
					else{
					?>
					<div class="product-price active-color">
						<strong><?php echo number_format($rows->c_price); ; ?></strong>
					</div>
					<?php } ?>
					<div class="clear"></div>
					<div class="button-dual light-color transition-all">
						<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="button-dual-left middle-gradient dark-gradient-hover">
							Mua<i class="icon-shopping-cart"></i>
						</a>
						<a class="button-dual-right middle-gradient dark-gradient-hover">
							<i class="icon-angle-down"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> 
<?php } ?>
<div class="grid-100 clear-before">
</div> 