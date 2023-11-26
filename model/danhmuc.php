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
    function insert_khoiluong($tendungtich){
        $sql ="insert into dung_tich(ten_dung_tich) values('$tendungtich')";
        pdo_execute($sql);
    }

    function delete_dungtich($id){
        $sql = "delete from dung_tich where id=".$id;
        pdo_execute($sql);
    }

    function loadall_dungtich(){
        $sql= "select * from dung_tich order by id desc";
        $listdungtich=pdo_query($sql);
        return $listdungtich;
    }

    function loadone_dungtich($id){
        $sql = "select * from dung_tich where id=".$id;
        $kl= pdo_query_one($sql);
        return $kl;
    }

    function update_dungtich($id,$tendt){
        $sql =" update dung_tich set ten_dung_tich ='".$tendt."' where id=".$id;
        pdo_execute($sql);
    }



?>