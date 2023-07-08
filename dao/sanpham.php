<?php
    
    function insert_sanpham($ten_sanpham,$gia_sanpham,$anh_sanpham,$mota_sanpham,$id_danhmuc){
        $sql = "insert into sanpham(ten_sanpham,gia_sanpham,anh_sanpham,mota_sanpham,id_danhmuc) values('$ten_sanpham','$gia_sanpham','$anh_sanpham','$mota_sanpham','$id_danhmuc')";
        pdo_execute($sql);
    }

    function list_sanpham($kyw,$id_danhmuc=0){
        $sql = "select * from sanpham where 1";
        if($kyw !=""){
            $sql.=" and ten_sanpham like '%".$kyw."%'";
        }
        if($id_danhmuc>0){
            $sql.=" and id_danhmuc = '".$id_danhmuc."'";
        }
        $sql.=" order by id_sanpham";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($id_sanpham){
        $sql = "delete from sanpham where id_sanpham =".$id_sanpham;
        pdo_execute($sql);
    }

    function sua_sanpham($id_sanpham){
        $sql = "select * from sanpham where id_sanpham =".$id_sanpham;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }

    function update_sanpham($id_danhmuc,$id_sanpham,$ten_sanpham,$gia_sanpham,$anh_sanpham,$mota_sanpham){
        if($anh_sanpham!=""){
            $sql = "update  sanpham set id_danhmuc ='".$id_danhmuc."', ten_sanpham ='".$ten_sanpham."',gia_sanpham='".$gia_sanpham."',anh_sanpham='".$anh_sanpham."',mota_sanpham='".$mota_sanpham."' where id_sanpham =".$id_sanpham;
        }
        else{
            $sql = "update  sanpham set id_danhmuc ='".$id_danhmuc."', ten_sanpham ='".$ten_sanpham."',gia_sanpham='".$gia_sanpham."',mota_sanpham='".$mota_sanpham."' where id_sanpham =".$id_sanpham;
        }
        pdo_execute($sql);
    }

    /*load sản phẩm trang chủ*/
    function list_sanpham_tt(){
        $sql = "select * from sanpham where 1 order by gia_sanpham  desc limit 0,8";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    /*sản phẩm bán chạy*/
    function list_sanpham_banchay(){
        $sql = "select * from sanpham where 1 order by  id_sanpham desc limit 0,4";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    /*load danh muc yêu thich*/
    function list_sanpham_yeuthich(){
        $sql = "select * from sanpham where 1 order by luotxem_sanpham desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    /*chi tiet san pham */
    function chitiet_sanpham($id_sanpham){
        $sql = "select * from sanpham where id_sanpham =".$id_sanpham;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }

    /*sản phẩm cùng loại*/

    function list_sanpham_cungloai($id_sanpham,$id_danhmuc){
        $sql = "select * from sanpham where id_danhmuc =".$id_danhmuc." AND id_sanpham <> ".$id_sanpham;
        $listsanpham_cungloai = pdo_query($sql);
        return $listsanpham_cungloai;
    }


?>