<?php
$title = "Trang Chủ";

include "includes/header.php";

?>
<title><?php echo $title ?></title>


<div class="">
    <div class="row">
        <div class="col-lg-12">
            <div id="slideshow">
                <div id="jssor_1"
                    style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1500px; height: 500px; overflow: hidden; visibility: hidden; z-index:0 !important;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div
                            style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 1500px; height: 500px;">
                        </div>
                        <div
                            style="position: absolute; display: block; background: url(https://thunggoletrong.com/assets/client/images/blank.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
                        </div>
                    </div>
                    <div data-u="slides"
                        style="cursor: default; position: relative; top: 0px; left: 0px; width: 1500px; height: 500px; overflow: hidden;">
                        <?php $query = _query("SELECT * FROM tbl_slider WHERE slider_on_page = '1'") ;
                        while ($row = mysqli_fetch_array($query )){
                        ?>
                        <div data-p="112.50" style="display: none;">
                            <a><img data-u="image" class="lazy1"
                                    src="<?php echo "../../admin" . $row['slider_img']; ?>"
                                    data-original="<?php echo "../../admin" . $row['slider_img']; ?>" /></a>
                        </div>
                       
                        <?php } ?>
                    </div>
                    <div data-u="navigator" class="jssorb01">
                        <div data-u="prototype"></div>
                    </div>
                    <span data-u="arrowleft" class="jssora05l" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora05r" data-autocenter="2"></span>
                </div>

                <h1 id="welcome-text" class="d-none"></h1>
            </div>
        </div>

    </div>
