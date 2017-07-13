<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
        <div id="breadcrumb">
          <a href="<?=site_url('products')?>">Products</a> <a href="#" class="current">Cart</a>
        </div>
    </div>
    <h1>Cart </h1>
  </div>
  <div class="container-fluid">
      <!-- Start  -->

      <form method="POST" id="form-cart" name="form-cart">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
          </div>
          <div class="widget-content nopadding">
            <div id="cart"></div>
          </div>
        </div>
        <a href="<?= site_url('products')?>" class="btn btn-info">Continue Shopping</a>
        <?php
        if($resulttemptable) {
          echo '<button type="submit" id="btn-delete" class="btn btn-danger">Delete</button>';
          echo ' <a href="'.site_url('billing').'" class="btn btn-success">Place Order</a>';
        } else {
        }
        ?>
      </form>
    <!-- End -->

  </div>
</div>
