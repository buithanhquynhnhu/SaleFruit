<?php
    $act='dangnhap';
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act)
    {
        case 'dangnhap':
            include "./View/login.php";
            break;
        case 'dangnhap_action':
            if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
            {
                $user=$_POST['txtusername'];
                $pass=$_POST['txtpassword'];
                $cdau='GHT%H';
                $ccuoi='&TUY9';
                $crypt=md5($cdau.$pass.$ccuoi);
                $ur=new user();
                $urs=$ur->loginUser($user,$crypt);
                if($urs==true)
                {
                    $_SESSION['makh']=$urs['makh'];
                    $_SESSION['tenkh']=$urs['tenkh'];
                    $_SESSION['username']=$urs['username'];
                    //echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script> alert("Dang nhap khong thanh cong")</script>';
                    include "./View/registration.php";
                }
               
            }
            break;
           /*   case 'dangnhap_action':
                if(isset($_POST['txtusername']) && isset($_POST['txtpassword']))
                {
                    $user=$_POST['txtusername'];
                    $pass=$_POST['txtpassword'];
                    $dn=new dangnhap();
                    $checkadmin=$dn->getAdmin($user,$pass);
                    if($checkadmin!=false)
                    {
                        $_SESSION['admin']=$checkadmin[0];
                        echo '<script> alert("Login success");</script>';
    
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                    }
                    else
                    {
                        echo '<script> alert("Login unsuccess");</script>';
                        include "./View/dangnhap.php";
                    }
                }
            
               
            break;
            */
            case 'logout':
                if(isset($_SESSION['makh']))
                {
                    unset($_SESSION['makh']);
                    unset($_SESSION['tenkh']);
                    unset($_SESSION['username']);
                    unset($_SESSION['cart']);
                }
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                
                break;
                }

    
?>