<main>
<div class="noidung">
            <table border="1">
                <tr>
                    <th>Chọn</th>
                    <th>id loại</th>
                    <th>Tên Loại hàng</th>
                    <th>Chỉnh sửa</th>
                </tr>
                <?php foreach($m_loais as $key=>$value){ ?>
                <tr>
                    <td> <input type="checkbox"></td>
                    <td><?php echo $value->id_loai ?></td>
                    <td><?php echo $value->ten_loai ?></td>
                    <td>
                        <a href=" ">Sửa</a>
                        <a href=" ">xóa</a>
                    </td>
                </tr>
                <?php }?>
            </table>
            <a href=" "> <button type="submit">Thêm loại hàng </button></a>
        </div>
</main>