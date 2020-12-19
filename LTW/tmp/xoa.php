<?php
require 'ket_noi.php';
$id_sinh_vien = $_GET['id_sinh_vien'];
$sql = "DELETE FROM `sinh_vien` WHERE id_sinh_vien=$id_sinh_vien";
$ket_noi->query($sql);
header("Location: sql.php");
?>
