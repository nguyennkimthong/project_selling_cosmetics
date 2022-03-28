<?php
//Load files LayoutTrangChu
$this->fileLayout = "LayoutTrangChu.php"
?>
<script type="text/javascript">
function ajaxAddToCart(id){
$.get("index.php?controller=cart&action=ajaxCreate&id="+id,function(data){
alert("Đã thêm sản phẩm vào giỏ hàng");
//---
//cap nhat so luong san pham o goc tren phai cua trinh duyet
$(".mini-cart-count").text(data);
//---
});
}
</script>
<style>
p.title-p{
color: #696969;
font-weight: bold;
transform: rotate(-90deg);
position: absolute;
left: 0%;
font-size: 45px;
padding: 130px 0px;
margin-left: -30px;
}
a.button{
background: #000;
padding: 15px 110px;
border: 1px solid #fff;
}
a.button:hover{
background: #fff;
color: #000;
border: 1px solid #000;
text-decoration: none;
}
.discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: orange; color: white; border-radius: 50px;}
.wishlist{position: absolute;width: 30px;height: 30px;text-align: center;line-height: 30px;background: red;color: white;border-radius: 50%;right: 20px;top: 10px;}
</style>
<!--banner header-->
<div class="banner">
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="cover-text1">
        <div class="numbertext">Nature Is A Friend</div>
        <div class="text">
          Excepteur sint occaecat cupidatat non proident
        </div>
        <button type="button" id="bt-text">Shop The Essentials</button>
      </div>
      <img src="assets/frontend/img/banner1.png" width="100%" />
    </div>
    <div class="mySlides fade">
      <div class="cover-text2">
        <div class="numbertext">Only Top Products</div>
        <div class="text">
          Excepteur sint occaecat cupidatat non proident
        </div>
        <button type="button" id="bt-text">Shop The Essentials</button>
      </div>
      <img src="assets/frontend/img/banner2.png" width="100%" />
    </div>
    <div class="mySlides fade">
      <div class="cover-text3">
        <div class="numbertext">Only Top Products</div>
        <div class="text">
          Excepteur sint occaecat cupidatat non proident
        </div>
        <button type="button" id="bt-text">Shop The Essentials</button>
      </div>
      <img src="assets/frontend/img/banner3.png" width="100%" />
    </div>
    <script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
    showSlides((slideIndex += n));
    }
    // Thumbnail image controls
    function currentSlide(n) {
    showSlides((slideIndex = n));
    }
    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
    slideIndex = 1;
    }
    if (n < 1) {
    slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    }
    </script>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>
