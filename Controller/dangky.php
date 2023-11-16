<?php
    $act="dangky";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act){
        case 'dangky':
            include "./View/registration.php";
            break;
        case 'dangky_action':
            if(isset($_POST['txttenkh']))
            {
                $tenkh=$_POST['txttenkh'];
                $username=$_POST['txtusername'];
                $password=$_POST['txtpass'];
                $email=$_POST['txtemail'];
                $diachi=$_POST['txtdiachi'];
                $dt=$_POST['txtsodt'];
                // $cdau='GHT%H';
                // $ccuoi='&TUY9';
                $cdau='GHT%H';
                $ccuoi='&TUY9';
                $crypt=md5($cdau.$password.$ccuoi);
                $ur=new user();
                $check=$ur->CkeckUserName($username);
                if($check==false)
                {
                  
                    $test=$ur->InsertUser($tenkh,$username,$crypt,$email,$diachi,$dt);
                    if($test!='false')
                    {
                        echo '<script>alert("Đăng ký thành công")</script>';
                        include "./View/home.php";
                    }
                    else
                    {
                        echo '<script>alert("Đăng ký khong thành công")</script>';
                        include "./View/registration.php";  
                    }
                }
                else
                {
                    echo '<script>alert("User da ton tai")</script>';
                        include "./View/registration.php";  
                }
                
               
            }
           
            break;
    }
?>