<?php
    class hanghoa{
        //thuộc tính
        //hàm tạo
        public function __construct(){}
        //phương thức lấy ra 12 sản phẩm
        public function getHangHoaNew()
        {
            //b1:kết nối đc database
            $db=new connect();
            //b2:viết câu truy vấn dữ liệu
            $select="SELECT * FROM hanghoa ORDER by mahh desc limit 9";
            //b3:thực thi
            $result=$db->getList($select);
            return $result;//đây là kết quả lấy về đc 12 sản phẩm
        }
        public function getHangHoaAll()
        {
            //b1:kết nối đc database
            $db=new connect();
            //b2:viết câu truy vấn dữ liệu
            $select="SELECT * FROM hanghoa ";
            //b3:thực thi
            $result=$db->getList($select);
            return $result;//đây là kết quả lấy về đc 12 sản phẩm
        }
        public function getHangHoaId($id)
        {
            $db=new connect();
            $select="select * from hanghoa where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        public function getListTimKiemHH($timkiem)
        {
            $db=new connect();
            $select="select * from hanghoa where tenhh like '%$timkiem%' ";
            $result=$db->getList($select);
            return $result;
        }

        public function getCount(){
            $db=new connect();
            $select= "select count(*) from hanghoa";
            $result=$db->getInstance($select);
            return $result[0];
        }
        public function getListHangHoaAllPage($start,$limit)
        {
            $db=new connect();
            $select= "select * from hanghoa limit ".$start.",".$limit;
            $result=$db->getList($select);
            return $result; 
        }
        function deletesp($id)
        {
            $db=new connect();
            $query="delete from hanghoa where mahh=$id";
            $db->exec($query);
        }
        function updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$maloai,
        $soluotxem,$ngaytao,$mota,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang)
        {
            $db=new connect();
            $query="update hanghoa
                    set tenhh='$tenhh',
                    dongia=$dongia,
                    giamgia=$giamgia,
                    hinh='$hinh',
                    maloai=$maloai,
                    soxem=$soluotxem,
                    ngaytao='$ngaytao',
                    mota='$mota',
                    binhluan='$binhluan',
                    donvi='$donvi',
                    trongluong='$trongluong',
                    xuatxu='$xuatxu',
                    tinhtrang='$tinhtrang'
                    where mahh=$id
            ";
            //echo $query;
           $db->exec($query);
        }
        // phương thức insert vào database
        // $tenhh,$dongia,$giamgia,$hinh,$maloai,
        //     $soluotxem,$ngaytao,$mota,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang
         function insertsp($tenhh,$dongia,$giamgia,$hinh,$maloai,
        $soluotxem,$ngaytao,$mota,$binhluan,$donvi,$trongluong,$xuatxu,$tinhtrang)
        {
            $date=new DateTime($ngaytao);
            $ngay=$date->format("Y-m-d");
            $db=new connect();
            $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,trongluong,maloai,binhluan,soxem,ngaytao,mota,xuatxu,tinhtrang,donvi)
                    values (NULL,'$tenhh',$dongia,$giamgia,'$hinh','$trongluong',$maloai,'$binhluan',$soluotxem,'$ngay','$mota','$xuatxu','$tinhtrang','$donvi')";
                   echo $query;
            $db->exec($query);
        }
        // thong ke
        function getThongKeMatHang()
        {
            $db=new connect();
            $select="SELECT a.tenhh, sum(b.soluongmua) as soluong 
            FROM hanghoa a, cthoadon b
            where a.mahh=b.mahh group by a.tenhh";
            $result=$db->getList($select);
            return $result;
        }
        
    }  
    
        
        
?>