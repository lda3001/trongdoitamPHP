<?php include 'includes/header.php'; 
$product_id = intval($_GET['prod']);
$error_condition = false;



$sql = mysqli_query($conn, "SELECT * FROM tbl_product JOIN tbl_sub_category ON tbl_product.sub_id = tbl_sub_category.sub_id JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id   WHERE prod_id = '$product_id'");

if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_array($sql);
    $_SESSION['recently_viewed_products'][$product_id] = true;
    $title = $row['prod_name'];

    if (count($_SESSION['recently_viewed_products']) > $max_recently_viewed_products) {

        $_SESSION['recently_viewed_products'] = array_slice($_SESSION['recently_viewed_products'], -$max_recently_viewed_products, $max_recently_viewed_products, true);
    }
} else {
    $error_condition = true;
}

if ($error_condition) {

    header('Location: http://localhost/error_page.php');
    exit();
}
if (isset($_SESSION['hover'])) {
    echo $_SESSION['hover'];
    unset($_SESSION['hover']);
}

?>
        
    <div class="breadcrumb">
        <div class="container">    
            <ol itemscope="" itemprop="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="/"><i class="fa fa-home" aria-hidden="true"></i> 
                    <span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <?php $category_id =  $row['category_id'];
                         $result = _fetch("SELECT * FROM tbl_category WHERE category_id = '$category_id'") ?>
                        <a itemprop="item" href="../../danh-muc/<?php echo $result['category_desc'] ?>">
                       
                        <span itemprop="name"><?php echo $result['category_name'] ?></span></a>
                        <meta itemprop="position" content="2">
                    </li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="../../san-pham/<?php echo $row['prod_id'] ?>">
                        <span itemprop="name"><?php echo $row['prod_name'] ?></span></a>
                        <meta itemprop="position" content="3">
                    </li>
            </ol>
        </div>
    </div>
    

        <div class="container">
            




















<link href="../../assets/css/star-rating.css" rel="stylesheet" />
<link rel="stylesheet" href="https://pc.baokim.vn/css/bk.css">


