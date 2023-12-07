<?php

function bill_insert_id($madh,$iduser,$hoten,$diachi,$sodienthoai,$email,$total,$pttt) {
    $sql = "insert into bill(madh,id_user,bill_name,bill_diachi,bill_phone,bill_email,total,pttt) values(?,?,?,?,?,?,?,?)";
    return pdo_execute_id($sql,$madh,$iduser,$hoten,$diachi,$sodienthoai,$email,$total,$pttt);
}

function insert_cart($masp,$anhsp,$tensp,$giasp,$soluong,$thanhtien,$id_bill) {
    $sql = "insert into cart(id_pro,img,name,giasp,soluong,thanhtien,id_bill) values(?,?,?,?,?,?,?)";
    pdo_execute($sql,$masp,$anhsp,$tensp,$giasp,$soluong,$thanhtien,$id_bill);
}

function Load_bill($id_bill){
    $sql = "SELECT bill.*, cart.name, cart.soluong, cart.thanhtien, cart.giasp
    FROM bill JOIN cart ON bill.id = cart.id_bill where bill.id=".$id_bill;
    $bill=pdo_query_one($sql);
    return $bill;

}
function Load_bill_admin(){
    $sql = "SELECT * FROM bill where 1 order by id desc";
    $bill=pdo_query($sql);
    return $bill;

}
function Load_one_bill_admin($id){
    $sql = "SELECT * FROM bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;

}

function Load_one_cart_admin($id){
    $sql = "SELECT * from cart where id_bill=".$id;
    $cart=pdo_query($sql);
    return $cart;

}
function Loadcart($id_bill){
    $sql = "SELECT * from cart where id_bill=".$id_bill;
    $cart=pdo_query($sql);
    return $cart;
}

function update_trangthai($id,$trangthai){
    $sql ="update bill set trangthai ='".$trangthai."' where id=".$id;
    pdo_execute($sql);
}


function Load_bill_home($id_user){
    $sql = "SELECT * from bill where trangthai IN (0, 1, 2) and id_user=".$id_user." order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function Load_bill_home_lich_su($id_user){
    $sql = "SELECT * from bill where trangthai IN (3, 4) and id_user=".$id_user." order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}

function loadchitietone_bill($id){
    $sql = "SELECT * FROM bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadchitietone_cart($id){
    $sql = "SELECT * from cart where id_bill=".$id;
    $cart=pdo_query($sql);
    return $cart;
}
function update_bill_home($id){
    $sql ="UPDATE bill SET trangthai='4' WHERE id=".$id;
    pdo_execute($sql);
}
function listcountoo(){
    $sql ="SELECT danhmuc.*, COUNT(sanpham.id) as countsp FROM sanpham LEFT JOIN danhmuc ON danhmuc.id =sanpham.iddm GROUP BY danhmuc.tendm";
    $cart=pdo_query($sql);
    return $cart;
}
function listcount(){
    $sql ="SELECT danhmuc.*, COUNT(sanpham.id) as countsp FROM sanpham LEFT JOIN danhmuc ON danhmuc.id =sanpham.iddm";
    $cart=pdo_query($sql);
    return $cart;
}

function update_bill_chitiet($id,$ten_user,$diachi_user,$sdt_user,$email_user){
    $sql =" UPDATE bill set bill_name ='".$ten_user."', 
    bill_diachi ='".$diachi_user."',
    bill_phone ='".$sdt_user."',
    bill_email ='".$email_user."' where id=".$id;
    pdo_execute($sql);
}
function loaddanhmuc($id){
    $sql = "SELECT sanpham.*, danhmuc.tendm as tendm
    FROM `sanpham` left join danhmuc on sanpham.iddm = danhmuc.id WHERE iddm =".$id;
    $cart=pdo_query($sql);
    return $cart;
}
function loadtendm($id){
    $sql = "SELECT * FROM `danhmuc` WHERE id =".$id;
    $cart=pdo_query_one($sql);
    return $cart;
}


function load_giasp1(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price <= 300000";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp2(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price BETWEEN 300000 AND 500000 ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp3(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price BETWEEN 500000 AND 700000
    ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp4(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price BETWEEN 700000 AND 1000000
    ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp5(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price >= 1000000 ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp6(){
    $sql ="SELECT *
    FROM `sanpham` ORDER BY id DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp7(){
    $sql ="SELECT *
    FROM `sanpham` ORDER BY id ASC";
    $cart=pdo_query($sql);
    return $cart;
}

?>