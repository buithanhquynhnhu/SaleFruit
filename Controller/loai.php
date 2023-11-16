<?php
    $act="loai";
    if( isset($_GET["act"]))
    {
        $act=$_GET["act"];
    }
    switch ($act) {
        case 'loai':
            include "./View/editloaisanpham.php";
            break;
        case 'edit':
            include "./View/addloaisanpham.php";
            break;
        case 'themloai':
            include "./View/addloaisanpham.php";
            break;
            case 'loai_action':
                if (isset($_POST['submit_file'])) {
                    // b1: lấy về
                    $file = $_FILES['file']['tmp_name'];
                    // b2: thêm vào ký tự trong file xBB xBF xEF
                    file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
                    // b3: mở file đó ra
                    $file_open = fopen($file, "r"); //a: binh chi tú
                    // b4: đọc nội dung của file, fgetc, fgets
                    $loai = new loai();
                    while (($csv = fgetcsv($file_open, 1000, ",")) !== false) {
                        $maloai = $csv[0]; //null
                        $tenloai = $csv[1]; //túi xách ls
                        $menu = $csv[2]; //5
                        $loai->insertloai($maloai, $tenloai, $menu);
                    }
                    echo '<script> alert("Import thành công");</script>';
                    include('./View/addloaisanpham.php');
                }
                break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $maloai=$_GET['id'];
                $tenloai=$_POST['tenloai'];
                $menu=$_POST['menu'];
                $loai=new loai();
                $checkup=$loai->updateloai($maloai,$tenloai,$menu);
                if($checkup!==false)
                {
                    echo '<script> alert("Update thành công");</script>';
                    include "./View/editloaisanpham.php";
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include "./View/editloaisanpham.php";
                }
            }
            break;
        case 'themloai_action':
            $tenloai=$_POST['tenloai'];
            $menu=$_POST['menu'];
            $loai=new loai();
            $checkinsert=$loai->insertloai($tenloai,$menu);
            if($checkinsert!==false)
            {
                
                echo '<script> alert("Insert thành công");</script>';
                include "./View/editloaisanpham.php";
            }
            else
            {
                echo '<script> alert("Insert không thành công");</script>';
                include "./View/editloaisanpham.php";
            } 
            break; 
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $loai=new loai();
                $loai->deleteloai($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/editloaisanpham.php";
            }
    }
?>