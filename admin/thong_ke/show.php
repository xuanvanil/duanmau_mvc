<h1 class="container mx-auto text-4xl text-red-500">show thong ke</h1>

<table class="table-auto border-separate border border-green-900">
    <thead>
        <tr>
            <th class="border border-green-600 px-3">Mã loại hàng</th>
            <th class="border border-green-600 px-3">Tên loại hàng</th>
            <th class="border border-green-600 px-3">Số lượng</th>
            <th class="border border-green-600 px-3">Giá thấp nhất</th>
            <th class="border border-green-600 px-3">Giá cao nhất</th>
            <th class="border border-green-600 px-3">Giá trung bình</th>
        </tr>
    </thead>
    <tbody>
        <!-- <tr>
            <td class="border border-green-600">a</td>
            <td class="border border-green-600">a</td>
            <td class="border border-green-600">a</td>
            <td class="border border-green-600">a</td>
            <td class="border border-green-600">a</td>
            <td class="border border-green-600">a</td>
        </tr> -->
        <?php
        foreach ($list_thongke as $show) {
            extract($show);
            echo '
                <tr>
                    <td class="border border-green-600 px-3">' . $ma_loai . '</td>
                    <td class="border border-green-600 px-3">' . $ten_loai . '</td>
                    <td class="border border-green-600 px-3">' . $count_sp . '</td>
                    <td class="border border-green-600 px-3">' . $min_gia . '</td>
                    <td class="border border-green-600 px-3">' . $max_gia . '</td>
                    <td class="border border-green-600 px-3">' . $avg_gia . '</td>
                </tr>
            ';
        }
        ?>
    </tbody>
</table>
<br> <br>
<div>
    <a href="index.php?act=chart_thongke" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">
        Xem biểu đồ
    </a>
</div>