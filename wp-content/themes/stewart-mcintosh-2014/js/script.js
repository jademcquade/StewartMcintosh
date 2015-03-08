jQuery( document ).ready(function($) {

	// remove border top for mobile nav dropdown
    $('.site-navigation li:first').css('border-top','none');

    //style the intro message on the homepage banner
/*    $('#intro p:first').css({'font-size':'24px', 'font-weight':400});
*/    $('#intro strong').css({'color':'red', 'font-style':'italic', 'font-size':'21px'});

});

// required values for email and message





function validateForm (elem, helperMessage) {	

	var name,
	email,
	message;

	name = document.getElementById('name');
	email = document.getElementById('email');
	message = document.getElementById('message');

	// step through input elements on form
	if (isName(name, 'Please enter only letters for your name')) {
		if (isEmail(email, 'Please enter a valid email address')) {
			if (isMessage(message, 'Please leave a message')) {
				return true;
			}
		}
	} 

	return false; 
}

function isName (elem, helperMessage) {
	var numbers = /^[0-9]+$/;
	if (elem.value == 0 || elem.value == null) {
		helperMessage = "Please enter your name";
		alert(helperMessage);
		elem.focus();
		return false;
	}
	else if (elem.value.match(numbers)) {
		alert(helperMessage);
		elem.focus();
		return false;
	}

	return true;
}

function isEmail (elem, helperMessage) {
	var address = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (elem.value == 0 || elem.value == null) {
		helperMessage = "Please enter your email address";
		alert(helperMessage);
		elem.focus();
		return false;
	}
	if (elem.value.match(address)) {
		return true;
	}
	else if (!elem.value.match(address)) {
		helperMessage = "Please enter a valid email address";
		alert(helperMessage);
		elem.focus();
		return false;
	}
	
	return true;
}

function isMessage (elem, helperMessage) {
	if (elem.value == 0 || elem.value == null) {
		helperMessage = "Please enter your message";
		alert(helperMessage);
		elem.focus();
		return false;
	}

	return true;
}




