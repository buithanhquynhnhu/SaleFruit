<?php
    class hoadon{
        function __construct(){}
        function InsertOrder($makh)
        {
            $db=new connect();
            $date=new DateTime("now");
            $datecreate=$date->format("Y-m-d");
            $query="insert into hoadon(masohd,makh,ngaydat,tongtien)values(NULL,$makh,'$datecreate',0)";
            $db->exec($query);
            $int=$db->getInstance("select masohd from hoadon order by masohd desc limit 1");
            return $int[0];
        }
        function InsertDatailOrder($masohd,$mahh,$soluongmua,$thanhtien)
        {
            $db=new connect();
            $query="insert into cthoadon(masohd,mahh,soluongmua,thanhtien,tinhtrang)
            values($masohd,$mahh,$soluongmua,$thanhtien,0)";
            $db->exec($query);
        }
        function UpdateTotal($masohd,$tongtien)
        {
            $db=new connect();
            $query="update hoadon set tongtien=$tongtien where masohd=$masohd";
            $db->exec($query);
        }
        function getOrder($sohdid){
            $db=new connect();
            $select="select b.masohd,a.tenkh,a.diachi,a.sodienthoai,b.ngaydat from khachhang a
            INNER join hoadon b on a.makh=b.makh where b.masohd=$sohdid";
            $result=$db->getInstance($select);
            return $result;
        }
        function getOrderDetail($sohdid)
        {
            $db=new connect();
            $select="select a.tenhh,a.dongia,b.soluongmua,b.thanhtien from hanghoa a
            INNER join cthoadon b on a.mahh=b.mahh where masohd=$sohdid";
            $result=$db->getList($select);
            return $result;
        }
        function getHoaDonAll()
        {
            //b1:kết nối đc database
            $db=new connect();
            //b2:viết câu truy vấn dữ liệu
            $select="SELECT * FROM hoadon ";
            //b3:thực thi
            $result=$db->getList($select);
            return $result;//đây là kết quả lấy về đc 12 sản phẩm
        }
        function getChiTietHoaDonAll()
        {
            //b1:kết nối đc database
            $db=new connect();
            //b2:viết câu truy vấn dữ liệu
            $select="SELECT * FROM cthoadon ";
            //b3:thực thi
            $result=$db->getList($select);
            return $result;//đây là kết quả lấy về đc 12 sản phẩm
        }
        public function getHoaDonId($id)
        {
            $db=new connect();
            $select="select * from hoadon where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function deletehd($id)
        {
            $db=new connect();
            $query="delete from hoadon where masohd=$id";
            $db->exec($query);
        }
        function updatehd($id,$makh,$ngaydat,$tongtien)
        {
            $db=new connect();
            $query="update hoadon
                    set makh=$makh,
                    ngaydat='$ngaydat',
                    tongtien=$tongtien
                    where masohd=$id
            ";
            //echo $query;
           $db->exec($query);
        }
        
    }
?>