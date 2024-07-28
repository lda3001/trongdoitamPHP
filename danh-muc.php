<?php

include 'includes/header.php';
$by = "";


$cate = isset($_GET['cate']) ? $_GET['cate'] : null;
if($cate == null){
    $product = _fetch("SELECT * FROM tbl_product");
}else{
    if(mysqli_num_rows(_query("SELECT * FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id WHERE tbl_category.category_desc = '$cate'"))>0){
        $product = _fetch("SELECT * FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id WHERE tbl_category.category_desc = '$cate'");
    }else{
        header('Location: http://localhost/error_page.php');
            exit();
    }
    
}

?>
<link href="../../assets/css/ion.rangeSlider.css" rel="stylesheet" />
<link href="../../assets/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
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
                <?php if($cate == null){ ?>
                <a itemprop="item" href="">
                    
                    <span itemprop="name">Sản phẩm</span></a>
                    <?php } else { ?>
                        <a itemprop="item" href="">
                    
                    <span itemprop="name"><?php echo $product['category_name'] ?></span></a>
                    <?php } ?>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>


<div class="container">

























    <div id="right-panel">
        <div class="box_tbl">
            <div class="box_top" onclick="$('#dmsp').slideToggle();"><span class="icon"><i
                        class="far fa-list-alt"></i></span><span>Danh mục</span><span class="toggle"><i
                        class="fas fa-sort-down"></i></span></div>
            <div class="box_body hide-m" id="dmsp">
                <div id="menudmsp">
                    <ul>
                       <?php $query = mysqli_query($conn, "SELECT * FROM tbl_category");
                        while ($row = mysqli_fetch_array($query)) { ?>
                <li>
                    <a href="../../danh-muc/<?php echo $row['category_desc'] ?>"><?php echo $row['category_name'] ?></a>


                </li>
                <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box_tbl" id="filter-box">
            <div class="box_top" onclick="$('#filter').slideToggle();"><span class="icon"><i
                        class="fas fa-filter"></i></span><span>Lọc </span><span class="toggle"><i
                        class="fas fa-sort-down"></i></span></div>
            <div class="box_body hide-m" id="filter">

                <p class="filter-title" onclick="$('#filter-prop-0').slideToggle();"
                    title="Click để thu gọ/mở rộng thuộc tính này">Loại <i class="fas fa-angle-down"></i></p>
                <div id="filter-prop-0">
                    <input type="text" class="form-control filtertext" data-id="filter-prop-0"
                        placeholder="Tìm kiếm loại gỗ">
                    <ul class="properties manufacturer scrollbar-style-1">
                        <?php 
                        if($cate == null){
                            $query = mysqli_query($conn, "SELECT tbl_sub_category.sub_id, tbl_sub_category.sub_name, COUNT(tbl_product.prod_id) AS total_products 
                               FROM tbl_sub_category 
                               INNER JOIN tbl_product ON tbl_sub_category.sub_id = tbl_product.sub_id 
                               GROUP BY tbl_sub_category.sub_id, tbl_sub_category.sub_name");
                        }else{
                            $query = mysqli_query($conn, "SELECT tbl_sub_category.sub_id, tbl_sub_category.sub_name, COUNT(tbl_product.prod_id) AS total_products 
                               FROM tbl_sub_category 
                               LEFT JOIN tbl_product ON tbl_sub_category.sub_id = tbl_product.sub_id 
                               WHERE tbl_sub_category.cate_id = '".$product["category_id"]."'
                               GROUP BY tbl_sub_category.sub_id, tbl_sub_category.sub_name");
                        }
                        
                       
                        while ($row = mysqli_fetch_array($query))
                        
                       { ?>
                        <li data-name="<?php echo $row['sub_name'] ?>"><input type="checkbox" class="cbManufacture"
                                data-id="<?php echo $row['sub_id'] ?>" /><span> <?php echo $row['sub_name'] ?> (<?php echo $row['total_products'] ?>)</span></li>
                            <?php } ?>
                    </ul>
                </div>

                <hr />
                <p>Gi&#225; b&#225;n</p>
                <div class="priceSoft" style="width:95%">
            <?php    if($cate == null){
    $products = _fetch("SELECT MAX(prod_current_price) as max  FROM tbl_product");
}else{
    
    $products = _fetch("SELECT  MAX(prod_current_price) as max FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id WHERE tbl_category.category_desc = '$cate'");
} ?>
                    <input type="text" id="someID" name="rangeName" value="" data-min="0" data-max="<?php echo $products['max']  ?>"
                        data-from="0" data-to="" data-type="double" data-postfix=" Đ" data-grid="true"
                        data-grid-num="1" />
                </div>
            </div>
        </div>
    </div>
    <div id="body-panel">
        <div class="boxbody_tbl" id="boxbody_tbl">
            <div class="boxbody_top"><span>
                    <h1 class="uppercase">Sản phẩm</h1>
                </span></div>


            <p class="view-sort">
                Số sản phẩm/1 trang:
                <select name="pagesize" id="pagesize" data-url="/san-pham.html" onchange="changepagesize(this)"
                    class="form-control form-control-inline">
                    <option value="20">20</option>
                    <option value="24" selected=&#39;selected&#39;>24</option>
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36">36</option>
                    <option value="40">40</option>
                    <option value="44">44</option>
                    <option value="48">48</option>
                    <option value="52">52</option>
                    <option value="56">56</option>
                    <option value="60">60</option>
                </select>&nbsp;
                - &nbsp;Sắp xếp
                <select name="sapxep" id="sapxep" data-url="/san-pham.html" onchange="changesapxep(this)"
                    class="form-control form-control-inline">
                    <option value="moicu" selected> -- </option>
                    <option value="giatang">Gi&#225; tăng dần</option>
                    <option value="giagiam">Gi&#225; giảm dần</option>
                    <option value="tenAZ">T&#234;n từ A-Z</option>
                    <option value="tenZA">T&#234;n từ Z-A</option>
                </select>&nbsp;
            </p>

            <div id="bd-panel" ng-app="App">
                <div class="row ng-cloak" ng-cloak ng-controller="Category">
                   



<div class="w-100">
<p align="center" class="text-center" ng-cloak ng-if="todos.length==0&&loading==true">
                        <i class="fa fa-spin fa-spinner fa-3x"></i>
                    </p>
</div>
                    
                    <div class="col-6 col-md-4 col-lg-3" ng-repeat="item in todos">





<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <meta itemprop="position" content="1" />
    <div class="product-box" itemprop="item" itemscope itemtype="https://schema.org/Product"
        itemid="https://thunggoletrong.com/ngua-keo-bom-ruou/ngua-keo-bom-ruou-sp4673.html#product-4673">
        <div id="pp-hover-img-1">
            <a class="pp-hover-img" ng-href="{{item.alias}}" href="../../san-pham/{{item.id}}"
                itemprop="url">
                <img class="img" 
                ng-src="{{item.image}}"
                    itemprop="image" />
            </a>
            <div class="product-actions">
                <a href="#" class="addToCart" data-id="{{item.id}}" title="Thêm vào giỏ hàng" ng-if="item.price_old != 0"><i
                        class="fas fa-shopping-basket"></i></a>
                        <a href="tel:<?php $zalo ?>" class="call" title="Liên Hệ" ng-if="item.price_old == 0"><i
                        class="fas fa-phone"></i></a>
                <a href="#" class="previewProduct" data-id="{{item.id}}" title="Xem nhanh"><i
                        class="fa fa-eye"></i></a>
            </div>

            <span class="icon-hot">HOT</span>
        </div>
        <div class="product-name" itemprop="name"><a
        ng-href="{{item.alias}}"
               >
                <h2>{{item.productname}}</h2>
            </a></div>
      
        <div class="product-price-cart" itemprop="offers" itemscope
            itemtype="https://schema.org/Offer">
            <meta itemprop="priceCurrency" content="VND" />
            <meta itemprop="availability" content="http://schema.org/InStock" />
            <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
            <meta itemprop="url"
                content="https://thunggoletrong.com/ngua-keo-bom-ruou/ngua-keo-bom-ruou-sp4673.html" />
            <meta itemprop="priceValidUntil" content="2024-08-06" />
            <meta itemprop="price" content="999000" />
           <span class="product-price">
    {{ item.price_old == 0 ? 'Giá Bán: Liên Hệ' : (item.price | currency : '' : 0) + ' đ' }}
</span>
<span class="product-price-old">
    {{ item.price_old == 0 ? '' : (item.price_old | currency : '' : 0) + ' đ' }}
</span>

        </div>

        <div class="d-none" itemprop="aggregateRating"
            itemtype="http://schema.org/AggregateRating" itemscope>
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
                            <td itemprop="brand" itemscope itemtype="https://schema.org/Brand">
                                <span itemprop="name">Lê Trong Official </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>

   
                </div>

                <style>
                    .fa-pt {
                        line-height: 1.2;
                    }
                </style>
                <?php if($cate == null){ ?>
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
                <input id="curl" name="curl" type="hidden" value="/san-pham.html" />
            </div>

        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>



</div>

<div class="clear"></div>

<?php include 'includes/footer.php' ?>
<script src="../../assets/js/product.js"></script>
<script src="../../assets/js/angular.min.js"></script>

<script>
        var App = angular.module('App', []);
        App.controller('Category', function ($scope, $http, $interval, $locale) {
            $locale.NUMBER_FORMATS.GROUP_SEP = '.';
            
            $scope.vprice = 0;
            $scope.todos = [];
            $scope.formData = {};
            $scope.loading = false;
            $scope.loadData = function () {
                $scope.loading = true;
                var postData = {
            category_desc: 1 // Include category_desc parameter in the data object
        };
                $http.post('/Product/JSON', postData)

                    .then(function (res) {
                       
                        $scope.loading = false;
                        $scope.todos = res.data;
                        
                    });
            }
          
            
           
            
            
            
            
            $scope.loadData();
        });
    </script>
<script>
    $(".manufacturer").on("input", function () {
        var val = $(this).val();
        if (val) {
            val = val.toLowerCase();
            $(".manufacturer li").hide();
            $(".manufacturer li[data-name*=" + val + " i]").show();
        }
        else
            $(".manufacturer li").show();
    });
    $(".filtertext").on("input", function () {
        var val = $(this).val();
        var target = $(this).data("id")
        if (val) {
            val = val.toLowerCase();
            $("#" + target + " li").hide();
            $("#" + target + " li").each(function () {
                var name = $(this).data("name").toLowerCase();
                if (name.indexOf(val) != -1) {
                    $(this).show();
                }
            })
        }
        else
            $("#" + target + " li").show();
    })
    $("input.cbManufacture,.properties input").change(function () {
        ResetProduct();
    });
    function ResetProduct(by,n ) {
        var manufacturer = $("input.cbManufacture:checked");
        var listidmf = $.map(manufacturer, function (n, i) { return $(n).data("id"); }).join();
        var instance = $("#someID").data("ionRangeSlider");
        var ishot = $("#isHot").is(":checked");
        var isnew = $("#isNew").is(":checked");
        var issell = $("#isSale").is(":checked");
        var fromPrice = instance.result.from;
        var toPrice = instance.result.to;
        var minPrice = instance.result.min;
        var maxPrice = instance.result.max;
       
        $.get('/Product/JSON', { manufacturer: listidmf, ishot: ishot, isnew: isnew, issell: issell, rangename: fromPrice + "," + toPrice, isAjax: 1,order : by,size : n }, function (data) {
         
            var html = $(data).find("#bd-panel");
            $("#bd-panel").replaceWith(data);
            img_auto();
            owl_img_auto();
        });
    };
</script>

<script src="../../assets/js/ion.rangeSlider.min.js"></script>
<script>

    $('#someID').ionRangeSlider({
        //min: 0,
        //max: 8000000,
        //from: 0,
        //to: 8000000,
        //type: "double",
        //step: 10,
        //postfix: " VNĐ",
        onChange: function (obj) {
            //console.log(obj);

        },
        onFinish: function (obj) {
            ResetProduct();
            //console.log(obj);
            //var $productajax = $('#bd-panel');
            //$.get(window.location.pathname, { isAjax: 1, minprice: obj.from, maxprice: obj.to }, function (data) {
            //    $productajax.replaceWith(data);
            //    window.history.pushState("", '', window.location.pathname + "?minprice=" + obj.from + "&maxprice=" + obj.to);
            //});

        }
    });
</script>