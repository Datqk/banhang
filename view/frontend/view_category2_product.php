<?php
foreach($arr as $rows)
{
?>
<li class="expanded">
	<a href="product/category/<?php echo remove_unicode($rows->c_name); ?>/<?php echo $rows->pk_category_product_id; ?>" class="dark-color active-hover selected"><?php echo $rows->c_name; ?></a>
	<ul>
		<li>
			<?php 
			//lay mot ban ghi, goi ham get_a_record() trong model
			$category = $this->model->get_all("select * from tbl_category2_product where fk_category_product_id=".$rows->pk_category_product_id);

			foreach($category as $rows1)
			{
			?>
			<a href="product/category2/<?php echo remove_unicode($rows1->c_name); ?>/<?php echo $rows1->pk_category2_product_id; ?>" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b>
				<?php echo $rows1->c_name ; ?>
					<small class="middle-color">(
						<?php
						$number = $this->model->num_rows("select c_name from tbl_product where fk_category2_product_id=$rows1->pk_category2_product_id");
						echo $number;
						?>)
					</small></a>
				<?php } ?>
			</li>
		</ul>
	</li>
	<li class="sidebar-divider"></li> 
	<?php } ?>