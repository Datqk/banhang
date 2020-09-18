<div class="content-with-sidebar grid-100">
	<div class="product-detail-shadow">
		<div class="product-detail cream-gradient grid-container">
		<?php
		if( $arr->c_hotproduct ==1)
		{
		?>
		<div class="ribbon-small ribbon-green">
			<div class="ribbon-inner">
				<span class="ribbon-text">HOT</span>
				<span class="ribbon-aligner"></span>
			</div>
		</div>
		<?php } 
		else {
			$sale =  number_format($arr->c_sale);
			if($sale > 0)
			{
		?>
		<div class="ribbon-small ribbon-red">
			<div class="ribbon-inner">
				<span class="ribbon-text">
					Sale &nbsp;<?php echo  number_format($arr->c_sale); ?>%</span>
				<span class="ribbon-aligner"></span>
			</div>
		</div>
		<?php }} ?>
		<div style="margin-bottom: 20px;" class="product-images grid-40 tablet-grid-40 juicy-wrapper">
			<ul class="juicy-slider middle-border">
				<img class="juicy-bg" src="public/upload/<?php echo $arr->c_img; ?>" 
				alt="<?php echo $arr->c_name; ?>"/>
			</ul>
			<div class="juicy-slider-nav juicy-thumbs middle-border dark-border-hover active-border-selected" data-type="thumbs"></div>
		</div> 
					<!-- Menu-->
		<div style="margin-bottom: 20px;" class="product-info grid-55 tablet-grid-55">
			<h1 class="header-font dark-color"><?php echo $arr->c_name; ?></h1>
			<!-- <div class="clearfix">
				<div style="float: right;" class="product-social grid-50 tablet-grid-50 hide-on-mobile">
					<a href="#" class="dark-hover facebook-color transition-color" target="_blank">
						<i class="icon-facebook-sign"></i>
					</a>
					<a href="#" class="dark-hover twitter-color transition-color" 
					target="_blank">
						<i class="icon-twitter"></i>
					</a>
					<a href="#" class="dark-hover pinterest-color transition-color" target="_blank">
						<i class="icon-pinterest-sign"></i>
					</a>
					<a href="#" class="dark-hover google-color transition-color" 
					target="_blank">
						<i class="icon-google-plus-sign"></i>
					</a>
				</div>
			</div> -->
			<p class="product-perex">
				<?php echo $arr->c_description; ?>
			</p>
			<div class="product-meta-price clearfix">
				<div class="product-meta middle-color grid-55">
					<!-- <table>
						<tr>
							<td>Brand:</td>
							<td>Tommy Mancini</td>
						</tr>
						<tr>
							<td>Product code:</td>
							<td>2159789123121</td>
						</tr>
						<tr>
							<td>Avaibility:</td>
							<td class="active-color">In stock</td>
						</tr>
					</table>
					&nbsp; -->
				</div>
				<div class="product-bottom">
					<?php 
					foreach($arr1 as $rows)
					{
					if($rows->c_sale >0 ){
						$sale = $rows->c_price - ($rows->c_sale * $rows->c_price)/100;
					?>
					<div class="product-price active-color">
						<strong><?php echo number_format($sale); ?>VNĐ</strong>
					</div>
					<?php }
						else{
					?>
					<div class="product-price active-color">
						<strong><?php echo number_format($rows->c_price); ; ?></strong>
					</div>
					<?php } } ?>
				</div>
				<form action="" method="POST">
					<div class="product-options clearfix">
						<div class="button-dual light-color transition-all">
							<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>"
								class="button-dual-left middle-gradient dark-gradient-hover">
								Mua<i class="icon-shopping-cart"></i>
							</a>
							<a class="button-dual-right middle-gradient dark-gradient-hover">
								<i class="icon-angle-down"></i>
							</a>
						</div>
					</div>
				</form> 
			</div> 
		</div> 
		<br>
		<div class="product-detail-tabs grid-100 light-bg">
			<div style="margin-top: 50px;" class="page-tabs shoppie-tabs">
				<h2 class="header-font">
					<a  class="middle-color active-hover light-bg transition-color">
						<span class="hide-on-mobile">Mô tả sản phẩm</span>
						<i class="icon-align-left hide-on-desktop hide-on-tablet"></i>
					</a>
				</h2>
			</div>  
			<div class="page-tabs-holder">

				<div class="page-tab grid-100" id="tab-description">
					<p><?php echo $arr->c_content; ?> </p>

				</div> 

				<div class="page-tab grid-100" id="tab-reviews">
					<hr class="margin-bottom"/>
					<div class="grid-100 product-review">
					</div>
				</div> 
			</div>
		</div> 
		<div style="margin-top: 40px;" class="product-detail-tabs grid-100 light-bg">
			<div class="page-tabs shoppie-tabs">
				<h2 class="header-font">
					<a class="middle-color active-hover light-bg transition-color">
						<span class="hide-on-mobile">Những sản phẩm tương tự</span>
						<i class="icon-link hide-on-desktop hide-on-tablet"></i>
					</a>		
				</h2>
			</div>
			<div class="page-tabs-holder">
				<div class="page-tab grid-100 clearfix" id="tab-related">
					<?php
						$arr2 = $this->model->get_all("select * from tbl_product where fk_category2_product_id=$arr->fk_category2_product_id order by fk_category2_product_id desc limit 0,4 ");
						foreach($arr2 as $rows)
						{
					?>
					<div class="grid-30 tablet-grid-25">
						<div class="product-box light-bg transition-all">
							<?php
							if( $rows->c_hotproduct ==1)
							{
							?>
							<div class="ribbon-small ribbon-green">

								<div class="ribbon-inner">
									<span class="ribbon-text">HOT</span>
									<span class="ribbon-aligner"></span>
								</div>
							</div>
							<?php } 
							else {
								$sale =  number_format($rows->c_sale);
								if($sale > 0)
								{
							?>
							<div class="ribbon-small ribbon-red">
								<div class="ribbon-inner">
									<span class="ribbon-text">Sale &nbsp;<?php echo  number_format($rows->c_sale); ?>%</span>
									<span class="ribbon-aligner"></span>
								</div>
							</div>
							<?php }} ?>
							<a class="product-img" href="product/detail/<?php echo remove_unicode($rows->c_name); ?>/<?php echo $rows->pk_product_id; ?>">
								<span><img src="public/upload/<?php echo $rows->c_img;?>" alt="<?php echo $rows->c_name; ?>"/></span>
							</a>
							<div class="product-info light-bg middle-border">
								<h3 class="product-title subheader-font">
									<a href="product/detail/<?php echo remove_unicode($rows->c_name); ?>/<?php echo $rows->pk_product_id; ?>" class="dark-color active-hover">
										<strong style="font-size: 15px;" >
											<?php echo $rows->c_name; ?></strong>
									</a>
								</h3>
								<?php
								$category = $this->model->get_a_record("select c_name from tbl_category2_product where pk_category2_product_id=".$rows->fk_category2_product_id);
								{
								?>
								<a href="product/category2/<?php echo remove_unicode($category->c_name)?>/<?php echo 
									$rows->fk_category2_product_id; ?>" 
									class="product-category middle-color dark-hover">
									<?php 
									//lay mot ban ghi, goi ham get_a_record() trong model
									echo isset($category->c_name)?$category->c_name:"";
									?>
								</a>
								<?php } ?>
								<div class="product-bottom">
									<div class="product-price active-color">
										<?php if($rows->c_sale >0 ){
											$sale = $rows->c_price - ($rows->c_sale * $rows->c_price)/100;
										?>
										<div style=" font-size: 12px;" class="product-price active-color">
											<del style="width: 60px; font-size: 8px;"  class="light-gradient middle-border dark-color"><?php echo number_format($rows->c_price); ?> VNĐ</del>
											<strong><?php echo number_format($sale); ?>VNĐ</strong>
										</div>
										<?php }
											else{
										?>
										<div style=" font-size: 12px;"  class="product-price active-color">

											<strong><?php echo number_format($rows->c_price); ; ?>&nbsp;VNĐ</strong>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div> 