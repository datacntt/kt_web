<?php

echo "hello";
?>

<head>
    <title>Hệ thống quản lý khách hàng</title>
    <style>
        img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 50%;
            padding: 10px;
        }

        a img:hover {
            background-color: skyblue;
        }
    </style>
</head>


<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "";
}
if ($_SESSION['username'] == "") {
    header('Location: login.php ');
}
?>


<h1 style="color:yellow ">MENU CHỨC NĂNG CHÍNH</h1>
<a href="hanghoa.php"><img src="1530840.svg" alt=""></a>
<a href=""><img src="1493693.svg" alt=""></a>
<a href=""><img src="1786522.svg" alt=""></a>