<div class="col-md-4 col-md-offset-4">
    
</div>
<!-- <div class="row col-12">
  <a href="index.php?action=hanghoa&act=themsp">
    <h4>Thêm sản phẩm</h4>
  </a>
</div> -->
<div class="row">
<h3 align="center"><b>DANH SÁCH CHI TIẾT HÓA ĐƠN</b></h3>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th>Mã số hóa đơn</th>
                <th>Mã hàng hóa</th>
                <th>Số lượng mua</th>
                <th>Thành tiền</th>
                <th>Tình trạng</th>
                <th></th>
                <!-- <th>Cập Nhật</th>
        <th>Xóa</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $cthd = new cthoadon();
            $result = $cthd->getChiTietHoaDonAll();
            while ($set = $result->fetch()) :
            ?>
                <tr>
                    <td><?php echo $set['masohd']; ?> </td>
                    <td><?php echo $set['mahh']; ?></td>
                    <td><?php echo $set['soluongmua']; ?></td>
                    <td><?php echo $set['thanhtien']; ?></td>
                    <td><?php echo $set['tinhtrang']; ?></td>
                    <td>
                        <a href="index.php?action=cthoadon&act=delete&id=<?php echo $set['masohd'];?>" class="btn btn-warning" >Xoá</a>
                        <a href="index.php?action=cthoadon&act=edit&id=<?php echo $set['masohd'];?>" class="btn btn-info">Sửa</a>
                        
                      </td>
                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</div>