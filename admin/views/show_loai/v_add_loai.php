<form action="" method="post">
    <div class="addbang">
        <div class="box"> <label for="">Mã loại hàng </label> <br>
            <input type="text" name="id_loai" placeholder="Auto number">

        </div>
        <div class="box"> <label for="">Tên loại hàng </label> <br>
            <input type="text" name="ten_loai">
            <?php if (isset($err['ten_loai'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['ten_loai'] ?> </div>
            <?php endif  ?>
        </div>
        <button type="submit" name="btnluu">Thêm mới </button>
</form>
<a href="showloaihang.php"> <button type="submit"> danh sách sp </button> </a>
<br><br>
 