<?php

function insert_loaihang($ten_loai)
{
    $sql = "INSERT INTO loai(ten_loai) VALUES('$ten_loai')";
    pdo_execute($sql);
}

function delete_loaihang($ma_loai)
{
    $sql = "DELETE FROM loai WHERE ma_loai=" . $ma_loai;
    pdo_execute($sql);
}

function list_all_loaihang()
{
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
    $list_loaihang = pdo_query($sql);
    return $list_loaihang;
}

function load_one_loaihang($ma_loai)
{
    $sql = "SELECT * FROM loai WHERE ma_loai=" . $ma_loai;
    $loai_hang = pdo_query_one($sql);
    return $loai_hang;
}

function update_loaihang($ma_loai, $ten_loai)
{
    $sql = "UPDATE loai SET ten_loai = '$ten_loai' WHERE ma_loai=" . $ma_loai;
    pdo_execute($sql);
}
