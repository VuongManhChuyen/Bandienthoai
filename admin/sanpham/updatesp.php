
<?php
   if(is_array($sanpham)){
        extract($sanpham);
    }
    $anh = "../upload_img/".$anh_sanpham;

    if(is_file($anh)){
        $anh_sanpham = "<img src='".$anh."' height='120' width='120'>";
    } else{
        $anh_sanpham = "No image";
    }
?>  
<div class="row">
            <div class="row formtitle">
                <h1>Cập Nhật Sản Phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Tên Sản Phẩm<br>
                        <input type="text" name="ten_sanpham" value="<?=$ten_sanpham?>"> 
                    </div>
                    <div class="row mb10">
                        Giá Sản Phẩm<br>
                        <input type="text" name="gia_sanpham" value="<?=$gia_sanpham?>">
                    </div>
                    <div class="row mb10">
                       Ảnh Sản phẩm<br>
                        <input type="file" name="anh_sanpham"><?=$anh_sanpham?>
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota_sanpham" cols="30" rows="10"><?=$mota_sanpham ?></textarea> 
                    </div>
                    <div class="row mb10">
                        Danh Mục<br>
                    <select name="id_danhmuc" id="">
                        <option value="0" selected>Tất Cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if($id_danhmuc==$id_danhmuc) echo '<option value="'.$id_danhmuc.'" selected>'.$ten_danhmuc.'</option>';
                                    else echo '<option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>';
                                }
                            ?> 
                    </select>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                        <input type="submit" name="capnhatsanpham" value="Cập Nhật"></input>
                        <input type="reset" value="Nhập Lại"></input>
                        <a href="index.php?act=listsp"><input type="button" value="Danh sach"></input></a>
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