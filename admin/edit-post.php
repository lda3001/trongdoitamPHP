<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    if (isset($_POST['submit'])) {
        $id = intval($_GET['id']);
        $cate = $_POST['category-post'];
        $title = $_POST['post_title'];
        $content = $_POST['post_desc'];
        $thumbpart = basename($_FILES['photo']['name']);
        $link = "./assets/img/uploads/";
        $link_file = $link . $thumbpart;

        if (file_exists($link_file)) {
            echo "File đã tồn tại trong thư mục uploads!";
            $query = mysqli_query($con, "UPDATE tbl_post SET post_title = '$title', post_content = '$content', category_post_id = '$cate' , post_thumb = '$link_file' WHERE post_id = $id");
            if (!$query) {
                echo "Có lỗi xảy ra khi cập nhật bài viết!";
            } else {
                echo "Cập nhật bài viết thành công!";
            }
        } else {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $link_file)) {
                // Thực hiện truy vấn SQL để cập nhật bài viết
                $query = mysqli_query($con, "UPDATE tbl_post SET post_title = '$title', post_content = '$content', category_post_id = '$cate' , post_thumb = '$link_file' WHERE post_id = $id");
                if (!$query) {
                    echo "Có lỗi xảy ra khi cập nhật bài viết!";
                } else {
                    echo "Cập nhật bài viết thành công!";
                }
            } else {
                echo "Có lỗi xảy ra khi upload ảnh!";
            }
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
    <main class="change-password mt20">
        <div class="row">
            <?php include 'includes/aside.php' ?>

            <!-- END Side Bar -->
            <section class="insert-post_container col-md-10">
                <div class="insert-post_head mb20">
                    <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Admin Edit Post</p>
                </div>
                <div class="insert-post_body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php
                        $id = intval($_GET['id']);
                        $sql = mysqli_query($con, "SELECT tbl_post.*, tbl_category_post.* FROM tbl_post JOIN tbl_category_post ON tbl_post.category_post_id = tbl_category_post.category_post_id WHERE post_id = '$id'");
                        while ($result = mysqli_fetch_array($sql)) {
                            ?>
                            <div class="control-group mb20 row">
                                <label class="col-md-3 col-sm-3 text-end" for="">Loại bài viết</label>
                                <select name="category-post" class="col-sm-9 w400 col-md-9" placeholder="Select Category">
                                    <?php
                                    $query = mysqli_query($con, "SELECT * FROM tbl_category_post");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $selected = ($row['category_post_id'] == $result['category_post_id']) ? "selected" : "";
                                        ?>
                                        <option value="<?php echo $row['category_post_id'] ?>" <?php echo $selected ?>><?php echo $row['category_post_name'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Tiêu đề bài viết</label>
                                <input type="text" name="post_title" class="col-sm-9 w400 col-md-9 "
                                    value="<?php echo $result['post_title']; ?>">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Ảnh thumbnail hiện tại</label>
                                <img src="<?php echo $result['post_thumb']; ?>" class="col-sm-9 w400 col-md-9 p-0" alt="">
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Ảnh thumbail</label>
                                <input type="file" name="photo" class="col-sm-9 w400 col-md-9 p-0 "
                                    placeholder="Enter Product Shipping Charge" required>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <label class="col-md-3 col-sm-3" for="">Mô tả sản phẩm</label>
                                <div class="col-sm-9 w400 col-md-9 p-0">
                                    <textarea name="post_desc" id="ck-post-description"
                                        rows="10"><?php echo $result['post_content']; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <div class="col-md-3 col-sm-3"></div>
                                <button type="submit" name="submit"
                                    class="col-sm-9 w400 col-md-9 border-0 px10-py20 rounded-3 bg-default hover-bg-orange">Lưu
                                    thay đổi</button>
                            </div>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </section>
            <!-- Content Change Password-->
        </div>
    </main>
    <!-- CK Editor -->
    <!-- <script>
        ClassicEditor
            .create(document.querySelector('#ck-post-description'))
            .catch(error => {
                console.error(error);
            });
    </script> -->
    <script>
        CKEDITOR.replace('ck-post-description');
    </script>
</body>

</html>