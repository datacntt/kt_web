<?php
$id = $_POST['id_diem'];
$lt = $_POST['lt'];
$th = $_POST['th'];

require 'ket_noi.php';
for($i=0; $i < count($id); $i++){
    $sql = "UPDATE diem SET ly_thuyet='$lt[$i]',thuc_hanh= '$th[$i]' WHERE id_diem = '$id[$i]'";
    $ket_noi->query($sql);
}
header('Location: diem.php');

?>
