<?php
class cthoadon
{
    public function getChiTietHoaDonAll()
    {
        //b1:kết nối đc database
        $db = new connect();
        //b2:viết câu truy vấn dữ liệu
        $select = "SELECT * FROM cthoadon ";
        //b3:thực thi
        $result = $db->getList($select);
        return $result; //đây là kết quả lấy về đc chi tiết hóa đơn
    }
    public function getChiTietHoaDonId($id)
        {
            $db=new connect();
            $select="select * from cthoadon where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function deletecthd($id)
        {
            $db=new connect();
            $query="delete from cthoadon where masohd=$id";
            $db->exec($query);
        }
        function updatecthd($id,$mahh,$soluongmua,$thanhtien,$tinhtrang)
        {
            $db=new connect();
            $query="update cthoadon
                    set mahh='$mahh',
                    soluongmua=$soluongmua,
                    thanhtien=$thanhtien,
                    tinhtrang=$tinhtrang
                    where masohd=$id
            ";
            //echo $query;
           $db->exec($query);
        }
}