<!--end banner header-->
<!--content-->
<div class="content">
  <!--banner content-->
  <div class="banner-content">
    <div style="padding-right: 10px" class="col-lg-3 hovergallery">
      <img
      src="assets/frontend/img/banner_1_360x.jpg"
      class="responsive responsive0"
      alt=""
      width="321.25"
      height="321.25"
      />
      <button type="button" id="bt1">Lips</button>
      <img
      src="assets/frontend/img/banner_2_360x.jpg"
      class="responsive"
      alt=""
      width="321.25"
      height="321.25"
      />
      <button type="button" id="bt2">Body</button>
    </div>
    <div class="col-lg-6 hovergallery">
      <img
      src="assets/frontend/img/banner_3_720x.jpg"
      class="responsive1"
      width="622.5"
      height="622.5"
      />
      <button type="button" id="bt3">Hair</button>
    </div>
    <div style="padding-left: 10px" class="col-lg-3 hovergallery">
      <img
      src="assets/frontend/img/banner_4_360x.jpg"
      class="responsive responsive0"
      alt=""
      width="321.25"
      height="321.25"
      />
      <button type="button" id="bt4">Hair</button>
      <img
      src="assets/frontend/img/banner_5_360x.jpg"
      class="responsive"
      alt=""
      width="321.25"
      height="321.25"
      />
      <button type="button" id="bt5">Hair</button>
    </div>
  </div>
  <!--end banner content-->
  <!--products-->
  <div class="title-products"></div>
  <?php
  //tu view co the goi truc tiep cac ham trong Controller hoac cac ham trong Model
  $hotProduct = $this->modelHotProduct();
  ?>
  <div class="container1">
    <div class="row1">
      <div style="width: 100%;margin-top: 40px;
        " class="column1">
        <p style="font-size: 30px;" class="demo1 cursor1" onclick="currentSlide1(1)">TRENDING</p>
      </div>
      <!-- <div class="column1">
        <p class="demo1 cursor1" onclick="currentSlide1(2)">New</p>
      </div>
      <div class="column1">
        <p class="demo1 cursor1" onclick="currentSlide1(3)">Sale</p>
      </div> -->
    </div>
    <div class="mySlides1">
      <div class="row2">
        <?php foreach($hotProduct as $rows): ?>
        <div class="column2" style="position: relative;">
          <!-- discount -->
          <?php if($rows->discount > 0): ?>
          <div class="discount"><?php echo $rows->discount; ?>%</div>
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
          <div class="action-btn">
            <form>
              <a href="" onclick="ajaxAddToCart(<?php echo $rows->id ?>);" class="button">Add to Cart</a>
            </form>
          </div>
          
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- <div class="mySlides1">
      <div class="row2">
        <div class="column2">
          <img src="assets/frontend/img/list_new1_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Brow Guru Clear Control Gel</a>
          </div>
          <p>$62.00</p>
        </div>
        <div class="column2">
          <img src="assets/frontend/img/list_new2_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Definer Brow Pencil</a>
          </div>
          <p>$132.00</p>
        </div>
        <div class="column2">
          <img src="assets/frontend/img/list_new3_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Brazilian Kiss Cupuacu Lip</a>
          </div>
          <p>$39.00</p>
        </div>
        <div class="column2">
          <img src="assets/frontend/img/list_new4_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Hyaluronic Global Face Cream</a>
          </div>
          <p>$11.00</p>
        </div>
      </div>
    </div> -->
    <!--Trending-->
    
    <!--End Trending-->
    <!-- <div class="mySlides1">
      <div class="row2">
        <div class="column2">
          <img src="assets/frontend/img/list_sale1_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Hydrating Facial Cleanser</a>
          </div>
          <p>$55.00</p>
        </div>
        <div class="column2">
          <img src="assets/frontend/img/list_sale2_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Pout Pop Sheer Lipstick</a>
          </div>
          <p>$27.00</p>
        </div>
        <div class="column2">
          <img src="assets/frontend/img/list_sale3_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Pout Pop Sheer Lipstick</a>
          </div>
          <p>$91.00</p>
        </div>
        <div class="column2">
          <img src="assets/frontend/img/list_sale4_360x.jpg" style="width: 100%" />
          <div class="product-title">
            <a href="">Pout Pop Lipstick 30 Shades</a>
          </div>
          <p>$15.00</p>
        </div>
      </div>
    </div> -->
    <script type="text/javascript">
    var slideIndex = 1;
    showSlides1(slideIndex);
    function plusSlides1(n) {
    showSlides1((slideIndex += n));
    }
    function currentSlide1(n) {
    showSlides1((slideIndex = n));
    }
    function showSlides1(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides1");
    var dots = document.getElementsByClassName("demo1");
    var captionText = document.getElementById("caption1");
    if (n > slides.length) {
    slideIndex = 1;
    }
    if (n < 1) {
    slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active1", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active1";
    captionText.innerHTML = dots[slideIndex - 1].alt;
    }
    </script>
  </div>
  <!--end products-->
  <!--two-products-->
  <div class="banner-content-two">
    <div class="col-lg-6">
      <img src="assets/frontend/img/banner_6_720x.jpg" alt="" width="100%" />
    </div>
    <div class="col-lg-6">
      <img src="assets/frontend/img/banner_7_720x.jpg" alt="" width="100%" />
    </div>
  </div>
  <div class="banner-content-three">
    <div class="col-lg-6">
      <div class="title-three">
        <h1>Prep. Correct. Perfect.</h1>
        <p>
          Whether you have five minutes to get out the door or an hour to
          play, these bestsellers are the key to fresh, healthy-looking
          skin.
        </p>
        <button type="button" id="bt-three">Shop The Essentials</button>
      </div>
    </div>
    <div class="col-lg-6">
      <img src="assets/frontend/img/banner_8_720x.jpg" alt="" width="100%" />
    </div>
  </div>
  
  <!--categories-->
  <div style="padding-top: 25px; "
    class="gallery js-flickity"
    data-flickity-options='{ "wrapAround": true }'
    >
    <?php
    $categories = $this->modelCategories();
    ?>
    <?php foreach($categories as $itemCategories): ?>
    <p class="title-p"><?php echo $itemCategories->name; ?></p>
    <!--products-->
    <?php
    $products = $this->modelProducts($itemCategories->id);
    ?>
    
    <div class="gallery-cell">
      <?php foreach($products as $rows): ?>
      <div class="col-lg-3" style="position: relative;">
        <?php if($rows->discount > 0): ?>
        <div class="discount"><?php echo $rows->discount; ?> %</div>
        <?php endif; ?>
        <!-- wishlist -->
        <div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color:white"><span class="fa fa-heart"></span></a></div>
        <!-- /wishlist -->
        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" width="100%" /></a>
        <div class="product-title1">
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
        <div class="action-btn">
          <form>
            <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
          </form>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!--end products-->
    <?php endforeach; ?>
  </div>
  <!--end categories-->
  
  <script src="assets/frontend/js/script.js"></script>
  <div class="image-list">
    <div class="row4" style="padding-bottom: 315px">
      <div class="col-lg-6">
        <div class="title-four">
          <h1>@ Follow Us On Instagram</h1>
          <p>
            Whether you have five minutes to get out the door or an hour
            to play, these bestsellers are the key to fresh,
            healthy-looking skin
          </p>
          <button type="button" id="bt-four">Submit your photos</button>
        </div>
      </div>
      <div class="col-lg-3">
        <img src="assets/frontend/img/instagram_1_2048x.jpg" alt="" width="100%" />
      </div>
      <div class="col-lg-3">
        <img src="assets/frontend/img/instagram_2_2048x.jpg" alt="" width="100%" />
      </div>
    </div>
    <style>
      .title-news h3{
        font-weight: bold;font-size: 30px;margin-left: 15px;text-align: center;}
    </style>
    <div class="title-news"><h3>NEWS</h3></div>
    <hr>
    <div class="row4">
      <?php
      $news = $this->modelHotNews();
      ?>
      <?php foreach($news as $rows): ?>
      <div class="col-lg-3">
        <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" width="100%" /></a>
        <div class="info" style="height:200px; overflow: hidden;">
          <h4><a style="text-decoration: none; color: black;"; class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h4>
          <p class="desc"> <?php echo $rows->description; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="fax">
      <div class="row5">
        <div class="col-lg-3">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="assets/frontend/img/p1_120x.png" alt="Paris" />
              </div>
              <div class="flip-box-back">
                <img src="assets/frontend/img/p1_120x - Copy.png" alt="Paris" />
              </div>
            </div>
          </div>
          <h3>Free shipping</h3>
          <p>Free shipping on all US order or order above $200</p>
        </div>
        <hr />
        <div class="col-lg-3">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="assets/frontend/img/p2_120x.png" alt="Paris" />
              </div>
              <div class="flip-box-back">
                <img src="assets/frontend/img/p2_120x - Copy.png" alt="Paris" />
              </div>
            </div>
          </div>
          <h3>Support 24/7</h3>
          <p>Contact us 24 hours a day, 7 days a week</p>
        </div>
        <hr />
        <div class="col-lg-3">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="assets/frontend/img/p3_120x.png" alt="Paris" />
              </div>
              <div class="flip-box-back">
                <img src="assets/frontend/img/p3_120x - Copy (1).png" alt="Paris" />
              </div>
            </div>
          </div>
          <h3>7 Days Return</h3>
          <p>Simply return it within 7 days for an exchange.</p>
        </div>
        <hr />
        <div class="col-lg-3">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="assets/frontend/img/p4_120x.png" alt="Paris" />
              </div>
              <div class="flip-box-back">
                <img src="assets/frontend/img/p4_120x - Copy.png" alt="Paris" />
              </div>
            </div>
          </div>
          <h3>Payment Secure</h3>
          <p>We ensure secure payment with PEV</p>
        </div>
      </div>
    </div>
  </div>
</div>