var duelInit = function(){
	c.forEach(function(choice){
		$('.choice-one').text(choice.title);
		console.log(choice.title);
		console.log(choice.details);
		console.log(choice.description);
	});
};

$(function(){

duelInit();






});