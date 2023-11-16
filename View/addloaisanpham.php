
      <div class="card mt-3">
        <div class="card-header info ">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" name="submit_file" value="submit">
          </form>
        <form>
        <?php
  if(isset($_GET['act']))
  {
    if($_GET['act']=="edit")
    {
      $ac=1;
    }
    if($_GET['act']=="themloai")
    {
      $ac=2;
    }
  }
?>

    <div class="card-body" >
    <?php
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $loai=new loai();
      $result=$loai->getLoaiId($id);
      $maloai=$result['maloai'];
      $tenloai=$result['tenloai'];
      $menu=$result['menu'];
    }
  ?>
  <?php
    if($ac==1)
    {
      echo '
      <form action="index.php?action=loai&act=edit_action&id='.$id.'"
      method="post" enctype="multipart/form-data">';
    }
    if($ac==2)
    {
      echo '
      <form action="index.php?action=loai&act=themloai_action"
      method="post" enctype="multipart/form-data">';
    }
  ?>

            <div class="form-group">
                <label for="" >Mã danh mục</label>
                <input type="text" readonly  class="form-control" name="maloai" value="<?php  if(isset($maloai))  echo $maloai;?>">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text"  class="form-control" name="tenloai" value="<?php  if(isset($tenloai))  echo $tenloai;?>">

              </div>
              <div class="form-group">
                <label for="">Menu số:</label>
                <input type="text" name="menu"  class="form-control" value="<?php  if(isset($menu))  echo $menu;?>">

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                  <a href="index.php?action=loai&act=loai_action" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
