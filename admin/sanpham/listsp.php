
<div class="row">
            <div class="row formtitle">
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=listsp" method="post" enctype="multipart/form-data">
                    <input type="text" name="kyw" id="">
                    <select name="id_danhmuc" id="">
                        <option value="0" selected>Tất Cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id_danhmuc.'">"'.$ten_danhmuc.'"</option>';
                                }
                            ?> 
                    </select>
                    <input type="submit" name="listok" value="Tìm">
                </form>
            </div>
            <div class="row formdsloai">
                <table border="1">
                    <tr style="background-color: rgb(206, 202, 202);">
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình</th>
                        <th>Giá</th>
                        <th>Lượt Xem</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php 
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id_sanpham=".$id_sanpham;
                        $xoasp = "index.php?act=xoasp&id_sanpham=".$id_sanpham;
                        $anh = "../upload_img/".$anh_sanpham;
                        if(is_file($anh)){
                        $anh_sanpham = "<img src='".$anh."' height='120' width='120'>";
                                    }
                            else{
                        $anh_sanpham = "no photo";
                        }?>
                        <tr>
                            <td><?=$id_sanpham?></td>
                            <td><?=$ten_sanpham?></td>
                            <td><?=$anh_sanpham?></td>
                            <td><?=$gia_sanpham?></td>
                            <td><?=$luotxem_sanpham?></td>
                            <td><a href="<?=$suasp?>"><input type="button" value="Sửa" name="" id=""></a></td>
                            <td><a href="javascript:confirmDelete('<?=$xoasp?>')"><input type="button" value="Xóa"></a></td>
                        </tr>
                    <?php }?>
                </table>
            </div>
            <script>
                function confirmDelete(deleUrl){
                    if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")){
                    document.location = deleUrl;
                }
                }
            </script>
            <div class="row mb10">
                <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
            </div>
        </div>
    </div>