$(function() {
	$('main').hide().fadeIn(1500);
	$('#user_entry').hide().delay(1500).fadeIn(1500);

	$('#log_in').click(function() {
		var username = document.getElementById('fname');
		var password = document.getElementById('pwd');

		if (username.value != "" && password.value != "")
		{
			document.location.href = 'tab2.html';
		}
		else
		{
			$('#warning').text("Please, enter a valid username and a password.").addClass('warning');
		}
	});
});