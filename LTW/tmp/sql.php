<?php
require 'ket_noi.php';

$sql = "SELECT * FROM sinh_vien";
$data = $ket_noi->query($sql);
?>

<a href="them.php">Thêm</a>
<table>
    <tr>
        <th>#</th>
        <th>STT</th>
        <th>MSSV</th>
        <th>Họ tên</th>
    </tr>
    <?php $stt=0; while($row = $data->fetch_assoc()){ ?>
    <tr>
        <td>
            <a href="xoa.php?id_sinh_vien=<?php echo $row['id_sinh_vien']; ?>">Xóa</a>
            |
            <a href="">Cập nhật</a>
        </td>
        <td><?php echo $stt++; ?></td>
        <td><?php echo $row['mssv']; ?></td>
        <td><?php echo $row['ho_ten']; ?></td>
    </tr>
    <?php } ?>
</table>
