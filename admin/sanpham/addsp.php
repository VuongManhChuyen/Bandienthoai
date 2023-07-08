
<div class="row">
            <div class="row formtitle">
                <h1>Thêm Mới Sản Phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Mã Sản Phẩm<br>
                        <input type="text" name="id_sanpham" disabled> 
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm<br>
                        <input type="text" name="ten_sanpham" required> 
                    </div>
                    <div class="row mb10">
                        Giá Sản Phẩm<br>
                        <input type="text" name="gia_sanpham" required>
                    </div>
                    <div class="row mb10">
                        Ảnh Sản Phẩm<br>
                        <input type="file" name="anh_sanpham"> 
                    </div>
                    <div class="row mb10">
                        Mô Tả Sản Phẩm<br>
                        <textarea name="mota_sanpham" cols="30" rows="10"></textarea> 
                    </div>
                    <div class="row mb10">
                        Danh Mục <br>
                        <select name="id_danhmuc" id="">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="themsanpham" value="Thêm Mới"> 
                        <input type="reset" value="Nhập Lại"> 
                        <a href="index.php?act=listsp"><input type="button" value="danh sách sản phẩm"> </a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!="")){
                        echo $thongbao;
                    } 
                    ?>
                </form>
            </div>
        </div>
    </div>