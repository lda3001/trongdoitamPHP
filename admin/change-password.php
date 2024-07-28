<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
}else {
    $member = $_SESSION['member'];
    if (isset($_POST['btn-changepass'])) {
        $currentpass = $_POST['password'];
        $newpass = $_POST['newpassword'];
        $confirmpass = $_POST['confirmpassword'];

        if ($newpass == $confirmpass) {
            $currentpass = md5($currentpass); // hash the current password for comparison
            $query = mysqli_query($con, "SELECT password FROM tbl_admin WHERE password = '$currentpass'");
            $row = mysqli_fetch_array($query);
            if ($row) {
                $newpass = md5($newpass); // hash the new password before saving to database
                $query = mysqli_query($con, "UPDATE tbl_admin SET password = '$newpass'");
            } else {
                // current password is incorrect
                echo "Nhập sai mật khẩu";
            }
        } else {
            // new password and confirm password don't match
            echo "Mật khẩu không giống nhau";
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
    <main class="change-password mt20">
        <div class="row">
        <?php include 'includes/aside.php' ?>
            <!-- END Side Bar -->
            <section class="change-password_container col-md-10">
                <div class="change-password_head mb20">
                    <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Admin Change Password</p>
                </div>
                <div class="change-password_body">
                    <form action="" method="post">
                        <div class="control-group mb20 row">
                            <label class="col-md-3 col-sm-3 text-end" for="">Mật khẩu hiện tại</label>
                            <input type="password" name="password" class="col-sm-9 w400 col-md-9 "
                                placeholder="Nhập mật khẩu hiện tại">
                        </div>
                        <div class="control-group mb20 row">
                            <label class="col-md-3 col-sm-3 text-end" for="">Mật khẩu mới</label>
                            <input type="password" name="newpassword" class="col-sm-9 w400 col-md-9 "
                                placeholder="Nhập mật khẩu hiện tại">
                        </div>
                        <div class="control-group mb20 row text-end">
                            <label class="col-md-3 col-sm-3" for="">Nhập lại mật khẩu mới</label>
                            <input type="password" name="confirmpassword" class="col-sm-9 w400 col-md-9 "
                                placeholder="Nhập mật khẩu hiện tại">
                        </div>
                        <div class="control-group mb20 row text-end">
                            <div class="col-md-3 col-sm-3"></div>
                            <button type="submit" name='btn-changepass'
                                class="col-sm-9 w400 col-md-9 border-0 px10-py20 rounded-3 bg-default hover-bg-orange">Lưu
                                thay đổi</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Content Change Password-->
        </div>
    </main>
</body>

</html>