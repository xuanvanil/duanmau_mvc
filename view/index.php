<?php
session_start();

include "../model/pdo.php";
include "../model/loai_hang.php";
include "../model/san_pham.php";
include "../model/khach_hang.php";




include "header.php";

$list_loaihang = list_all_loaihang();
$sp_new = load_5_sanpham();
$top5 =  load_top5();
$list_all_shop =  list_all_shop();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'shop':
            include "./shop/shop.php";
            break;
        case 'cart':
            include "./cart/cart.php";
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $ten_tk = $_POST['ten_tk'];
                $mat_khau = $_POST['mat_khau'];

                $check = check_login($ten_tk, $mat_khau);
                if (is_array($check)) {
                    $_SESSION['log'] = $check;

                    header("location: index.php");

                    // $msg = "Đăng nhập thành công";
                } else {
                    $msg = "Tài khoản hoặc mật khẩu không đúng!";
                }
            }

            include "./log/login.php";
            break;
        case 'sign_up':
            if (isset($_POST['sign_up'])) {
                $ten_tk = $_POST['ten_tk'];
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                add_khachhang($ten_tk, $ho_ten, $mat_khau, $email);

                $msg = "Đăng ký tài khoản thành công";
            }
            include "./log/signup.php";
            break;
        case 'logout':
            session_unset();
            header("location: index.php");
            break;
        case 'forget_pass':
            if (isset($_POST['send_email'])) {
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $msg = "Mật khẩu của bạn là: " . "<b>" . $check_email['mat_khau'] . "</b>";
                } else {
                    $msg = "Email này không tồn tại";
                }
            }
            include "./log/forget_pass.php";
            break;






        case 'product_details':
            if (isset($_GET['ma_hh'])) {
                $ma_hh = $_GET['ma_hh'];
                $one_sp = load_one_sanpham($ma_hh);
                extract($one_sp);
                $sanpham_cungloai = load_sanpham_cungloai($ma_hh, $ma_loai_sp);
                include "./shop/product_details.php";
            } else {
                include "home.php";
            }
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";

// session_unset();