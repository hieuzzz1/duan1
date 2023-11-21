<div class="containersp">


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasRightLabel">GIỎ HÀNG</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row img mb-5">
                <div class="col-3">
                    <form action="" method="post">
                        <a href="#">
                            <img src="https://bizweb.dktcdn.net/thumb/compact/100/429/689/products/apple-iphone-12-mini-3-f12f8dba-9d92-4173-8b32-cc2ce74df353.png"
                                alt="sp">
                        </a>
                </div>
                <div class="col-6 sphome-ct">
                    <a href="#">
                        <div class="tensp">Kem chống nắng</div>
                    </a>
                    <div class="quantity">Số lượng</div>
                    <input type="number">

                </div>
                <div class="col-3 xoa-gia">
                    <input type="submit" value="Xóa">
                    <div class="price-home mt-4">
                        300.000<span>₫</span>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="dathang-home">
            <div class="row mb-3">
                <div class="col-6">Tổng tiền:</div>
                <div class="col-6">
                    <div class="giasp-home-dathang">
                        300.000<span>₫</span>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <input type="submit" value="Đặt Hàng">
                </div>
            </div>

        </div>

        <style>
            .dathang-home {
                height: 200px;
                padding: 20px;
            }

            .dathang-home input {
                width: 350px;
                height: 60px;
                background-color: #b85050;
                color: #fff;
                border-radius: 4px;
                border: none;
                font-size: 18px;
            }

            .dathang-home input:hover {
                border: 1px solid #b85050;
                background-color: #ffffff;
                color: #b85050;
            }

            .img {
                box-sizing: border-box;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            #offcanvasRight {
                max-width: 400px;
            }

            .xoa-gia {
                margin-left: -15px;
            }

            .xoa-gia input {
                font-size: 14px;
                border: 0.3px solid #ccc;
                margin-left: 10px;
                margin-top: 5px;
                color: #fff;
                background-color: #b85050;
            }

            .price-home {
                font-size: 13px;
                color: red;
            }

            .giasp-home-dathang {
                color: red;
                font-size: 18px;
                margin-left: 87px;
            }

            .quantity {
                font-size: 13px;
            }

            .sphome-ct .tensp {
                margin-top: 4px;
                margin-bottom: 10px;
                font-size: 14px;
            }

            .sphome-ct input {
                max-width: 40px;
                height: 20px;
                font-size: 14px;
            }

            .img img {
                max-width: 80px;
            }

            .img a {
                text-decoration: none;
                color: black;
            }

            .img:hover a {
                color: rgb(216, 113, 113);
            }
        </style>
    </div>

    <div class="dieuhuong mb-4">
        <div class="dhmenu mb-3">
            <div class="col-md-9 mt-3 mb-4 iconcsss">
                <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
                    class="fa-solid fa-chevron-right"></i> <span class="text-danger">Tất cả sản phẩm</span>
                <style>
                    .iconcsss i {
                        font-size: 14px;
                        color: #989898;
                        margin-left: 5px;
                        margin-right: 5px;
                    }

                    .iconcsss {
                        margin-left: -23px;
                    }
                </style>
            </div>
            <style>
                .dhmenu {
                    margin-left: 150px;
                }

                body {
                    background-color: #e6e6f1;
                }
            </style>
        </div>
        <h5 class="tt">TẤT CẢ SẢN PHẨM</h5>
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 product-content">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="row mx-5">
                        <div class="col-md-3 mt-3 mb-3 d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body border-spp">
                                    <div class="anhsppp">
                                        <a href="index.php?act=spchitiet"><img
                                                src="https://png.pngtree.com/png-clipart/20200206/ourlarge/pngtree-pink-fresh-cosmetics-set-elements-png-image_2132437.jpg"
                                                class="card-img-top" alt="...">
                                            <p class="card-title">
                                                Kem chống nắng
                                            </p>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">

                                            <div class="giasp mt-4">
                                                400.000<span>₫</span>

                                            </div>
                                            <span class="giasale text-decoration-line-through">200.000đd</span>
                                        </div>
                                        <?php
                                        if (isset($_SESSION['user'])){
                                            echo '<div class="col-md-2 mt-5 carrt yttt">
                                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>';
                                        }else {
                                            echo '<div class="col-md-2 mt-5 carrt yttt"><a href="index.php?act=themvaogiohang" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-cart-shopping"></i></a></div>';
                                        }
                                        ?>
                                        <div class="col-md-2 mt-5 carrt">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dm2">
                <ul class="list-group ">
                    <div class="list-group-item active dm" aria-current="true">Danh mục sản phẩm</div>
                    <div class="dm3">
                        <li class="list-group-item"><a href="">Kem chống nắng</a></li>
                        <li class="list-group-item"><a href="">Sữa rửa mặt</a></li>
                        <li class="list-group-item"><a href="">Sữa tắm</a></li>
                        <li class="list-group-item"><a href="">Nước tẩy trang</a></li>
                        <li class="list-group-item"><a href="">Nước hoa</a></li>
                        <li class="list-group-item"><a href="">Sữa tắm</a></li>
                        <li class="list-group-item"><a href="">Sữa tắm</a></li>
                    </div>
                </ul>
            </div>
        </div>
        <style>
            .dm2 {
                margin-top: 20px;
            }

            .container-anhspchitiet {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                justify-content: center;
            }

            .containersp {
                max-width: 1508px;
                margin-top: 160px;
            }

            .dm {
                background-color: #F08383 !important;
                border: 1px solid #F08383 !important;
                text-align: center;
                border-radius: 0% !important;
            }


            .dm2 ul li {
                border-radius: 0% !important;
            }


            .dm2 li a {
                text-decoration: none !important;
                color: black;
            }

            .dm2 li a:hover {
                color: #ff0000;
                opacity: 0.7;

            }

            .dm2 li:hover {
                transform: scale(1.01);
                color: #d51b2e;
                border-left: 2px solid #d51b2e;
                cursor: pointer;
            }

            .tt {
                background-color: #fff;
                padding: 20px 10px;
                text-align: center;
            }
        </style>

        <style>
            .product-content img {
                max-width: 170px;
                height: 170px;
            }

            .product-content p {
                font-size: 16px;
                font-weight: bold;
            }

            .product-content a {
                text-decoration: none;
                color: black;
            }

            .product-content a:hover {
                color: rgb(255, 221, 83);
            }

            .card {
                margin-top: 20px;
                margin-bottom: 20px;
                max-width: 230px;
                background-color: #fff8f9;
            }

            .card p {
                text-align: center;
                margin-top: 10px;
            }
        </style>
        <style>
            .anhsppp {
                display: flex;
                justify-content: center;
            }

            .yttt {
                margin-right: 10px;
            }

            .card-body img {
                position: relative;
                transition: transform 0.5s;
                cursor: pointer;
            }

            .card-body:hover img {
                transform: scale(1.05);
                cursor: pointer;
            }

            .card-body:hover .carrt {
                background-color: rgb(255, 83, 83);
                transform: scale(1.05);
            }

            .card-body:hover i {
                color: #fff;
            }


            .carrt {
                float: right;
                max-width: 40px;
                height: 30px;
                transition: 0.6s;
                border-radius: 15%;
            }

            .carrt i {
                position: absolute;

                line-height: 33px;
                margin-left: -4px;
                font-size: 20px;
                color: #d6d6d6;
            }

            .giasp {
                font-weight: 500;
                color: rgb(255, 65, 65);
                margin-top: 5px;
                font-size: 19px;
            }

            .giasale {
                color: #ada6a7;
                font-size: 14px;
            }
        </style>

    </div>
    <?php
            if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
        ?>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasRightLabel">GIỎ HÀNG</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row img mb-5">
                <div class="col-3">
                    <form action="" method="post">
                        <a href="#">
                            <img src="https://bizweb.dktcdn.net/thumb/compact/100/429/689/products/apple-iphone-12-mini-3-f12f8dba-9d92-4173-8b32-cc2ce74df353.png"
                                alt="sp">
                        </a>
                </div>
                <div class="col-6 sphome-ct">
                    <a href="#">
                        <div class="tensp">Kem chống nắng</div>
                    </a>
                    <div class="quantity">Số lượng</div>
                    <input type="number">

                </div>
                <div class="col-3 xoa-gia">
                    <input type="submit" value="Xóa">
                    <div class="price-home mt-4">
                        300.000<span>₫</span>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="dathang-home">
            <div class="row mb-3">
                <div class="col-6">Tổng tiền:</div>
                <div class="col-6">
                    <div class="giasp-home-dathang">
                        300.000<span>₫</span>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <input type="submit" value="Đặt Hàng">
                </div>
            </div>

        </div>

        <style>
            .dathang-home {
                height: 200px;
                padding: 20px;
            }

            .dathang-home input {
                width: 350px;
                height: 60px;
                background-color: #b85050;
                color: #fff;
                border-radius: 4px;
                border: none;
                font-size: 18px;
            }

            .dathang-home input:hover {
                border: 1px solid #b85050;
                background-color: #ffffff;
                color: #b85050;
            }

            .img {
                box-sizing: border-box;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            #offcanvasRight {
                max-width: 400px;
            }

            .xoa-gia {
                margin-left: -15px;
            }

            .xoa-gia input {
                font-size: 14px;
                border: 0.3px solid #ccc;
                margin-left: 10px;
                margin-top: 5px;
                color: #fff;
                background-color: #b85050;
            }

            .price-home {
                font-size: 13px;
                color: red;
            }

            .giasp-home-dathang {
                color: red;
                font-size: 18px;
                margin-left: 87px;
            }

            .quantity {
                font-size: 13px;
            }

            .sphome-ct .tensp {
                margin-top: 4px;
                margin-bottom: 10px;
                font-size: 14px;
            }

            .sphome-ct input {
                max-width: 40px;
                height: 20px;
                font-size: 14px;
            }

            .img img {
                max-width: 80px;
            }

            .img a {
                text-decoration: none;
                color: black;
            }

            .img:hover a {
                color: rgb(216, 113, 113);
            }
        </style>
    </div>
    <?php
        
            }else {
                echo '';
        ?>
    <?php } ?>
    <!-- end giỏ hàng home -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn cần nhập thông tin cá nhân để tiếp tục mua hàng tại shop! <a href="index.php?act=tkmuahang">Nhập
                        thông tin</a>
                </div>
            </div>
        </div>
    </div>