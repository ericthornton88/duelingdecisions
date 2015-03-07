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
		var cat_id = $('select[name=category]').val()
		$('.options').parents('form').addClass('expand');

		var url = '/choice/' + cat_id;
		console.log(url);
		 $.ajax({    //create an ajax request to load_page.php
		        type: "GET",
		        //i need to get the category_id sent to a controller from here in order
		        //to use Ajax to retrieve the choices pertaining to that specific category
		        url: "/choice/" + cat_id,             
		          //expect html to be returned                
		        success: function(response){ 
		        	var choices = {'tag':'input','html':'${title}'};
					json2html().transform(response,choices);


		            // var choices = $(".options").json2html(response); 
		            // console.log(choices);
		            // alert(response);
		        }

		});
	});
});