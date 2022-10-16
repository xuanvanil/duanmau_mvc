<div class="container mx-auto bg-yellow-500 p-24">
    <div>
        <form action="index.php?act=list_sanpham" method="post">
            <input type="text" name="keyword">
            <select name="ma_loai">
                <option value="0" selected>
                    Tất cả
                </option>
                <?php
                foreach ($list_loaihang as $show) {
                    extract($show);
                    echo '
                        <option value="' . $ma_loai . '">
                            ' . $ten_loai . '
                        </option>
                    ';
                }
                ?>
            </select>
            <button type="submit" name="filter_list" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 my-2 rounded">
                Tìm kiếm
            </button>
        </form>
        <table class="table-auto border-separate border border-green-900">
            <thead>
                <tr>
                    <th class="border border-green-600">Mã sản phẩm</th>
                    <th class="border border-green-600">Tên sản phẩm</th>
                    <th class="border border-green-600">Đơn giá</th>
                    <th class="border border-green-600">Hình</th>
                    <th class="border border-green-600">Mô tả</th>
                    <th class="border border-green-600">Mô tả ngắn</th>
                    <th class="border border-green-600">Số lượt xem</th>
                    <th class="border border-green-600">Loại hàng</th>
                    <th class="border border-green-600">Sửa</th>
                    <th class="border border-green-600">Xóa</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($list_sanpham as $show) {


                    extract($show);
                    //tao bien sua, xoa
                    $sua_sanpham = "index.php?act=sua_sanpham&ma_hh=" . $ma_hh;
                    $xoa_sanpham = "index.php?act=xoa_sanpham&ma_hh=" . $ma_hh;

                    $img = "./upload/" . $hinh;
                    if (is_file($img)) {
                        $image = "<img src = '" . $img . "'>";
                    } else {
                        $image = "Khong co hinh";
                    }

                    // 
                    echo '
                    <tr>
                        <td class="border border-green-600">
                            ' . $ma_hh . '
                        </td>
                        <td class="border border-green-600">
                        ' . $ten_hh . '
                        </td>
                        <td class="border border-green-600">
                        ' . $don_gia . '
                        <td class="border border-green-600">
                            ' . $image . '
                        </td>
                        <td class="border border-green-600 w-[400px]">
                        ' . $mo_ta . '
                        </td>
                        <td class="border border-green-600">
                        ' . $mo_ta_ngan . '

                        </td>
                        <td class="border border-green-600">
                        ' . $so_luot_xem . '

                        </td>
                        <td class="border border-green-600">
                        ' . $ma_loai_sp . '

                        </td>
                        <td class="border border-green-600">
                            <a href="' . $sua_sanpham . '">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                        </td>
                        <td class="border border-green-600">
                            <a href="' . $xoa_sanpham . '">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
    <br> <br>
    <div>
        <a href="index.php?act=add_sanpham" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">
            Nhập thêm
        </a>
    </div>
</div>