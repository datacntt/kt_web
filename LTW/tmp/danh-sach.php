<?php
session_start();
if(isset($_SESSION['da-dang-nhap'])){
    echo "Xin chào " . $_SESSION['da-dang-nhap'];
}else{
    header("Location: login.php");
}
?>

<a href="logout.php"></a>
