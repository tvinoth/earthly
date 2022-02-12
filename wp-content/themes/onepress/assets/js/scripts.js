/*updatecart = function(qty) {
    var currentVal, data, item_hash, request;
    currentVal = void 0;
    data = void 0;
    item_hash = void 0;
    currentVal = parseFloat(jQuery(".sidecartqty").val());
    request = jQuery.ajax({
      url: wc_add_to_cart_params.ajax_url,
      method: 'POST',
      data: {
        quantity: currentVal,
        action: 'update_my_cart'
      },
      dataType: 'html'
    });
    request.done(function(msg) {
      alert('cart update ');
    });
    request.fail(function(jqXHR, textStatus) {
      alert('Request failed: ' + textStatus);
    });
  };*/   
  updatecart = function(qty){
   var item_hash = jQuery(".sidecartqty").attr( 'name' ).replace(/cart\[([\w]+)\]\[qty\]/g, "$1");
        var item_quantity = jQuery(".sidecartqty").val();
        var currentVal = parseFloat(item_quantity);

        function qty_cart() {

            jQuery.ajax({
                type: 'POST',
                url: cart_qty_ajax.ajax_url,
                data: {
                    action: 'qty_cart',
                    hash: 16,
                    quantity: currentVal
                },
                success: function(data) {
                    //jQuery( '.view-cart-popup' ).html(data);
                }
            });  

        }

        qty_cart();
  }