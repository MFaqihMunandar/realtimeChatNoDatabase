<?php
session_start();
session_destroy();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Chat With NO History</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="stylesheet" href="css/mystyle.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <script src="script/script.js"></script>
    </head>
    <body>
		<div class='mainRoom' >
			<div class='headContent' style='text-align:center;' ></br>
				<b>Login APP Chat Kita</b>
			</div>
			<div class='contentChat' style='text-align:center;'></br>
				<form method='POST' action='chat.php'>
					<input id='uidnya' name='uidnya'/></br></br>
					<button type='submit'>Log-In</button>
				</form>
			</div>
		</div>
	</body>
</html>