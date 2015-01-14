<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8">
		<title>Bienvenue sur Wake</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="../../Assets/css/ripples.min.css" rel="stylesheet">
		<link href="../../Assets/css/material-wfont.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../../Assets/css/blueimp-gallery.css">
		<link rel="stylesheet" href="../../Assets/css/bootstrap-image-gallery.css">
		<link rel="stylesheet" href="../../Assets/css/demo.css">

	</head>
	
	<body>

		<script type="text/javascript">


		$("search").keypress(function(event) {
			if (event.which == 13) {
				event.preventDefault();
				$("form").submit();
			}
		});

		</script>

		<div class="navbar navbar-default" style="background-color: #5f7c8a;">
			
			<!-- Logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../index.php">Wake</a>
			</div>
			<div class="navbar-collapse collapse navbar-responsive-collapse" >
				
				<!-- Barre de recherche -->
				<form class="navbar-form navbar-left" method="POST" action="../../index.php?Module=Contact&action=searchContact">
					<input class="form-control col-lg-8" name="search" id="search"size=35 placeholder="Search..." type="text">
				</form>
		  
				<!-- Menu Header -->
				<div class="col-lg-offset-5">
					<ul class="nav navbar-nav">
						<li><a href="../../index.php?Module=Timeline">Timeline</a></li>
						<li><a class="col-lg-offset-2" href="../../index.php?Module=Profil">Profil</a></li>
						<li><a class="col-lg-offset-2" href="../../index.php?Module=Photo">Pictures</a></li>
						<li><a class="col-lg-offset-2" href="../../index.php?Module=Contact">Contact</a></li>
						<li><a class="col-lg-offset-2" href="../../index.php?Module=Messagerie">Messagerie</a></li>
					</ul>
				</div>
				
				<!-- Menu droite -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Notifications</a>
					</li>
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Menu principal <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../../Assets/include/notre_projet.php">Notre projet</a></li>
							<li><a href="../../Assets/include/nous_contacter.php">Nous contacter</a></li>
							<li class="divider"></li>
							<li><a href="../../Assets/include/deconnexion.php">Se déconnecter</a></li>
						</ul>
					</li>
				</ul>
				
			</div>
		</div>

		<section>
			
			<br>
			
			<div class="col-lg-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2624.779969590937!2d2.4642280000000003!3d48.862406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e612ae6a4cd20d%3A0xfe5502b116430be!2sIUT+de+Montreuil!5e0!3m2!1sfr!2sfr!4v1421012563031" width="600" height="450" frameborder="0" style="border:0"></iframe>	
			</div>
			
			<div class="col-lg-3">
				<form class="form-horizontal">
			
					<fieldset>
					
						<legend>Nos coordonnées</legend>
					
						<p>
							<strong>Ville :</strong> Montreuil<br>
							<strong>Code postal :</strong> 93310<br>
							<strong>Adresse :</strong> 140, Rue de la Nouvelle France<br>
							<strong>Etablissement :</strong> IUT de Montreuil<br>
							<strong>E-mail :</strong> wakeprojet@gmail.com<br>
							<br><br>
							<strong>Développeurs :</strong>			
						</p>
					
						<ul>			
							<li>Rocheron Victor</li>
							<li>Marteaux Alexandre</li>
							<li>Abbassat Michael</li>
						</ul><br>
					
						<p>
							<strong>Professeur référent:</strong>	
						</p>
					
						<ul>			
							<li>Bossard Aurelien</li>
						</ul>
					
					</fieldset>
				
				</form>

			</div>

		</section>

	<footer>
		<div class="col-lg-12" style="margin-top: 55px; border-top: 1px solid grey;">
			<p style="margin-top: 10px; text-align: center;">Copyright © 2015 Wake - Tous droits réservés</p>
		</div>
	</footer>

	</body>

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="../../Assets/js/bootstrap-image-gallery.js"></script>
	<!--<script src="js/demo.js"></script>-->
	<script src="../../Assets/js/ripples.min.js"></script>
	<script src="../../Assets/js/material.min.js"></script>
	<script>
		$(document).ready(function() {
			$.material.init();
		});
	</script>
</html>
     
