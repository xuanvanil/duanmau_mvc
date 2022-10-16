<?php

function insert_sanpham($ten_hh, $don_gia, $hinh, $mo_ta, $mo_ta_ngan, $ma_loai_sp)
{
    $sql = "INSERT INTO san_pham(ten_hh, don_gia, hinh, mo_ta, mo_ta_ngan, ma_loai_sp) VALUES('$ten_hh', '$don_gia', '$hinh', '$mo_ta', '$mo_ta_ngan', '$ma_loai_sp')";
    pdo_execute($sql);
}

function delete_sanpham($ma_hh)
{
    $sql = "DELETE FROM san_pham WHERE ma_hh=" . $ma_hh;
    pdo_execute($sql);
}

function load_5_sanpham()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY ma_hh DESC LIMIT 0,5";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function load_top5(){
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY so_luot_xem DESC LIMIT 0,5";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function list_all_shop(){
    $sql = "SELECT * FROM san_pham";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function list_all_sanpham($keyword, $ma_loai_sp)
{
    $sql = "SELECT * FROM san_pham WHERE 1";
    if ($keyword != '') {
        $sql .= " and ten_hh like '%" . $keyword . "%'";
    }
    if ($ma_loai_sp > 0) {
        $sql .= " and ma_loai_sp = '" . $ma_loai_sp . "'";
    }
    $sql .= " ORDER BY ma_hh DESC";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function load_sanpham_cungloai($ma_hh, $ma_loai_sp)
{
    $sql = "SELECT * FROM san_pham WHERE ma_loai_sp = ". $ma_loai_sp." AND ma_hh <>" . $ma_hh;
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function load_one_sanpham($ma_hh)
{
    $sql = "SELECT * FROM san_pham WHERE ma_hh=" . $ma_hh;
    $san_pham = pdo_query_one($sql);
    return $san_pham;
}

// function update_sanpham($ten_hh, $don_gia, $hinh, $mo_ta, $mo_ta_ngan, $ma_loai_sp)
// {
//     if ($hinh != "") {
//         $sql = "UPDATE san_pham SET ten_hh = '$ten_hh', don_gia = '$don_gia', hinh = '$hinh' , mo_ta = '$mo_ta', mo_ta_ngan = '$mo_ta_ngan', ma_loai_sp = '$ma_loai_sp' WHERE ma_loai=" . $ma_loai_sp;
//     } else {
//         $sql = "UPDATE san_pham SET ten_hh = '$ten_hh', don_gia = '$don_gia', mo_ta = '$mo_ta', mo_ta_ngan = '$mo_ta_ngan', ma_loai_sp = '$ma_loai_sp' WHERE ma_loai=" . $ma_loai_sp;
//     }
//     pdo_execute($sql);
// }   


function update_sanpham($ma_hh_hidden, $ten_hh, $don_gia, $file_name, $mo_ta, $mo_ta_ngan, $ma_loai_sp)
{
    if ($file_name != "") {
        $sql = "UPDATE san_pham SET ten_hh='$ten_hh', don_gia='$don_gia', hinh='$file_name', mo_ta='$mo_ta', mo_ta_ngan='$mo_ta_ngan', ma_loai_sp='$ma_loai_sp' WHERE ma_hh = '$ma_hh_hidden'";
    } else {
        $sql = "UPDATE san_pham SET ten_hh='$ten_hh', don_gia='$don_gia', mo_ta='$mo_ta', mo_ta_ngan='$mo_ta_ngan', ma_loai_sp='$ma_loai_sp' WHERE ma_hh = '$ma_hh_hidden'";
    }
    pdo_execute($sql);
}
