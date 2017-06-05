var newUser = {};

var validateForm = function() {
	var name = $('#name');
		email = $('#email');
		success = $('.success_send');
		error = $('.error_send');


	if ((name.val().length < 2) && (email.val().indexOf('@') === -1)) {
		error.toggleClass('show');
	} else {
		success.toggleClass('show');
		newUser.name = name.val();
		newUser.email = email.val();
		send();
	}
}

function send() {
	$.ajax({
		url: '***',
		type: 'post',
		dataType: 'json',
		data: JSON.stringify(newUser)
	}).done(function(response){
		console.log(response);
	}).fail(function(error){
		console.log(error);
	});
}

$(function(){
	var btn = $('.submit_news');

	btn.on('click', function(e){
		e.preventDefault();
		validateForm();
	});
});


