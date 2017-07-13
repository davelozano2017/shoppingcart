<?php
if($resulttemptable) { ?>
<?php $i = 0; foreach ($resulttemptable as $row): ?>
  <li><a href="#" onclick="RemoveItem('<?php echo $row->product_id?>')">
  <?php echo
  ' <span style="display:block">Name: '. $row->product_name.'</span>'.
  ' <span style="display:block"> Price: '. "&#8369;".number_format($row->price,2,'.',',') .'</span>'.
  ' <span style="display:block">Quantity: '. $row->quantity. '</span>'
  ?>
  </a></li>
  <li class="divider"></li>
<?php endforeach; ?>
<li>
  <a href="<?= site_url('cart')?>"><i class="icon icon-eye-open"></i> View Cart</a>
  <a href="#" onclick="clear_cart()"><i class="icon icon-refresh"></i> Clear Cart</a>
</li>
<?php } else { ?>
  <li><a href="#"> Cart is empty</a></li>
<?php } ?>
