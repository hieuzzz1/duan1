<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row marginboton10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row marginboton10">
                        Tên Loại <br>
                        <input type="text" name="tendm" value="<?php if(isset($tendm)&&($tendm!=0)) echo $tendm; ?>">
                    </div>
                    <div class="row marginboton10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!=""))
                        echo  $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>