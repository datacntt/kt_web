<?php
$server_name = "localhost";
$user_name = "root";
$pass = "";
$db_name = "ltw";

$ket_noi = new mysqli(
    $server_name,
    $user_name,
    $pass,
    $db_name,
    3308   // Không nhập
);

$ket_noi->set_charset('utf8');
?>
