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
    if (is_array($san_pham)) {
        extract($san_pham);
    }

    $img = "./upload/" . $hinh;
    if (is_file($img)) {
        $image = "<img src = '" . $img . "'>";
    } else {
        $image = "Khong co hinh";
    }
    // var_dump($image);
    ?>


    <form action="index.php?act=update_sanpham" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="ma_hh_hidden" value="<?= $ma_hh ?>">
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Tên sản phẩm</label>
            <input type="text" name="ten_hh" class="border" value="<?= $ten_hh ?>">
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Đơn giá</label>
            <input type="number" name="don_gia" class="border" value="<?= $don_gia ?>">
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Hình </label>
            <?= $image ?>
            <input type="file" name="hinh">
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Mô tả </label>
            <textarea name="mo_ta" id="" cols="30" rows="10">
                <?= $mo_ta ?>
            </textarea>
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Mô tả ngắn </label>
            <input type="text" name="mo_ta_ngan" class="border" value="<?= $mo_ta_ngan ?>">
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Số lượt xem </label>
            <input type="number" name="so_luot_xem" class="border" disabled>
        </div>
        <div class="grid grid-cols-5">
            <label for="" class="text-right mx-6">Loại hàng</label>
            <select name="ma_loai_sp">
                <option value="0" selected>
                    Tất cả
                </option>
                <?php
                foreach ($list_loaihang as $show) {
                    extract($show);
                    if ($ma_loai_sp == $ma_loai) {
                        echo '
                            <option value="' . $ma_loai . '" selected>
                                ' . $ten_loai . '
                            </option>
                        ';
                    } else {
                        echo '
                            <option value="' . $ma_loai . '">
                                ' . $ten_loai . '
                            </option>
                        ';
                    }
                }
                ?>
            </select>
        </div>
        <br>
        <div>
            <button type="submit" name="update_sanpham" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Cập nhật
            </button>
            <a href="index.php?act=list_sanpham" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">Danh sách</a>
        </div>
    </form>
</div>