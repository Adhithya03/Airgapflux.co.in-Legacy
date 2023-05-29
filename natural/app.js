$(function() {
	// Selectors
	var $form = $('.message-form');
	var $input = $('[name="query"]');
	var $messages = $('.messages');

	// Event listener for form submission
	$form.on('submit', function(event) {
		event.preventDefault();
		var query = $input.val().trim();

		// Add the user's message to the chat
		$messages.append('<div class="message user">' + query + '</div>');

		if (query !== "") {
			// Get response from API
			$.ajax({
				type: 'POST',
				url: 'api.php',
				data: {
					query: query
				},
				success: function(aiResponse) {
                    console.log(aiResponse);
					// Parse the response from the API
					// var msgs = JSON.parse(response);

					// // Add messages to the chat
					// msgs.forEach(function(msg) {
					// 	if (msg.type == 'text') {
					// 		$messages.append('<div class="message bot">' + msg.content + '</div>');
					// 	} else if (msg.type == 'video') {
					// 		$messages.append('<div class="message bot"><a href="' + msg.content + '" target="_blank"><img src="https://img.youtube.com/vi/' + getYoutubeVideoId(msg.content) + '/mqdefault.jpg" /></a></div>');
					// 	}
					// });

					// Scroll to the bottom of the chat
					$messages.scrollTop($messages[0].scrollHeight);
				}
			});
		}

		// Clear the input field
		$input.val('');
	});

	// Function to get the YouTube video ID
	function getYoutubeVideoId(url) {
		var regex = /youtube\.com\/watch\?v=(\w+)/;
		var match = regex.exec(url);
		if (match) {
			return match[1];
		}
		return null;
	}
});
