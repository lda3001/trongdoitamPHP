<?php 

include 'config.php';
include 'function.php';

$prod = isset($_GET['prod']) ? $_GET['prod'] : null;
$search = isset($_GET['term']) ? $_GET['term'] : null;
$currentURL = $_SERVER['REQUEST_URI'];

if ($currentURL == '/GetCategory') {
    $query = mysqli_query($conn, "SELECT * FROM tbl_category");
    $categories = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $category = array(
            'Value' => $row['category_id'],
            'Text' => $row['category_name']
        );
        $categories[] = $category;
    }
    header('Content-Type: application/json');
    echo json_encode($categories);
    exit;
}

if (strpos($currentURL, '/Home/Search') === 0 && !is_null($search)) {
    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM tbl_product WHERE prod_name LIKE ?");
    $likeSearch = '%' . $search . '%';
    $stmt->bind_param('s', $likeSearch);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $product_names = [];
    while ($row = $result->fetch_assoc()) {
        $product_names[] = $row['prod_name'];
    }
    
    header('Content-Type: application/json');
    echo json_encode($product_names);
    exit;
}






if($currentURL == '/Product/Preview/'.$prod){
    $query = mysqli_query($conn, "SELECT * FROM tbl_product JOIN tbl_sub_category ON tbl_product.sub_id = tbl_sub_category.sub_id JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id  WHERE prod_id = '".$_GET['prod']."'");
    $products = array();
    $row = mysqli_fetch_array($query) ;

?>

<html itemscope="" itemtype="http://schema.org/WebPage" lang="vi"><head>
    <title></title>
    <link rel="preload stylesheet" as="style" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Oswald&amp;display=swap&amp;subset=vietnamese,latin-ext" rel="preload stylesheet" as="style">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.min.css">
<link rel="preload stylesheet" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="../../assets/css/add.css" rel="stylesheet">

<link href="../../assets/css/home.css" rel="stylesheet">


<link href="../../assets/css/multizoom.css" rel="preload stylesheet" as="style">
<link rel="preload" as="script" type="text/javascript" href="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
<link rel="preload" as="script" type="text/javascript" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">


<link rel="preload" as="script" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
<link rel="preload" as="script" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
<link rel="preload" as="script" type="text/javascript" href="../../assets/js/notify.js">
<link rel="preload" as="script" type="text/javascript" href="https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js">
<style>
    /*#box-why{
        position: relative;
        background-image: url("/Data/images/slide/thung-ruou-go-nhap-khau.png?v=1");
        background-position: center center;
        background-size: cover;
    }*/
    .toc{margin-bottom:13px}
    .js-toc-title{display:inline-block;float:left;clear:both;background:#fefff2;font-weight:bold;padding:0 15px;height:40px;line-height:40px;border:1px solid #eee;text-transform:uppercase;border-left:5px solid #a55001;cursor:pointer}
    .toc>.toc-list-wrap{position:relative;display: inline-block;background: #fefff2;border:1px solid #eee;padding:10px 20px;float:left;clear:both;max-height:calc(100vh - 110px);overflow:auto;}
    /*.toc ol li{list-style:none;}
    .toc ol {counter-reset:item;}
    .toc ol li:before{content: counters(item, ".") ". ";counter-increment: item}*/
    .is-position-fixed{position:fixed !important;top:90px;z-index:1000000}
    .is-position-fixed>.toc-list-wrap{display:none}
    .is-position-fixed>.js-toc-title{z-index:1000}
    .js-toc-content h1::before,.js-toc-content h2::before,.js-toc-content h3::before,.js-toc-content h4::before,.js-toc-content h5::before,.js-toc-content h6::before{display: block;content: " ";height: 60px;margin-top: -60px;visibility: hidden;}/*To handle anchor links properly when you have a fixed header*/
    .is-position-fixed .js-toc-title{font-size:0;padding:0 8px;}
    .is-position-fixed .js-toc-title i{font-size:1.5rem;line-height:40px;}
    .is-position-fixed .js-toc-title span{display:none;}
    .easy_toc_list ol{margin-left:20px;}
    .easy_toc_list-item{position:relative;}
    .easy_toc_list-item_link{font-weight:normal}
    .easy_toc_list-item_link.active{font-weight:700}
    ol .easy_toc_list-item_link.active:before{content:"";height: 1em;width:3px;display: block;background-color: #f00;position: absolute;top:0;left: -20px;}
    ol ol .easy_toc_list-item_link.active:before{left: -40px;}
    ol ol ol .easy_toc_list-item_link.active:before{left: -60px;}
    ol ol ol ol .easy_toc_list-item_link.active:before{left: -80px;}
    ol ol ol ol ol .easy_toc_list-item_link.active:before{left: -100px;}
</style>
<style type="text/css">.featuredimagezoomerhidden {visibility: hidden!important;}</style></head><body>
    
    <div id="wrapper">
        




<div class="boxbody_tbl m-0 bg-white">
    <div class="boxbody_body clearfix">
        <div class="row no-gutters">
            <div class="product-detail-img mb-3 col-sm-7 pr-md-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../../admin/<?php echo $row["prod_thumb"]?>" alt="First slide">
                        </div>
                                            <div class="carousel-item">
                            <img class="d-block w-100" src="../../admin/<?php echo $row["prod_img1"] ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../admin/<?php echo $row["prod_img3"] ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../admin/<?php echo $row["prod_img3"] ?>" alt="Second slide">
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
                    <a href="#" data-target="#carouselExampleIndicators" data-slide-to="0"><img src="../../admin/<?php echo $row["prod_thumb"]?>" alt="Thùng đựng rượu gỗ sồi 20 lít"></a>
                    <a href="#" data-target="#carouselExampleIndicators" data-slide-to="1"><img src="../../admin/<?php echo $row["prod_img1"] ?>" alt="Thùng đựng rượu gỗ sồi 20 lít"></a>
                    <a href="#" data-target="#carouselExampleIndicators" data-slide-to="2"><img src="../../admin/<?php echo $row["prod_img2"] ?>" alt="Thùng đựng rượu gỗ sồi 20 lít"></a>
                    <a href="#" data-target="#carouselExampleIndicators" data-slide-to="3"><img src="../../admin/<?php echo $row["prod_img3"] ?>" alt="Thùng đựng rượu gỗ sồi 20 lít"></a>

            </div>
        </div>
        <div class="product-detail-info col-sm-5">
            <h1><?php echo $row['prod_name'] ?></h1>
            <form action="/AddToCart" method="get" id="formAddCart">
                    <div class="product-info-price">
                        <span>
                            <input type="radio" name="option" value="122" required="" checked="checked"> Giá bán:
                        </span>
                        <span class="pprice"> <?php   echo $row['prod_old_price'] != 0 ? number_format($row['prod_current_price'], 0, '.', '.').'₫':' Liên hệ ' .$zalo ?> </span>
                    </div>
                                <div class="product-info-attr">
                    <ul>
                            <li><span class="label"><i class="far fa-check-circle"></i> Mã loại</span><span itemprop="thương hiệu" class="value">: <?php echo $row['category_name']?></span></li>
                                                    <li><span class="label"><i class="far fa-check-circle"></i> Thương hiệu</span><span class="value">: Lê Trong Official </span></li>
                                                                            <li><span class="label"><i class="far fa-check-circle"></i> Xuất xứ</span><span class="value">:<?php echo $row['sub_name']?></span></li>

                        <li><span class="label"><i class="far fa-check-circle"></i> Trạng thái</span><span class="value">: Hàng có sẵn</span></li>
                        
                    </ul>
                        <div class="product-detail-summary">
<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; font-size: 16px;"><span class="fxk3tzhb b2rh1bv3 gh55jysx m8h3af8h ewco64xe kjdc1dyq ms56khn7 bq6c9xl4 eohcrkr5 akh3l2rg" historic="" segoe="" ui=""></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><meta charset="utf-8">
<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-503832c3-7fff-186b-d8e1-b2aa941dc04b" style="font-weight:normal;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span style="border:none;display:inline-block;overflow:hidden;width:16px;height:16px;"></span></span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><meta charset="utf-8"></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:8pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span style="border:none;display:inline-block;overflow:hidden;width:16px;height:16px;"><img alt="❌" height="16" src="https://lh6.googleusercontent.com/cI2_8Y2JPY2-DjRmpeE5-ZvNksdB6BQrwnoRlZ_xFe1OsBK74wfbbWRBPYfVgVnA-HKWQ6Qrp2kJpev88WJn52e3IvbTyOqvcGA7ByBzbF-x18ezbuIMACQou8Up3miX5RxFZQy5cUMtLx-eY2omYimZ0MQLBW10xwh3_THOHhmTR4_FmTGZOk0G9w" style="margin-left:0px;margin-top:0px;" width="16"></span></span><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">GÓC CẢNH BÁO</span><span style="font-size:9pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span style="border:none;display:inline-block;overflow:hidden;width:16px;height:16px;"><img alt="❌" height="16" src="https://lh4.googleusercontent.com/RJ7Nn4R0eAZvwEbAsL_v4dK8cPZECGyld_gREsZMrIZ8iVfaii1tRfe50DR29TS7WgziCLMTNHI6fhycMJKCls93XRT-iGsXxOg9-jmGU_svz2JGjegnAxu89zVfaKbRmCb3spBKbLEwKV81qbogO2z47NoxvpJruz3lC1eZe_Jp8ebLxmQ1Iq1ovg" style="margin-left:0px;margin-top:0px;" width="16"></span></span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">- Nhà mình mua sản phẩm ở bất kì nơi đâu phải đặc biệt CHÚ Ý 3 điều để không gây hại cho sức khỏe của chính bản thân và gia đình.</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">✅ 1.Nói KHÔNG với sản phẩm PHA TRỘN GỖ.(nhằm hạ giá thành sản phẩm chính thống)</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">✅ 2.Nói KHÔNG với sp gỗ NGÂM TẨM HÓA CHẤT và sử dụng KEO GẮN gây hại sức khỏe cho người dùng.</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-d4530cfa-7fff-4988-8491-f91f3fbb1d8c" style="font-weight:normal;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">✅ 3. Kiểm tra thật kỹ trước khi nhận hàng xem sản phẩm có đạt chuẩn hay không.</span></b></p>

<p dir="ltr" style="line-height:1.92;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;"><b id="docs-internal-guid-503832c3-7fff-186b-d8e1-b2aa941dc04b" style="font-weight:normal;"><span style="font-size:13.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"></span></b></p>
<span style="font-size:20px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="font-size:16px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; font-weight: bold; border: 0px; max-width: 100%;">Bảo Hành: 12 Tháng</strong></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="font-size:16px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; font-weight: bold; border: 0px; max-width: 100%;">Hotline/Zalo cskh: <?php echo $zalo ?><br>
Hoặc liên hệ trực tiếp chủ&nbsp;xưởng CSSX Lê Trong : <?php echo $zalo ?></strong></span></span></div>

<div style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%; color: rgb(51, 51, 51); font-family: roboto, arial, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1.6;"><span style="font-size:16px;"><span style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; max-width: 100%;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; font-weight: bold; border: 0px; max-width: 100%;">Nhận đóng theo yêu cầu giao hàng toàn quốc</strong></span></span></div>
</div>
                </div>
                

                <div class="product-quantity">
                    <input type="number" name="quantity" value="1" min="1" class="cbQuantity">
                    <button type="button" class="changequantity addquantity"><i class="fas fa-plus"></i></button>
                    <button type="button" class="changequantity subquantity"><i class="fas fa-minus"></i></button>
                </div>
                <div class="row product-btn-action">
                    <div class="col-6"><a href="https://m.me/letrong1991" target="_blank" class="btn btn-primary btn-block mt-2">Tư vấn mua hàng</a></div>
                    <div class="col-6"><a href="tel:<?php echo $zalo ?>" class="btn btn-info btn-block mt-2">Gọi điện đặt hàng</a></div>
                    <?php if($row['prod_old_price'] != 0){?>
                        <div class="col-12"><button type="submit" class="btn btn-danger btn-block mt-2">Mua ngay</button></div>
                    <div class="col-12">
                        <button class="btn btn-success btn-block mt-2 addToCart2" type="button" data-id="<?php echo $row["prod_id"] ?>" title="Thêm vào giỏ hàng"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ hàng</button>
                    </div>
                    <?php } ?>
                </div>
                <input type="text" name="attribute" id="attribute" hidden="">
                <input type="text" name="image" id="image" hidden="">
                <input id="id" name="id" type="hidden" value="<?php echo $row["prod_id"] ?>">
            </form>
            <div class="boxbody_tbl mt-0 d-none d-lg-block">
                <div class="box_top d-none"><span>Thành phần mùi hương</span></div>
                <div class="box_body clearfix">

                </div>
            </div>
            
        </div>
        </div>
        
        <div class="clear"></div>
        <div class="mt-4">


        </div>
    </div>
</div>
    </div>
    <script src="//code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
    <script src="../../assets/js/multizoom.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
                speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
                imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
                magvertcenter: false, // magnified area centers vertically in relation to the zoomable image (optional) - new
                zoomrange: [3, 10],
                magnifiersize: [350, 350],
                magnifierpos: 'right',
                cursorshadecolor: '#fdffd5',
                cursorshade: true //<-- No comma after last option!
            });
        })
    </script>
    <script>
        $("#formAddCart").submit(function () {

            $.post("/AddToCart", $("#formAddCart").serialize(), function (data) {
                parent.$("#countCart").html(data)
                parent.alertAddCart();
                parent.$('#modal-table').modal('hide');
                parent.location.href = '/gio-hang.html';
            })
            return false;
        });
        $(".addToCart2").click(function (e) {
            $.post("/AddToCart", $("#formAddCart").serialize(), function (data) {
                parent.$("#countCart").html(data)

                parent.alertAddCart();
                parent.$('#modal-table').modal('hide');
            })
            return false;
        });
        $(".subquantity").click(function () {
            var q = $(".cbQuantity");
            if (q.val() > 1)
                q.val(parseInt(q.val()) - 1);
        })
        $(".addquantity").click(function () {
            var q = $(".cbQuantity");
            q.val(parseInt(q.val()) + 1);
        })
    </script>

