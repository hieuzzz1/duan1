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






?>