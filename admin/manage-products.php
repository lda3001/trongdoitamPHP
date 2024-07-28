<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    // Viet code o duoi nay
    if (isset($_GET['del'])) {
        $id = intval($_GET['id']);
        mysqli_query($con, "DELETE FROM tbl_product WHERE prod_id = '$id'");
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
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="./assets/library/bootstrap/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="./assets/library/swiperjs/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
        rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- Icon CDN -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <section class="users_container col-md-10">
                <div class="users_head mb20">
                    <p class="text-capitalize fs16 fw-bolder px10-py20 w100pt bg-default m-0">View Products</p>
                </div>
                <div class="users_body">
                    <div class=" order-container">
                        <div class="col-md-12 mt20">
                            <div class="manage-products-table">
                                <table class="w100pt">
                                    <thead class="manage-products_head">
                                        <tr class="text-center fw-bold w100pt border border-dark bg-gray-active color-white">
                                            <td class="col-md-1 border-end border-dark">#</td>
                                            <td class="col-md-2 border-end border-dark">Product Name</td>
                                            <td class="col-md-2 border-end border-dark">Thumbnail</td>
                                            <td class="col-md-2 border-end border-dark">Sub Category</td>
                                            <td class="col-md-3 border-end border-dark">Price Before - After</td>
                                            <td class="col-md-2">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody class="manage-products_body">
                                        <?php
                                        $query = mysqli_query($con, "SELECT tbl_product.*,tbl_sub_category.* FROM tbl_product JOIN tbl_sub_category ON tbl_sub_category.sub_id = tbl_product.sub_id;");
                                        $count = 1;
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr class="odd text-start fs14 w100pt border border-dark">
                                                <td class="col-md-1 p10 border-end border-dark">
                                                    <?php echo htmlentities($count); ?>
                                                </td>
                                                <td class="col-md-2 p10 border-end border-dark">
                                                    <p class="name w100pt m-0">
                                                        <?php echo htmlentities($row['prod_name']); ?>
                                                    </p>
                                                </td>
                                                <td class="col-md-2 p10 border-end border-dark">
                                                    <p class="name w100pt m-0"><img src="<?php echo htmlentities($row['prod_thumb']); ?>" alt="">
                                                    </p>
                                                </td>
                                                <td class="col-md-2 p10 border-end border-dark">
                                                    <p class="name w100pt m-0">
                                                        <?php echo htmlentities($row['sub_name']); ?>
                                                    </p>
                                                </td>
                                                <td class="col-md-3 p10 border-end border-dark">
                                                    <p class="name w100pt m-0">
                                                        <?php echo htmlentities($row['prod_old_price']) . ' - ' . htmlentities($row['prod_current_price']); ?>
                                                    </p>
                                                </td>
                                                <td class="col-md-2 p10">
                                                    <p class="w100pt m-0">
                                                        <a href="edit-product.php?id=<?php echo $row['prod_id']; ?>">
                                                            <i class="fa-solid fa-pen-to-square hover-color-orange"></i>
                                                        </a>
                                                        <a href="manage-products.php?id=<?php echo $row['prod_id']; ?>&del=delete" onclick="return confirm('Are you sure you want to delete?')">
                                                            <i class="fa-solid fa-circle-xmark hover-color-orange"></i>
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php $count = $count + 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content -->
        </div>
    </main>
    <script type="text/javascript">
        $(document).ready(function () {
            $('table').dataTable();
        });
    </script>
</body>

</html>