</body></html>
<?php } ?>




<?php 
if($currentURL == '/AddToCart'){  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if (isset($_POST["id"])) {
           
            $id = $_POST["id"];
            $quantity = max(1, intval($_POST['quantity']));
            
          
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }
            
        
       
            if (array_key_exists($id, $_SESSION['cart'])) {
                $_SESSION['cart'][$id] += $quantity;
            } else {
            
                $_SESSION['cart'][$id] = $quantity;
            }
            echo json_encode(count($_SESSION['cart']));
            
        } else {
           
            http_response_code(400);
            echo "Missing product ID";
        }
    } else if   ($_SERVER["REQUEST_METHOD"] == "GET"){
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
 
    ?>
 <div id="cart-content">
    <?php if ($_SESSION['cart'] == array()) { ?>
        <p>Giỏ hãng rỗng</p>
    <?php } else { ?>
        <table width="100%">
            <tbody><?php

            $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
            $temp = 0;
            $ship = 0;
            if (!empty($query)) {
                while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td width="25%">
                                <img src="../../admin/<?php echo $row['prod_thumb'] ?>" alt="<?php echo $row['prod_name'] ?>">
                            </td>
                            <td>
                                <a href="/thung-ruoi-go-soi/trong-go-sp4627.html"><?php echo $row['prod_name'] ?></a>
                                <br> <?php echo $_SESSION['cart'][$row['prod_id']] ?> x
                                <span><?php echo number_format($row['prod_current_price'], 0, '.', '.') ?> đ</span>

                                <span class="remove-cart" data-id="<?php echo $row['prod_id'] ?>"><i
                                        class="fas fa-trash-alt"></i></span>
                            </td>
                        </tr>

                        <?php
                        $total = $row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']];

                        $temp += $total;

                        ?>
                    <?php } ?>
                </tbody>

            </table>



            <ul class="bold clearfix">
                <li>Tổng</li>
                <li>

                    <span> <?php echo number_format($temp, 0, '.', '.') ?> đ</span>


                </li>
            </ul>
            <a href="/gio-hang.html" class="button">Xem giỏ hàng</a><a href="/thong-tin-van-chuyen.html" class="button">Thanh
                toán</a>
        </div>
    <?php } ?>
<?php } ?>

