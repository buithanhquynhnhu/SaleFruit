
<div  class="col-md-12 col-md-offset-4" align="center"><h3 ><b>DANH SÁCH LOẠI SẢN PHẨM  </b></h3></div>
<div class="row col-12">
 
<a href="index.php?action=loai&act=themloai"><h4>Thêm loại</h4></a>
</div>
<div class="row">
<table class="table" align="center">
    <thead>
      <tr class="table-primary" align="center">
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $loai=new loai();
  $result=$loai->getLoai();
  while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['maloai'];?> </td>
        <td><?php echo $set['tenloai'];?></td>
        <td><a href="index.php?action=loai&act=edit&id=<?php echo $set['maloai'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=loai&act=delete&id=<?php echo $set['maloai'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>