
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wake - Connexion</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="./css/style_connexion.css" rel="stylesheet">
</head>

<body>
	
	<div class="wrapper">
		<div id="main" style="padding:50px 0 0 0;">
		<img src="./css/images/website_logo.png" alt="" style="width: 95%;" />
		<!-- Form -->
	<form id="contact-form" action="/" method="post">
			<h3>Connexion</h3>
			<h4></h4>
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
				<button name="submit" type="submit" id="contact-submit">Se connecter</button>
			</div>
		</form>

		<!-- /Form -->
		
		</div>
	</div>

	<script src="js/scripts.js"></script>
	
</body>
</html>
