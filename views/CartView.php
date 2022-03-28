<?php
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
?>
 <!-- khi mua hang thanh cong thi hien thi thong bao ben duoi -->
 <?php if(isset($_GET["notify"]) && $_GET["notify"] = "order-success"): ?>
 <script type="text/javascript">
 	alert("Mua hàng thành công");
 	location.href='index.php?controller=cart';
 </script>
<?php endif; ?>
<!-- end thong bao mua hang thanh cong -->
<style>
	.btn_hvone{
		color: #fff!important;
		background: #000!important;
		border: solid 1px #fff!important;
	}
	.btn_hvone:hover{
		color: #000!important;
		background: #fff!important;
		border: solid 1px #000!important;
	}
</style>
<div class="template-cart">
	<form action="index.php?controller=cart&action=update" method="post">
		<div class="table-responsive">
			<table class="table table-cart">
				<thead>
					<tr>
						<th class="image">Ảnh sản phẩm</th>
						<th class="name">Tên sản phẩm</th>
						<th class="price">Giá bán lẻ</th>
						<th class="quantity">Số lượng</th>
						<th class="price">Thành tiền</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($_SESSION['cart'] as $product): ?>
					<tr>
						<td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
						<td><a style="text-decoration: none;color: #000; font-weight: 600;" href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
						<td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
						<td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
						<td><p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p></td>
						<td><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<?php if($this->cartNumber() > 0): ?>
				<tfoot>
				<tr>
					<td colspan="6"><a style="text-decoration: none;" href="index.php?controller=cart&action=destroy" class="button pull-left btn_hvone">Xóa toàn bộ</a> <a style="text-decoration: none;" href="index.php" class="button pull-right black btn_hvone">Tiếp tục mua hàng</a>
					<input style="text-decoration: none;" type="submit" class="button pull-right btn_hvone" value="Cập nhật"></td>
				</tr>
				</tfoot>
				<?php endif; ?>
			</table>
		</div>
	</form>
	<?php if($this->cartNumber() > 0): ?>
	<div style="text-decoration: none;" class="total-cart"> Tổng tiền thanh toán:
		<?php echo number_format($this->cartTotal()); ?>₫ <br>
		<a style="text-decoration: none;" href="index.php?controller=cart&action=checkout" class="button black btn_hvone">Thanh toán</a> </div>
		<?php endif; ?>
	</div>