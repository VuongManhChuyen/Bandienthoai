<?php

function insert_taikhoan($ten_taikhoan, $matkhau_taikhoan, $email_taikhoan){
    $sql = "insert into taikhoan(ten_taikhoan,matkhau_taikhoan,email_taikhoan) values('$ten_taikhoan','$matkhau_taikhoan','$email_taikhoan')";
    pdo_execute($sql);
}

function check_taikhoan($ten_taikhoan,$matkhau_taikhoan){
    $sql = "select * from taikhoan where ten_taikhoan ='".$ten_taikhoan."' AND matkhau_taikhoan ='".$matkhau_taikhoan."'";
    $tk = pdo_query_one($sql);
    return $tk;
}

/* check email quên mật khẩu*/
function check_email($email_taikhoan){
    $sql = "select * from taikhoan where email_taikhoan ='".$email_taikhoan."'";
    $quenmk = pdo_query_one($sql);
    return $quenmk;
}

function update_taikhoan($id_taikhoan,$ten_taikhoan,$matkhau_taikhoan,$email_taikhoan,$diachi_taikhoan,$sdt_taikhoan){
    
        $sql = "update  taikhoan set id_taikhoan ='".$id_taikhoan."', ten_taikhoan ='".$ten_taikhoan."',matkhau_taikhoan='".$matkhau_taikhoan."',email_taikhoan='".$email_taikhoan."',diachi_taikhoan='".$diachi_taikhoan."',sdt_taikhoan='".$sdt_taikhoan."' where id_taikhoan =".$id_taikhoan;

        pdo_execute($sql);
}

/* admin tài khoản */
function list_taikhoan(){
    $sql = "select * from taikhoan where 1 order by id_taikhoan";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function sua_taikhoan($id_taikhoan){
    $sql = "select * from taikhoan where id_taikhoan =".$id_taikhoan;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function update_taikhoanadm($id_taikhoan,$ten_taikhoan,$matkhau_taikhoan,$email_taikhoan,$diachi_taikhoan,$sdt_taikhoan,$vaitro_taikhoan){
    
        $sql = "update  taikhoan set id_taikhoan ='".$id_taikhoan."', ten_taikhoan ='".$ten_taikhoan."',matkhau_taikhoan='".$matkhau_taikhoan."',email_taikhoan='".$email_taikhoan."',diachi_taikhoan='".$diachi_taikhoan."',sdt_taikhoan='".$sdt_taikhoan."',vaitro_taikhoan='".$vaitro_taikhoan."' where id_taikhoan =".$id_taikhoan;
    pdo_execute($sql);
}

function delete_taikhoan($id_taikhoan){
    $sql = "delete from taikhoan where id_taikhoan =".$id_taikhoan;
    pdo_execute($sql);
}

?>