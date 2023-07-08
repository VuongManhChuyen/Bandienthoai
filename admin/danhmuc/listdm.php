<div class="">
 

<!-- ok -->
<div class="row">
            <div class="row formtitle">
                <h1>Danh Sách Danh Mục</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th>Mã Danh Mục</th>
                            <th>Tên Danh Mục</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach (list_danhmuc()as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id_danhmuc=".$id_danhmuc;
                            $xoadm = "index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
                        ?>
                            <tr>
                                <td><?= $id_danhmuc ?></td>
                                <td><?= $ten_danhmuc ?></td>
                                <td><a href="<?= $suadm ?>"><input type="button" value="Sửa" name="" id=""></a> <a href="javascript:confirmDelete('<?= $xoadm ?>')"><input type="button" value="Xóa"></a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <script>
                    function confirmDelete(deleUrl) {
                        if (confirm("Bạn chắc chắn muốn xóa danh mục này?")) {
                            document.location = deleUrl;
                        }
                    }
                </script>
                <div class="row mb10">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
                </div>
            </div>
        </div>