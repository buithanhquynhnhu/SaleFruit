<?php
    class giohang{
        //phương thức lấy ra 12 sản phẩm
        public function add_items($key,$quantity)
        {
            $produ=new hanghoa();
            $pros=$produ->getHangHoaId($key);
            $hinh=$pros["hinh"];
            $ten=$pros["tenhh"];
            $dongia=$pros["dongia"];
            $total=$quantity*$dongia;
            //tao 1 object
            $item=array(
                'mahh'=>$key,
                'hinh'=>$hinh,
                'name'=>$ten,
                'quanty'=>$quantity,
                'cost'=>$dongia,
                'total'=>$total,
            );
            $_SESSION['cart'][]=$item;
        }
        public function getTotal()
        {
            $subtotal=0;
            foreach($_SESSION['cart'] as $item)
            {
                $subtotal+=$item['total'];
            }
            return number_format($subtotal,2);
        }
        public function delete_items($vitri)
    {
        unset($_SESSION['cart'][$vitri]);
    }
        public function update_item($vitri,$soluong)
        {
            if($soluong<=0)
            {
                $this->delete_item($vitri);
            }
            else
            {
                $_SESSION['cart'][$vitri]['quanty']=$soluong;
                $total_new=$_SESSION['cart'][$vitri]['quanty']*$_SESSION['cart'][$vitri]['cost'];
                $_SESSION['cart'][$vitri]['total']=$total_new;
            }
        }
    }
?>