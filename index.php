<?php
    session_start();
    include "model/pdo.php";
    include "dao/sanpham.php";
    include "dao/danhmuc.php";
    include "dao/taikhoan.php";
    include "view/trangchu/headertt.php";
    include "bienchung.php";

    $spnew = list_sanpham_tt();
    $dsdm = list_danhmuc();
    $dstop10 = list_sanpham_yeuthich();
    $spbanchay = list_sanpham_banchay();


    if((isset($_GET['act']))&&($_GET['act'])!=""){
        $act = $_GET['act'];
        switch($act){
                case 'sanpham':
                    if(isset($_POST['kyw'])&&($_POST['kyw'])!=""){
                        $kyw = $_POST['kyw'];
                    }
                    else{
                        $kyw = "";
                    }
                        if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc'])>0){
                            $id_danhmuc = $_GET['id_danhmuc'];
                    }
                    else{
                        $id_danhmuc = 0;
                        
                    }
                    
                        $dssptheoloai =  list_sanpham($kyw,$id_danhmuc);
                        $ten_danhmuc = load_ten_danhmuc($id_danhmuc);
                        include "view/trangchu/sanphamtheodanhmuc.php";
                    
                    break;

            case 'chitietsp':
                   
                    if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham'])>0){
                        $onesp = chitiet_sanpham(($_GET['id_sanpham']));
                        extract($onesp);
                        $ten_danhmuc = load_ten_danhmuc($id_danhmuc);
                        $spcungloai=list_sanpham_cungloai($id_sanpham,$id_danhmuc);
                        include "view/trangchu/chitietsp.php";
                    }
                    else{
                        include "view/trangchu/homett.php";
                    }
                    
                    break;

            /* Đăng Nhập*/
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $ten_taikhoan = $_POST['ten_taikhoan'];
                    $matkhau_taikhoan= $_POST['matkhau_taikhoan'];
                    $check_taikhoan =check_taikhoan($ten_taikhoan,$matkhau_taikhoan);
                    if(is_array($check_taikhoan)){
                        $_SESSION['taikhoan'] = $check_taikhoan;                        
                    }
                    else{
                        $thongbao = "Mật khẩu tài khoản không đúng";
                    }
                    
                }
                    include "view/taikhoan/dangnhap.php";
                    break;
            /* Đăng Kí*/
            case 'dangki':
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $ten_taikhoan = $_POST['ten_taikhoan'];
                    $matkhau_taikhoan= $_POST['matkhau_taikhoan'];
                    $email_taikhoan = $_POST['email_taikhoan'];
                    insert_taikhoan($ten_taikhoan, $matkhau_taikhoan, $email_taikhoan);
                    $thongbao = "Đã đăng kí thành công ";
                }
                    include "view/taikhoan/dangki.php";
                    break;
                /*Sửa tài khoản*/
                case 'suataikhoann':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $id_taikhoan = $_POST['id_taikhoan'];
                            $ten_taikhoan = $_POST['ten_taikhoan'];
                            $matkhau_taikhoan= $_POST['matkhau_taikhoan'];
                            $email_taikhoan = $_POST['email_taikhoan'];
                            $diachi_taikhoan = $_POST['diachi_taikhoan'];
                            $sdt_taikhoan = $_POST['sdt_taikhoan'];            
                            update_taikhoan($id_taikhoan,$ten_taikhoan,$matkhau_taikhoan,$email_taikhoan,$diachi_taikhoan,$sdt_taikhoan);
                            $_SESSION['taikhoan'] =check_taikhoan($ten_taikhoan,$matkhau_taikhoan);
                            include "view/taikhoan/suataikhoan.php";
                        }
                            break;
                case 'suataikhoan':
                    include "view/taikhoan/suataikhoan.php";  
                    break;
                /* Quên mật khâu*/
                case 'quenmatkhau':
                    if(isset($_POST['quenmatkhau'])&&($_POST['quenmatkhau'])){
                       
                        $email_taikhoan = $_POST['email_taikhoan'];
                        $check_email = check_email($email_taikhoan);         
                        if(is_array($check_email)){
                            $thongbao = "Mật khẩu của bạn là: ".$check_email['matkhau_taikhoan'];
                        }
                        else{
                            $thongbao = "Email không tồn tại";
                        }
                        
                    }
                    include "view/taikhoan/quenmatkhau.php";
                        break;
            /*Đăng xuất*/
            case 'dangxuat':
                session_unset();
                include "view/taikhoan/dangnhap.php";
                break;

            case 'dangnhaptaikhoan':
                include "view/taikhoan/dangnhap.php";
                break;
            case 'dangxuattaikhoan':
                include "view/taikhoan/dangnhap.php";
                break;
            case 'dangkitaikhoan':
                include "view/taikhoan/dangki.php";
                break;
            case 'gioithieu':
                include "view/trangchu/gioithieu.php";
                break;
                
            case 'tintuc':
                include "view/trangchu/tintuc.php";
                break;
            default:
            include "view/trangchu/homett.php";
            break;
        }
    }
    else{
        include "view/trangchu/homett.php";
    }
    include "view/trangchu/footertt.php";
?>