<?php } else {
    http_response_code(405);
    echo "RESQUEST NOT FOUND";
}
    ?> 
<?php } ?>




<?php 
if($currentURL == '/Cart/Json'){  
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo json_encode([]);
        exit();
    }
    
    $cart_items = [];
   
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $query = "SELECT * FROM tbl_product WHERE prod_id = $id";
        $result = mysqli_query($con, $query);
        $product = mysqli_fetch_assoc($result);
        $cart_items[] = [
            'id' => $id,
            'image' => '../../admin/'.$product["prod_thumb"],
            'productname' => $product["prod_name"], 
            'price' =>  $product["prod_current_price"], 
            'quantity' => $quantity
        ];
    }
    
    echo json_encode($cart_items);
}
?>




<?php 
if($currentURL == '/Cart/Update'){  
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SESSION['cart'])) {
        http_response_code(400); 
        exit();
    }
    
    $updated_item = json_decode(file_get_contents('php://input'), true);
    
   
    if (!isset($updated_item['id']) || !array_key_exists($updated_item['id'], $_SESSION['cart'])) {
        http_response_code(404); 
        exit();
    }
    
    // Cập nhật số lượng sản phẩm trong giỏ hàng
    $_SESSION['cart'][$updated_item['id']] = max(1, intval($updated_item['quantity'])); // Giới hạn số lượng tối thiểu là 1
    
    // Trả về dữ liệu thành công
    http_response_code(200);
    echo json_encode(['message' => 'Cart updated successfully']);
}
?>




