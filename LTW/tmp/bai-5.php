<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung</th>
    </tr>
    <?php
        for($i=1; $i<=100;$i++) {
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>Tên sách <?php echo $i; ?></td>
        <td>Nội dung <?php echo $i; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
