<?php
    session_start();
    include "../../model/pdo.php";
    include "../../dao/binhluan.php";
    $id_pro =$_REQUEST['id_pro'];
    $listbinhluann = list_binhluan($id_pro);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="w-[80%] mx-auto pt-3 pb-10 border border-[#F5F5F5] bg-[#F5F5F5]">        
        <h1 class=" py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10"><a href="#">ĐÁNH GIÁ SẢN PHẨM</a></h1>
        <?php
            foreach($listbinhluann as $binhluan){
                extract($binhluan);
                echo '<div class="ml-14">
                <div class="flex">
                    <p class="text-[16px] ml-1 text-green-600">'.$ten_taikhoan.' Vai Trò: '.$id_nguoidung.' </p>
                </div>
                <p class="ml-2 mt-2 text-gray-400 text-[13px]">'.$ngay_binhluan.'</p>
                <p class="mt-2 ml-2 w-[65%]">'.$noidung_binhluan.'</p>
            </div>
            <hr class="border-gray-600 w-[95%] mx-auto my-5">
';
                
        }?>
<?php 
        if(isset($_SESSION['taikhoan'])){ 
            extract($_SESSION['taikhoan']);
            if($vaitro_taikhoan==1){
                echo "<br>"."Quản trị viên không được phép bình luận!";
            } else {?>
        <form action="view/binhluan/binhluanform.php" method="POST">
        <h1 class=" py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10"><a href="#">Bình luận</a></h1>
        <input type="hidden" name="id_pro" value="<?=$id_pro?>">
        <input class="mx-auto w-[80%] ml-10 py-[0.5%] px-[10px]" name="noidung_binhluan" rows="8" maxlength="65525">
        <br>
        <input type="submit" name="guibinhluan" class="mt-10 ml-10 border-2 border-[#FD3C57] bg-[#FD3C57] text-white text-[17px] px-4 py-1 font-[400] rounded-[6px] hover:bg-white hover:text-[#FD3C57]" value="Phản hồi">
        </form>
            </div>
            <?php 
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung_binhluan = $_POST['noidung_binhluan'];
                    $id_pro = $_POST['id_pro'];
                    $id_nguoidung = $_SESSION['taikhoan']['vaitro_taikhoan'];
                    $ten_taikhoan = $_SESSION['taikhoan']['ten_taikhoan'];
                    $ngay_binhluan = date('h:i:sa d/m/y');   
                    insert_binhluan($noidung_binhluan,$ten_taikhoan,$id_nguoidung,$id_pro,$ngay_binhluan);
                    /*trở về trang cha*/ 
                    header("location: ".$_SERVER['HTTP_REFERER']);                   
                }   
            }
        } else {?>
            <div class="boxfooter searchbox">
                <a href="index.php?act=dangnhap">Đăng nhập để thực hiện chức năng bình luận</a>
            </div>
        <?php }?>

    </body>
</html>