<?php
if ($currentURL == '/Cart/Delete') {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SESSION['cart'])) {
        http_response_code(400); 
        exit(); 
    }

    // Lấy dữ liệu từ POST request
    $deleted_item = json_decode(file_get_contents('php://input'), true);

    if (!array_key_exists($deleted_item['id'], $_SESSION['cart'])) {
        http_response_code(404); 

        exit(); 
    }

    $deleted_product = [
        'id' => $deleted_item['id'],
    ];
    $_SESSION['deleted_item'] = $deleted_product;

    unset($_SESSION['cart'][$deleted_item['id']]);

    // Trả về dữ liệu thành công
    http_response_code(200);
    if (isset($_SESSION['cart'])) {
        echo json_encode(count($_SESSION['cart']));
    } else {
        echo json_encode(0);
    }

}
?>




<?php if($currentURL == '/Product/ChangeOrderWay'){  
   

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['orderway']) ) {
        // Nhận dữ liệu sắp xếp từ yêu cầu POST
        $by = "";
        $orderway = isset($_POST['orderway']) ? $_POST['orderway'] : null ;
        switch ( $orderway) {
            case 'tenZA':
                $by = "ORDER BY `prod_name` DESC";
                break;
            case 'tenAZ':
                $by = "ORDER BY `prod_name` ASC";
                break;
            case 'moicu':
                $by = "ORDER BY `product_reg_date` DESC";
                break;
            case 'giatang':
                $by = "ORDER BY `prod_current_price` ASC";
                break;
            case 'giagiam':
                $by = "ORDER BY `prod_current_price` DESC";
                break;
            default:
           
                break;
        }
    
        // $sql = "SELECT * FROM tbl_product ".$by;
        // $result = mysqli_query($conn, $sql);
        // $cart_items = [];
       
        // while ($product = mysqli_fetch_assoc($result)){
        //     $cart_items[] = [
        //         'id' => $product["prod_id"],
        //         'image' => '../../admin/'.$product["prod_thumb"],
        //         'productname' => $product["prod_name"], 
        //         'price' =>  $product["prod_current_price"], 
        //         'price_old' =>  $product["prod_old_price"], 
        //     ];
        // }
        
       
        header('Content-Type: application/json');
        echo json_encode($by); 
        exit;
        
       
        
    } else {
        
        echo json_encode(array("status" => false, "message" => "Invalid request."));
        // exit;
    }
    
    

}?>

   
   


