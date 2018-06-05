$(document).ready(function() {
	var button = $(".button");
	var menu = $(".menu");
	var active =  $(".menu-active")
 
	button.click(function(event) {
		menu.toggleClass('menu-active');
		button.toggleClass('menu-active-link');
	});



	
});