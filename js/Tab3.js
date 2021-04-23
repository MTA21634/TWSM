$(function() {
	$('.row').hide().fadeIn(1500);

	$('img#choice_icon').on('mouseover', function() {
		$(this).animate({
			  	color: 'green',
		      	height: '270px',
		    	width: '270px',
		    });
	});

	$('img#choice_icon').on('mouseout', function() {
		$(this).animate({
		      height: '200px',
		      width: '200px',
		    });
	});

	$('img#choice_icon').on('click', function() {
		var page = $(this).next().attr('id');
		document.location.href = page + '.html';
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