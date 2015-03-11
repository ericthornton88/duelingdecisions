// var duelInit = function(){
	
// 	$('.choice-one').text(c[0].title);
// 	$('.choice-one-details').text(c[0].details);
// 	$('.choice-one-description').text(c[0].description);

// 	$('.choice-two').text(c[1].title);
// 	$('.choice-two-details').text(c[1].details);
// 	$('.choice-two-description').text(c[1].description);
	
// };

var renderChoice = function(duel) {
	var source = $('#template-choice').html();
	var template = Handlebars.compile(source);

	var output = template({
		title: duel.title,
		details: duel.details,
		pro: duel.description,
		con: duel.description
	});
	

	return output;

}


var get2Choices = function(c) {
	return {choice1: c[0],
			choice2: c[1]};
}

duel = get2Choices(c);

var renderLeft = function(duel) {
	$('.first-child').append(renderChoice(duel));

}

var renderRight = function(duel) {
	$('.last-child').append(renderChoice(duel));
}


$(function(){


renderLeft(duel.choice1);
renderRight(duel.choice2);




});