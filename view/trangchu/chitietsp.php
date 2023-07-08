
<?php
    extract($onesp);

    $img_sp = $img_path.$anh_sanpham;


    echo '<div class="flex w-[80%] mx-auto pt-10">
    <div class="basis-2/5">
        <img class="w-full" src="'.$img_sp.'" alt="">
    </div>
    <div class="basis-3/5">
        <div class="ml-8">
            <h1 class="text-[24px] font-[600]">'.$ten_sanpham.'</h1>
            <div class="flex items-center">
                <div class="flex mt-5">
                    <p class="font-[500]">Thương hiệu:</p>
                    <p class="font-[500] hover:text-[#EA2F38] text-blue-600 ml-1">'.$ten_danhmuc.'</p>
                </div>
            </div>
            <div class="flex items-end gap-x-5">
                <p class="text-[24px] font-[600] text-[#EA2F38] mt-2">'.$gia_sanpham.' đ</p>
                <p class="text-[#8d90a6] mb-1 line-through"></p>
            </div>
            <p class="text-[#EA2F38] text-[15px] font-[600] mt-2">Hàng xách tay Nhật, Fullbox, Cam kết 100% chính hãng, Phát hiện hàng giả xin đền 10 lần tiền.</p>
            <p class="text-[15px] font-[600] mt-1">Ship COD toàn quốc | Miễn phí đổi size, đổi mẫu trong 1 tuần !!!</p>
            <p class="text-blue-600 text-[15px] font-[600] mt-1">Showroom : Bản Khoan - Thượng Nông - Na Hang - Tuyên Quang</p>
            <div>
                <p class="font-[600] mt-1">Số lượng :</p>
                <div class="flex mt-1">
                    <button class="border px-2">-</button>
                    <p class="border px-2">1</p>
                    <button class="border px-2">+</button>
                </div>
            </div>
            <div>
                <button class="border w-[80%] h-[40px] ml-[10%] rounded-full border-[#EA2F38] bg-[#EA2F38] text-white font-[600] hover:bg-white hover:text-[#EA2F38] mt-3">Mua ngay</button>
            </div>
        </div>
    </div>
</div>
<div class="w-[80%] mx-auto py-10">
    <p>'.$mota_sanpham.'</p>
</div>';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                
                    $("#binhluan").load("view/binhluan/binhluanform.php", {id_pro: <?=$id_sanpham?>});
                
                });
        </script>
<div class="w-[80%] mx-auto py-10">
        <h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38]"><a href="#">SẢN PHẨM LIÊN QUAN</a></h1>
        <div class="grid-cols-4 grid gap-5">
            <?php
            foreach ($spcungloai as $spcl){
                extract($spcl);
                $img_sp = $img_path.$anh_sanpham;
                $linkctsp = "index.php?act=chitietsp&id_sanpham=".$id_sanpham;
                echo '<div>
                <a href="'. $linkctsp.'">
                    <div class="overflow-hidden">
                        <div class="">
                            <img class="w-full" src="'.$img_sp.'" alt="">
                        </div>
                        <div class="text-center ">
                            <p class="text-[15px] font-[400] hover:text-[#EA2F38]">'.$ten_sanpham.'</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col">
                                <p class="text-[14px] font-[600] text-[#EA2F38]">'.number_format($gia_sanpham).'<u>đ</u></p>
                            </div>
                            <div>
                                <button class="border border-[#EA2F38] bg-[#EA2F38] text-white text-[14px] hover:border-white hover:bg-white hover:text-[#EA2F38] p-[1px]">Chi tiết</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>';
            }?>
        </div>
    </div>
    
    <hr class="border-[#FD3C57] w-[80%] mx-auto">

    
    <div class="w-[80%] mx-auto pt-3 pb-10 border border-[#F5F5F5] bg-[#F5F5F5]" id="binhluan">
        
    </div>