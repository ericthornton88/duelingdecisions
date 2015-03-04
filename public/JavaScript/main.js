$(function(){

	var viewOptions = function(){
		var source = $('#template-compose').html();
		var template = Handlebars.compile(source);
		return template();
	}


	$('table').on('click', 'td', function(){
		$(this).toggleClass('expand');
	});
});