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
            <section class="users_container col-md-10">
                <div class="users_head mb20">
                    <p class="text-capitalize fs16 fw-bolder px10-py20 w100pt bg-default m-0">View Users</p>
                </div>
                <div class="users_body">
                    <div class=" order-container">
                        <div class="col-md-12 mt20">
                            <div class="order-table">
                                <table class="w100pt">
                                    <thead class="">
                                        <tr
                                            class="text-center fw-bold w100pt border border-dark bg-gray-active color-white">
                                            <td class="col-md-1 border-end border-dark">#</td>
                                            <td class="col-md-2 border-end border-dark">Name</td>
                                            <td class="col-md-2 border-end border-dark">Email</td>
                                            <td class="col-md-2 border-end border-dark">Phone</td>
                                            <td class="col-md-3 border-end border-dark">Address</td>
                                            <td class="col-md-2">Reg-Date</td>
                                        </tr>
                                    </thead>
                                    <tbody id="result">
                                    <?php
                                    $query = mysqli_query($con, "SELECT * FROM tbl_customer");
                                    $count = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr class="odd text-start fs14 w100pt border border-dark">
                                            <td class="col-md-1 p10 border-end border-dark">
                                                <?php echo htmlentities($count); ?>
                                            </td>
                                            <td class="col-md-2 p10 border-end border-dark">
                                                <p class="name w100pt m-0">
                                                    <?php echo htmlentities($row['cust_fullname']); ?>
                                                </p>
                                            </td>
                                            <td class="col-md-2 p10 border-end border-dark">
                                                <p class="name w100pt m-0">
                                                    <?php echo htmlentities($row['cust_email']); ?>
                                                </p>
                                            </td>
                                            <td class="col-md-2 p10 border-end border-dark">
                                                <p class="name w100pt m-0">
                                                    <?php echo htmlentities($row['cust_phone']); ?>
                                                </p>
                                            </td>
                                            <td class="col-md-3 p10 border-end border-dark">
                                                <p class="name w100pt m-0">
                                                    <?php echo htmlentities($row['cust_address']); ?>
                                                </p>
                                            </td>
                                            <td class="col-md-2 p10">
                                                <p class="name w100pt m-0">
                                                    <?php echo htmlentities($row['cust_datetime']); ?>
                                                </p>
                                            </td>
                                            <!-- <img src="./assets/img/productslide/Pizza/pizza1.2.jpeg" alt=""> -->
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
    <script src="./assets/library/jquery/"></script>
    <script src="./assets/js/search.js"></script>
</body>

</html>