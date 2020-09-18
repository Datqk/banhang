<?php
foreach($arr as $rows)
{
?>
<li style="width: 200px;" class="popup-outside-trigger">
	<a href="product/detail/<?php echo remove_unicode($rows->c_name)?>/<?php echo $rows->pk_product_id; ?>" class="sidebar-product dark-color active-hover">
		<span>
			<?php echo $rows->c_name; ?>
			<strong><?php echo number_format($rows->c_price); ?>VNĐ</strong>

		</span>
		<img style="width: 50px; height: 50px;" src="public/upload/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"/>
	</a>
</li>
<?php } ?>