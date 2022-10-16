<!-- signin -->
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="./img/favicon.png" alt="logo">
            Bouti
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Đăng nhập vào tài khoản của bạn
                </h1>
                <form class="space-y-4 md:space-y-6" action="index.php?act=login" method="POST">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Tên tài khoản</label>
                        <input type="text" name="ten_tk" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required="">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu</label>
                        <input type="password" name="mat_khau" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="index.php?act=forget_pass" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Quên mật khẩu?</a>
                    </div>
                    <button type="submit" name="login" class="w-full text-white bg-sky-400 hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-400 dark:hover:bg-sky-400 dark:focus:ring-sky-400">Đăng nhập</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Bạn chưa có tài khoản? <a href="index.php?act=sign_up" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Đăng ký ngay</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>