<?php
$act = "khachhang";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}
switch ($act) {
    case 'khachhang':
        include "./View/khachhang.php";
        break;
        case 'edit':
            include "./View/editkhachhang.php";
            break;
    case 'edit_action':
        if(isset($_GET['id']))
        {
                $makh=$_GET['id'];
                $tenkh=$_POST['tenkh'];
                $username=$_POST['username'];
                $matkhau=$_POST['matkhau'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sodienthoai=$_POST['sodienthoai'];
                $kh=new khachhang();
                $checkup=$kh->updatekh($makh,$tenkh,$username,$matkhau,$email,$diachi,$sodienthoai);
                if($checkup!==false)
                {
                    echo '<script> alert("Update thành công");</script>';
                    include "./View/khachhang.php";
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include "./View/editkhachhang.php";
                }
            }
            break;
    case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $kh=new khachhang();
                $kh->deletekh($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/khachhang.php";
            }
}
