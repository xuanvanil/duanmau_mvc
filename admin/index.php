<?php
include "../model/pdo.php";
include "../model/loai_hang.php";
include "../model/san_pham.php";
include "../model/khach_hang.php";
include "../model/thong_ke.php";

include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            //add loai hang
        case 'add_loaihang':
            //kiem tra nguoi dung co click nut 'add' hay khong?
            if (isset($_POST['add_loaihang'])) {
                $ten_loai = $_POST['ten_loai'];
                insert_loaihang($ten_loai);
                $msg = "Thêm loại hành thành công";
            }
            include "loai_hang/add.php";
            break;

            //list loai hang
        case 'list_loaihang':
            $list_loaihang = list_all_loaihang();
            include "loai_hang/list.php";
            break;

            //xoa loai hang 
        case 'xoa_loaihang':
            if (isset($_GET['ma_loai'])) {
                $ma_loai = $_GET['ma_loai'];
                delete_loaihang($ma_loai);
            }
            //show lai list loai hang
            $list_loaihang = list_all_loaihang();
            include "loai_hang/list.php";
            break;

            //hien thi ma_loai, ten_loai can sua
        case 'sua_loaihang':
            if (isset($_GET['ma_loai'])) {
                $ma_loai = $_GET['ma_loai'];
                $loai_hang = load_one_loaihang($ma_loai);
                // $msg = "Sửa loại hàng thành công";   
            }
            include "loai_hang/update.php";
            break;

            //sua ten_loai
        case 'update_loaihang':
            if (isset($_POST['update_loaihang'])) {
                $ma_loai = $_POST['ma_loai'];
                $ten_loai = $_POST['ten_loai'];
                update_loaihang($ma_loai, $ten_loai);
                $msg = "Sửa loại hàng thành công";
            }

            $list_loaihang = list_all_loaihang();
            include "loai_hang/list.php";
            break;



            //end loaihang
            //
            ///

            //add sanpham
        case 'add_sanpham':
            //kiem tra nguoi dung co click nut 'add' hay khong?
            if (isset($_POST['add_sanpham'])) {
                $ma_loai = $_POST['ma_loai'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $mo_ta_ngan = $_POST['mo_ta_ngan'];

                // $hinh = $_POST['hinh'];
                $file_name = $_FILES['hinh']['name'];

                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // echo "Up load ok";
                } else {
                    // echo "Không upload được";
                }

                insert_sanpham($ten_hh, $don_gia, $file_name, $mo_ta, $mo_ta_ngan, $ma_loai);
                $msg = "Thêm sản phầm thành công";
            }

            $list_loaihang = list_all_loaihang();
            include "san_pham/add.php";
            break;

            //list sanpham
        case 'list_sanpham':
            if (isset($_POST['filter_list'])) {
                $keyword = $_POST['keyword'];
                $ma_loai = $_POST['ma_loai'];
            } else {
                $keyword = '';
                $ma_loai = '';
            }

            $list_loaihang = list_all_loaihang();

            $list_sanpham = list_all_sanpham($keyword, $ma_loai);
            include "san_pham/list.php";
            break;

            //xoa sanpham
        case 'xoa_sanpham':
            if (isset($_GET['ma_hh'])) {
                $ma_hh = $_GET['ma_hh'];
                delete_sanpham($ma_hh);
            }
            //show lai list sanpham
            $list_sanpham = list_all_sanpham("", 0);
            include "san_pham/list.php";
            break;

            //hien thi ma_loai, ten_loai can sua
        case 'sua_sanpham':
            if (isset($_GET['ma_hh'])) {
                $ma_hh = $_GET['ma_hh'];
                $san_pham = load_one_sanpham($ma_hh);
            }

            $list_loaihang = list_all_loaihang();
            $list_sanpham = list_all_sanpham("", 0);
            include "san_pham/update.php";
            break;

            //sua sanpham
        case 'update_sanpham':
            if (isset($_POST['update_sanpham'])) {
                $ma_hh_hidden = $_POST['ma_hh_hidden'];

                $ma_loai_sp = $_POST['ma_loai_sp'];

                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $mo_ta_ngan = $_POST['mo_ta_ngan'];

                // $hinh = $_POST['hinh'];
                $file_name = $_FILES['hinh']['name'];

                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // echo "Up load ok";
                } else {
                    // echo "Không upload được";
                }
                update_sanpham($ma_hh_hidden, $ten_hh, $don_gia, $file_name, $mo_ta, $mo_ta_ngan, $ma_loai_sp);

                $msg = "Sửa sản phẩm thành công";
            }

            $list_loaihang = list_all_loaihang();
            $list_sanpham = list_all_sanpham("", 0);
            include "san_pham/list.php";
            break;


            // case 'add_sanpham':
            //     include "san_pham/add.php";
            //     break;
            // case 'add_sanpham':
            //     include "san_pham/add.php";
            //     break;
            // case 'add_sanpham':
            //     include "san_pham/add.php";
            //     break;


        case 'list_khachhang':
            $list_khachhang = list_all_khachhang();
            include "khach_hang/list.php";
            break;
        case 'xoa_tk':
            if (isset($_GET['ma_kh'])) {
                $ma_kh = $_GET['ma_kh'];
                delete_khachhang($ma_kh);
            }
            //show lai list khachhang
            $list_khachhang = list_all_khachhang();
            include "khach_hang/list.php";
            break;



        case 'list_binhluan':
            include "binh_luan/list.php";
            break;
        case 'thong_ke':
            $list_thongke = load_all_thongke();
            include "thong_ke/show.php";
            break;

        case 'chart_thongke':
            $list_thongke = load_all_thongke();
            include "thong_ke/chart_thongke.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
