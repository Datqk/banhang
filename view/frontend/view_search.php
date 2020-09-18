
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="wrapper-tab-collections" style="margin-top:0px;">
  	<div class="tabs-container">
		<ul class="list-unstyled">
	  		<li>
	  			<a class="head-tabs head-tab1" data-src=".head-tab1">
					<h2>kết quả Tìm kiếm</h2>
					//<span>Có <?php echo $total; ?> sản phẩm</span>
				</a>
			</li>
	</ul>
    </div>&nbsp;		  
	<?php
		foreach($arr as $rows)
		{
	?>
	<div class="grid-100">
		<div class="product-wide light-bg clearfix">
			<div class="grid-15 tablet-grid-20 mobile-grid-35 product-img-holder">
				<a class="product-img"
				href="product/detail/<?php echo remove_unicode($rows->c_name)?>/
				<?php echo $rows->pk_product_id; ?>">
					<img src="public/upload/<?php echo $rows->c_img; ?>" 
					alt="<?php echo $rows->c_name; ?>"/>
				</a>
			</div>
			<div class="grid-50 tablet-grid-45 mobile-grid-65 product-description">
				<h3 class="product-title subheader-font">
					<a href="product/detail/<?php echo remove_unicode($rows->c_name)?>/<?php echo $rows->pk_product_id; ?>" class="dark-color active-hover">
						<strong><?php echo $rows->c_name; ?></strong>
					</a>
				</h3>
				<p class="dark-color hide-on-mobile"></p>
			</div>
			<div class="grid-35 tablet-grid-35 hide-on-mobile product-actions">
				<div class="product-price active-color">
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
				</div>
				<div class="clear"></div>
				<div class="button-dual light-color transition-all">
					<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="button-dual-left middle-gradient dark-gradient-hover">
					Mua <i class="icon-shopping-cart"></i>
					</a>
					<a  href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="button-dual-right middle-gradient dark-gradient-hover">
						<i class="icon-angle-down"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<div class="pagination">
        <a href="#" class="page">Page</a>
        <?php for($i = 1; $i <= $num_page; $i++){ ?>
         
        <a href="search/page/<?php echo $search; ?>/<?php echo $i; ?>" class="page"><?php echo $i; ?></a>
        <?php } ?> 
	</div>
</div>