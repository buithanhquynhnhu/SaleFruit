
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
      $cthd=new cthoadon();
      $result=$cthd->getChiTietHoaDonId($id);
      $masohd=$result['masohd'];
      $mahh=$result['mahh'];
      $soluongmua=$result['soluongmua'];
      $thanhtien=$result['thanhtien'];
      $tinhtrang=$result['tinhtrang'];
    }
  ?>
  <?php
    if($ac==1)
    {
      echo '
      <form action="index.php?action=cthoadon&act=edit_action&id='.$id.'"
      method="post" enctype="multipart/form-data">';
    }
  ?>

            <div class="form-group">
                <label for="" >Mã Số Hóa Đơn</label>
                <input type="text" readonly  class="form-control" name="masohd" value="<?php  if(isset($masohd))  echo $masohd;?>">
              </div>
              <div class="form-group">
                <label for="">Mã hàng hóa</label>
                <input type="text" readonly class="form-control" name="mahh" value="<?php  if(isset($mahh))  echo $mahh;?>">

              </div>
              <div class="form-group">
                <label for="">Số lượng mua:</label>
                <input type="text" name="soluongmua"  class="form-control" value="<?php  if(isset($soluongmua))  echo $soluongmua;?>">

              </div>
              <div class="form-group">
                <label for="">Thành tiền:</label>
                <input type="text" name="thanhtien"  class="form-control" value="<?php  if(isset($thanhtien))  echo $thanhtien;?>">

              </div>
              <div class="form-group">
                <label for="">Tình trạng:</label>
                <input type="text" name="tinhtrang"  class="form-control" value="<?php  if(isset($tinhtrang))  echo $tinhtrang;?>">

              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
          </form>
        </div>
      </div>