<div itemscope itemtype="http://schema.org/Product" itemid="https://thunggoletrong.com/thung-ruoi-go-soi/trong-go-sp4646.html#product-4646">
    
    <div class="boxbody_tbl">
        <div class="boxbody_body">
            <div class="row">
                <div class="col-lg-9" id="border-radius-1-padding-1">
                    <div class="product-detail-img mb-3" >
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img itemprop="image" class="d-block w-100 bk-product-image" src="../admin/<?php echo $row["prod_thumb"] ?> " alt="First slide" />
                                    </div>
                                                                    <div class="carousel-item">
                                        <img itemprop="image" class="d-block w-100" src="../admin/<?php echo $row["prod_img1"] ?>" alt="Second slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img itemprop="image" class="d-block w-100" src="../admin/<?php echo $row["prod_img2"] ?>" alt="Second slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img itemprop="image" class="d-block w-100" src="../admin/<?php echo $row["prod_img3"] ?>" alt="Second slide" />
                                    </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="multizoom1 thumbs">
                            
                                <a href="#" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><img src="../admin/<?php echo $row["prod_thumb"] ?> " alt="<?php echo $row["prod_name"] ?>" /></a>
                                                            <a href="#" data-target="#carouselExampleIndicators" data-slide-to="1"><img src="../admin/<?php echo $row["prod_img1"] ?>" alt="<?php echo $row["prod_name"] ?>" /></a>
                                <a href="#" data-target="#carouselExampleIndicators" data-slide-to="2"><img src="../admin/<?php echo $row["prod_img2"] ?>" alt="<?php echo $row["prod_name"] ?>" /></a>
                                <a href="#" data-target="#carouselExampleIndicators" data-slide-to="3"><img src="../admin/<?php echo $row["prod_img3"] ?>" alt="<?php echo $row["prod_name"] ?>" /></a>
                        </div>
                    </div>
                    <div class="product-detail-info">
                        <h1 itemprop="name" class="bk-product-name"><?php echo $row["prod_name"] ?></h1>
                        <meta itemprop="url" content="https://thunggoletrong.com/thung-ruoi-go-soi/trong-go-sp4646.html" />
                        
                        <div class="d-none"></div>
                        <div class="gia-sanpham">
                            <!-- <div class="box_top"><span>Giá bán niêm yết</span></div>
                            <div class="box_body">
                                <form action="../../AddToCart" method="get">
                                        <div itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
                                            <meta itemprop="priceCurrency" content="VND" />
                                            <meta itemprop="availability" content="http://schema.org/InStock" />
                                            <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
                                            <meta itemprop="url" content="https://thunggoletrong.com/thung-ruoi-go-soi/trong-go-sp4646.html" />
                                            <meta itemprop="priceValidUntil" content="2024-08-11" />
                                            <meta itemprop="lowPrice" content="<?php echo $row["prod_current_price"] ?>" />
                                            <meta itemprop="highPrice" content="<?php echo $row["prod_current_price"] ?>" />
                                            <meta itemprop="offerCount" content="1" />
                                            <div class="product-info-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                                <meta itemprop="price" content="<?php echo $row["prod_current_price"] ?>" />
                                                <input type="radio" name="option" value="122" required checked="checked" /> <span>Giá Bán </span>:
                                                <span class="pprice"><?php echo number_format($row['prod_current_price'], 0, '.', '.') ?> đ</span>
                                            </div>
                                        </div>
                                    <div class="product-quantity">
                                        <input type="number" name="quantity" value="1" min="1" class="cbQuantity bk-product-qty" id="cbQuantity1">
                                        <button type="button" class="changequantity addquantity"><i class="fas fa-plus"></i></button>
                                        <button type="button" class="changequantity subquantity"><i class="fas fa-minus"></i></button>
                                    </div>
                                    <div class="row product-btn-action">

                                        <div class="col-12" itemprop="potentialAction" itemscope itemtype="https://schema.org/BuyAction">
                                            <button type="submit" class="btn btn-block mt-2">Mua ngay</button>
                                            <meta itemprop="name" content="mua ngay" />
                                            <meta itemprop="url" content="https://thunggoletrong.com/gio-hang.html" />
                                            <meta itemprop="mainEntityOfPage" content="https://thunggoletrong.com/gio-hang.html" />
                                            <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                <meta itemprop="name" content="phone" />
                                            </span>
                                            <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                <meta itemprop="name" content="laptop" />
                                            </span>
                                            <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                <meta itemprop="name" content="pc" />
                                            </span>
                                            <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                <meta itemprop="name" content="tablet" />
                                            </span>
                                            <span itemprop="target" itemscope itemtype="https://schema.org/EntryPoint" class="d-none">
                                                <meta itemprop="urlTemplate" content="https://thunggoletrong.com/gio-hang.html" />
                                            </span>
                                        </div>
                                        <div class="col-12 mt-3" itemprop="potentialAction" itemscope itemtype="https://schema.org/BuyAction"><div class="bk-btn"></div></div>
                                        <div class="col-6"><a href="https://m.me/letrong1991" target="_blank" class="btn btn-block mt-2">Tư vấn mua hàng</a></div>
                                        <div class="col-6"><a href="tel:0967609111" class="btn btn-block mt-2">Gọi điện đặt hàng</a></div>
                                        
                                    </div>
                                    <input type="text" name="attribute" id="attribute" hidden />
                                    <input type="text" name="image" id="image" hidden />
                                    <input id="id" name="id" type="hidden" value="<?php echo $row["prod_id"] ?>" />
                                </form>
                            </div> -->
                        </div>

                        <div class="product-info-attr">
                            <ul>

                                    <li><span class="label"> <strong>Mã Loại</strong></span><span class="colon">:</span><span class="value" itemprop="sku"><?php echo $row['category_name']?></span></li>
                                                                    <li itemprop="brand" itemscope itemtype="https://schema.org/Brand"><span class="label"><strong> Thương hiệu</strong></span><span class="colon">:</span><span class="value" itemprop="name">Lê Trong Official </span></li>
                                    <meta itemprop="manufacturer" content="Lê Trong Official " />
                                                                                                    <li><span class="label"> <strong>Xuất xứ</strong></span><span class="colon">:</span><span class="value"><?php echo $row['sub_name']?></span></li>
                                <li><span class="label"> <strong>Trạng th&#225;i</strong></span><span class="colon">:</span><span class="value">H&#224;ng c&#243; sẵn</span></li>


                                
                                
                            </ul>
                                <div class="product-detail-summary" itemprop="disambiguatingDescription">
