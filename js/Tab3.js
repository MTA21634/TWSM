$(function() {
	$('.tab_three').hide().fadeIn(700);
	$('.create_chat').hide().delay(700).fadeIn(700);

	$( document ).tooltip({
      	position: {
      		my: "center top",
        	at: "center bottom+5",
      	}
    });

	$('li').on('mouseover click', function() {
    	$(this).removeClass('nohover').addClass('hover');
  	});

	$('#join_now').click(function() {
		document.location.href = 'tab4.html';
	});

	$('#create_now').click(function() {
		document.location.href = 'tab3.html';
	});
});