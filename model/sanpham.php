<?php
     function insert_sanpham($loai,$khoiluong,$name,$price,$hinh,$iddm){
        $sql="insert into sanpham(id_loai,id_khoiluong,name,price,img,iddm)
        values('$loai','$khoiluong','$name','$price','$hinh','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }

    function loadAll_sanpham($kyw="",$iddm=0) {
        $sql="select * from sanpham where 1 order by id desc"; 
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_home() {
        $sql="select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_top10() {
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadOne_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else {
            return "";
        }
        
        
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham where iddm=".$iddm." and id <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    
    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!=""){
            $sql =" update sanpham set iddm ='".$iddm."', name ='".$tensp."', price ='".$giasp."', mota ='".$mota."', img ='".$hinh."' where id=".$id;
        }
        else{
            $sql =" update sanpham set iddm ='".$iddm."', name ='".$tensp."', price ='".$giasp."', mota ='".$mota."' where id=".$id;
        }
        pdo_execute($sql);
    }
?>