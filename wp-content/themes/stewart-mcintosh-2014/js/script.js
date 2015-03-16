jQuery( document ).ready(function($) {

	// remove border top for mobile nav dropdown
    $('.site-navigation li:first').css('border-top','none');

    //style the intro message on the homepage banner
/*    $('#intro p:first').css({'font-size':'24px', 'font-weight':400});
*/    $('#intro strong').css({'color':'#db001c', 'font-style':'italic', 'font-size':'21px'});

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
	if (isName(name)) {
		if (isEmail(email)) {
			if (isMessage(message)) {
				return true;
			}
		}
	} 

	return false; 
}

function isName (elem) {
	var numbers = /^[0-9]+$/;
	if (elem.value == 0 || elem.value == null) {
		document.getElementById('name').style.border = "1px solid red";
		document.getElementsByName('name')[0].placeholder='Name is required';
		elem.focus();
			return false;
	}
	else if (elem.value.match(numbers)) {
		document.getElementById('name').value = "";
		document.getElementById('name').style.border = "1px solid red";
		document.getElementsByName('name')[0].placeholder='No numbers please';
		elem.focus();
			return false;
	}

	document.getElementById('name').style.border = "1px solid rgba(0, 0, 0, 0.1)";	

	return true;
}

function isEmail (elem) {
	var address = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (elem.value == 0 || elem.value == null) {
		document.getElementById('email').style.border = "1px solid red";
		document.getElementsByName('email')[0].placeholder='Please enter a valid email address';
		elem.focus();
			return false;
	}
	
	else if (!elem.value.match(address)) {
		document.getElementsByName('email')[0].placeholder='Please enter a valid email address';
		elem.focus();
			return false;
	}

	document.getElementById('email').style.border = "1px solid rgba(0, 0, 0, 0.1)";	

	return true;
}

function isMessage (elem) {
	if (elem.value == 0 || elem.value == null) {
		document.getElementById('email').style.border = "1px solid red";
		document.getElementsByName('email')[0].placeholder='A message surely can\'t be empty?';
		elem.focus();
			return false;
	}

	document.getElementById('email').style.border = "1px solid rgba(0, 0, 0, 0.1)";	

	return true;
}




