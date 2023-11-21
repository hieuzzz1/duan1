<div class="container margin-fixeeed">
    <div class="col-md-9 mt-3 mb-4 iconcsss">
        <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
            class="fa-solid fa-chevron-right"></i> <span class="text-danger">Sản phẩm
            chi tiết</span>
        <style>
            .margin-fixeeed {
                margin-top: 160px;
            }

            .iconcsss i {
                font-size: 14px;
                color: #989898;
                margin-left: 5px;
                margin-right: 5px;
            }
        </style>
        <style>
            input[type="number"] {
                -webkit-appearance: textfield;
                -moz-appearance: textfield;
                appearance: textfield;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
            }

            .number-input {
                border: 1px solid #ccc;
                display: inline-flex;
            }

            .number-input,
            .number-input * {
                box-sizing: border-box;
            }

            .number-input button {
                outline: none;
                -webkit-appearance: none;
                background-color: transparent;
                border: none;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 20px;
                cursor: pointer;
                margin: 0;
                position: relative;
            }



            button[class='plus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 100;
                font-size: 17px;
                font-family: "Font Awesome 5 Free";
                content: '\002B';
                transform: translate(-50%, -30%) rotate(180deg);
            }

            button[class='minus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 500;
                font-size: 20px;
                font-family: "Font Awesome 5 Free";
                content: '\2212';
                transform: translate(-50%, -30%) rotate(180deg);
            }



            .number-input input[type=number] {
                font-family: sans-serif;
                max-width: 50px;
                padding: .5rem;
                border: solid #ccc;
                border-radius: 0%;
                border-width: 0 1px;
                font-size: 18px;
                height: 30px;
                text-align: center;
            }
        </style>
    </div>
    <div class="row mb-5 boxctiet1">
        <div class="col-md-5">
            <style>
                .slides img {
                    display: none;
                }

                .slides img.active {
                    display: block;
                }

                .slides img {
                    width: 350px;
                    margin: 0 auto;
                }

                .thumbnail {
                    max-width: 50px;
                    height: auto;
                    cursor: pointer;
                    margin-left: 25px;
                }

                .thumbnails {
                    display: flex;
                    justify-content: center;
                    margin: 10px;
                }

                .thumbnails img {
                    border: 1px solid rgb(209, 209, 209);
                    max-width: 80px;
                }

                .cart {
                    width: 400px;
                    height: 110px;
                    margin-top: 18px;
                    border: 0.1px solid #F08383;
                    border-radius: 10px;
                }

                .boxkm {
                    margin-top: 9px;
                    display: flex;
                    justify-content: center;
                    font-size: 18px;
                    line-height: 40px;
                    margin-bottom: 5px;
                    width: 170px;
                    height: 40px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    font-weight: 600;
                    background-color: #F08383;
                    color: #fff;
                    margin-left: 10px;
                }

                .boxkm span {
                    font-size: 15px
                }

                .cart p {
                    margin-bottom: 0px;
                    margin-left: 10px;
                    font-weight: 300;
                    color: #555555;
                }

                * {
                    box-sizing: border-box;
                }

                .cart .textkm {
                    margin-bottom: 10px;
                }

                .cart .textkm span {
                    color: #F08383;
                    font-size: 17px;
                }

                .soluong input {
                    outline: none;
                    border-radius: 5px;
                    border: 0.5px solid #ccc;
                    width: 150px;
                    text-align: center;
                    height: 30px;
                    color: #000000;
                }

                .btt11 button {
                    border: 1px solid #ffffff;
                    padding: 10px;
                    background-color: #FFA2A2;
                    color: #fff;
                    border-radius: 5px;
                    font-size: 15px;
                }

                .btt22 button {
                    border: none;
                    padding: 10px;
                    background-color: #fff;
                    color: #F08383;
                    border-radius: 5px;
                    font-size: 15px;
                    border: 1px solid #FFA2A2;
                    margin-left: 40px;
                    margin-top: 1px;
                    height: 48px;
                }


                .btt11 button:hover {
                    border: 1px solid #FFA2A2;
                    background-color: #ffffff;
                    color: #F08383;
                    border-radius: 5px;
                }

                .btt22 button:hover {
                    background-color: #FFA2A2;
                    color: #ffffff;
                    border-radius: 5px;
                }

                .btt11 button {
                    width: 250px;
                    height: 50px;
                }

                .boxtuvan {
                    background-color: #F08383;
                    padding: 10px;
                    color: #fff;
                    border-radius: 5px;
                    width: 330px;
                    text-align: center;
                    margin-left: -62px;
                }

                .boxctiet {
                    margin-left: 60px;
                }

                .boxctiet1 {
                    background-color: #FFF;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 20px;
                    padding-bottom: 20px;
                }

                body {
                    background-color: #E7EEF6;
                }

                .quantity-chitietsp {
                    margin-left: -40px;
                }
            </style>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    let currentSlide = 0;
                    const slides = document.querySelectorAll('.slides img');
                    const thumbnails = document.querySelectorAll('.thumbnail');

                    function showSlide(index) {
                        slides.forEach(slide => slide.classList.remove('active'));
                        slides[index].classList.add('active');
                        currentSlide = index;
                    }

                    thumbnails.forEach(thumbnail => {
                        thumbnail.addEventListener('click', function () {
                            const index = parseInt(this.getAttribute('data-index'));
                            showSlide(index);
                        });
                    });

                    // Hiển thị ảnh đầu tiên khi trang được tải
                    showSlide(currentSlide);
                });


            </script>
            <div class="slideshow-container">
                <div class="slides">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                        alt="Ảnh 1">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.jpg?v=1623565125390"
                        alt="Ảnh 2">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-5.png?v=1623565259483"
                        alt="Ảnh 3">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-ba-c.jpg?v=1623565283510"
                        alt="Ảnh 4">
                </div>
                <div class="thumbnails">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                        alt="Ảnh nhỏ 1" class="thumbnail" data-index="0">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.jpg?v=1623565125390"
                        alt="Ảnh nhỏ 2" class="thumbnail" data-index="1">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-5.png?v=1623565259483"
                        alt="Ảnh nhỏ 3" class="thumbnail" data-index="2">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-ba-c.jpg?v=1623565283510"
                        alt="Ảnh nhỏ 4" class="thumbnail" data-index="3">
                </div>
            </div>

        </div>
        <div class="col-md-6 boxctiet">
            <h4>Tên sản phẩmm</h4>
            <div class="mb-2 mt-2">Thương hiệu: <b class="me-2">Kem chống nắng</b> Mã sản phẩm: <b>HT009</b> <br></div>
            <div><b class="fs-4 text-danger me-2">300.000đ</b> <b class="fw-lighter">Giá niêm yết:</b> <b
                    class="fw-light text-decoration-line-through">345.000đ</b>
            </div>

            <div class="cart">
                <div class="boxkm">
                    <span><i class="fa-solid fa-gift"></i> Khuyến mãi ưu đãi</span>
                </div>
                <div class="textkm">
                    <p><span>&#8226;</span> Tặng ngay ưu đãi cực sốc</p>
                    <p><span>&#8226;</span> Tặng phiếu mua sắm 500.000đ</p>
                </div>
            </div>
            <div class="row mt-2 mb-3 chu-tieude">
                <div class="col-md-6 mt-2 mb-2">
                    <div class="soluong">
                        <h6>Loại hàng</h6>
                        <label class="radio"> <input type="radio" name="size" value="S" checked> <span>Bản
                                thường</span></label>
                        <label class="radio"> <input type="radio" name="size" value="M"> <span>Bản plus</span></label>
                        <br>
                        <label class="radio mt-2"> <input class="single-choice-checkbox" type="checkbox" name="size"
                                value="L">
                            <span>30ml</span></label>
                        <label class="radio"> <input class="single-choice-checkbox" type="checkbox" name="size"
                                value="XL">
                            <span>150ml</span></label>
                        <label class="radio"> <input class="single-choice-checkbox" type="checkbox" name="size"
                                value="XXL">
                            <span>200ml</span></label>
                    </div>
                </div>
                <div class="col-md-6 quantity-chitietsp">
                    <div class="soluong mt-2 mb-2">
                        <h6>Số lượng</h6>
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                        </div>
                    </div>

                </div>
            </div>



            <div class="row btn-muahang mt-2 mb-2">
                <div class="col-4 btt11"><button>THÊM VÀO GIỎ HÀNG <br>
                    </button></div>
                <div class="col-3 btt22"><button>MUA NGAY <br></button></div>
                <style>
                    label.radio {
                        cursor: pointer
                    }

                    label.radio input {
                        position: absolute;
                        top: 0;
                        left: 0;
                        visibility: hidden;
                        pointer-events: none
                    }

                    label.radio span {
                        padding: 1px 9px;
                        border: 1px solid#ccc;
                        display: inline-block;
                        color: #8c8c8c;
                        border-radius: 3px;
                    }

                    label.radio input:checked+span {
                        border-color: #F08383;
                        background-color: #ffffff;
                        color: #F08383
                    }
                </style>
                <script>
                    // Lấy tất cả các checkbox cùng một tên
                    var checkboxes = document.querySelectorAll('.single-choice-checkbox');

                    // Thêm sự kiện 'change' cho mỗi checkbox
                    checkboxes.forEach(function (checkbox) {
                        checkbox.addEventListener('change', function () {
                            // Nếu checkbox được chọn, hủy chọn tất cả các checkbox khác
                            if (this.checked) {
                                checkboxes.forEach(function (otherCheckbox) {
                                    if (otherCheckbox !== checkbox) {
                                        otherCheckbox.checked = false;
                                    }
                                });
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="row chitiettexxt mb-4">
        <div class="col-md-9">
            <h4>Chi tiết sản phẩm</h4>
            <hr>
            <p>Thông tin sản phẩm
                [SKINAVIS OFFICIAL] Kem chống nắng Skinavis - Skinavis sunscreen defense – Phổ rộng, không lên tone da
                Kem chống nắng Skinavis defense là kem chống nắng phổ rộng, giúp bảo vệ da khỏi tác hại từ tia UV ánh
                nắng mặt trời.
                <br><br>
                Ưu điểm:
                Kem chống nắng dạng Cream giúp bổ sung độ ẩm cho da nhưng lại khô thoáng, không gây bí da.
                Không chứa thành phần tạo màu, an toàn với da. Kem chống nắng không màu giúp bạn có cảm giác căng bóng
                thay vì có màu như phấn trang điểm. Phù hợp với những bạn muốn giữ màu da tự nhiên hoặc make up thêm để
                tạo cá tính riêng.
                <br><br>
                Chỉ định:
                Da thường, da không có nhiều mụn viêm mủ.
                Phù hợp với cả da dầu, da khô, da hỗn hợp
                <br><br>
                Hướng dẫn sử dụng:
                Thoa trước khi tiếp xúc với ánh nắng 5-10 phút. Lấy lượng kem vừa đủ , chấm nhiều điểm và vỗ đều bằng ba
                ngón tay 30-45 giây để kem chống nắng được tán đều lên mặt.
                <br><br>
                Lưu ý: Không nên thoa khi da đang quá ướt.
                Định lượng: 1,5 – 2 đốt ngón tay cho vùng mặt. Vùng cổ: 0,5-1 đốt ngón tay ( FTU)
                Nên thoa dặm lại 2-4 lần / ngày tùy vào công việc của bạn ở trong nhà mát hoặc đi lại ngoài trời,
                <br><br>
                Dung tích: 70ml
                <br><br>
                Thành phần chính:
                Avobenzone: Butyl Methoxydibenzoylmethane : Màng lọc UVA1 ( UVA bước sóng dài gây lão hóa da )
                Octocrylene: Màng lọc UVC, UVB, UVA2
                Ethylhexyl Methoxycinnamate: Màng lọc UVB
                Ethylhexyl Salicylate: Màng lọc UVB
                Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine: Màng lọc UVB và UVA2
                <br><br>

            </p>
        </div>
        <div class="col-md-3 okk">
            <div class="nav nav-tabs mt-4 oko" id="nav-tab" role="tablist">
                <p class="nav-link active">Sản phẩm liên quan</p>
                <div class="row tintucc">
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đâyk
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                </div>
                <style>
                    .chitiettexxt {
                        padding: 20px;
                        background-color: #fff;
                    }
                </style>


            </div>
            <div class="nav nav-tabs mt-4 oko" id="nav-tab" role="tablist">
                <p class="nav-link active">Sản phẩm liên quan</p>
                <div class="row tintucc">
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đâyk
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                </div>
                <style>
                    .chitiettexxt {
                        padding: 20px;
                        background-color: #fff;
                    }
                </style>

            </div>
            <style>
                .okk {
                    margin-top: -25px !important;
                }

                .tintucc img {
                    max-width: 90px;
                    height: auto;
                }

                .tintucc a {
                    text-decoration: none;
                    color: black;
                }

                .tintucc {
                    padding: 10px;
                }

                .oko p {
                    background-color: #FFA2A2 !important;
                    color: #fff !important;
                    border-radius: 5px !important;
                    width: 500px;
                    border: none !important;
                }

                .oko {
                    background-color: #f9f9f9;
                }
            </style>
        </div>
    </div>




</div>


</div>