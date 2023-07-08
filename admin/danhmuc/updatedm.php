
<?php
    
    if(is_array($danhmuc)){
        extract($danhmuc);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>Cập Nhật Danh Mục</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class=" row mb10">
                    Mã Danh Mục<br>
                        <input type="text" name="id_danhmuc" disabled></input>
                    </div>
                    <div class="row mb10">
                    Tên Danh Mục<br>
                        <input type="text" name="ten_danhmuc" value="<?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc; ?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id_danhmuc" value="<?php if(isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc; ?>">
                        <input type="submit" name="updatedanhmuc" value="Cập Nhật"></input>
                        <input type="reset" value="Nhập Lại"></input>
                        <a href="index.php?act=listdm"><input type="button" value="Danh Sách Danh Mục"></input></a>
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