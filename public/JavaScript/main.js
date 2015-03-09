var imported = document.createElement('script');
document.head.appendChild(imported);
$(function(){

	var viewOptions = function(){
		var source = $('#template-compose').html();
		var template = Handlebars.compile(source);
		return template();
	}


	$('ul').on('click', 'li', function(){
		$(this).parents('ul').toggleClass('expand');
	});


	$(document).on('change', 'select', function(){
		var cat_id = $('select[name=category]').val()
		$('.options').parents('form').addClass('expand');

		var url = '/choice/' + cat_id;
		 $.ajax({    //create an ajax request to load_page.php
		        type: "GET",
		        //i need to get the category_id sent to a controller from here in order
		        //to use Ajax to retrieve the choices pertaining to that specific category
		        url: "/choice/" + cat_id,             
		          //expect html to be returned                
		        success: function(response){ 
		        	var choices = {'tag':'input','html':'${title}'};
					console.log(response);
					var fieldset = $('fieldset');
					fieldset.html('');
					response.forEach(function(choice, index){
						fieldset.append('<label for="' + index + '">' + choice.title + '</label><input type="checkbox" name="' + index + '">');
					});

		            // var choices = $(".options").json2html(response); 
		            // console.log(choices);
		            // alert(response);
		        }

		});
	});
});