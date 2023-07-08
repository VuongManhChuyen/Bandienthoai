<div class="w-[30%] mx-auto">
<h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">Cập Nhật Tài Khoản</h1>
        <?php
            if(isset($_SESSION['taikhoan'])&&(is_array($_SESSION['taikhoan']))){
                extract($_SESSION['taikhoan']);
            }

        ?>
        <form action="index.php?act=suataikhoann" method ="POST" enctype="multipart/form-data">
            <div class="">
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">User</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="ten_taikhoan" value="<?=$ten_taikhoan?>">
                </div>
                <div>
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Password</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="password" name="matkhau_taikhoan" value="<?=$matkhau_taikhoan?>">
                </div>
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Email address</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="email" name="email_taikhoan" value="<?=$email_taikhoan?>">
                </div>
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Address</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="diachi_taikhoan" value="<?=$diachi_taikhoan?>">
                </div>
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Tel</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="sdt_taikhoan" value="<?=$sdt_taikhoan?>">
                </div>
            </div>

            <div>
                <input type="hidden" name="id_taikhoan" value="<?=$id_taikhoan?>">
                <input type="submit" name="capnhat" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value="Cập Nhật">
            
            </div>
            
        </form>
</div>






