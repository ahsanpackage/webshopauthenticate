<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			To reset your password, complete this form: {{ \URL::to(\Config::get('webshopauthenticate::uri').'/reset-password/'.$token) }}.
		</div>
	</body>
</html>