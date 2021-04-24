const chatBox = document.querySelector("#result")
$(document).keypress(function(e){ //using keyboard enter key
	displayResult();
	/* Send Message	*/

		if(e.which === 13){
				if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
						scrollToBottom();
					}
				});
			}

			/* $("form").submit();
			 alert('You press enter key!'); */
		}
	}
);


$(document).ready(function(){ //using send button
	displayResult();
	/* Send Message	*/

		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
						scrollToBottom();
					}
				});
			}
		});
	/* END */
	});

	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
				scrollToBottom();
			}
		});
	}

	function scrollToBottom() {
		chatBox.scrollTop = chatBox.scrollHeight;
	}
