
<div class="container">
    <div class="row">
            <?php 
                include "./boxright.php";
            ?>
        <div class="col-md-9 homead ">
                <ul class="list-group  ">
                        <div class="list-group-item active dm" style="background-color:#ff9f96 ; border: red;">CẬP NHẬT MỚI</div>
                </ul>
                <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row marginboton10 table1">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;

                                    echo 
                                    '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$tendm.'</td>
                                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>  <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                
                                }
                            ?>
                            
                        </table>
                </div>
                <div class="row marginboton10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>



            
 
