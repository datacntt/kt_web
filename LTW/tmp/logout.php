<?php
session_start();
unset($_SESSION['da-dang-nhap']);
header("Location: login.php");
