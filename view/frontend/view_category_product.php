

<?php
foreach($arr as $rows)
{
?>
<li class="light-color active-hover">
	<a href="product/category/<?php echo remove_unicode($rows->c_name); ?>/<?php echo $rows->pk_category_product_id; ?>" class="main-menu-item transition-all"><?php echo $rows->c_name; ?></a>
	<ul class="mega-menu cream-bg">
		<li class="mega-menu-active cream-gradient"></li>
		<li class="mega-menu-box">
			<span class="mega-menu-title active-color clearfix">Thể loại</span>
			<?php
			$arr1= $this->model->get_all("select * from tbl_category2_product where fk_category_product_id=".$rows->pk_category_product_id);
			foreach($arr1 as $rows1)
			{
			?>
			<ul class="mega-menu-list">
				<li>
					<a href="product/category2/<?php echo remove_unicode($rows1->c_name);?>/<?php echo $rows1->pk_category2_product_id; ?>" class="dark-color active-hover">
					<?php echo $rows1->c_name; ?> 
						<span class="middle-color">(
							<?php
							$number = $this->model->num_rows("select c_name from tbl_product where fk_category2_product_id=$rows1->pk_category2_product_id");
							echo $number;
							?>)
						</span>
					</a>
				</li>
			</ul>
			<?php } ?>
		</li>
	</ul> 
</li>
	<?php } ?>