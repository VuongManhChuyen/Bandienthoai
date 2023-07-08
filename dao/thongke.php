<?php

function list_thongke(){
    $sql = "select danhmuc.id_danhmuc as madm, danhmuc.ten_danhmuc as tendm, count(sanpham.id_sanpham) as countsp, min(sanpham.gia_sanpham) as mingia, max(sanpham.gia_sanpham) as maxgia, avg(sanpham.gia_sanpham) as avggia";
    $sql .= " from sanpham left join danhmuc on danhmuc.id_danhmuc=sanpham.id_danhmuc";
    $sql .= " group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc ";
        $listthongke= pdo_query($sql);
        return $listthongke;
}




?>