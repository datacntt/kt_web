<style>*{padding: 0; margin: 0} </style>

<?php
require 'ket_noi.php';
$id = $_GET['id_sinh_vien'];
$sql = "SELECT * FROM `sinh_vien` WHERE `id_sinh_vien` = $id";
$data = $ket_noi->query($sql);
?>

<form method="get">
    <h1>CẬP NHẬT</h1>
    <?php while($row = $data->fetch_assoc()) { ?>
        <input type="hidden" name="id_sinh_vien" value="<?php echo $id; ?>">
        <p>MSSV</p>
        <input type="text" name="mssv" value="<?php echo $row['mssv']; ?>">

        <p>Họ tên</p>
        <input type="text" name="ht" value="<?php echo $row['ho_ten']; ?>">
        <br>
    <?php } ?>
    <input type="submit" value="Cập nhật dữ liệu">
</form>

