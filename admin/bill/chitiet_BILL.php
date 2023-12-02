<?php extract($load_one_bill);?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <title>Đơn Hàng</title>
                <div class="order-summary">
                    <div class="order-details customer-details">
                        <h2>Thông Tin Đơn Hàng và Khách Hàng</h2>
                        
                        <p><strong>Mã Đơn:</strong> <?=$madh?></p>
                        <p><strong>Tổng Tiền:</strong> <?=number_format($total, 0, ',', '.')?>₫</p>
                        <p><strong>Trạng thái:</strong>
                        <?php if($trangthai == 0) {?>
                            <span class="text-danger">Chưa xử lí</span>
                        <?php }elseif ($trangthai == 1) {?>
                            <span class="text-primary">Đã xử lí</span>
                        <?php }elseif ($trangthai == 2) {?>
                            <span class="text-warning">Đang giao hàng</span>
                        <?php }elseif ($trangthai == 3) {?>
                            <span class="text-success">Giao hàng thành công</span>
                        <?php }elseif ($trangthai == 4) {?>
                            <span class="text-danger"><strong>Hủy đơn hàng</strong></span>
                        <?php }?>

                        </p>


                        <p><strong>Phương Thức Thanh Toán:</strong> <?=$pttt?></p>
                        
                        <p><strong>Tên:</strong> <?=$bill_name?></p>
                        <p><strong>Địa Chỉ:</strong> <?=$bill_diachi?></p>
                        <p><strong>Số Điện Thoại:</strong> <?=$bill_phone?></p>
                        <p><strong>Email:</strong> <?=$bill_email?></p>

                        <form action="" method="post" class="form-inline">
                            <div class="form-group">
                            <select name="trangthai" id="input">
                                <option value="0">Chưa Xử lí</option>
                                <option value="1">Đã Xử lí</option>
                                <option value="2">Đang giao hàng</option>
                                <option value="3">Giao hàng thành công</option>
                                <option value="4">Hủy</option>
                            </select>
                            </div>
                        <button type="submit">Cập nhập</button>
                        </form>
                        
                    </div>

                    <div class="order-items">
                        <h2>Chi Tiết Đơn Hàng</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Giá</th>
                                </tr>
                            </thead>
                            <?php foreach ($load_one_cart as $key => $value) :?>
                            <tbody>
                                <tr>
                                    <td><?=$value['name']?></td>
                                    <td><img src="../upload/<?=$value['img']?>" alt="" height="70"></td>
                                    <td><?=number_format($value['giasp'], 0, ',', '.')?>₫</td>
                                    <td><?=$value['soluong']?></td>
                                    <td><?=number_format($value['thanhtien'], 0, ',', '.')?>₫</td>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<style>
    .form-group select {
        padding: 6px;
        margin-right: 5px;
    }
    button {
        padding: 5px;
        background-color: #F08383 !important;
        border: 1px solid #F08383!important;
        color: #FFFFFF!important;
    }
    button:hover {
        background-color: #fff!important;
        border: 1px solid #F08383!important;
        color: #F08383!important;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 20px;

    }

    .order-summary {
        padding: 20px;
        margin-bottom: 20px;
        background-color: #fff;
    }

    h2 {
        padding-bottom: 10px;
        color: #333;
    }

    .order-details,
    .order-items,
    .customer-details {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        margin-top: 10px;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        background-color: #f5f5f5;
    }
</style>