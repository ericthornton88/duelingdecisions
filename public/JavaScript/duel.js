var renderChoice = function(duel) {
	var source = $('#template-choice').html();
	var template = Handlebars.compile(source);
	console.log(duel)
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
	array = c;
	if (array.length >= 2) {
		first = array.shift();
		second = array.shift();
		return {choice1: first,
				choice2: second};
	}
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

var duelSetup = function (){
	$(".first-child").empty();
	$(".last-child").empty();
	$(".middle-child").empty();

	// Initiates the duel.
	duel = get2Choices(c);
	renderLeft(duel.choice1);
	renderRight(duel.choice2);
	renderSubmit(duel.choice1 , duel.choice2);

};


$(function(){
	$(".select-choice").on("submit", "form", function(e){
		e.preventDefault();
		roundWinner = "";

   		if (document.getElementById("week").checked) {
			roundWinner = first;
		} else {
			roundWinner = second;
		}

		if(array.length == 0 && typeof roundWinner == "object") {
			console.log("this will be a redirect to winner page.");
			window.location.replace("/duel/complete");
		} else { 	// If more than 0 in the array, 
			array.push(roundWinner);
			duelSetup();
		}
	});

	if (window.location.pathname == '/duel') {
		duelSetup();
	}

});