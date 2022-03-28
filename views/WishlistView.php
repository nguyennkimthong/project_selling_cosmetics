<?php
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
?>
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
		<div class="table-responsive">
			<table class="table table-cart">
				<thead>
					<tr>
						<th class="image">Ảnh sản phẩm</th>
						<th style="width: 51%" class="name">Tên sản phẩm</th>
						<th style="" class="price">Giá</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($_SESSION['wishlist'] as $product): ?>
					<tr>
						<td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
						<td><a style="text-decoration: none;color: #000; font-weight: 600;" href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
						<td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
						<td><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>