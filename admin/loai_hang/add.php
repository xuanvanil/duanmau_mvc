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

    <form action="index.php?act=add_loaihang" method="post">
        <div>
            <label for="">Tên loại hàng:</label>
            <input type="text" name="ten_loai" class="border">
        </div>
        <br>
        <div>
            <button type="submit" name="add_loaihang" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Thêm loại hàng
            </button> 
            <a href="index.php?act=list_loaihang" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">Danh sách</a>
        </div>
    </form>
</div>