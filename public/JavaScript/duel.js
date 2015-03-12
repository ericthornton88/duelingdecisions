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

var renderSubmit = function(duel1, duel2) {
	var source = $('#template-decision').html();
	var template = Handlebars.compile(source);

	var output = template({
		id_1: duel1.choice_id,
		id_2: duel2.choice_id,
		name_1: duel1.title,
		name_2: duel2.title
	});
	
	$('.middle-child').append(output);

}


var get2Choices = function(c) {
	return {choice1: c[0],
			choice2: c[1]};
}



var renderLeft = function(duel) {
	$('.first-child').append(renderChoice(duel));

}

var renderRight = function(duel) {
	$('.last-child').append(renderChoice(duel));
}

var renderFinal = function(duelFinal) {
	$('.middle-child').append(renderChoice(duelFinal));
}

var getFinal = function(choice) {
	return {choice1: choice[0]};
}




$(function(){


if (window.location.pathname == '/duel') {
	duel = get2Choices(c);
	renderLeft(duel.choice1);
	renderRight(duel.choice2);

	renderSubmit(duel.choice1 , duel.choice2);
} else if (window.location.pathname == '/duel/complete') {

	duelFinal = getFinal(choice);
	renderFinal(duelFinal.choice1);

}




});