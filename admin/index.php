<?php
session_start();
    include "../admin/header.php";
    include "../admin/footer.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    $listdanhmuc=loadall();
    $listloaihang=loadall_loaihang();
    $listkhoiluong=loadall_khoiluong();
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

            case 'list_loaihang':
                $listloaihang=loadall_loaihang();
                include "../admin/danhmuc/list_loaihang.php";
                break;

            case "themloaihang":
                if(isset($_POST['themmoilh'])&&($_POST['themmoilh'])){
                    $tenloaihang=$_POST['tenloaihang'];
                    insert_loaihang($tenloaihang);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_loaihang">';

                }
                include "../admin/danhmuc/list_loaihang.php";
                break;

            case 'update_loaihang':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $name=$_POST['name'];
                    $id=$_POST['id'];
                    update_loaihang($id,$name);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_loaihang">';
                }
                $listloaihang=loadall_loaihang();
                include "../admin/danhmuc/list_loaihang.php";
                break;
            case 'sualoaihang':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $lh=loadone_loaihang($_GET['id']);
                }
                include "../admin/danhmuc/update_lhang.php";
                break;
            case 'xoaloaihang':
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_loaihang($_GET['id']);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_loaihang">';
                }
                $listloaihang=loadall_loaihang();
                include "../admin/danhmuc/list_loaihang.php";
                break;


            case 'list_khoiluong':
                $listkhoiluong=loadall_khoiluong();
                include "../admin/danhmuc/list_khoiluong.php";
                break;

            case "themkhoiluong":
                if(isset($_POST['themmoikl'])&&($_POST['themmoikl'])){
                    $tenkhoiluong=$_POST['tenkhoiluong'];
                    insert_khoiluong($tenkhoiluong);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_khoiluong">';

                }
                include "../admin/danhmuc/list_khoiluong.php";
                break;

            case 'update_khoiluong':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $name=$_POST['name'];
                    $id=$_POST['id'];
                    update_khoiluong($id,$name);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_khoiluong">';
                }
                $listkhoiluong=loadall_khoiluong();
                include "../admin/danhmuc/list_khoiluong.php";
                break;
            case 'suakhoiluong':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $kl=loadone_khoiluong($_GET['id']);
                }
                include "../admin/danhmuc/update_kluong.php";
                break;
            case 'xoakhoiluong':
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_khoiluong($_GET['id']);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_khoiluong">';
                }
                $listkhoiluong=loadall_khoiluong();
                include "../admin/danhmuc/list_khoiluong.php";
                break;
            // End danh mục
            
            
            //Hàng hóa
            case "list_hanghoa":
                $listsanpham=loadAll_sanpham();
                include "../admin/sanpham/list_hanghoa.php";
                break;
            case "add_sanpham":
                if(isset($_POST['add_sp'])&&($_POST['add_sp'])){
                    $loai=$_POST['idlh'];
                    $iddm=$_POST['iddm'];
                    $khoiluong=$_POST['idkl'];
                    $name=$_POST['tensp'];
                    $price=$_POST['giasp'];
                    $hinh=$_FILES['anhsp']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES['anhsp']['name']);
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                    
                    insert_sanpham($loai,$khoiluong,$name,$price,$hinh,$iddm);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
                }
                $listdanhmuc=loadall();
                $listloaihang=loadall_loaihang();
                $listkhoiluong=loadall_khoiluong();

                include "../admin/sanpham/add_sanpham.php";
                break;





            case "list_tk":
                include "../admin/taikhoan/list_tk.php";
                break;

            default:
            include "../admin/home.php";
                break;
        }
    }else {
        include "../admin/home.php";
    }

    
?>
