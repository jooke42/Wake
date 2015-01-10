<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wake - Inscription</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="css/style_inscription.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">
	<div id="main" style="padding:50px 0 0 0;">
		<!--<img src="./css/images/website_logo.png" alt="" style="width: 95%;" />-->

		<!-- Form -->
		<form id="contact-form" action="/" method="post">
			<h3>Inscription</h3>
			<h4></h4>
			<div>
				<label>
					<span>Name: (required)</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Last Name: (required)</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Email: (required)</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" required>
				</label>
			</div>
			<div>
				<label>
					<span>Password: (required)</span>
					<input placeholder="Please enter your password" type="password" tabindex="3" required>
				</label>
			</div>
			<div>
				<label>
					<span>Message: (required)</span>
					<textarea placeholder="Include all the details you can" tabindex="5" required></textarea>
				</label>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">S'inscrire</button>
			</div>
		</form>
		<!-- /Form -->

	</div>
</div>

<script src="js/scripts.js"></script>

</body>
</html>

