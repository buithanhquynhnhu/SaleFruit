<?php
class khachhang
{
    public function getKhachHangAll()
    {
        //b1:kết nối đc database
        $db = new connect();
        //b2:viết câu truy vấn dữ liệu
        $select = "SELECT * FROM khachhang";
        //b3:thực thi
        $result = $db->getList($select);
        return $result; //đây là kết quả lấy về đc chi tiết hóa đơn
    }
    public function getKhachHangId($id)
        {
            $db=new connect();
            $select="select * from khachhang where makh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function deletekh($id)
        {
            $db=new connect();
            $query="delete from khachhang where makh=$id";
            $db->exec($query);
        }
        function updatekh($id,$tenkh,$username,$matkhau,$email,$diachi,$sodienthoai)
        {
            $db=new connect();
            $query="update khachhang
                    set tenkh='$tenkh',
                    username='$username',
                    matkhau=$matkhau,
                    email='$email',
                    diachi='$diachi',
                    sodienthoai=$sodienthoai
                    where makh=$id
            ";
            //echo $query;
           $db->exec($query);
        }
}
