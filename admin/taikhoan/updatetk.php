
<?php
    
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>Cập Nhật Tài Khoản</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post">
                    <div class="row mb10">
                    Tên Tài Khoản<br>
                        <input type="text" name="ten_taikhoan" value="<?=$ten_taikhoan?>">
                    </div>
                    <div class="row mb10">
                    Mật Khẩu<br>
                        <input type="text" name="matkhau_taikhoan" value="<?=$matkhau_taikhoan?>">
                    </div>
                    <div class="row mb10">
                    Email<br>
                        <input type="text" name="email_taikhoan" value="<?=$email_taikhoan?>">
                    </div>
                    <div class="row mb10">
                    Địa Chỉ<br>
                        <input type="text" name="diachi_taikhoan" value="<?=$diachi_taikhoan?>">
                    </div>
                    <div class="row mb10">
                    Số Điện Thoại<br>
                        <input type="text" name="sdt_taikhoan" value="<?=$sdt_taikhoan?>">
                    </div>
                    <div class="row mb10">
                    Vai Trò<br>
                        <input type="text" name="vaitro_taikhoan" value="<?=$vaitro_taikhoan?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id_taikhoan" value="<?=$id_taikhoan?>">
                        <input type="submit" name="capnhattaikhoan" value="Cập Nhật"></input>
                        <input type="reset" value="Nhập Lại"></input>
                        <a href="index.php?act=dskh"><input type="button" value="Danh Sách Tài Khoản"></input></a>
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