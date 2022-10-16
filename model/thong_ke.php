<?php

function load_all_thongke()
{
    $sql  = "SELECT loai.ma_loai, loai.ten_loai, COUNT(san_pham.ma_hh) as count_sp, min(san_pham.don_gia) as min_gia, max(san_pham.don_gia) as max_gia, avg(san_pham.don_gia) as avg_gia";
    $sql .= " from san_pham left join loai on loai.ma_loai = san_pham.ma_loai_sp";
    $sql .= " group by loai.ma_loai order by loai.ma_loai desc";
    $list_thongke = pdo_query($sql);
    return $list_thongke;
}
