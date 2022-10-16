<div class="container mx-auto bg-yellow-500 p-24">
    <div class="my-6">
        <?php
        if (isset($msg) && ($msg != "")) {
            echo '
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 inline-block">
                ' . $msg . '
                </div>
            ';
        }
        ?>
    </div>

    <form action="index.php?act=add_khachhang" method="post">
        <div>
            <label for="">Tên tài khoản</label>
            <input type="text" name="user_name" class="border">
        </div>
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="ho_ten" class="border">
        </div>
        <div>
            <label for="">Mật khẩu</label>
            <input type="text" name="mat_khau" class="border">
        </div>
        <div>
            <label for="">Hình</label>
            <input type="text" name="hinh" class="border">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" class="border">
        </div>
        <br>
        <div>
            <button type="submit" name="add_khachhang" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Thêm khách hàng
            </button> 
            <a href="index.php?act=list_khachhang" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">Danh sách</a>
        </div>
    </form>
</div>