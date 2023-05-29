<!DOCTYPE html>
<html>
<head>
	<title>Chat App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="container-fluid h-100">
		<div class="d-flex justify-content-center align-items-center h-100">
			<div class="chat-container">
				<div class="chat-header">
					<h1>Chat App</h1>
				</div>
				<div class="chat-body">
					<div class="messages">
					</div>
				</div>
				<div class="chat-footer">
					<form class="message-form">
						<input type="text" name="query" required autocomplete="off" placeholder="Enter your query..." />
						<button type="submit">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="app.js"></script>
</body>
</html>
