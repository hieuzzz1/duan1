<!-- maincontent -->
<section class="mymaincontent my-3">

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/banner/banner1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/banner/banner2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/banner/banner3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
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
            <style>
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
            </style>
        </div>

        <!-- slideshow -->
        <div class="slider">
            <div class="row bg-white-carosel mt-4">
                <div class="large-12 columns mt-5">
                    <div class="owl-carousel owl-theme anhcrs">
                        <?php foreach ($sp_moi as $key => $value):?>
                        <div class="item">
                            <img src="././upload/<?=$value['img'] ?>" alt="...">
                            <p>
                                <?=$value['name']?>
                            </p>

                        </div>
                        <?php endforeach;?>
                    </div>
                    <style>
                        .bg-white-carosel {
                            border-radius: 5px;
                            background-color: #fff;
                            margin: auto;
                        }

                        .item img {
                            margin: 0 auto;
                            max-width: 70px;
                            border-radius: 20%;
                            background-color: #ffffff;
                        }

                        .anhcrs .item p {
                            text-align: center;
                        }
                    </style>

                </div>
            </div>
        </div>
        <!-- end-slideshow -->

        <?php
            if(isset($thongbao) && ($thongbao !="")){
                echo $thongbao;
            }
        ?>

        <!-- giỏ hàng - home -->
        <?php
            if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
        ?>
        <form action="index.php?act=giohang" method="post">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasRightLabel">GIỎ HÀNG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="row img mb-5">
                        <div class="col-3">
                            <a href="#">
                                <img src="././upload/<?=$value['img'] ?>" alt="sp">
                            </a>
                        </div>
                        <div class="col-6 sphome-ct">
                            <a href="#">
                                <div class="tensp">Kem chống nắng</div>
                            </a>
                            <div class="quantity">Số lượng</div>
                            <div class="number-input">
                                <input type="button" value="&#8722;"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                    class="minus"></input>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <input type="button" value="&#43;"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                    class="plus"></input>
                            </div>
                        </div>
                        <div class="col-3 xoa-gia">
                            <input type="submit" value="Xóa">
                            <div class="price-home mt-4">
                                300.000<span>₫</span>
                            </div>
                        </div>
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
        </form>


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

            .number-input input {
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



            input[class='plus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 100;
                font-size: 17px;
                font-family: "Font Awesome 5 Free";
                content: '\002B';
                transform: translate(-50%, -30%) rotate(180deg);
            }

            input[class='minus']::after {
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
    <!-- End modal -->
    <div class="product-content">
        <nav>
            <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kem chống nắng</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sữa rửa mặt</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nước tẩy
                    trang</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">

                <div class="row mx-5">

                    <?php foreach ($sp_moi as $key => $value):?>
                    <?php $giaTienFormatted2 = number_format($value['price'], 0, ',', '.') . '₫'; 
                              $giaTienFormatted3 = number_format($value['giasale'], 0, ',', '.') . '₫'; ?>
                    <div class="col-md-3 mt-3 mb-3 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body border-spp">
                                <div class="anhsppp">
                                    <a href="index.php?act=spchitiet&id=<?=$value['id']?>"><img
                                            src="././upload/<?=$value['img'] ?>" class="card-img-top" alt="...">
                                        <p class="card-title">
                                            <?=$value['name']?>
                                        </p>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">

                                        <div class="giasp mt-4">
                                            <?=$giaTienFormatted2?><span></span>

                                        </div>
                                        <span class="giasale text-decoration-line-through">
                                            <?=$giaTienFormatted3?>
                                        </span>
                                    </div>
                                    <?php
                                        if (isset($_SESSION['user'])){
                                            echo '<div class="col-md-2 mt-5 carrt yttt">
                                            <a href="index.php?act=giohang" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>';
                                        }else {
                                            echo '<div class="col-md-2 mt-5 carrt yttt"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-cart-shopping"></i></a></div>';
                                        }
                                        ?>
                                    <div class="col-md-2 mt-5 carrt">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

            </div>
        </div>
    </div>

    <div class="post-content">
        <nav>
            <div class="nav nav-tabs mt-4 baiviet" id="nav-tab" role="tablist">
                <p class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tin tức mới nhất</p>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="row mx-5">
                    <div class="col-md-3 my-4 d-flex justify-content-center">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <style>
        .mymaincontent {
            margin-top: 150px !important;
        }

        #nav-contact,
        #nav-profile,
        #nav-tabContent {
            background-color: #fff;
            border: none !important;
        }



        .baiposs {
            text-decoration: none;
            color: #000000;
        }

        .baiposs:hover p {
            color: #F08383;
        }

        .bv {
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        .baiviet p {
            color: #ffffff !important;
            background-color: #F08383 !important;
        }

        .nav button {
            color: #000000 !important;
        }


        .product-content img {
            max-width: 150px;
            height: 120px;
        }

        .product-content p {
            font-size: 17px;
            font-weight: 500;
        }

        .product-content a {
            text-decoration: none;
            color: black;
        }

        .product-content a:hover {
            color: #F08383;
        }

        .card {
            margin-top: 20px;
            margin-bottom: 20px;
            max-width: 230px;
            background-color: #fff;
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

        .border-spp {
            border: 1px solid #FFA2A2 !important;
            border-radius: 5px;
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
            background-color: #f09f9f;
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


</section>
<!-- endmaincontent -->