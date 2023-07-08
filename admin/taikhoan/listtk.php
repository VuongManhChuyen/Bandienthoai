
<div class="row">
            <div class="row formtitle">
                <h1>Danh sách tài khoản</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th>Mã Tài Khoản</th>
                            <th>Tên Tài Khoản</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Vai Trò</th>
                            <th></th>
                            <th></th>   
                        </tr>
                        <?php 
                            foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id_taikhoan=".$id_taikhoan;
                            $xoatk = "index.php?act=xoatk&id_taikhoan=".$id_taikhoan;
                            ?><tr>
                              
                                <td><?=$id_taikhoan?></td>
                                <td><?=$ten_taikhoan?></td>
                                <td><?=$matkhau_taikhoan?></td>
                                <td><?=$email_taikhoan?></td>
                                <td><?=$diachi_taikhoan?></td>
                                <td><?=$sdt_taikhoan?></td>
                                <td><?=$vaitro_taikhoan?></td>
                                <td><a href="<?=$suatk?>"><input type="button" value="Sửa"></a></td>
                                <td><a href="javascript:confirmDelete('<?=$xoatk?>')"><input type="button" value="Xóa"></a></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
                <script>
                function confirmDelete(deleUrl){
                    if (confirm("Bạn chắc chắn muốn xóa tài khoản này?")){
                        document.location = deleUrl;
                    }
                }
                </script>
                </div>
            </div>
        </div>
