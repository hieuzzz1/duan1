<?php
    function update_quantity_pro($vitri){
        for ($i=0; $i < sizeof($_SESSION["giohang"]); $i++) { 
           if($i==$vitri){
                $_SESSION["giohang"][$i][5]+=1;
           }
        }
    }
       
    function checktrung_pro($masp){
        $vitri=-1;
        for ($i=0; $i < sizeof($_SESSION["giohang"]); $i++) { 
            if($_SESSION["giohang"][$i][0]==$masp){
                $vitri=$i;
            }
        }
        return $vitri;
    }


     function insert_sanpham($name,$gia_sp,$gia_sale,$hinh,$iddm){
        $sql="insert into sanpham(name,price,giasale,img,iddm)values('$name','$gia_sp','$gia_sale','$hinh','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function delete_sanpham_ct($id){
        $sql="delete from sanpham_chitiet where id=".$id;
        pdo_execute($sql);
    }

    function loadOne_sanpham($id){
        $sql="SELECT * FROM sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadOne_sanphamct_(){
        $sql="SELECT sp.name, sp.img, sp.giasale, sp_dt.ten_dung_tich, sanpham_ct.gia_sp_chitiet, sanpham_ct.id
        FROM sanpham_chitiet sanpham_ct 
        INNER JOIN sanpham sp ON sanpham_ct.id_sp = sp.id 
        INNER JOIN dung_tich sp_dt ON sanpham_ct.id_dung_tich = sp_dt.id order by id desc limit 10";
        $sp=pdo_query($sql);
        return $sp;
    }
    function insert_spchitiet($id_dungtich,$id_sp,$gia_sp_chitiet){
        $sql="insert into sanpham_chitiet(id_dung_tich,id_sp,gia_sp_chitiet)values('$id_dungtich','$id_sp','$gia_sp_chitiet')";
        pdo_execute($sql);
    }
   
    function loadAll_sanpham() {
        $sql="SELECT sanpham.id, sanpham.name, sanpham.img, sanpham.giasale, sanpham.price,
        danhmuc.tendm AS danhmuc_tendm
        FROM sanpham
        JOIN danhmuc ON sanpham.iddm = danhmuc.id
        ORDER BY sanpham.id DESC";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    
    function update_sanpham($id,$danhmuc_sua,$ten_sua,$gia_sp,$gia_sua,$hinh){

        if($hinh!==""){
            $sql ="update sanpham set name ='".$ten_sua."',  giasale ='".$gia_sua."', price ='".$gia_sp."', iddm ='".$danhmuc_sua."', img ='".$hinh."' where id=".$id;
        }else {
            $sql ="update sanpham set name ='".$ten_sua."',  giasale ='".$gia_sua."', price ='".$gia_sp."', iddm ='".$danhmuc_sua."' where id=".$id;

        }
        pdo_execute($sql);
    }
    
    function load_all_sp_home(){
        $sql="select * from sanpham order by id desc limit 0,8";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
        
    }
  
    function loadOne_sanpham_chitiet($id){
        $sql="SELECT sp.name, sp.img, sp.giasale, sp.price, sp_dt.ten_dung_tich, sanpham_ct.gia_sp_chitiet
        FROM sanpham_chitiet sanpham_ct 
        INNER JOIN sanpham sp ON sanpham_ct.id_sp = sp.id
        INNER JOIN dung_tich sp_dt ON sanpham_ct.id_dung_tich = sp_dt.id where sp.id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
?>