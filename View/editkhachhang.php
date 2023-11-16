<?php
  if(isset($_GET['act']))
  {
    if($_GET['act']=="edit")
    {
      $ac=1;
    }
    
  }
?>
<?php
if($ac==1){
  echo '<div  class="col-md-4 col-md-offset-4"><h3 ><b>CẬP NHẬT SẢN PHẨM</b></h3></div>';
}

?>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $kh=new khachhang();
      $result=$kh->getKhachHangId($id);
      $makh=$result['makh'];
      $tenkh=$result['tenkh'];
      $username=$result['username'];
      $matkhau=$result['matkhau'];
      $email=$result['email'];
      $diachi=$result['diachi'];
      $sodienthoai=$result['sodienthoai'];
    }
  ?>
  <?php
    if($ac==1)
    {
      echo '
      <form action="index.php?action=khachhang&act=edit_action&id='.$id.'"
      method="post" enctype="multipart/form-data">';
    }
  ?>
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã khách hàng</td>
        <td> <input type="text" class="form-control" name="makh" value="<?php  if(isset($makh))  echo $makh;?>" readonly/></td>
      </tr>
      <tr>
        <td>Tên khách hàng</td>
        <td><input type="text" class="form-control" name="tenkh" value="<?php  if(isset($tenkh))  echo $tenkh;?>" maxlength="100px"></td>
      </tr>
      <tr>
        <td>username</td>
        <td><input type="text" class="form-control" name="username" value="<?php  if(isset($username))  echo $username;?>" ></td>
      </tr>
      <tr>
        <td>Mật khẩu</td>
        <td><input type="text" class="form-control" name="matkhau" value="<?php  if(isset($matkhau))  echo $matkhau;?>" ></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" class="form-control" name="email" value="<?php  if(isset($email))  echo $email;?>">
        </td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><input type="text" class="form-control" name="diachi" value="<?php  if(isset($diachi))  echo $diachi;?>">
        </td>
      </tr>
      <tr>
        <td>Số điện thoại</td>
        <td><input type="text" class="form-control" name="sodienthoai" value="<?php  if(isset($sodienthoai))  echo $sodienthoai;?>">
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