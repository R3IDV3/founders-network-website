$(function(){
	
	$('input, textarea').on('focus', function(){
		$(this).parents('.input-group, .question').addClass('focus');
	});
	
	$('input, textarea').on('blur', function(){
		$(this).parents('.input-group, .question').removeClass('focus');
		validate(this);
	});
	
	$('input[type=file]').on('change', function() {
		validate(this);
	});

	var validate = function(el){
		var val = el.value;
		// no field can be left blank
		if ( val === null || val === "" ) {
			$(el).parents('.input-group, .question').addClass('error').find('.error-message em').text('Field cannot be left blank.');
		} else {
			$(el).parents('.input-group, .question').removeClass('error');
		}
		// specific validation rules for certain fields
		if ( $(el).attr('name') == 'firstname' ||  $(el).attr('name') == 'lastname') {
			if ( val.match(/\d/) && !(val === null || val === "") ) { // if value contains numbers
				$(el).parents('.input-group, .question').addClass('error').find('.error-message em').text('Field cannot contain numbers.');
			}
		} else if ( $(el).attr('name') == 'email' ) {
			if ( !val.match(/^\w+@uwo\.ca$/) && !(val === null || val === "") ) { // if value does not begin with a string of alpha-numeric characters and end in '@uwo.ca'
				$(el).parents('.input-group, .question').addClass('error').find('.error-message em').text('Email must be a valid UWO email.');
			}
		} else if ( $(el).attr('name') == 'year-of-study' ) {
			if ( !val.match(/^[1-4]$/) && !(val === null || val === "") ) { // if value is not a single number between 1 and 4
				$(el).parents('.input-group, .question').addClass('error').find('.error-message em').text('Year of study must be between 1 and 4.');
			}
		}
		
		var noBlankFields = true,
			af = document.forms["application-form"],
			afdot = document.applicationForm;
		if ( afdot.resume.value === null || afdot.resume.value === "" ) {
			noBlankFields = false;
		} else if ( afdot.firstname.value === null || afdot.firstname.value === "" ) {
			noBlankFields = false;
		} else if ( afdot.lastname.value === null || afdot.lastname.value === "" ) {
			noBlankFields = false;
		} else if ( afdot.email.value === null || afdot.email.value === "" ) {
			noBlankFields = false;
		} else if ( af["year-of-study"].value === null || af["year-of-study"].value === "" ) {
			noBlankFields = false;
		} else if ( afdot.faculty.value === null || afdot.faculty.value === "" ) {
			noBlankFields = false;
		}
		
		if ( $('.error').length === 0 && noBlankFields) {
			$('button[type=submit]').removeAttr('disabled');
		} else {
			$('button[type=submit]').attr('disabled', 'disabled');
		}
	};
	
});