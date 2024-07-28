<?php ob_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "config/config.php";
include "config/function.php";
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$max_recently_viewed_products = 5;

if (!isset($_SESSION['recently_viewed_products'])) {
    $_SESSION['recently_viewed_products'] = array();
}

?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="vi">

<head>
    <title>Trang Chủ</title>
    <meta name="Robots" content="index,all" />

    <link rel="icon" type="image/png" href="/Data/images/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="THÙNG RƯỢU GỖ NHẬP KHẨU" />
    <meta name="keywords" content="THÙNG RƯỢU GỖ NHẬP KHẨU">
    <meta name="copyright" content="THÙNG RƯỢU GỖ NHẬP KHẨU" />
    <meta name="author" content="THÙNG RƯỢU GỖ NHẬP KHẨU" />
    <meta property="og:title" content="thunggoletrong" />
    <meta property="og:site_name" content="THÙNG RƯỢU GỖ NHẬP KHẨU" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://thunggoletrong.com/Data/images/logo.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="thunggoletrong" />
    <meta property="og:url" content="<?php echo $domain ?>" />
    <meta property="og:description" content="THÙNG RƯỢU GỖ NHẬP KHẨU" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="thunggoletrong" />
    <meta name="twitter:description" content="THÙNG RƯỢU GỖ NHẬP KHẨU" />
    <meta name="twitter:image" content="<?php echo $domain ?>/assets/uploads/img/logo.png" />
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P36DGNW');</script> <!-- End Google Tag Manager -->


    <link rel="preload stylesheet" as="style" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Oswald&display=swap&subset=vietnamese,latin-ext"
        rel="preload stylesheet" as="style" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.min.css" />
    <link rel="preload stylesheet" as="style"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="../../assets/css/add.css" rel="stylesheet" />

    <link href="../../assets/css/home.css" rel="stylesheet" />


    <link href="../../assets/css/multizoom.css" rel="preload stylesheet" as="style" />
    <link rel="preload" as="script" type="text/javascript"
        href="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" />
    <link rel="preload" as="script" type="text/javascript"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" />


    <link rel="preload" as="script" type="text/javascript"
        href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" />
    <link rel="preload" as="script" type="text/javascript"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" />
    <link rel="preload" as="script" type="text/javascript" href="../../assets/js/notify.js" />
    <link rel="preload" as="script" type="text/javascript"
        href="https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js" />
    <style>
        /*#box-why{
        position: relative;
        background-image: url("/Data/images/slide/thung-ruou-go-nhap-khau.png?v=1");
        background-position: center center;
        background-size: cover;
    }*/
        .toc {
            margin-bottom: 13px
        }

        .js-toc-title {
            display: inline-block;
            float: left;
            clear: both;
            background: #fefff2;
            font-weight: bold;
            padding: 0 15px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #eee;
            text-transform: uppercase;
            border-left: 5px solid #a55001;
            cursor: pointer
        }

        .toc>.toc-list-wrap {
            position: relative;
            display: inline-block;
            background: #fefff2;
            border: 1px solid #eee;
            padding: 10px 20px;
            float: left;
            clear: both;
            max-height: calc(100vh - 110px);
            overflow: auto;
        }

        /*.toc ol li{list-style:none;}
    .toc ol {counter-reset:item;}
    .toc ol li:before{content: counters(item, ".") ". ";counter-increment: item}*/
        .is-position-fixed {
            position: fixed !important;
            top: 90px;
            z-index: 1000000
        }

        .is-position-fixed>.toc-list-wrap {
            display: none
        }

        .is-position-fixed>.js-toc-title {
            z-index: 1000
        }

        .js-toc-content h1::before,
        .js-toc-content h2::before,
        .js-toc-content h3::before,
        .js-toc-content h4::before,
        .js-toc-content h5::before,
        .js-toc-content h6::before {
            display: block;
            content: " ";
            height: 60px;
            margin-top: -60px;
            visibility: hidden;
        }

        /*To handle anchor links properly when you have a fixed header*/
        .is-position-fixed .js-toc-title {
            font-size: 0;
            padding: 0 8px;
        }

        .is-position-fixed .js-toc-title i {
            font-size: 1.5rem;
            line-height: 40px;
        }

        .is-position-fixed .js-toc-title span {
            display: none;
        }

        .easy_toc_list ol {
            margin-left: 20px;
        }

        .easy_toc_list-item {
            position: relative;
        }

        .easy_toc_list-item_link {
            font-weight: normal
        }

        .easy_toc_list-item_link.active {
            font-weight: 700
        }

        ol .easy_toc_list-item_link.active:before {
            content: "";
            height: 1em;
            width: 3px;
            display: block;
            background-color: #f00;
            position: absolute;
            top: 0;
            left: -20px;
        }

        ol ol .easy_toc_list-item_link.active:before {
            left: -40px;
        }

        ol ol ol .easy_toc_list-item_link.active:before {
            left: -60px;
        }

        ol ol ol ol .easy_toc_list-item_link.active:before {
            left: -80px;
        }

        ol ol ol ol ol .easy_toc_list-item_link.active:before {
            left: -100px;
        }
    </style>



    <link rel="canonical" href="https://thunggoletrong.com" />
</head>

