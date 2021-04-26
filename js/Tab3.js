$(function() {
	$('.tab_three').hide().fadeIn(700);
	$('.create_chat').hide().delay(700).fadeIn(700);


	$( document ).tooltip({
      	position: {
      		my: "center top",
        	at: "center bottom+5",
      	}
    });

	$('#join_now').click(function() {
		document.location.href = 'tab4.php';
	});

	$('#create_now').click(function() {
		document.location.href = 'tab3.php';
	});
});
