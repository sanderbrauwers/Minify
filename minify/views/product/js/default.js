
$(document).ready(function(e) {
	
	$('.thumbnail').click(function(e) {
       var image =  $(this).attr('id');
	   var id = $(this).children(":first").attr('id');
	   $('#imagePreview').html('<img src="'+ urldest + 'thumbnails/mid/' + image + '" />');
	   $('#imageid').val(id);
	   
    });
	
	$('.productCart').click(function(e) {
		var requestUrl = $(this).attr('href');
		var product = $(this);
		e.preventDefault();
		$.ajax({
		  url: requestUrl,
		  context: document.body
		}).done(function() {
		  	product.attr('class', 'span1 productCartAdded');
			$(product).tooltip('hide')
					  .attr('data-original-title', 'Added to cart')
					  .tooltip('fixTitle')
					  .tooltip('show');
		});

    });
	$('.addCartBtn').click(function(e) {
		
		var requestUrl = $(this).attr('href');
		var product = $(this);
		e.preventDefault();
		$.ajax({
		  url: requestUrl,
		  context: document.body
		}).done(function() {
		  	product.attr('class', 'addCartBtnAdded');
			$(product).html('<i class="fa fa-shopping-cart productSearchCart"></i> Added to cart');
		});

    });
	
});


