<div class="row mb">
    <div class="row formtitle">
        <h1>Thống kê</h1>
    </div>
    <div class="row formcontent">
        <div class="row formdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG SẢN PHẨM</th>
                    <th>GIÁ MAX</th>
                    <th>GIÁ MIN</th>
                    <th>GIÁ TRUNG BÌNH</td>
                </tr>
                <?php

                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxgia.'</td>
                            <td>'.$mingia.'</td>
                            <td>'.$avggia.'</td>
                        </tr>';
                }

                ?>
               
            </table>
            </div>
        </div>
    </div>
