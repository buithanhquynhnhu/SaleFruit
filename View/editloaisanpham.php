<form name="frmloaihang" action="index.php?action=loai" method="post" align="center">
  <div class="card mt-3" >
    <div class="card-header">
      QUẢN LÝ LOẠI HÀNG
    </div>
    <a href="index.php?action=loai&act=themloai" class="btn btn-info">Insert</a>
    <br>
   
      <table class="table table-striped table">
        <thead>
        <?php
  $loai=new loai();
  $result=$loai->getLoai();
  while($set=$result->fetch()):
      ?>
   
          <tr class="bg-info">
            <th scope="col" ></th>
            <th scope="col" >Mã loại</th>
            <th scope="col"  >Tên loại</th>
            <th scope="col">idMenu</th>
            <th scope="col"></th>

          </tr>
        </thead>
        
        <tbody>
          
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX" value="" ></th>
                      <td> <?php echo $set['maloai'];?></td>
                      <td><?php echo $set['tenloai'];?></td>
                      <td><?php echo $set['menu'];?></td>
                      <td>
                        <a href="index.php?action=loai&act=delete&id=<?php echo $set['maloai'];?>" class="btn btn-warning" >Xoá</a>
                        <a href="index.php?action=loai&act=edit&id=<?php echo $set['maloai'];?>" class="btn btn-info">Sửa</a>
                        
                      </td>
                    </tr>
					
          <input type="hidden" name="xoa" value="" />
        </tbody>
        <?php
      endwhile;
     ?>
      </table>
    </div>
    <div class="card-footer">
      <a href="" class="btn btn-info">Chọn tất cả</a>
      <button class="btn btn-info" onclick="">Chọn tất cả(javascript)</button>
      <a href="" class="btn btn-info">Bỏ chọn</a>
      <a href="" class="btn btn-info">Xóa danh mục đã chọn</a>
      <button class="btn btn-info" onclick="">Xóa danh mục đã chọn test</button>
      <!-- <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button> -->
      <a href="" class="btn btn-info">Thêm mới</a>
    </div>
  </div>
</form>
