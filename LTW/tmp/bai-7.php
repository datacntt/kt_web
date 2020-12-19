<form method="get">
    <input type="text" name="so" value="<?php echo isset($_GET['so']) == true ? $_GET['so'] : '';  ?>">
    <input type="submit" value="Tạo mảng">
</form>

<?php
    if(isset($_GET['so'])){
        $so = $_GET['so'];
        $mang = [];
        for ($i=0;$i<$so;$i++){
            $so_nn = rand(0, 100);
            array_push($mang, $so_nn);
        }
        var_dump($mang);
    }
?>
<ul>
    <li>Tổng chan: </li>
    <li>Tổng le: </li>
    <li>Min: </li>
    <li>Max: </li>
</ul>
