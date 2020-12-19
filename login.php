<form action="#" method="post">
    <h2 class="title">ĐĂNG NHẬP</h2>
    <div>
        <input type="text" placeholder="Username" name="username" />
    </div>
    <div>
        <input type="password" placeholder="Password" name="loginPassword" />
    </div>
    <input type="submit" value="ĐĂNG NHẬP" class="btn solid" name="submit_dn" />
</form>


<?php

require_once("ketnoi.php");
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["submit_dn"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    //$password = md5($_POST["loginPassword"]);

    $password = $_POST["loginPassword"];

    
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);

    if ($username == "" || $_POST['loginPassword'] == "") {
        $chuoi = "<script>";
        $chuoi = $chuoi . "alert('Tên đăng nhập hoặc mật khẩu bạn không được để trống!')" . "</script>";
        echo "$chuoi";
    }
    else if(strlen($password) < 5){
        $chuoi = "<script>";
        $chuoi = $chuoi . "alert('Mật khẩu bạn phải hơn 5 kí tự!')" . "</script>";
        echo "$chuoi";
    }
    else {
        $sql = "select * from taikhoan where TENDANGNHAP = '$username' and MATKHAU = '$password' ";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows == 0) {
            $chuoi = "<script>";
            $chuoi = $chuoi . "alert('Tên đăng nhập hoặc mật khẩu không đúng !')" . "</script>";
            echo "$chuoi";
        } else {
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
        
            // chuyển hướng trang web tới một trang gọi là index.php
            header('Location: index.php ');
        }
    }
}

?>
