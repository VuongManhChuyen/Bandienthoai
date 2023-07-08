<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../tigershop/content/image/banner.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../tigershop/content/image/banner1.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../tigershop/content/image/banner2.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<div class="bg-white mt-10 mb-10">
            <h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38]"><a href="#">SẢN PHẨM BÁN CHẠY</a></h1>
            <div class="grid-cols-4 grid gap-5">
            <?php
                foreach($spbanchay as $sp){
                    extract($sp);
                    $hinh = $img_path.$anh_sanpham;
                    $linkctsp = "index.php?act=chitietsp&id_sanpham=".$id_sanpham;
                    echo '<div>
                    <a href="'.$linkctsp.'">
                        <div class="overflow-hidden">
                            <div class="">
                                <img class="w-full" src="'.$hinh.'" alt="">
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
        <div>
            <img src="image/bg_fot.webp" alt="">
        </div>
        <div>
            <h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38]"><a href="#">SẢN PHẨM MỚI NHẤT</a></h1>
            <div class="grid-cols-4 grid gap-5">
                <?php
                foreach($spnew as $sp){
                    extract($sp);
                    $hinh = $img_path.$anh_sanpham;
                    $linkctsp = "index.php?act=chitietsp&id_sanpham=".$id_sanpham;
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
