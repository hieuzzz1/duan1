<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <!-- Thêm danh mục -->
                    <a href="index.php?act=add_post" class="add_hang_hoa mt-2 mb-4">
                        Thêm bài viết mới<i class="fa-solid fa-arrow-up-from-bracket btn"></i>
                    </a>
                    
                    <p><b>Bài viết</b></p>
                </div>
                <div class="bangdanhmuc">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">Mã post</th>
                                <th class="col-1">Tên bài viết</th>
                                <th class="col-1">Giới thiệu</th>
                                <th class="col-1">Image</th>
                                <th class="col-3">Nội dung 1</th>
                                <th class="col-3">Nội dung 2</th>
                                <th class="col-3">Nội dung 3</th>
                                <th class="col-3">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($list_post as $list=> $ldm):?>
                            <tr>
                                <th><?=$ldm['id']?></th>
                                <td ><?=$ldm['name_post']?></td>
                                <td><div class="an"><?=$ldm['gioithieu']?></div></td>
                                <td><img src="../upload/<?= $ldm['image'] ?>" alt="" height="80"></td>
                                <td><div class="an"><?=$ldm['noidung1']?></div></td>
                                <td><div class="an"><?=$ldm['noidung2']?></div></td>
                                <td><div class="an"><?=$ldm['noidung3']?></div></td>
                                <td>
                                    <!-- Sửa danh mục -->
                                    <a href="index.php?act=suapost&id=<?=$ldm['id']?>">
                                        <i class="fa-regular fa-pen-to-square mx-2 btn"></i>
                                    </a>
                                    <!-- Xóa danh mục -->

                                    <a href="#" class="openModalButton" data-bs-toggle="modal"
                                        data-bs-target="#customModal_<?php echo $ldm['id']; ?>">
                                        <i class="fa-regular fa-trash-can btn"></i>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="customModal_<?php echo $ldm['id']; ?>"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="customModalLabel_<?php echo $ldm['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5">Xác nhận xóa danh mục
                                                <i class="fa-regular fa-trash-can text-danger"></i> <br>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Hủy</button>
                                            <a href="index.php?act=xoapost&id=<?=$ldm['id'];?>">
                                                Xóa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Thêm mới danh mục -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Thêm mới hàng hóa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
            <form action="index.php?act=themdanhmuc" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tên hàng hóa</label>
                        <input type="text" class="form-control" name="tenhanghoa">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <input type="submit" name="themmoidm" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .an{
        display: block;
  	display: -webkit-box;
  	height: 16px*1.3*3;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 3;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;
    }
    .danhmucsp a:hover i {
        color: #DC3545;
    }

    .danhmucsp a:hover {
        color: #DC3545;
    }

    .add_hang_hoa {
        border: 1px solid #ccc;
        padding: 4px;
        padding-left: 15px;
        float: right;
        text-align: center;
        color: #000;
        border-radius: 3px
    }

    .table {
        text-align: center !important;
    }

    .table a:hover i {
        color: #DC3545 !important;
        cursor: pointer;
    }



    .table thead {
        background-color: #DC3545 !important;
        border: 0.2px solid #DC3545 !important;
        color: #ffffff;
        font-size: 15px;
    }



    .table thead th {
        border: none !important;
        font-weight: 300 !important;
    }

    .table tbody th {
        border: 0.1px solid #e6e6e6 !important;
        padding: 25px;
        font-weight: 400 !important;
        font-size: 14px;
    }

    .table tbody tr td {
        border: 0.1px solid #e6e6e6 !important;
        font-weight: 400 !important;
        font-size: 14px;
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