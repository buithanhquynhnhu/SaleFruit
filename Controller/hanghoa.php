<?php
    $act="hanghoa";
    if( isset($_GET["act"]))
    {
        $act=$_GET["act"];
    }
    switch ($act) {
        case 'hanghoa':
            include "./View/hanghoa.php";
            break;
        case 'edit':
            include "./View/edithanghoa.php";
            break;
        case 'themsp':
            include "./View/edithanghoa.php";
            break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $mahh=$_GET['id'];
                $tenhh=$_POST['tenhh'];
                $dongia=$_POST['dongia'];
                $giamgia=$_POST['giamgia'];
                $hinh=$_FILES['image']['name'];
                $maloai=$_POST['maloai'];
                $soluotxem=$_POST['soxem'];
                $ngaytao=$_POST['ngaytao'];
                $mota=$_POST['mota'];
                $ngaytao=$_POST['ngaytao'];
                $mota=$_POST['mota'];
                $binhluan=$_POST['binhluan'];
                $donvi=$_POST['donvi'];
                $trongluong=$_POST['trongluong'];
                $xuatxu=$_POST['xuatxu'];
                $tinhtrang=$_POST['tinhtrang'];
                $hh=new hanghoa();
        //         updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$maloai,
        // $soluotxem,$ngaytao,$mota,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang)
                $checkup=$hh->updatesp($mahh,$tenhh,$dongia,$giamgia,$hinh,$maloai,
                $soluotxem,$ngaytao,$mota,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang);
                if($checkup!==false)
                {
                    uploadhinh();
                    echo '<script> alert("Update thành công");</script>';
                    include "./View/hanghoa.php";
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include "./View/edithanghoa.php";
                }
            }
            break;
        case 'themsp_action':
            $tenhh=$_POST['tenhh'];
            $dongia=$_POST['dongia'];
            $giamgia=$_POST['giamgia'];
            $hinh=$_FILES['image']['name'];
            $maloai=$_POST['maloai'];
            $soluotxem=$_POST['soxem'];
            $ngaytao=$_POST['ngaytao'];
            $mota=$_POST['mota'];
            $ngaytao=$_POST['ngaytao'];
            $mota=$_POST['mota'];
            $binhluan=$_POST['binhluan'];
            $donvi=$_POST['donvi'];
            $trongluong=$_POST['trongluong'];
            $xuatxu=$_POST['xuatxu'];
            $tinhtrang=$_POST['tinhtrang'];
            $hh=new hanghoa();
            //insertsp($tenhh,$dongia,$giamgia,$hinh,$maloai,
        //$soluotxem,$ngaytao,$mota,$soluongton,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang)
            $checkinsert=$hh->insertsp($tenhh,$dongia,$giamgia,$hinh,$maloai,
            $soluotxem,$ngaytao,$mota,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang);
            if($checkinsert!==false)
            {
                uploadhinh();
                echo '<script> alert("Insert thành công");</script>';
                include "./View/hanghoa.php";
            }
            else
            {
                echo '<script> alert("Insert không thành công");</script>';
                include "./View/edithanghoa.php";
            } 
            break; 
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $hh=new hanghoa();
                $hh->deletesp($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/hanghoa.php";
            }
    }
?>