/*
 *	Script : Nomads Base Theme
 */

$(document).ready(function() {
	console.log("ready!");

	
	var $container = $('#apartments');

	$container.isotope({ 
		itemSelector: '.apartment',
		layoutmode: 'fitRows'
	});

});
