<!--product details  -->
<section class="product_details container mx-auto my-10">
    <div class="flex justify-center space-x-20">
        <!-- <img src="../../admin/upload/" alt=""> -->
        <?php
        extract($one_sp);
        echo '
        <div class="img_product max-w-[550px] max-h-[550px]">
            <img src="../admin/upload/' . $hinh . '" alt="" class="w-full h-full border-4 p-6">
        </div>
        <div class="info py-10">

            <div>
                <h1 class="font-bold uppercase text-[30px] my-4">' . $ten_hh . '</h1>
            </div>
            <div class="price text-gray-400 text-[24px] my-4">
                ' . $don_gia . ' vnđ
            </div>

            <div class="add_cart bg-black inline-block text-white p-3 rounded my-4">
                <a href="./cart.php">
                    Thêm vào giỏ hàng
                </a>
            </div> 
        </div>

        
    </div>
    <!-- <img src="" alt=""> -->
    <div class="description my-8">
        <div class="bg-black text-white inline-block font-semibold p-2">
            Mô tả
        </div>
        <div class="bg-[#F1F1F1] py-7 px-20">
            <p class="font-bold uppercase my-2 tracking-wider">' . $ten_hh . '</p>
            <p class="text-gray-500">Mô tả: ' . $mo_ta . '</p>
        </div>
    </div>
    ';
        ?>
        <!-- <div class="comment my-8">
            <div class="bg-black text-white inline-block font-semibold p-2">
                Bình luận
            </div>
            <div class="bg-[#F1F1F1] p-10">
                <ul>
                    <li class="my-3">
                        <span class="font-bold text-[20px]">Tên khách hàng: </span>
                        <span class="italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia hic sed dolore voluptatibus itaque temporibus esse autem reiciendis accusantium laboriosam ex, ipsum error necessitatibus ratione quis voluptatum beatae dignissimos iste.</span>
                        <span class="font-semibold ml-2">(Ngày bình luận)</span>
                    </li>
                    <li class="my-3">
                        <span class="font-bold text-[20px]">Tên khách hàng: </span>
                        <span class="italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia hic sed dolore voluptatibus itaque temporibus esse autem reiciendis accusantium laboriosam ex, ipsum error necessitatibus ratione quis voluptatum beatae dignissimos iste.</span>
                        <span class="font-semibold ml-2">(Ngày bình luận)</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class=" px-7 w-[700px] rounded-[12px] bg-white p-4">
                    <p class="text-xl font-semibold text-blue-900 transition-all hover:text-black">Viết bình luận cho sản phẩm</p>
                    <form action="index.php?act=add_binhluan" method="post">
                        <textarea class="h-20 px-3 text-sm py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg placeholder:text-sm" placeholder="Viết bình luận cho sản phẩm"></textarea>
                    </form>
                    <div class="flex justify-between mt-2">
                        <button type="submit" class="h-12 w-[150px] bg-blue-400 text-sm text-white rounded-lg transition-all cursor-pointer hover:bg-blue-600">
                            Gửi bình luận
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <!--  -->
        <div id="binh_luan" class="comment my-8">
            <div class="bg-black text-white inline-block font-semibold p-2">
                Bình luận
            </div>
            <div class="bg-[#F1F1F1] p-10">
                <ul>
                    <li class="my-3">
                        <span class="font-bold text-[20px]">Tên khách hàng: </span>
                        <span class="italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia hic sed dolore voluptatibus itaque temporibus esse autem reiciendis accusantium laboriosam ex, ipsum error necessitatibus ratione quis voluptatum beatae dignissimos iste.</span>
                        <span class="font-semibold ml-2">(Ngày bình luận)</span>
                    </li>
                    <li class="my-3">
                        <span class="font-bold text-[20px]">Tên khách hàng: </span>
                        <span class="italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia hic sed dolore voluptatibus itaque temporibus esse autem reiciendis accusantium laboriosam ex, ipsum error necessitatibus ratione quis voluptatum beatae dignissimos iste.</span>
                        <span class="font-semibold ml-2">(Ngày bình luận)</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class=" px-7 w-[700px] rounded-[12px] bg-white p-4">
                    <p class="text-xl font-semibold text-blue-900 transition-all hover:text-black">Viết bình luận cho sản phẩm</p>
                    <form action="index.php?act=add_binhluan" method="post">
                        <textarea class="h-20 px-3 text-sm py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg placeholder:text-sm" placeholder="Viết bình luận cho sản phẩm"></textarea>
                    </form>
                    <div class="flex justify-between mt-2">
                        <button type="submit" class="h-12 w-[150px] bg-blue-400 text-sm text-white rounded-lg transition-all cursor-pointer hover:bg-blue-600">
                            Gửi bình luận
                        </button>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- sản phẩm liên quan -->
<section class="relate_product">
    <section class="top-view my-20">
        <div class="container mx-auto">
            <p class="text-gray-500">Bouti</p>
            <h1 class="font-bold uppercase text-[24px]">Sản phẩm liên quan</h1>
        </div>
        <div class="flex justify-center items-center ">
            <div class="container mx-auto flex my-10">
                <div class="grid grid-cols-5 gap-6 ">
                    <?php
                    foreach ($sanpham_cungloai as $show) {
                        extract($show);
                        $link = "index.php?act=product_details&ma_hh=" . $ma_hh;
                        echo '
                        <div class="bg-white shadow-lg hover:shadow-xl rounded-lg relative">
                        <div class="text-right absolute top-2 right-2">

                        </div>
                        <div>
                            <a href="' . $link . '">
                                <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                <img src="../admin/upload/' . $hinh . '" alt="" class="w-full h-full">
                                </div>
                                <div class="flex justify-between items-start px-2 pt-2">
                                    <div class="p-2 flex-grow">
                                        <h1 class="font-medium text-xl font-poppins"> ' . $ten_hh . '</h1>
                                        <p class="text-gray-500 font-nunito">' . $mo_ta_ngan . '</p>
                                    </div>
                                    <div class="p-2 text-right">
                                         <div class="text-teal-500 font-semibold text-lg font-poppins">' . $don_gia . ' vnđ</div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                        ';
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
</section>