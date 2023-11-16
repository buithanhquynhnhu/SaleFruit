<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:#FF0000;}
    </style>
</head>
<body>
<?php
  //$_SERVER["PHP_SEFT"]: trả về tên file của hiện tại
  // $_SERVER["PHP_SEFT"] sẽ gửi dữ liệu form đến chính nó thay vì nhảy qua trang khác
  // htmlspecialchar()? chuyern các ký tự đặc biệt htafnh các thực thể HTML, nó sẽ thay
  // thế các ký tự HTML như <and> &lt &gt;
//   khai báo biến 
$name=$email=$code=$phone=$pass=$gender="";
$nameErr=$emailErr=$codeErr=$phoneErr=$passErr=$genderErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(empty($_POST['code']))
   {
    $codeErr="Code Không đc bỏ trống";
   }
   else{
    $code=$_POST['code'];
    if(!preg_match("/^(mss|MSS)[0-9]{5}$/",$code)){
        $codeErr="Code phải là mss và 5 số tiếp theo";
    }

   }
   if(empty($_POST['name']))
   {
    $nameErr="Name Không đc bỏ trống";
   }
   else{
    $name=$_POST['name'];
    if(!preg_match("/^[a-z]{1,}[^0-9]+{1,}$/",$name)){
        $nameErr="Name là chuỗi";
    }
   } 
   if(empty($_POST['phone']))
   {
    $phoneErr="Phone Không đc bỏ trống";
   }
   else{
    $phone=$_POST['phone'];
    if(!preg_match("/^[0]{1}\d{9,10}$/",$phone)){
        $nameErr="Phone phải có số 0 ở đầu";
    }
   } 
   
   if(empty($_POST['email']))
   {
    $emailErr="Email Không đc bỏ trống";
   }
   else{
    $email=$_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr="Email chưa đúng định dạng";
    }
   } 
   if(empty($_POST['pass']))
   {
    $passErr="Pass Không đc bỏ trống";
   }
   else{
    $pass=$_POST['pass'];
    if(!preg_match("/^[A-Z]{1}([\W\.!@#$%^&*()])+{7}$/",$pass)){
        $passErr="Pass";
    }
   } 
}
// hàm kiểm tra loại bỏ các khoange trắng \, tránh hay đổi dữ liệu

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
<p>PHP FORM</p>
<!-- MSS00001 -->
    Code ID:
    <input type="text" name="code" id="" value="<?php if(isset($code)) echo $code?>">
    <span class="error">*<?php if(isset($codeErr) )echo $codeErr;?></span><br><br>
    Name:
    <input type="text" name="name" id="" value="<?php if(isset($name)) echo $name?>">
    <span class="error">*<?php if(isset($nameErr) )echo $nameErr;?></span><br><br>
    Email:
    <input type="text" name="email" id="" value="<?php if(isset($email)) echo $email?>">
    <span class="error">*<?php if(isset($emailErr) )echo $emailErr;?></span><br><br>
    Phone:
    <input type="text" name="phone" id="" value="<?php if(isset($phone)) echo $phone?>">
    <span class="error">*<?php if(isset($phoneErr) )echo $phoneErr;?></span><br><br>
    <!-- ký tự đầu là in hoa chuỗi là số, ký tự đặt biệt độ dài tối thiểu là 6 ký thự -->
    Pass:
    <input type="password" name="pass" id=""value="<?php if(isset($pass)) echo $pass?>">
    <span class="error">*<?php if(isset($passErr) )echo $passErr;?></span><br><br>
    Comment:
    <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
    Gender:
    <input type="radio" name="gender" id="" <?php ?> value="female">Female
    <input type="radio" name="gender" id="" <?php?> value="male">Male
    <input type="radio" name="gender" id="" <?php ?>value="other">Other
    <span class="error">*<?php ?></span><br><br>
    <!-- submit -->
    <input type="submit" value="Submit">
</form>
<!-- hiển thị thông tin khi nhập đúng -->
<?php
echo "Thông tin nhập đúng";
echo "<br>";
echo $code;
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $pass;
echo "<br>";
echo $gender;
?>

</body>
</html>