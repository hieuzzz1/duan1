<div class="container top-top-dki">

    <form action="index.php?act=donhangthanhcong" method="post">
        <div class="row mt-5 mb-5">
            <div class="col-8 bg-white css-bg-thanhtoan">
                <a href="index.php" class="mt-3 mb-3">HT&B Beautify</a>
                <div class="row">
                    <div class="col-6"> <!--  Thông tin khách hàng -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Thông tin nhận hàng</p>
                            </div>
                            <div class="col-6 ngdung-tt ">
                                <i class="fa-regular fa-user"></i>
                                <p>Tên người dùng</p>
                            </div>
                        </div>
                        <div class="thongtininput mb-2">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" placeholder="Số điện thoại">
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" placeholder="Địa chỉ">
                        </div>
                        <div class="select-box">
                            <div class="select-option">
                                <input type="text" placeholder="Thành phố" id="soValue" readonly name="">
                            </div>
                            <div class="content">
                                <div class="search">
                                    <input type="text" id="optionSearch" name="">
                                </div>
                                <ul class="options">
                                    <li>Hà Nội</li>
                                    <li>Thái Bình</li>
                                    <li>Hải Phòng</li>
                                    <li>Lạng Sơn</li>
                                    <li>Nam Định</li>
                                    <li>Phú Thọ</li>
                                    <li>Thái Nguyên</li>
                                    <li>Yên Bái</li>
                                    <li>Sơn La</li>
                                    <li>Điện Biên</li>
                                    <li>Lào Cai</li>
                                    <li>Hòa Bình</li>
                                    <li>Hải Dương</li>
                                    <li>Tuyên Quang</li>
                                    <li>Ninh Bình</li>
                                    <li>Thanh Hóa</li>
                                    <li>Nghệ An</li>
                                    <li>Hà Tĩnh</li>
                                </ul>
                            </div>
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="row ms-2 mt-3">
                            <div class="col">
                                <div class="vanchuyen thongtininput">
                                    <p>Vận chuyển</p>
                                    <input type="text" value="Giao hàng tận nơi">
                                </div>
                                <div class="thanhtoan mt-5 thongtininput">
                                    <p>Thanh toán</p>
                                    <input type="text" value="Thanh toán khi nhận hàng (COD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 container-cttt-ctn">
                <div class="sidebar-header">
                    <P>Đơn hàng của quý khách (1 sản phẩm)</P>
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
                        </div>
                    </div>

                    <div class="cttt-tongtatca">
                        <div class="row">
                            <div class="col-6 ttt-ten mt-2">
                                <p>Tổng cộng</p>
                                <a href="#"><i class="fa-solid fa-chevron-left"></i> Quay về giỏ hàng</a>
                            </div>
                            <div class="col-6 thanhtien-tongtatca">
                                <p>330.000đ</p>
                                <button type="submit">Đặt hàng</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>

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

    .cttt-tongtatca .thanhtien-tongtatca button {
        margin-left: 89px;
        color: #ffffff;
        background-color: #F08383;
        border: none;
        outline: none;
        margin-top: 25px;
        padding: 10px;
        border-radius: 4px;
        width: 100px;
    }

    .cttt-tongtatca .thanhtien-tongtatca button:hover {
        background-color: #fff;
        color: #DC3545;
        border: 1px solid #DC3545;
    }

    .cttt-tongtatca .ttt-ten p {
        font-size: 18px !important;
        color: #2f2f2f;
        margin-left: 28px;
        margin-bottom: 45px;
    }

    .cttt-tongtatca .ttt-ten a {
        font-size: 15px !important;
        color: #2f2f2f;
        margin-left: 28px;
        text-decoration: none;
        margin-top: 30px !important;
    }

    .cttt-tongtatca .ttt-ten a:hover {
        color: #DC3545;
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
        border-bottom: 1px solid #ccc;
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
        padding-bottom: 200px;
        padding-left: 20px;
        padding-right: 20px;
        border: 1.5px solid #ccc;
        border-right: 0;
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

    .thongtininput input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #ccc;
    }

    .thongtininput textarea {
        width: 100%;
        padding: 5px 10px;
        height: 60px;
        outline: none;
        border: 1px solid #ccc;
        color: #6b6b6b;
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

<script>
    const selectBox = document.querySelector('.select-box');
    const selectOption = document.querySelector('.select-option');
    const soValue = document.querySelector('#soValue');
    const optionSearch = document.querySelector('#optionSearch');
    const options = document.querySelector('.options');
    const optionsList = document.querySelectorAll('.options li');


    selectOption.addEventListener('click', function () {
        selectBox.classList.toggle('active');
    });
    optionsList.forEach(function (optionsListSingle) {
        optionsListSingle.addEventListener('click', function () {
            text = this.textContent;
            soValue.value = text;
            selectBox.classList.remove('active');
        })
    });

    optionSearch.addEventListener('keyup', function () {
        var filter, li, i, textValue;
        filter = optionSearch.value.toUpperCase();
        li = options.getElementsByTagName('li');
        for (i = 0; i < li.length; i++) {
            liCount = li[i];
            textValue = liCount.textContent || liCount.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = '';

            }
            else {
                li[i].style.display = 'none';
            }

        }
    })
</script>