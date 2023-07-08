<?php
    function insert_binhluan($noidung_binhluan,$ten_taikhoan,$id_nguoidung,$id_pro,$ngay_binhluan){
        $sql = "insert into binhluan(noidung_binhluan,ten_taikhoan,id_nguoidung,id_pro,ngay_binhluan) values('$noidung_binhluan','$ten_taikhoan','$id_nguoidung','$id_pro','$ngay_binhluan')";
        pdo_execute($sql);
    }

    function list_binhluan($id_pro){ 
        $sql="select * from binhluan where 1";
      
        if ($id_pro >0) 
          $sql.=" AND  id_pro='".$id_pro."'";
        $sql.= "  order by id_binhluan desc";
       
        $listbinhluan=pdo_query($sql); 
        return $listbinhluan;}

    function list_binhluan_admin(){
        $sql = "select * from binhluan order by id_binhluan desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }

    function delete_binhluan($id_binhluan){
        $sql = "delete from binhluan where id_binhluan=".$id_binhluan;
        pdo_execute($sql);
    }


?>