<?php
session_start();
    include "../admin/header.php";
    include "../admin/footer.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    $listdanhmuc=loadall();
    $listdungtich=loadall_dungtich();
    if ( ( isset( $_GET[ 'act' ] ) ) && ( $_GET[ 'act' ] != '' ) ){
        $act = $_GET[ 'act' ];
        switch ($act) {
            case "list_danhmuc":
                $listdanhmuc=loadall();
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case "themdanhmuc":
                if(isset($_POST['themmoidm'])&&($_POST['themmoidm'])){
                    $tenhanghoa=$_POST['tenhanghoa'];
                    insert_danhmuc($tenhanghoa);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';

                }
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case 'xoadanhmuc':
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_danhmuc($_GET['id']);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';
                }
                $listdanhmuc=loadall();
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case 'update_dmuc':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tendm=$_POST['tenhanghoa'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tendm);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';
                }
                $listdanhmuc=loadall();
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone($_GET['id']);
                }
                include "../admin/danhmuc/update_dmuc.php";
                break;




            case 'list_dungtich':
                $listdungtich=loadall_dungtich();
                include "../admin/danhmuc/list_dungtich.php";
                break;
            
            case "themdungtich":
                if(isset($_POST['themmoidungtich'])&&($_POST['themmoidungtich'])){
                    $tendungtich=$_POST['tendungtich'];
                    insert_khoiluong($tendungtich);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_dungtich">';

                }
                include "../admin/danhmuc/list_dungtich.php";
                break;

            case 'update_dungtich':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tendt=$_POST['tendt'];
                    $id=$_POST['id'];
                    update_dungtich($id,$tendt);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_dungtich">';
                }
                $listdungtich=loadall_dungtich();
                include "../admin/danhmuc/list_dungtich.php";
                break;
            case 'suadungtich':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $kl=loadone_dungtich($_GET['id']);
                }
                include "../admin/danhmuc/update_dtich.php";
                break;
            case 'xoadungtich':
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_dungtich($_GET['id']);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_dungtich">';
                }
                $listdungtich=loadall_dungtich();
                include "../admin/danhmuc/list_dungtich.php";
                break;
            // End danh mục
            

            //Hàng hóa
            case "list_hanghoa":
                $listsanpham=loadAll_sanpham();
                include "../admin/sanpham/list_hanghoa.php";
                break;
            case "sua_sanpham":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadOne_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall();
                include "../admin/sanpham/update_sanpham.php";
                break;
            case "capnhatsanpham":
                if(isset($_POST['capnhatsp'])&&($_POST['capnhatsp'])){
                    $id=$_POST['id'];
                    $danhmuc_sua=$_POST['danhmuc_sua'];
                    $ten_sua=$_POST['ten_sua'];
                    $gia_sp=$_POST['gia_sp'];
                    $gia_sua=$_POST['gia_sua'];
                    $hinh=$_FILES['anhsp']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES['anhsp']['name']);
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                    update_sanpham($id,$danhmuc_sua,$ten_sua,$gia_sp,$gia_sua,$hinh);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
                }
                $listsanpham=loadAll_sanpham();
                $listdanhmuc=loadall();
                include "../admin/sanpham/list_hanghoa.php";
                break;

            case "xoasp":
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_sanpham($_GET['id']);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
                }
                $listsanpham=loadAll_sanpham();
                include "../admin/sanpham/list_hanghoa.php";
                break;

            case "add_sanpham":
                if(isset($_POST['add_sp'])&&($_POST['add_sp'])){
                    $iddm=$_POST['iddm'];
                    $name=$_POST['tensp'];
                    $gia_sp=$_POST['gia_sp'];
                    $gia_sale=$_POST['gia_sale'];
                    $hinh=$_FILES['anhsp']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES['anhsp']['name']);
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                    insert_sanpham($name,$gia_sp,$gia_sale,$hinh,$iddm);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
                }
                $listdanhmuc=loadall();
                include "../admin/sanpham/add_sanpham.php";
                break;

            case "view_sanphamct":
                $listsanpham=loadAll_sanpham();
                $listsanpham_chitiet=loadOne_sanphamct_();
                include "../admin/sanpham/view_sanphamct.php";
                break;

            case "add_spchitiet":
                if(isset($_POST['Themsanphamchitiet'])&&($_POST['Themsanphamchitiet']) ){
                    $id_dungtich=$_POST['id_dungtich'];
                    $id_sp=$_POST['id_sp'];
                    $gia_sp_chitiet=$_POST['gia_sp_chitiet'];
                    insert_spchitiet($id_dungtich,$id_sp,$gia_sp_chitiet);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=view_sanphamct">';
                }
                $listsanpham=loadAll_sanpham();
                $listsanpham_chitiet=loadOne_sanphamct_();
                $listdanhmuc=loadall();
                include "../admin/sanpham/view_sanphamct.php";
                break;
            case "xoasp_ct":
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_sanpham_ct($_GET['id']);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=view_sanphamct">';
                }
                $listsanpham_chitiet=loadOne_sanphamct_();
                include "../admin/sanpham/view_sanphamct.php";
                break;
    


            case "list_tk":
                include "../admin/taikhoan/list_tk.php";
                

            default:
            include "../admin/home.php";
                break;
        }
    }else {
        include "../admin/home.php";
    }

    
?>
