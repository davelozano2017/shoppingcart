<table class="table table-bordered table-responsive table-striped with-check">
  <thead>
    <tr>
      <th><i class="icon-resize-vertical"></i></th>
      <th>#</th>
      <th>Product Name</th>
      <th>Brand Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
    </tr>
  </thead>
  
  <?php
  if($resulttemptable) { ?>
    <?php $i = 0; foreach ($resulttemptable as $row): ?>
      <tbody >

        <tr>
          <td><input type="checkbox" name="product_id[]" value="<?php echo $row->product_id?>"></td>
          <td style="width:1%"><?php echo ++$i?></td>
          <td><?php echo $row->product_name?></td>
          <td><?php echo $row->brand_name?></td>
          <td><?php echo $row->description?></td>
          <td style="width:1%"><?php echo "&#8369;".number_format($row->price,2,',','.')?></td>
          <td style="width:1%">
            <input type="number" min=1 max="<?php echo $row->stocks?>" class="span1" name="quantity"
            onchange="UpdateQuantity('<?php echo $row->product_id?>')"
            id="quantity<?php echo $row->product_id?>" value="<?php echo $row->quantity?>">
          </td>
          <td style="width:1%"><?php echo "&#8369;".number_format($row->price * $row->quantity,2,',','.')?></td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    <tbody>
      <td colspan=7 style="text-align:right">Sub Total:</td>
      <td class="text-success" ><?php  foreach($resulttotal as $r) { echo '&#8369;'.number_format($r->total,2,'.',',').''; }?></td>
      </thead>

  <?php } else { ?>
    <tbody>
      <tr>
        <td colspan=8 style="text-align:center"><span class="text-warning">Cart is empty</span> </td>
      </tr>
    </tbody>
  <?php } ?>
</table>