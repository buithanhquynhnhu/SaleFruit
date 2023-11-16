
<div class="table-responsive">
  
    <form action="index.php?action=giohang&act=update_item" method="post">
      <table class="table table-bordered">
        <thead>
         
        <tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
        </thead>
        <tbody>
          <?php
              $j=0;
              foreach($_SESSION['cart'] as $key=>$item):
              $j++;
          ?>
            <tr>
            <tr class="table-body-row">
									<td class="product-remove"><a href="index.php?action=giohang&act=delete_item&id=<?php echo $key;?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img width="500px" height="50px" src="Content\imagetourdien\<?php echo $item['hinh'];?>"></td>
									<td class="product-name"> <?php echo $item['name'];?></td>
									<td class="product-price"> <?php echo number_format($item['cost']);?> </td>
									<td class="product-quantity"><input type="text" name="newqty[]" value="<?php echo number_format($item['quanty']);?>" /></td>
									<td class="product-total"><?php echo number_format($item['total']);?></td>
								</tr>
          <?php
            endforeach;
          ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b>
              <?php
                $gh=new giohang();
                echo $gh->getTotal();
              ?>  
              <sup><u>đ</u></sup></b>
            </td>
            <td><a href="index.php?action=order">Thanh toán</a></td>
          </tr>
          
        </tbody>
      </table>
    </form>
 
</div>
</div>