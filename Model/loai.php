<?php
 class loai{
    function __construct(){}
    public function getLoai(){
        $db=new connect();
        $select="select * from loai";
        $result=$db->getList($select);
        return $result;
    }
    function deleteloai($id)
    {
        $db=new connect();
        $query="delete from loai where maloai=$id";
        $db->exec($query);
    }
    function updateloai($id,$tenloai,$menu)
    {
        $db=new connect();
        $query="update loai
                set tenloai='$tenloai',
                    menu='$menu'
                where maloai=$id
        ";
       // echo $query;
       $db->exec($query);
    }
    // phương thức insert vào database
    function insertloai($maloai,$tenloai,$menu)
    {
        $db=new connect();
        $query="insert into loai(maloai,tenloai,menu)
                values ($maloai,'$tenloai','$menu')";
       
        $db->exec($query);
    }
    public function getLoaiId($id)
    {
        $db=new connect();
        $select="select * from loai where maloai=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    
 }
?>