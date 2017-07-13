var url = 'http://localhost/shoppingcart/';
// #########################################################################################################
function AddItems($id,$product_name) {
  var id = $id;
  var product_name = $product_name;
  $('#additems'+id).html('<i class="icon icon-check"></i> Added').attr('disabled',true),setTimeout(function(){
    $('#additems'+id).html('<i class="icon icon-shopping-cart"></i> Add To Cart').attr('disabled',false);
    AddToTempTable(id,product_name);
  },300);
}

function AddToTempTable(id,product_name) {
  $.ajax({
    type:'POST',
    url: url+'execution/add/'+id,
    cache:false,
    dataType : 'json',
    success:function(response){
      var quantity = response.quantity;
      showcartlist();
      CountAllTempTable();
      response.notification == 'updated' ? notify_update(product_name,quantity) : notify_added(product_name);
    }
  });
}

function notify_update(product_name,quantity) {
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff', message: product_name+ ' has been added.' + '<br> Quantity: ' + quantity,
  },
  'position'  :'top right', 'outEffect' :'slideBottom'
  });
}

function notify_added(product_name) {
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff', message: product_name+ ' has been added.',
  },
  'position'  :'top right', 'outEffect' :'slideBottom'
  });
}
// #########################################################################################################

// #########################################################################################################
function CountAllTempTable() {
  $.ajax({
    type: 'POST',
    url: url+'countcart',
    cache:false,
    success:function(response){
      $('#showcart').html(response);
    }
  });
}

function showcartlist() {
  $.ajax({
    type: 'POST',
    url: url+'cartcontent',
    cache:false,
    success:function(response){
      $('#showcartlist').html(response);
    }
  });
}
// #########################################################################################################

// #########################################################################################################
function RemoveItem($id) {
  var id = $id;
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff',
  message: 'Are you sure you want to remove this item? <br><br> <a class="btn btn-info" onclick="remove_item('+id+')"> Yes</a> <a class="btn btn-warning"> No</a>',
  },
  'position'  :'top right', 'outEffect' :'slideBottom','sticky' :true, 'closeOnClick'  :true
  });
}

function remove_item(id) {
  $.ajax({
    type:'POST',
    url: url+'execution/removebyid/'+id,
    cache:false,
    dataType : 'json',
    success:function(response){
      if(response.notification === 'success') {
        notify_remove_by_id();
        cart();
        showcartlist();
        CountAllTempTable();
      }
    }
  });
}

function notify_remove_by_id() {
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff', message: 'Item has been removed.',
  },
  'position'  :'top right', 'outEffect' :'slideBottom','delay': 1000
  });
}
// #########################################################################################################

// #########################################################################################################
function clear_cart() {
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff',
  message: 'Are you sure you want to clear your cart? <br><br> <a class="btn btn-info" href="#" onclick="clearall()"> Yes</a> <a class="btn btn-warning" > No</a>',
  },
  'position'  :'top right', 'outEffect' :'slideBottom','sticky' :true, 'closeOnClick'  :true
  });
}

function clearall() {
  $.ajax({
    type:'POST',
    url: url+'execution/removeall',
    cache:false,
    dataType : 'json',
    success:function(response){
      if(response.notification === 'success') {
        notify_clear_cart();
        cart();
        CountAllTempTable();
        showcartlist();
      }
    }
  });
}

function notify_clear_cart() {
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff', message: 'Your cart has now empty.',
  },
  'position'  :'top right', 'outEffect' :'slideBottom','clearAll' :true
  });
}

function notify_delete_by_checkbox(message) {
  $.amaran({
  'theme'     :'colorful',
  'content'   :{ bgcolor:'#336699', color:'#fff', message: message,
  },
  'position'  :'top right', 'outEffect' :'slideBottom','clearAll' :true
  });
}
// #########################################################################################################

// #########################################################################################################
function DeleteByCheckBox() {
  $(document).ready(function(){
    $('#btn-delete').click(function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: url+'execution/deletebycheckbox',
        cache:false,
        dataType: 'json',
        data: $('form#form-cart').serialize(),
        success:function(response){
          var message = response.message;
          if(response.success == false) {
            notify_delete_by_checkbox(message);
          } else if (response.success == true) {
            notify_delete_by_checkbox(message);
            cart();
            showcartlist();
            CountAllTempTable();
          }
        }
      });
    })
  });
}

function cart() {
  $.ajax({
    type: 'POST',
    url: url+'cartpage',
    cache:false,
    success:function(response){
      $('#cart').html(response);
    }
  });
}

// #########################################################################################################

// #########################################################################################################
function UpdateQuantity($product_id,$stocks) {
    var product_id = $product_id;
    var quantity = $('#quantity'+product_id).val();
    $.ajax({
      type: 'POST',
      url: url+'execution/updatequantity/'+product_id,
      data: {quantity:quantity},
      cache:false,
      success:function(response){
        cart();
      }
    });
}
// #########################################################################################################

cart();
DeleteByCheckBox();
CountAllTempTable();
showcartlist();
