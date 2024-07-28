<?php
include "includes/header.php";

$id = '';

if (empty($_SESSION['cart'])) {
    echo "<script>alert('Giỏ hàng rỗng')</script>";
    echo "<script type='text/javascript'> document.location ='../../cua-hang'; </script>";
}





if (isset($_POST['btn-check-out'])) {
    $fullname_checkout = $_POST['O_Names'];
    $phone_checkout = $_POST['O_Phone'];
    $email_checkout = $_POST['O_Email'];
    $address_checkout = $_POST['O_Address'] ;
    $note_checkout = $_POST['O_Content'] ? $_POST['O_Content'] : '';
    switch ($_POST['MT_DeliveryId']) {
        case 1:
        case 2:
            $ship = 0;
            break;
        case 3:
            $ship = 30000;
            break;
        case 4:
            $ship = 25000;
            break;
        default:
            $ship = 20000;
            break;
    }
    $payment_method = ($_POST['MT_PaymentId'] == '1') ? 'Giao hàng trả tiền' : 
    (($_POST['MT_PaymentId'] == '2') ? 'Chuyển khoản ngân hàng' : 
                                       'Dịch vụ thu nợ');



    $sql = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
    $temp = 0;
    // $ship = $result['ship_price'];
    // $total = $result['prod_current_price'] * $_SESSION['cart'][$result['prod_id']];
    while ($result = mysqli_fetch_array($sql)) {
        $temp += $result['prod_current_price'] * $_SESSION['cart'][$result['prod_id']];
        
    }
    $total = $temp + $ship;
    $insert_order = mysqli_query($con, "INSERT INTO tbl_order (order_name, order_phone, order_email, order_total, order_address, order_note,order_cust_id) VALUES ('$fullname_checkout', '$phone_checkout', '$email_checkout', '$total', '$address_checkout', '$note_checkout','$id')");
    $insert_id = mysqli_insert_id($con);
    $insert_string = "";
    mysqli_data_seek($sql, 0);
    while ($result = mysqli_fetch_array($sql)) {
        $insert_string .= "('$insert_id', '" . $result['prod_id'] . "', '" . $_SESSION['cart'][$result['prod_id']] . "', '" . $result['prod_current_price'] . "', '$payment_method'),";
    }
    // dd($insert_string);exit();
    $insert_string = rtrim($insert_string, ',');
    $insert_order_detail = mysqli_query($con, "INSERT INTO tbl_order_detail (order_id, prod_id, quantity, price, payment_name) VALUES $insert_string");
    // dd($insert_id);
    // dd($insert_order_detail);exit();
    if ($insert_order_detail) {
        echo "<script>alert('Mua hàng thành công')</script>";
        unset($_SESSION['cart']);
        $_SESSION['orderid'] = $insert_id;
        echo "<script type='text/javascript'> document.location ='/hoan-thanh.html'; </script>";
        
    }


}

?>
<div class="breadcrumb">
    <div class="container">
        <ol itemscope="" itemprop="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><i class="fa fa-home" aria-hidden="true"></i>
                    <span itemprop="name">Trang chủ</span></a>
                <meta itemprop="position" content="1">
            </li>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="">
                    <span itemprop="name">Thanh to&#225;n</span></a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>


