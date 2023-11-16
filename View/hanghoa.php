
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH HÀNG HÓA</b></h3></div>
<div class="row col-12">
  <a href="index.php?action=hanghoa&act=themsp">
    <h4>Thêm sản phẩm</h4>
  </a>
</div>
<div class="row col-2">
  <a href="index.php?action=hoadon&act=hoadon">
    <h4>Hóa đơn</h4>
  </a>
</div>
<div class="row col-8">
  <a href="index.php?action=cthoadon&act=cthoadon">
    <h4>Chi tiết hóa đơn</h4>
  </a>
</div>
<div class="row col-2">
  <a href="index.php?action=loai&act=loai">
    <h4>Loại sản phẩm</h4>
  </a>
</div>
<div class="row col-2">
  <a href="index.php?action=khachhang&act=khachhang">
    <h4>Khách Hàng</h4>
  </a>
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Hình</th>
        <th>Mã loại</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Số lượt xem</th>
        <th>Bình luận</th>
        <th>Đơn vị tính</th>
        <th>Trọng lượng</th>
        <th>Xuất xứ</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Tình trạng</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $hh=new hanghoa();
  $result=$hh->getHangHoaAll();
  while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['mahh'];?> </td>
        <td><?php echo $set['tenhh'];?></td>
        <td><img width="50px" height="50px" src="Content\imagetourdien\<?php echo $set["hinh"]?>"/></td>
        <td><?php echo $set['maloai'];?></td>
        <td><?php echo $set['dongia'];?></td>
        <td><?php echo $set['giamgia'];?></td>
        <td><?php echo $set['soxem'];?></td>
        <td><?php echo $set['binhluan'];?></td>
        <td><?php echo $set['donvi'];?></td>
        <td><?php echo $set['trongluong'];?></td>
        <td><?php echo $set['xuatxu'];?></td>
        <td><?php echo $set['ngaytao'];?></td>
        <td><?php echo $set['mota'];?></td>
        <td><?php echo $set['tinhtrang'];?></td>
        <td><a href="index.php?action=hanghoa&act=edit&id=<?php echo $set['mahh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=hanghoa&act=delete&id=<?php echo $set['mahh'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>