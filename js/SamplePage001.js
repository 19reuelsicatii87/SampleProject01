
//LONG WAY OF WRITING READY FUNCTION
// =====================================
$(document).ready(function() {
	
});


//SHORT WAY OF WRITING READY FUNCTION
//=====================================
$(function() {
	
	let $orders = $('#orders');
	$.ajax({
		method: 'GET',
		url: 'https://learnwebcode.github.io/json-example/animals-1.json',
		success: function(orders) {
			
			//===================================
			console.log('API RESPONSE', orders);

			//===================================
			$.each(orders, function(i, order) {
				//$orders.append('<li>Name: John, Drink: Coffee</li>');
				$orders.append('<li>Name: '+ order.name +' ===== Drink: '+ order.foods.likes[0] + '</li>');
			});
			
			//===================================
			console.log('success', orders.species);
		}
	});
	
});