<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; font-size: 16px;"><span class="fxk3tzhb b2rh1bv3 gh55jysx m8h3af8h ewco64xe kjdc1dyq ms56khn7 bq6c9xl4 eohcrkr5 akh3l2rg" historic="" segoe="" ui=""></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><meta charset="utf-8">
<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-503832c3-7fff-186b-d8e1-b2aa941dc04b" style="font-weight:normal;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span style="border:none;display:inline-block;overflow:hidden;width:16px;height:16px;"></span></span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><meta charset="utf-8"></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:8pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span style="border:none;display:inline-block;overflow:hidden;width:16px;height:16px;"><img alt="❌" height="16" src="https://lh6.googleusercontent.com/cI2_8Y2JPY2-DjRmpeE5-ZvNksdB6BQrwnoRlZ_xFe1OsBK74wfbbWRBPYfVgVnA-HKWQ6Qrp2kJpev88WJn52e3IvbTyOqvcGA7ByBzbF-x18ezbuIMACQou8Up3miX5RxFZQy5cUMtLx-eY2omYimZ0MQLBW10xwh3_THOHhmTR4_FmTGZOk0G9w" style="margin-left:0px;margin-top:0px;" width="16" /></span></span><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">GÓC CẢNH BÁO</span><span style="font-size:9pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span style="border:none;display:inline-block;overflow:hidden;width:16px;height:16px;"><img alt="❌" height="16" src="https://lh4.googleusercontent.com/RJ7Nn4R0eAZvwEbAsL_v4dK8cPZECGyld_gREsZMrIZ8iVfaii1tRfe50DR29TS7WgziCLMTNHI6fhycMJKCls93XRT-iGsXxOg9-jmGU_svz2JGjegnAxu89zVfaKbRmCb3spBKbLEwKV81qbogO2z47NoxvpJruz3lC1eZe_Jp8ebLxmQ1Iq1ovg" style="margin-left:0px;margin-top:0px;" width="16" /></span></span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">- Nhà mình mua sản phẩm ở bất kì nơi đâu phải đặc biệt CHÚ Ý 3 điều để không gây hại cho sức khỏe của chính bản thân và gia đình.</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">✅ 1.Nói KHÔNG với sản phẩm PHA TRỘN GỖ.(nhằm hạ giá thành sản phẩm chính thống)</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">✅ 2.Nói KHÔNG với sp gỗ NGÂM TẨM HÓA CHẤT và sử dụng KEO GẮN gây hại sức khỏe cho người dùng.</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">✅ 3. Kiểm tra thật kỹ trước khi nhận hàng xem sản phẩm có đạt chuẩn hay không.</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-503832c3-7fff-186b-d8e1-b2aa941dc04b" style="font-weight:normal;"><span style="font-size:13.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"></span></b></p>
<span style="font-size:20px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="font-size:16px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; font-weight: bold; border: 0px; max-width: 100%;">Bảo Hành: 12 Tháng</strong></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="font-size:16px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; font-weight: bold; border: 0px; max-width: 100%;">Hotline/Zalo cskh: <?php echo $zalo ?><br />
Hoặc liên hệ trực tiếp chủ xưởng CSSX Lê Trong : <?php echo $zalo ?></strong></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="font-size:16px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; font-weight: bold; border: 0px; max-width: 100%;">Nhận đóng theo yêu cầu giao hàng toàn quốc</strong></span></span></div>
</div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>

                    <div class="product-desc">
                        <ul class="nav nav-tabs pro-desc-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" href="#tabs-1" id="btn-tab-1" data-toggle="tab" role="tab" aria-controls="tabs-1" aria-selected="true">M&#244; tả sản phẩm</a></li>
                                                                                                                                        </ul>
                        <div class="event-tabs__body">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tab-1" role="tabpanel" aria-labelledby="btn-tab-1" itemprop="description">

                                <?php echo $row['prod_desc'] ?>


                                </div>
                                                                                                                                

                            </div>
                        </div>
                    </div>
                    
                    
                    <div id="postComment" class="card hasComment">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-md-3 pt-md-5 border-right">
                                    <div class="product-customer-col-1">
                                        <div class="item-rating" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
                                            <p>Đánh Giá Trung Bình</p>
                                            <p class="star-avg">0/5 <i class="fas fa-star"></i></p>
                                            
                                            <p class="comments-count"><a href="#listComment">(0 nhận xét)</a></p>
                                            
                                            <meta itemprop="reviewCount" content="14" />
                                            <meta itemprop="ratingValue" content="4,5" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 border-right">
                                        <span style="margin-right:10px">5 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
                                                
                                            </div>
                                        </div>
                                        <span style="color:#999;margin-left:10px">0</span><br />
                                        <span style="margin-right:10px">4 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
                                                
                                            </div>
                                        </div>
                                        <span style="color:#999;margin-left:10px">0</span><br />
                                        <span style="margin-right:10px">3 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
                                                
                                            </div>
                                        </div>
                                        <span style="color:#999;margin-left:10px">0</span><br />
                                        <span style="margin-right:10px">2 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
                                                
                                            </div>
                                        </div>
                                        <span style="color:#999;margin-left:10px">0</span><br />
                                        <span style="margin-right:10px">1 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
                                                
                                            </div>
                                        </div>
                                        <span style="color:#999;margin-left:10px">0</span><br />
                                </div>
                                <div class="col-md-4 text-center">
                                    
                                    <a class="btn btn-info btn-lg text-white mt-md-5 mt-3" href="#formComment">Viết cảm nhận của bạn</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        <p class="font-weight-bold py-3 hasComment">Chưa có bình luận nào cho sản phẩm này</p>

                    <div id="formComment " class="card hasComment" aria-expanded="true">
                        <div class="card-header">
                            <h4 class="font-weight-bold">Gửi nhận xét của bạn</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="postCommentForm">
                                        <input id="C_BookId" name="C_ProductId" type="hidden" value="4646">
                                            <input id="C_UserName" name="C_UserName" type="hidden" value="">
                                        <div class="form-group">
                                            <label for="C_UserName"><strong>Chọn đánh giá của bạn:</strong></label>
                                            <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="C_Star" value="5" required="">
                                                <label for="rating-input-1-5" class="rating-star"></label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="C_Star" value="4" required="">
                                                <label for="rating-input-1-4" class="rating-star"></label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="C_Star" value="3" required="">
                                                <label for="rating-input-1-3" class="rating-star"></label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="C_Star" value="2" required="">
                                                <label for="rating-input-1-2" class="rating-star"></label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="C_Star" value="1" required="">
                                                <label for="rating-input-1-1" class="rating-star"></label>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="C_Title" id="C_Title" required="" placeholder="Nhập tiêu đề nhận xét">
                                        </div>
                                        <div class="form-group">
                                            
                                            <textarea name="C_Content" id="C_Content" class="form-control" rows="7" style="width:100%" cols="50" placeholder="Nhập nội dung cần nhận xét ở đây. Tối thiểu 100 ký tự."></textarea>
                                        </div>
                                            <button type="button" class="btn pull-right" onclick="alert('Vui lòng đăng nhập trước khi gửi bình luận')">Gửi đi</button>
                                        <button class="btn pull-right" type="reset">Làm lại</button>
                                    </form>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="boxbody_tbl mt-0 d-none d-lg-block">
                                <div class="box_top"><span>Giá bán niêm yết</span></div>
                                <div class="box_body clearfix">
                                    <form action="/AddToCart" method="get" id="formAddCart">
                                            <div class="product-info-price">
                                                <input type="radio" name="option" value="122" required checked="checked" /> <span>Giá Bán</span>:
                                                <span class="pprice"> <?php   echo $row['prod_old_price'] != 0 ? number_format($row['prod_current_price'], 0, '.', '.').'₫':' Liên hệ '.$zalo ?> </span>
                                            </div>
                                        

                                        <div class="product-quantity">
                                        <?php if($row['prod_old_price'] != 0){?>
                                            <input type="number" name="quantity" value="1" min="1" class="cbQuantity bk-product-qty" id="cbQuantity">
                                            <button type="button" class="changequantity addquantity" id="addquantity"><i class="fas fa-plus"></i></button>
                                            <button type="button" class="changequantity subquantity" id="subquantity"><i class="fas fa-minus"></i></button>
                                            <?php } ?>
                                        </div>
                                        <div class="row product-btn-action">

                                            <div class="col-12" itemprop="potentialAction" itemscope itemtype="https://schema.org/BuyAction">
                                            <?php if($row['prod_old_price'] != 0){?>
                                                <button type="submit" class="btn btn-block mt-2">Mua ngay</button>
                                                <?php } ?>
                                                <meta itemprop="name" content="mua ngay" />
                                                <meta itemprop="url" content="https://thunggoletrong.com/gio-hang.html" />
                                                <meta itemprop="mainEntityOfPage" content="https://thunggoletrong.com/gio-hang.html" />
                                                <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                    <meta itemprop="name" content="phone" />
                                                </span>
                                                <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                    <meta itemprop="name" content="laptop" />
                                                </span>
                                                <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                    <meta itemprop="name" content="pc" />
                                                </span>
                                                <span itemprop="instrument" itemscope itemtype="https://schema.org/thing" class="d-none">
                                                    <meta itemprop="name" content="tablet" />
                                                </span>
                                                <span itemprop="target" itemscope itemtype="https://schema.org/EntryPoint" class="d-none">
                                                    <meta itemprop="urlTemplate" content="https://thunggoletrong.com/gio-hang.html" />
                                                </span>
                                            </div>
                                            <div class="col-12 mt-3" itemprop="potentialAction" itemscope itemtype="https://schema.org/BuyAction"><div class="bk-btn"></div></div>
                                            <div class="col-6"><a href="https://m.me/letrong1991" target="_blank" class="btn btn-block mt-2">Tư vấn mua hàng</a></div>
                                            <div class="col-6"><a href="tel:<?php echo $zalo ?>" class="btn btn-block mt-2">Gọi điện đặt hàng</a></div>
                                            
                                        </div>
                                        <input type="text" name="attribute" id="attribute" hidden />
                                        <input type="text" name="image" id="image" hidden />
                                        <input id="id" name="id" type="hidden" value="<?php echo $row["prod_id"] ?>" />
                                    </form>
                                    
                                </div>
                            </div>
                                                                                    <div class="boxbody_tbl mt-0 ">
                                <div class="box_top"><span>Sản phẩm cùng loại</span></div>
                                <div class="box_body clearfix">
                                        <div class="row same-cat-product">
                                                <div class="col-lg-12 col-4 col-xs-6">



    <?php   $sql = mysqli_query($conn, "SELECT * FROM tbl_product WHERE category_id = '" . $row["category_id"] . "' AND prod_id != '" . $row["prod_id"] . "' ORDER BY `product_reg_date` DESC LIMIT 10");
     while ($row = mysqli_fetch_array($sql)) { 
    ?>

    <div class="product-box" itemprop="isRelatedTo isSimilarTo" itemscope itemtype="https://schema.org/Product" itemid="https://thunggoletrong.com/thung-ruoi-go-soi/trong-go-sp4627.html#product-4627">
        <div id="pp-hover-img-1">
            <a class="pp-hover-img" href="../../san-pham/<?php echo $row['prod_id'] ?>"  itemprop="url">
                    <img class="img lazy" alt="<?php echo $row["prod_name"] ?>" src="/assets/client/images/blank.gif" data-original="../../admin/<?php echo $row["prod_thumb"] ?>" itemprop="image" content="/Data/images/Th%C3%B9ng%20r%C6%B0%E1%BB%A3u%2020L/20l8.png" />
            </a>
           <div class="product-actions">
                <a href="#" class="addToCart" data-id="<?php echo $row['prod_id'] ?>" title="Thêm vào giỏ hàng"><i class="fas fa-shopping-basket"></i></a>
                <a href="#" class="previewProduct" data-id="<?php echo $row['prod_id'] ?>" title="Xem nhanh"><i class="fa fa-eye"></i></a>
            </div>
<span class="icon-new">NEW</span>            <span class="icon-hot">HOT</span>                    </div>
        <div class="product-name" itemprop="name"><a href="../../san-pham/<?php echo $row['prod_id'] ?>" title="<?php echo $row["prod_name"] ?>"><?php echo $row["prod_name"] ?></a></div>
        
        <div class="product-price-cart" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            <meta itemprop="priceCurrency" content="VND" />
            <meta itemprop="availability" content="http://schema.org/OutOfStock" />
            <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
            <meta itemprop="url" content="https://thunggoletrong.com/thung-ruoi-go-soi/trong-go-sp4627.html" />
            <meta itemprop="priceValidUntil" content="2024-08-11" />
            <meta itemprop="price" content="<?php echo $row['prod_current_price']?>" />
            <span class="product-price"><?php echo number_format($row['prod_current_price'], 0, '.', '.') ?></span>
        </div>
        <div class="d-none" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
            <meta itemprop="reviewCount" content="14" />
            <meta itemprop="ratingValue" content="4,5" />
        </div>
        <div class="hover-content-pro d-none">
            <div class="hover-pro-info">
                <table>
                <tbody>
                                        <tr>
                        <td><b><i class="far fa-check-circle"></i> Thương hiệu</b> <meta itemprop="manufacturer" content="Lê Trong Official "/></td>
                        <td>:</td>
                        <td itemprop="brand" itemscope itemtype="https://schema.org/Brand"><span itemprop="name">Lê Trong Official </span></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>  
    <?php } ?>  

                                                </div>
                                                <div class="col-lg-12 col-4 col-xs-6">



    

    

                                                </div>
                                        </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <text class="col-lg-9 p-0"><div class="share-box clearfix">
    <div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false" style="float:left;"></div>
    <div class="fb-share-button" data-layout="button_count" data-size="small" data-mobile-iframe="false" style="float:left;"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    <div class="fb-like" data-layout="button_count" data-action="recommend" data-size="small" data-show-faces="false" data-share="false" style="float:left;"></div>
    <div class="fb-save" data-size="small" style="float:left;"></div>
    <div class="addthis_inline_share_toolbox share-tool"></div>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a8fd0ecb1b07e86"></script></text>
            </div>

        </div>
    </div>
