<table class="table-auto border-separate border border-green-900">
    <thead>
        <tr>
            <th class="border border-green-600">Tên tài khoản</th>
            <th class="border border-green-600">Họ tên</th>
            <th class="border border-green-600">Mật khẩu</th>
            <!-- <th class="border border-green-600">Hình</th> -->
            <th class="border border-green-600">Email</th>
            <th class="border border-green-600">Vai trò</th>
            <th class="border border-green-600">Sửa</th>
            <th class="border border-green-600">Xóa</th>
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
        foreach ($list_khachhang as $show) {
            extract($show);
            $xoa_tk = "index.php?act=xoa_tk&ma_kh=" . $ma_kh;
            $sua_tk = "index.php?act=sua_tk&ma_kh=" . $ma_kh;
            echo '
            <tr>
                <td class="border border-green-600">' . $ten_tk . '</td>
                <td class="border border-green-600">' . $ho_ten . '</td>
                <td class="border border-green-600">' . $mat_khau . '</td>
                <td class="border border-green-600">' . $email . '</td>
                <td class="border border-green-600">' . $vai_tro . '</td>
                <td class="border border-green-600">
                    <a href="' . $sua_tk . '">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </td> 
                <td class="border border-green-600">
                    <a href="' . $xoa_tk . '">
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
<br> <br>
<div>
    <a href="index.php?act=add_khachhang" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">
        Nhập thêm
    </a>
</div>