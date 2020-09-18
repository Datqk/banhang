 <div class="grid-100 margin-bottom">
 	<div class="well-shadow well-box last light-bg">
 		<div class="product-sort hide-on-mobile">
 			<h4 class="middle-color active-hover selected">Tất cả sản phẩm</h4>
 		</div>
 	</div>
 </div>
 <?php
 	$dmc = "";
	 if(isset($_GET["dmc"])){
	 	$dmc = $_GET["dmc"];
	 	$record_per_page = 2;
	 	$total1 = $this->model->num_rows("select c_name from tbl_product where fk_category2_product_id=$dmc");
	 	$num_page1 = ceil($total1/$record_per_page);
	 	$page1 = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
	 	$from1 = $page1 * $record_per_page;
	 	$arr1 = $this->model->get_all("select * from tbl_product where fk_category2_product_id=$dmc order by pk_product_id asc
	 		limit $from1,$record_per_page");
	 	foreach($arr1 as $rows2)
	 	{
?>

	<div class="grid-100">
		<div class="product-wide light-bg clearfix">
			<div class="grid-15 tablet-grid-20 mobile-grid-35 product-img-holder">
				<a class="product-img" 
				href="product/detail/<?php echo remove_unicode($rows2->c_name); ?>
				/<?php echo $rows2->pk_product_id; ?>">
					<img src="public/upload/<?php echo $rows2->c_img; ?>"
						alt="<?php echo $rows2->c_name; ?>"/>
				</a>
			</div>
			<div class="grid-50 tablet-grid-45 mobile-grid-65 product-description">
				<h3 class="product-title subheader-font">
					<a class="dark-color active-hover"
					href="product/detail/<?php echo remove_unicode($rows2->c_name); ?>/<?php echo $rows2->pk_product_id; ?>">
						<strong><?php echo $rows2->c_name; ?></strong>
					</a>
				</h3>
				<p class="dark-color hide-on-mobile"></p>
			</div>
			<div class="grid-35 tablet-grid-35 hide-on-mobile product-actions">
				<div class="product-price active-color">
					<?php if($rows2->c_sale >0 ){
						$sale = $rows2->c_price-($rows2->c_sale*$rows2->c_price)/100;
					?>
					<div class="product-price active-color">
						<del class="light-gradient middle-border dark-color"><?php echo number_format($rows2->c_price); ?> VNĐ</del>
						<strong><?php echo number_format($sale); ?>VNĐ</strong>
					</div>
					<?php }
					else{
					?>
					<div class="product-price active-color">
						<strong><?php echo number_format($rows2->c_price); ; ?></strong>
					</div>
					<?php } ?>
				</div>
				<div class="clear"></div>
				<div class="button-dual light-color transition-all">
					<a class="button-dual-left middle-gradient dark-gradient-hover"
					href="index.php?controller=cart&act=add&id=
					<?php echo $rows2->pk_product_id; ?>">
						Mua <i class="icon-shopping-cart"></i>
					</a>
					<a  href="index.php?controller=cart&act=add&id=
					<?php echo $rows->pk_product_id; ?>" class="button-dual-right middle-gradient dark-gradient-hover">
						<i class="icon-angle-down"></i>
					</a>
				</div>
			</div>
		</div>
	</div> 
 	<?php } ?>
 	<div class="pagination">
 		<a href="#" class="page">Page</a>
 		<?php for($i = 1; $i <= $num_page1; $i++){ ?>
 			<a href="product_category2/<?php echo $dmc; ?>/<?php echo $i; ?>"
 				class="page"><?php echo $i; ?></a>
 		<?php } ?> 
 	</div>
 <?php } else {
 	if(isset($_GET["id"]))
 	{
 	?>
 	<?php
 	foreach($arr as $rows)
 	{
 	?>
	<div class="grid-100">
		<div class="product-wide light-bg clearfix">
			<div class="grid-15 tablet-grid-20 mobile-grid-35 product-img-holder">
				<a class="product-img" href="product/detail/<?php echo 
				remove_unicode($rows->c_name); ?>/<?php echo $rows->pk_product_id; ?>">
					<img src="public/upload/<?php echo $rows->c_img; ?>" 
					alt="<?php echo $rows->c_name; ?>"/>
				</a>
			</div>
			<div class="grid-50 tablet-grid-45 mobile-grid-65 product-description">
				<h3 class="product-title subheader-font">
					<a href="product/detail/<?php echo remove_unicode($rows->c_name); ?>/<?php echo $rows->pk_product_id;?>" class="dark-color active-hover">
						<strong><?php echo $rows->c_name; ?></strong>
					</a>
				</h3>
				<a href="product/category2/<?php echo $rows->fk_category2_product_id; ?>" class="product-category middle-color dark-hover">
					<?php 
					//lay mot ban ghi, goi ham get_a_record() trong model
					$category = $this->model->get_a_record("select c_name from tbl_category2_product where pk_category2_product_id=".$rows->fk_category2_product_id);
					echo isset($category->c_name)?$category->c_name:"";
					?>
				</a>
				<p class="dark-color hide-on-mobile"></p>
			</div>
			<div class="grid-35 tablet-grid-35 hide-on-mobile product-actions">
				<div class="product-price active-color">
					<?php if($rows->c_sale >0 ){
						$sale = $rows->c_price - ($rows->c_sale * $rows->c_price)/100;
						?>
						<div class="product-price active-color">
							<del class="light-gradient middle-border dark-color">
								<?php echo number_format($rows->c_price); ?> VNĐ</del>
							<strong><?php echo number_format($sale); ?>VNĐ</strong>
						</div>
					<?php }
					else{
					?>
					<div class="product-price active-color">
						<strong><?php echo number_format($rows->c_price); ; ?></strong>
					</div>
					<?php } ?>
				</div>
				<div class="clear"></div>
				<div class="button-dual light-color transition-all">
					<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="button-dual-left middle-gradient dark-gradient-hover">
						Mua <i class="icon-shopping-cart"></i>
					</a>
					<a class="button-dual-right middle-gradient dark-gradient-hover">
						<i class="icon-angle-down"></i>
					</a>
				</div>
			</div>
		</div>
	</div> 
 		<?php } ?>


<!--
<div class="grid-100">
<div class="product-wide light-bg clearfix">
<div class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">Best rated</span>
<span class="ribbon-aligner"></span>
</div>
</div>
<div class="grid-15 tablet-grid-20 mobile-grid-35 tablet-grid-20 product-img-holder">
<a class="product-img" href="products-detail.html">
<img src="images/photos/img-product3.jpg" alt="Pablo Coelho jacket"/>
</a>
</div>
<div class="grid-50 tablet-grid-45 mobile-grid-65 product-description">
<h3 class="product-title subheader-font">
<a href="products-detail.html" class="dark-color active-hover">
<strong>Pablo Coelho jacket</strong>
</a>
</h3>
<a href="products.html" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<p class="dark-color hide-on-mobile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
</div>
<div class="grid-35 tablet-grid-35 hide-on-mobile product-actions">
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">186,90 €</del>
<strong>125,90 €</strong>
</div>
<div class="clear"></div>
<div class="button-dual light-color transition-all">
<a href="cart.html" class="button-dual-left middle-gradient dark-gradient-hover">
Add to cart <i class="icon-shopping-cart"></i>
</a>
<a class="button-dual-right middle-gradient dark-gradient-hover">
<i class="icon-angle-down"></i>
</a>
<ul class="button-dual-submenu">
<li>
<a href="wishlist.html" class="light-color middle-bg dark-bg-hover transition-color">
Add to favorites
<i class="icon-heart"></i>
</a>
</li>
<li>
<a href="compare.html" class="dual-submenu-last light-color middle-bg dark-bg-hover transition-color">
Add to compare
<i class="icon-signal"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div> 
 -->
<div class="pagination">
	<a href="#" class="page">Page</a>
	<?php for($i = 1; $i <= $num_page; $i++){ ?>
		<a href="product_category/<?php echo $id; ?>/<?php echo $i; ?>" class="page"><?php echo $i; ?></a>
	<?php } ?> 
</div>
<?php } } ?>