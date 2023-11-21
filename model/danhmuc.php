<?php 
    function insert_danhmuc($tenhanghoa){
        $sql ="insert into danhmuc(tendm) values('$tenhanghoa')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function loadall(){
        $sql= "select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm= pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tendm){
        $sql =" update danhmuc set tendm ='".$tendm."' where id=".$id;
        pdo_execute($sql);
    }



    // Loại hàng
    function insert_loaihang($tenloaihang){
        $sql ="insert into sp_loai(name) values('$tenloaihang')";
        pdo_execute($sql);
    }

    function delete_loaihang($id){
        $sql = "delete from sp_loai where id=".$id;
        pdo_execute($sql);
    }

    function loadall_loaihang(){
        $sql= "select * from sp_loai order by id desc";
        $listloaihang=pdo_query($sql);
        return $listloaihang;
    }

    function loadone_loaihang($id){
        $sql = "select * from sp_loai where id=".$id;
        $lh= pdo_query_one($sql);
        return $lh;
    }

    function update_loaihang($id,$name){
        $sql =" update sp_loai set name ='".$name."' where id=".$id;
        pdo_execute($sql);
    }


    // Loại hàng
    function insert_khoiluong($tenkhoiluong){
        $sql ="insert into sp_khoiluong(name) values('$tenkhoiluong')";
        pdo_execute($sql);
    }

    function delete_khoiluong($id){
        $sql = "delete from sp_khoiluong where id=".$id;
        pdo_execute($sql);
    }

    function loadall_khoiluong(){
        $sql= "select * from sp_khoiluong order by id desc";
        $listkhoiluong=pdo_query($sql);
        return $listkhoiluong;
    }

    function loadone_khoiluong($id){
        $sql = "select * from sp_khoiluong where id=".$id;
        $kl= pdo_query_one($sql);
        return $kl;
    }

    function update_khoiluong($id,$name){
        $sql =" update sp_khoiluong set name ='".$name."' where id=".$id;
        pdo_execute($sql);
    }



?>