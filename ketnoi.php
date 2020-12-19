<?php
   $conn = mysqli_connect('localhost', 'root', '', 'quanlybanhang-de-thi');
   mysqli_query($conn,"SET NAMES 'UTF8'");
   return $conn;
