<?php
$path = "uploads/"
    . basename($_FILES["file-can_tai"]["name"]);

$st = move_uploaded_file(
    $_FILES["file-can_tai"]["tmp_name"], $path
);

if($st){
    echo "Upload file thành công";
}else{
    echo "Thất bại";
}
?>

<img height="100" src="<?php echo $path ?>" alt="">
