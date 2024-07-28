<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    // Viet code o duoi nay
    if (isset($_POST['submit'])) {
        $category = $_POST['category'];
        $desc = $_POST['desc'];
        $id = intval($_GET['id']);
        $query = mysqli_query($con, "UPDATE tbl_category SET category_name = '$category', category_desc = '$desc'  WHERE category_id = '$id'");
        echo "<script>alert('Thành công')</script>";
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

    <!-- Customer CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="over-flow-x">
    <?php include "includes/footer.php"; ?>
    <!-- END HEADER -->
    <main class="change-password mt20  ">
        <div class="row">
            <?php include 'includes/aside.php' ?>
            <!-- END Side Bar -->
            <div class="content col-md-10">
                <section class="category-container mb106">
                    <div class="category_head mb20">
                        <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Edit Category</p>
                    </div>
                    <div class="category_body">
                        <form action="" method="post">
                            <?php
                            $id = intval($_GET['id']);
                            $query = mysqli_query($con, "SELECT * FROM tbl_category WHERE category_id = '$id'");
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <div class="control-group mb20 row">
                                    <label class="col-md-3 col-sm-3 text-end" for="">Category name</label>
                                    <input type="text" name="category" class="col-sm-9 w400 col-md-9 "
                                        value="<?php echo htmlentities($row['category_name']) ?>">
                                </div>
                                <div class="control-group mb20 row">
                                    <label class="col-md-3 col-sm-3 text-end" for="">Description</label>
                                    <textarea name="desc" id="" cols="" rows="5"
                                        class="col-sm-9 w400 col-md-9"><?php echo htmlentities($row['category_desc']) ?></textarea>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="control-group mb20 row text-end">
                                <div class="col-md-3 col-sm-3"></div>
                                <button type="submit" name="submit"
                                    class="col-sm-9 w400 col-md-9 border-0 px10-py20 rounded-3 bg-default hover-bg-orange">Lưu
                                    thay đổi</button>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- Content -->
            </div>
        </div>
    </main>

</body>

</html>