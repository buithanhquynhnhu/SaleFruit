<?php
$act = "cthoadon";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}
switch ($act) {
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
        case 'edit':
            include "./View/editcthoadon.php";
            break;
    case 'edit_action':
        if(isset($_GET['id']))
        {
                $masohd=$_GET['id'];
                $mahh=$_POST['mahh'];
                $soluongmua=$_POST['soluongmua'];
                $thanhtien=$_POST['thanhtien'];
                $tinhtrang=$_POST['tinhtrang'];
                $cthd=new cthoadon();
                $checkup=$cthd->updatecthd($masohd,$mahh,$soluongmua,$thanhtien,$tinhtrang);
                if($checkup!==false)
                {
                    echo '<script> alert("Update thành công");</script>';
                    include "./View/cthoadon.php";
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include "./View/editcthoadon.php";
                }
            }
            break;
    case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $cthd=new cthoadon();
                $cthd->deletecthd($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/cthoadon.php";
            }
}
