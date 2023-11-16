<div class="single-product mt-80 mb-80">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
                <form action="index.php?action=giohang"  method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-12">
                        <div class="tab-content">
                           <?php
                                if(isset($_GET["id"]))
                                {
                                    $id=$_GET["id"];
                                    $hh= new hanghoa();
                                    $result=$hh->getHangHoaId($id);
                                    $hinh=$result["hinh"];
                                    $tenhh=$result["tenhh"];
                                    $binhluan=$result["binhluan"];
                                    $soxem=$result["soxem"];
                                    $ngaytao=$result["ngaytao"];
                                    $dongia=$result["dongia"];
                                    $donvi=$result["donvi"];
                                    $trongluong=$result["trongluong"];
                                    $xuatxu=$result["xuatxu"];
                                    $tinhtrang=$result["tinhtrang"];
                                    $mota=$result["mota"];
                                }
                           ?>
                            
                               <div class="single-product-img">
                               <img src="Content\imagetourdien\<?php echo $hinh?>" alt="" height="600px" width="550px">
                               </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-7">
					<div class="single-product-content">
                        <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                        <h3 class="product-title"><?php echo $tenhh;?> </h3>
                        <input type="hidden" name="size" id="size" value="0" />
                            Bình Luận:<?php echo $binhluan;?>&emsp;
                            <input type="hidden" name="size" id="size" value="0" />
                            Lượt xem:<?php echo $soxem;?>&emsp;
                            <input type="hidden" name="size" id="size" value="0" />
                            Ngày tạo:<?php echo $ngaytao;?><br>
                        <h4 class="price">Giá bán:<?php echo number_format($dongia)?> đ</h4>
                       
                            <input type="hidden" name="size" id="size" value="0" />
                            Đơn vị tính:<?php echo $donvi;?><br>
                            <input type="hidden" name="size" id="size" value="0" />
                            Trọng lượng:<?php echo $trongluong;?><br>
                            <input type="hidden" name="size" id="size" value="0" />
                            Xuất xứ:<?php echo $xuatxu;?><br>
                        <p class="product-description">
                            <?php echo $mota;?>
                        </p>
                           
                            
                            <input type="hidden" name="size" id="size" value="0" />
                            Tình trạng:<?php echo $tinhtrang;?>
                            </br>
                            Đặt hàng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                                
                            
                        </h5>
                        
                        <div class="action">

                            <button class="add-to-cart btn btn-default "  type="submit" data-toggle="modal" data-target="#myModal"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
                            </div>
                            </div>