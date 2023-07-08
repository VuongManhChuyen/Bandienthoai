
<p class="text-center text-[24px] font-[600] text-[#EA2F38] mt-5">Sản Phẩm <?=$ten_danhmuc?></p>
    <div class="flex w-[80%] mx-auto mt-5">
        <div class="basis-1/5">
            <p class="text-[16px] font-[600]">DANH MỤC SẢN PHẨM</p>
            
            <?php   
            foreach($dsdm as $dm){
                extract($dm);
                $linkdm = "index.php?act=sanpham&id_danhmuc=".$id_danhmuc;
                echo '<p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="'.$linkdm.'">'.$ten_danhmuc.'</a></p>';

            }


            ?>


            <!-- <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">Trang chủ</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">Sản phẩm</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">Giới thiệu</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">Tin tức</a></p> -->
            <hr class=" mt-5">




            <p class="text-[16px] font-[600] mt-2">TOP SẢN PHẨM YÊU THÍCH</p>
            <?php
            foreach($dstop10 as $dst){               
                extract($dst);
                $linkctsp = "index.php?act=chitietsp&id_sanpham=".$id_sanpham;
                echo '<p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="'.$linkctsp.'">'.$ten_sanpham.'</a></p>';

            }

            ?>

            <!-- 
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">ANKER JAPAN</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">Anne Klein</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">áo ADIDAS</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">ÁO ADIDAS NỮ</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">áo asics</a></p>
            <p class="text-[14px] font-[500] hover:text-[#EA2F38] mt-1"><a href="#">áo dài tay adidas</a></p> -->
            <hr class=" mt-5">
        </div>
        <div class="basis-4/5">
            <div class="grid grid-cols-4 gap-8">
            <?php
                foreach($dssptheoloai as $sptheoloai){
                    extract($sptheoloai);
                    $linkctsp = "index.php?act=chitietsp&id_sanpham=".$id_sanpham;
                    $hinh = $img_path.$anh_sanpham;
                    echo '<div>
                    <a href="'.$linkctsp.'">
                        <div class="overflow-hidden">
                            <div class="">
                                <img class="w-full h-full" src="'.$hinh.'" alt="">
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
                }

                ?>
            </div>
        </div>
    </div>