<div class="container">






















    <div class="boxbody_tbl" id="border-radius-1-padding-1">
        <div class="boxbody_top">
            <span>
                <h1>Th&#244;ng tin vận chuyển v&#224; thanh to&#225;n</h1>
            </span>
        </div>
        <div class="boxbody_body">
            <form action="/thong-tin-van-chuyen.html" method="post">
                <div class="row mt-1">
                    <div class="col-lg-4 order-lg-2 p-0 pl-0 pl-lg-2">
                        <div class="card">
                            <div class="card-header">Giỏ h&#224;ng (<?php echo count($_SESSION['cart'])?> Sản phẩm)</div>
                            <div class="card-body">
                                <table class="table listProduct">
                                    <?php $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                                    $temp = 0;
                                    $ship = 0;
                                    if (!empty($query)) {
                                        while ($row = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td class="tdproduct px-0" width="25%">
                                                    <img src="../../admin/<?php echo $row['prod_thumb'] ?>"
                                                        alt="<?php echo $row['prod_name'] ?>" style="margin-right:0" />
                                                </td>
                                                <td>
                                                    <a href="../../san-pham/<?php echo $row['prod_id'] ?>" class="text-primary">
                                                        <?php echo $row['prod_name'] ?>
                                                    </a><br />
                                                    <?php echo $row['prod_current_price'] ?>x
                                                    <?php echo $_SESSION['cart'][$row['prod_id']] ?> =
                                                    <?php echo number_format($row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']], 0, '.', '.') ?>
                                                    đ
                                                </td>

                                            </tr>
                                            <?php
                                            $total = $row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']];

                                            $temp += $total;

                                        }
                                    } ?>
                                </table>
                                <hr />
                                <p>Tổng: <b class="float-right"><span
                                            class="text-right text-danger" id="temp"><?php echo number_format($temp, 0, '.', '.') ?>
                                            đ</span></b></p>
                                <div class="clear"></div>
                                <p>Ph&#237; vận chuyển: <b class="float-right text-danger"><span class="text-right"
                                            id="vlship"></span></b></p>
                                <div class="clear"></div>
                                <p>Tổng tiền:<b class="float-right text-danger"><span class="text-right"
                                            id="vltotal"></span></b></p>
                                <input id="O_SumMoney" name="O_SumMoney" type="hidden" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-1 p-0 pr-0 pr-lg-2">
                        <div class="validation-summary-valid text-danger" data-valmsg-summary="true" style="color:red">
                            <ul>
                                <li style="display:none"></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-header">Thông tin người đặt hàng</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Họ v&#224; t&#234;n <span
                                                    class="text-danger">(*)</span></label><br />
                                            <span class="form-control-wrap">
                                                <input class="form-control" id="O_Names" name="O_Names"
                                                    placeholder="Họ và tên" required="required" type="text" value="" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Điện thoại <span class="text-danger">(*)</span></label><br />
                                            <span class="form-control-wrap">
                                                <input class="form-control" id="O_Phone" name="O_Phone"
                                                    placeholder="Điện thoại" required="required" type="text" value="" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label><br />
                                            <span class="form-control-wrap">
                                                <input class="form-control" id="O_Email" name="O_Email"
                                                    placeholder="Email" type="email" value="" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Địa chỉ</label><br />
                                            <span class="form-control-wrap">
                                                <input class="form-control" id="O_Address" name="O_Address"
                                                    placeholder="Địa chỉ" type="text" value="" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Lời nhắn</label><br />
                                            <span class="form-control-wrap">
                                                <textarea class="form-control" cols="70" id="O_Content" name="O_Content"
                                                    placeholder="Lời nhắn" rows="8" style="width:100%">
</textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">Phương thức giao h&#224;ng</div>
                            <div class="card-body delivery">
                                <ul>
                                    <li class="li-dname">
                                        <p class="dname"><input id="MT_DeliveryId" name="MT_DeliveryId"
                                                required="required" type="radio" value="1" /> Nhận H&#224;ng Tại Shop
                                            Của Ch&#250;ng T&#244;i - <span id="vlship1"
                                                style="display:inline;">0</span> VNĐ</p>
                                        <p>
                                        <p>C&oacute; cơ hội khuyến m&atilde;i</p>
                                        </p>
                                    </li>
                                    <li class="li-dname">
                                        <p class="dname"><input id="MT_DeliveryId" name="MT_DeliveryId"
                                                required="required" type="radio" value="2" /> Giao H&#224;ng Trực Tiếp
                                            Tại Nh&#224; - <span id="vlship2" style="display:inline;">0</span> VNĐ</p>
                                        <p>Đơn Hàng Đạt Mức 350.000d Sẽ Được Free Ship ( trong bán kính 15 km )</p>
                                    </li>
                                    <li class="li-dname">
                                        <p class="dname"><input id="MT_DeliveryId" name="MT_DeliveryId"
                                                required="required" type="radio" value="3" /> Chuyển Ph&#225;t Nhanh -
                                            <span id="vlship3" style="display:inline;">30.000</span> VNĐ</p>
                                        <p>Áp Dụng Khách Hàng Ở Tỉnh , Thành Khác</p>
                                    </li>
                                    <li class="li-dname">
                                        <p class="dname"><input id="MT_DeliveryId" name="MT_DeliveryId"
                                                required="required" type="radio" value="4" /> Chuyển Ph&#225;t Bằng
                                            Đường Bộ - <span id="vlship4" style="display:inline;">25.000</span> VNĐ</p>
                                        <p>Áp Dụng Khách Hàng Ở Tỉnh , Thành Khác</p>
                                    </li>
                                    <li class="li-dname">
                                        <p class="dname"><input id="MT_DeliveryId" name="MT_DeliveryId"
                                                required="required" type="radio" value="5" /> Giao H&#224;ng Tại
                                            Nh&#224; V&#224; Chịu Ph&#237; Vận Chuyển - <span id="vlship5"
                                                style="display:inline;">20.000</span> VNĐ</p>
                                        <p>Chi Phí Thêm , Khi Đơn hàng Nhỏ Hơn Mức Quy Định rất nhiều, thì quý khách
                                            vui lòng cộng thêm chi phí này</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">Phương thức thanh to&#225;n</div>
                            <div class="card-body payment">
                                <ul>
                                    <li>
                                        <p class="pname"><input id="MT_PaymentId" name="MT_PaymentId"
                                                required="required" type="radio" value="3" /> Dịch vụ thu tiền hộ
                                            c&#242;n nợ</p>
                                        <p>Áp dụng cho khách hàng ở Hải Phòng , Hà Nội , Đà Nẵng , Hồ Chí Minh</p>
                                    </li>
                                    <li>
                                        <p class="pname"><input id="MT_PaymentId" name="MT_PaymentId"
                                                required="required" type="radio" value="2" /> Chuyển khoản qua ng&#226;n
                                            h&#224;ng</p>
                                        <p>
                                        <p>&Aacute;p dụng cho kh&aacute;ch h&agrave;ng ở c&aacute;c tỉnh th&agrave;nh
                                            Việt Nam</p>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pname"><input id="MT_PaymentId" name="MT_PaymentId"
                                                required="required" type="radio" value="1" /> Tiền mặt</p>
                                        <p>Áp dụng cho khách hàng ở Hải Phòng</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p align="center"><button type="submit" value="Đặt hàng" class="button" name="btn-check-out">X&#225;c nhận</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="clear"></div>
<?php include 'includes/footer.php' ?>
<script>
  $(document).ready(function(){
    $('input[type="radio"]').change(function(){
        if($(this).is(':checked')){
            var spanValue = $(this).siblings('span').text();
            var spantemp = parseFloat($('#temp').text().replace(/\./g, '').replace(',', '.')); // Lấy giá trị của spantemp và chuyển đổi thành số
          
            // Kiểm tra xem spanValue và spantemp có phải là số hợp lệ hay không trước khi thực hiện phép cộng
            if (!isNaN(parseFloat(spanValue)) && !isNaN(spantemp)) {
                var total = parseFloat(spanValue.replace(/\./g, '').replace(',', '.')) + spantemp;
                var formattedNumber = total.toLocaleString('vi-VN');
                $('#vlship').text(spanValue+ " đ")
                $('#vltotal').text(formattedNumber + " đ");
            } else {
                console.log("Invalid input");
            }
            // Bạn có thể thực hiện các hành động khác ở đây dựa trên lựa chọn đã chọn
        }
    });
});

</script>