  <!-- quảng cáo -->
  <!-- end quảng cáo -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
             
          </div>

      </div>
      <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>

  <?php
    $hh=new hanghoa();
    $result=$hh->getHangHoaAll();
    $count= $result->rowCount();
    $limit=9;
    $p=new page();
    $page=$p->findPage($count,$limit);
    $start=$p->FindStart($limit);
    $current_page=isset($_GET['page'])?$_GET['page']:1;
  ?>
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
  <?php
    if(isset($_GET['act'])=='timkiem')
    {
        $ac=2;
    }
    else
    {
        $ac=1;
    }
  ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
             <?php
                if($ac==2)
                {
                    echo '<h3 class="mb-5 font-weight-bold"> SẢN PHẨM TÌM KIẾM</h3>';
                }
                else
                {
                    echo '<h3 class="mb-5 font-weight-bold"> San pham </h3>';
                }
             ?>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
         <?php
            $hh=new hanghoa();
            //$result=$hh->getHangHoaAll();
           //while($set=$result->fetch()):
            if($ac==1){
                $result=$hh->getListHangHoaAllPage($start,$limit);
            }
            else{
                if(isset($_POST['txtsearch'])){
                    $tk=$_POST['txtsearch'];
                }
                $result=$hh->getListTimKiemHH($tk);
            }
            while($set=$result->fetch()):
         ?>
              <!--Grid column-->
              <div class="col-lg-4 col-md-5 mb-3 text-center">
                <div class="single-product-item">
            <div class="view overlay z-depth-1-half">
            <img src="Content\imagetourdien\<?php echo $set["hinh"]?>"  alt="" width="350px" height="350px" >
                <div class="mask rgba-white-slight"></div>
            </div>

        <h5 class="my-4 font-weight-bold" style="color: red;">
            <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>">
            <?php echo $set["tenhh"];?>
            </h5>
            <a href="">
    <span type="" ><?php echo number_format($set["dongia"]);?><sup><u>đ</u></sup></br></span></br></a>
    <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>


</div>
<?php

?>
            </div>
              <?php
                endwhile;
          ?>
      </div>

      <!--Grid row-->
        <div class="row">
            
        </div>
  </section>
 
  
  <!-- end sản phẩm mới nhất -->
 
  <div class="col-lg-12 text-center">
  <div class="pagination-wrap">
				<ul >
					<?php
                        if($current_page>1 && $page>1){
                            echo '<li ><a href="index.php?action=sanpham&page='.($current_page-1).'">Prev</a></li>';
                        }
                        
                        for($i=1;$i<=$page;$i++){

                        
                    ?>
				    <li ><a href="index.php?action=sanpham&page=<?php echo $i;?>"><?php echo $i;?></a></li>
				  <?php
                        }
                        if($current_page<$page && $page>1){
                            echo '<li ><a href="index.php?action=sanpham&page='.($current_page+1).'">Next</a></li>';
                        }
                  ?> 
                  <li><p></p></li>
				</ul>
</div>
                    </div>