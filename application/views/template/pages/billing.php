<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
        <div id="breadcrumb">
          <a href="<?=site_url('products')?>">Products</a>
          <a href="<?= site_url('cart')?>">Cart</a>
          <a href="<?= site_url('billing')?>" class="current">Billing</a>
        </div>
    </div>
    <h1>Billing </h1>
  </div>
  <div class="container-fluid">
      <!-- Start  -->
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
          <h5>Personal Information</h5>
          </div>
          <div class="widget-content">
            <form action="#" method="get" class="form-horizontal">

            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span3">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span3">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Middle Name :</label>
              <div class="controls">
                <input type="text" class="span3">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Email Address :</label>
              <div class="controls">
                <input type="text" class="span3">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Contact Number :</label>
              <div class="controls">
                <input type="text" class="span3">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <textarea style="resize:none;height:80px" class="span3"></textarea>
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>

          </form>
          </div>
        </div>

    <!-- End -->

  </div>
</div>
