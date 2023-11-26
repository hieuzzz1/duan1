    
     <?php
        if(is_array($sanpham)){
            extract($sanpham);
        }
        
    ?>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <p>CẬP NHẬT SẢN PHẨM</p>
                </div>
                <div class="bangdanhmuc">
                    <form action="index.php?act=capnhatsanpham" method="post" enctype="multipart/form-data">
                               
                    <p>Tên danh mục</p>
                    <select name="danhmuc_sua" class="form-select form-select-lg mb-3" aria-label="Large select example">
                        <?php foreach ($listdanhmuc as $key => $ldt): ?>
                            <option value="<?=$ldt['id']?>">
                                <?=$ldt['tendm']?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    <input type="text" name="ten_sua" value="<?=$name?>">
                    <input type="text" name="gia_sp" value="<?=$price?>">
                    <input type="text" name="gia_sua" value="<?=$giasale?>">
                    <br>
                    <input type="file" name="anhsp"><img src="../upload/<?=$img?> " alt="" height='80'>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhatsp" value="CẬP NHẬT">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .bangdanhmuc input[type="text"]{
        width: 400px;
        margin-bottom: 30px;
        padding: 10px;
        outline: none;
        border: 0.3px solid #ccc;
        border-radius:3px;
    }
    .bangdanhmuc input[type="submit"]{
        width: 140px;
        margin-bottom: 30px;
        margin-left: 10px;
        padding: 10px;
        border: 0.3px solid #ccc;
        border-radius:3px;
        background-color: #fff
    }
    .bangdanhmuc input[type="submit"]:hover{
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