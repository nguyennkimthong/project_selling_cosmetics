<?php 
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="middle" style="position: relative;">
 	<!-- chi tiet -->
 	<h3 style="margin: 20px 0 0 30px;"><?php echo $record->name; ?></h3>
 	<img src="assets/upload/news/<?php echo $record->photo; ?>" style="width: 46%;margin: 20px 0 0 30px;">
 	<p><?php echo $record->description; ?></p>
 	<p><?php echo $record->content; ?></p>
 	<!-- /chi tiet -->
 </div>