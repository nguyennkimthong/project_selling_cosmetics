<?php
//load file Layout
$this->fileLayout = "LayoutTrangTrong.php";
?>
<style>
	.list-tag span p{
		width: 100%;
	}
	.discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: orange; color: white; border-radius: 50px;};
	button#add-bag a{
		text-decoration: none;
	}
	.discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: orange; color: white; border-radius: 50px;}
.wishlist{position: absolute;width: 30px;height: 30px;text-align: center;line-height: 30px;background: red;color: white;border-radius: 50%;right: 20px;top: 10px;}
</style>
<link rel="stylesheet" href="assets/frontend/css/style10.css" />
<div class="content">
	<div class="col-lg-6">
		
		<!-- Full-width images with number text -->
		<div class="mySlides" style="position: relative;">
			<!-- wishlist -->
			<div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color:white"><span class="fa fa-heart"></span></a></div>
			<!-- /wishlist -->
			<img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%" />
		</div>
		<div class="mySlides">
			<img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%" />
		</div>
		<div class="mySlides">
			<img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%" />
		</div>
		<div class="mySlides">
			<img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%" />
		</div>
		<div class="mySlides">
			<img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%" />
		</div>
		<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		<!-- Thumbnail images -->
		<!-- <div class="row">
						<div class="column">
										<img
										class="demo cursor"
				src="assets/upload/products/<?php echo $record->photo; ?>"
				style="width: 100%"
				onclick="currentSlide(1)"
				alt="<?php echo $record->name; ?>"
				/>
			</div>
			<div class="column">
				<img
				class="demo cursor"
				src="assets/upload/products/<?php echo $record->photo; ?>"
				style="width: 100%"
				onclick="currentSlide(2)"
				alt="<?php echo $record->name; ?>"
				/>
			</div>
			<div class="column">
				<img
				class="demo cursor"
				src="assets/upload/products/<?php echo $record->photo; ?>"
				style="width: 100%"
				onclick="currentSlide(3)"
				alt="<?php echo $record->name; ?>"
				/>
			</div>
			<div class="column">
				<img
				class="demo cursor"
				src="assets/upload/products/<?php echo $record->photo; ?>"
				style="width: 100%"
				onclick="currentSlide(4)"
				alt="<?php echo $record->name; ?>"
				/>
			</div>
			<div class="column">
				<img
				class="demo cursor"
				src="assets/upload/products/<?php echo $record->photo; ?>"
				style="width: 100%"
				onclick="currentSlide(5)"
				alt="<?php echo $record->name; ?>"
				/>
			</div>
		</div> -->
	</div>
	<div class="col-lg-6">
		<h1><?php echo $record->name; ?></h1>
		<div class="price">
			<div class="price-ct"><span> <del><?php echo number_format($record->price); ?>₫ </del></span></div>
			<div class="price-ct"><span> <?php echo number_format($record->price - $record->price * $record->discount/100); ?>₫ </span></div>
			<div class="icon">
				<span class="fa fa-star checked"><?php echo $this->modelGetStar($record->id,1); ?> vote</span>
				<span class="fa fa-star checked"><?php echo $this->modelGetStar($record->id,2); ?> vote</span>
				<span class="fa fa-star checked"><?php echo $this->modelGetStar($record->id,3); ?> vote</span>
				<span class="fa fa-star checked"><?php echo $this->modelGetStar($record->id,4); ?> vote</span>
				<span class="fa fa-star checked"><?php echo $this->modelGetStar($record->id,5); ?> vote</span>
			</div>
			<div class="no">
				<span>No reviews</span>
			</div>
		</div>
		<div class="title-ctsp">
			<p>
				<?php echo $record->description; ?>
			</p>
			<div class="row-ctsp">
				<div class="col-lg-3">
					<div class="lb-control"><span>TAGS:</span></div>
				</div>
				<div class="col-lg-9">
					<div class="list-tag">
						<span
						><?php echo $record->content; ?></span
						>
					</div>
				</div>
			</div>
			<div class="row-ctsp">
				<div class="col-lg-3">
					<span>SKU:</span>
				</div>
				<div class="col-lg-9">
					<div class="label-sku"><span>YX180-27</span></div>
				</div>
			</div>
			<div class="row-ctsp" style="margin-top: -45px">
				<div class="col-lg-3">
					<span>CATEGORY:&nbsp;</span>
				</div>
				<div class="col-lg-9">
					<div class="linksp">
						<?php
						$category = $this->modelGetCategory($record->category_id);
						echo isset($category->name) ? $category->name : "";
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="watch-availabel">
			<div class="title-color"><span>COLOR: DARKOLIVEGREEN</span></div>
			<div class="color">
				<label for="" class="red"></label>
				<label for="" class="black"></label>
				<label for="" class="yellow"></label>
				<label for="" class="blue"></label>
			</div>
			<div class="ml">
				<div class="ml-or"><span>Size: 50ML</span></div>
				<div class="ml-l">
					<label for="">50ml</label>
					<label for="">100ml</label>
					<label for="">200ml</label>
				</div>
			</div>
			<div class="textara">
				<div class="textr"><label for="">Note:</label></div>
				<div class="ara">
					<input
					type="textarea"
					placeholder="Write here your notes for the order"
					/>
				</div>
			</div>
			<div class="total">
				<div class="text-total"><span>QUANTITY:</span></div>
				<div class="count-total">
					<button id="decrease">-</button>
					<button id="count" value="">1</button>
					<button id="add">+</button>
					<style>
						button#add-bag a:hover{color:none;}
					</style>
					<button id="add-bag"><a style="font-weight: 600;text-decoration: none;" href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>">ADD TO BAG</a></button>
				</div>
				<div class="bought"><button>BUY IT NOW</button></div>
			</div>
		</div>
	</div>
</div>
<script src="assets/frontend/js/script.js"></script>
<script src="assets/frontend/js/script2.js"></script>