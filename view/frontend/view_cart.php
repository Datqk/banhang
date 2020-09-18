
  <form id="frm" method="post" action="index.php?controller=cart&act=update">
 
<div class="grid-100">
<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
<div class="well-box-middle grid-60 tablet-grid-60">Tên sản phẩm</div>
<div class="well-box-middle align-center grid-10 tablet-grid-10">Số lượng</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Đơn giá</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Xóa</div>
</div>
 <?php 
    foreach($_SESSION["cart"] as $rows)
     {
             ?>
<div class="cart-product-list well-shadow">
 
<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="product/detail/<?php echo remove_unicode($rows['c_name']); ?>/<?php echo $rows['pk_product_id']; ?>" title="">
<img style="width: 65px; height: 90px; margin-left: -18px;"  src="public/upload/<?php echo $rows['c_img']; ?>" alt="<?php echo $rows['c_name']; ?>"/>
</a>
</div>
<div  class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<h3 class="product-title subheader-font">
<a href="product/detail/<?php echo remove_unicode($rows['c_name']); ?>/<?php echo $rows['pk_product_id']; ?>" class="dark-color active-hover">
<strong><?php echo $rows['c_name']; ?></strong>
</a>
</h3>
</div>
</div>
<div style="margin-left: -10px;" class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input style="margin-left: -10px;" type="number" name="product<?php echo $rows['pk_product_id']; ?>" class="text-input product-quantity dark-color light-bg" value="<?php echo $rows['number']; ?>"/>
</div>
<?php if($rows['c_sale'] >0 ){
		$sale = $rows['c_price'] - ($rows['c_sale'] * $rows['c_price'])/100;
	 ?>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong><?php echo number_format($sale*$rows['number']); ?>VNĐ</strong>
</div>
<?php }
		else{
		 ?>
<div  class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">

<strong ><?php echo number_format($rows['c_price']* $rows['number']); ; ?></strong>
</div>
<?php } ?>

<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong><a href="index.php?controller=cart&act=delete&id=<?php echo $rows['pk_product_id']; ?>" onclick="return window.confirm('Are you sure?');">
<img style="width: 50px;" src="public/images/delete.jpg" > </a></strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" 
href="index.php?controller=cart&act=delete&id=<?php echo $rows['pk_product_id']; ?>"
onclick="return window.confirm('Are you sure?');"><span class="cancel"></span></a>
</div> 
 <?php
if($this->cart_number() > 1){ ?>
 <?php }?>
</div>
<?php } ?>
</div> 
<div class="grid-100 grid-parent margin-bottom clearfix">
<div >
<div style="width:  100%" class="grid-60 tablet-grid-60 no-right-padding">
<div class="well-shadow well-box last light-bg align-right">
<dl style="text-align: center" class="cart-total clearfix">
<dt class="uppercase dark-color active-color">
	Tổng tiền: &nbsp;<?php echo number_format($this->cart_total()); ?> VNĐ</dt>
</dl>
&nbsp;
<div style="text-align: center;">
 <a href="trang-chu" class="btn btn-primary">
Tiếp tục mua hàng
</a>
<?php if($this->cart_number() > 0){ ?> 
<input type="submit" value="Update" class="btn btn-info"> 
<a onclick="return window.confirm('Bạn có muốn thanh toán không?');" href="index.php?controller=checkout" class="button-normal light-color active-gradient dark-gradient-hover">
Thanh toán
</a>
<?php }?>
<?php if($this->cart_number() > 1){ ?>
<a onclick="return window.confirm('Bạn có muốn xóa tất cả không?');"
 href="index.php?controller=cart&act=deleteall" class="button-normal light-color active-gradient dark-gradient-hover">
Xóa tất cả
</a>
<?php } ?> 
</div>
</div>
</div>
</div> 
	</form>