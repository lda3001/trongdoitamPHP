<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    // Process form data
    if (isset($_POST['submit'])) {
        $category = $_POST['category'];
        $subcategory = $_POST['sub-category'];
        $product_name = $_POST['product-name'];
        $price_old = $_POST['price-old'];
        $price_current = $_POST['price-current'];
        $product_desc = $_POST['product-desc'];
        $product_ship = $_POST['product-ship'];

        // Process images
        $thumbpart = basename($_FILES['thumbnail']['name']);
        $photo1part = basename($_FILES['photo1']['name']);
        $photo2part = basename($_FILES['photo2']['name']);
        $photo3part = basename($_FILES['photo3']['name']);
        $link = "./assets/img/uploads/";

        $link_thumb = $link . $thumbpart;
        $link_photo1 = $link . $photo1part;
        $link_photo2 = $link . $photo2part;
        $link_photo3 = $link . $photo3part;
        // Upload images
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $link_thumb);
        move_uploaded_file($_FILES['photo1']['tmp_name'], $link_photo1);
        move_uploaded_file($_FILES['photo2']['tmp_name'], $link_photo2);
        move_uploaded_file($_FILES['photo3']['tmp_name'], $link_photo3);

        // Insert data into database
        $query = mysqli_query($con, "INSERT INTO tbl_product(category_id, sub_id, prod_name, prod_old_price, prod_current_price, ship_price, prod_desc, prod_thumb, prod_img1, prod_img2, prod_img3) VALUES( '$category','$subcategory','$product_name','$price_old','$price_current','$product_ship','$product_desc','$link_thumb','$link_photo1','$link_photo2', '$link_photo3')");


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
    <script>
        function getSubcat(event, val) {
            console.log(event);
            console.log(val);
            // $.ajax({
            //     type: "POST",
            //     url: "get_subcat.php",
            //     data: 'cat_id=' + val,
            //     success: function (data) {
            //         $("#subcategory").html(data);
            //     }
            // });
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    document.getElementById("sub-category").innerHTML = this.responseText;
                }
            };
            var params = `cat_id=${val}`;
            xhttp.open("POST", "get_subcat.php", true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send(params);

        }
    </script>
</head>

<body class="over-flow-x">
    <?php include "includes/footer.php"; ?>
    <!-- END HEADER -->
    <main class="change-password mt20">
        <div class="row">
            <?php include 'includes/aside.php' ?>

            <!-- END Side Bar -->
            <section class="insert-product_container col-md-10">
                <div class="insert-product_head mb20">
                    <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Add product</p>
                </div>
                <div class="insert-product_body">
                    <form action="" method="post" enctype="multipart/form-data">
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
                                <option name="subcategory" id="subcategory" value="">
                                    <!-- Select Sub Category -->
                                    <!-- Ajax -->
                                </option>
                            </select>
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Tên sản phẩm</label>
                            <input type="text" name="product-name" class="col-sm-9 w400 col-md-9 "
                                placeholder="Enter Product Name">
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Giá sản phẩm trước khi giảm giá</label>
                            <input type="text" name="price-old" class="col-sm-9 w400 col-md-9 "
                                placeholder="Enter Product Price">
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Giá sản phẩm sau khi giảm giá (Giá bán)</label>
                            <input type="text" name="price-current" class="col-sm-9 w400 col-md-9 "
                                placeholder="Enter Product Price">
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Mô tả sản phẩm</label>
                            <textarea name="product-desc" class="col-sm-9 w400 col-md-9 p-0" id="ck-product-description"
                                rows="10"></textarea>
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Phí ship</label>
                            <input type="text" name="product-ship" class="col-sm-9 w400 col-md-9 "
                                placeholder="Enter Product Shipping Charge">
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Ảnh thumnail</label>
                            <input type="file" name="thumbnail" class="col-sm-9 w400 col-md-9 p-0"
                                placeholder="Enter Product Shipping Charge" required>
                        </div>
                        <!-- <div class="control-group mb20 row text-end position-relative">
                            <label for="" class="col-md-3 col-sm-3">Ảnh khác</label>
                            <input type="button" value="Thêm" class="w100 position-absolute btn-add btn bg-default">
                            <div class="col-sm-9 w400 col-md-9 p-0 position-relative">
                                <input type="file" class="col-sm-9 w400 col-md-9 p-0 " name="" id="">
                                <a href=""
                                    class="col-sm-1 col-md-1 btn-delete btn btn-danger btn-xs d-inline-block fs12 position-absolute">X</a>
                            </div>
                        </div> -->
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Ảnh sản phẩm 2</label>
                            <input type="file" name="photo1" class="col-sm-9 w400 col-md-9 p-0"
                                placeholder="Enter Product Shipping Charge" required>
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Ảnh sản phẩm 3</label>
                            <input type="file" name="photo2" class="col-sm-9 w400 col-md-9 p-0"
                                placeholder="Enter Product Shipping Charge" required>
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Ảnh sản phẩm 4</label>
                            <input type="file" name="photo3" class="col-sm-9 w400 col-md-9 p-0"
                                placeholder="Enter Product Shipping Charge" required>
                        </div>
                        <div class="control-group mb20 row text-end">
                            <div class="col-md-3 col-sm-3"></div>
                            <button type="submit" name="submit"
                                class="col-sm-9 w400 col-md-9 border-0 px10-py20 rounded-3 bg-default hover-bg-orange">Thêm
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