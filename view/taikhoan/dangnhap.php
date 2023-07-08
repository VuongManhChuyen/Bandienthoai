<div class="w-[30%] mx-auto">
<?php
    if(isset($_SESSION['taikhoan'])){
        extract($_SESSION['taikhoan']);
        ?>
        <h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">TÀI KHOẢN</h1>
        <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Xin Chào </p>
                        <p class="text-[#ef222d] font-[500]"><?=$ten_taikhoan?></p>
                    </div>
        </div>
        <div class="">
                    <div class="flex items-center mt-5 mb-3">
                       <a href="index.php?act=quenmatkhau"><p class="text-[#ef222d] font-[500]">Quên Mật Khẩu</p></a> 
                        
                    </div>
        </div>
        <div class="">
                    <div class="flex items-center mt-5 mb-3">
                       <a href="index.php?act=suataikhoan"><p class="text-[#ef222d] font-[500]">Cập Nhật Tài Khoản</p></a> 
                        
                    </div>
        </div>
        <?php if($vaitro_taikhoan==1){
        ?>
        <div class="">
                    <div class="flex items-center mt-5 mb-3">
                       <a href="../../TigerShop/admin/index.php"><p class="text-[#ef222d] font-[500]">Đăng Nhập ADMIN</p></a> 
                        
                    </div>
        </div>
        <?php }?>
        <div class="">
                    <div class="flex items-center mt-5 mb-3">
                       <a href="index.php?act=dangxuat"><p class="text-[#ef222d] font-[500]">Đăng Xuất</p></a> 
                        
                    </div>
        </div>
    <?php
    }else{

 
    ?>
<h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">Login</h1>
        
        <form action="index.php?act=dangnhap" method ="POST" enctype="multipart/form-data">
            <div class="">
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">User</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="ten_taikhoan" placeholder="user">
                </div>
                <div>
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Password</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="password" name="matkhau_taikhoan" placeholder="password">
                </div>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao)!=""){
                echo $thongbao;
            }

            ?>
            <div class="flex justify-between items-center mt-5">
                <div class="flex gap-x-1">
                    <input type="checkbox">
                    <p class="text-gray-600">Remember Me</p>
                </div>
                <div>
                    <a href="index.php?act=quenmatkhau"><p class="text-[#ef222d] hover:underline">Forgot Password</p></a>
                </div>
            </div>
            <div>
                <input type="submit" name="dangnhap" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value="Login">
                <hr class="text-gray-600 mt-3">
                <p class="text-gray-600 text-[16px] font-[500] text-center">OR LOGIN IN WITH</p>
                <div class="flex justify-between items-center mt-3">
                    <button class="border border-[#1E40AE] bg-[#1E40AE] text-white hover:bg-white hover:text-[#1E40AE] w-[47%] h-8 text-[18px] rounded-[10px]">FACEBOOK</button>
                    <button class="border border-[#D87706] bg-[#D87706] text-white hover:bg-white hover:text-[#D87706] w-[47%] h-8 text-[18px] rounded-[10px]">Google</button>
                </div>
            </div>
            <div class="flex justify-center items-center mt-3">
                <p>Don't have an accout?</p><a class="ml-2 hover:text-[#EA2F38]" href="index.php?act=dangkitaikhoan"><u>Register Now</u></a>
            </div>
        </form>
        <?php
        }
        ?>
        </div>
        