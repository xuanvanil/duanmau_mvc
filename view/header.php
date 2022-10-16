<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOUTI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&family=Martel+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">


    <link rel="shortcut icon" href="img/favicon.png">

    <style>
        * {
            font-family: 'Libre Franklin', 'Martel Sans', sans-serif;
        }
    </style>
</head>

<body>
    <!--header  -->

    <section class="header container mx-auto py-4">
        <div class="flex justify-between items-center font-semibold">
            <div class="menu">
                <ul class="flex space-x-5">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=shop">Sản phẩm</a></li>
                </ul>
            </div>
            <div class="logo ">
                <a href="index.php" class="flex items-center space-x-2">
                    <img src="img/favicon.png" alt="" class="h-10">
                    <p class="text-[24px] font-bold">BOUTI</p>
                </a>
            </div>
            <div class="icon flex space-x-5">
                <div class="cart">
                    <a href="index.php?act=cart"><i class="fa-solid fa-cart-flatbed"></i> <span>Giỏ hàng</span></a>
                </div>
                <div class="login group inline-block relative">
                    <?php
                    if (isset($_SESSION['log'])) {
                        extract($_SESSION['log']);
                    ?>
                        <a href=""><i class="fa-regular fa-user"></i></i> <span><?= $ten_tk ?></span></a>
                        <ul class="absolute hidden z-10 text-gray-700 pt-1 group-hover:block w-[150px]">
                            <?php
                            if ($vai_tro == 1) {
                            ?>
                                <li>
                                    <a href="../admin/index.php" class=" text-xs rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block ">Vào trang quản trị</a>
                                </li>
                            <?php } ?>
                            <li class="">
                                <a href="index.php?act=forget_pass" class=" text-xs rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block ">Quên mật khẩu</a>
                            </li>
                            <li class="">
                                <a href="index.php?act=logout" class=" text-xs rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block ">Đăng xuất</a>
                            </li>

                        </ul>
                    <?php } else {
                    ?>
                        <a href="index.php?act=login"><i class="fa-regular fa-user"></i></i> <span>Đăng nhập</span></a>
                    <?php } ?>

                </div>

            </div>
        </div>
    </section>