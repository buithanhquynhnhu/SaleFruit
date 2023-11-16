<div class="col-md-4 col-md-offset-4">
    <h3><b>DANH SÁCH HÓA ĐƠN</b></h3>
</div>
<!-- <div class="row col-12">
  <a href="index.php?action=hanghoa&act=themsp">
    <h4>Thêm sản phẩm</h4>
  </a>
</div> -->
<div class="row">
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th>Mã số hóa đơn</th>
                <th>Mã khách hàng</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th></th>
                <!-- <th>Cập Nhật</th>
        <th>Xóa</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $hd = new hoadon();
            $result = $hd->getHoaDonAll();
            while ($set = $result->fetch()) :
            ?>
                <tr>
                    <td><?php echo $set['masohd']; ?> </td>
                    <td><?php echo $set['makh']; ?></td>
                    <td><?php echo $set['ngaydat']; ?></td>
                    <td><?php echo $set['tongtien']; ?></td>
                    <td>
                        <a href="index.php?action=hoadon&act=delete&id=<?php echo $set['masohd'];?>" class="btn btn-warning" >Xoá</a>
                        <a href="index.php?action=hoadon&act=edit&id=<?php echo $set['masohd'];?>" class="btn btn-info">Sửa</a>
                        
                      </td>
                    </tr>
                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</div>