</div>
<div class="container">


    <div class="home-title1"><span>
            <h2> Sản phẩm mới</h2>
        </span></div>
    <div class="row">
        <div class="col-md-4 d-none d-md-block">
            <div class="adv adv-slide">
                <div class="row">
                    <div class="col-lg-12 ">
                        <a class="hover-effect1"><img class="lazy" src="https://thunggoletrong.com/assets/client/images/blank.gif"
                                data-original="https://thunggoletrong.com/Data/images/logo/B%E1%BA%A3o%20h%C3%A0nh%20ch%C3%ADnh%20th%E1%BB%A9c.jpg" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="owl-product" class="owl-carousel">


            <?php $sql = mysqli_query($conn, "SELECT * FROM tbl_product ORDER BY `product_reg_date` DESC LIMIT 12");
                  while ($row = mysqli_fetch_array($sql)) { 
                 ?>

                <div class="product-box">
                    <div id="pp-hover-img-1">
                        <a class="pp-hover-img" href="san-pham/<?php echo $row['prod_id'] ?>" itemprop="url">
                            <img class="img" alt="<?php echo $row["prod_name"] ?>"
                                src="admin/<?php echo $row['prod_thumb'] ?>" />
                        </a>
                        <div class="product-actions">
                        <?php if($row['prod_old_price'] != 0){?>
                            <a href="#" class="addToCart" data-id="<?php echo $row['prod_id'] ?>" title="Th&#234;m v&#224;o giỏ h&#224;ng"><i
                                    class="fas fa-shopping-basket"></i></a>
                                    <?php }else{ ?>
                                        <a href="tel:<?php $zalo ?>" class="call" title="Liên Hệ" ng-if="item.price_old == 0"><i
                        class="fas fa-phone"></i></a><?php } ?>
                            <a href="#" class="previewProduct" data-id="<?php echo $row['prod_id'] ?>" title="Xem nhanh/Preview"><i
                                    class="fas fa-eye"></i></a>
                        </div>
                        <span class="icon-new">NEW</span> <span class="icon-hot">HOT</span> <span
                            class="icon-sale">SALE</span>
                    </div>

                    <h3 class="product-name"><a href="san-pham/<?php echo $row['prod_id'] ?>"
                            title="<?php echo $row["prod_name"] ?>"><?php echo $row["prod_name"] ?></a></h3>

                    
                    <div class="product-price-cart">
                    <span class="product-price">
                        <?php   echo $row['prod_old_price'] != 0 ? number_format($row['prod_current_price'], 0, '.', '.').'₫':'Giá bán: Liên hệ' ?> 
                        </span>
                        <?php if($row['prod_old_price'] != 0 ){ ?>
                        <span class="product-price-old">
                            <?php echo number_format($row['prod_old_price'], 0, '.', '.'); ?> đ
                        </span>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>










            </div>
        </div>
    </div>
    <?php
$query = mysqli_query($conn, "SELECT * FROM tbl_category");

while ($category = mysqli_fetch_array($query)) {
    $category_id = $category["category_id"];
    $category_name = $category["category_name"];
    $category_desc = $category["category_desc"];

    // Fetch products for the current category
    $sql = mysqli_query($conn, "SELECT * FROM tbl_product WHERE category_id = '$category_id' ORDER BY product_reg_date DESC LIMIT 10");
    ?>
    <div class="boxbody_tbl Whr mt-3">
        <div class="boxbody_top">
            <span>
                <a href="/thung-ruoi-go-soi-c1752.html">
                    <h2><?php echo $category_name; ?></h2>
                </a>
            </span>
            <div class="subcat">
                <ul>
                    <!-- You can populate subcategories here if needed -->
                </ul>
            </div>
            <p class="viewall">
                <a href="danh-muc/<?php echo $category_desc; ?>">Xem tất cả »</a>
            </p>
        </div>
    </div>
    <div class="row">
        <?php while ($product = mysqli_fetch_array($sql)) { ?>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
                <div class="product-box">
                    <div id="pp-hover-img-1">
                        <a class="pp-hover-img" href="san-pham/<?php echo $product['prod_id']; ?>">
                            <img class="img lazy" alt="Thùng đựng rượu gỗ sồi 20 lít" src="admin/<?php echo $product['prod_thumb']; ?>" data-original="admin/<?php echo $product['prod_thumb']; ?>" />
                        </a>
                        <div class="product-actions">
                        <?php if($product['prod_old_price'] != 0){?>
                            <a href="#" class="addToCart" data-id="<?php echo $product['prod_id'] ?>" title="Th&#234;m v&#224;o giỏ h&#224;ng"><i
                                    class="fas fa-shopping-basket"></i></a>
                                    <?php }else{ ?>
                                        <a href="tel:<?php $zalo ?>" class="call" title="Liên Hệ" ng-if="item.price_old == 0"><i
                        class="fas fa-phone"></i></a><?php } ?>
                            <a href="#" class="previewProduct" data-id="<?php echo $product['prod_id']; ?>" title="Xem nhanh">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <span class="icon-new">NEW</span>
                        <span class="icon-hot">HOT</span>
                    </div>
                    <div class="product-name">
                        <a href="/thung-ruoi-go-soi/trong-go-sp4627.html" title="<?php echo $product['prod_name']; ?>">
                            <?php echo $product['prod_name']; ?>
                        </a>
                    </div>
                    <i class="d-none">Lê Trong Official</i>
                    <div class="product-price-cart">
                        <span class="product-price">
                        <?php   echo $product['prod_old_price'] != 0 ? number_format($product['prod_current_price'], 0, '.', '.').'₫':'Giá bán: Liên hệ' ?> 
                        </span>
                        <?php if($product['prod_old_price'] != 0 ){ ?>
                        <span class="product-price-old">
                            <?php echo number_format($product['prod_old_price'], 0, '.', '.'); ?> đ
                        </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <a href="danh-muc/<?php echo $category_desc; ?>" class="button">Xem thêm <?php echo $category_name; ?></a>
<?php
}
?>

    <div id="comment" class="bggray">
            <div class="container">
                <div class="home-title1">
                    <h2>PHẢN HỒI TỪ KHÁCH HÀNG</h2>
                </div>
                <div id="owl-comment" class="owl-carousel">


                    <div class="customer-comment">
                        <div class="comment-img">
                            <img src="assets/uploads/img/1w300.jpg" alt="Anh H&#249;ng" />
                        </div>
                        <div class="comment-content">
                            <div class="summary">
                                <p>Tôi đã mua và sử dụng một bộ bàn ghế bằng thùng gỗ, tôi thấy rất chắc chăn và sang
                                    trọng</p>

                            </div>
                            <span class="title">Anh H&#249;ng </span>
                        </div>
                    </div>
                    <div class="customer-comment">
                        <div class="comment-img">
                            <img src="assets/uploads/img/2w300.jpg" alt="Chị Hoa" />
                        </div>
                        <div class="comment-content">
                            <div class="summary">
                                <p>Trước khi mua tôi khá cân nhắc về chất lượng, nhưng sau khi mua và sử dụng tôi cảm
                                    thấy sản phẩm rất tốt, chất lượng</p>

                            </div>
                            <span class="title">Chị Hoa </span>
                        </div>
                    </div>










                </div>
            </div>
        </div>
</div>



<?php include "includes/footer.php"; ?>