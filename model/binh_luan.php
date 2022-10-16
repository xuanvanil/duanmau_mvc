<?php

function insert_binhluan($noi_dung, $ma_hh, $ma_kh, $ngay_bl){
$sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ma_kh, ngay_bl) VALUES('$noi_dung', '$ma_hh', '$ma_kh', '$ngay_bl')";
pdo_execute($sql);


}
