<main>
<div class="noidung">
            <table border="1">
                <tr>
                    <th>Chọn</th>
                    <th>id Bình luận</th>
                 
                    <th>id Khách hàng</th>
                    <th>id hàng hóa </th>
                    <th>Nội dung</th>
                    <th>ngày bình luận</th>
                    <th>ảnh bình luận</th>
               
                    <th>Chỉnh sửa</th>
                </tr>
                <?php foreach($m_binh_luans as $key=>$value){ ?>
                <tr>
                    <td> <input type="checkbox"></td>
                    <td><?php echo $value->id_bl ?></td>
                    <td><?php echo $value->id_kh ?></td>
                    <td><?php echo $value->id_hh ?></td>
                    <td><?php echo $value->noi_dung ?></td>
                    <td><?php echo $value->ngay_bl ?></td>
                    <td><img src="../../../daall/public/images/<?php echo $value->anhbl ?>" alt="" width="80px"></td>
                    
                   
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