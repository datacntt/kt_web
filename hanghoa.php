<legend>Thông tin hàng hóa</legend>
<form action="them.php" method="POST">
    <table>
        <tr>
            <td>Mã hàng hóa</td>
            <td><input type="text" name="mahanghoa"> </td>
        </tr>
        <tr>
            <td>Nhà sản xuất</td>
            <td>
                <select name="nhasx">
                    <?php
                    require_once "ketnoi.php";
                    $sql = "SELECT * FROM  `nhasanxuat`";
                    $data = $conn->query($sql);
                    while ($row = $data->fetch_assoc()) {

                    ?>
                        <option value="<?php echo $row['MANHASANXUAT'] ?>"><?php echo $row['TENNHASANXUAT']  ?></option>
                    <?php } ?>
                </select>
            </td>


        </tr>
        <tr>
            <td>Mã loại</td>
            <td>
                <select name="maloai">
                    <?php
                    require_once "ketnoi.php";
                    $sql = "SELECT * FROM  `loaihanghoa`";
                    $data = $conn->query($sql);
                    while ($row = $data->fetch_assoc()) {

                    ?>
                        <option value="<?php echo $row['MALOAI']  ?>"><?php echo $row['TENLOAI']  ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tên hàng hóa</td>
            <td><input type="text" name="tenhanghoa"></td>
        </tr>
        <tr>
            <td>Đơn giá</td>
            <td><input type="number" min="1000" name="dongia" value="1000"></td>
        </tr>
        <tr>
            <td></td>
            <td><input style="background-color: orange; color:white" type="submit" onclick="demtu();" value="Thêm hàng hóa mới"></td>
        </tr>

    </table>

</form>




<h1> <b>DANH SÁCH HÀNG HÓA</b></h1>

<table border="1">
    <thead>
        <td>Mã hàng hóa</td>
        <td>Tên hàng hóa</td>
        <td>Đơn giá</td>
        <td>Tên nhà sản xuất</td>
        <td>Tên loại hàng hóa</td>
        <td colspan="2">Thao tác</td>
    </thead>
    <tbody>
        <?php
        require_once "ketnoi.php";
        $sql = "SELECT * FROM  hanghoa";
        $data = $conn->query($sql);
        while ($row = $data->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['MAHANGHOA']  ?></td>
                <td><?php echo $row['TENHANGHOA']  ?></td>
                <td><?php echo $row['DONGIA']  ?>đ</td>
                <td><?php
                    $mansx = $row['MANHASANXUAT'];
                    $sql2 = "SELECT * FROM `nhasanxuat` ";
                    $data2 = $conn->query($sql2);
                    $row2 = $data2->fetch_assoc();
                    echo $row2['TENNHASANXUAT'];
                    ?></td>
                <td><?php echo $row['MALOAI']  ?></td>
                <td>
                    <a href="">Cập nhật</a>
                    <a href='xoa.php?hh=<?php echo $row['MAHANGHOA']?>'>Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    function demtu() {
        var ten = document.getElementsByClassName("tenhanghoa").value;
        var dem = ten.split(" ").length;
        if (dem < 2) {
            console.log("Tên hàng phải có ít nhất 2 từ!!!")
        }
    }
</script>