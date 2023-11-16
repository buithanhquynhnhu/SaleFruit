<?php
  if(isset($_GET['act']))
  {
    if($_GET['act']=="edit")
    {
      $ac=1;
    }
    if($_GET['act']=="themsp")
    {
      $ac=2;
    }
  }
?>
<?php
if($ac==1){
  echo '<div  class="col-md-4 col-md-offset-4"><h3 ><b>CẬP NHẬT SẢN PHẨM</b></h3></div>';
}
if($ac==2){
  echo '<div  class="col-md-4 col-md-offset-4"><h3 ><b>THÊM SẢN PHẨM</b></h3></div>';
}
?>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $hh=new hanghoa();
      $result=$hh->getHangHoaId($id);
      $mahh=$result['mahh'];
      $tenhh=$result['tenhh'];
      $dongia=$result['dongia'];
      $giamgia=$result['giamgia'];
      $hinh=$result['hinh'];
      $maloai=$result['maloai'];
      $soluotxem=$result['soxem'];
      $ngaytao=$result['ngaytao'];
      $mota=$result['mota'];
      $binhluan=$result['binhluan'];
      $donvi=$result['donvi'];
      $trongluong=$result['trongluong'];
      $xuatxu=$result['xuatxu'];
      $tinhtrang=$result['tinhtrang'];
    }
  ?>
  <?php
    if($ac==1)
    {
      echo '
      <form action="index.php?action=hanghoa&act=edit_action&id='.$id.'"
      method="post" enctype="multipart/form-data">';
    }
    if($ac==2)
    {
      echo '
      <form action="index.php?action=hanghoa&act=themsp_action"
      method="post" enctype="multipart/form-data">';
    }
  ?>
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="mahh" value="<?php  if(isset($mahh))  echo $mahh;?>" readonly/></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tenhh" value="<?php  if(isset($tenhh))  echo $tenhh;?>" maxlength="100px"></td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia" value="<?php  if(isset($dongia))  echo $dongia;?>" ></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="giamgia" value="<?php  if(isset($giamgia))  echo $giamgia;?>" ></td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
         
            <label><img width="50px" height="50px"  src="Content\imagetourdien\<?php if(isset($hinh)) echo $hinh;?>"></label>
            Chọn file để upload:
            <input type="file" name="image" id="fileupload">
         
        </td>
      </tr><br>
      <tr>
        <td>Mã loại</td>
        <td>
        <select name="maloai" class="form-control" style="width:150px;">
          <?php
          $loai = new loai();
          $result = $loai->getLoai();
          while ($set = $result->fetch()) :
          ?>
            <option
             <?php
             if(isset($maloai))
             {
              if ($maloai == $set['maloai']) echo "selected"; 
             }
              ?> 
              value="<?php echo $set['maloai']; ?>"><?php echo $set['tenloai']; ?></option>
          <?php
          endwhile;
          ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>Số lượt xem</td>
        <td><input type="text" class="form-control" name="soxem" value="<?php  if(isset($soluotxem))  echo $soluotxem;?>">
        </td>
      </tr>
      <tr>
        <td>Ngày tao</td>
        <td><input type="text" class="form-control" name="ngaytao" value="<?php  if(isset($ngaytao))  echo $ngaytao;?>">
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input type="text" class="form-control" name="mota" value="<?php  if(isset($mota))  echo $mota;?>">
        </td>
      </tr>
      <tr>
        <td>Don vi</td>
        <td><input type="text" class="form-control" name="donvi" value="<?php  if(isset($donvi))  echo $donvi;?>">
        </td>
      </tr>
      <tr>
        <td>Xuat xu</td>
        <td><input type="text" class="form-control" name="xuatxu" value="<?php  if(isset($xuatxu))  echo $xuatxu;?>">
        </td>
      </tr>
      <tr>
        <td>Tinh trang</td>
        <td><input type="text" class="form-control" name="tinhtrang" value="<?php  if(isset($tinhtrang))  echo $tinhtrang;?>">
        </td>
      </tr>
      <tr>
        <td>Binh luan</td>
        <td><input type="text" class="form-control" name="binhluan" value="<?php  if(isset($binhluan))  echo $binhluan;?>">
        </td>
      </tr>
      <tr>
        <td>Trong luong</td>
        <td><input type="text" class="form-control" name="trongluong" value="<?php  if(isset($trongluong))  echo $trongluong;?>" >
        </td>
      </tr>

      <tr>
        <td colspan="2">
          <input type="submit" value="submit">
          

        </td>
      </tr>

    </table>
  </form>
</div>