</div>
<div id='bk-modal'></div>
        </div>
        
        <div class="clear"></div>


    
   <?php include 'includes/footer.php' ?>
    
    
    <link href="../../assets/css/star-rating.css" rel="stylesheet" />
    <script src="../../assets/js/star-rating.js"></script>

    <script type="text/javascript">
        $("#formAddCart").submit(function () {

$.post("/AddToCart", $("#formAddCart").serialize(), function (data) {
    parent.$("#countCart").html(data)
    parent.alertAddCart();
    parent.$('#modal-table').modal('hide');
    parent.location.href = '/gio-hang.html';
})
return false;
});
        $('.carousel').carousel()
        $("#btnAddFavorite").click(function () {
            var id = $(this).data("id");
            $.post("/Account/AddFavorite", { id: id }, function () { });
            var cart = $('.user');
            var imgtodrag = $("#multizoom1").eq(0);
            if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                    .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                    .css({
                        'opacity': '0.5',
                        'position': 'absolute',
                        //'height': '300px',
                        'width': '530px',
                        'z-index': '100'
                    })
                    .appendTo($('body'))
                    .animate({
                        'top': cart.offset().top + 10,
                        'left': cart.offset().left + 10,
                        'width': 75,
                        'height': 75
                    }, 1000, 'easeInOutExpo');

                setTimeout(function () {
                }, 1500);

                imgclone.animate({
                    'width': 0,
                    'height': 0
                }, function () {
                    $(this).detach()
                });
            }
        });
        $("#votestar").rating({
            min: 0,
            max: 5,
            step: 1,
            showClear: false,
            showCaption: false
        });
        $("#currentvote").rating({readonly:true,showClear: false,showCaption: false});
        $("#currentvote").rating('update', 0);
        $(".btnSendStar").click(function () {
            var val = $("#votestar").val();
            var id = $(this).data("id");
            $.post("/product/addstar", { id: id, star: val }, function () {
                $.post("/product/getstar", { id: id }, function (data) {
                    $("#currentvote").rating('update', data.star);
                    $("#votes").html("("+data.comment+" đánh giá)");
                    var notice = new PNotify({
                        title: 'Thông báo',
                        text: 'Đã gửi đánh giá sản phẩm',
                        addclass: "stack-bottom-right bg-primary",
                        stack: { "dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25 },
                        type: "info"
                    });
                });
            });
        })
        $(".subquantity").click(function () {
            var q = $(".cbQuantity");
            if (q.val() > 1)
                q.val(parseInt(q.val()) - 1);
        })
        $(".addquantity").click(function () {
            var q = $(".cbQuantity");
            q.val(parseInt(q.val()) + 1);
        })
        $("#cbQuantity1").on("change paste keyup cut select", function() {
            $("#cbQuantity").val($(this).val()).trigger('change');
            $("#cbQuantity").attr('value',$(this).val());
            $("#cbQuantity1").attr('value',$(this).val());
        });
        $("#cbQuantity").on("change paste keyup cut select", function() {
            $("#cbQuantity1").val($(this).val()).trigger('change');
            $("#cbQuantity").attr('value',$(this).val());
            $("#cbQuantity1").attr('value',$(this).val());
        });
        $("input[name='option']").click(function() {
            $(".bk-product-property").removeClass("bk-product-property");
            $(".bk-product-price").removeClass("bk-product-price");
            if(this.checked){
                $(this).next().addClass("bk-product-property");
                $(this).next().next().addClass("bk-product-price");
            }
        });
        $(document).ready(function() {
            $("input[type='radio']:checked").next().addClass("bk-product-property");
            $("input[type='radio']:checked").next().next().addClass("bk-product-price");
        });

 
        $('#postCommentForm').submit(function () {
            //e.preventDefault();
            $.ajax({
                type: 'Post',
                url: "/product/AddComment",
                data: $("#postCommentForm").serialize(),
                success: function (data) {
                    if(data.status==true){
                        var notice = new PNotify({
                            title: 'Thông báo',
                            text: 'Nhận sét đã được gửi. Vui lòng chờ duyệt.',
                            addclass: "stack-bottom-right bg-primary",
                            stack: { "dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25 },
                            type: "info"
                        });
                        $(".rating-input").prop('checked', false);
                        $("#C_Title").val('');
                        $("#C_Content").val('');
                    }
                    else{
                        var notice = new PNotify({
                            title: 'Lỗi',
                            text: data.message,
                            addclass: "stack-bottom-right bg-primary",
                            stack: { "dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25 },
                            type: "info"
                        });
                    }
                }
            });
            return false;
        });
        
       
    </script>
    <style>
        .hasComment{
            display:none
        }
    </style>

    



</body>
</html>