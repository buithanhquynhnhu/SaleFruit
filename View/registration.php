<style>
        .error{color:#FF0000;}
    </style>
<!--  -->
<div class="container"> 
<?php
          $txttenkh=$txtdiachi=$txtsodt=$txtusername=$txtemail=$txtpass="";
          $txttenkhErr=$txtdiachiErr=$txtsodtErr=$txtusernameErr=$txtemailErr=$txtpassErr="";
          if($_SERVER["REQUEST_METHOD"]=="POST")
          {
             if(empty($_POST['txttenkh']))
             {
              $txttenkhErr="Tên khách hàng Không đc bỏ trống";
             }
             else{
              $txttenkh=$_POST['txttenkh'];
              if(!preg_match("/^[a-z]{1,}[^0-9]+{1,}$/",$txttenkh)){
                  $txttenkhErr="Tên khách hàng là chuỗi";
              }
             } 
             if(empty($_POST['txtemail']))
   {
    $txtemailErr="Email Không đc bỏ trống";
   }
   else{
    $txtemail=$_POST['txtemaill'];
    if(!filter_var($txtemail, FILTER_VALIDATE_EMAIL)){
        $txtemaillErr="Email chưa đúng định dạng";
    }
   } 
   if(empty($_POST['txtpass']))
   {
    $txtpassErr="Pass Không đc bỏ trống";
   }
   else{
    $txtpass=$_POST['txtpass'];
    if(!preg_match("/^[A-Z]{1}([\W\.!@#$%^&*()])+{7}$/",$txtpass)){
        $txtpassErr="Pass";
    }
   } 
   if(empty($_POST['txtusername']))
   {
    $txtusernameErr="txtusername Không đc bỏ trống";
   }
   else{
    $txtusername=$_POST['txtusername'];
    if(!preg_match("/^[a-z]{1,}[^0-9]+{1,}$/",$txtusername)){
        $txtusernameErr="Name là chuỗi";
    }
   } 
   if(empty($_POST['txtsodt']))
   {
    $txtsodtErr="txtsodt Không đc bỏ trống";
   }
   else{
    $txtsodt=$_POST['txtsodt'];
    if(!preg_match("/^[0]{1}\d{9,10}$/",$txtsodt)){
        $txtsodtErr="Phone phải có số 0 ở đầu";
    }
   } 
   
            }
          ?>
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4" > 
   <legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   
   <form  action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
   
    <div class="row"> 
     <div class="col-xs-4 col-md-4"> <label for="email"  align="center">Tên Khách Hàng:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"
     value="<?php if(isset($txttenkhErr)) echo $txttenkhErr?>"></input>
     <span class="error"><?php if(isset($txttenkhErr)) echo $txttenkhErr;?></span>
     </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"
     value="<?php if(isset($txtdiachiErr)) echo $txtdiachiErr?>"> 
     <span class="error"><?php if(isset($txtdiachiErr)) echo $txtdiachiErr;?></span>
    </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"
     value="<?php if(isset($txtsodtErr)) echo $txtsodtErr?>"> 
     <span class="error"><?php if(isset($txtsodtErr)) echo $txtsodtErr;?></span> </div> 
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text"
     value="<?php if(isset($txtusernameErr)) echo $txtusernameErr?>"> 
     <span class="error"><?php if(isset($txtusernameErr)) echo $txtusernameErr;?></span> </div>  
     </div> 
    <label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email" type="email"
    value="<?php if(isset($txtemailErr)) echo $txtemailErr?>"> 
     <span class="error"><?php if(isset($txtemailErr)) echo $txtemailErr;?></span> 
    </div> 
     <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password"
     value="<?php if(isset($txtpassErr)) echo $txtpassErr?>"> 
     <span class="error"><?php if(isset($txtpassErr)) echo $txtpassErr;?></span>
     </div> 
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
      
        </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>
