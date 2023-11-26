<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <p>THÊM SẢN PHẨM</p>
                </div>
                <div class="bangdanhmuc">
                    <form action="index.php?act=add_sanpham" method="post" enctype="multipart/form-data">

                        <input type="text" name="tensp" placeholder="Tên sản phẩm">
                        <input type="file" name="anhsp">
                        <input type="text" name="gia_sale" placeholder="Giá sale">
                        <input type="text" name="gia_sp" placeholder="Giá gốc">

                        <h2>Chọn</h2>
                        <div>Danh mục</div>
                        <select name="iddm" class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <?php foreach($listdanhmuc as $ldm): ?>
                            <option value="<?=$ldm['id']?>">
                                <?=$ldm['tendm']?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                       

                        <div class="div"></div>
                        <input type="submit" name="add_sp" value="Thêm mới">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .bangdanhmuc input[type="text"] {
        width: 400px;
        margin-bottom: 30px;
        padding: 10px;
        outline: none;
        border: 0.3px solid #ccc;
        border-radius: 3px;
    }

    .bangdanhmuc input[type="submit"] {
        width: 140px;
        margin-bottom: 30px;
        margin-left: 10px;
        padding: 10px;
        border: 0.3px solid #ccc;
        border-radius: 3px;
        background-color: #fff
    }

    .bangdanhmuc input[type="submit"]:hover {
        color: #DC3545;
        border: 0.3px solid #DC3545;
    }

    .table {
        text-align: center !important;
    }

    .table a:hover {
        color: #DC3545 !important;
        cursor: pointer;
    }

    .table a {
        color: #000 !important;
    }

    .table thead {
        background-color: #f3f3f3 !important;
        border: 0.2px solid #e6e6e6 !important;
    }

    .table tbody {
        border: 0.2px solid #e6e6e6 !important;
    }

    .table thead th {
        border: none !important;
    }

    .table tbody th {
        border: 0.1px solid #e6e6e6 !important;
        padding: 25px;
    }

    .table tbody tr td {
        border: 0.1px solid #e6e6e6 !important;
    }

    .table tbody td {
        border: none !important;
    }

    .danhmucsp p {
        margin-top: 10px;
        margin-left: -10px;
        padding: 10px;
        font-size: 17px;
    }

    .be-content {
        padding: 10px;
    }

    .be-content .row {
        background-color: #ffffff;
    }
</style>