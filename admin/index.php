<?php
    session_start();
    ob_start();
    include "..//model/pdo.php";
    include "../dao/danhmuc.php";
    include "../dao/sanpham.php";
    include "../dao/taikhoan.php";
    include "../dao/binhluan.php";
    include "../dao/thongke.php";
    include 'header.php';

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){

            /* Controller Danh mục */
            case 'adddm':
                if(isset($_POST['themdanhmuc'])){
                    $ten_danhmuc = $_POST['ten_danhmuc'];
                    insert_danhmuc($ten_danhmuc);
                    $thongbao = "Thêm Thành Công";
                }
               include '../admin/danhmuc/add.php';
                break;
                
            case 'listdm':
                $list_danhmuc = list_danhmuc();
                include '../admin/danhmuc/listdm.php';
                break;
                
            case 'xoadm':
                if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc'])>0){
                    delete_danhmuc($_GET['id_danhmuc']);
                }
                $listdanhmuc = list_danhmuc();
                include '../admin/danhmuc/listdm.php';
                break;
                
            case 'suadm':
                if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc'])>0){
               
                $danhmuc = sua_danhmuc($_GET['id_danhmuc']);
                $thongbao1 = "Upate Thành Công";
                }
                include '../admin/danhmuc/updatedm.php';
                break;
                
            case 'updatedm':
                if(isset($_POST['updatedanhmuc'])&&($_POST['updatedanhmuc'])){
                    $ten_danhmuc = $_POST['ten_danhmuc'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                    update_danhmuc($id_danhmuc,$ten_danhmuc);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = list_danhmuc();
                include '../admin/danhmuc/listdm.php';
                break;

        /* Controller sản phẩm */

        case 'addsp':
            if(isset($_POST['themsanpham'])&&($_POST['themsanpham'])){
                $id_danhmuc = $_POST['id_danhmuc'];
                $name_sanpham = $_POST['name_sanpham'];
                $price_sanpham = $_POST['price_sanpham'];
                $description_sanpham = $_POST['description_sanpham'];
                $img_sanpham = $_FILES['img_sanpham']['name'];               
                $target_dir = "../upload_img/";
                $target_file = $target_dir . basename($_FILES["img_sanpham"]["name"]);
                move_uploaded_file($_FILES["img_sanpham"]["tmp_name"], $target_file);               
                insert_sanpham($name_sanpham,$price_sanpham,$img_sanpham,$description_sanpham,$id_danhmuc);
                $thongbao = "Thêm Thành Công";
            }
            $listdanhmuc = list_danhmuc();
           include '../admin/sanpham/addsp.php';
            break;
            
        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw = $_POST['kyw'];
                $id_danhmuc = $_POST['id_danhmuc']; 
            }
            else{
                $kyw ='';
                $id_danhmuc=0;
            }
            $listdanhmuc = list_danhmuc();
            $listsanpham = list_sanpham($kyw,$id_danhmuc);
            include '../admin/sanpham/listsp.php';
            break;
            
        case 'xoasp':
            if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham'])>0){
                delete_sanpham($_GET['id_sanpham']);
            }
            $listsanpham = list_sanpham("",0);
            include '../admin/sanpham/listsp.php';
            break;
            
        case 'suasp':
            if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham'])>0){
           
            $sanpham = sua_sanpham($_GET['id_sanpham']);
            }
            $listdanhmuc = list_danhmuc();
            include '../admin/sanpham/updatesp.php';
            break;
            
        case 'updatesp':
            if(isset($_POST['capnhatsanpham'])&&($_POST['capnhatsanpham'])){
                $id_danhmuc = $_POST['id_danhmuc'];
                $id_sanpham = $_POST['id_sanpham'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $gia_sanpham = $_POST['gia_sanpham'];
                $mota_sanpham = $_POST['mota_sanpham'];
                $anh_sanpham = $_FILES['anh_sanpham']['name'];
                
                $target_dir = "../upload_img/";
                $target_file = $target_dir . basename($_FILES["anh_sanpham"]["name"]);
                move_uploaded_file($_FILES["anh_sanpham"]["tmp_name"], $target_file);
                update_sanpham($id_danhmuc,$id_sanpham,$ten_sanpham,$gia_sanpham,$anh_sanpham,$mota_sanpham);
                $thongbao = "Cập nhật thành công";
            }
            $list_danhmuc = list_danhmuc();
            $listsanpham = list_sanpham("",0);
            include '../admin/sanpham/listsp.php';
            break;

        

         /*Tài Khoản*/
                
            case 'dskh':
                $listtaikhoan = list_taikhoan();
                include "../admin/taikhoan/listtk.php";
                break;
            
            case 'suatk':
                    if(isset($_GET['id_taikhoan'])&&($_GET['id_taikhoan'])>0){
                   
                    $taikhoan = sua_taikhoan($_GET['id_taikhoan']);
                    }
                    $listtaikhoan = list_taikhoan();
                    include '../admin/taikhoan/updatetk.php';
                    break;

            case 'updatetk':
                    if(isset($_POST['capnhattaikhoan'])&&($_POST['capnhattaikhoan'])){
                        $id_taikhoan = $_POST['id_taikhoan'];
                        $ten_taikhoan = $_POST['ten_taikhoan'];
                        $matkhau_taikhoan = $_POST['matkhau_taikhoan'];
                        $email_taikhoan = $_POST['email_taikhoan'];
                        $diachi_taikhoan = $_POST['diachi_taikhoan'];
                        $sdt_taikhoan = $_POST['sdt_taikhoan'];
                        $vaitro_taikhoan = $_POST['vaitro_taikhoan'];                        
                        update_taikhoanadm($id_taikhoan,$ten_taikhoan,$matkhau_taikhoan,$email_taikhoan,$diachi_taikhoan,$sdt_taikhoan,$vaitro_taikhoan);
                        $thongbao = "Cập nhật thành công";
                    }                  
                    $listtaikhoan = list_taikhoan();
                    include '../admin/taikhoan/listtk.php';
                    break;

                case 'xoatk':
                        if(isset($_GET['id_taikhoan'])&&($_GET['id_taikhoan'])>0){
                            delete_taikhoan($_GET['id_taikhoan']);
                        }
                        $listtaikhoan = list_taikhoan();
                        include '../admin/taikhoan/listtk.php';
                        break;               
            case 'dangxuatadmin':
                session_unset();
                header("location:../index.php");
                break;
         /*Bình Luận */

            case 'dsbl':

                $listbinhluan = list_binhluan_admin();
                include "binhluan/listbinhluan.php";
                break;


            case 'xoabl':
                if(isset($_GET['id_binhluan'])&&($_GET['id_binhluan']>0)){
                    delete_binhluan($_GET['id_binhluan']);
                }
                $listbinhluan = list_binhluan_admin();
                include "binhluan/listbinhluan.php";
                break;
        /* Thống Kê*/

            case 'dstk':
                
                $listthongke = list_thongke();
                include "thongke/listthongke.php";
                break;
            default:
            include 'home.php';
            break;
        }
    }else{
        include 'home.php';
    }

    include 'footer.php';?>