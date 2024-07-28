<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    // Viet code o duoi nay
    $id = intval($_GET['id']);
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $subcategory = isset($_POST['sub-category']) ? $_POST['sub-category'] : '';
    $product_name = isset($_POST['product-name']) ? $_POST['product-name'] : '';
    $price_old = isset($_POST['price-old']) ? $_POST['price-old'] : '';
    $price_current = isset($_POST['price-current']) ? $_POST['price-current'] : '';
    $product_desc = isset($_POST['product-desc']) ? $_POST['product-desc'] : '';
    $product_ship = isset($_POST['product-ship']) ? $_POST['product-ship'] : '';
    $link = "./assets/img/uploads/";
    $link_file_thumb = isset($_FILES['photo-thumb']['name']) ? $link . basename($_FILES['photo-thumb']['name']) : '';
    $link_file1 = isset($_FILES['photo1']['name']) ? $link . basename($_FILES['photo1']['name']) : '';
    $link_file2 = isset($_FILES['photo2']['name']) ? $link . basename($_FILES['photo2']['name']) : '';
    $link_file3 = isset($_FILES['photo3']['name']) ? $link . basename($_FILES['photo3']['name']) : '';

    if (file_exists($link_file1)) {
        echo "File đã tồn tại trong thư mục uploads!";
        $query = mysqli_query($con, "UPDATE tbl_product SET category_id = '$category', sub_id = '$subcategory', prod_name = '$product_name' , prod_old_price = '$price_old', prod_current_price = '$price_current', ship_price = '$product_ship', prod_desc = '$product_desc', prod_thumb = '$link_file_thumb', prod_img1 = '$link_file1',prod_img2 = '$link_file2',prod_img3 = '$link_file3'  WHERE prod_id = '$id'");
        if (!$query) {
            echo "Có lỗi xảy ra khi cập nhật sản phẩm!";
        } else {
            echo "Cập nhật sản phẩm thành công!";
        }
    } else {
        if (move_uploaded_file($_FILES['photo1']['tmp_name'], $link_file1)) {
            // Thực hiện truy vấn SQL để cập nhật bài viết
            $query = mysqli_query($con, "UPDATE tbl_product SET category_id = '$category', sub_id = '$subcategory', prod_name = '$product_name' , prod_old_price = '$price_old', prod_current_price = '$price_current', ship_price = '$product_ship', prod_desc = '$product_desc', prod_thumb = '$link_file_thumb', prod_img1 = '$link_file1',prod_img2 = '$link_file2',prod_img3 = '$link_file3'  WHERE prod_id = '$id'");
            if (!$query) {
                echo "Có lỗi xảy ra khi cập nhật sản phẩm!";
            } else {
                echo "Cập nhật sản phẩm thành công!";
            }
        } else {
            echo "Có lỗi xảy ra khi upload ảnh!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="shortcut icon" href="../assets/img/logo/logo1.png" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="./assets/library/bootstrap/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="./assets/library/swiperjs/swiper-bundle.min.css">

    <!-- Icon CDN -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CK EDITOR -->
    <script src="./assets/library/ckeditor5/ckeditorjs"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <!-- <script src="./assets/library/nicedit/nicEdit.js"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->

    <!-- Customer CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="over-flow-x">
    <?php include "includes/footer.php"; ?>
    <!-- END HEADER -->
    <main class="change-product mt20">
        <div class="row">
            <?php include 'includes/aside.php' ?>

            <!-- END Side Bar -->
            <section class="edit-product_container col-md-10">
                <div class="edit-product_head mb20">
                    <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Admin Edit Product</p>
                </div>
                <div class="edit-product_body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php
                        $id = intval($_GET['id']);
                        $sql = mysqli_query($con, "SELECT tbl_product.*, tbl_sub_category.* FROM tbl_product JOIN tbl_sub_category ON tbl_sub_category.sub_id = tbl_product.sub_id WHERE tbl_product.prod_id = '$id'");
                        while ($result = mysqli_fetch_array($sql)) {
                            ?>
                            <div class="control-group mb20 row">
                                <label class="col-md-3 col-sm-3 text-end" for="">Danh mục sản phẩm</label>
                                <select name="category" onchange="getSubcat(event,this.value)" required id=""
                                    class="col-sm-9 w400 col-md-9" placeholder="Select Category">
                                    <?php
                                    $query = mysqli_query($con, "SELECT * FROM tbl_category");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="control-group mb20 row">
                                <label class="col-md-3 col-sm-3 text-end" for="">Loại sản phẩm</label>
                                <select name="sub-category" id="sub-category" class="col-sm-9 w400 col-md-9"
                                    placeholder="Select Category" required>
                                    <option name="subcategory" id="subcategory"
                                        value="<?php echo htmlentities($result['sub_id']) ?>">
                                        <?php echo htmlentities($result['sub_name']) ?>
                                        <!-- Ajax -->
                                    </option>
                                </select>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Tên sản phẩm</label>
                                <input type="text" name="product-name" class="col-sm-9 w400 col-md-9 "
                                    value="<?php echo htmlentities($result['prod_name']) ?>">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Giá sản phẩm trước khi giảm giá</label>
                                <input type="text" name="price-old" class="col-sm-9 w400 col-md-9 "
                                    value="<?php echo htmlentities($result['prod_old_price']) ?>">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Giá sản phẩm sau khi giảm giá (Giá bán)</label>
                                <input type="text" name="price-current" class="col-sm-9 w400 col-md-9 "
                                    value="<?php echo htmlentities($result['prod_current_price']) ?>">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Mô tả sản phẩm</label>
                                <div class="col-sm-9 w400 col-md-9 p-0">
                                    <textarea name="product-desc" id="ck-product-description"
                                        rows="10"><?php echo htmlentities($result['prod_desc']); ?></textarea>
                                </div>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Phí ship</label>
                                <input type="text" name="product-ship" class="col-sm-9 w400 col-md-9 "
                                    value="<?php echo htmlentities($result['ship_price']) ?>">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3 " for="">Ảnh thumnail</label>
                                <img class="col-sm-9 w400 h400 col-md-9 p-0" width="300" height="300"
                                    src="<?php echo $result['prod_thumb'] ?>" alt="">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Thay đổi ảnh thumbnail</label>
                                <input type="file" name="photo-thumb" class="col-sm-9 w400 col-md-9 p-0"
                                    placeholder="Enter Product Shipping Charge" required>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Thay đổi ảnh sản phẩm 1</label>
                                <input type="file" name="photo1" class="col-sm-9 w400 col-md-9 p-0"
                                    placeholder="Enter Product Shipping Charge" required>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Thay đổi ảnh sản phẩm 2</label>
                                <input type="file" name="photo2" class="col-sm-9 w400 col-md-9 p-0"
                                    placeholder="Enter Product Shipping Charge" required>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Thay đổi ảnh sản phẩm 3</label>
                                <input type="file" name="photo3" class="col-sm-9 w400 col-md-9 p-0"
                                    placeholder="Enter Product Shipping Charge" required>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="control-group mb20 row text-end">
                            <div class="col-md-3 col-sm-3"></div>
                            <button type="submit" name="submit"
                                class="col-sm-9 w400 col-md-9 border-0 px10-py20 rounded-3 bg-default hover-bg-orange">Sửa
                                sản phẩm</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Content Change Password-->
        </div>
    </main>
    <!-- CK Editor -->
    <!-- <script>
        ClassicEditor
            .create(document.querySelector('#ck-product-description'))
            .catch(error => {
                console.error(error);
            });
    </script> -->
    <script>
        CKEDITOR.replace('ck-product-description');
    </script>
</body>

</html>