<style>
    label {
        width: 200px;
        display: block;
        font-weight: bold;
    }
    input, select {
        width: 200px;
        height: 40px;
    }
</style>
<form action="upload.php"
      method="post"
      enctype="multipart/form-data">

    <label for="">Ảnh</label>
    <input type="file" name="file-can_tai">
    <br>
    <input type="submit" value="Tải lên" name="submit">
</form>