<?php
if ($currentURL == '/Product/JSON') {

    if (isset($_SERVER['HTTP_REFERER'])) {
        $previousPage = $_SERVER['HTTP_REFERER'];

        $lastSegment = basename(parse_url($previousPage, PHP_URL_PATH));
        $lastSegment = str_replace(["'", '"'], '', $lastSegment);
        $cart_items = [];
        $POST = json_decode(file_get_contents('php://input'), true);
       
       
        if ($lastSegment == "cua-hang") {
            $query = "SELECT * FROM tbl_product ";
        } else {
            $query = "SELECT * FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id WHERE tbl_category.category_desc = '$lastSegment'";
        }
        
        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result) > 0){
            while ($product = mysqli_fetch_assoc($result)) {
                $cart_items[] = [
                    'id' => $product["prod_id"],
                    'image' => '../../admin/' . $product["prod_thumb"],
                    'productname' => $product["prod_name"],
                    'price' => $product["prod_current_price"],
                    'price_old' => $product["prod_old_price"],
                ];
            }
        }


        


        header('Content-Type: application/json');
        echo json_encode($cart_items);
    }
} else { ?>
    <?php
    if (isset($_GET["manufacturer"]) && isset($_GET["rangename"])) {
        if ($_GET["manufacturer"] != '') {
            $manufacturerIds = $_GET["manufacturer"];
            $manufacturerIds = array_map('intval', explode(',', $manufacturerIds));
            if(!isset($_GET["order"])){
                $_GET["order"] = "";
            }
            $BY = $_GET["order"];
            $priceRange = $_GET["rangename"];
            $priceRangeParts = explode(',', $priceRange);

            // Extract lower and upper limits of the price range
            $lowerPrice = intval($priceRangeParts[0]);
            $upperPrice = intval($priceRangeParts[1]);
            
            $sql = _query("SELECT * FROM tbl_product WHERE sub_id IN (" . implode(',', $manufacturerIds) . ") AND prod_current_price BETWEEN $lowerPrice AND $upperPrice $BY");

            ?>
            <div id="bd-panel">
                <div class="row">
                    <?php while ($row = mysqli_fetch_array($sql)) { ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <meta itemprop="position" content="1" />
                                <div class="product-box" itemprop="item" itemscope itemtype="https://schema.org/Product"
                                    itemid="https://thunggoletrong.com/ngua-keo-bom-ruou/ngua-keo-bom-ruou-sp4673.html#product-4673">
                                    <div id="pp-hover-img-1">
                                        <a class="pp-hover-img" href="../../san-pham/<?php echo $row['prod_id'] ?>" itemprop="url">
                                            <img class="img" alt="Ngựa kéo bom rượu" src="../../admin/<?php echo $row['prod_thumb'] ?>"
                                                itemprop="image" />
                                        </a>
                                        <div class="product-actions">
                                        <?php if($row['prod_old_price'] != 0){?>
                            <a href="#" class="addToCart" data-id="<?php echo $row['prod_id'] ?>" title="Th&#234;m v&#224;o giỏ h&#224;ng"><i
                                    class="fas fa-shopping-basket"></i></a>
                                    <?php }else{ ?>
                                        <a href="tel:<?php $zalo ?>" class="call" title="Liên Hệ" ng-if="item.price_old == 0"><i
                        class="fas fa-phone"></i></a><?php } ?>
                                            <a href="#" class="previewProduct" data-id="<?php echo $row['prod_id'] ?>"
                                                title="Xem nhanh"><i class="fa fa-eye"></i></a>
                                        </div>

                                        <span class="icon-hot">HOT</span>
                                    </div>
                                    <div class="product-name" itemprop="name"><a href="../../san-pham/<?php echo $row['prod_id'] ?>"
                                            title="<?php echo $row['prod_name'] ?>">
                                            <h2><?php echo $row['prod_name'] ?></h2>
                                        </a></div>
                                    <i class="d-none">L&#234; Trong Official </i>
                                    <div class="product-price-cart" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                        <meta itemprop="priceCurrency" content="VND" />
                                        <meta itemprop="availability" content="http://schema.org/InStock" />
                                        <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
                                        <meta itemprop="url"
                                            content="https://thunggoletrong.com/ngua-keo-bom-ruou/ngua-keo-bom-ruou-sp4673.html" />
                                        <meta itemprop="priceValidUntil" content="2024-08-13" />
                                        <meta itemprop="price" content="../../san-pham/<?php echo $row['prod_current_price'] ?>" />
                                        <span class="product-price">
                                        <?php   echo $row['prod_old_price'] != 0 ? number_format($row['prod_current_price'], 0, '.', '.').'₫':'Giá bán: Liên hệ' ?> 
                                        </span>
                                        <?php if($row['prod_old_price'] != 0 ){ ?>
                                        <span class="product-price-old">
                                            <?php echo number_format($row['prod_old_price'], 0, '.', '.'); ?> đ
                                        </span>
                        <?php } ?>
                                    </div>

                                    <div class="d-none" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating"
                                        itemscope>
                                        <meta itemprop="reviewCount" content="14" />
                                        <meta itemprop="ratingValue" content="4,5" />
                                    </div>
                                    <div class="hover-content-pro d-none">
                                        <div class="hover-pro-info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td><b><i class="far fa-check-circle"></i> Thương hiệu</b>
                                                            <meta itemprop="manufacturer" content="Lê Trong Official " />
                                                        </td>
                                                        <td>:</td>
                                                        <td itemprop="brand" itemscope itemtype="https://schema.org/Brand"><span
                                                                itemprop="name">Lê Trong Official </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>

        <?php } else if ($_GET["rangename"] != '') {
            $priceRange = $_GET["rangename"];

            if(!isset($_GET["order"])){
                $_GET["order"] = "";
            }
            if(!isset($_GET["size"])){
                $_GET["size"] = "24";
            }


            if(!isset($_GET["manucate"])){
                $cateid = 0;
            }else{
                $cateid = $_GET["manucate"];
            }
            if($cateid==0){
                $WHERE = "";
            }else{
                $WHERE = "(category_id = ".$cateid.") AND";
            }
            $BY = $_GET["order"];
            $LIMIT = "LIMIT ".$_GET["size"];
           
            $priceRangeParts = explode(',', $priceRange);

            // Extract lower and upper limits of the price range
            $lowerPrice = intval($priceRangeParts[0]);
            $upperPrice = intval($priceRangeParts[1]);
            if (isset($_SERVER['HTTP_REFERER'])) {
                $previousPage = $_SERVER['HTTP_REFERER'];
                $lastSegment = basename(parse_url($previousPage, PHP_URL_PATH));
                $lastSegment = str_replace(["'", '"'], '', $lastSegment);
            }
            if($lastSegment == 'cua-hang' || $lastSegment == "searchcontent"){
               
                $sql = _query("SELECT * FROM tbl_product WHERE $WHERE prod_current_price BETWEEN $lowerPrice AND $upperPrice $BY $LIMIT");
                

            }else{
                $sql = _query("SELECT * FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id  WHERE tbl_category.category_desc = '$lastSegment' AND prod_current_price BETWEEN $lowerPrice AND $upperPrice $BY $LIMIT");
               
            }




            ?>


                <div id="bd-panel">
                    <div class="row">
                    <?php while ($row = mysqli_fetch_array($sql)) { ?>
                            <div class="<?php echo $lastSegment === 'searchcontent' ? 'col-6 col-md-4 col-lg-3 col-xl-2dot4' : 'col-6 col-md-4 col-lg-3' ?>">
                                <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <meta itemprop="position" content="1" />
                                    <div class="product-box" itemprop="item" itemscope itemtype="https://schema.org/Product"
                                        itemid="https://thunggoletrong.com/ngua-keo-bom-ruou/ngua-keo-bom-ruou-sp4673.html#product-4673">
                                        <div id="pp-hover-img-1">
                                            <a class="pp-hover-img" href="../../san-pham/<?php echo $row['prod_id'] ?>" itemprop="url">
                                                <img class="img" alt="<?php echo $row['prod_name'] ?>" src="../../admin/<?php echo $row['prod_thumb'] ?>"
                                                    itemprop="image" />
                                            </a>
                                            <div class="product-actions">
                                            <?php if($row['prod_old_price'] != 0){?>
                            <a href="#" class="addToCart" data-id="<?php echo $row['prod_id'] ?>" title="Th&#234;m v&#224;o giỏ h&#224;ng"><i
                                    class="fas fa-shopping-basket"></i></a>
                                    <?php }else{ ?>
                                        <a href="tel:<?php $zalo ?>" class="call" title="Liên Hệ" ng-if="item.price_old == 0"><i
                        class="fas fa-phone"></i></a><?php } ?>
                                                <a href="#" class="previewProduct" data-id="<?php echo $row['prod_id'] ?>"
                                                    title="Xem nhanh"><i class="fa fa-eye"></i></a>
                                            </div>

                                            <span class="icon-hot">HOT</span>
                                        </div>
                                        <div class="product-name" itemprop="name"><a href="../../san-pham/<?php echo $row['prod_id'] ?>"
                                                title="<?php echo $row['prod_name'] ?>">
                                                <h2><?php echo $row['prod_name'] ?></h2>
                                            </a></div>
                                      
                                        <div class="product-price-cart" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                            <meta itemprop="priceCurrency" content="VND" />
                                            <meta itemprop="availability" content="http://schema.org/InStock" />
                                            <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
                                            <meta itemprop="url"
                                                content="" />
                                            <meta itemprop="priceValidUntil" content="2024-08-13" />
                                            <meta itemprop="price" content="../../san-pham/<?php echo $row['prod_current_price'] ?>" />
                                            <span class="product-price">
                                        <?php   echo $row['prod_old_price'] != 0 ? number_format($row['prod_current_price'], 0, '.', '.').'₫':'Giá bán: Liên hệ' ?> 
                                        </span>
                                        <?php if($row['prod_old_price'] != 0 ){ ?>
                                        <span class="product-price-old">
                                            <?php echo number_format($row['prod_old_price'], 0, '.', '.'); ?> đ
                                        </span>
                                        <?php } ?>
                                        </div>

                                        <div class="d-none" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating"
                                            itemscope>
                                            <meta itemprop="reviewCount" content="14" />
                                            <meta itemprop="ratingValue" content="4,5" />
                                        </div>
                                        <div class="hover-content-pro d-none">
                                            <div class="hover-pro-info">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><b><i class="far fa-check-circle"></i> Thương hiệu</b>
                                                                <meta itemprop="manufacturer" content="Lê Trong Official " />
                                                            </td>
                                                            <td>:</td>
                                                            <td itemprop="brand" itemscope itemtype="https://schema.org/Brand"><span
                                                                    itemprop="name">Lê Trong Official </span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>

                    <?php } ?>
                    <?php if($lastSegment == "cua-hang"){ ?>
                <div class='phantrang'>
                    <ul>
                        <li>
                            <a><b>Trang 1/2</b></a>
                        </li>

                        <li><a class=selected onclick='return false;'>1</a></li>
                        <li><a href='/san-pham-p2.html' data-isajax="0" class="changepage" data-page="2">2</a>
                        </li>
                        <li><a title='Trang tiếp' rel="next" data-isajax="0" href='/san-pham-p2.html' data-page="2"
                                class="changepage fa fa-arrow-right fa-pt"></a></li>
                        <li><a title='Trang cuối' data-isajax="0" href='/san-pham-p2.html' class="changepage"
                                data-page="2"><i class="fa fa-forward fa-pt"></i></a></li>
                    </ul>
















                </div>
                <?php } ?>
                    </div>
                </div>
        <?php } else {

        }
    } ?>


<?php } ?>

