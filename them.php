<?php
require 'ketnoi.php';
$mahang = $_POST['mahanghoa'];
$nhasanxuat = $_POST['nhasx'];
$sql2 = "SELECT * FROM `nhasanxuat` ";
$data = $conn->query($sql2);
$row = $data->fetch_assoc();
$manhasanxuat = $row['MANHASANXUAT'];
$maloai = $_POST['maloai'];
$tenhang = $_POST['tenhanghoa'];
$dongia = $_POST['dongia'];
$sql = "INSERT INTO `hanghoa`(`MAHANGHOA`, `MANHASANXUAT`, `MALOAI`, `TENHANGHOA`, `DONGIA`) VALUES ('$mahang','$manhasanxuat','$maloai','$tenhang','$dongia')";
$conn->query($sql);
header("Location: hanghoa.php");
