<?php
    class connect{
        //thuoc tinh
        var $db=null;
        //PDB(dsn,user,pass)
        //ham tao
        public function __construct()
        {
            $dsn='mysql:host=localhost;dbname=shptc';
            $user='root';
            $pass='';
           /* try{
                $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'"));
                echo "thanh cong";
            } catch(\Throwable $th){
                //throw $th
                echo "That bai";
                echo $th;
            }*/
            $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'"));
        }
        public function getList($select)
        {
            $result=$this->db->query($select);
            return $result;
        }
        public function getInstance($select)
        {
            $result=$this->db->query($select);
            $result=$result->fetch();
            return $result;
        }
        public function exec($query)
        {
            $result=$this->db->exec($query);
            return $result;
        }
    }
?>