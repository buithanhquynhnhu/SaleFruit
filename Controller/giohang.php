<?php
    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart']=array();
    }
    $act="giohang";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'giohang':
    
    if(isset($_POST['mahh']))
    {
        $mahh=$_POST['mahh'];
        $soluong=$_POST['soluong'];
        $gh=new giohang();
        $gh->add_items($mahh,$soluong);
    }
    include "./View/cart.php";
    break;
    case 'delete_item':
        //nhận về id
        if(isset($_GET['id']))
        {
            $vitri=$_GET['id'];
            //controllr yêu cầu làm việc xóa
            $gh=new giohang();
            $gh->delete_items($vitri);
        }
        include "./View/cart.php";
        break;
    case 'update_item':
    if(isset($_POST['newqty']))
    {
        $new_list=$_POST['newqty'];
        foreach($new_list as $vitri=> $qty)
        {
            if($_SESSION['cart'][$vitri]['quanty']!=$qty)
            {
                $gh=new giohang;
                $gh->update_item($vitri,$qty);
            }
        }
    }
    include "./View/cart.php";
    break;
    }
    ?>