<div class="w-[30%] mx-auto">
<h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">QUÊN MẬT KHẨU</h1>
        
        <form action="index.php?act=quenmatkhau" method ="POST" enctype="multipart/form-data">
            <div class="">
               
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Email address</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="email" name="email_taikhoan" placeholder="example@gmail.com" required>
                </div>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao)!=""){
                echo $thongbao;
            }

            ?>
            <div class="flex justify-between items-center mt-5">
                
            </div>
            <div>
                <input type="submit" name="quenmatkhau" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value="Quên Mật Khẩu">
               
            </div>
            <div class="flex justify-center items-center mt-3">
                <p>Do you already have an account ?</p><a class="ml-2 hover:text-[#EA2F38]" href="index.php?act=dangnhaptaikhoan"><u>Log in</u></a>
            </div>
        </form>
</div>