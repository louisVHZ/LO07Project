$(document).ready(function () {

	$('.dropdown-menu.dropdown-item').click(function(event) {
	    event.preventDefault();
	    $('#logout-form').submit();
	});

	$('.deleteUser').click(function(event) {
	    event.preventDefault();
	    $('#deleteUser-form').submit();
	});

	$(".editUser").click(function(event) {
	    event.preventDefault();
	    $('#editUser').submit();
	});

	$(".accepterNounou").click(function(event) {
	    event.preventDefault();
	    $('#accepterNounou-form').submit();
	});

});