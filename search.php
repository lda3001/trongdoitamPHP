<?php include "includes/header.php" ;
$search = isset($_GET['searchString']) ? $_GET['searchString'] : null;
$cateid = isset($_GET['categoryId']) ? $_GET['categoryId'] : null;

$query = "SELECT * FROM tbl_product WHERE prod_name LIKE ?";
$likeSearch = '%' . $search . '%';
$params = ['s', &$likeSearch];

if ($cateid != 0 && $cateid !== null) {
    $query .= " AND category_id = ?";
    $params[0] .= 'i';
    $params[] = &$cateid;
}

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

// Sử dụng call_user_func_array để gọi bind_param với tham chiếu
call_user_func_array([$stmt, 'bind_param'], $params);

$stmt->execute();

$result = $stmt->get_result();


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

                <a itemprop="item" href="#">

                    <span itemprop="name">Tìm Kiếm Sản Phẩm</span></a>

                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>
<div class="container">



<input type="text" type="submit" value="<?=intval($cateid)?>" hidden id="cate">


    <div class="boxbody_tbl">
        <div class="boxbody_top">
            <span>

                <h1>Tìm kiếm sản phẩm : <?php echo $search ?></h1>
            </span>
        </div>

        <p class="view-sort">
            Số sản phẩm/1 trang:
            <select name="pagesize" id="pagesize" data-url="/home/searchcontent" onchange="changepagesize(this)"
                class="form-control form-control-inline">
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <option value="60">60</option>
                <option value="65">65</option>
                <option value="70">70</option>
                <option value="75">75</option>
            </select>&nbsp;
            - &nbsp;Sắp xếp
            <select name="sapxep" id="sapxep" data-url="/home/searchcontent" onchange="changesapxep(this)"
                class="form-control form-control-inline">
                <option value="moicu"> -- </option>
                <option value="giatang">Giá tăng dần</option>
                <option value="giagiam">Giá giảm dần</option>
                <option value="tenAZ">Tên từ A-Z</option>
                <option value="tenZA">Tên từ Z-A</option>
            </select>&nbsp;
        </p>

        <div id="bd-panel" class="mt-4">
            <div class="row">
                
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2dot4">
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
    </div>
    



</div>
<?php include "includes/footer.php" ?>
<script src="../../assets/js/product.js"></script>
<script>

    function ResetProduct(by,n) {
        var fromPrice = 0;
        var toPrice = 100000000000;
        var subcate = ''
        var cate = $('#cate').val();
        $.get('/Product/JSON', {manucate : cate ,manufacturer: subcate ,rangename: fromPrice + "," + toPrice,  order: by ,size : n}, function (data) {

            var html = $(data).find("#bd-panel");
            $("#bd-panel").replaceWith(data);
            img_auto();
            owl_img_auto();
        });
    };
</script>