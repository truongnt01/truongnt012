<main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h1>54</h1>
            <span><i class="fa-solid fa-users"></i>Customer</span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>79</h1>
            <span><i class="fa-solid fa-diagram-project"></i>Projects</span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>124</h1>
            <span><i class="fa-brands fa-product-hunt"></i>Product</span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>$6k</h1>
            <span><i class="fa-solid fa-users"></i>Income</span>
          </div>
        </div>

      </div>
 
      <div class="noidung">
        <table border="1">
          <tr>
            <th>Chọn</th>
            <th>Mã hh</th>
            <th>Tên hàng hóa</th>
            <th>Giá bán</th>
            <th>Giá gốc</th>
            <th>Ảnh hàng hóa</th>
            <th>Id loại</th>
            <th>Đặc biệt</th>
            <th>Đã bán</th>
            <th>Ngày nhập</th>
            <th>Mô tả </th>
            <th>Chỉnh sửa</th>

          </tr>
          <?php foreach($show_sps as $key=> $value){ ?>
          <tr>
            <td> <input type="checkbox"></td>
            <td><?php echo $value->id_hh ?></td>
            <td><?php echo $value->ten_hh ?></td>
            <td><?php echo $value->don_gia ?> </td>
            <td><?php echo $value->giam_gia ?></td>
            <td><img src="../../../daall/public/images/<?php echo $value->hinh ?>" alt="" width="100px"></td>

            <td><?php echo $value->id_loai ?></td>
            <td><?php echo $value->dac_biet ?></td>
            <td><?php echo $value->da_ban ?></td>

            <td><?php echo $value->ngay_nhap ?></td>
            <td><?php echo $value->mo_ta ?></td>
            <td>
              <a href="editsp.php?id_hh=<?php echo $value->id_hh ?>">Sửa</a>
              <a onclick="return confirm('Bạn có muốn xóa ko')" href="xoasp.php?id_hh=<?php echo $value->id_hh ?>">xóa</a>
            </td>
          </tr>
          <?php } ?>

        </table>
        <a href="addsp.php"> <button type="submit">Thêm sp </button></a>
      </div>
     
    </main>
    