<?php
    require 'tmp/ket_noi.php';
    $hoten = $_GET['hoten'];
    $mssv = $_GET['mssv'];
    $sql = "INSERT INTO `sinhvien`(`ho_ten`, `id_lop`, `mssv`) VALUES ('$hoten', '0', '$mssv')";
    $ket_noi->query($sql);
    echo "Thêm thành công";
?>
