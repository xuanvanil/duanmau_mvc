<link rel="stylesheet" href="./style/slide_show.css">


<!-- banner -->
<section class="banner relative">
    <!--  -->
    <!-- Slideshow container -->
    <div class="slideshow-container w-full ">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./img/hero-banner-alt.jpg" class="w-full h-[650px]">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade ">
            <div class="numbertext">2 / 3</div>
            <img src="./img/banner.jpg" class="w-full h-[650px]">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./img/hero-banner-alt.jpg" class="w-full h-[650px]">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    </div>
    <br>

    <!-- The dots/circles -->
    <!-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> -->
    <!--  -->
    <!-- <div class="text-banner absolute top-[50%] left-[15%]">
        <p class="uppercase text-gray-500">Nhận định mới 2022</p>
        <p class="uppercase font-bold text-[32px] tracking-widest">Giảm đến 30% cho mùa tới</p>
        <a href="" class="bg-black text-white px-3 py-2">Xem ngay</a>
    </div> -->

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>
</section>

<!-- top 5 xem nhiều -->
<section class="top-view my-20">
    <div class="container mx-auto">
        <p class="text-gray-500">Bouti</p>
        <h1 class="font-bold uppercase text-[24px]">Top 5 sản mới nhất</h1>
    </div>
    <div class="flex justify-center items-center ">
        <div class="container mx-auto flex my-10">

            <div class="grid grid-cols-4 gap-6 px-5">
                <!-- <div class="bg-white shadow-lg hover:shadow-xl rounded-lg">
                    <div>
                        <a href="./product_details.php">
                            <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                <img src="img/hero-banner-alt.jpg" alt="" class="w-[400px] h-64">
                            </div>
                            <div class="flex justify-between items-start px-2 pt-2">
                                <div class="p-2 flex-grow">
                                    <h1 class="font-medium text-xl font-poppins">Product name</h1>
                                    <p class="text-gray-500 font-nunito">Short description here</p>
                                </div>
                                <div class="p-2 text-right">
                                    <div class="text-teal-500 font-semibold text-lg font-poppins">$40</div>
                                    <div class="text-xs text-gray-500 line-through font-poppins">$80</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center px-2 pb-2">
                        <div class="w-1/2 p-2">
                            <a href="index.php?act=product_details" class=" text-center block w-full bg-teal-500 hover:bg-teal-600 text-white border-2 border-teal-500 hover:border-teal-600 px-3 py-2 rounded uppercase font-poppins font-medium">
                                <svg viewBox="0 0 24 24" class="inline w-4 h-4">
                                    <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                </svg> Chi tiết
                            </a>
                        </div>
                        <div class="w-1/2 p-2">
                            <a href="index.php?act=cart" class="text-center block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                                Thêm giỏ hàng
                            </a>
                        </div>
                    </div>
                </div> -->
                <?php
                foreach ($sp_new as $show) {
                    extract($show);
                    $link = "index.php?act=product_details&ma_hh=" . $ma_hh;
                    echo '
                    <div class="bg-white shadow-lg hover:shadow-xl rounded-lg">
                        <div>
                            <a href="' . $link . '">
                                <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                    <img src="../admin/upload/' . $hinh . '" alt="" class="w-[400px] h-64">
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
                                <a href="' . $link . '" class="text-[14px] text-center block w-full bg-teal-500 hover:bg-teal-600 text-white border-2 border-teal-500 hover:border-teal-600 px-3 py-2 rounded uppercase font-poppins font-medium">
                                    <svg viewBox="0 0 24 24" class="inline w-4 h-4">
                                        <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                    </svg> Chi tiết
                                </a>
                            </div>
                            <div class="w-1/2 p-2">
                                <a href="index.php?act=cart" class=" text-[14px] text-center block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                                    Thêm giỏ hàng
                                </a>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- top 5 mới nhất -->
<section class="top-view my-20">
    <div class="container mx-auto">
        <p class="text-gray-500">Bouti</p>
        <h1 class="font-bold uppercase text-[24px]">Top 5 sản phẩm xem nhiều</h1>
    </div>
    <div class="flex justify-center items-center ">
        <div class="container mx-auto flex my-10">
            <div class="grid grid-cols-4 gap-6 px-5">
                <!-- <div class="bg-white shadow-lg hover:shadow-xl rounded-lg">
                    <div>
                        <a href="./product_details.php">
                            <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                <img src="img/hero-banner-alt.jpg" alt="" class="w-[400px] h-64">
                            </div>
                            <div class="flex justify-between items-start px-2 pt-2">
                                <div class="p-2 flex-grow">
                                    <h1 class="font-medium text-xl font-poppins">Product name</h1>
                                    <p class="text-gray-500 font-nunito">Short description here</p>
                                </div>
                                <div class="p-2 text-right">
                                    <div class="text-teal-500 font-semibold text-lg font-poppins">$40</div>
                                    <div class="text-xs text-gray-500 line-through font-poppins">$80</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center px-2 pb-2">
                        <div class="w-1/2 p-2">
                            <a href="index.php?act=product_details" class=" text-center block w-full bg-teal-500 hover:bg-teal-600 text-white border-2 border-teal-500 hover:border-teal-600 px-3 py-2 rounded uppercase font-poppins font-medium">
                                <svg viewBox="0 0 24 24" class="inline w-4 h-4">
                                    <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                </svg> Chi tiết
                            </a>
                        </div>
                        <div class="w-1/2 p-2">
                            <a href="index.php?act=cart" class="text-center block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                                Thêm giỏ hàng
                            </a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="grid grid-cols-4 gap-6 px-5"> -->
                <!-- <div class="bg-white shadow-lg hover:shadow-xl rounded-lg">
                    <div>
                        <a href="./product_details.php">
                            <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                <img src="img/hero-banner-alt.jpg" alt="" class="w-[400px] h-64">
                            </div>
                            <div class="flex justify-between items-start px-2 pt-2">
                                <div class="p-2 flex-grow">
                                    <h1 class="font-medium text-xl font-poppins">Product name</h1>
                                    <p class="text-gray-500 font-nunito">Short description here</p>
                                </div>
                                <div class="p-2 text-right">
                                    <div class="text-teal-500 font-semibold text-lg font-poppins">$40</div>
                                    <div class="text-xs text-gray-500 line-through font-poppins">$80</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center items-center px-2 pb-2">
                        <div class="w-1/2 p-2">
                            <a href="index.php?act=product_details" class=" text-center block w-full bg-teal-500 hover:bg-teal-600 text-white border-2 border-teal-500 hover:border-teal-600 px-3 py-2 rounded uppercase font-poppins font-medium">
                                <svg viewBox="0 0 24 24" class="inline w-4 h-4">
                                    <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                </svg> Chi tiết
                            </a>
                        </div>
                        <div class="w-1/2 p-2">
                            <a href="index.php?act=cart" class="text-center block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                                Thêm giỏ hàng
                            </a>
                        </div>
                    </div>
                </div> -->
                <?php
                foreach ($top5 as $show) {
                    extract($show);
                    $link = "index.php?act=product_details&ma_hh=" . $ma_hh;
                    echo '
                    <div class="bg-white shadow-lg hover:shadow-xl rounded-lg">
                        <div>
                            <a href="' . $link . '">
                                <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                    <img src="../admin/upload/' . $hinh . '" alt="" class="w-[400px] h-64 border">
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
                                <a href="' . $link . '" class="text-[14px] text-center block w-full bg-teal-500 hover:bg-teal-600 text-white border-2 border-teal-500 hover:border-teal-600 px-3 py-2 rounded uppercase font-poppins font-medium">
                                    <svg viewBox="0 0 24 24" class="inline w-4 h-4">
                                        <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                    </svg> Chi tiết
                                </a>
                            </div>
                            <div class="w-1/2 p-2">
                                <a href="index.php?act=cart" class=" text-[14px] text-center block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                                    Thêm giỏ hàng
                                </a>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</section>