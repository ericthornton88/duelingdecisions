$(function(){

	var viewOptions = function(){
		var source = $('#template-compose').html();
		var template = Handlebars.compile(source);
		return template();
	}


	$('ul').on('click', 'li', function(){
		$(this).parents('ul').toggleClass('expand');
	});


	$(document).on('click', 'form', function(){
		$('.options').parents('form').toggleClass('expand')

	});


});