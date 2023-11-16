<?php
    if(isset($_SESSION['makh']))
    {
        $hd=new hoadon();
        $sohd=$hd->InsertOrder($_SESSION['makh']);
        $_SESSION['masohd']=$sohd;
        //echo $sohd;
        $tongtien=0;
        foreach($_SESSION['cart'] as $key=>$item)
        {
            
            $hd->InsertDatailOrder($sohd,$item['mahh'],$item['quanty'],$item['total']);
            $tongtien+=$item['total'];
        }
        $hd->UpdateTotal($sohd,$tongtien);
        include "./View/order.php";
    }
    else
    {
        echo '<script> alert("Ban chua dang nhap") </script>';
        include "./View/login.php";
    }
    $act="hoadon";
    if( isset($_GET["act"]))
    {
        $act=$_GET["act"];
    }
    switch ($act) {
        case 'hoadon':
            include "./View/hoadon.php";
            break;
        }
?>