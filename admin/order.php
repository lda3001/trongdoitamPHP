<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    // Viet code o duoi nay
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
    <!-- Jquery -->
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
            <section class="order_container col-md-10">
                <div class="order_head mb20">
                    <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">View Orders</p>
                </div>
                <div class="order_body">
                    <div class=" order-container">
                        <!-- <div class="col-md-12">
                            <div class="order-control">
                                <div class="row order-control-item w100pt">
                                    <div class="col-md-6 col-sm-6 text-capitalize">
                                        <span>Show</span>
                                        <select name="" id="" class="w50">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                        <span>Entries</span>
                                    </div>
                                    <div class="col-md-6 order-control-item col-sm-6 text-center">
                                        <label for="search-order">
                                            <span>Search</span>
                                            <input type="text" class="px-1" name="" id="search-order"
                                                placeholder="Search order">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12 mt20">
                            <div class="order-table">
                                <table class="w100pt">
                                    <thead class="">
                                        <tr
                                            class="text-center fw-bold w100pt border border-dark bg-gray-active color-white">
                                            <td class="col-md-1 border-end border-dark">#</td>
                                            <td class="col-md-2 border-end border-dark">Customer</td>
                                            <td class="col-md-3 border-end border-dark">Product Details</td>
                                            <td class="col-md-3 border-end border-dark">Address</td>
                                            <td class="col-md-2 border-end border-dark">Payment Status</td>
                                            <td class="col-md-1">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM tbl_order ");
                                        $count = 1;
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr class="odd text-start fs14 w100pt border border-dark">
                                                <td class="col-md-1 p10 border-end border-dark">
                                                    <?php echo htmlentities($count); ?>
                                                </td>
                                                <td class="col-md-2 p10 border-end border-dark">
                                                    <p class="customer w100pt m-0">
                                                        <strong>Order Id:</strong>
                                                        <?php echo htmlentities($row['order_id']); ?>
                                                    </p>
                                                    <p class="customer w100pt m-0">
                                                        <strong>Name:</strong>
                                                        <?php echo htmlentities($row['order_name']); ?>
                                                    </p>
                                                    <p class="customer w100pt m-0">
                                                        <strong>Email:</strong>
                                                        <?php echo htmlentities($row['order_email']); ?>
                                                    </p>
                                                    <p class="customer w100pt m-0">
                                                        <strong>Phone:</strong>
                                                        <?php echo htmlentities($row['order_phone']); ?>
                                                    </p>
                                                </td>
                                                <td class="col-md-3 p10 border-end border-dark">
                                                    <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM tbl_order_detail 
                                                    JOIN tbl_product ON tbl_order_detail.prod_id = tbl_product.prod_id
                                                    WHERE tbl_order_detail.order_id = " . $row['order_id']);
                                                    while ($result = mysqli_fetch_array($sql)) {
                                                        ?>
                                                        <p class="product w100pt m-0">
                                                            <strong>Product: </strong>
                                                            <?php echo htmlentities($result['prod_name']); ?>
                                                            <small>x
                                                                <?php echo $result['quantity'] ?>
                                                            </small>
                                                        </p>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>

                                                <td class="col-md-3 p10 border-end border-dark">
                                                    <p class="address w100pt m-0">
                                                        <?php echo htmlentities($row['order_address']); ?>
                                                    </p>
                                                </td>
                                                <?php
                                                $query_payment = mysqli_query($con, "SELECT * FROM tbl_order_detail 
                                                    JOIN tbl_product ON tbl_order_detail.prod_id = tbl_product.prod_id
                                                    WHERE tbl_order_detail.order_id = " . $row['order_id']);
                                                $row_payment = mysqli_fetch_array($query_payment);
                                                ?>
                                                <td class="col-md-2 p10 border-end border-dark">
                                                    <p class="status-payment w-100 m-0">
                                                        <strong>
                                                            <?php echo htmlentities($row_payment['payment_name']); ?>
                                                        </strong> -
                                                        <?php
                                                        if (isset($row_payment['payment_status'])) {
                                                            echo htmlentities($row_payment['payment_name']);
                                                        } else {
                                                            echo 'Chưa hoàn thành';
                                                        }
                                                        ?>
                                                    </p>
                                                </td>
                                                <td class="col-md-1 p10">
                                                    <p class="w100pt m-0">
                                                        Đang giao hàng
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
    <!-- Table -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('table').dataTable();
        });
    </script>
</body>

</html>