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
                <a itemprop="item" href="/gioi-thieu-cc4573.html">
                    <span itemprop="name">Giới thiệu</span></a>
                <meta itemprop="position" content="2">
            </li>
            
        </ol>
    </div>
</div>
<div class="container">























    <div id="body-panel">
        <div class="boxbody_tbl" itemprop="mainEntity" itemscope="" itemtype="http://schema.org/Article">
            <div class="boxbody_body">

                <div class="news-detail TextSize">
                    <h1 itemprop="headline name">THÙNG GỖ SỒI TRANG TRÍ</h1>
                    <p class="posted-date">
                        <span><a href="/admin-at1.html">
                                <i class="fas fa-user-circle"></i> <span class="news-author-name"
                                    itemprop="author">Admin</span>
                            </a></span>
                        <span class="d-none" itemprop="datePublished dateCreated dateModified"><i
                                class="far fa-calendar-alt"></i>
                            15:47:43 20/08/2022</span>
                        <span><i class="fa fa-eye"></i> Lượt xem 595</span>
                        <span><i class="fas fa-font"></i> Cỡ chữ
                            <i onclick="ChangeTextSize(1)" class="fa fa-plus-square" style="cursor:pointer"></i>
                            <i onclick="ChangeTextSize(-1)" class="fa fa-minus-square" style="cursor:pointer"></i>
                        </span>
                    </p>


                    <img class="d-none" src="/Data/images/san-pham/thung20l-1.jpg" alt="Model.C_Title" itemprop="image">
                    <div class="detail js-toc-content" itemprop="articleBody">
                        <div class="toc clearfix">
                            <div class="js-toc-title"><i class="fa fa-list-ul"></i> Mục lục <span><i
                                        class="fa fa-angle-down"></i></span></div>
                           
                        </div>

                        <h1 align="center"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: center; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 20.5pt;"><span
                                            arial=""><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);"><a
                                                    href="https://thunggonhapkhau.com/danh-muc/thung-go-trang-tri/"
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; color: rgb(36, 30, 32); text-decoration: none; background-color: transparent; border: 0px; font-weight: bold;"><span
                                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(0, 168, 89);"><span
                                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; text-decoration: none;"><span
                                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;">THÙNG
                                                                GỖ SỒI TRANG
                                                                TRÍ</span></span></span></a></span></span></span></b></span>
                        </h1>

                        <p align="center"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; outline: 0px !important; max-width: 100%; text-align: center; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 19pt;"><span
                                            arial=""><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(237, 28, 36);">THIẾT
                                                KẾ THÙNG RƯỢU GỖ TRANG TRÍ</span></span></span></b><b
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 19pt;"><span
                                            arial=""><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);"><span>&nbsp;</span>QUÁN
                                                CAFE, QUÁN BAR, QUẦY BAR, RESORT, HOMESTAY THEO MẪU MÃ YÊU CẦU<br>
                                            </span></span></span></b></span></p>
                        
                        <p></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Cung
                                    cấp thùng rượu gỗ cũ – bom rượu gỗ trưng bày, trang trí quầy bar thùng rượu gỗ , làm
                                    bàn ghế gỗ, nhà hàng, khách sạn là nhưng sản phẩm mà đơn vì cung cấp ra thị trường
                                    với nhiều các loại mẫu mã đa dạng bên cạnh đó với chất lượng và quy trình làm việc,
                                    sản xuất tốt, chúng tôi mang tới cho quý khách hàng những trải nghiệm tốt nhất<img
                                        alt="" src="/Data/images/san-pham/thung20l-1.jpg"
                                        style="width: 100%;"></span></span></p>

                        <div class="easy_toc_anchor" id="easy_toc_thung-go-trang-tri-la-gi">
                            <h2 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 19pt;"><span
                                                arial=""><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">THÙNG
                                                    GỖ TRANG TRÍ LÀ GÌ?</span></span></span></b></span></h2>
                        </div>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Ở
                                    các nước Châu Âu người ta hay lấy thùng gỗ trang trí làm trưng bày cho các quán bar,
                                    quán cafe, trong các hầm rượu, và nhà hàng với mục đích đem lại không gian và cảm
                                    thấy sang trọng, và đẹp</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Với
                                    chất lượng và những nhu cầu tăng cao, ngày nay các mẫu mã cũng được đa dạng thêm và
                                    được đưa vào thị trường rất nhiều</span></span></p>

                        <div class="easy_toc_anchor" id="easy_toc_ung-dung-cua-thung-go-soi-trang-tri">
                            <h2 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span style="font-size:22px;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                                    arial=""><span
                                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">ỨNG
                                                        DỤNG CỦA THÙNG GỖ SỒI TRANG
                                                        TRÍ</span></span></span></b></span></span></h2>
                        </div>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Ngày
                                    nay,<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        gỗ sồi trang trí<span>&nbsp;</span></b>được sử dụng rất nhiều tại nhiều địa điểm
                                    khác nhau. Tuy nhiên, dưới đây là một số địa điểm sử dụng phổ biến và ưa chuộng
                                    nhất:</span></span></p>

                        <div class="easy_toc_anchor" id="easy_toc_su-dung-thung-go-soi-trang-tri-tai-nha">
                            <h2 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span style="font-size:22px;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                                    arial=""><span
                                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">SỬ
                                                        DỤNG THÙNG GỖ SỒI TRANG TRÍ TẠI
                                                        NHÀ</span></span></span></b></span></span></h2>
                        </div>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Đối
                                    với mỗi gia đình, mọi người cần lựa chọn những sản phẩm trang trí sao cho phù hợp để
                                    không gian căn phòng để tạo sự ấm cúng và sang trọng hơn. Sử dụng thùng rượu trang
                                    trí là một lựa chọn tốt và đáp ứng hoàn hảo những yếu tố này. Với thiết kế độc đáo
                                    lạ mắt kết hợp phong cách Châu Âu, mỗi sản phẩm luôn được lòng mọi người và có thể
                                    dùng làm quà biếu, tặng ý nghĩa.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 15pt;"><span
                                            arial=""><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">SỬ
                                                DỤNG THÙNG GỖ SỒI TRANG TRÍ TRONG QUÁN BAR, QUÁN
                                                RƯỢU</span></span></span></b></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Nếu
                                    chú ý, trước cửa những nhà hàng, quán bar, khách hàng sẽ thấy<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        rượu gỗ trang trí</b><span>&nbsp;</span>để quảng bá thương hiệu, hoặc dán tem
                                    nhãn hiệu công ty của cửa hàng lên miệng thùng, đó là điểm thu hút đối với cửa hàng.
                                    Điều này sẽ làm tăng sự tò mò của người xem và tăng lượng khách ghé
                                    thăm.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Không
                                    chỉ bên ngoài quán bar, mà cả trong quán rượu, chiếc thùng gỗ trang trí cũng được
                                    tận dụng thay cho bàn ghế. Việc sử dụng sản phẩm làm bàn ghế là một ý tưởng rất hay
                                    và độc đáo khiến khách hàng cảm thấy rất thích thú và họ quay lại.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span style="font-size:22px;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                                arial=""><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">SỬ
                                                    DỤNG THÙNG GỖ SỒI TRANG TRÍ TRONG NHÀ HÀNG,
                                                    RESORT</span></span></span></b></span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Vì
                                    là không gian sang trọng được nhiều khách hàng cao cấp sử dụng nên việc bài trí từng
                                    không gian riêng biệt là điều cần thiết và cẩn thận. Nhiều người chưa bao giờ nhìn
                                    thấy một sản phẩm<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        rượu gỗ</b>, vì vậy đó chính là yếu tố thắng lợi đáng chú ý nhất để giữ chân
                                    khách hàng.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Có
                                    thể dùng làm bàn ăn, làm thùng đá, hoặc làm đèn treo trần mang lại sự độc đáo và
                                    tính mỹ quan hơn. Nếu bạn kinh doanh nhà hàng thì hãy thử mẫu thiết kế này nhé, chắc
                                    chắn bạn sẽ hài lòng.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span style="font-size:22px;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                                arial=""><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">QUY
                                                    TRÌNH SẢN XUẤT THÙNG GỖ SỒI TRANG
                                                    TRÍ</span></span></span></b></span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Để
                                    tạo ra một sản phẩm<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        gỗ trang trí đẹp mắt</b><span>&nbsp;</span>thì khâu hoàn thiện sản phẩm cần phải
                                    rất tinh tế và tỉ mỉ. Mẫu mã tại cơ sở Trống Lê Trong&nbsp;luôn được cập nhật liên
                                    tục hàng năm với sự đóng góp tích cực của quý khách hàng. Ngoài ra, bạn có thể tham
                                    khảo những mẫu thiết kế có sẵn ở nước ngoài để tạo ra những sản phẩm đẹp mắt
                                    nhất.<img alt="" src="/Data/images/san-pham/thung300l.jpg"
                                        style="width: 100%;"></span></span></p>

                        <div class="easy_toc_anchor"
                            id="easy_toc_cac-buoc-san-xuat-thung-go-trang-tri-tieu-chuan-nhu-sau">
                            <h2><span style="font-size:22px;"><strong>CÁC&nbsp;BƯỚC SẢN XUẤT THÙNG GỖ TRANG
                                        TRÍ&nbsp;TIÊU CHUẨN NHƯ SAU:</strong></span></h2>
                        </div>

                        <div class="easy_toc_anchor"
                            id="easy_toc_–-buoc-1-khach-hang-se-lua-chon-mau-go-va-chung-toi-se-xu-ly-loai-go-theo-yeu-cau-cua-khach-hang-tuy-nhien-loai-go-duoc-su-dung-chu-yeu-la-go-thong-va-go-soi-hai-loai-go-nay-deu-duoc-nhap-khau-tu-nuoc-ngoai-va-duoc-bao-hanh">
                            <h3 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">–
                                        Bước 1: Khách hàng sẽ lựa chọn mẫu gỗ và chúng tôi sẽ xử lý loại gỗ theo yêu cầu
                                        của khách hàng, tuy nhiên loại gỗ được sử dụng chủ yếu là gỗ thông và gỗ sồi.
                                        Hai loại gỗ này đều được nhập khẩu từ nước ngoài và được bảo hành.</span></span>
                            </h3>
                        </div>

                        <div class="easy_toc_anchor"
                            id="easy_toc_–-buoc-2-xe-cac-phien-go-nho-de-mo-tam-roi-vao-khoang-3-4-cm-va-cat-theo-kich-thuoc-tuong-ung-voi-tung-loai-dung-tich-thung">
                            <h3 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">–
                                        Bước 2: Xẻ các phiến gỗ nhỏ để mỗ tấm rơi vào khoảng 3-4 cm và cắt theo kích
                                        thước tương ứng với từng loại dung tích thùng.</span></span></h3>
                        </div>

                        <div class="easy_toc_anchor"
                            id="easy_toc_–-buoc-3-tao-mau-thiet-ke-va-lap-rap-san-pham-theo-don-dat-hang-cua-quy-khach-moi-san-pham-thung-trang-tri-co-mot-mau-ma-khac-nhau-nen-nguoi-tho-phai-het-suc-can-than-de-tranh-bi-nham-lan">
                            <h3 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">–
                                        Bước 3: Tạo mẫu thiết kế và lắp ráp sản phẩm theo đơn đặt hàng của quý khách.
                                        Mỗi sản phẩm thùng trang trí có một mẫu mã khác nhau nên người thợ phải hết sức
                                        cẩn thận để tránh bị nhầm lẫn.</span></span></h3>
                        </div>

                        <div class="easy_toc_anchor"
                            id="easy_toc_–-buoc-4-gia-cong-va-hoan-thien-san-pham-kiem-tra-chat-luong-xem-co-dat-tieu-chuan-khong-roi-moi-giao-cho-khach-hang">
                            <h3 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">–
                                        Bước 4: Gia công và hoàn thiện sản phẩm, kiểm tra chất lượng xem có đạt tiêu
                                        chuẩn không rồi mới giao cho khách hàng.</span></span></h3>
                        </div>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Với<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">quy
                                        trình sản xuất trồng gỗ trang trí<span>&nbsp;</span></b>khoa học trên, mọi người
                                    sẽ dễ dàng nhận được một sản phẩm ưng ý và hợp với nhu cầu của mình. Chúng tôi luôn
                                    tham khảo và đưa ra nhiều mẫu độc đáo để phù hợp với nhu cầu. Chắc chắn sẽ đem lại
                                    một không gian trang trí vô cùng thẩm mỹ, đúng phong cách và hợp khu vực với khách
                                    hàng.</span></span></p>

                        <div class="easy_toc_anchor"
                            id="easy_toc_cac-mau-thung-go-trang-tri-tai-thunggoletrong-cung-cap">
                            <h2 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 19pt;"><span
                                                arial=""><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">CÁC
                                                    MẪU THÙNG GỖ TRANG TRÍ TẠI THUNGGOLETRONG&nbsp;CUNG
                                                    CẤP</span></span></span></b></span></h2>
                        </div>

                        <ul
                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; list-style-position: inside; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Bàn
                                                ghế decor quán bar</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Bàn
                                                ghế tựa chống mỏi lưng</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Nửa
                                                thùng gỗ làm kệ trưng bày rượu</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Thùng
                                                rượu trang trí gỗ thông</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Thùng
                                                rượu trang trí gỗ sồi</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Bàn
                                                ốp tường trang trí</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Bàn
                                                uống rượu kiểu Âu</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Boom
                                                trữ rượu</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Thùng
                                                đựng rượu trang trí</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><i
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important;"><span
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Và
                                                một số sản phẩm khác, theo nhu cầu thiết kế của khách
                                                hàng.</span></i><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;"></span></span></span>
                            </li>
                        </ul>

                        <div class="easy_toc_anchor"
                            id="easy_toc_7-ly-do-nen-chon-san-pham-thung-go-trang-tri-cua-chung-toi">
                            <h2 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 19pt;"><span
                                                arial=""><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">7
                                                    lý do nên chọn sản phẩm thùng gỗ trang trí của chúng
                                                    tôi</span></span></span></b></span></h2>
                        </div>

                        <ul
                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; list-style-position: inside; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Là
                                            đơn vị có gần 10 năm chuyên sản xuất,phân phối cung cấp từ Hà Nội, Sài Gòn
                                            những dòng sản phẩm như thùng gỗ sồi, bồn tắm gỗ, thùng gỗ trang trí được
                                            sản xuất tại làng nghề trống Đội Tam</span></span></span></li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Với
                                            độ ngũ lành nghề, các sản phẩm thùng gỗ trang trí khi được sản xuất phải
                                            được kiểm định đảm ảo chất lượng đối với khác hàng</span></span></span></li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Chất
                                            liệu gỗ được lựa chọn đúng theo tiêu chuẩn Châu Âu</span></span></span></li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Thùng
                                            gỗ trang trí được làm bằng chất liệu gỗ sồi, gỗ thông nhập
                                            khẩu</span></span></span></li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Được
                                            thiết kế mẫu mã và in khắc họa tiết lên thùng gỗ trang trí tại xưởng sản
                                            xuất Lê Trong, quý khách hàng có thể in để tặng, in để làm kỉ niệm, khắc các
                                            họa tiết theo yêu cầu</span></span></span></li>
                            <li
                                style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.1in; outline: 0px; border: 0px; text-align: left;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 12pt;">Một
                                            điều chắc chắn làm nên thương hiệu đó là<span>&nbsp;</span><b
                                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(237, 28, 36);">KHÔNG
                                                    HÓA CHẤT, KHÔNG DÍNH KEO VÀ BẢO HÀNH 12 THÁNG LỖI
                                                    1-1</span></b></span></span></span></li>
                        </ul>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Mời
                                    quý khách hàng xem sản phẩm thùng gỗ trang trí bên dưới<img alt=""
                                        src="/Data/images/san-pham/thung30l%20-2.jpg"
                                        style="width: 100%;"></span></span></p>

                        <div class="easy_toc_anchor" id="easy_toc_thung-go-le-trong-ban-thung-go-soi-nhap-khau">
                            <h2 align="left"
                                style="box-sizing: border-box; padding: 0px; margin: 10px 0px 6pt; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; outline: 0px !important;">
                                <span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;"><span
                                            style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 19pt;"><span
                                                arial=""><span
                                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; color: rgb(10, 10, 10);">Thùng
                                                    gỗ Lê Trong&nbsp;bán thùng gỗ sồi nhập
                                                    khẩu</span></span></span></b></span></h2>
                        </div>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Để
                                    đáp ứng được nhu cầu của khách hàng ngày càng nâng cao, Trống Lê Trong luôn cải tiến
                                    và cho ra mắt nhiều dòng sản phẩm chất lượng. Các sản phẩm trống gỗ trang trí được
                                    thiết kế đa dạng, đẹp mắt và dễ dàng đặt trong nhà hàng cao cấp, quán rượu và quán
                                    bar. Ngày nay, các sản phẩm<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        gỗ sồi</b><span>&nbsp;</span>được sử dụng phổ biến trong quá trình ủ rượu gạo,
                                    rượu trắng và rượu trái cây.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Chất
                                    lượng của<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        gỗ trang trí</b><span>&nbsp;</span>luôn được đảm bảo tốt nhất. Bởi vì gỗ sồi
                                    được lấy từ những cây sồi đã tồn tại 100 năm, được nhập khẩu 100% từ nước ngoài,
                                    không sử dụng các thành phần gỗ kém chất lượng.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Bạn
                                    cũng có thể kiểm tra xem đó có phải là gỗ sồi chuẩn hay không bằng cách làm theo các
                                    bước dưới đây. Khi đổ nước ngâm mà nước chuyển sang màu đen xỉn và thùng có mùi chua
                                    nhẹ thì đó là thùng gỗ sồi đạt tiêu chuẩn. Nếu không, sản phẩm là dòng kém chất
                                    lượng.</span></span></p>

                        <p align="left"
                            style="box-sizing: border-box; padding: 0px; margin: 10px 0px 15.6pt; outline: 0px !important; max-width: 100%; text-align: left; line-height: 25.2px; color: rgb(36, 30, 32); font-family: arial, roboto, Tahoma, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
                            <span
                                style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; line-height: normal;"><span
                                    style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px; border: 0px; font-size: 13.5pt;">Những<span>&nbsp;</span><b
                                        style="box-sizing: border-box; padding: 0px; margin: 0px; outline: 0px !important; font-weight: bold;">thùng
                                        gỗ sồi ngâm rượu nhập khẩu</b><span>&nbsp;</span>thường không có chất bảo quản
                                    gỗ, không dùng keo hay sáp ong. Sản phẩm của chúng tôi luôn có thiết kế vô cùng độc
                                    đáo và lạ mắt, dù bạn đặt ở đâu thì thùng rượu trang trí cũng khẳng định những sản
                                    phẩm khác không hề kém cạnh</span></span></p>

                    </div>
                </div>

                <div class="author-box" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                    <div class="author-img"><img itemprop="image" content="/Data/images/logo/logo.png" class=""
                            src="/assets/client/images/blank.gif" data-original="/Data/images/logo/logo.png"
                            alt="Thùng Gỗ Lê Trong"></div>
                    <div class="author-info">
                        <a href="/thung-go-le-trong-at1.html" itemprop="url">
                            <p class="author-name" itemprop="name">Admin</p>
                        </a>
                        <div class="author-social">
                            <a title="Facebook" itemprop="sameAs"><i class="fab fa-facebook-f"></i></a>
                            <a title="Instagram" itemprop="sameAs"><i class="fab fa-instagram"></i></a>
                            <a title="Twitter" itemprop="sameAs"><i class="fab fa-twitter"></i></a>
                            <a title="Linkedin" itemprop="sameAs"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="author-description" itemprop="description">
                            <p><b>THÙNG RƯỢU GỖ NHẬP KHẨU</b><br>
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i><b>Địa chỉ&nbsp;</b>: Xóm 4,
                                làng Trống, đội Tám, xã Tiên Sơn, thị xã Duy Tiên, Hà Nam<br>
                                <i class="fa fa-phone" aria-hidden="true"></i> <b>Tel</b>: 0967.609.111<br>
                                <i class="fa fa-envelope" aria-hidden="true"></i> <b>Email</b>:
                                thunggoletrong@gmail.com<br>
                                <i class="fa fa-globe" aria-hidden="true"></i> <b>Website</b>:
                                http://thunggoletrong.com<br>
                                <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                            </p>
                        </div>
                        <a href="/thung-go-le-trong-at1.html" class="d-inline-block"><i
                                class="fas fa-angle-double-right"></i> Xem thêm về tác giả</a>
                    </div>
                </div>
                <div class="share-box clearfix">
                    <div class="fb-like fb_iframe_widget" data-layout="button_count" data-action="like"
                        data-size="small" data-show-faces="false" data-share="false" style="float:left;"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small">
                        <span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe
                                name="f39da51dbd0296ba2" width="1000px" height="1000px"
                                data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v8.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df7ad31e978e6f5227%26domain%3Dthunggoletrong.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fthunggoletrong.com%252Ff48abc820dfbd743b%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"
                                style="border: none; visibility: visible; width: 90px; height: 28px;"
                                class=""></iframe></span></div>
                    <div class="fb-share-button fb_iframe_widget" data-layout="button_count" data-size="small"
                        data-mobile-iframe="false" style="float:left;" fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="app_id=&amp;container_width=46&amp;href=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=false&amp;sdk=joey&amp;size=small">
                        <span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe
                                name="f87bf099f4dd7149b" width="1000px" height="1000px"
                                data-testid="fb:share_button Facebook Social Plugin"
                                title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                src="https://www.facebook.com/v8.0/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1f6f183152be83e2%26domain%3Dthunggoletrong.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fthunggoletrong.com%252Ff48abc820dfbd743b%26relation%3Dparent.parent&amp;container_width=46&amp;href=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=false&amp;sdk=joey&amp;size=small"
                                style="border: none; visibility: visible; width: 86px; height: 20px;"
                                class=""></iframe></span></div>
                    <div class="fb-like fb_iframe_widget" data-layout="button_count" data-action="recommend"
                        data-size="small" data-show-faces="false" data-share="false" style="float:left;"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="action=recommend&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small">
                        <span style="vertical-align: bottom; width: 135px; height: 28px;"><iframe
                                name="f52280e51bc370d9f" width="1000px" height="1000px"
                                data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v8.0/plugins/like.php?action=recommend&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfc49f015eeefc6442%26domain%3Dthunggoletrong.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fthunggoletrong.com%252Ff48abc820dfbd743b%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"
                                style="border: none; visibility: visible; width: 135px; height: 28px;"
                                class=""></iframe></span></div>
                    <div class="fb-save fb_iframe_widget" data-size="small" style="float:left;"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;size=small&amp;uri=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html">
                        <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe
                                name="f5242b3c41d1ef41e" width="1000px" height="1000px"
                                data-testid="fb:save Facebook Social Plugin" title="fb:save Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v8.0/plugins/save.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3a84f5012d498cb0%26domain%3Dthunggoletrong.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fthunggoletrong.com%252Ff48abc820dfbd743b%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;size=small&amp;uri=https%3A%2F%2Fthunggoletrong.com%2Fgioi-thieu%2Fthung-go-soi-trang-tri-tt14822.html"
                                style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
                    </div>
                    <div class="addthis_inline_share_toolbox share-tool"></div>
                </div>
                <script type="text/javascript"
                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a8fd0ecb1b07e86"></script>
                <link itemprop="mainEntityOfPage"
                    href="https://thunggoletrong.com/gioi-thieu/thung-go-soi-trang-tri-tt14822.html">
                <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization" class="d-none">
                    <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                        <img src="https://thunggoletrong.com/assets/client/images/logo.png"
                            alt="THÙNG RƯỢU GỖ NHẬP KHẨU">
                        <meta itemprop="url" content="https://thunggoletrong.com/assets/client/images/logo.png">
                        <meta itemprop="width" content="200">
                        <meta itemprop="height" content="200">
                    </div>
                    <a href="https://thunggoletrong.com/" itemprop="url"><span itemprop="name">THÙNG RƯỢU GỖ NHẬP
                            KHẨU</span></a>
                </div>

            </div>
        </div>
    </div>


    <div id="right-panel">
        <div class="box_tbl">
            <div class="box_top"><span class="icon"><i class="far fa-newspaper"></i></span><span>Tin tức</span></div>
            <div class="box_body">

            <?php
                
                $query = _query("SELECT * FROM tbl_post JOIN tbl_category_post ON tbl_post.category_post_id = tbl_category_post.category_post_id WHERE tbl_category_post.category_post_desc = '/tin-tuc.html'");
               

                while ($row = mysqli_fetch_array($query)) { ?>

                <div class="news clearfix">
                    <a href="/bai-viet-1-tt13818.html" class="news-img">
                        <img class="" src="../../admin<?php echo $row['post_thumb'] ?>"
                            data-original="../../admin<?php echo $row['post_thumb'] ?>"
                            alt="<?php echo $row['post_title'] ?>">

                    </a>
                    <div class="news-info">
                        <div class="title"><a href="/bai-viet-1-tt13818.html"> 💥<?php echo $row['post_title'] ?></a></div>
                        <p class="posted-date"><span><i class="far fa-calendar-alt"></i><?php echo $row['reg_date'] ?></span></p>


                    </div>

                </div>
                <?php } ?>











            </div>
        </div>

        <div class="adv adv-r">
        </div>
    </div>

