<?php
    require_once "ketnoi.php";
    $mhh = $_GET['hh'];
    $xoa = "delete from hanghoa where MAHANGHOA = '"+$mhh+"'";
    if ($conn->query($xoa) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
	//header("Location: hanghoa.php");