<div class="container top-top-dki">

    <div class="row mt-5 mb-5">
        <div class="col-8 bg-white css-bg-thanhtoan">
            <div class="row">
                <div class="col-6"><a href="index.php" class="mt-3 mb-3">HT&B Beautify</a></div>
                <div class="col-6"><i class="fa-regular fa-circle-check"></i> <a class="mt-3 mb-3 thankyou">Cảm
                        ơn bạn đã mua hàng</a></div>
            </div>


            <div class="row">
                <div class="col mt-3">
                    <p>Thông tin mua hàng</p>
                    <label>Email:</label><br>
                    <label>Số điện thoại:</label><br>
                    <label>Địa chỉ:</label><br>
                    <label>Ghi chú:</label><br>
                </div>

                <div class="col mt-3">
                    <p>Phương thức thanh toán</p>
                    <label>Thanh toán khi nhận hàng</label><br>
                    <label>Thanh toán online</label><br>
                </div>
            </div>
        </div>

        <div class="col-4 container-cttt-ctn">
            <div class="sidebar-header">
                <P>Đơn hàng của quý khách (HTB001)</P>
            </div>

            <div class="sidebar-cont">
                <div class="ctttdonhang">
                    <div class="row">
                        <div class="col-3">
                            <img src="./img//sanpham/sp1.png" alt="">
                        </div>
                        <div class="col-6">
                            <p>Kem chống nắng</p>
                        </div>
                        <div class="col-3 sb-ct-price">
                            <p>300.000đ</p>
                        </div>
                    </div>

                </div>

                <div class="cttt-price">
                    <div class="row">
                        <div class="col-5 cttt-price-text">
                            <p>Tạm tính</p>
                            <p>Phí vận chuyển</p>
                        </div>
                        <div class="col-7 cttt-price-gia">
                            <div class="ppp">
                                <p>300.000đ</p>
                            </div>

                            <p>30.000đ</p>
                        </div>
                        <div class="cttt-tongtatca">
                            <div class="row">
                                <div class="col-6 ttt-ten mt-2">
                                    <p>Tổng cộng</p>
                                </div>
                                <div class="col-6 thanhtien-tongtatca">
                                    <p>330.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<style>
    .top-top-dki {
        margin-top: 160px
    }
    .cttt-tongtatca {
        padding: 10px;
    }

    .cttt-tongtatca .thanhtien-tongtatca p {
        margin-left: 95px;
        color: #DC3545;
        font-size: 22px;
    }

    .cttt-tongtatca .ttt-ten p {
        font-size: 18px !important;
        color: #2f2f2f;
        margin-left: 28px;
        margin-bottom: 45px;
    }


    .cttt-price .cttt-price-text p {
        font-size: 15px !important;
        color: #868686;
        margin-left: 28px;
    }

    .cttt-price .cttt-price-gia p {
        font-size: 15px !important;
        color: #868686;
        font-weight: 300;
    }

    .cttt-price .cttt-price-gia p {
        margin-left: 169px;
    }

    .cttt-price .ppp p {
        margin-left: 162px !important;
    }

    .cttt-price {
        padding: 10px;
    }

    .sidebar-cont {
        padding: 10px;
    }

    .sidebar-cont .ctttdonhang {
        padding: 10px;
    }

    .sidebar-cont .ctttdonhang img {
        max-width: 100px;
    }

    .ctttdonhang p {
        margin-bottom: 0;
        font-size: 15px !important;
        color: #313131;
        margin-left: -20px;
        margin-top: 25px;
    }

    .ctttdonhang {
        border-bottom: 1px solid #ccc;
    }

    .ctttdonhang .sb-ct-price p {
        margin-bottom: 0;
        font-size: 15px !important;
        color: #868686;
        margin-left: 20px;
        margin-top: 40px;
    }

    .container-cttt-ctn {
        padding: 0 !important;
        margin: 0 !important;
        background-color: rgb(245, 245, 245);
        border: 1.5px solid #ccc;
    }

    .container-cttt-ctn .sidebar-header p {
        border-bottom: 1.5px solid #ccc;
        padding: 20px;
        margin-bottom: 0 !important;
    }


    .css-bg-thanhtoan {
        padding-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border: 1.5px solid #ccc;
        border-right: 0;
    }

    .css-bg-thanhtoan i {
        font-size: 40px;
        color: green;
    }

    .css-bg-thanhtoan .thankyou {
        color: #000;
        font-size: 28px;
        font-weight: 600;
    }

    .css-bg-thanhtoan a {
        font-size: 30px;
        text-decoration: none;
        color: #F08383;
        font-weight: 700;
        cursor: pointer;
    }

    .css-bg-thanhtoan a:hover {
        color: #a81927;
    }

    body {
        background-color: #e6e6f1;
    }

    .ngdung-tt p {
        font-size: 16px !important;
        margin-left: 7px;
    }

    .ngdung-tt i {
        margin-top: 5px;
        margin-left: 45px;
    }

    .ngdung-tt {
        display: flex;
        justify-content: center;
        padding: 0;
    }

    .container p {
        font-weight: 600;
        font-size: 18px;
    }



    .select-box {
        width: 380px;
        position: relative;
    }

    .select-option {
        position: relative;
    }

    /* .select-option ::placeholder {
        font-size: 18px !important;
    } */

    .select-option input {
        width: 408px;
        border-radius: 5px;
        color: black;
        cursor: pointer;
        font-size: 15px;
        padding: 8px;
        border: 1px solid #ccc;
        outline: 0 !important;
    }

    .select-option:after {
        content: "";
        border-top: 11px solid #8f8e8e;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        position: absolute;
        right: -10px;
        top: 50%;
        margin-top: -8px;
    }

    .content {
        background-color: #ffffff;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        color: #000;
        margin-top: 15px;
        width: 408px;
        padding: 7px;
        display: none;
        z-index: 999;
        margin-top: -2px;
    }

    .content .search input {
        width: 430px;
    }

    .content input {
        border: 1px solid #b3b3b3;
        outline: 0;
        width: 500px;
    }

    .options {
        margin-top: 10px;
        max-height: 200px;
        overflow-y: auto;
        padding: 0;
    }

    .options li {
        padding: 5px;
        cursor: pointer;
    }

    .options li:hover {
        background-color: rgb(236, 236, 236);
    }

    .select-box.active .content {
        display: block;
    }

    .select-box.active .select-option:after {
        transform: rotate(-180deg);
    }
</style>