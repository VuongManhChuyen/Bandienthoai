<div class="row">
            <div class="row formtitle">
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>                           
                            <th>ID Bình Luận</th>
                            <th>Tài Khoản Bình Luận</th>
                            <th>Nội dung</th>
                            <th>Mã khách hàng</th>
                            <th>Mã sản phẩm</th>
                            <th>Thời gian</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl = "index.php?act=xoabl&id_binhluan=".$id_binhluan;
                            ?><tr>
                                
                                <td><?=$id_binhluan?></td>
                                <td><?=$ten_taikhoan?></td>
                                <td><?=$noidung_binhluan?></td>
                                <td><?=$id_nguoidung?></td>
                                <td><?=$id_pro?></td>
                                <td><?=$ngay_binhluan	?></td>
                                <td><a href="javascript:confirmDelete('<?=$xoabl?>')"><input type="button" value="Xóa"></a></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
                <script>
                function confirmDelete(deleUrl){
                    if (confirm("Bạn chắc chắn muốn xóa bình luận này?")){
                        document.location = deleUrl;
                    }
                }
                </script>
                </div>
                
            </div>
        </div>
