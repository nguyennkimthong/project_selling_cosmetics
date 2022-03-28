$('._removeItemCart').on('click', function(){
	$(this).parents('.item-info').remove();
	tongtien();
});

$('.btn-cart').on('click', function(){
	var type = $(this).attr('data-type');
	var number_product = $(this).parent().find('input[type="text"]').val();
	number_product = parseInt(number_product);
	if(type == 'up'){
		number_product += 1; 
	}else{
		if(number_product > 1){
			number_product -= 1;
		}
	}

	$(this).parent().find('input[type="text"]').val(number_product);
	var price_product = $(this).parents('.item-info').find('input.price_product').val();
	console.log(price_product);
	var total_item = number_product * parseInt(price_product);
	$(this).parents('.item-info').find('.item-total-price b').text(formatNumber(total_item, 0, ',', '.'));
	$(this).parents('.item-info').find('.item-total-price input').val(total_item);
	tongtien();
});

function tongtien(){
	var total = 0;
	$('.item-total-price input').each(function(){
		var price = $(this).val();
		total += parseInt(price);
	});
	$('#total').text(formatNumber(total, 0, ',', '.'));
}

function formatNumber (number, decimals, dec_point, thousands_sep) {
    number = number.toFixed(decimals);
    var nstr = number.toString();
    nstr += '';
    x = nstr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? dec_point + x[1] : '';
    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

    return x1 + x2 +'đ';
}

$('input[type="text"]').on('keyup', function(){
	var number = $(this).val();
	var price_product = $(this).parents('.item-info').find('input.price_product').val();
	var total_item = parseInt(number) * parseInt(price_product);
	
	$(this).parents('.item-info').find('.item-total-price b').text(formatNumber(total_item, 0, ',', '.'));
	$(this).parents('.item-info').find('.item-total-price input').val(total_item);
	tongtien();
});