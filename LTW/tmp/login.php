<form action="" method="post">
    <h1>Đăng nhập</h1>
    <input type="text" name="mssv" placeholder="Mã số SV">
    <br>
    <br>
    <input type="password" name="mk" placeholder="Mật khẩu">
    <br>
    <br>
    <input type="submit" value="Đăng nhập">
</form>

<?php
    if(isset($_POST['mssv'])){
        require 'tmp/ket_noi.php';
        $mssv = $_POST['mssv'];
        $mk = md5($_POST['mk']);
        $sql = "SELECT * FROM sinh_vien WHERE mssv='$mssv' && mat_khau='$mk'";
        $data = $ket_noi->query($sql);
        if($data->num_rows > 0){
            session_start();
            $_SESSION['da-dang-nhap'] = $data;
            header("Location: danh-sach.php");
        }else{
            echo "Đăng nhập thất baị";
        }
    }
?>
