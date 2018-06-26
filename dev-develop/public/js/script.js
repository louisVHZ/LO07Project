$(document).ready(function () {

	$('.dropdown-menu.dropdown-item').click(function(event) {
	    event.preventDefault();
	    $('#logout-form').submit();
	});

	$('.deleteUser').click(function(event) {
	    event.preventDefault();
	    $('#deleteUser-form').submit();
	});

	$('#parentform').fadeOut();
	$('#nounouform').fadeOut();

	$('#register input').on('change', function() {
   		$('#nounou').click(function(){
		    $('#parentform').fadeOut();
		    $('#nounouform').show();
		});

		$('#parent').click(function(){
		    $('#nounouform').fadeOut();
		    $('#parentform').show();
		});
	});

});