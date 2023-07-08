<footer class="">
        <div class="w-[80%] mx-auto flex flex-row gap-x-20 my-10">
            <div class="basis-1/4">
                <img src="../tigershop/content/image/logo.png" alt="">
                <p class="text-gray-400 text-[16px] font-[300]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio facere rem</p>
            </div>
            <div class="basis-3/4">
                <div class="grid grid-cols-4 gap-x-10 pt-10">
                

                    <div>
                        <a href="#"><p class="font-[500] text-gray-400 font-mono">DANH MỤC</p></a>
                        <?php   
                    foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&id_danhmuc=".$id_danhmuc;
                    echo '<p class="text-gray-400 text-[16px] font-[300]"><a href="'.$linkdm.'">'.$ten_danhmuc.'</a></p>';
                    }?>
                    </div>
                    <div>
                        <a href="#"><p class="font-[500] text-gray-400 font-mono">SUPPORT</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Pricing</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Document</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Guides</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">API Status</p></a>
                    </div>
                    <div>
                        <a href="#"><p class="font-[500] text-gray-400 font-mono">COMPANY</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">About</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Blog</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Jobs</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Press</p></a>
                    </div>
                    <div>
                        <a href="#"><p class="font-[500] text-gray-400 font-mono">LEGAL</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Claim</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Privacy</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Policy</p></a>
                        <a href="#"><p class="text-gray-400 text-[16px] font-[300]">Terms</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#EA2F38] h-10 pt-2">
            <p class="w-[80%] mx-auto text-white">© TIGERSHOP - UY TÍN CHẤT LƯỢNG</p>
        </div>
    </footer>

    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>