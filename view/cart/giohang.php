<!-- <div class="container">

    

    <h2>GIỎ HÀNG CỦA BẠN</h2>
    <div class="row container-cart mb-5 mt-3">
        <div class="col-7">
            <form action="" method="post">
                <div class="row container-carts">

                    <div class="col-3 v">
                        <img src="" alt="">
                    </div>
                    <div class="col-3 v">
                        <span>Kem chống nắng</span>
                    </div>
                    <div class="col-3 v">
                        <span>100.000đ</span>
                    </div>
                    <div class="col-3 v sb-btn">
                        <input type="submit" value="Xóa">
                    </div>

                </div>
            </form>
        </div>
    </div>

    <style>
        .v {
            display: flex;
            justify-content: center;
        }

        .v span {
            line-height: 160px;
        }

        .sb-btn input {
            margin-top: 70px;
        }

        .v input[type="submit"] {
            max-width: 40px;
            color: #fff;
            height: 30px;
            background-color: rgba(225, 61, 61, 0.852);
            border: none;
            border-radius: 1px;

        }

        .container-cart {
            background-color: #fff;

        }

        body {
            background-color: #F3F3F6;
        }


        .container-carts img {
            margin-top: 25px;
            max-width: 120px;
            height: 120px;
        }
    </style>

</div> -->

<div class="col mt-3">
    <a href="index.php" class="text-decoration-none text-dark uiui">Trang chủ</a> / <span class="text-danger">Giỏ
        hàng</span>
</div>
<style>
    .uiui {
        margin-left: 140px;
    }

    body {
        background-color: #F3F3F6;
    }
</style>
<div class="cart_section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <form action="index.php?act=thanhtoan" method="post">
                        <div class="cart_title">GIỎ HÀNG CỦA BẠN</div>
                        <div class="cart_items">
                            <ul class="cart_list">
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img
                                            src="http://localhost:82/DUAN1/img/sanpham/sp1.png" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Tên sản phẩm</div>
                                            <div class="cart_item_text">Kem chống nắng</div>
                                        </div>
                                        <div class="cart_item_quantity cart_info_col">
                                            <div class="cart_item_title">Số lượng</div>
                                            <div class="cart_item_text">1</div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Giá</div>
                                            <div class="cart_item_text">22000</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Tổng giá</div>
                                            <div class="cart_item_text">22000</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Tổng đơn:</div>
                                <div class="order_total_amount">22000</div>
                            </div>
                        </div>
                        <div class="cart_buttons"> <button type="submit" class="button cart_button_clear">Tiếp tục mua
                                hàng</button> <button type="submit" class="button cart_button_checkout">Mua
                                hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    body {
        background-color: #e6e6f1 !important;
    }

    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px
    }

    body {
        font-family: 'Rubik', sans-serif;
        font-weight: 400;
        background: #E0E0E0;
        color: #000000
    }

    ul {
        list-style: none;
        margin-bottom: 0px
    }

    .button {
        display: inline-block;
        background: #DC3545;
        border-radius: 5px;
        height: 48px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .button a {
        display: block;
        font-size: 18px;
        font-weight: 400;
        line-height: 48px;
        color: #FFFFFF;
        padding-left: 35px;
        padding-right: 35px
    }

    .cart_button_checkout:hover {
        background-color: #fff;
        color: #e4320e;
        border: #e4320e;
    }

    .cart_section {
        width: 100%;
        padding-top: 35px;
        padding-bottom: 111px;
    }

    .cart_title {
        font-size: 25px;
        font-weight: 500;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
    }

    .cart_items {
        margin-top: 8px
    }

    .cart_list {
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff
    }

    .cart_item {
        width: 100%;
        padding: 15px;
        padding-right: 46px
    }

    .cart_item_image {
        width: 133px;
        height: 133px;
        float: left
    }

    .cart_item_image img {
        max-width: 100%
    }

    .cart_item_info {
        width: calc(100% - 133px);
        float: left;
        padding-top: 18px
    }

    .cart_item_name {
        margin-left: 7.53%
    }

    .cart_item_title {
        font-size: 14px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.5)
    }

    .cart_item_text {
        font-size: 18px;
        margin-top: 35px
    }

    .cart_item_text span {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-right: 11px;
        -webkit-transform: translateY(4px);
        -moz-transform: translateY(4px);
        -ms-transform: translateY(4px);
        -o-transform: translateY(4px);
        transform: translateY(4px)
    }

    .cart_item_price {
        text-align: right
    }

    .cart_item_total {
        text-align: right
    }

    .order_total {
        width: 100%;
        height: 60px;
        margin-top: 30px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        padding-right: 46px;
        padding-left: 15px;
        background-color: #fff
    }

    .order_total_title {
        display: inline-block;
        font-size: 14px;
        color: rgba(0, 0, 0, 0.5);
        line-height: 60px
    }

    .order_total_amount {
        display: inline-block;
        font-size: 18px;
        font-weight: 500;
        margin-left: 26px;
        line-height: 60px
    }

    .cart_buttons {
        margin-top: 60px;
        text-align: right
    }

    .cart_button_clear {
        display: inline-block;
        border: none;
        font-size: 18px;
        font-weight: 400;
        line-height: 48px;
        color: rgba(0, 0, 0, 0.5);
        background: #FFFFFF;
        border: solid 1px #b2b2b2;
        padding-left: 35px;
        padding-right: 35px;
        outline: none;
        cursor: pointer;
        margin-right: 26px
    }

    .cart_button_clear:hover {
        border-color: #e4320e;
        color: #000000
    }

    .cart_button_checkout {
        display: inline-block;
        border: none;
        font-size: 18px;
        font-weight: 400;
        line-height: 48px;
        color: #FFFFFF;
        padding-left: 35px;
        padding-right: 35px;
        outline: none;
        cursor: pointer;
        vertical-align: top
    }
</style>