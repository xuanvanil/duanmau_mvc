<?php
include "../../model/pdo.php";
include "../../model/binh_luan.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bouti</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="comment my-8">
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
                <form action="" method="post">

                    <textarea name="noidung_binhluan" class="h-20 px-3 text-sm py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg placeholder:text-sm" placeholder="Viết bình luận cho sản phẩm"></textarea>
                    <div class="flex justify-between mt-2">
                        <button type="submit" name="send_binhluan" class="h-12 w-[150px] bg-blue-400 text-sm text-white rounded-lg transition-all cursor-pointer hover:bg-blue-600">
                            Gửi bình luận
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>