<body>

    <div id="wrapper">

        <div id="slideads" class="d-none"></div>



        <div itemprop="hasPart" itemscope itemtype="https://schema.org/WPHeader" itemid="#WPHeader" id="header">
            <div class="container" itemscope itemtype="https://schema.org/WebSite">
                <meta itemprop="url" content="https://thunggoletrong.com/" />
                <meta itemprop="name" content="TH&#217;NG RƯỢU GỖ NHẬP KHẨU" />

                <div class="row">
                    <div class="col-xl-3">
                        <div id="logo">
                            <a href="/">
                                <img itemprop="image" src="/Data/images/logo/22.png"
                                    alt="TH&#217;NG RƯỢU GỖ NHẬP KHẨU" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div id="search" itemprop="potentialAction" itemscope
                            itemtype="https://schema.org/SearchAction">
                            <div id="frmsearch">
                                <meta itemprop="target"
                                    content="https://thunggoletrong.com/tim-kiem/tk-{searchString}.html" />
                                <input type="hidden" name="s" value="1">
                                <select class="" id="catsearch" name="catsearch">
                                    <option value="0"> Danh mục tìm kiếm </option>
                                </select>
                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                <input itemprop="query-input" type="text" name="searchString" value="" id="txtsearch"
                                    placeholder="T&#236;m kiếm sản phẩm ..." class="ui-autocomplete-input"
                                    autocomplete="off" required />
                                <button type="submit" id="btnsearch"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="cart">
                            <a href="/gio-hang.html" class="cart-link" rel="nofollow">
                                <span><i class="fas fa-shopping-basket"></i></span>
                                <p>
                                    <strong>Giỏ h&#224;ng</strong>
                                    C&#243; <b id="countCart"><?php echo count($_SESSION['cart']) ?> </b> Sản phẩm
                                </p>
                            </a>


                            <div id="cart-content"> <?php if ($_SESSION['cart'] == array()) { ?>
                                    <p>Giỏ hãng rỗng</p>
                                <?php } else { ?>
                                    <?php $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                                    $temp = 0;
                                    $ship = 0;



                                    ?>
                                    <table width="100%">
                                        <tbody>
                                            <?php if (!empty($query)) {
                                                while ($row = mysqli_fetch_array($query)) { ?>
                                                    <tr>
                                                        <td width="25%">
                                                            <img src="../../admin/<?php echo $row['prod_thumb'] ?>"
                                                                alt="<?php echo $row['prod_name'] ?>">
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="../../san-pham/<?php echo $row['prod_id'] ?>"><?php echo $row['prod_name'] ?></a>
                                                            <br> <?php echo $_SESSION['cart'][$row['prod_id']] ?> x
                                                            <span><?php echo number_format($row['prod_current_price'], 0, '.', '.') ?>
                                                                đ</span>

                                                            <span class="remove-cart" data-id="<?php echo $row['prod_id']?>"><i
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
                                        <a href="/gio-hang.html" class="button">Xem giỏ hàng</a><a
                                            href="/thong-tin-van-chuyen.html" class="button">Thanh toán</a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="hotline">
                            <a href="tel:<?php echo $zalo ?>" class="hotline-link">
                                <span><i class="fas fa-phone"></i></span>
                                <p>
                                    <strong>Hotline tư vấn</strong>
                                    <b><?php echo $zalo ?></b>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div id="menu" class="fixed">
            <div class="container">
                <nav class="menu" itemprop="hasPart" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <div id="nav-toggle">
                        <div id="menu-button"><i class="fa fa-bars"></i></div>
                    </div>
                    <div id="closemenu"><i class="fas fa-times-circle"></i> Ẩn Menu</div>
                    <ul class="d-xl-flex justify-content-center">
                        <li class="menu-item"><a href="/" itemprop="url"><i class="fas fa-home"></i> <span
                                    itemprop="name">Trang chủ</span></a></li>

                        <li class="menu-item">
                            <a href="../../gioi-thieu">Giới thiệu</a>


                        </li>
                        <li class="menu-item" itemprop="hasPart" itemscope itemtype="http://schema.org/CollectionPage">
                            <a href="../../cua-hang" itemprop="url">
                                <span itemprop="name">Sản phẩm</span>
                            </a>

                            <span class="showhide-subul"><i class="far fa-plus-square"></i></span>
                            <ul class="sub-menu">
                                <?php $query = mysqli_query($conn, "SELECT * FROM tbl_category");
                                while ($row = mysqli_fetch_array($query)) { ?>
                                    <li class="menu-item">
                                        <a href="../../danh-muc/<?php echo $row['category_desc'] ?>"><?php echo $row['category_name'] ?></a>


                                    </li>
                                <?php } ?>

                            </ul>

                        </li>
                        <li class="menu-item">
                            <a href="../../chinh-sach">Ch&#237;nh s&#225;ch</a>


                        </li>
                        <li class="menu-item">
                            <a href="../../feedback">Kh&#225;ch h&#224;ng phản hồi</a>


                        </li>
                        <li class="menu-item">
                            <a href="../../tin-tuc.html">Tin tức</a>


                        </li>

                        <li class="menu-item" itemprop="hasPart" itemscope itemtype="http://schema.org/ContactPage"><a
                                href="/contact.html" itemprop="url"><span itemprop="name">Li&#234;n hệ</span></a></li>
                    </ul>

                </nav>

            </div>
        </div>