<?php
    class user{
        public function __construct(){}
        function InsertUser($tenkh,$username,$crypt,$email,$diachi,$dt)
        {
            $db=new connect();
            $query="insert into khachhang(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
            values(NULL,'$tenkh','$username','$crypt','$email','$diachi','$dt',default)";

            $db->exec($query);
        }
        function CkeckUserName($username)
        {
            $db=new connect();
            $select="select * from khachhang where username='$username'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }
        function loginUser($username,$crypt)
        {
            $db=new connect();
            $select="select * from khachhang where username='$username' and matkhau='$crypt'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }
        /*public function getAdmin($user,$pass)
        {
            $db= new connect();
            $select="select * from admin where user='$user' and password ='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }*/
        function getEmail($email)
        {
            $db=new connect();
            $select="select * from khachhang where email='$email'";
            $result=$db->getInstance($select);
            return $result;

        }
        function UpdatePassword($emailold,$codenew)
        {
            $db=new connect();
            $query="update khachhang set matkhau='$codenew' where email='$emailold'";
            $sb->exec($query);
        }
    }
?>