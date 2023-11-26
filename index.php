<?php
    ob_start();
    session_start();
    if(!isset($_SESSION["giohang"])){
        $_SESSION["giohang"]=array();
    }
    include "./view/header.php";
    include "./model/pdo.php";
    include "./model/sanpham.php";
    include "./model/danhmuc.php";
    include "./model/taikhoan.php";
    
    $sp_moi=load_all_sp_home();
    if ( ( isset( $_GET[ 'act' ] ) ) && ( $_GET[ 'act' ] != '' ) ){
        $act = $_GET[ 'act' ];
        switch ($act) {
            case "dangky":
                if(isset($_POST['dangky']) && $_POST['dangky']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
    
                    dangky($user,$pass,$email,$tel);
                    $thongbao = '<div class="alert alert-success" role="alert">
                    Đăng ký thành công <a href="index.php?act=dangnhap" class="alert-link">Đăng nhập</a> 
                  </div>';
                }
                include "./view/taikhoan/dangky.php";
                break;

            case "dangnhap":
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checked=check($user,$pass);
                    if(is_array($checked)){
                        $_SESSION['user'] = $checked;
                        header( 'Location: index.php' );
                    }else{
                        $thongbao = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <b>Tài khoản hoặc mật khẩu không đúng, vui lòng kiếm tra lại!</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                }
                include "./view/taikhoan/dangnhap.php";
                break;

            case "update_tk":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['diachi'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    
                    update_tk($id,$user,$pass,$email,$address,$tel);
                    $_SESSION[ 'user' ] = check( $user, $pass );
                    $thongbao = '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <b>Cập nhật tài khoản thành công</b>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                    header( 'Location: index.php?act=update_tk' );  
                }
                include "./view/taikhoan/update_tk.php";
                break;
            
            case 'tkmuahang':
                if(isset($_POST['themttmuahang']) && $_POST['themttmuahang']) {
                    
                    $diachimuahang = $_POST['diachimuahang'];
                    $sdtmuahang = $_POST['sdtmuahang'];
                    themtt($diachimuahang,$sdtmuahang);
                    // $checkttmh=checktt($diachimuahang,$sdtmuahang);
                        // $_SESSION['diachimuahang'] = $checkttmh;
                    include "./view/home.php";
                        $thongbao = '<div class="alert alert-success" role="alert">
                    Thêm thông tin thành công tiếp tục <a href="index.php?act=home" class="alert-link">Mua hàng</a> 
                  </div>';
                    }
                    include "./view/tkmuahang/tkmuahang.php";
                    break;
            case 'dangxuat':


                session_unset();
                header( 'Location: index.php' );
                break;


            case 'addgiohang':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $masp=$_POST['masp'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $anhsp=$_POST['anhsp'];
                    $dungtich=$_POST['dungtich'];
                    if(isset($_POST['quantityy'])&&($_POST['quantityy']>0)){
                        $quantity=$_POST['quantityy'];
                    }
                    else {
                        $quantity=1;
                    }
                    if(checktrung_pro($masp)>=0){
                        $vitritrung=checktrung_pro($masp);
                        update_quantity_pro($vitritrung);
                    }else {
                        $item=array($masp,$tensp,$giasp,$anhsp,$dungtich,$quantity);
                        array_push($_SESSION["giohang"],$item);
                        
                    }
                    
                    
                }
                header("Location: index.php?act=giohang");
               
            case 'giohang':
                include "./view/giohang.php";
                break;
            case 'sanpham':
                include "./view/sanpham.php";
                break;
            case 'spchitiet':
                if(isset($_GET['id'])&&($_GET['id'])>0) {
                    $id=($_GET['id']);
                    $sp=loadOne_sanpham_chitiet($id);
                    extract($sp);
                    
                }
                $listdungtich=loadall_dungtich();
                include "./view/sanphamct.php";
                break;

            case 'thanhtoan':
                include "./view/cart/thanhtoan.php";
                break;
            case 'donhangthanhcong':
                include "./view/cart/donhangthanhcong.php";
                break;

            case 'gioithieu':
                include "./view/gioithieu.php";
                break;
            case 'tintuc':
                include "./view/tintuc.php";
                break;
            case 'chinhsach':
                include "./view/chinhsach.php";
                break;
            case 'lienhe':
                include "./view/lienhe.php";
                break;

            default:
            include "./view/home.php";
                break;
        }
    }else {
        include "./view/home.php";
    }

    include "./view/footer.php";
    
?>