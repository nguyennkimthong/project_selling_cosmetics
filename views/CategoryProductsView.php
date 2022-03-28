<?php
//load file Layout
$this->fileLayout = "LayoutTrangTrong.php";
?>
<style>
a.button{
background: #000;
padding: 15px 110px;
border: 1px solid #fff;
color: #fff;
}
a.button:hover{
background: #fff;
color: #000;
border: 1px solid #000;
text-decoration: none;
}
.product-title{
margin: 10px 0 0;
}
.product-title a{
font-weight: 600;
font-size: 1.6rem;
color: #000000;
line-height: 24px;
text-decoration: none;
opacity: 0.8;
}
.discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: orange; color: white; border-radius: 50px;}
.wishlist{position: absolute;width: 30px;height: 30px;text-align: center;line-height: 30px;background: red;color: white;border-radius: 50%;right: 20px;top: 25px;}
</style>
<div class="content-product-view">
  <div class="list-products-content">
    <div class="col-lg-2">
      <div class="title-one">
        <i class="material-icons">tune</i><span>FILTER BY</span>
      </div>
      <hr />
      <div class="list-products-menu">
        <div class="title-two">
          <i class="material-icons">subject</i><span>PRODUCT TYPE</span>
        </div>
        <div class="list-products-item">
          <ul>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Eye Care</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Face</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Lanveder</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Lips</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Makeup</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Mint Oil</label>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <hr />
      <div class="list-products-menu">
        <div class="title-two">
          <i class="material-icons">subject</i><span>BY BRAND</span>
        </div>
        <div class="list-products-item">
          <ul>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Burberry</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Kenzo</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Louis Vuitton</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Police</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>TomFord</label>
                </div>
              </div>
            </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>Vinova</label>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <hr />
      <div class="list-products-menu">
        <div class="title-two">
          <i class="material-icons"></i><span></span>
        </div>
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> PRICE </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr />
    </div>
    <div class="col-lg-10">
      <div class="row" style="margin-top:10px;">
        <div class="head-tabs head-tab1 col-lg-3">
        </div>
        <div class="col-lg-3 pull-right text-right">
          <?php
          $order = isset($_GET["order"]) ? $_GET["order"] : "";
          ?>
          <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $id ?>&order='+this.value">
            <option value="0">Sắp xếp</option>
            <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
            <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
            <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
            <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
          </select>
        </div>
        <div class="clearfix"></div>
        <!--content-->
        <div class="row">
          <?php foreach($data as $rows): ?>
          <div class="column" style="position: relative;">
            <!-- discount -->
            <?php if($rows->discount > 0): ?>
            <div class="discount"><?php echo $rows->discount; ?> %</div>
            <?php endif; ?>
            <!-- /discount -->
            <!-- wishlist -->
            <div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color:white"><span class="fa fa-heart"></span></a></div>
            <!-- /wishlist -->
            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" style="width: 100%" /></a>
            <div class="product-title">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
            </div>
            <p><del><?php echo number_format($rows->price); ?></del> đ</p>
            <p><?php echo number_format($rows->price-($rows->price * $rows->discount)/100); ?> đ</p>
            <p>
              <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/img/star.jpg" alt=""></a>
              <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/img/star.jpg" alt=""></a>
              <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/img/star.jpg" alt=""></a>
              <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/img/star.jpg" alt=""></a>
              <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/img/star.jpg" alt=""></a>
            </p>
            <div style="margin: 25px 0;" class="action-btn">
              <form>
                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
              </form>
            </div>
            
          </div>
          <?php endforeach; ?>
          
        </div>
        <!--end content-->
        <ul class="pagination">
          <li class="page-item"><span>Trang</span></li>
          <?php for($i = 1; $i <= $numPage; $i++): ?>
          <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </div>