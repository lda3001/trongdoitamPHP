<?php include "includes/header.php" ;
if(!isset($_SESSION['orderid'])){
    echo "<script type='text/javascript'> document.location ='../../cua-hang'; </script>";
}else{
    unset($_SESSION['orderid']);
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

                <a itemprop="item" href="#">

                    <span itemprop="name">Thanh Toán</span></a>

                <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">

                <a itemprop="item" href="#">

                    <span itemprop="name">Đặt Hàng Thành Công</span></a>

                <meta itemprop="position" content="3">
            </li>
        </ol>
    </div>
</div>
<div class="container">






<div class="container">
            




            <div class="boxbody_tbl">
                <div class="boxbody_top"><span><h1 class="uppercase">Đặt hàng thành công</h1></span></div>
                <div class="boxbody_body">
                   <h2 class="order-success">Bạn vừa đặt hàng thành công. Chúng tôi sẽ liên lạc với bạn sớm nhất để xác nhận đơn hàng.
                   </h2>
                </div>
                <div class="boxbody_bottom"></div>
            </div>
                    </div>
    



</div>
<?php include "includes/footer.php" ?>
<script src="../../assets/js/product.js"></script>
<script>

    function ResetProduct(by) {
        var fromPrice = 0;
        var toPrice = 100000000000;
        var cate = '';
        $.get('/Product/JSON', {manufacturer: cate ,rangename: fromPrice + "," + toPrice,  order: by }, function (data) {

            var html = $(data).find("#bd-panel");
            $("#bd-panel").replaceWith(data);
            img_auto();
            owl_img_auto();
        });
    };
</script>