//LONG WAY OF WRITING READY FUNCTION
// =====================================
$(document).ready(function() {

});

// SHORT WAY OF WRITING READY FUNCTION
// =====================================
$(function() {

	let $orders = $('#orders');
	$.ajax({
		method : 'GET',
		url : 'https://learnwebcode.github.io/json-example/animals-1.json',
		success : function(orders) {

			// ===================================
			console.log('API RESPONSE', orders);

			// ===================================
			$.each(orders, function(i, order) {
				// $orders.append('<li>Name: John, Drink: Coffee</li>');
				$orders.append('<li>Name: ' + order.name + ' ===== Drink: '
						+ order.foods.likes[0] + '</li>');
			});

			// ===================================
			console.log('success', orders.species);
		}
	});

});


//Attribute Contains Word Selector [name~=”value”]
// ======================================================
$(document).ready(function() {
	//$("input[name~='new']").val("This is all new");
	//$("input[name~='man']").val( "mr. man is in it!" );
	$("input").val( "mr. man is in it!" );
});

$(document).ready(function() {
	$("input").each(function(){
		$(this).css("color", "red");
	});
});

$(document).ready(function(){
	$("#add-order").click(function(){
		$.each([ 52, 97 ], function( index, value ) {
			  alert( index + ": " + value );
			});		
	});
});




