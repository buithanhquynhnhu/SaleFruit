<?php
$act = "hoadon";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}
switch ($act) {
    case 'hoadon':
        include "./View/hoadon.php";
        break;
    case 'edit':
            include "./View/edithoadon.php";
            break;
    case 'edit_action':
        if(isset($_GET['id']))
        {
                $masohd=$_GET['id'];
                $makh=$_POST['makh'];
                $ngaydat=$_POST['ngaydat'];
                $tongtien=$_POST['tongtien'];
                $hd=new hoadon();
                $checkup=$hd->updatehd($masohd,$makh,$ngaydat,$tongtien);
                if($checkup!==false)
                {
                    echo '<script> alert("Update thành công");</script>';
                    include "./View/hoadon.php";
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include "./View/edithoadon.php";
                }
            }
            break;
    case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $hd=new hoadon();
                $hd->deletehd($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/hoadon.php";
            }
}
?>
