
<div class="row">
            <div class="row formtitle">
                <h1>Thêm danh Mục</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class=" row mb10">
                    Mã Danh Mục<br>
                        <input type="text" name="id_danhmuc" disabled></input>
                    </div>
                    <div class="row mb10">
                    Tên Danh Mục<br>
                        <input type="text" name="ten_danhmuc" required></input>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="themdanhmuc" value="Thêm Danh Mục"></input>
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