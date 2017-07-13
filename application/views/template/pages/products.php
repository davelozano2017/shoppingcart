<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?= site_url('products')?>">Products</a>
    </div>
    <h1>Products </h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <?php $i = 0; foreach ($results as $row):
        $stock = $row->stocks;
        $stocksaboveten = '<span class="label label-info">'.$stock.'</span>';
        $stocksbelowten = '<span class="label label-important">'.$stock.'</span>';
        $stocks = ($stock <= 10) ? $stocksbelowten : $stocksaboveten;
      ?>
        <div class="widget-box">
          <div class="widget-title">
            <span class="label label-success"><?php echo ++$i?></span>
            <h5><?php echo $row->product_name?></h5>
          </div>
          <div class="widget-content">
            <h5>Brand: <span><?php echo $row->brand_name?></span></h5>
            <h5>Descriptions: <span style="display:block"><?php echo $row->description?></span></h5>
            <h5>Price: <span class="text-success"><?php echo "&#8369;".number_format($row->price,2,'.',',')?></span></h5>
            <h5>Stocks: <?php echo $stocks?></h5>
            <button id="additems<?php echo $row->id?>" class="btn btn-info" onclick="AddItems('<?php echo $row->id?>','<?php echo $row->product_name?>')"><i class="icon icon-shopping-cart"></i> Add To Cart</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
