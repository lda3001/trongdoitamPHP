<?php
include 'includes/header.php';
$currentURL = $_SERVER['REQUEST_URI'];
if ($currentURL == '/tin-tuc.html' || $currentURL == '/chinh-sach') {
                
    $result = _fetch("SELECT * FROM tbl_category_post WHERE tbl_category_post.category_post_desc = '$currentURL'");
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
                <a itemprop="item" href="">
                <?php if ($currentURL == '/tin-tuc.html' || $currentURL == '/chinh-sach') { ?>
                    <span itemprop="name"><?=$result['category_post_name'] ?></span></a>
            <?php }else{ echo '<span itemprop="name">Khách Hàng Phản Hồi</span>' ;} ?>
                  
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>
<div class="container">























    <div class="boxbody_tbl boxbydy_tb1_af_none" id="border-radius-1-padding-1" itemprop="mainEntity" itemscope=""
        itemtype="https://schema.org/ItemList">
        <div class="boxbody_top">
        <?php if ($currentURL == '/tin-tuc.html' || $currentURL == '/chinh-sach') { ?>
            <h1 class="text-uppercase d-block"><span class="" itemprop="name"><?=$result['category_post_name'] ?></span></h1>
            <?php }else{ echo '<h1 class="text-uppercase d-block"><span class="" itemprop="name">Khách Hàng Phản Hồi</span></h1>' ;} ?>

        </div>
        <div class="boxbody_body">
            <?php if ($currentURL == '/tin-tuc.html' || $currentURL == '/chinh-sach') {
                
                $query = _query("SELECT * FROM tbl_post JOIN tbl_category_post ON tbl_post.category_post_id = tbl_category_post.category_post_id WHERE tbl_category_post.category_post_desc = '$currentURL'");
               

                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="news clearfix" itemprop="itemListElement" itemscope=""
                        itemtype="https://schema.org/Article https://schema.org/ListItem">
                        <meta itemprop="position" content="1">
                        <a href="/bai-viet-1-tt13818.html" itemprop="url mainEntityOfPage">
                            <img class="news-img" src="../../admin<?php echo $row['post_thumb'] ?>"
                                data-original="../../admin<?php echo $row['post_thumb'] ?>"
                                alt=" <?php echo $row['post_title'] ?>" itemprop="image"
                                content="../../admin<?php echo $row['post_thumb'] ?>"
                                style="display: block;">
                        </a>
                        <div class="news-info">
                            <h2 class="title" itemprop="headline name"><a href="/bai-viet-1-tt13818.html">
                                    <?php echo $row['post_title'] ?></a></h2>
                            <p class="posted-date">
                                <span itemprop="author"><i class="fa fa-user-circle"></i> <a
                                        href="/thung-go-le-trong-at1.html">ADMIN</a></span>
                                <span itemprop="datePublished dateCreated dateModified"><i class="far fa-calendar-alt"></i>
                                    <?php echo $row['reg_date'] ?></span>
                                <span><i class="fa fa-eye"></i> 443</span>
                                <span><i class="fas fa-folder-open"></i> <a href="/tin-tuc-cc4567.html">Tin tức</a></span>
                            </p>
                            <div class="summary" itemprop="description"></div>
                            <a class="button" href="/bai-viet-1-tt13818.html">Xem thêm</a>
                        </div>
                        <div class="d-none" hidden="">
                            <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                                <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                    <img itemprop="url" src="<?php echo $domain ?>/assets/uploads/img/logo.png"
                                        alt="logo THÙNG RƯỢU GỖ NHẬP KHẨU">
                                    <meta itemprop="name" content="logo THÙNG RƯỢU GỖ NHẬP KHẨU">
                                </div>
                                <a href="<?php echo $domain ?>" itemprop="url"><span itemprop="name">THÙNG RƯỢU GỖ NHẬP KHẨU</span></a>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
             <?php if ($currentURL == '/feedback') { ?>
            <div class="news clearfix" itemprop="itemListElement" itemscope=""
                itemtype="https://schema.org/Article https://schema.org/ListItem">
                <meta itemprop="position" content="1">
                <a href="/anh-hung-tt14832.html" itemprop="url mainEntityOfPage">
                    <img class="news-img" src="../../assets/uploads/img/1w300.jpg"
                        data-original="../../assets/uploads/img/1w300.jpg" alt="Anh Hùng" itemprop="image"
                        content="../../assets/uploads/img/1w300.jpg" style="display: block;">
                </a>
                <div class="news-info">
                    <h2 class="title" itemprop="headline name"><a href="/anh-hung-tt14832.html">Anh Hùng</a></h2>
                    <p class="posted-date">
                        <span itemprop="author"><i class="fa fa-user-circle"></i> <a
                                href="">ADMIN</a></span>
                        <span itemprop="datePublished dateCreated dateModified"><i class="far fa-calendar-alt"></i>
                            23/08/2022</span>
                        <span><i class="fa fa-eye"></i> 56</span>
                        <span><i class="fas fa-folder-open"></i> <a href="/khach-hang-phan-hoi-cc4577.html">Khách hàng
                                phản hồi</a></span>
                    </p>
                    <div class="summary" itemprop="description">
                        <p>Tôi đã mua và sử dụng một&nbsp;bộ bàn ghế bằng thùng gỗ, tôi thấy rất chắc chăn và sang trọng
                        </p>
                    </div>
                    <a class="button" href="/anh-hung-tt14832.html">Xem thêm</a>
                </div>
                <div class="d-none" hidden="">
                    <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                        <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                            <img itemprop="url" src="<?php echo $domain ?>/assets/uploads/img/logo.png"
                                alt="logo THÙNG RƯỢU GỖ NHẬP KHẨU">
                            <meta itemprop="name" content="logo THÙNG RƯỢU GỖ NHẬP KHẨU">
                        </div>
                        <a href="<?php echo $domain ?>" itemprop="url"><span itemprop="name">THÙNG RƯỢU GỖ NHẬP
                                KHẨU</span></a>
                    </div>
                </div>
            </div>
            <div class="news clearfix" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/Article https://schema.org/ListItem">
            <meta itemprop="position" content="2">
            <a href="" itemprop="url mainEntityOfPage">
                <img class="news-img" src="../../assets/uploads/img/2w300.jpg" data-original="../../assets/uploads/img/2w300.jpg" alt="Chị Hoa" itemprop="image" content="../../assets/uploads/img/2w300.jpg" style="display: block;">
                                    </a>
            <div class="news-info">
                <h2 class="title" itemprop="headline name"><a href="">Chị Hoa</a></h2>
                <p class="posted-date">
                        <span itemprop="author"><i class="fa fa-user-circle"></i> <a >ADMIN</a></span>
                                            <span itemprop="datePublished dateCreated dateModified"><i class="far fa-calendar-alt"></i> 23/08/2022</span>
                    <span><i class="fa fa-eye"></i> 60</span>
                    <span><i class="fas fa-folder-open"></i> <a href="/khach-hang-phan-hoi-cc4577.html">Khách hàng phản hồi</a></span>
                </p>
                <div class="summary" itemprop="description"><p>Trước khi mua tôi khá cân nhắc về chất lượng, nhưng sau khi mua và sử dụng tôi cảm thấy&nbsp;sản phẩm rất tốt, chất lượng</p>
</div>
                <a class="button" href="">Xem thêm</a>
            </div>
            <div class="d-none" hidden="">
                <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                    <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                        <img itemprop="url" src="<?php echo $domain ?>/assets/uploads/img/logo.png" alt="logo THÙNG RƯỢU GỖ NHẬP KHẨU">
                        <meta itemprop="name" content="logo THÙNG RƯỢU GỖ NHẬP KHẨU">
                    </div>
                    <a href="<?php echo $domain ?>" itemprop="url"><span itemprop="name">THÙNG RƯỢU GỖ NHẬP KHẨU</span></a>
                </div>
            </div>
        </div>
            <?php } ?>


        </div>

    </div>
    </div>


    <?php include 'includes/footer.php'; ?>