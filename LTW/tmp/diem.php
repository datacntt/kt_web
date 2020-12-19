<form method="post" action="luu.php">
<table>
    <tr>
        <th>STT</th>
        <th>Mã HP</th>
        <th>Tên HP</th>
        <th>LT</th>
        <th>TH</th>
    </tr>
    <?php
    require 'ket_noi.php';
    $sql = "SELECT * FROM hoc_phan, diem WHERE hoc_phan.id_hoc_phan=diem.id_hoc_phan";
    $data = $ket_noi->query($sql);
    while($row = $data->fetch_assoc()) {
    ?>
    <tr>
        <td></td>
        <td>
            <input type="hidden" name="id_diem[]" value="<?php echo $row['id_diem'] ?>">
            <?php echo $row['ma_hoc_phan'] ?>
        </td>
        <td><?php echo $row['ten_hoc_phan'] ?></td>
        <td>
            <input name="lt[]" type="text" value="<?php echo $row['ly_thuyet'] ?>">
        </td>
        <td>
            <input name="th[]" type="text" value="<?php echo $row['thuc_hanh'] ?>">
        </td>
    </tr>
    <?php } ?>
</table>
    <input type="submit" value="Lưu điểm">
</form>
