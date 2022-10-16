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
    <?php
    if (is_array($loai_hang)) {
        extract($loai_hang);
    }
    ?>
    <form action="index.php?act=update_loaihang" method="post">
        <div>
            <label for="">Mã loại hàng:</label>
             <!-- hidden ma_loai -->
            <input type="hidden" name="ma_loai" value=" <?= $ma_loai ?>" class="border">
            <input type="text" name="ma_loai" value=" <?= $ma_loai ?>" class="border">
        </div>
        <div>
            <label for="">Tên loại hàng:</label>
            <input type="text" name="ten_loai" value=" <?= $ten_loai ?>" class="border">
        </div>
        <br>
        <div>
            <button type="submit" name="update_loaihang" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Sửa
            </button>
            <a href="index.php?act=list_loaihang" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">Danh sách</a>
        </div>
    </form>
</div>