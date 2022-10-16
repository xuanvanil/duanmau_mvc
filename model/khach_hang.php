<?php


function add_khachhang($ten_tk, $ho_ten, $mat_khau, $email)
{
    $sql = "INSERT INTO khach_hang(ten_tk, ho_ten, mat_khau, email) VALUES('$ten_tk', '$ho_ten', '$mat_khau', '$email')";
    pdo_execute($sql);
}

function check_login($ten_tk, $mat_khau)
{
    $sql = "SELECT * FROM khach_hang WHERE ten_tk='" . $ten_tk . " ' AND mat_khau='" . $mat_khau . "' ";
    $log = pdo_query_one($sql);
    return $log;
}

function check_email($email)
{
    $sql = "SELECT * FROM khach_hang WHERE email='" . $email . "'";
    $email = pdo_query_one($sql);
    return $email;
}


function list_all_khachhang()
{
    $sql = "SELECT * FROM khach_hang ORDER BY ten_tk ASC";
    $list_khachhang = pdo_query($sql);
    return $list_khachhang;
}

function delete_khachhang($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh=" . $ma_kh;
    pdo_execute($sql);
}

