<div class="w-[30%] mx-auto">
<h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">Register</h1>
        
        <form action="index.php?act=dangki" id="demoForm" method ="POST" enctype="multipart/form-data" >
            <div class="">
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">User</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="ten_taikhoan" placeholder="user" required >
                </div>
                <div>
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Password</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="password" name="matkhau_taikhoan" placeholder="password" required>
                </div>
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
                <input type="submit" name="dangki" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value="Register">
                <hr class="text-gray-600 mt-3">
                <p class="text-gray-600 text-[16px] font-[500] text-center">OR LOGIN IN WITH</p>
                <div class="flex justify-between items-center mt-3">
                    <button class="border border-[#1E40AE] bg-[#1E40AE] text-white hover:bg-white hover:text-[#1E40AE] w-[47%] h-8 text-[18px] rounded-[10px]">FACEBOOK</button>
                    <button class="border border-[#D87706] bg-[#D87706] text-white hover:bg-white hover:text-[#D87706] w-[47%] h-8 text-[18px] rounded-[10px]">Google</button>
                </div>
            </div>
            <div class="flex justify-center items-center mt-3">
                <p>Do you already have an account ?</p><a class="ml-2 hover:text-[#EA2F38]" href="index.php?act=dangnhaptaikhoan"><u>Log in</u></a>
            </div>
        </form>
</div>