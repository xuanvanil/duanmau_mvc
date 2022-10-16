<!-- content -->
<section class="shop my-28">
    <div class="container mx-auto">
        <div class="grid grid-cols-5">
            <div class="category">
                <h2 class="font-bold text-[24px] text-white bg-black uppercase p-1 text-center">Danh mục sản phẩm</h2>
                <ul class="pl-8 py-4">

                    <?php
                    foreach ($list_loaihang as $show) {
                        extract($show);
                        echo '
                            <li class="my-2 border px-4"><a href="">' . $ten_loai . '</a></li>
                            ';
                    }
                    ?>
                </ul>
                <ul class="pl-8 py-4">

                </ul>
            </div>

            <div class="col-span-4">
                <div class="w-[400px] mx-8">
                    <form action="">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                        <div class="relative" bis_skin_checked="1">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none" bis_skin_checked="1">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" name="keyword" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tìm kiếm sản phẩm..." required="">
                            <button type="submit" name="filter_list" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>

                <div class="grid grid-cols-4 gap-10">
                    <?php
                    foreach ($list_all_shop as $show) {
                        extract($show);
                        $link = "index.php?act=product_details&ma_hh=" . $ma_hh;

                        echo '
                        <div class="bg-white shadow-lg hover:shadow-xl rounded-lg">
                        <div>
                            <a href="' . $link . '">
                                <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                <img src="../admin/upload/' . $hinh . '" alt="" class="w-full h-full">
                                </div>
                                <div class="flex justify-between items-start px-2 pt-2">
                                    <div class="p-2 flex-grow">
                                        <h1 class="font-medium text-xl font-poppins">' . $ten_hh . '</h1>
                                        <p class="text-gray-500 font-nunito">' . $mo_ta_ngan . '</p>
                                    </div>
                                    <div class="p-2 text-right">
                                        <div class="text-teal-500 font-semibold text-lg font-poppins">' . $don_gia . '</div>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex justify-center items-center px-2 pb-2">
                            <div class="w-1/2 p-2">
                                <a href="' . $link . '" class=" text-center block w-full bg-teal-500 hover:bg-teal-600 text-white border-2 border-teal-500 hover:border-teal-600 px-3 py-2 rounded uppercase font-poppins font-medium text-xs">
                                    <svg viewBox="0 0 24 24" class="inline w-4 h-4">
                                        <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                    </svg> Chi tiết
                                </a>
                            </div>
                            <div class="w-1/2 p-2">
                                <a href="index.php?act=cart" class="text-center block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium text-[10px]">
                                    Thêm giỏ hàng
                                </a>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>