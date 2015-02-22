jQuery( document ).ready(function($) {

	// remove border top for mobile nav dropdown
    $('.site-navigation li:first').css('border-top','none');

    //style the intro message on the homepage banner
    $('#intro p:first').css('font-size','24px');
    $('#intro strong').css({'color':'red', 'font-style':'italic'});

});