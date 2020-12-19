<table>
    <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>MSSV</th>
    </tr>

    <?php
    require 'tmp/ket_noi.php';
    $sql = "SELECT * FROM `sinhvien`";
    $data = $ket_noi->query($sql);
    while ($row = $data->fetch_assoc()) {
    ?>
        <tr>
            <td>STT</td>
            <td><?php echo $row['ho_ten'] ?></td>
            <td><?php echo $row['mssv'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>