</div>
<?php include 'includes/footer.php'; ?>
<script>
    function ChangeTextSize(value) {
    $(".detail").children().each(function () {
        var size = parseInt($(this).css("font-size"));
        var lineheight = parseInt($(this).css("line-height"));
        size = size + value + "px";
        lineheight = lineheight + value + "px";
        $(this).css({
            'font-size': size,
            'lineheight':lineheight
        });
    });
    var sized = parseInt($(".detail").css("font-size"));
    var lineheightd = parseInt($(".detail").css("line-height"));
    sized = sized + value + "px";
    lineheightd = lineheightd + value + "px";
    $(".detail").css({
        'font-size': sized,
        'lineheight': lineheightd
    });
}
</script>
<script>
   
        
        $(".js-toc-title").click(function(){
            var i = $(".js-toc-title > span > i").attr("class");
            if(i == "fa fa-angle-right"){
                $(".js-toc-title > span > i").attr("class", "fa fa-angle-down");
            }
            else if(i == "fa fa-angle-down") {
                $(".js-toc-title > span > i").attr("class", "fa fa-angle-right");
            }
            $(".toc-list-wrap").slideToggle("slow");
        });
        
        
            event.preventDefault();
            if ($(".js-toc-content .toc").length){
                $toc = $(".js-toc-content .toc");
		        if($toc.hasClass("is-position-fixed")){
		            if($(".toc-list-wrap").hasClass("max-width-500")==false){
		                $(".toc-list-wrap").addClass("max-width-500");
		                $(".toc-list-wrap").css("max-width","500px");
		            }
		        }
		        else{
		            $(".toc-list-wrap").removeClass("max-width-500");
		            $(".toc-list-wrap").removeAttr("style");
		        }
		        $top=$(this).scrollTop();
		        if($top>$('.toc').offset().top+$('.toc').outerHeight()+offset_top){
                    $toc.addClass("is-position-fixed");
                }
                else if($top<$('.js-toc-content').offset().top-20){
                    $toc.removeClass("is-position-fixed");
                }
                if($top>$('.js-toc-content').offset().top+$('.js-toc-content').outerHeight()-60){
                    $(".toc").css("display", "none");
                }else{
			        $(".toc").removeAttr("style");
                };
                $(".easy_toc_anchor").each(function() {
                    if($top + 20>$(this).offset().top){
                        $(".easy_toc_list-item_link.active").removeClass("active");
                        $('a[href$="'+ $(this).attr("id") +'"]').addClass("active");
                    }
                });
		    }
        });
    
    else{
        $(".toc").css("display","none");
    }
    </script>
