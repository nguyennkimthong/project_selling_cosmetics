<style>
.w3-border {
border: 1px solid #fff!important;
}
.w3-dropdown-content {
cursor: auto;
color: #000;
background-color: #f8f8f8;
display: none;
position: absolute;
min-width: 120px;
margin: 0;
padding: 0;
z-index: 1;
top: 30px;
right: 30px;
border-radius: 5px;
text-decoration: none;
}
.icon-left ul li i {
font-size: 29px;
}
.icon-left h1{
font-size: 50px;
display: table-cell;
vertical-align: middle;
padding-left: 50px;
}
.btn_checkout{
width: 100%;
padding: 13px 0px;
line-height: 13px;
text-align: center;
background: #000;
border: 1px solid #000;
}
a.btn_checkout{
text-decoration: none;
}
.btn_checkout:hover{
background: #fff;
border: 1px solid #000;
color: #000;
}
a.hv:hover{
color: red!important;
opacity: .6;
}
.title div{
width: 100%;
height: 45px;
border-radius: 40px;
padding-left: 157px;
padding-right: 40px;
line-height: 23px;
margin-top: 25px;
margin-bottom: 20px;
}
input#key.input-control{
border-radius: 50px;
padding: 10px 210px;
}
.title div button{
margin-top: 5px;
margin-left: -35px;
border: none;
background: none;
}
.icon-right{
  margin-left: 50px;
}
span.mini-cart-count{
  position: absolute;
    top: -10px;
    left: 25px;
    font-size: 15px;
    color: #ff4040;
    font-weight: 600;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    text-align: center;
    line-height: 16px;
    background: #fff8dc;
}
.icon-right ul li.wishlist_fa a{
  color: #000;
}
</style>
<div style="height: auto;" class="header">
  <div class="icon-bar">
    <div class="icon-left">
      <h1>KARL</h1>
      <!-- <ul>
        <li><i class="fab fa-facebook-f"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-twitter"></i></li>
        <li><i class="fab fa-pinterest"></i></li>
      </ul> -->
    </div>
    <div class="title">
      <div style="margin-top:25px; position: relative;">
        <input type="text" autocomplete="off" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
        <button style="margin-top:5px; position: absolute; top:6px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
        <div class="smart-search">
          <ul>
          </ul>
        </div>
      </div>
      <style type="text/css">
        .smart-search{position: absolute; width: 590px!important; background: white; height: 250px!important; overflow: scroll; z-index: 1; display: none;}
        .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
        .smart-search ul li{border-bottom: 1p solid #dddddd!important;margin-left: -120px;margin-bottom:20px;width: 100%;}
        .smart-search ul li a{color:black;}
        .smart-search ul li a:hover{color:black;text-decoration: none;color:red;}
        .smart-search img{width: 70px; margin-right: 5px;}
      </style>
    </div>
    <script type="text/javascript">
      function search(){
        //lay gia tri cua id=key
        var key = document.getElementById("key").value;
        //di chuyen den url tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      //khi an phim enter trong o textbox co id=key thi cung thuc hien tim kiem
      function searchForm(event){
        //phim enter co keyCode = 13
        if(event.keyCode == 13){
          //lay gia tri cua id=key
          var key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      }
      //-----------------
         $(".input-control").keyup(function(){
            var strKey = $("#key").val();
            if(strKey.trim() == "")
                $(".smart-search").attr("style","display:none");
            else{
                $(".smart-search").attr("style","display:block");
                //---
                //su dung ajax de lay du lieu
                $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                    //clear cac the li ben trong the ul
                    $(".smart-search ul").empty();
                    //them su lieu vua lay duoc bang ajax vao the ul
                    $(".smart-search ul").append(data);
                });
                //---
            }
         });
         //-----------------
    </script>
    <div class="icon-right">
      <ul>
        <li><i class="fab fa-facebook-f"></i></li>
        <li class="wishlist_fa"><a href="index.php?controller=wishlist"><i class="far fa-heart"></i></a></li>
        <!--cart-->
        <?php 
        $numberProduct = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
     ?>
        <div class="w3-dropdown-hover">
          <a href="index.php?controller=cart"><span class="mini-cart-count"><?php echo $numberProduct; ?></span></a>
          <li><i style="position: relative;top: -2px;left: -3px;" class="fas fa-shopping-cart"></i></li>
          <div class="w3-dropdown-content w3-bar-block w3-border">
            <div class="content-mini-cart">
              <div class="has-items">
                <ul class="list-unstyled">
                  <?php if(isset($_SESSION['cart'])): ?>
                  <?php foreach($_SESSION['cart'] as $product): ?>
                  <li style="display: flex;padding: 0 0 10px 0;" class="clearfix" id="item-1853038">
                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"> <img alt="<?php echo $product['name']; ?>" src="assets/upload/products/<?php echo $product['photo']; ?>" title="<?php echo $product['name']; ?>)" class="img-responsive" width="50%"> </a> </div>
                    <div style="margin: 0px 10px 0 -75px;width: 290px;" class="info">
                      <h3 style="font-size: 14px;"><a class="hv" style="color: black; text-decoration: none;" href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
                      <p class="hv" style="font-size: 12px;"><?php echo $product['number']; ?> x <?php echo number_format($product['price']); ?>₫</p>
                    </div>
                    <div> <a  style="color: black; text-decoration: none;" href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>"> <i style="font-size: 14px;margin: 21px 15px 0 -10px;" class="fa fa-times"></i></a> </div>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
                <a href="index.php?controller=cart&action=checkout" class="button btn_checkout">Thanh toán</a> </div>
              </div>
            </div>
          </div>
          <!--/cart-->
          <div class="w3-dropdown-hover">
            <li><i style="top: 2px;left: -7px;" class="glyphicon glyphicon-menu-hamburger"></i></li>
            <div class="w3-dropdown-content w3-bar-block w3-border">
              <?php if(isset($_SESSION['customer_email'])): ?>
              <a style="text-decoration: none;" href="#" class="w3-bar-item w3-button">Xin chào <?php echo $_SESSION['customer_email'] ?></a>
              <a style="text-decoration: none;" href="index.php?controller=account&action=logout" class="w3-bar-item w3-button">Đăng xuất</a>
              <?php else: ?>
              <a style="text-decoration: none;" href="index.php?controller=account&action=login" class="w3-bar-item w3-button">Đăng nhập</a>
              <a style="text-decoration: none;" href="index.php?controller=account&action=register" class="w3-bar-item w3-button">Đăng ký</a>
              <?php endif; ?>
            </div>
          </div>
        </ul>
      </div>
    </div>
    <hr />
    <div class="menu">
      <div class="covermenu">
        <a href="index.php">Trang chủ</a>
        <div class="dropdown">
          <button class="dropbtn"><a href="#">Sản phẩm</a></button></button>
          <div class="dropdown-content">
            <ul class="list-unstyled level1">
              <?php
              $conn = Connection::getInstance();
              $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
              $categories = $query->fetchAll();
              ?>
              <?php foreach($categories as $rows): ?>
              <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
              <?php
              $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
              $categoriesSub = $querySub->fetchAll();
              ?>
              <?php foreach($categoriesSub as $rowsSub): ?>
              <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn"><a href="index.php?controller=cart">Giỏ hàng</a></button>
          <div class="dropdown-content">
            <!-- <a href="chitietsanpham.html">Eyes</a>
            <a href="chitietsanpham.html">Face</a>
            <a href="chitietsanpham.html">Lip 3</a> -->
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn"><a href="index.php?controller=news">Tin tức</a></button>
          <div class="dropdown-content">
            <!-- <a href="chitietsanpham.html">Sun care</a>
            <a href="chitietsanpham.html">Eyes</a>
            <a href="chitietsanpham.html">Toner</a> -->
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn"><a href="index.php?controller=contact">Liên hệ</a></button>
          <div class="dropdown-content">
            <!-- <a href="chitietsanpham.html">Washes</a>
            <a href="chitietsanpham.html">Trea</a>
            <a href="chitietsanpham.html">Link 3</a> -->
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn"><a href="index.php?controller=wishlist">Yêu thích</a></button>
          <div class="dropdown-content">
            <!-- <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>