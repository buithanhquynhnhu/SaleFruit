
<div class="card mt-3">
        <div class="card-header info ">
          QUẢN LÝ HÓA ĐƠN
        </div>
        <div class="card-body">
        <?php
  if(isset($_GET['act']))
  {
    if($_GET['act']=="edit")
    {
      $ac=1;
    }
  }
?>

    <div class="card-body" >
    <?php
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $hd=new hoadon();
      $result=$hd->getHoaDonId($id);
      $masohd=$result['masohd'];
      $makh=$result['makh'];
      $ngaydat=$result['ngaydat'];
      $tongtien=$result['tongtien'];
    }
  ?>
  <?php
    if($ac==1)
    {
      echo '
      <form action="index.php?action=hoadon&act=edit_action&id='.$id.'"
      method="post" enctype="multipart/form-data">';
    }
  ?>

            <div class="form-group">
                <label for="" >Mã Số Hóa Đơn</label>
                <input type="text" readonly  class="form-control" name="masohd" value="<?php  if(isset($masohd))  echo $masohd;?>">
              </div>
              <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" readonly class="form-control" name="makh" value="<?php  if(isset($makh))  echo $makh;?>">

              </div>
              <div class="form-group">
                <label for="">Ngày đặt:</label>
                <input type="text" name="ngaydat"  class="form-control" value="<?php  if(isset($ngaydat))  echo $ngaydat;?>">

              </div>
              <div class="form-group">
                <label for="">Tổng tiền:</label>
                <input type="text" readonly name="tongtien"  class="form-control" value="<?php  if(isset($tongtien))  echo $tongtien;?>">

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
          </form>
        </div>
      </div>
