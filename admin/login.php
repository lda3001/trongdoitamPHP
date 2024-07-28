<?php
session_start();
include "config/config.php";

if (isset($_POST['btn-submit'])) {
    $adminUser = $_POST['adminUser'];
    $adminPassword = md5($_POST['adminPassword']); // Lưu ý: MD5 không được coi là an toàn trong thời gian hiện tại, nên nên sử dụng các phương thức bảo mật khác như bcrypt hoặc Argon2.
    $query = mysqli_query($con, "SELECT * FROM tbl_admin WHERE email = '$adminUser' AND password = '$adminPassword'");
    $row = mysqli_fetch_array($query);
    if ($row) { // Sử dụng $row thay vì $row > 0 vì mysqli_fetch_array() sẽ trả về một mảng rỗng nếu không có bản ghi nào.
        $_SESSION['adminlogin'] = $_POST['adminUser'];
        $_SESSION['member'] = 1;
        header('location: index.php');
        exit();
    } else {
        header('location: login.php');
        exit();
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
    <header class="pt10 bg-default fs18s">
        <div class="container ">
            <div class="row">
                <div class="header-logo header-left col-md-6">
                    <a href="index.php">
                        <p class="fw-bold">Shale Pizza | Admin</p>
                    </a>
                </div>
                <div class="header-control header-right col-md-6">
                    <a href="http://localhost/PIZZA%20-%20HUNG/Pizaa/"
                        class="back-to-link color-white hover-color-blue text-end">
                        <p class="fw-bold">
                            <i class="fa-sharp fa-solid fa-share"></i>
                            Quay lại Shale Pizza
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <section class="login mt50 h90vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="wrapper col-md-4 ">
                    <h2 class="fw-bold fs24 text-center mb30 text-capitalize">login admin</h2>
                    <!-- <div class="alert alert__message alert-success" role="alert">
                        A simple success alert—check it out!
                    </div> -->
                    <form action="login.php" class="form-login-admin" method="post">
                        <input type="email" name="adminUser" class="w100pt px10-py5 mb10"
                            placeholder="Username or Email">
                        <input type="password" name="adminPassword" class="w100pt px10-py5 mb10" placeholder="Password">
                        <small class="color-default">
                            <?php echo empty($errmsg) ? "" : $errmsg; ?>
                        </small>
                        <button type="submit" name="btn-submit"
                            class="w100pt px10-py5 mb30 bg-default border-0 rounded-pill hover-bg-orange">Login</button>
                    </form>
                    <small>
                        Don't have account?
                        <a href="http://localhost/PIZZA%20-%20HUNG/README.md" class="hover-color-orange"
                            target="_blank">README</a>
                    </small>
                </div>
            </div>
        </div>
    </section>
    <!-- END LOGIN FORM -->
    <footer>
        <div class="footer__copyright text-center border-top border-danger ">
            <small class="color-default fs14">
                Copyright © 2023 shale pizza
            </small>
        </div>
    </footer>
</body>

</html>