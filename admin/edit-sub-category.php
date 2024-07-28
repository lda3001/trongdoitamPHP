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
        $subcategory = $_POST['sub-category'];
        $id = intval($_GET['id']);
        if ($query = mysqli_query($con, "UPDATE tbl_sub_category SET cate_id = '$category', sub_name = '$subcategory'  WHERE sub_id = '$id'")) {
            echo "<script>alert('Thành công')</script>";
            // header('location:sub-category.php');
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
                        <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Sub Category</p>
                    </div>
                    <div class="category_body">
                        <form action="" method="post">
                            <?php
                            $id = intval($_GET['id']);
                            $sql = mysqli_query(
                                $con,
                                "SELECT tbl_sub_category.*, tbl_category.* FROM tbl_sub_category JOIN tbl_category ON tbl_category.category_id = tbl_sub_category.cate_id WHERE sub_id = '$id'"
                            );
                            while ($result = mysqli_fetch_array($sql)) {
                                ?>
                                <div class="control-group mb20 row">
                                    <label class="col-md-3 col-sm-3 text-end" for="">Category Name</label>
                                    <select name="category" id="" required class="col-sm-9 w400 col-md-9"
                                        placeholder="Select Category">
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM tbl_category");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="control-group mb20 row">
                                    <label class="col-md-3 col-sm-3 text-end" for="">Sub Category Name</label>
                                    <input type="text" name="sub-category" value="<?php echo $result['sub_name']; ?>" id=""
                                        class="col-sm-9 w400 col-md-9">
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