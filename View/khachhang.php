
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH KHÁCH HÀNG</b></h3></div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>username</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Số Điện thoại</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
  $kh=new khachhang();
  $result=$kh->getKhachHangAll();
  while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['makh'];?> </td>
        <td><?php echo $set['tenkh'];?></td>
        <td><?php echo $set['username'];?></td>
        <td><?php echo $set['matkhau'];?></td>
        <td><?php echo $set['email'];?></td>
        <td><?php echo $set['diachi'];?></td>
        <td><?php echo $set['sodienthoai'];?></td>
        <td><a href="index.php?action=khachhang&act=edit&id=<?php echo $set['makh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=khachhang&act=delete&id=<?php echo $set['makh'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>