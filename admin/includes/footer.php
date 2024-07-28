<header class="pt10 bg-default fs18s">
    <div class="container ">
        <div class="row">
            <div class="header-logo header-left col-md-6">
                <a href="index.php" class="hover-color-white">
                    <p class="fw-bold">Shale Pizza | Admin</p>
                </a>
            </div>
            <div class="header-user text-end position-relative header-right col-md-6">
                <div class="user fs28 d-flex align-items-center justify-content-end">
                    <ion-icon name="person-circle"></ion-icon>
                    <?php
                    if (isset($member)) {
                        echo '<p class="fs14 m-0">Admin</p>';
                    }
                    ?>
                </div>
                <ul class="custom-menu rounded-3 border border-top-0 border-danger text-center">
                    <li class="custom-item px10-py20 border-bottom border-dark">
                        <a href="change-password.php" class="fw-light text-center">Thay đổi mật khẩu</a>
                    </li>
                    <li class="custom-item px10-py20">
                        <a href="logout.php" class="fw-light ">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>