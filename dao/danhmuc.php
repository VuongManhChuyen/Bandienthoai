<?php

    function insert_danhmuc($ten_danhmuc){
        $sql = "insert into danhmuc(ten_danhmuc) values('$ten_danhmuc')";
        pdo_execute($sql);
    }

    function list_danhmuc(){
        $sql = "select * from danhmuc order by id_danhmuc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function delete_danhmuc($id_danhmuc){
        $sql = "delete from danhmuc where id_danhmuc =".$id_danhmuc;
        pdo_execute($sql);
    }

    function sua_danhmuc($id_danhmuc){
        $sql = "select * from danhmuc where id_danhmuc =".$id_danhmuc;
        $danhmuc = pdo_query_one($sql);
        return $danhmuc;
    }

    function update_danhmuc($id_danhmuc,$ten_danhmuc){
        $sql = "update  danhmuc set ten_danhmuc ='".$ten_danhmuc."' where id_danhmuc =".$id_danhmuc;
        pdo_execute($sql);
    }
    
    /*Load tên danh mục */
    function load_ten_danhmuc($id_danhmuc){
        if($id_danhmuc>0){
            $sql = "select * from danhmuc where id_danhmuc=".$id_danhmuc;
        $tendanhmuc = pdo_query_one($sql);
        extract($tendanhmuc);
        return $ten_danhmuc;
        }
        else{
            return "";
        }
    }


?>